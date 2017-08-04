$(document).ready(function() {
	$('#educationLevel').on('change', function() {
		if (this.value == 'WITH') {
			$("#educationLevelSection").show();
		} else {
			$("#educationLevelSection").hide();
		}
	});

	$('#generalEducation').on('click', function() {
		if ($('#generalEducation').is(':checked')) {
			$("#schoolevelDiv").show();
			
		} else {
			
			$("#schoolevelDiv").hide();
		}
	});
});