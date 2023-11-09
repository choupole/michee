<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Property</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="  {{asset ('AdminProp/vendors/images/apple-touch-icon.png')}} ">
	<link rel="icon" type="image/png" sizes="16x16" href=  " {{asset ('AdminProp/vendors/images/hoteldeville.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/style.css')}}">

	<style>
	.artistic-heading {
  background: linear-gradient(to right, #0000ff, #ff0000) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  font-family: 'Arial', sans-serif !important;
}

.gradient-background {
   background: linear-gradient(to right, rgba(255, 0, 0, 0.5), rgba(0, 0, 255, 0.5));
   color: #fff;
}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li class="float-end"><a href="{{ route('register') }}">S'enregistrer</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{asset ('AdminProp/vendors/images/prop_login.png')}}" alt="non image" class="w-100"  alt="">
				</div>
				<div class="col align-items-center">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center artistic-heading">Connectez-vous à Ndaku.com</h2>
						</div>
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ __($error) }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="input-group custom">
								<input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="current-password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="remember_me" name="remember_token" class="custom-control-input" id="remember_me">
										<label class="custom-control-label" for="remember_me">{{ __('Remember') }}</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input class="btn btn-primary btn-lg btn-block gradient-background" type="submit" value="{{ __('Se Connecter') }}">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>