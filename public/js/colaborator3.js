$(document).ready(function(){
    // EDITOR TABLE
    var $modal = $('#competencia-modal'),
	$editor = $('#competencia'),
	$editorTitle = $('#competencia-title'),
	ft = FooTable.init('#competenciaTable', {
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
				$editor.find('#comp').val(values.comp);
				$editor.find('#desc').val(values.desc);

				$modal.data('row', row);
				$editorTitle.text('Editar Linha #' + values.workArea);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Voce tem certeza que deseja remover a competencia?')){
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
				comp: $editor.find('#comp').val(),
				desc: $editor.find('#desc').val()+"descricao"
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