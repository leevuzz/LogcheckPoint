$(document).ready(function () {
    var mamau = "";
    var mabonho = "";
    var masp = $('#masanpham').val();
    $("#mamau").change(function () {
        mamau = $("#mamau").val();
        mabonho = $("#mabonho").val();
        $('#giasanpham').html('');
        $.ajax({
            url: "view/ajax/data3.php",
            type: "post",
            dataType: "text",
            data: {
                mamau: mamau,
                mabonho: mabonho,
                masp: masp
            },
            success: function (result) {
                $('#giasanpham').html(result);
            }
        });
    });
    $("#mabonho").change(function () {
        mamau = $("#mamau").val();
        mabonho = $("#mabonho").val();
        $('#giasanpham').html('');
        $.ajax({
            url: "view/ajax/data3.php",
            type: "post",
            dataType: "text",
            data: {
                mamau: mamau,
                mabonho: mabonho,
                masp: masp
            },
            success: function (result) {
                $('#giasanpham').html(result);
            }
        });
    });
});