@extends('layouts.main')

@section('page_title', 'แก้ไขProfile')

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
						<p></p>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="contact-block">
								<form method="POST" action="{{ route('profile.update', $profile->id) }}">
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
										
									<div class="row">
										<div class="col-md-6">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="firstname" name="firstname" placeholder="ชื่อ" value="{{ $profile->firstname }}" >
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
													<input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" value="{{ $profile->lastname }}" >
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
													<input type="text" class="form-control" id="weight" name="weight" placeholder="น้ำหนัก" value="{{ $profile->weight }}" >
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="้height" name="height" placeholder="ส่วนสูง" value="{{ $profile->height }}" >
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<select class="custom-select d-block form-control" name="gender_id" >	
													<option value="">เพศ</option>
													<option value="1" {{ $profile->gender_id == 1 ? 'selected' : '' }}>ชาย</option>
													<option value="2" {{ $profile->gender_id == 2 ? 'selected' : '' }}>หญิง</option>
													</select>
													<div class="help-block with-errors"></div>
												</div> 
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" id="้age" name="age" placeholder="อายุ" value="{{ $profile->age }}" >
													<div class="help-block with-errors"></div>
												</div>                                 
											</div>
											<h3>ข้อมูลพฤติกรรมในการออกกำลังกาย</h3>
											<div class="col-md-12">
												<div class="form-group">
													<select class="custom-select d-block form-control" name="exercisebehavior_id" >
													<option value="">การออกกำลังกาย</option>
													<option value="1" {{ $profile->exercisebehavior_id == 1 ? 'selected' : '' }}>น้อยมากหรือไม่ออกเลย</option>
													<option value="2" {{ $profile->exercisebehavior_id == 2 ? 'selected' : '' }}>1-3 ครั้ง</option>
													<option value="3" {{ $profile->exercisebehavior_id == 3 ? 'selected' : '' }}>4-5 ครั้ง</option>
													<option value="4" {{ $profile->exercisebehavior_id == 4 ? 'selected' : '' }}>6-7 ครั้ง</option>
													<option value="5" {{ $profile->exercisebehavior_id == 5 ? 'selected' : '' }}>วันละ 2 ครั้งขึ้นไป</option>												
													</select>
													<div class="help-block with-errors"></div>
												</div> 
											</div>
										</div>
										
										<div class="col-md-6">
											<h3>ประวัติข้อมูลโรคประจำตัว</h3>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="1">
													<label class="form-check-label">โรคไต</label>																										
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">												
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="2">
													<label class="form-check-label">โรคเบาหวาน</label>														
												</div>
											</div>												
											<div class="col-md-12">
												<div class="form-check">												
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="3">
													<label class="form-check-label">โรคไขมันในเส้นเลือด</label>													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">												
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="4">
													<label class="form-check-label">โรคหัวใจ</label>													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">												
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="5">
													<label class="form-check-label">โรคความดันโลหิตสูง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">																
													<input class="form-check-input" type="checkbox" name="ncd_list[]" value="6">
													<label class="form-check-label">โรคกระดูกพรุน</label>
												</div>
											</div>
											<p> </p>
											<h3>ประวัติข้อมูลส่วนผสมที่แพ้</h3>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="1">
													<label class="form-check-label">ไข่</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="2">
													<label class="form-check-label">ถั่ว</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="3">
													<label class="form-check-label">ถั่วลิสง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="4">
													<label class="form-check-label">กุ้ง</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="5">
													<label class="form-check-label">ปู</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="6">
													<label class="form-check-label">ปลา</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="foodallergy_list[]" value="7">
													<label class="form-check-label">ถั่วเหลือง</label>
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