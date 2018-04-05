<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>EI2405 Checkpoint UNI</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap.css"); ?>'/>
	<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap-theme.css"); ?>'/>

	<!-- Font Awesome -->
	<link rel="stylesheet" href='<?php echo base_url("assets/css/font-awesome.css"); ?>'/>
	
	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	
	<!-- Date picker -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


	<!-- My Js -->
	<script src="<?php echo base_url('assets/js/logFile.js'); ?>"></script>
	
	<!-- My css -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/admin01.css'); ?>"/>
</head>

<!-- <HEADER> -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<!-- Logo -->
					<div class="logo text-center">
						<h1 style="margin-left: 200px;"><a href="">Application Read LogFile Checkpoint </a></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->

<!-- Form F100 -->
<div class="w3-display-left w3-padding w3-col l6 m8" id="w3-display-left">
	<div class="w3-container w3-red" id="w3-black">
		<h2><i class="fa fa-bed w3-margin-right"></i>Form F100</h2>
	</div>
	<div class="w3-container w3-white w3-padding-16">
		<form action="#" id="locDB">
			<div class="w3-row-padding" style="margin:0 -16px;">
				<div class="w3-half w3-margin-bottom">
					<label><i class="fa fa-calendar-o"></i> Start Date</label>
					<input class="w3-input w3-border" id="start_date"  type="text" placeholder="DD MM YYYY" name="start_date"  required>
				</div>
				<div class="w3-half">
					<label><i class="fa fa-calendar-o"></i> End Date</label>
					<input class="w3-input w3-border" id="end_date" type="text" placeholder="DD MM YYYY" name="end_date"  required>
				</div>
			</div>
			<div class="w3-row-padding" style="margin:8px -16px;">
				<div class="w3-half w3-margin-bottom">
					<label><i class="fa fa-male"></i> Server</label>
					<select name="name_server" class="form-control" style="text-align: center;" required>
						<option value="">-- Select Server --</option>
						<?php 
						if(isset($ds_server)){
							foreach ($ds_server as $ds) 
							{
									# code...
								echo '<option value="' . $ds->name_folder . '">' . $ds->name_folder . '</option>';
							}
						}
						?>
					</select>
				</div>
				<div class="w3-half">
					<button type="button" class="w3-button w3-dark-grey" id="w3-dark-grey" onclick="checkdate(); " ><i class="fa fa-search w3-margin-right"></i> Search availability</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Form -->

<!-- Show Data -->

<table class="table table-condensed table-hover datatable-responsive">
	<thead>
		<tr>
			<th>STT</th>
			<th>time1</th>
			<th>timestamp1</th>
			<th>colum1</th>
			<th>user_id</th>
			<th>user_name</th>
			<th>begin1</th>
			<th>infor</th>
			<th>infor2</th>
			<th>ip</th>
			<th>url</th>
			<th>agent</th>
			<th>loai_action</th>
			<th>system_name</th>
		</tr>
	</thead>
	<tbody id="showdata">
		
	</tbody>
</table>

<!-- Form Show Db -->
<table class="table table-bordered">
	<caption style="font-size: 40px; color:  #2c3742">Form Show DB</caption>
	<thead style="background-color: #2c3742;color:#fff ">
		<tr id="date_show">
			<th style="width: 50px;"  rowspan="2">Code</th>
			<th style="width: 150px;"></th>
			<th style="width: 100px;"></th>
			<th style="width: 250px;">Ngày</th>
			
		</tr>
		<tr>
			<th>Các chỉ số</th>
			<th>Mã chỉ số</th>
			<th></th>
			<?php 
			for($i = 0;$i<7;$i++){
				echo '<th>Wed</th>';
			}
			?>
		</tr>
	</thead>
	<?php 

	if(isset($load_action)){
		foreach ($load_action as $key) {
		# code...
			echo '<tbody>	
			<tr>
			<td rowspan="5" style="background-color: #2c3742;color:#fff;text-align: center;padding-top: 70px;">'.$key->code1.'</td>
			<td rowspan="5" style="padding-top: 70px;">'.$key->cac_chiso.'</td>
			<td rowspan="5" style="padding-top: 70px;">'.$key->ma_chiso.'</td>
			<td>1. Tỉ lệ thành công là bao  %</td>';
			for($j=0;$j<7;$j++){
				echo '<td>w1</td>';
			}
			echo '</tr>
			<tr>
			<td>2. Thời gian trung bình là bao nhiêu giây</td>';
			for($j=0;$j<7;$j++){
				echo '<td>w2</td>';
			}
			echo '</tr>
			<tr>

			<td>3. Thời gian từ 0 - 5s là bao %</td>';
			for($j=0;$j<7;$j++){
				echo '<td>w3</td>';
			}
			echo '</tr>
			<tr>
			<td>4. Thời gian từ 5 - 10s là bao %</td>';
			for($j=0;$j<7;$j++){
				echo '<td>w4</td>';
			}
			echo '</tr>
			<tr>
			<td>5. Thời gian > 10s là bao %</td>';
			for($j=0;$j<7;$j++){
				echo '<td>w5</td>';
			}
			echo '</tr>
			</tbody>';
		}
	}
	?>
