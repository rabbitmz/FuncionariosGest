$(document).ready(function(){
	$('#educationLevel').on('change',function(){
		if(this.value=='WITH')
			{
				$("#educationLevelSection").show();
			}
		else
			{
				$("#educationLevelSection").hide();
			}
	});

    $('#birthDate').datepicker({
        maxViewMode: 1,
        orientation: "bottom auto"
    });

    $('#dateValid').datepicker({
        maxViewMode: 1,
        orientation: "bottom auto"
    });

    $('#dateIssue').datepicker({
        maxViewMode: 1,
        orientation: "bottom auto"
    });

    $('#contractStartDate').datepicker({
        maxViewMode: 1,
        orientation: "bottom auto"
    });

    $('#unemployedStartDate').datepicker({
        maxViewMode: 1,
        orientation: "bottom auto"
    });

    // Tipo de contrato laborarl
	$('#type1').on('change',function(){
		if(this.value=='CONTRATADO')
			{
				$("#laboralContractedTypeData").show();
				$("#laboralUnemployedTypeData").hide();

			}
		else
			if(this.value=='DESEMPREGADO')
			{
				$("#laboralContractedTypeData").hide();
				$("#laboralUnemployedTypeData").show();
			}
			else
				{
					$("#laboralContractedTypeData").hide();
					$("#laboralUnemployedTypeData").hide();

				}
	});


    // EDITOR TABLE
    var $modal = $('#editor-modal'),
	$editor = $('#editor'),
	$editorTitle = $('#editor-title'),
	ft = FooTable.init('#unofficialWork', {
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
				$editor.find('#workArea').val(values.workArea);
				$editor.find('#levelInformal').val(values.levelInformal);
				$editor.find('#startedOn').val(moment(values.startedOn, 'DD-MM-YYYY'));
				$editor.find('#finishOn').val(moment(values.finishOn, 'DD-MM-YYYY'));

				$modal.data('row', row);
				$editorTitle.text('Editar Linha #' + values.workArea);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Voce tem certeza que deseja remover a experiencia de trabalho informal?')){
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
				workArea: $editor.find('#workArea').val(),
				levelInformal: $editor.find('#levelInformal').val(),
				startedOn: moment($editor.find('#startedOn').val(), 'DD-MM-YYYY'),
				finishOn: moment($editor.find('#finishOn').val(), 'DD-MM-YYYY')
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


	$('#naturalidade_provincia').on('change', function(e) {

			var provincia_id = e.target.value;

			//ajax
			$.getJSON("/ajax-call?provincia_id="+provincia_id, function (data) {

//console.log(data);
					$('#naturalidade_distrito').empty();
					$.each(data, function(index, distritoObj){
							$('#naturalidade_distrito').append('<option value="'+distritoObj.id+'">'+distritoObj.nome+'</option>');
					});
			});
	});

		$('#endereco_provincia').on('change', function(e) {

				var provincia_id = e.target.value;
							//ajax
				$.getJSON("/ajax-call?provincia_id="+provincia_id, function (data) {

	//console.log(data);
						$('#endereco_distrito').empty();
						$.each(data, function(index, distritoObj){
								$('#endereco_distrito').append('<option value="'+distritoObj.id+'">'+distritoObj.nome+'</option>');
						});
				});
		});

		$('#endereco_distrito').on('change', function(e) {

				var distrito_id = e.target.value;
							//ajax
				$.getJSON("/ajax-admPost?distrito_id="+distrito_id, function (data) {

	//console.log(data);
						$('#admPost').empty();
						$.each(data, function(index, distritoObj){
								$('#admPost').append('<option value="'+distritoObj.id+'">'+distritoObj.nome+'</option>');
						});
				});
		});

	});
