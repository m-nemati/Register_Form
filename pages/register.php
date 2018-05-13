<?php
	session_start();
	require_once ('connectdb.php');
	$resultok='';
	if(isset($_POST['registerData']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$uname=$_POST['uname'];
		$pass=hash_value($_POST['password']);
		$email=$_POST['email'];

		$stmt=$conn->prepare("INSERT INTO tbl_users (fname,lname,account,pass,email) 
							 VALUES (:fname,:lname,:uname,:pass,:email)");
		$stmt->bindParam(':fname',$fname);
		$stmt->bindParam(':lname',$lname);
		$stmt->bindParam(':uname',$uname);
		$stmt->bindParam(':pass',$pass);
		$stmt->bindParam(':email',$email);

		$stmt->execute();
		$resultok="ثبت نام شما با موفقیت انجام شد.";

	}

	function hash_value($value){
		return md5($value);
	}
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>عضویت در سایت</title>
	<link rel="stylesheet" href="../styles/style1.css">
	<link rel="stylesheet" href="../fontawesome/css/fontawesome-all.min.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/myjquery.js"></script>
</head>

<body>
	<header>
		<h1>برنامه نویسی مبتنی بر وب</h1>

	</header>
	<nav>
		<img src="../images/menu-icon.png" id="menu_icon">
		<ul>
			<li>
				<a href="#" class="active">صفحه اصلی</a>
			</li>
			<li>
				<a href="#">سورس کد</a>
			</li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">دانلود
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="myDropdown">
						<a href="#">نرم افزار</a>
						<a href="#">کتاب</a>
						<a href="#">فیلم آموزشی</a>
					</div>
				</div>
			</li>
			<li>
				<a href="#">پروژه</a>
			</li>
			<li>
				<a href="#">درباره ما</a>
			</li>
		</ul>
	</nav>
	<!--main-->
	<div class="main">
		<!--content -->
		<section>
        <div class="content">
            <h2>عضویت در سایت</h2>
			<img src="../images/register.jpg" alt="site register logo" id="register_img">
			<div id="showok">
				<?php echo $resultok ?>
			</div>
            <form action="register.php" method="post" id="registerForm" name="frm1">
                <span>نام:</span>
                <input type="text" name="fname" placeholder="نام..." autofocus>
                <br><br>
                <span>نام خانوادگی:</span>
                <input type="text" name="lname" placeholder="نام خانوادگی...">
                <br><br>
                <span>نام کاربری:</span>
                <input type="text" name="uname" placeholder="نام کاربری...">
                <br><br>
                <span>رمز عبور :</span>
                <input type="password" name="password" placeholder="رمز عبور ...">
                <br><br>
                <span>ایمیل :</span>
                <input type="text" name="email" placeholder="example@domain.com">
                <br><br>
                <input type="submit" value="تائید اطلاعات" name="registerData">
				<input type="reset" value="پاک کردن">
				<br><br>

			</form>
        </div>
		</section>

		<!--sidebar -->
		<aside>				
		</aside>
	</div>


	<footer>
		<div class="copyright">
			<p>طراحی شده توسط m.nemati@ تمامی حقوق محفوظ است. 97-1396 </p>
		</div>
		<div class="socials">
			<ul>
				<li>
					<a href="#" target="_blank">
						<img src="../images/telegram.png" alt="Telegram Icon">
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<img src="../images/gp.png" alt="Google Pluse Icon">
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<img src="../images/insta.png" alt="Instagarm Icon">
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<img src="../images/aparat.png" alt="Aparat Icon">
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<img src="../images/twitter.png" alt="twitter icon">
					</a>
				</li>
			</ul>
		</div>
	</footer>
	<img src="../images/top.png" alt="to top button" id="to_top">
</body>

</html>