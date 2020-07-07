<?php>

 <html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<meta charset="UTF-8">
<title>Criminal investigation command</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/i.jpg");

    /* Full height */
    height: 800px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
>
</style>
</head>
<body id="tp">
	<div id="header">
		
			
				<a id="logo" href="home.php"><img src="gallery/a.jpg" alt="LOGO" style="width:200px;height:160px;float:left;"></a>
		
			<ul id="navigation" style="float:right;">
				<li class="selected">
					<a href="home.php">Home</a>
				</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li>&nbsp;&nbsp;
					<a href="public.php">Public Grievances</a>
				</li>
				<li>&nbsp;&nbsp;
					<a href="contact.php">Contact us</a>
				</li>
				<li>&nbsp;&nbsp;
					<a href="login.php">Login</a>
				</li>
				
			</ul>
			</div>
			</body>
			<body>
			<div class="bg">
	<div id="contents">
		<div>
			<div class="body" id="contact">
			<div id="main">
					<h1>DATABASE</h1>
					
					
					<form action="database2.php" method="post" enctype="multipart/form-data">
						<label>Criminal's name</label>
						<input type="text" name="Criminalname" value="">
						<label>Age</label>
						<input type="text" name="Age" value="">
						<label>Place</label>
						<input type="text" name="Place" value="">
						<label>Crime</label>
						
						<input type="textarea" name="Crime" value="">
						<label>Image</label>
						
						<input type="file" name="image" id="image" />  
                     <br />  
                     
						<input type="submit" name="insert" value="Insert" class="btn1">
						
					</form>
					
		</div>
	</div>
	</div>
	</div>
	</div>

           
	</body>
	</html>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  