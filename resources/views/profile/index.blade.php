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
    
        <div class="raw">
			    <div class="row page-header">
			        <div class="col-xs-12 col-md-6 col-lg-6">
				        <h1 style = "margin-top: 30px;"> Profile(สำหรับ ADMIN) </h1>
			        </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <a href="{{ URL('/profile/create') }}" class="btn btn-default pull-right" style = "margin-top: 30px;"><i class="fa fa-plus"></i> Create Profile</a>
                    </div>
			    </div>
			     <!-- /.row -->
			 
                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    
                    @foreach($profile as $key => $value)

                <div class="row justify-content-center">
                    <div class="col-md-8 mr-auto ml-auto">

                        <br>
                        <h3><i class="fa fa-user"></i>  ชื่อ - นามสกุล : {{ $value->firstname }} {{ $value->lastname }}</h3>
                        <hr>

                        <div class="w3-card-4">
                        
                            <div class="w3-container">
                                <br>
                                    <header class="w3-container w3-lime">
                                        <h3><i class="fa fa-line-chart"></i> ปริมาณแคลอรี่ที่เหมาะสม/วัน : 2100 กิโลแคลอรี่</h3>
                                    </header>
                                <br>
                                    <p>เพศ : {{ $value->gender->name }}</p>
                                    <p>อายุ : {{ $value->age }} ปี</p>
                                    <p>น้ำหนัก : {{ $value->weight }} กิโลกรัม</p>
                                    <p>ส่วนสูง : {{ $value->height }} เซนติเมตร</p>
                            
                                <hr>
                                    <header class="w3-container w3-khaki">
                                        <h3><i class="fa fa-plus-square"></i> โรคประจำตัวผู้ป่วย : </h3>
                                    </header>
                                <br>
                                @unless($value->ncds->isEmpty())
                                            <div>
                                                @foreach($value->ncds as $ncd)                                                    
                                                    <p> {{ $ncd->name }} <p>
                                                @endforeach
                                            </div>
                                        @endunless
                                    <p></p>
                            
                                <hr>
                                    <header class="w3-container w3-amber">
                                        <h3><i class="fa fa-exclamation-triangle"></i> การแพ้อาหาร : </h3>
                                    </header>
                                <br>
                                @unless($value->foodallergies->isEmpty())
                                    <div>
                                        @foreach($value->foodallergies as $foodallergy)
                                            <p> {{ $foodallergy->name }} <p>
                                        @endforeach
                                    </div>
                                @endunless
                                
                                    <p></p>

                                </div>

                                <form class="form-horizontal" method="POST" action="{{ URL('profile/'.$value->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                    <!-- show the nerd (uses the show method found at GET /users/{id} -->
                                    <a class="btn btn-xs btn-success" href="{{ URL::to('profile/' . $value->id) }}">Show</a>
                    
                                    <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->                            
                                    <a class="w3-button w3-block w3-dark-grey" href="{{ URL::to('profile/' . $value->id . '/edit') }}"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>                                        
                                    
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>                        
                                
                        </div>
                        <br>
                        <!-- <div class="col-xs-12 col-md-6 col-lg-6">
                                <a href="{{ URL('/profile/create') }}" class="btn btn-default pull-right" style = "margin-top: 30px;"><i class="fa fa-plus"></i> Create Blog</a>
                            </div> -->

                    </div>
                </div>
                    @endforeach
        </div>

        <!-- <div class="raw">
			    <div class="row page-header">
			        <div class="col-xs-12 col-md-6 col-lg-6">
				        <h1 style = "margin-top: 30px;"> Profile(สำหรับ ADMIN) </h1>
			        </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <a href="{{ URL('/profile/create') }}" class="btn btn-default pull-right" style = "margin-top: 30px;"><i class="fa fa-plus"></i> Create Profile</a>
                    </div>
			    </div>
			     <!-- /.row -->
			 
                    <!-- will be used to show any messages -->
     <!--               @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>firstname</td>
                                <td>lastname</td>
                                <td>Created time</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profile as $key => $value)
                                <tr>
                                    <td>{{ $value->firstname }}</td>
                                    <td>{{ $value->lastname }}</td>
                                    <td>{{ $value->created_at }}</td>
                        
                                    <!-- we will also add show, edit, and delete buttons -->
             <!--                       <td>
                        
                                        <!-- delete the nerd (uses the destroy method DESTROY /blogs/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->
             <!--                           <form class="form-horizontal" method="POST" action="{{ URL('profile/'.$value->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            
                                        <!-- show the nerd (uses the show method found at GET /users/{id} -->
             <!--                           <a class="btn btn-xs btn-success" href="{{ URL::to('profile/' . $value->id) }}">Show</a>
                        
                                        <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
             <!--                           <a class="btn btn-xs btn-info" href="{{ URL::to('profile/' . $value->id . '/edit') }}">Edit</a>
                                        
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> -->
	

 <!-- End Profile -->

@stop