</table>
<!-- End Form -->


<!-- Footer -->
<footer>
	<div class="copy text-center">
		@Copyright 2017 
		<a href = "<?php echo base_url('/login/logout_user') ?>"> Log out</a>
	</div>
</footer>
<!-- End Footer -->

<script  type="text/javascript" >

	function get_Data()
	{

		$.ajax ({
			url: "<?php echo site_url('/show_data/ajax_get_data') ?>",
			type: "POST",
			data: $('#locDB').serialize(),
			dataType: "JSON",
			success: function (data) {
				var str = "";
				for(var i = 0; i < data.length; i++){
					str += "<tr>";
					str += "<td>"+data[i].id+"</td>";
					str += "<td>"+data[i].time1+"</td>";
					str += "<td>"+data[i].timestamp1+"</td>";
					str += "<td>"+data[i].colum1+"</td>";
					str += "<td>"+data[i].user_id+"</td>";
					str += "<td>"+data[i].user_name+"</td>";
					str += "<td>"+data[i].begin1+"</td>";
					str += "<td>"+data[i].infor+"</td>";
					str += "<td>"+data[i].infor2+"</td>";
					str += "<td>"+data[i].ip+"</td>";
					str += "<td>"+data[i].url+"</td>";
					str += "<td>"+data[i].agent+"</td>";
					str += "<td>"+data[i].loai_action+"</td>";
					str += "<td>"+data[i].system_name+"</td>";
					str += "</tr>";
				}
				document.getElementById("showdata").innerHTML = str;
			},
			error: function(jqXHR, textStatus, errorThrown) {
				/* Act on the event */
				alert('Error get data from ajax');
			}
		});
	}

	var name_server = "";
	var time1 = "";
	var loai_action = "";
	function get_date()
	{
		$.ajax ({
			url: "<?php echo site_url('/show_data/ajax_get_date') ?>",
			type: "POST",
			data: $('#locDB').serialize(),
			dataType: "JSON",
			success: function (data) {
				
				for(var i =0;i<data.length;i++){
					var th = document.createElement("th");
					th.innerHTML =  data[i].time1;
					document.getElementById("date_show").appendChild(th);
					name_server = data[i].system_name;
					time1 = data[i].time1;
					loai_action = data[i].loai_action;
					alert(name_server);

				}

				// document.getElementById("date_show").innerHTML = th1;
			},
			error: function(jqXHR, textStatus, errorThrown) {
				/* Act on the event */
				alert('Error get data from ajax');
			}
		});

		alert("1");
		alert(name_server);
		$.ajax ({

			url: "<?php echo site_url('/show_data/ajax_count_begin') ?>"+name_server+"/"+time1+"/"+loai_action,
			type: "GET",
			data: $('#locDB').serialize(),
			dataType: "JSON",
			success: function(data){

				alert('a');
			},
			error: function(jqXHR, textStatus, errorThrown) {
				/* Act on the event */
				alert('Error get data from ajax');
			}
		});
	}


	function checkdate(){

		var startDate = $("#start_date").datepicker("getDate");
		var endDate = $("#end_date").datepicker("getDate");

		if(startDate.getMonth() > endDate.getMonth())
		{
			alert(" Vui lòng chọn tháng bắt đầu nhỏ hơn tháng kết thúc .");
			location.reload();
		}
		else if(startDate.getMonth() == endDate.getMonth())
		{
			var quantity_day = endDate.getDate() - startDate.getDate() + 1;

			if(quantity_day < 9 && quantity_day > 0)
			{
				get_Data();
				get_date();
			}
			else
			{
				alert("Vui lòng chọn trong vòng 7 ngày ");
				location.reload();
			}

		}
		else if(startDate.getMonth() < endDate.getMonth())
		{
			var date1 = 31 - startDate.getDate() + 1;
			var quantity_day = date1 + endDate.getDate();
			if(quantity_day < 9 && quantity_day > 0)
			{
				get_Data();
				get_date();
			}
			else
			{
				alert("Vui lòng chọn trong vòng 7 ngày ");
				location.reload();
			}
		}
	}
</script>
</body>
</html>