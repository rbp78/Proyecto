@extends('layouts.temp')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h2 class="panel-title"> <center>Bienvenido {{auth()->user()->name}}</center></h2>
					<a href="index"><button class="btn btn-primary btn-block" >Continuar</button></a>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<button class="btn btn-primary btn-block">Cerrar Sesión</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
