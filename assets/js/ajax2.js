$(document).ready(function () {
    $('#binhluan').click(function () {
        var matv = $("input[name='matv']").val();
        var masp = $("input[name='masp']").val();
        var noidungbl = $("#noidungbl").val();
        if (noidungbl == '') {
            $('.errorBL').html('Nội dung bình luận không được để trống');
            return false;
        }
        $.ajax({
            url: "view/ajax/data2.php",
            type: "post",
            dataType: "text",
            data: {
                matv: matv,
                masp: masp,
                noidungbl: noidungbl
            },
            success: function (result) {
                $('.errorBL').html(result);
            }
        });
    });
});