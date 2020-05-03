@extends('layouts.main')

@section('page_title', 'Profile')

@section('content')
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>โปรไฟล์</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>สร้างโปรไฟล์ของฉัน</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="contact-block">
								<form method="POST" action="{{ URL('/profile') }}">
								<!-- if there are creation errors, they will show here -->
									@if($errors->all())
									<ul class="has-error">
									@foreach ($errors->all() as $message)
										<li>{{ $message }}</li>
									@endforeach
									</ul>
									@endif
								
										{{ csrf_field() }}
										
									<div class="row">
										<div class="col-md-6">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="firstname" name="firstname" placeholder="ชื่อ" value="{{ old('firstname') }}" required autofocus>
														@if ($errors->has('firstname'))
															<span class="help-block">
																<strong>{{ $errors->first('firstname') }}</strong>
															</span>
														@endif
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="col-md-6">	
											<div class="col-md-12">
												<div class="form-group">	
													<input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" required data-error="กรุณากรอกนามสกุลของท่าน">
														@if ($errors->has('lastname'))
															<span class="help-block">
																<strong>{{ $errors->first('lastname') }}</strong>
															</span>
														@endif
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<h3>ข้อมูลส่วนตัว</h3>
											<div class="col-md-12">
												<div class="form-group">
													<input type="int" class="form-control" id="weight" name="weight" placeholder="น้ำหนัก" required data-error="กรุณากรอกน้ำหนักของท่าน">
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="้height" name="height" placeholder="ส่วนสูง" required data-error="กรุณากรอกส่วนสูงของท่าน">
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<select class="custom-select d-block form-control" id="sex" required data-error="กรุณาเลือเพศของท่าน">
													<option disabled selected>เพศ</option>
													<option value="male">ชาย</option>
													<option value="female">หญิง</option>
													</select>
													<div class="help-block with-errors"></div>
												</div> 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="้age" name="age" placeholder="อายุ" required data-error="กรุณากรอกอายุของท่าน">
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<h3>ข้อมูลพฤติกรรมในการออกกำลังกาย</h3>
											<div class="col-md-12">
												<div class="form-group">
													<select class="custom-select d-block form-control" id="exercise" required data-error="กรุณาเลือกความถี่ในการออกกำลังกายของท่าน">
													<option disabled selected>การออกกำลังกาย</option>
													<option value="1">น้อยมากหรือไม่ออกเลย</option>
													<option value="2">1-3 ครั้ง</option>
													<option value="3">4-5 ครั้ง</option>
													<option value="4">6-7 ครั้ง</option>
													<option value="5">วันละ 2 ครั้งขึ้นไป</option>
													</select>
													<div class="help-block with-errors"></div>
												</div> 
											</div>
										</div>
										
										<div class="col-md-6">
											<h3>ประวัติข้อมูลโรคประจำตัว</h3>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคหัวใจ" id="disease">
													<label class="form-check-label" for="disease">โรคหัวใจ</label>
													<input class="form-check-input" type="checkbox" value="โรคไต" id="disease">
													<label class="form-check-label" for="disease">โรคไต</label>
													<input class="form-check-input" type="checkbox" value="โรคกระดูกพรุน" id="disease">
													<label class="form-check-label" for="disease">โรคกระดูกพรุน</label>
													<input class="form-check-input" type="checkbox" value="โรคไขมันในเส้นเลือด" id="disease">
													<label class="form-check-label" for="disease">โรคไขมันในเส้นเลือด</label>
													<input class="form-check-input" type="checkbox" value="โรคความดันโลหิตสูง" id="disease">
													<label class="form-check-label" for="disease">โรคความดันโลหิตสูง</label>
													<input class="form-check-input" type="checkbox" value="โรคเบาหวาน" id="disease">
													<label class="form-check-label" for="disease">โรคเบาหวาน</label>
													{!! Form::label('ncd_list', 'Ncds: ') !!}
													{!! Form::select('ncd_list[]', $ncd_list, null,
													['multiple', 'class' => 'form-control']) !!}
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคไต" id="disease">
													<label class="form-check-label" for="disease">โรคไต</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคกระดูกพรุน" id="disease">
													<label class="form-check-label" for="disease">โรคกระดูกพรุน</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคไขมันในเส้นเลือด" id="disease">
													<label class="form-check-label" for="disease">โรคไขมันในเส้นเลือด</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคความดันโลหิตสูง" id="disease">
													<label class="form-check-label" for="disease">โรคความดันโลหิตสูง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="โรคเบาหวาน" id="disease">
													<label class="form-check-label" for="disease">โรคเบาหวาน</label>
												</div>
											</div>
											<p> </p>
											<h3>ประวัติข้อมูลส่วนผสมที่แพ้</h3>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ไข่" id="ingredient">
													<label class="form-check-label" for="disease">ไข่</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ถั่ว" id="ingredient">
													<label class="form-check-label" for="disease">ถั่ว</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ถั่วลิสง" id="ingredient">
													<label class="form-check-label" for="disease">ถั่วลิสง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="กุ้ง" id="ingredient">
													<label class="form-check-label" for="disease">กุ้ง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ปู" id="ingredient">
													<label class="form-check-label" for="disease">ปู</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ปลา" id="ingredient">
													<label class="form-check-label" for="disease">ปลา</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="ถั่วเหลือง" id="ingredient">
													<label class="form-check-label" for="disease">ถั่วเหลือง</label>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="submit-button text-center">
												<button class="btn btn-common" id="submit" type="submit">บันทึก</button>
												<div id="msgSubmit" class="h3 text-center hidden"></div> 
												<div class="clearfix"></div> 
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
	</div>
	<!-- End Reservation -->
@stop