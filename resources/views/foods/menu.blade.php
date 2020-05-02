<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Menu</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<form action="{{ route('addmenu')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <br>
        
    <div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
                        <center><h1>Create Menu</h1></center>
                        <br>
                        <a class="w3-button w3-round w3-teal" href="/menupage"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Menu Page</a>
                        <br><br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
                                    <label>ชื่ออาหาร :</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Menu" >
									<div class="help-block with-errors"></div>
								</div>                                 
                            </div>
                            
							<div class="col-md-12">
								<div class="form-group">
									<label>น้ำหนัก/จาน :</label>
                                    <input type="text" name="weight" class="form-control" placeholder="Weight" >
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
									<label>Energy :</label>
                                    <input type="text" name="energy" class="form-control"  placeholder="Energy (Kcal)" >
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
									<label>Carbohydrate :</label>
                                    <input type="text" name="carbohydrate" class="form-control"  placeholder="Carbohydate (Kcal)" >
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
									<label>Protein :</label>
                                    <input type="text" name="protein" class="form-control"  placeholder="Protein (Kcal)" >
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
									<label>Lipid :</label>
                                    <input type="text" name="lipid" class="form-control"  placeholder="Lipid (Kcal)" >
								</div> 
                            </div>
                            
                            <div class="col-md-12">
								<div class="form-group">
									<label>Sodium :</label>
                                    <input type="text" name="sodium" class="form-control"  placeholder="Sodium (Miligram)" >
								</div> 
                            </div>
                            

							<div class="col-md-12">
								<div class="form-group">
                                    <label>Egg :</label>
									<select class="custom-select d-block form-control" name="egg" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Egg</option>
									  <option value="้have">have</option>
									  <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>
                            
                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Nuts :</label>
									<select class="custom-select d-block form-control" name="nuts" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Nuts</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Peanuts :</label>
									<select class="custom-select d-block form-control" name="peanuts" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Peanuts</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Soy :</label>
									<select class="custom-select d-block form-control" name="soy" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Soy</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Shrimps :</label>
									<select class="custom-select d-block form-control" name="shrimps" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Shrimps</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Crab :</label>
									<select class="custom-select d-block form-control" name="crab" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Crab</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

                            <div class="col-md-12">
								<div class="form-group">
                                    <label>Fish :</label>
									<select class="custom-select d-block form-control" name="fish" required data-error="Please Select Person">
                                        <option disabled selected>This Menu " have or not have " Fish</option>
                                        <option value="้have">have</option>
                                        <option value="not have">not have</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
                            </div>

							<div class="col-md-12">
								<div class="custom-file">
									<label>Choose Menu Image :</label>
                                    <input type="file" name="image" class="custom-file-input">
								</div> 
                            </div>

                            <br><br>
                            <center>
                            <button type="submit" name="submit" class="btn btn-success btn-md"> Create Menu </button>
                            </center>
                            <br><br>

						</div>            
					</form>
				</div>
			</div>
		</div>
    </div>
</form>
</body>
</html>
	
	<!-- End Contact -->
