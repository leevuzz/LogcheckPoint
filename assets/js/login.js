$(document).ready(function () {
	$('#dangnhap').click(function () {
		var taikhoan = $("#taikhoan1").val();
		var matkhau = $("#matkhau1").val();
		$.ajax({
			url: "view/ajax/login.php",
			type: "post",
			dataType: "text",
			data: {
				taikhoan: taikhoan,
				matkhau: matkhau
			},
			success: function (result) {
				$('#success').html(result);
			}
		});
	});
});