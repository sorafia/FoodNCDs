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
                <h3><i class="fa fa-user"></i>  ชื่อ - นามสกุล : {{ $profile->firstname }} {{ $profile->lastname }}</h3>
                <hr>

                <div class="w3-card-4">
                   
                    <div class="w3-container">
                        <br>
                            <header class="w3-container w3-lime">
                                <h3><i class="fa fa-line-chart"></i> ปริมาณแคลอรี่ที่เหมาะสม/วัน : 2100 กิโลแคลอรี่</h3>
                            </header>
                        <br>
                            <p>เพศ : {{ $profile->gender->name }}</p>
                            <p>อายุ : {{ $profile->age }} ปี</p>
                            <p>น้ำหนัก : {{ $profile->weight }} กิโลกรัม</p>
                            <p>ส่วนสูง : {{ $profile->height }} เซนติเมตร</p>
                    
                        <hr>
                            <header class="w3-container w3-khaki">
                                <h3><i class="fa fa-plus-square"></i> โรคประจำตัวผู้ป่วย : </h3>
                            </header>
                        <br>
                             @unless($profile->ncds->isEmpty())
                                    <div>
                                        @foreach($profile->ncds as $ncd)
                                            {{--<span class="label label-default"> {{ $ncd->name }} </span> &nbsp--}}
                                            <p> {{ $ncd->name }} <p>
                                        @endforeach
                                    </div>
                                @endunless
                             
                    
                        <hr>
                            <header class="w3-container w3-amber">
                                 <h3><i class="fa fa-exclamation-triangle"></i> การแพ้อาหาร : </h3>
                            </header>
                         <br>
                            @unless($profile->fooballergies->isEmpty())
                                            <div>
                                                @foreach($profile->foodallergies as $foodallergy)                                                    
                                                    <p> {{ $foodallergy->name }} <p>
                                                @endforeach
                                            </div>
                                        @endunless
                            <p>กุ้ง</p>

                        </div>
   
                        <a class="w3-button w3-block w3-dark-grey" href="{{ URL::to('profile/{id}/edit') }}"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
                        
                </div>
                <br>
                <!-- <div class="col-xs-12 col-md-6 col-lg-6">
                        <a href="{{ URL('/profile/create') }}" class="btn btn-default pull-right" style = "margin-top: 30px;"><i class="fa fa-plus"></i> Create Blog</a>
                    </div> -->

            </div>
        </div>
	

 <!-- End Profile -->

@stop