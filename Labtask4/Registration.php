<?php
        $name="";
        $err_name="";
        $uname="";
        $err_uname="";
        $pass="";
        $err_pass="";
        $err_upass="";
        $err_lpass="";
        $err_npass="";
        $err_spass="";
        $cpass="";
        $err_cpass="";
        $email="";
        $err_email="";
        $phn="";
        $err_phn="";
        $add="";
        $err_add="";
        $gender="";
        $err_gender="";
        $dob="";
        $err_dob="";
        $hear="";
        $err_hear="";
        $bio="";
        $err_bio="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $err_name="Name required";
            }
            else if(strlen($_POST["name"]) < 6){
                $err_name="Name must be more than 6 characters long";
            }
            else if(strpos($_POST["name"]," ")){
                $err_name="Name should not contain whitespace";
            }

            else{   
                $name=$_POST["name"];

            }

            if(empty($_POST["uname"])){
                $err_uname="User name required";
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="Username must be more than 6 characters long";
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Username should not contain whitespace";
            }

            else{   
                $uname=$_POST["uname"];

            }
            $up=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_lower($up[$i])){
                    $upt=true;
                    break;
                }
                else{
                    $upt=false;
                }
            }
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_lower($up[$i])){
                    $lowt=true;
                    break;
                }
                else{
                    $lowt=false;
                }
            }
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(is_numeric($up[$i])){
                    $numt=true;
                    break;
                }
                else{
                    $numt=false;
                }
            }
        
            if(strpos($_POST["pass"],"?")||strpos($_POST["pass"],"#")){
                    $sp=true;
            }
            else{
                $sp=false;
            }


            if(empty($_POST["pass"])){
                $err_pass="Enter pass";
                
            }
            else if(strlen($_POST["pass"])<8){
                $err_pass="Password must be more than 6 characters long";
            }
            else if(strpos($_POST["pass"]," ")){
                $err_pass="Password should not contain whitespace";
            }
            
            else if($upt==false){
                $err_upass="Must contain Uppercase letter";
            }
            else if($lowt==false){
                $err_lpass="Must contain Lowerrcase letter";
            }
            else if($numt==false){
                $err_npass="Must contain Number";
            }
            else if($sp==false){
                $err_spass="Must contain special character # or ?";
            }

            else{   
                $pass=htmlspecialchars($_POST["pass"]);

            }
            if(empty($_POST["pass"])){
                $err_cpass="Confirm password";
                
            }
            else if($_POST["cpass"]!=$pass){
                $err_cpass="Password not matching";
            }
            if(empty($_POST["mail"])){
                $err_mail="Email required";
            }
            else if(!strpos($_POST["mail"],"@")){
                $err_mail="Email must contain @";
            }
            else{   
                $name=htmlspecialchars($_POST["mail"]);

            }
            if(empty($_POST["phn"])){
                $err_phn="Contact number required";
            }
            else if(strlen($_POST["phn"]) > 11){
                $err_phn="Number must be more than 11 characters ";
            }
            else if(strpos($_POST["phn"]," ")){
                $err_phn="phn should not contain whitespace";
            }

            else{   
                $phn=$_POST["phn"];

            }
            if(empty($_POST["add"])){
                $err_add="Address required";
            
            }
            
            else{   
                $add=$_POST["add"];

            }


            if(empty($_POST["gender"])){
                $err_gender="Gender must be selected";
            }
            else{
                $gender=$_POST["gender"];
            }

            if(empty($_POST["Date of Birth"])){
                $err_dob="Date of birth must be selected";
            }
            
            else{
                $dob=$_POST["Date of birth"];
            }

            if(isset($_POST["hear[]"])){
                $err_hear="you must tell us from where did you hear about us";
            }
            else{
                $hear=$_POST["hear[]"];
            }
            if(empty($_POST["tarea"])){
                $err_bio="Bio should not be empty";
            }
            else{
                $bio=$_POST["tarea"];
            }
           
           
        
        }
    ?>
    



<html>
<head>
</head>
<form action="/action_page.php">
  <fieldset style="width:800px"> 
  <legend><h1>Club Member Registration</h1></legend>
  
<body>
        <form action="" method="post">
            <table>
                <tr>
                    <td><span>Name</span></td>
                    <td>: <input type="text" name="name" placeholder ="Name">
                        <span><?php echo $err_name;?></span></td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input type="text" name="uname" placeholder ="Username">
                        <span><?php echo $err_uname;?></span></td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input type="password" name="pass" placeholder ="Password">
                    <span><?php echo $err_pass;?></span></td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input type="password" name="cpass" placeholder ="Confirm Password">
                    <span><?php echo $err_cpass;?></span></td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td>: <input type="text" name="email" placeholder ="Email">
                    <span><?php echo $err_email;?></span></td>
                </tr>
                <tr>
                    <td><span>Phone</span></td>
                    <td>
                    : <input type="text" name="phn" placeholder ="Code">
                    - <input type="text" name="phn" placeholder ="Number">
                    </td>
                    <span><?php echo $err_phn;?></span></td>
                </tr>
                <tr>
                    <td><span>Address</span></td>
                    <td>
                     : <input type="text" name="StreetAddress" placeholder ="StreetAdress"></br>
                     : <input type="text" name="City" placeholder ="City">
                     - <input type="text" name="State" placeholder ="State"></br>
                     : <input type="text" name="Postal/zip code" placeholder ="Postal/Zipcode"></br>
                    </td>
                    <span><?php echo $err_phn;?></span></td>
                </tr>
                <tr>
                    <td><span>Date of birth</span></td>
                    <td> : <select name ="day">
                    <option disabled selected>Day</option>
                    <?php
		             for($date = 1; $date <= 31; $date++)
		             echo"<option value = '".$date."'>".$date."</option>";
	                ?>
                    </select>
                    <select name ="Month">
                    <option disabled selected>Month</option>
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sept</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                    </select>
                    <select name ="Year">
                    <option disabled selected>Year</option>
                    <?php
		             for($Year = 1985; $Year <= 2000; $Year++)
		             echo"<option value = '".$Year."'>".$Year."</option>";
	                ?>
                    </select>
                    <span><?php echo $err_dob;?></span></td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>: <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="male">Female
                          <span><?php echo $err_gender;?></span></td>
                </tr>
                <tr>
                    <td><span>Where did you hear about us :</span></td>
                    <td>
                    <input type="checkbox"value="Google" name="hear[]">Google</br>
                    <input type="checkbox" value="From a Friend" name="hear[]">From a friend</br>
                    <input type="checkbox" value="Blogpost" name="hear[]">Blogpost</br>
                    <input type="checkbox" value="Newsarticle" name="hear[]">Newsarticle</br> 
                    </td>
                    <span><?php echo $err_hear;?></span></td>
                </tr>
                
                <tr>
                    <td><span>Bio:</span></td>
                    <td><textarea name="tarea"></textarea><br>
                    <p><input type="submit" value="Register" ></p>
                    <span><?php echo $err_bio;?></span></td>


            </table>


        </form>    
</body>
</fieldset>
</html>