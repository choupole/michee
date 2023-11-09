<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Formulaire d'inscription</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminProp/vendors/styles/style.css')}}">

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
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{ route('login') }}">Connexion</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center" >
                <div class="col-md-6 col-lg-7">
					<img src="{{asset ('AdminProp/vendors/images/prop6.png')}}" alt="non image" class="w-100"  alt="">
				</div>
				<div class="col align-items-center">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form id="myForm" class="tab-wizard2 wizard-circle wizard" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
								@csrf
								<h5>Information du Compte</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email*</label>
											<div class="col-sm-8">
												<input type="email" name="email" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label" for="password">Mot de passe*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="password" id="password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirmer le mot de passe*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Informations Personnelles</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="Nom">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Postnom</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="Postnom">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Prénom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="Prenom">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Pseudo</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="Pseudo">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Sexe*</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" name="Sexe" title="Choisir un sexe">
													<option value="m">Masculin</option>
													<option value="f">Féminin</option>
												</select>
											</div>
										</div>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Envoyer !</h3>
					Bienvenue dans notre univers, vous allez vous régaler
				</div>
                <div class="modal-footer justify-content-center">
                    <a href="javascript:void(0)" id="submitFormLink" class="btn btn-primary" data-dismiss="modal">OK</a>
                </div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script>
    
		document.getElementById('submitFormLink').addEventListener('click', function() {
			document.getElementById('myForm').submit();
		});
	</script>
    <script src={{asset('AdminProp/vendors/scripts/core.js')}}></script>
    <script src={{asset('AdminProp/vendors/scripts/script.min.js')}}></script>
    <script src={{asset('AdminProp/vendors/scripts/process.js')}}></script>
    <script src={{asset('AdminProp/vendors/scripts/layout-settings.js')}}></script>
    <script src={{asset('AdminProp/src/plugins/jquery-steps/jquery.steps.js')}}></script>
    <script src={{asset('AdminProp/vendors/scripts/steps-setting.js')}}></script>
</body>

</html>