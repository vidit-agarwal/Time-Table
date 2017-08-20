<?php
session_start();
if(!isset($_SESSION['userlog']))
{ 
	/*session_start();*/
	echo '<script type="text/javascript">
                    alert("Please Login To continue !");
                    window.location="index.php";
                    </script> ';
	
}
else
{
	
}


?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Scheduler:Choice Filling</title>
  <link href="image/download.png" rel="icon"> 
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}
footer{
  position:fixed;
  bottom :0;
  width:100%;
}
footer nav a{
  color : #778899;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: 850px;
	background-image: url('image/background.jpg');
	
	background-size: cover;
	-webkit-filter: blur(1px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: 850px;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
.login input[type=number]:focus{
	outline: none;
	color :#eee;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
#header {
  z-index: 1;
  position: fixed;
  top :0%;
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #cdaf95;
  color: white;
  filter: alpha(opacity=80);  /* IE 5-7 */
-moz-opacity: 0.8;          /* Netscape */
-khtml-opacity: 0.8;        /* Safari 1.x */
    opacity: 0.8;
}
.login input[type=number]{
	width: 251px;
	height: 35px;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.login input[type=button]{
	width: 50px;
	height: 35px;
	background:#eee;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: bolder;
	padding: 6px;
	margin-top: 10px;
}
.login input[type=submit]{
	width: 50px;
	height: 35px;
	background:#eee;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: bolder;
	padding: 6px;
	margin-top: 10px;
}
.login select {
	width: 258px;
	height: 35px;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.logo {
position :fixed;
 top :0%;
  width: 50px;
  height: 50px;
  margin-top : 1px;
  margin-left:3.9%;
  font-weight: bolder;

}
.logo_name{

margin-left :2%;
}

nav ul li a:hover{
  background-color:#eee;
}
nav ul li a:hover{
 color:black;
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
	
<header id="header">

<div class="main_body">
      <div class="container">
        
<div class="logo_name">
  <img src="image/download.png" alt ="" style="width :50px ; height:50px ;border-radius:15px ; margin-top:5px;" > <br>
  <div class="logo">
        <h1 >
         
         Scheduler 

        </h1>



</div>
</div>
        
      </div>
  
</div>
    </header>








  <div class="body">
  </div>
		<div class="grad">
		</div>
		<div class="header">
			<div>Choice<span><b>Fill</b></span></div>
		</div>
		<br>
		<form method="POST" > 
		<div class="login">
			<form action="#" method="POST">
				<legend><b>Select Department :<b></legend>
				<div class="dept">
				<select name="department">
					  <option value="cse">CSE</option>
					  <option value="it">IT</option>
					  <option value="ece">ECE</option>
					  <option value="eee">EEE</option>
					  <option value="mae">MAE</option>
				</select>
				<input type="submit" value="Next" name="submit" >

				</div>
			</form>
				<script type="text/javascript">
				$(document).ready(function(){
				    $("select.department").change(function(){
				        var selectedDept = $(".department option:selected").val();

				        $(".department option:contains(selectedDept)").attr('selected', true);

				       // $(".department option:selected").val().selected=true;
				        $.ajax({
				            type: "POST",
				            url: "#",
				            data: { dept : selectedDept } 
				        }).done(function(data){
				            $("#faculty_list").html(data);
				        });
				    });
				});
				</script>
				<script type="text/javascript">
					function toggle_div_1(id)
					{
						var divElement = document.getElementById(id) ;
						if(divElement.style.display=='none')
							{divElement.style.display='block';}

					}
				</script>
<script type="text/javascript">
					function toggle_div(id)
					{
						var divElement = document.getElementById(id) ;
						if(divElement.style.display=='none')
							{divElement.style.display='block';}

					}
				</script>
				<div id="faculty_list" >
				
						<?php
					if(isset($_POST['submit'])){
						    // Capture selected department
						    $dep = $_POST['department'];

						$mysqli = NEW  MySQLi('localhost', 'root', 'HMRITM@TT' , 'hmr_db') ;
						$query = $mysqli->query("SELECT * FROM teacher WHERE t_dept='$dep' ");
						$faculty_name_array = array() ;
						$index=0 ;
						while($row = mysqli_fetch_assoc($query))
						{
							$faculty_name_array[$index] = $row['t_name'];
							$index++;

						}
						    // Define country and city array
						   /* $countryArr = array(
						                    "cse" => array("New Yourk", "Los Angeles", "California"),
						                    "it" => array("Mumbai", "New Delhi", "Bangalore"),
						                    "mae" => array("London", "Manchester", "Liverpool")
						                );
							*/
						    // Display city dropdown based on country name
						    if($dep !== 'Select'){
						        echo "<br><b><legend>Faculty List Of Selected Dept:</legend><b>";
						        echo "<select name='faculty'>";
						        foreach($faculty_name_array as $value){
						            echo "<option>". $value . "</option>";
						        }
						        echo "</select>";
						    } 

						}	

						
				?>
				
				<br>
				</div>
				
				
				<div id="choice_fill" style="display:none ;">
					<legend>Choice Filling Table:</legend>


					<table border="1" bordercolor="red">
						<tr>
							<td>Apple</td>
							<td>Mango</td>
						</tr>
						<tr>
							<td>Grapes</td>
							<td>lemon</td>
						</tr>
					</table>


				</div>
				



					<br><br>
				
				
				<input type="submit" value="ADD" name="add"> </form>
				<input type="button" value="HOME" onclick="home()">
				<script>
				function home(){
					window.location="home.php" ;
				}
				</script>

				</script>
		</div>
	
 

  <footer name ="foot" style="background: #eee; font-weight:bold;">
		<nav><a><center>HugeArdor © 2017</center></a></nav>
	</footer>

</body>
</html>
