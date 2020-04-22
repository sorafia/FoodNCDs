@extends('layouts.main')

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

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">

                    <form class="form-horizontal" method="POST" action="{{ URL('/blog') }}">
                        <!-- if there are creation errors, they will show here -->
                        @if($errors->all())
                        <ul class="has-error">
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                        @endif
					
                            {{ csrf_field() }}

                        <div class="contact-block">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>สร้างบทความ</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="ชื่อบทความ" required data-error="กรุณาพิมพ์ชื่อบทความ" value="{{ old('title') }}" required autofocus>

                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif

                                                <div class="help-block with-errors"></div>
                                            </div>                                 
                                        </div>
                                        <h3>เขียนเนื้อหา</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="body" id="body" class="form-control" placeholder="เนื้อหา" required data-error="กรุณาพิมพ์เนื้อหา" ></textarea>
                                                        
                                                        @if ($errors->has('body'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('body') }}</strong>
                                                            </span>
                                                        @endif

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        <div class="col-md-12">
                                            <div class="submit-button text-center">
                                                <button class="btn btn-common" id="submit" type="submit">เพิ่ม</button>                                
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            </form>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
@stop