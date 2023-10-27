<?php
if(isset($_post['send'])){

    include "connect.php";

    $name = $_POST['name'];
    $email = $_post['email'];
    $password = $_post['password'];
    $a = $_post['a'];

    $stmt = $db->prepare("INSERT INTO fname(name , email , password , a)
         values(:n,:e,:p,:a)")
$stmt->execute(array(
    'n'=> $name,
    'e' => $email,
    'p' => $password,
    'a' => $a,
));
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8966351593515274"
     crossorigin="anonymous"></script>
	<title>انشاء حساب</title>
    <meta name="google-adsense-account" content="ca-pub-8966351593515274">
</head>
<style> </style>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="post">
        <input type="name" placeholder="name" required size="50" name="name">
        <br>
        <input type="email" placeholder="email" required size="50" name="email">
        <br>
        <input type="password" placeholder="password" required size="50" name="password">
        <br>
        <label >male</label>
        <input type="radio" name="a"placeholder="زكر">
        <label>female</label>
        <input type="radio" name="a" placeholder="انثي">
        <br>
        <input type="reset" size="50">
        <br>
        <input type="submit" placeholder="send" size="50">
    </form>
</body>

</html>