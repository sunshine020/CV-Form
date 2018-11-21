<?php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MyCv</title>
</head>

<body>
<center>
<form id="sform" name="sform"  method="post" action="insert.php" onsubmit="return valiform()">
 	<table border="2px">
    				<div class="form-one">
						<h3>Personal Info</h3>
					<div class="form-control">
						<label>First Name</label>
						<input  type="text" name="fname" placeholder="Enter First Name" id="fname">
						
					</div>
					<div class="form-control">
						<label>Last Name</label>
						<input  type="text" name="lname" placeholder="Enter Last Name" id="lname" >
					</div>
					<div class="form-control">
						<label>Father’s Name</label>
						<span id="father_name"></span>
						<input type="text" name="father_name" placeholder="Enter Father’s Name">
					</div>
					<div class="form-control">
						<label>Mother’s Name</label>
						<input type="text" name="mother_name" placeholder="Enter First Name" id="mother_name">
					</div>
					<div class="form-control">
						<label>Date of Birth</label>
						<input type="date" name="dob" placeholder="Enter First Name">
					</div>
					<div class="form-control">
						<label>Blood Group	</label>
						<select type="text" name="blood" >
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>O+</option>
							<option>O-</option>
							
 						</select>
					</div>
					<div class="form-control">
						<label>Religion</label><br>
						<select type="text" name="religion" >
							<option>Islam</option>
							<option>Hinduism</option>
							<option>Buddhism</option>
							<option>Christianity</option>
							
							<option>Other religions</option>
							
							
 						</select>
					</div>
					<div class="form-control">
						<label>Gender</label><br/>
						<select name="gender">
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="o">Other</option>
						</select>
					</div>
					<div class="form-control">
						<label>Marital Status</label>
						<input type="text" name="marital" placeholder="Enter First Name">
					</div>
					<div class="form-control">
						<label>National ID No</label>
						<input type="text" name="nid" id="nid"
						placeholder="Enter National ID">
					</div>
					<div class="form-control">
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter Email">
					</div>
					<div class="form-control">
						<label>Contact</label>
						<input type="text" name="contact" id="contact" placeholder="Enter Contact">
					</div>
              <div class="form-control">
						<label>Address</label>
						<textarea type="text" name="address"></textarea>
						
					</div>
					
						</div>
						<div class="form-two">
							<h3>Education Info</h3>
 							<div class="form-control">
								<h4>Secondary School Certificate (SSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="s_institute" placeholder="Enter Institute Name">
					</div>
						<div class="form-control">
								
						<label>Group</label>
						<input type="text" name="s_group" placeholder="Enter Group">
					</div>
					<div class="form-control">
								
						<label>Passing Year</label>
						<select type="text" name="s_pass" >
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
 						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label>
						<input type="text" name="s_result" placeholder="Enter Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="s_board" >
							<option value="dha">Dhaka Board</option>
							<option value="bar">Barisal Board</option>
							<option value="syl">Sylhet Board</option>
							<option value="com">Comilla Board</option>
							<option value="chi">Chittagong Board</option>
							<option value="raj">Rajshahi Board</option>
							<option value="jes">Jessore   Board</option>
							<option value="din"> Dinajpur Board</option>
							<option value="mad">Madrasah Board</option>
 						</select>
					</div>
					<div class="form-control">
								<h4>Higher Secondary Certificate (HSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="h_institute" placeholder="Enter Institute">
					</div>
						<div class="form-control">
								
						<label>Group</label><br>
						<select type="text" name="h_group" >
							<option>Science</option>
							<option>Science</option>
							<option>Science</option>
 						</select>
					</div>
					<div class="form-control">
								
						<label>Passing Year</label><br>
							<select type="text" name="h_pass" >
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
 						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label><br>
						<input type="text" name="h_result" placeholder="Enter Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="h_board" >
							<option value="dha">Dhaka Board</option>
							<option value="bar">Barisal Board</option>
							<option value="syl">Sylhet Board</option>
							<option value="com">Comilla Board</option>
							<option value="chi">Chittagong Board</option>
							<option value="raj">Rajshahi Board</option>
							<option value="jes">Jessore Board</option>
							<option value="din"> Dinajpur Board</option>
							<option value="mad">Madrasah Board</option>
 						</select>
 					</div>
					<div class="form-control">
						<label>Picture</label>
						<input type="file" name="pic" >
					</div>
						</div>
 						<input type="submit" name="submit" value="Submit">

</table>				
</form>
</center>
<script>
function valiform()
{
	var a1=document.forms["sform"]["fname"].value;
	var a2=document.forms["sform"]["lname"].value;
	var a3=document.forms["sform"]["email"].value;
	var a4=document.forms["sform"]["dob"].value;
	if(a1==null ||a1=="")
	{
		window.alert(" Id must be field out");
		return  false;
	}
	else if(a2==null ||a2=="")
	{
		window.alert("Name must be field out");
		return  false;
	}
	else if(a3==null ||a3=="")
	{
		window.alert("User name must be field out");
		return  false;
	}
	else if(a4==null ||a4=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
}

</script>
</body>
</html>