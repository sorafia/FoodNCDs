@extends('layouts.main')

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
					<h1>ข้อมูลผู้ใช้งาน</h1>
				</div>
			</div>
		</div>
	</div>
    <!-- End All Pages -->
    
      
        <!-- Start Profile -->
    
      
        <div class="row justify-content-center">
			<div class="col-md-8 mr-auto ml-auto">

                <br>
                <h3><i class="fa fa-user"></i>  ชื่อ - นามสกุล : เจสัน สมิท</h3>
                <hr>

                <div class="w3-card-4">
                   
                    <div class="w3-container">
                        <br>
                            <header class="w3-container w3-lime">
                                <h3><i class="fa fa-line-chart"></i> ปริมาณแคลอรี่ที่เหมาะสม/วัน : 2100 กิโลแคลอรี่</h3>
                            </header>
                        <br>
                            <p>เพศ : ชาย</p>
                            <p>อายุ : 36 ปี</p>
                            <p>น้ำหนัก : 65 กิโลกรัม</p>
                            <p>ส่วนสูง : 183 เซนติเมตร</p>
                    
                        <hr>
                            <header class="w3-container w3-khaki">
                                <h3><i class="fa fa-plus-square"></i> โรคประจำตัวผู้ป่วย : </h3>
                            </header>
                        <br>
                             <p>โรคเบาหวาน</p>
                            <p>โรคหัวใจ</p> 
                    
                        <hr>
                            <header class="w3-container w3-amber">
                                 <h3><i class="fa fa-exclamation-triangle"></i> การแพ้อาหาร : </h3>
                            </header>
                         <br>
                            <p>ถั่ว</p>
                            <p>ปู</p>

                        </div>
   
                        <button class="w3-button w3-block w3-dark-grey" href="#"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</button>
                        
                </div>
                <br>

            </div>
        </div>
	

 <!-- End Profile -->

@stop