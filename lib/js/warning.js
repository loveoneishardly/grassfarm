function checknumber_binary(num){
    if (num == "") {
        return true;
    } else {
        var check_regex = /^[0-9]+(\.\d{1})?$/g;
        if (check_regex.test(num)) {
            return 1;
        } else {
            return 0;
        }
    }
    
}
function cute_alert_error(text){
    cuteAlert({
        type: "error",
        title: "Lỗi",
        message: text,
        buttonText: "Đồng ý"
    });
}

function cute_alert_info(text){
    cuteAlert({
        type: "info",
        title: "Thông báo",
        message: text,
        buttonText: "Đồng ý"
    });
}

function cute_alert_warning(text){
    cuteAlert({
        type: "warning",
        title: "Cảnh báo",
        message: text,
        buttonText: "Đồng ý"
    });
}

function cute_alert_success(text){
    cuteAlert({
        type: "success",
        title: "Thông báo",
        message: text,
        buttonText: "Đồng ý"
    });
}

function nofi_alert(message, id){
    alert(message);
    document.getElementById(id).focus();
}