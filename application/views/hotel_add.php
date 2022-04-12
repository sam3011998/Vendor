<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Add a hotel	text-align: center;
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #000;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 50px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 10px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #fff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #fff;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #fff;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
} 

</style>
</head>
<body>

<div class="signup-form">
		<h2>Add a hotel</h2>
		


		<?php echo form_open('Hotel_Add',['name'=>'hotel_add','autocomplete'=>'off']);?>
        <div class="signup-form">

<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>

<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>


		<div class="box">
		<div class="input">
        </div>
        </div>
        </div>

        <div class=" ">
<?php echo form_input(['name'=>'city','class'=>'form-control','value'=>set_value('city'),'placeholder'=>'City']);?>
 <?php echo form_error('city',"<div style='color:red'>","</div>");?>  

 <br>
        </div>
        <div class="box">
<?php echo form_input(['name'=>'contactperson','class'=>'form-control','value'=>set_value('contactperson'),'placeholder'=>'Contact person']);?>
 <?php echo form_error('contactperson',"<div style='color:red'>","</div>");?>       	
        </div>
        <br>
        <div class="box">
<?php echo form_input(['name'=>'phone','class'=>'form-control','value'=>set_value('phone'),'placeholder'=>'Phone']);?>
 <?php echo form_error('phone',"<div style='color:red'>","</div>");?>  
        </div>
        <br>

		<div class="input">
<?php echo form_input(['name'=>'city','class'=>'form-control','value'=>set_value('city'),'placeholder'=>'City']);?>
 <?php echo form_error('city',"<div style='color:red'>","</div>");?>  
        </div>  
        <br>
        <div class="box">
<?php echo form_input(['name'=>'address','class'=>'form-control','value'=>set_value('address'),'placeholder'=>'Address']);?>
 <?php echo form_error('address',"<div style='color:red'>","</div>");?>  
        </div>   
  <br>
  
		<div class="box">
<?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>
        </div>
        <br>

        <div class="box">
<a href="<?php echo site_url('Hotel_Show');?>" class="btn btn-info btn-lg btn-block" style="color:#fff;">Show hotels</a>
    </div>

    <br>

    <div class="box">
<a href="<?php echo site_url('Logout');?>" class="btn btn-danger btn-lg btn-block" style="color:#fff;">Logout</a>
</div>

    </form>
    
    <?php echo form_close();?>
</div>
</body>
</html>