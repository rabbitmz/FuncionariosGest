@extends('template.standard') @section('title', 'Inicial')

@section('content')
<div class="panel panel-default mukheroHack ">
	<div class="panel-heading panel-red-heading">
		<span class="panel-heading-text"> {{
			__('messages.collaborator.pageOne.title') }}</span>
	</div>

	<div class="panel-body">
		{{Form::open(['url' => '/createColaborator/page5'])}}
		<!-- 	cursos na area -->
		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.course.title') }}</span>
			</div>
			<div class="panel-body">
				<table class="table" id="courseTable"
					data-editing-always-show="true">
					<thead>
						<tr>
							<th data-name="course">{{__('messages.collaborator.course.name')}}</th>
							<th data-name="courseGraduationDate" data-breakpoints="xs sm"
								data-type="date" data-format-string="MMMM Do YYYY">{{__('messages.collaborator.course.date.graduation')}}</th>
							<th data-name="courseCategory">{{__('messages.collaborator.course.category')}}</th>
							<th data-name="institutionName">{{__('messages.collaborator.course.school')}}</th>
							<th data-name="institutionCountry">{{__('messages.collaborator.course.school.country')}}</th>
							<th data-name="institutionProvince">{{__('messages.collaborator.course.school.province')}}</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading sub-panel-color-heading">
				<span class="panel-heading-text"> {{
					__('messages.collaborator.aditional.information') }}</span>
			</div>
			<div class="panel-body">
				{{ Form::textarea('aditionalInformation', null, ['size' => '115x5']) }}
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 ">{!!Form::submit('Seguinte',['class' => 'btn
				pull-right']); !!}</div>
		</div>
		{{Form::close()}}
	</div>
	<!-- EDITOR MODAL -->
	<div class="modal fade" id="course-modal" tabindex="-1" role="dialog"
		aria-labelledby="course-title">
		<div class="modal-dialog" role="document">
			<form class="modal-content form-horizontal" id="course">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="course-title">{{__('messages.collaborator.course.modal.title')}}</h4>
				</div>
				<div class="modal-body">
					<div class="form-group required">
						<label for="course" class="col-sm-3 control-label">{{__('messages.collaborator.course.name')}}</label>
						<div class="col-sm-9">{!!Form::text('course',null,['class' =>
							'form-control ', 'id' => 'course']) !!}</div>
					</div>
					<div class="form-group required">
						<label for="courseGraduationDate" class="col-sm-3 control-label">
							{{__('messages.collaborator.course.date.graduation')}} </label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="courseGraduationDate"
								name="startedOn" placeholder="dd/mm/AAAA" required>
						</div>
					</div>

					<div class="form-group required">
						<label for="courseCategory" class="col-sm-3 control-label">{{__('messages.collaborator.course.category')}}</label>
						<div class="col-sm-9">{!! Form::select('courseCategory',
							['Categoria1' => 'Categoria 1', 'Categoria 2' => 'Categoria
							2','Categoria3' => 'Categoria 3', 'Categoria4' => 'Categoria 4'
							], null, ['class' => 'form-control required', 'id' =>
							'courseCategory']) !!}</div>
					</div>
					<div class="form-group required">
						<label for="institutionName" class="col-sm-3 control-label">{{__('messages.collaborator.course.school')}}</label>
						<div class="col-sm-9">{!!Form::text('institutionName',null,['class'
							=> 'form-control ', 'id' => 'institutionName']) !!}</div>
					</div>
					<div class="form-group required">
						<label for="institutionCountry" class="col-sm-3 control-label">{{__('messages.collaborator.course.school.country')}}</label>
						<div class="col-sm-9">{!! Form::select('institutionCountry',
							['Mocambique' => 'Mocambique', 'Africa do Sul' => 'Africa do
							Sul','Namibia' => 'Namibia', 'Zimbabwe' => 'Zimbabwe' ], null,
							['class' => 'form-control required', 'id' =>
							'institutionCountry']) !!}</div>
					</div>
					<div class="form-group required">
						<label for="institutionProvince" class="col-sm-3 control-label">{{__('messages.collaborator.course.school.province')}}</label>
						<div class="col-sm-9">{!! Form::select('institutionProvince',
							['Provincia 1' => 'Provincia', 'Provincia 2' =>
							'Provincia','Provincia 3' => 'Provincia', 'Provincia 4' =>
							'Provincia' ], null, ['class' => 'form-control required', 'id' =>
							'institutionProvince']) !!}</div>
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
<script src="{{ asset('js/colaborator4.js') }}"></script>
@endsection
