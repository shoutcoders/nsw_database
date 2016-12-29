
<html>
    <head>
        <title>Database Design</title>
        <style>
            form {
    text-align: center;
}
            .regbutton {
    margin: 5px;
    padding: 8px;
                }
        </style>
    </head>

    <body>
        <form method="get" action="">
            
            <h2> Register Here </h2>
            <input type="text" placeholder="Enter Your Name"    name="name" class="regbutton"/><br>
            <input type="email" placeholder="Enter Your E-mail"     name="email" class="regbutton"/> <br> 
            <input type="password" placeholder="Set Your Password"  name="password" class="regbutton"/><br>
            <input type="text" placeholder="Enter Your Contact No"  name="contact" class="regbutton"/><br>
            <input type="text" placeholder="Enter Your Address"     name="address" class="regbutton"/><br>
            
            <label>Admin Type</label>
            
            <select name='admintype'>
                <option value="state" >State</option>
                <option value="district">District</option>
                <option value="block">Block</option>
                <option value="panchayat">Panchayat</option>
                <option value="ward">Ward</option>
            </select><br>
            
            <input type="text" placeholder="Enter Referal ID" id="referal" class="regbutton"/><br>
            
            <input type='submit' value="Register" name="register" class="regbutton"/> <input type="reset" value="Reset" class="regbutton"/> 
            
            
        </form> 
    
   <?php
      
if(isset($_POST["register"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$admintype=$_POST["admintype"];
	
		
	$con=mysql_connect("localhost","admin","654321");
	mysql_select_db("nsw_database",$con);
	
	
	$query="insert into admin1 (name,email,password,contact,address,admintype) value ('$name','$email','$password','$contact','$address','$admintype')";
	
	mysql_query($query);
	echo "Registration Successful";
	
}


?>
        
        
    
    </body>
</html>


