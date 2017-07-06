$(document).ready(function(){
    // EDITOR TABLE
    var $modal = $('#course-modal'),
	$editor = $('#course'),
	$editorTitle = $('#course-title'),
	ft = FooTable.init('#courseTable', {
		editing: {
			enabled: true,
			addRow: function(){
				$modal.removeData('row');
				$editor[0].reset();
// $editorTitle.text('Add a new row');
				$modal.modal('show');
			},
			editRow: function(row){
				var values = row.val();
				$editor.find('#course').val(values.course);
				$editor.find('#courseGraduationDate').val(moment(values.courseGraduationDate, 'DD-MM-YYYY'));
				$editor.find('#courseCategory').val(values.courseCategory);
				$editor.find('#institutionName').val(values.institutionName);
				$editor.find('#institutionCountry').val(values.institutionCountry);
				$editor.find('#institutionProvince').val(values.institutionProvince);
				
				$modal.data('row', row);
				$editorTitle.text('Editar Linha #' + values.course);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Voce tem certeza que deseja remover este curso?')){
					// MANDAR PARA A BD
					row.delete();
				}
			}
		}
	}),
	uid = 10;

	$editor.on('submit', function(e){
		if (this.checkValidity && !this.checkValidity()) return;
		e.preventDefault();
		var row = $modal.data('row'),
			values = {
				course: $editor.find('#course').val(),
				courseGraduationDate: moment($editor.find('#courseGraduationDate').val(), 'DD-MM-YYYY'),
				courseCategory: $editor.find('#courseCategory').val(),
				institutionName: $editor.find('#institutionName').val(),
				institutionCountry: $editor.find('#institutionCountry').val(),
				institutionProvince: $editor.find('#institutionProvince').val()
			};
		// MANDAR PARA A BD
		if (row instanceof FooTable.Row){
			row.val(values);
		} else {
			values.id = uid++;
			ft.rows.add(values);
		}
		$modal.modal('hide');
	});
	});