<!DOCTYPE html>
<html lang="en">
<head>
function fnameCheck(){
    var fname= document.getElementById("fname").value;
    if(fname == ""){
        document.getElementById("fnameError").innerHTML= "Please Enter name";
        return error +=1;
    }
    else if(!isNaN(fname)){
        document.getElementById("fnameError").innerHTML= "Name Must be Alphabets";
        return false;
    }
    else{
        document.getElementById("fnameError").innerHTML= "OK";
        return true;           
    }

}
function lnameCheck(){
    var lname= document.getElementById("lname").value;
    if(lname == ""){
        document.getElementById("lnameError").innerHTML= "Please Enter name";
        return false;
    }
    else if(!isNaN(lname)){
        document.getElementById("lnameError").innerHTML= "Name Must be Alphabets";
        return false;
    }
    else{
        document.getElementById("lnameError").innerHTML= "OK";
        return true;           
    }

}

function ageCheck(){
    var age = document.getElementById("age").value;
    if(age == ""){
        document.getElementById("ageError").innerHTML="Please Enter age";
        return false;
    }
    else if(!Number(age)){
        document.getElementById("ageError").innerHTML="Age must be number";
        return false;
    }
    else{
        document.getElementById("ageError").innerHTML= "OK";
        return true;
    }
}

function emailCheck(){
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("emailError").innerHTML="Please Enter Email";
        return false;
    }
    else if(!email.includes("@") || !email.includes(".com")){
        document.getElementById("emailError").innerHTML="Must contain @ and '.com'";
        return false;
    }
    else{
        document.getElementById("emailError").innerHTML="OK";
        return true;
    }
}
function isPasswordSecure(password) {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};
function passCheck(){
 
    var pass =  document.getElementById("pass").value;
    if(pass == ""){
        document.getElementById("passError").innerHTML="Please Enter Password";
        return false;
    }
    else if(pass.length < 8){
        document.getElementById("passError").innerHTML =' Weak Password. ';
        error += 1;
        return false;
    }
    else{
        document.getElementById("passError").innerHTML="OK";
        return true;
    }
}

function validateForm(){
    if(fnameCheck() == false || lnameCheck() == false || ageCheck() == false || emailCheck() == false || passCheck()== false      ){
        return false;
    }
    else {
        return true;
    }
}



    <title>My Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="top">
    <h1 class="header">
        ABC management System
    </h1>
    <h2 class="subheader">
        We create future
    </h2>
    </div>
    <div class="navbar">
        <a href="#" class="nav-menu">Home</a>
        <a href="#" class="nav-menu" >About Us</a>
        <a href="#" class="nav-menu">Shop</a>
    </div>
    <h1 class="registration">Registration Form</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" name="userForm" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value="" id="fname" onkeyup = "fnameCheck()"></td>
				<td id="fnameError"><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value="" id="lname" onkeyup="lnameCheck()"></td>
                <td id="lnameError"><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="text" name="age" value="" id="age" onkeyup="ageCheck()"></td>
                <td id="ageError"></td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>
                    <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation" value="Project Lead">Project Lead
            
                </td>
            </tr>
            <tr>
                <td>Preferred Language : </td>
                <td>
                    <input type="checkbox" name="language[]" value="java">JAVA
                    <input type="checkbox" name="language[]" value="PHP">PHP
                    <input type="checkbox" name="language[]" value="C++">C++
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email" value="" id="email" onkeyup="emailCheck()"></td>
                <td id="emailError"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value="" id="pass" onkeyup="passCheck()"></td>
                <td id="passError"></td>
            </tr>
            <tr>
                <td>Please Choose a file : </td>
                <td><input type="file" name="file" value=""></td>
</tr>
            
            
        </table>
        <input type="submit" name="submit" onsubmit="return validateForm()" class="btn sumbit" value="submit">
                <input type="reset" class="btn sumbit" value="Reset">
    </form>


    
</body>
</html>