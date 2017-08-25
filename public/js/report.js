$(document).ready(function() {
	$('#educationLevel').on('change', function() {
		if (this.value == '1') {
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