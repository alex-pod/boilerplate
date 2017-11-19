function notice(msg) {
    $('#notice').html(msg).fadeIn('fast', function () {
        var obj = this;
        setTimeout(function () {
            $(obj).fadeOut();
        }, 3000);
    });
}

function notice_danger(msg) {
    notice('<div class="alert alert-danger">' + msg + '</div>');
}

function notice_warning(msg) {
    notice('<div class="alert alert-warning">' + msg + '</div>');
}

function notice_success(msg) {
    notice('<div class="alert alert-success">' + msg + '</div>');
}

function notice_info(msg) {
    notice('<div class="alert alert-info">' + msg + '</div>');
}