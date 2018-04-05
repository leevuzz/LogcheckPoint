$(document).ready(function () {
    $('#gui_machitiet').click(function () {
        var machitiet = $('#machitiet').val();
        alert("12");
        $.ajax({
            url: "view/giohang.php";
            type: "get",
            data: machitiet
        });   
    });  
});