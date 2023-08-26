let jc;

function ajaxCall(thisVal, successCb = null) {

    let formdata = new FormData(thisVal);
    $.ajax({
        type: "POST",
        url: $(thisVal).attr('action'),
        data: formdata,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (data) {
            if (data.status) {
                if (data.message != '') {
                    $.alert({
                        icon: 'fa fa-check',
                        title: 'Success!',
                        content: data.message,
                        type: 'green',
                        typeAnimated: true,
                    });
                }
                if (data.redirect != '') {
                    setTimeout(function () {
                        window.location.href = data.redirect
                    }, 1000);
                }
                successCb && successCb(data.content);
            } else {
                $.alert({
                    icon: 'fa fa-warning',
                    title: 'Warning!',
                    content: data.message,
                    type: 'orange',
                    typeAnimated: true,
                });
            }
        }
    });
}

function onSubmitModalSuccess() {
    $('.modal').modal('hide');
};

$(document).on('submit', '#adminFrm', function (event) {
    event.preventDefault();
    ajaxCall(this);
});




$(document).on('submit', '#businessRatingFrm', function (event) {
    event.preventDefault();
    ajaxCall(this, onSubmitBusinessRatingsFrm);
});

function onSubmitBusinessRatingsFrm(content) {
    onSubmitModalSuccess();
    $('#load_employer_rating').html(content);
}

$(document).on('submit', '#businessQuestionFrm', function (event) {
    event.preventDefault();
    ajaxCall(this, onSubmitBusinessQuestionFrm);
});

function onSubmitBusinessQuestionFrm(content) {
    onSubmitModalSuccess();
    $('#load_employer_qesution').html(content);
}

$(document).on('submit', '#employerimportdata', function (event) {
    $("#employersimport").hide();
    event.preventDefault();
    ajaxCall(this);

});
$(document).on('submit', '#employerexportdata', function () {
    location.reload();
});





$(document).on('click', '.change-status', function () {
    var id = $(this).data('id');
    var keyId = $(this).data('key');
    var table = $(this).data('table');
    var status = $(this).data('status');
    var url = $(this).data('action');

    var dataJSON = {
        id: id,
        keyId: keyId,
        table: table,
        status: status,
        _token: _token
    };
    $.confirm({
        icon: 'fa fa-spinner fa-spin',
        title: 'Confirm!',
        content: 'Do you really want to do this ?',
        type: 'orange',
        typeAnimated: true,
        buttons: {
            confirm: function () {
                if (id && table) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: dataJSON,
                        dataType: "JSON",
                        success: function (data) {
                            if (data.status) {
                                if (data.postStatus == '2') {
                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success!',
                                        content: 'Data has been deleted !',
                                        type: 'green',
                                        typeAnimated: true,
                                    });
                                    setTimeout(function () {
                                        location.reload()
                                    }, 1550);

                                } else if (data.postStatus == '1') {
                                    $('#' + id).removeClass('badge-danger');
                                    $('#' + id).addClass('badge-primary');
                                    $('#' + id).html('Active');
                                    $('#' + id).data('status', '0');
                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success!',
                                        content: data.message,
                                        type: 'green',
                                        typeAnimated: true,
                                    });
                                    setTimeout(function () {
                                        location.reload()
                                    }, 1550);
                                } else if (data.postStatus == '0') {

                                    $('#' + id).removeClass('badge-primary');
                                    $('#' + id).addClass('badge-danger');
                                    $('#' + id).html('Inactive');
                                    $('#' + id).data('status', '1');

                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success!',
                                        content: data.message,
                                        type: 'green',
                                        typeAnimated: true,
                                    });
                                    setTimeout(function () {
                                        location.reload()
                                    }, 1550);

                                } else if (data.postStatus == '5') {

                                    $('#' + id).removeClass('badge-primary');
                                    $('#' + id).addClass('badge-danger');
                                    $('#' + id).html('Inactive');
                                    $('#' + id).data('status', '1');

                                    $.alert({
                                        icon: 'fa fa-close',
                                        title: 'Warning !',
                                        content: data.message,
                                        type: 'orange',
                                        typeAnimated: true,
                                    });
                                    setTimeout(function () {
                                        location.reload()
                                    }, 7000);

                                }

                            }
                        }
                    });
                }
            },
            cancel: function () {
                $.alert({
                    icon: 'fa fa-times',
                    title: 'Canceled!',
                    content: 'Process canceled',
                    type: 'purple',
                    typeAnimated: true,
                });
            }
        }
    });
});

