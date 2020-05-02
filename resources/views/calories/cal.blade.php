@extends('layouts.main')

@section('page_title', 'FoodNCDs')

@section('content')
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-04.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>อาหารแนะนำ <br> สำหรับผู้ป่วยในกลุ่มโรค NCDs </strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs </p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">อาหารแนะนำ</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>Recommended food <br> for  NCDs patients</strong></h1>
							<p class="m-b-40">Web application for Recommended food for  NCDs patients</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Recommended food</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>อาหารแนะนำ <br> สำหรับผู้ป่วยในกลุ่มโรค NCDs </strong></h1>
							<p class="m-b-40">เว็บแอปพลิเคชันแนะนำอาหารสำหรับผู้ป่วยในกลุ่มโรค NCDs </p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">อาหารแนะนำ</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/piegraph.jpg" alt="" class="img-fluid">

					<div class="progress">
  						<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p class="lead ">
						ไขมัน
					</p>
					<div class="progress">
  						<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p class="lead ">
						โปรตีน
					</p>
					<div class="progress">
  						<div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p class="lead ">
						คาร์โบไฮเดรต
					</p>
					<div class="progress">
  						<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p class="lead ">
						แคลอรี 2000 กิโลแคลอรี
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1><span>แคลอรี</span>ประจำวัน</h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">คำนวณแคลอรี่</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>เมนูอาหารแนะนำ</h2>
						<p>อาหารที่เหมาะสมกับคุณค่าทางโภชณาการและโรคประจำตัวของคุณ</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">เมนูทั้งหมด</button>
							<button data-filter=".breakfast">อาหารเช้า</button>
							<button data-filter=".lunch">อาหารกลางวัน</button>
							<button data-filter=".dinner">อาหารเย็น</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดต้มจืดเต้าหู้หมูสับ</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม) &nbsp; 473.0</h3>
							<h3> พลังงาน (kcal)   &nbsp; 263.0</h3>
							<h3> โปรตีน (กรัม)      &nbsp; 21.2</h3>
							<h3> ไขมัน (กรัม)     &nbsp;   8.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) &nbsp;25.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดไข่เจียวสมุนไพร</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   276.0</h3>
							<h3> พลังงาน (kcal)     579.0</h3>
							<h3> โปรตีน (กรัม)       14.0</h3>
							<h3> ไขมัน (กรัม)        27.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 68.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดแกงส้มชะอมทอด</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   370.0</h3>
							<h3> พลังงาน (kcal)     397.0</h3>
							<h3> โปรตีน (กรัม)       13.9</h3>
							<h3> ไขมัน (กรัม)        12.7</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 56.6</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดผัดผักรวม</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   282.0</h3>
							<h3> พลังงาน (kcal)     332.0</h3>
							<h3> โปรตีน (กรัม)       8.8</h3>
							<h3> ไขมัน (กรัม)        5.9</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 60.9</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ข้าวราดยำไข่ดาว</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   366.0</h3>
							<h3> พลังงาน (kcal)     638.0</h3>
							<h3> โปรตีน (กรัม)       19.9</h3>
							<h3> ไขมัน (กรัม)        28.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 75.3</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>น้ำพริกกะปิ+ปลาทูทอด+ชะอมชุบไข่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   331.0</h3>
							<h3> พลังงาน (kcal)     386.0</h3>
							<h3> โปรตีน (กรัม)       32.8</h3>
							<h3> ไขมัน (กรัม)        24.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 8.5</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>ก๋วยเตี๋ยวเส้นหมี่เนื้อรวมน้ำตก</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   365.0</h3>
							<h3> พลังงาน (kcal)     233.0</h3>
							<h3> โปรตีน (กรัม)       19.1</h3>
							<h3> ไขมัน (กรัม)        2.5</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 334.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>กระเพาะปลาเส้นหมี่</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   412.0</h3>
							<h3> พลังงาน (kcal)     246.0</h3>
							<h3> โปรตีน (กรัม)       15.5</h3>
							<h3> ไขมัน (กรัม)        3.1</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 39.0</h3>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4>สุกี้รวมมิตร แห้ง</h4>
							<p></p>
							<h3> น้ำหนัก/จาน (กรัม)   384.0</h3>
							<h3> พลังงาน (kcal)     399.0</h3>
							<h3> โปรตีน (กรัม)       21.9</h3>
							<h3> ไขมัน (กรัม)        17.0</h3>
							<h3> คาร์โบไฮเดรต (กรัม) 39.4</h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-04.jpg">
							<img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-05.jpg">
							<img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-06.jpg">
							<img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

@stop