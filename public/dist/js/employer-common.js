function getEmployees(target, url) {
    var form_data = $('#filter_form').serialize();
    $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        cache: false,
        data: form_data,
        success: function (data) {
            if (data.status == 200) {
                $(target).html(data.content);
            }
        }
    });
}

function callGetEmployees() {
    var target = $('.nav-tabs .active').data('bs-target');
    var url = $('.nav-tabs .active').data('url');
    getEmployees(target, url);
}

$(document).on('click', '.nav-link', function (e) {
    var target = $(this).data('bs-target');
    var url = $(this).data('url');
    getEmployees(target, url);
});

$(document).on('keyup', '#search_keyword', function (e) {
    if ($(this).val().length > 2 || $(this).val().length == 0) {
        callGetEmployees();
    }
});

// ajax pagination
$(document).on('click', '.ajax-pagination-employee-div .pagination a', function (e) {
    e.preventDefault();
    var page_number = $(this).attr('href').split('page=')[1];
    $('#filter_page').val(page_number);
    callGetEmployees();
});

// START message check-uncheck and send message js
$(document).on('change', '#all_id_chk', function () {
    var individual_chk_box = $('.id_chk');
    var all_id_checked = $(this).is(":checked");
    $('#selected_ids').val('');
    for (chk_box of individual_chk_box) {
        var current_id = chk_box.attributes['data-value'].value;
        var is_checked = chk_box.checked;
        changeSelectedId(current_id, all_id_checked);
        if (all_id_checked && !is_checked) {
            chk_box.checked = true;
        }
        if (!all_id_checked && is_checked) {
            chk_box.checked = false;
        }
    }
});
$(document).on('change', '.id_chk', function () {
    var chk_box = $(this);
    var current_id = chk_box.data('value');
    var is_checked = chk_box.is(":checked");
    changeSelectedId(current_id, is_checked);
});

function changeSelectedId(current_id, is_checked) {
    var current_id = parseInt(current_id);
    var selected_ids = $('#selected_ids').val();
    if (selected_ids !== '') {
        selected_ids = JSON.parse(selected_ids);
    } else {
        selected_ids = [];
    }

    const index = selected_ids.indexOf(current_id);
    if (is_checked) {
        if (index == -1) {
            selected_ids.push(current_id);
        }
    } else {
        if (index > -1) {
            selected_ids.splice(index, 1); // 2nd parameter means remove one item only
        }
    }

    $('#selected_ids').val(JSON.stringify(selected_ids));
}
$(document).on('click', '.snd-btnn', function () {
    var selected_ids = $('#selected_ids').val();
    var message = $('#message').val();
    var url = $(this).data('url');
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        cache: false,
        data: {
            '_token': _token,
            'selected_ids': selected_ids,
            'message': message
        },
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
            }
        }
    });
});
// END message check-uncheck and send message js

$(document).on('change', '.employee-manager-verification', function () {
    var url = $(this).data('url');
    var id = $(this).data('id');
    var is_verified = $(this).is(':checked') ? 1 : 0;
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        cache: false,
        data: {
            '_token': _token,
            'id': id,
            'is_verified': is_verified
        },
        success: function (data) {
            if (data.status) {
                $.alert({
                    icon: 'fa fa-check',
                    title: 'Success!',
                    content: data.message,
                    type: 'green',
                    typeAnimated: true,
                });
            }
        }
    });
})