$(document).on('click', '.change-approval', function () {
    var id = $(this).data('id');
    var keyId = $(this).data('key');
    var table = $(this).data('table');
    var approval = $(this).data('approval');
    var dataJSON = {
        id: id,
        keyId: keyId,
        table: table,
        approval: approval,
        _token: _token
    };
    $.confirm({
        icon: 'fa fa-spinner fa-spin',
        title: 'Confirm!',
        content: 'Do you really want to do this ?',
        type: 'orange',
        typeAnimated: true,
        buttons: {
            confirm: function () {

                if (id && table) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "generic-approval-change",
                        data: dataJSON,
                        dataType: "JSON",
                        success: function (data) {
                            if (data.status) {
                                if (data.postApproval == '1') {
                                    $('#' + id).removeClass('badge-danger');
                                    $('#' + id).addClass('badge-primary');
                                    $('#' + id).html('Approved');
                                    $('#' + id).data('approval', '0');
                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success!',
                                        content: data.message,
                                        type: 'green',
                                        typeAnimated: true,
                                    });
                                } else {
                                    $('#' + id).removeClass('badge-primary');
                                    $('#' + id).addClass('badge-danger');
                                    $('#' + id).html('Unapproved');
                                    $('#' + id).data('approval', '1');

                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success!',
                                        content: data.message,
                                        type: 'green',
                                        typeAnimated: true,
                                    });
                                }
                            }
                        }
                    });
                }
            },
            cancel: function () {
                $.alert({
                    icon: 'fa fa-times',
                    title: 'Canceled!',
                    content: 'Process canceled',
                    type: 'purple',
                    typeAnimated: true,
                });
            }
        }
    });
});

$(document).on('keyup', '.searchBtn', function (e) {
    e.preventDefault();
    var keyId = $(this).data('key');
    var table = $(this).data('table');
    var searchValue = $(this).val();
    var url = $(this).data('action');

    var dataJSON = {
        keyId: keyId,
        table: table,
        searchValue: searchValue,
        _token: _token
    };

    $.ajax({
        type: "POST",
        url: url,
        data: dataJSON,
        dataType: "html",
        success: function (data) {
            $("#filterBody").html(data);
        }
    });


});

$(document).on('keyup', '.custSearchBtn', function (e) {
    e.preventDefault();
    // var keyId = $(this).data('key');
    // var table = $(this).data('table');
    // var searchValue = $(this).val();
    var url = $(this).data('action');

    var dataJSON = {
        keyId: keyId,
        table: table,
        searchValue: searchValue,
        _token: _token
    };

    $.ajax({
        type: "POST",
        url: url,
        data: dataJSON,
        dataType: "html",
        success: function (data) {
            $("#filterBody").html(data);
        }
    });


});

$(document).on('change', '.country', function () {
    var country_id = $(this).find(":selected").val();
    var url = $(this).data('url');

    var dataJSON = {
        country_id: country_id,
        _token: _token
    };

    $.ajax({
        type: "POST",
        url: url,
        data: dataJSON,
        dataType: "json",
        success: function (data) {
            $(".city").html(data.cities);
        }
    });
})

// filter-ajax
$(document).on('keyup', '#filter_form input', function (e) {
    if ($(this).val().length > 2 || $(this).val().length == 0) {
        $('#filter_page').val(0);
        $('#filter_form').trigger('submit');
    }
});
$(document).on('click', '#filter_form #filter_btn', function () {
    $('#filter_form').trigger('submit');
});



$(document).on('submit', '#filter_form', function (e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    var form_url = $(this).attr('action');
    var $this = $(this);
    $.ajax({
        type: "GET",
        url: form_url,
        dataType: 'json',
        cache: false,
        data: form_data,

        success: function (data) {
            if (data.status == 200) {
                $('#load_content').html(data.content);
            } else {
                toastr.error(data.message);
            }
        },
        error: function () {
            toastr.error('Something went wrong');
        }
    });
});

// ajax pagination
$(document).on('click', '.ajax-pagination-div .pagination a', function (e) {
    e.preventDefault();
    var page_number = $(this).attr('href').split('page=')[1];
    $('#filter_page').val(page_number);
    $('#filter_form').trigger('submit');
});

$(document).on('click', '.hide-modal', function () {
    var target = $(this).data('target');
    $(target).modal('hide');
})

$(document).ready(function () {
    $('.float-number').keypress(function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                .which > 57)) {
            event.preventDefault();
        }
    });
});
