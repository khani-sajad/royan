<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>صفحه ورود به اپلیکیشن رویان</title>
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>

<body>

  <div class="wrapper">

    <div class="socials">
      <a target="_blank" href="http://instagram.com"><i class="fa fa-instagram fa-3x"></i></a>
      <a target="_blank" href="http://telegram.me"><i class="fa fa-telegram fa-3x"></i></a>
      <a target="_blank" href="http://facebook.com"><i class="fa fa-facebook fa-3x"></i></a>
      <a target="_blank" href="http://twitter.com"><i class="fa fa-twitter fa-3x"></i></a>
    </div>

	<div class="container">
		<h1>رویان رسانه</h1>

		<form class="form" action="{{ route('login') }}" method="post" >
      {{ csrf_field() }}
			<input type="text" name="username" value="{{ old('username') }}" placeholder="نام کاربری">
			<input type="password" name="password" placeholder="گذرواژه">
			<button type="submit" id="login-button">ورود</button>
      <br><br>
      <label for="checkbox" style="font-family:yekan">مرا به خاطر بسپار</label>
      <i id="check" class="fa fa-square-o ml-2"></i>
      <input type="checkbox" id="checkbox" name="remember" checked="false" style="display:none">
		</form>

	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

  <div class="register">
    <a href="void::javascript(0)" id="register">ثبت نام</a>
  </div>

</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="js/login.js"></script>

</body>
</html>
