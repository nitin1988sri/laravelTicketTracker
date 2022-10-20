#!/bin/bash

# By: https://github.com/zheltikov
# Based on: http://blog.programster.org/ubuntu16-04-compile-php-7-2-with-pthreads
# Used in: https://www.youtube.com/watch?v=L_FdpmJatdw


# Download the necessary packages
sudo apt update
sudo apt install libzip-dev bison autoconf build-essential pkg-config git-core libltdl-dev libbz2-dev libxml2-dev libxslt1-dev libssl-dev libicu-dev libpspell-dev libenchant-dev libmcrypt-dev libpng-dev libjpeg8-dev libfreetype6-dev libmysqlclient-dev libreadline-dev libcurl4-openssl-dev 

# Download the PHP source code and extract it
cd $HOME
wget https://github.com/php/php-src/archive/php-7.2.2.tar.gz
tar --extract --gzip --file php-7.2.2.tar.gz

# Build the configuration
cd $HOME/php-src-php-7.2.2
./buildconf --force

CONFIGURE_STRING="--prefix=/etc/php/7.2-zts --with-bz2 --with-zlib --enable-zip --disable-cgi --enable-soap --enable-intl --with-openssl --with-readline --with-curl --enable-ftp --enable-mysqlnd --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd --enable-sockets --enable-pcntl --with-pspell --with-enchant --with-gettext --with-gd --enable-exif --with-jpeg-dir --with-png-dir --with-freetype-dir --with-xsl --enable-bcmath --enable-mbstring --enable-calendar --enable-simplexml --enable-json --enable-hash --enable-session --enable-xml --enable-wddx --enable-opcache --with-pcre-regex --with-config-file-path=/etc/php/7.2-zts/cli --with-config-file-scan-dir=/etc/php/7.2-zts/etc --enable-cli --enable-maintainer-zts --with-tsrm-pthreads --enable-debug --enable-fpm --with-fpm-user=www-data --with-fpm-group=www-data"

./configure $CONFIGURE_STRING

# Build PHP
make
sudo make install

# make the phpize and php-config programs executable
sudo chmod o+x /etc/php/7.2-zts/bin/phpize
sudo chmod o+x /etc/php/7.2-zts/bin/php-config

# Download the pthreads source code
git clone https://github.com/krakjoe/pthreads.git

# Run phpize on pthreads
cd pthreads
/etc/php/7.2-zts/bin/phpize

# Set configuration options for pthreads
./configure --prefix='/etc/php/7.2-zts' --with-libdir='/lib/x86_64-linux-gnu' --enable-pthreads=shared --with-php-config='/etc/php/7.2-zts/bin/php-config'

# Build and install the extension
make
sudo make install

# Now create the php ini file
cd $HOME/php-src-php-7.2.2
sudo mkdir -p /etc/php/7.2-zts/cli/
sudo cp php.ini-production /etc/php/7.2-zts/cli/php.ini

# Add the pthreads extension to the ini file
echo "extension=pthreads.so" | sudo tee -a /etc/php/7.2-zts/cli/php.ini
echo "zend_extension=opcache.so" | sudo tee -a /etc/php/7.2-zts/cli/php.ini

# Link to our compiled PHP binary
sudo ln -s /etc/php/7.2-zts/bin/php /usr/bin/php-zts
sudo ln -s /etc/php/7.2-zts/bin/php /usr/bin/php7.2-zts

# Check which version of PHP we have built
php-zts --version