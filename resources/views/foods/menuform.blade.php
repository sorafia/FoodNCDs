@extends('layouts.main')

@section('page_title', 'MenuNCDs')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
    * {
        box-sizing: border-box;
        font-size: 18px;
        font-family: "Athiti", sans-serif;
		
    }
</style>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>อาหารแนะนำ</h1>		
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<body>

		<div class="row justify-content-center">
		<div class="col-md-8 mr-auto ml-auto"><br>
			<br>
			<h2>&nbsp;<i class="fa fa-line-chart"></i>  ปริมาณสารอาหารโดยรวมจากเมนูอาหารแนะนำ :</h2>
			<hr>
		  <ul class="w3-panel w3-card-4 w3-sand ">
			<li class="w3-bar w3-hover-light-green">
			  <div class="w3-bar-item ">
				
				<p class="h4"><i class="fa fa-check-square-o"></i>&nbsp; ปริมาณโปรตีนรวม : {{$sumprotein}} กรัม</p>
			  </div>
			</li>
		
			<li class="w3-bar w3-hover-lime">
			  <div class="w3-bar-item">
				<p class="h4"><i class="fa fa-check-square-o"></i> ปริมาณคาร์โบไฮเดตรรวม : {{$sumcarb}} กรัม</p>
			</li>
		
			<li class="w3-bar w3-hover-yellow">
			  <div class="w3-bar-item">
				<span class="w3-large"><p class="h4"><i class="fa fa-check-square-o"></i> ปริมาณไขมันรวม : {{$sumlipid}} กรัม</p></span>
			  </div>
			</li>

			<li class="w3-bar w3-hover-amber">	
				<div class="w3-bar-item">
				  <span class="w3-large"><p class="h4"><i class="fa fa-check-square-o"></i> ปริมาณโซเดียมรวม : {{$sumsodium}} กรัม</p></span>
				</div>
			</li>
		  </ul>
		
		<br>
			<h2>&nbsp;<i class="fa fa-cutlery"></i>&nbsp; รายการอาหารแนะนำ :</h2>
			<hr>
		</div>
		</div>		
		</body>
	

	@foreach($menus as $menu)
	<div class="w3-container"> 
		<div class="w3-panel w3-card-4 w3-sand col-md-8 mr-auto ml-auto">
	
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<br>
							<p class="h3">ชื่ออาหาร : {{$menu->name}}</p>
							<img src="{{asset('upload/food/'. $menu->image )}}" class="img-fluid" width="340 px;" height="290 px;" alt="image" >
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 text-left">
							<div ><br>
								<p class="h3">ข้อมูลโภชนาการ</p><br>
								<p class="h4">น้ำหนัก/จาน : {{$menu->weight}} กรัม</p>
								<p class="h4">จำนวนแคลอรี่ : {{$menu->energy}} กรัม</p>
								<p class="h4">คาร์โบไฮเดรต : {{$menu->carbohydrate}} กรัม</p>
								<p class="h4">โปรตีน : {{$menu->protein}} กรัม</p>
								<p class="h4">ไขมัน : {{$menu->lipid}} กรัม</p>
								<p class="h4">โซเดียม : {{$menu->sodium}} กรัม</p>
							</div>
						</div>					
					</div>
				</div>					
							
			<br>
					
		</div>		
	</div>
		
		<!-- <center>
		<a class="btn btn-info" href="/editmenu/{{$menu->id}}"><i class="fa fa-edit" aria-hidden="true"></i> แก้ไขเมนูอาหาร</a>
		<a class="btn btn-danger" href="/deletemenu/{{$menu->id}}"><i class="fa fa-trash" aria-hidden="true"></i> ลบเมนูอาหาร</a>
		</center>
		<br> -->

	@endforeach

				<!-- <br>
				<center>
				<a class="btn btn-success" href="/menucreate"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มเมนูอาหาร</a>
                </center>
                <br> -->
				<br>
				<center>
				<a class="btn btn-warning" href="/menupage"><i class="fa fa-refresh" aria-hidden="true"></i> สุ่มเมนูอาหารใหม่</a>
                </center>
                <br>
	  
	
	<!-- End Menu -->
	
	

	@stop