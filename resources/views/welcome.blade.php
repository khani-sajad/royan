<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>صفحه ورود به اپلیکیشن رویان</title>
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="icon" href="{{asset('img/favicon.png')}}">
</head>

<body>

  <div class="wrapper">

    <div class="socials">
      <a target="_blank" href="http://iqcard.ir">
        <i class="fa fa-globe fa-3x"></i>
      </a>
      <a target="_blank" href="https://www.instagram.com/iqcard.ir/">
        <i class="fa fa-instagram fa-3x"></i>
      </a>
      <a target="_blank" href="http://telegram.me/iqcard">
        <i class="fa fa-telegram fa-3x"></i>
      </a>
      <a target="_blank" href="http://twitter.com">
        <i class="fa fa-twitter fa-3x"></i>
      </a>
      <a target="_blank" href="http://facebook.com">
        <i class="fa fa-facebook fa-3x"></i>
      </a>
    </div>

	<div class="container">
		<h1>رویان رسانه</h1>

		<form class="form" action="{{ route('login') }}" method="post" >
      {{ csrf_field() }}
			<input type="text" name="username" value="{{ old('username') }}" placeholder="نام کاربری">
			<input type="password" name="password" placeholder="گذرواژه">
			<button type="submit" id="login-button">ورود</button>
      <br><br>
      <label for="checkbox">مرا به خاطر بسپار</label>
      <i id="check" class="fa fa-square-o"></i>
      <input type="checkbox hidden" id="checkbox" name="remember" checked="false" style="display:none">
		</form>

	</div>

	<ul class="bg-bubbles">
    @for ($i = 0; $i < 10; $i++)
      <li></li>
    @endfor
	</ul>

  {{-- <div class="register">
    <a href="void::javascript(0)" id="register">ثبت نام</a>
  </div> --}}

</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
