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

    <div class="reservation-box">
            <div class="container">
                

                <div class="container">
			        <div class="row page-header">
				        <div class="col-xs-12 col-md-6 col-lg-6">
					        <h1>Blogs</h1>
				        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <a href="{{ URL('/blog/create') }}" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Create Blog</a>
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

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-block">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>สร้างบทความ</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อบทความ" required data-error="กรุณาพิมพ์ชื่อบทความ">
                                                <div class="help-block with-errors"></div>
                                            </div>                                 
                                        </div>
                                        <h3>เขียนเนื้อหา</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="้body" name="body" placeholder="เนื้อหา" required data-error="กรุณาพิมพ์เนื้อหา">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        <div class="col-md-12">
                                            <div class="submit-button text-center">
                                                <button class="btn btn-common" id="submit" type="submit">เพิ่ม</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>                                 
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop