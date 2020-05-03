@extends('layouts.main')

@section('page_title', 'MenuNCDs')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Suggest Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->

	@foreach($menus as $menu)
	<div class="w3-container"> 
		<div class="w3-panel w3-card-4 w3-sand">
	
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h3>ชื่ออาหาร : {{$menu->name}}</h3>
							<img src="{{asset('upload/food/'. $menu->image )}}" class="img-fluid" width="340 px;" height="290 px;" alt="image" >
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 text-left">
							<div class="inner-column">
							<h2>ข้อมูลโภชนาการ</h2>
								<h4>น้ำหนัก/จาน : {{$menu->weight}} กรัม</h4>
								<h4>จำนวนแคลอรี่ : {{$menu->energy}} Kcal</h4>
								<h4>Carbohydrate : {{$menu->carbohydrate}} Kcal</h4>
								<h4>Protein : {{$menu->protein}} Kcal</h4>
								<h4>Lipid : {{$menu->lipid}} Kcal</h4>
								<h4>Sodium : {{$menu->sodium}} Miligrams</h4>
								<a class="btn btn-warning" href="#"><i class="fa fa-check" aria-hidden="true"></i> ทานเมนูนี้</a>
							</div>
						</div>					
					</div>
				</div>					
							
			<br>
					
		</div>		
	</div>
		
		<center>
		<a class="btn btn-info" href="/editmenu/{{$menu->id}}"><i class="fa fa-edit" aria-hidden="true"></i> แก้ไขเมนูอาหาร</a>
		<a class="btn btn-danger" href="/deletemenu/{{$menu->id}}"><i class="fa fa-trash" aria-hidden="true"></i> ลบเมนูอาหาร</a>
		</center>
		<br>

	@endforeach

				<br>
				<center>
				<a class="btn btn-success" href="/menucreate"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มเมนูอาหาร</a>
                </center>
                <br>
	  
	
	<!-- End Menu -->
	
	

	@stop