@extends('layouts.app')
@section('content')
<section class="login common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block bg-white">
                            <form class="md-float-material" method="POST" action="{{ route('register') }}">
                              @csrf
								<div class="text-center">
									<img src="assets/images/logo-black.png" alt="logo">
								</div>
								<h3 class="text-center txt-primary">Create an account </h3>
								<div class="row">
										<div class="md-input-wrapper">
                                        <input id="name" type="text" class="md-form-control form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
											<label>First Name</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
										</div>	
								<div class="md-input-wrapper">
                                    <input id="email" type="email" class="md-form-control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label>Email Address</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="md-input-wrapper">
                                <input id="password" type="password" class="md-form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									<label>Password</label>
								</div>
								<div class="md-input-wrapper">
                                    <input id="password" type="password" class="md-form-control" name="password_confirmation" required autocomplete="new-password">
									<label>Confirm Password</label>
								</div>
								<div class="col-xs-10 offset-xs-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
								</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<span class="text-muted">Already have an account?</span>
										<a href="login1.html" class="f-w-600 p-l-5"> Sign In Here</a>
									</div>
								</div>
							</form>
							<!-- end of form -->
						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>
@endsection
