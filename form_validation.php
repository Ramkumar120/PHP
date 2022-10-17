<html>
    <body>
<h1>Sign up</h1>
<?php
$nameErr =$emailErr=$emailErr1=$nameErr1= "";
$email_pattern=("/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/");
$name_pattern="/^[a-zA-Z'. -]+$/";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
      $nameErr="*Name is required";
    } elseif (!preg_match($name_pattern,$_POST["name"])){
        $nameErr1="*Name only contain alphabets";
    }
    if (empty($_POST["email"])) {
        $emailErr="*Email is required";
    } elseif(!preg_match($email_pattern,$_POST["email"])) {
        $emailErr1="*Invalid email";
    }   
          
  }
?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
<div><?php echo "$nameErr";?></div>
<div><?php echo "$nameErr1";?></div>
Name: <input type="text" name="name"><br>
<div><?php echo "$emailErr";?></div>
<div><?php echo "$emailErr1";?></div>
E-mail: <input type="email" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
Female<input type="radio" name="gender" value="female">
Male<input type="radio" name="gender" value="male">
Others<input type="radio" name="gender" value="other">
<input type="submit">
</form>
<?php
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "You have submitted the form";
}
?>
</body>
</html>