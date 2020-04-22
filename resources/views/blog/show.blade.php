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
                    <div class="col-xs-12 col-md-8 col-lg-8">
                        <h1>Show Record : {{ $blog->title }}</h1>
                    </div>
                    
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="btn-group pull-right" role="group" aria-label="..." >
                            <a href="{{ url()->previous() }}" class="btn btn-default "> Back</a>
                        </div>
                    </div>
                </div>
                
                <!-- /.row -->
                
                <div class="row">
                    <label  class="col-sm-2">Title</label>
                    <div class="col-sm-10">{{ $blog->title }}</div>
                </div>
                
                <div class="row">
                    <label  class="col-sm-2">Content</label>
                    <div class="col-sm-10">{{ $blog->body }}</div>
                </div>
            
                <!-- /.row -->

            </div>

        </div>
    </div>
@stop
        