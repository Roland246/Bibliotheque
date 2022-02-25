<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v4 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="{{URL::asset('images/registration-form-4.jpg')}}" alt="">
				</div>
				<form action="{{route('register-user')}}" method="POST">
                    @csrf
					<h3 class="fw-bolder">Inscription</h3>
					<div class="form-holder active">
						<input type="text" name="name" placeholder="nom" value="{{old('name')}}" class="form-control">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
					</div>
					<div class="form-holder">
						<input type="text" name="email" placeholder="e-mail" value="{{old('email')}}" class="form-control">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
					</div>
					<div class="form-holder">
						<input type="password" name="password" value="{{old('password')}}" placeholder="Mot de passe" class="form-control" style="font-size: 15px;">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
					</div>
					<div class="form-login">
						<button>S'inscrire</button>
						<p>Déjà un compte ? <a href="login">Se connecter</a></p>
					</div>
				</form>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>

        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if(Session::has('success'))
            <script>
                swal({
                    title: "Super !",
                    text: "Inscription effectuée avec succès.",
                    icon: "success",
                    button: "OK",
                });
            </script>
        @endif

        @if(Session::has('fail'))
        <script>
            swal({
                title: "Oops !",
                text: "Erreur.",
                icon: "error",
                button: "OK",
            });
        </script>
    @endif
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
