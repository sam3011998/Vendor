<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Show hotels</title>
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
	height: 40px;
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
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #fff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}

.signup-form form {
	color: #888;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form {
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


<form>
    

<!-- Show all hotel names in the database -->
<?php
foreach($data as $element)
{
?>   
    <div class="form-group">
        <a href="<?php echo site_url('Hotel_Show/getInfo/') . $element->id ;?>" class="btn btn-info btn-lg btn-block" style="color:#fff;"><?php echo $element->hotelname;?></a>
    </div>
<?php   
}
?>
<!-- ENDS HERE-->



<br>
<br>
<br>
<br>
<br>
<br>



<div class="form-group">
<a href="<?php echo site_url('Hotel_Add');?>" class="btn btn-info btn-lg btn-block" style="color:#fff;">Add a hotel</a>
</div>

<div class="form-group">
<a href="<?php echo site_url('Logout');?>" class="btn btn-danger btn-lg btn-block" style="color:#fff;">Logout</a>
</div>


 </form>

</div>
</body>
</html>