let jc;

$(document).on('submit', '#adminFrm', function (event) {
    event.preventDefault();

    let formdata = new FormData(this);
    $.ajax({
        type: "POST",
        url: $(this).data('action'),
        data: formdata,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (data) {
            if (data.status) {
                $.alert({
                    icon: 'fa fa-check',
                    title: 'Success!',
                    content: data.message,
                    type: 'green',
                    typeAnimated: true,
                });
                if (data.redirect != '') {
                    setTimeout(function () {
                        window.location.href = data.redirect
                    }, 1000);
                }
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
                                    setTimeout(function () { location.reload() }, 1550);

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
                                    setTimeout(function () { location.reload() }, 1550);
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
                                    setTimeout(function () { location.reload() }, 1550);

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
                                    setTimeout(function () { location.reload() }, 7000);

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
