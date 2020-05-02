@extends('layouts.main')

@section('page_title', 'FoodNCDs Blog')

@section('content')

    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>{{ $blog->title }}</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

    <!-- Start blog details -->
	<div class="blog-box-shot">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <div class="inner-blog-detail details-page">
                        <div class="text-center">
                            <ul>
                                <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                <li>|</li>
                                <li><i class="zmdi zmdi-time"></i>Time : <span>{{ $blog->created_at }}</span></li>
                            </ul>
                        </div>        
                            
                        <blockquote>    
                            <h3>{{ $blog->body }}</h3>
                        </blockquote>
                            
                        <div class="row">
                            <h1  class="col-sm-2">สาเหตุ</h1>
                            <!--  <h1 class="col-sm-10">{{ nl2br($blog->cause) }}</h1>  --> 
                            <h1 class="col-sm-10">{{ $blog->cause }}</h1>
                        </div>

                        <div class="row">
                            <h1  class="col-sm-2">อาการ</h1>
                            <h1 class="col-sm-10">{{ $blog->symptom }}</h1>
                        </div>

                        <div class="row">
                            <h1  class="col-sm-2">อาหารที่เหมาะสม</h1>
                            <h1 class="col-sm-10">{{ $blog->eat }}</h1>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url()->previous() }}" class="btn btn-default pull-right"> Back <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                    
                        
					
                    
                    <!--<div class="heading-title text-center">
                        <img class="img-fluid" src="{{asset('images/inner-blog-img.jpg')}}" alt="">
                    </div>-->        
                    <!--
                    <div class="inner-blog-detail details-page">
                        <h1>{{ $blog->title }}</h1>
                        <h3>{{ $blog->body }}</h3>    -->
                    
                        <!-- /.row -->  <!--
                        
                        <div class="row">
                            <h1  class="col-sm-2">Title</h1>
                            <h3 class="col-sm-10">{{ $blog->title }}</h3>
                        </div>
                        
                        <div class="row">
                            <label  class="col-sm-2">Content</label>
                            <div class="col-sm-10">{{ $blog->body }}</div>
                        </div>

                        <div class="row">
                            <label  class="col-sm-2">สาเหตุ</label>
                            <div class="col-sm-10">{{ $blog->cause }}</div>
                        </div>

                        <div class="row">
                            <label  class="col-sm-2">อาการ</label>
                            <div class="col-sm-10">{{ $blog->symptom }}</div>
                        </div>

                        <div class="row">
                            <label  class="col-sm-2">อาหารที่เหมาะสม</label>
                            <div class="col-sm-10">{{ $blog->eat }}</div>     
                        </div>   -->
                    
                        <!-- /.row --> <!--

                        <div class="col-xs-12 col-md-4 col-lg-4">
                            <div class="btn-group pull-left" role="group">
                                <a href="{{ url()->previous() }}" class="btn btn-default "> Back</a>
                            </div>
                        </div>

                    </div>  -->

                </div>

            </div>

        </div>
    </div>
@stop
        