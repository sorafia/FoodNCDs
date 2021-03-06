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

                <div class="row page-header">
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <h1>Edit Blog : {{ $blog->title }}</h1>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="btn-group pull-right" role="group" aria-label="..." >
                            <a href="{{ URL('/blog') }}" class="btn btn-default "> Back <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">

                        <form class="form-horizontal" method="POST" action="{{ route('blog.update', $blog->id) }}">
                            <!-- if there are creation errors, they will show here -->
                            @if($errors->all())
                            <ul class="has-error">
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                            @endif
                        
                                {{ csrf_field() }}
			            {{ method_field('PUT') }}

                            <div class="contact-block">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <h3>แก้ไขบทความ</h3>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required autofocus>

                                                        @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif

                                                    <div class="help-block with-errors"></div>
                                                </div>                                 
                                            </div>
                                            
                                            <h3>แก้ไขเนื้อหา</h3>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <textarea wrap="soft|hard" name="body" id="body" class="form-control" >{{ $blog->body }}</textarea>
                                                            
                                                            @if ($errors->has('body'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('body') }}</strong>
                                                                </span>
                                                            @endif

                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <h3>แก้ไขสาเหตุ</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="cause" id="cause" class="form-control" >{{ $blog->cause }}</textarea>
                                                        
                                                        @if ($errors->has('cause'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('cause') }}</strong>
                                                            </span>
                                                        @endif

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <h3>แก้ไขอาการ</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="symptom" id="symptom" class="form-control" >{{ $blog->symptom }}</textarea>
                                                        
                                                        @if ($errors->has('symptom'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('symptom') }}</strong>
                                                            </span>
                                                        @endif

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <h3>แก้ไขอาหารที่เหมาะสม</h3>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="eat" id="eat" class="form-control" >{{ $blog->eat }}</textarea>
                                                        
                                                        @if ($errors->has('eat'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('eat') }}</strong>
                                                            </span>
                                                        @endif

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                                
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="submit-button text-center">
                                                        <button class="btn btn-common" id="submit" type="submit">บันทึก</button>                                
                                                    </div>
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