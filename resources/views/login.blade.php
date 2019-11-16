@extends('layouts.temp')
<center><img src="img/logo-2.png"></center>
@section('content')
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h1 class="panel-title"> <center>Iniciar</center></h1>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group ">
							<label for="name" class="col-form-label text-md-right">Usuario</label>
							<input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" name="name" placeholder="Ingresa tu Nombre de Usuario" >
							{!!$errors->first('name','<span class="help-block">:message</span>')!!}
						</div>
						<div class="form-group">
							<label for="password" class="col-form-label text-md-right"> Contraseña</label>
							<input class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" type="password" name="password" placeholder="Ingresa tu Contraseña">
							{!!$errors->first('password','<span class="help-block">:message</span>')!!}
						</div>

						<button class="btn btn-primary btn-block">Acceder</button>
					</form>
				</div>

			</div>
		</div>
	</div>
@endsection