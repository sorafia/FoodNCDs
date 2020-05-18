<?php
 
$dataPoints = array( 
	array("label"=>"Carbs", "y"=> 278),
	array("label"=>"Protein", "y"=> 278),
	array("label"=>"Fat", "y"=> 124)
)
 
?>
@extends('layouts.main')

@section('page_title', 'FoodNCDs')

<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "ปริมาณสารอาหารที่ควรได้รับ"
	},
	subtitles: [{
		text: "วันที่ {{ date('d-m-y') }}"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.0\"g\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

@section('content')
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-04.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>อาหารแนะนำ <br> สำหรับผู้ป่วยในกลุ่มโรค NCDs </strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs </p>
							<!-- <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ URL('/menupage') }}">อาหารแนะนำ</a></p> -->
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>Recommended food <br> for  NCDs patients</strong></h1>
							<p class="m-b-40">Web application for Recommended food for  NCDs patients</p>
							<!-- <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ URL('/menupage') }}">Recommended food</a></p> -->
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-05.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>อาหารแนะนำ <br> สำหรับผู้ป่วยในกลุ่มโรค NCDs </strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs </p>
							<!-- <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ URL('/menupage') }}">อาหารแนะนำ</a></p> -->
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="chartContainer" style="height: 370px; width: 100%;"></div>
					<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1><span>แคลอรี</span>ประจำวัน</h1>
						<h4>Little Story</h4>
						<div class="progress">
							<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="7.02" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="lead ">
							ไขมัน
						</p>
						<div class="progress">
							<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="7.63" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="lead ">
							โปรตีน
						</p>
						<div class="progress">
							<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="7.63" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="lead ">
							คาร์โบไฮเดรต
						</p>
						<div class="progress">
							<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="lead ">
							แคลอรี 2000 กิโลแคลอรี
						</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">คำนวณแคลอรี่</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>เมนูอาหารแนะนำ</h2>
						<p style="font-size: 18px;">อาหารที่เหมาะสมกับคุณค่าทางโภชนาการและโรคประจำตัวของคุณ</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*"style="font-size: 18px;" >เมนูทั้งหมด</button>
							<button data-filter=".breakfast" style="font-size: 18px;">อาหารเช้า</button>
							<button data-filter=".lunch" style="font-size: 18px;">อาหารกลางวัน</button>
							<button data-filter=".dinner" style="font-size: 18px;">อาหารเย็น</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดต้มจืดเต้าหู้หมูสับ</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม) &nbsp; 473.0</h3>
							<h3> พลังงาน (kcal)   &nbsp; 263.0</h3>
							<h3> โปรตีน (กรัม)      &nbsp; 21.2</h3>
							<h3> ไขมัน (กรัม)     &nbsp;   8.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;25.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดไข่เจียวสมุนไพร</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   276.0</h3>
							<h3> พลังงาน (kcal)     579.0</h3>
							<h3> โปรตีน (กรัม)       14.0</h3>
							<h3> ไขมัน (กรัม)        27.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 68.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดแกงส้มชะอมทอด</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   370.0</h3>
							<h3> พลังงาน (kcal)     397.0</h3>
							<h3> โปรตีน (กรัม)       13.9</h3>
							<h3> ไขมัน (กรัม)        12.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 56.6</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดผัดผักรวม</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   282.0</h3>
							<h3> พลังงาน (kcal)     332.0</h3>
							<h3> โปรตีน (กรัม)       8.8</h3>
							<h3> ไขมัน (กรัม)        5.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 60.9</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดยำไข่ดาว</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   366.0</h3>
							<h3> พลังงาน (kcal)     638.0</h3>
							<h3> โปรตีน (กรัม)       19.9</h3>
							<h3> ไขมัน (กรัม)        28.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 75.3</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>น้ำพริกกะปิ+ปลาทูทอด+ชะอมชุบไข่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   331.0</h3>
							<h3> พลังงาน (kcal)     386.0</h3>
							<h3> โปรตีน (กรัม)       32.8</h3>
							<h3> ไขมัน (กรัม)        24.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 8.5</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ก๋วยเตี๋ยวเส้นหมี่เนื้อรวมน้ำตก</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   365.0</h3>
							<h3> พลังงาน (kcal)     233.0</h3>
							<h3> โปรตีน (กรัม)       19.1</h3>
							<h3> ไขมัน (กรัม)        2.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 334.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>กระเพาะปลาเส้นหมี่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   412.0</h3>
							<h3> พลังงาน (kcal)     246.0</h3>
							<h3> โปรตีน (กรัม)       15.5</h3>
							<h3> ไขมัน (กรัม)        3.1</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 39.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>สุกี้รวมมิตร แห้ง</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   384.0</h3>
							<h3> พลังงาน (kcal)     399.0</h3>
							<h3> โปรตีน (กรัม)       21.9</h3>
							<h3> ไขมัน (กรัม)        17.0</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 39.4</h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
@stop
