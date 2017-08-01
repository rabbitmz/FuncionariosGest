@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.pageOne.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/createColaborator/page4'])}}
		<!-- 	Competencias na area -->
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.skills') }}</span>
			</div>

			<div class="panel-body">
				<!-- 				Fazer um for para criar checkbox baseados na lista de competencias possiveis -->
				<table class="table" id="competenciaTable"
					data-editing-always-show="true">
					<thead>
						<tr>
							<th data-name="comp">{{__('messages.collaborator.skill.label') }}</th>
							<th data-name="desc">{{__('messages.collaborator.description.label')}}
							</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 ">{!!Form::submit('Seguinte',['class' => 'btn
				pull-right']); !!}</div>
		</div>
		{{Form::close()}}
	</div>
	<!-- EDITOR MODAL -->
	<div class="modal fade" id="competencia-modal" tabindex="-1"
		role="dialog" aria-labelledby="competencia-title">
		<div class="modal-dialog" role="document">
			<form class="modal-content form-horizontal" id="competencia">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="competencia-title">{{__('messages.collaborator.skills.modal.title')
						}}</h4>
				</div>
				<div class="modal-body">
					<div class="form-group required">
						<label for="comp" class="col-sm-3 control-label">{{__('messages.collaborator.work.area')
							}}</label>
						<div class="col-sm-9">{!! Form::select('comp', ['comp1' =>
							'Competencia 1', 'comp2' => 'Competencia 2','comp3' =>
							'Competencia 3', 'comp4' => 'Competencia 4' ], null, ['class' =>
							'form-control required', 'id' => 'comp']) !!}</div>
					</div>
					<div class="form-group required">
						<label for="desc" class="col-sm-3 control-label">{{__('messages.collaborator.work.area')
							}}</label>

						<div class="col-sm-9">{!!Form::text('desc',null,['class' =>
							'form-control ', 'id' => 'desc']) !!}</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">{{__('messages.save')
						}}</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">{{__('messages.cancel')
						}}</button>
				</div>
			</form>
		</div>
	</div>

</div>

@endsection @section('scripts')
<script src="{{ asset('js/colaborator3.js') }}"></script>
@endsection
