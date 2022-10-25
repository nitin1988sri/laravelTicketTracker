
//  Add category ajax request
$('#submit').on('click', function (e) {
    let category_name = $('#category_name').val();
    let description = $('#description').val();
    let status = $('#status').val();
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: "/addCategory",
        type: "post",
        data: {
            '_token': _token,
            'category_name': category_name,
            'description': description,
            'status': status,
        },
        success: function (response) {
            console.log(response);
        },
    });
});


$('#uploadFile').ajaxForm({
    beforeSubmit: validate,
    beforeSend: function () {

        var percentage = '0';
    },
    uploadProgress: function (event, position, total, percentComplete) {
        var percentage = percentComplete;
        $('.progress .progress-bar').css("width", percentage + '%', function () {
            return $(this).attr("aria-valuenow", percentage) + "%";
        })
    },
    complete: function (xhr) {

     let file =new FormData();
      file.append("file",  $('#file')[0].files[0]);
        $.ajax({
            url: $('#uploadFile').attr('action'),
            type: "post",
            data: {
                '_token': $('[name="_token"]').val(),
                'file': file
            },
            contentType:false,
            cache:false,
            processData:false,

            success: function (response) {
                console.log(response)
                $('.massage').text(response.message)
                window.location.reload();
            },
            error: function(response) {
                $('.massage').text("File uploaad successfully")
                window.location.reload();
              }
        });
    }
});
function validate(formData, jqForm, options) {
    var form = jqForm[0];
    if (!form.file.value) {
        alert('File not found');
        return false;
    }
}


$('#updateLogButton').on('click', function (e) {
    let url = $('#updateLogButton').attr('url');
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: url,
        type: "post",
        data: {
            '_token': _token,
             'data': $('#updateLog').serialize()
        },
        success: function (response) {
            console.log(response);
        },
    });
});

$('#ticketInfoButton').on('click', function (e) {
    let url = $('#ticketInfoButton').attr('url');
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: url,
        type: "post",
        data: {
            '_token': _token,
             'data': $('#ticketInfo').serialize()
        },
        success: function (response) {
            if(response == '1'){
                window.location.reload();
            }
        },
    });
});

$('#ticketAdditionalInfoSave').on('click', function (e) {
    let url = $('#ticketAdditionalInfoSave').attr('url');
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: url,
        type: "post",
        data: {
            '_token': _token,
             'data': $('#ticketAdditionalInfo').serialize()
        },
        success: function (response) {
            if(response == '1'){
                window.location.reload();
            }
        },
    });
});

$('#addNewTicketBtn').on('click', function (e) {
    let url = $('#addNewTicketBtn').attr('url');
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: url,
        type: "post",
        data: {
            '_token': _token,
             'data': $('#addNewTicketFrm').serialize()
        },
        success: function (response) {
            if(response == '1'){
                window.location.reload();
            }
        },
    });
});
