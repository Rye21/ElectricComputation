$(document).on('keyup','#code_number',function(){
	if( !$("#code_number").val().match(/^[0-9A-Z]{7}-[0-9A-Z]{4}$/) ) {
		return false;
	}
	$.ajax({
		type: 'post',
		url: 'check2/check_PlanNumber.php',
		data: {
			code_number: $("#code_number").val()
		}
	}).done(function(data){
		$("#plan_number").html(data)
	}).fail(function(data){
		alert('Failed.')
	})
})

/* $(document).on('change','#plan_shio_number,#category',function(){
	//$("#loading").html('<img src="loading.gif">')
	$.ajax({
		type: 'post',
		url: 'ajax_get_shiyousho_data.php',
		data: {
			code_number: $("#code_number").val(),
			siyoCode: $("#plan_shio_number").val(),
			category: $("#category").val()
		}
	}).done(function(data){
		$("#loading").empty()
		$("#data_area").html(data)
	}).fail(function(data){
		$("#loading").empty()
		alert('Failed.')
	})
}) */