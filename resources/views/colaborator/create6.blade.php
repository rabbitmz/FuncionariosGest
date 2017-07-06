@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{ __('messages.collaborator.title')
			}}</span>
	</div>

	<div class="panel-body">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 ">
				<h2>Profissional Inserido com Sucesso</h2>
			
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-4 ">
			
				<img alt="Sucesso" src="{{ asset('images/success.png') }}" width="250" height="250">
			</div>
		</div>
	</div>
</div>
@endsection
