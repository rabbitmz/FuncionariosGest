@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li> @endforeach
		</ul>
	</div>
	@endif

	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.search.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/viewColaborator/page2'])}}
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.search.subtitle1') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('lname',trans('messages.collaborator.name').' :',
							['for' => 'name' ]) !!}</div>
						<div class="col-lg-6">{!! Form::text('name',null,['class' =>
							'form-control ', 'id' => 'name']) !!}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.search.subtitle2') }}</span>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-lg-2">{!!
							Form::label('ldoc',trans('messages.collaborator.identificationDocument').' :',
							['for' => 'docNumber' ]) !!}</div>
						<div class="col-lg-6">{!! Form::text('docNumber',null,['class' =>
							'form-control ', 'id' => 'docNumber']) !!}</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 ">{!!Form::submit('Procurar',['class' => 'btn
				pull-right']); !!}</div>
		</div>
		{{Form::close()}}
	</div>
</div>
@endsection
