@extends('layouts.main')

@section('page_title', 'FoodNCDs Blog')

@section('content')

<!-- Page Content -->
<div class="container">

<div class="row">

    <div class="col-lg-12">
        <div class="overflow-hidden" style="text-align: center">
            <br><p>The Food Suggestion Web-Application for NCDs Patient</p>
            </br>
        </div>
    </div>

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4" style= "font-weight: bold;">{{ $blog->title }}</h1>

    <!-- Author -->
    <!-- <p class="lead">
      by
      <a href="#">Start Bootstrap</a>
    </p> -->

    <hr>

    <!-- Date/Time -->
    <p>Posted on {{ $blog->created_at->format('d M Y') }} at {{ $blog->created_at->format('H:i A') }}</p>

    <hr>

    <!-- Preview Image -->
    <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

    <!-- <hr> -->

    <!-- Post Content -->
    <!-- <p class="lead">{!! $blog->body !!}</p> -->

    <blockquote class="blockquote">
      <p class="mb-0"style= "font-weight: 400;line-height: 30px;margin-bottom: .5rem;font-size: 22px; font-family: inherit;color: inherit;color: #010101">{!! nl2br(e($blog->body)) !!}</p>
    </blockquote>

    <br><h3 style= "font-size: 20px;font-weight: bold;font-size: 22px;">สาเหตุ</h3>
    <p class="lead" style= "color: #212529;font-weight: 400;color: #010101;font-size: 1.3rem;">{!! nl2br(e($blog->cause)) !!}</p></br>

    <br><h3 style= "font-size: 20px;font-weight: bold;font-size: 22px;">อาการ</h3>
    <p class="lead" style= "color: #212529;font-weight: 400;color: #010101;font-size: 1.3rem;">{!! nl2br(e($blog->symptom)) !!}</p></br>

    <!-- <blockquote class="blockquote">
      <p class="mb-0">{!! nl2br(e($blog->eat)) !!}</p>
      <footer class="blockquote-footer">อาหารที่เหมาะสมกับ
        <cite title="Source Title">{!! nl2br(e($blog->title)) !!}</cite>
      </footer>
    </blockquote> -->

    <br><h3 style= "font-size: 20px;font-weight: bold;font-size: 22px;">อาหารที่เหมาะสม</h3>
    <p class="lead" style= "color: #212529;font-weight: 400;color: #010101;font-size: 1.3rem;">{!! nl2br(e($blog->eat)) !!}</p></br>

    <hr>

    <!-- Comments Form -->
    <!-- <div class="card my-4">
      <h5 class="card-header">Leave a Comment:</h5>
      <div class="card-body">
        <form>
          <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div> -->

    <!-- Single Comment -->
    <!-- <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div> -->

    <!-- Comment with nested comments -->
    <!-- <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

      </div>
    </div> -->

  </div> 

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
    <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button" style="background-color: #d0a772;">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">บทความอื่นๆ</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="{{ URL('/blog/4') }}">โรคหัวใจ</a>
              </li>
              <li>
                <a href="{{ URL('/blog/1') }}">โรคไต</a>
              </li>
              <li>
                <a href="{{ URL('/blog/6') }}">โรคกระดูกพรุน</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="{{ URL('/blog/5') }}">โรคความดันโลหิต</a>
              </li>
              <li>
                <a href="{{ URL('/blog/2') }}">โรคเบาหวาน</a>
              </li>
              <li>
                <a href="{{ URL('/blog/3') }}">โรคไขมันในเส้นเลือก</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <!-- <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div> -->

  </div>

    <!-- Start All Pages -->
	<!-- <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>{{ $blog->title }}</h1>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End All Pages -->

    <!-- Start blog details -->
	<!-- <div class="blog-box-shot">
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
                            <h1  class="col-sm-2">สาเหตุ</h1> -->
                            <!--  <h1 class="col-sm-10">{{ nl2br($blog->cause) }}</h1>  --> 
                            <!-- <h1 class="col-sm-10">{{ $blog->cause }}</h1>
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

                </div>

            </div>

        </div>
    </div> -->
</div>
</div>


@stop