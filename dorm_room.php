<html>
<head>
	<title>
		A Sample Tutorial for database connection.
	</title>
	<link rel="stylesheet" type="text/css" href="dorm2.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		button[type="submit"] {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 20px;
  margin-left: 25px;
}
	</style>
</head>
<body>
	<form action="https://formspree.io/f/xleydvbg" id="myform" method="post">
		
	<div class="main">
		<div class="reserve">
			<h2>Dorm Room Reservation</h2>
		
		<div class="form-box">
        
			<label>E-Mail :</label>
			<br>
			<input type="email" id="Email" name="Email" Required>
			<br><br>
			<label>Name :</label>
			<br>
			<input type="full_name" id="Full_name" name="Full_name" Required>
			<br><br>
	
			<label>Gender : </label>
			
			<input type="radio" name="Gender" value="male"style="margin-left: 25px;" >Male
			<input type="radio" name="Gender" value="female" style="margin-left: 95px;">Female
			<br>
			<br>
		<label>Check-in Date :</label>
		<br>
		<?php $current=date('Y-m-d') ?>
<input type="date" id="Checkin" min="<?php  echo $current ?>" name="Checkin" Required>
<br><br>
	<label>Duration :</label>
	<br>
	<input type="duration" id="Duration" name="Duration" >
	<br><br>

<label>Room Type :</label>
<br>
	<select id="Roomtype" name="Roomtype">
		<option value="">Select</option>
		<option value="AC">AC</option>
		<option value="NON-AC">NON-AC</option>
	</select>
	<br><br>
			<label>Enter Phone :</label>
			<br>
			<input type="number"  name="Phone" min="0" maxlength="11">
		<br><br>
		<button type="submit" id="submit" class="btn">Submit</button> 
		<button type="submit" id="submit" class="btn" style ="margin-top: -67px; margin-left: 240px;" onclick="resetform()">Back</button>
			<br>
</form>
</div>
</div>
</div>
<script>
	document.querySelectorAll('input[type="number"]').forEach(input=>{
    input.oninput =() =>
	{
		if(input.value.length > input.maxLength) input.value= input.value.slice(0, input.maxLength);

	}
	})
</script>
<script>
	function resetform(){
		document.getElementById("myform").reset();
		window.location.href = "http://localhost/IP%20Project/dorm.php"; 
	}
</script>


</body>
</html>
