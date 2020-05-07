@extends('layouts.main')

@section('page_title', 'FoodNCDs Blog')

@section('content')

    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Blog บทความ</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

   <div class="container">
        <div class="reservation-box">    
            <div class="blog-search-form">
                <input name="search" placeholder="Search blog" type="text">
                <button class="search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
 
            <!--<div class="row">
                @foreach($blog as $key => $value)
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-box-inner" >
                            <div class="blog-img-box">
                                <img class="img-fluid" src="{{asset('images/blog-img-01.jpg')}}" alt="">
                            </div>
                            <div class="blog-detail">
                                <h4>{{ $value->title }}</h4>
                                    <ul>
                                        <li><span>Post by Admin</span></li>
                                        <li>|</li>
                                        <li><span>{{ $value->created_at }}</span></li>
                                    </ul>
                                    <p> {{ str_limit($value->body, 300) }} </p>
                                    <a>
                                        <!-- delete the nerd (uses the destroy method DESTROY /blogs/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!--                            <form class="form-horizontal" method="POST" action="{{ URL('blog/'.$value->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <!-- show the nerd (uses the show method found at GET /users/{id} -->
            <!--                                <a class="btn btn-lg btn-circle btn-outline-new-white pull-right" style="margin-top: 5px; padding-top: 10px; padding-bottom: 10px;" href="{{ URL::to('blog/' . $value->id) }}">Show</a>
                                        </form>
                                    </a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>-->

            <div class="row">
                @foreach($blog as $key => $value)
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-body"style="margin-bottom: 30px;margin-top: 30px; border: 1px solid #e1e2e2;;height: auto; box-shadow: 0 0 1px black;">
                            <h4 class="card-title" style="font-size: 18px; font-weight: 500; color: #222222;margin-bottom: 0px; text-align: center; ">{{ $value->title }}</h4>
                            
                            <ul style ="text-align: right; color: #cfa671;">
                                <li><span class="text-align: right;">เขียนโดย | Admin</span></li>
                                <li><span>วันที่โพสต์ {{ $value->created_at }}</span></li>
                            </ul>

                            <p class="card-text" style="color: #666666; font-size: 15px; font-family: 'Athiti', sans-serif; line-height: 1.80857;">{{ str_limit($value->body, 300) }} </p>
                            
                            <a>
                                <!-- delete the nerd (uses the destroy method DESTROY /blogs/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->
                                <div class="form-horizontal" method="POST" action="{{ URL('blog/'.$value->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <!-- show the nerd (uses the show method found at GET /users/{id} -->
                                     <a class="btn btn-primary" style="background-color: #d0a772;" href="{{ URL::to('blog/' . $value->id) }}">Show</a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
                

            <div class="raw">
			    <div class="row page-header">
			        <div class="col-xs-12 col-md-6 col-lg-6">
				        <h1 style = "margin-top: 30px;"> Blogs(สำหรับ ADMIN) </h1>
			        </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <a href="{{ URL('/blog/create') }}" class="btn btn-default pull-right" style = "margin-top: 30px;"><i class="fa fa-plus"></i> Create Blog</a>
                    </div>
			    </div>
			     <!-- /.row -->
			 
                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Content</td>
                                <td>Created time</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $key => $value)
                                <tr>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->body }}</td>
                                    <td>{{ $value->created_at }}</td>
                        
                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>
                        
                                        <!-- delete the nerd (uses the destroy method DESTROY /blogs/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                                        <form class="form-horizontal" method="POST" action="{{ URL('blog/'.$value->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            
                                        <!-- show the nerd (uses the show method found at GET /users/{id} -->
                                        <a class="btn btn-xs btn-success" href="{{ URL::to('blog/' . $value->id) }}">Show</a>
                        
                                        <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
                                        <a class="btn btn-xs btn-info" href="{{ URL::to('blog/' . $value->id . '/edit') }}">Edit</a>
                                        
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop