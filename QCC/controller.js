
function load ( page, perpage, control_number, column , category ) {
	$("#loading").html('<img src="img/Loading_icon.gif">')
	$.ajax({
		type: 'post',
		url: 'select_request_data.php',
		data: {
			page: page,
			perpage: perpage,
			control_number: control_number,
			column: column,
			category: category
		
		}
	}).done(function(result){
		$("#loading").empty()
		$("#images").html(result)
	}).fail(function(result){
		alert('Failed.')
	})
}

//Loading page...
load( 1, $("#perpage").val(), '', $("#column").val(), $("#category").val() )

$(document).on('click','#view', function(){
	load( 1, $("#perpage").val(), $("#keyword").val(), $("#column").val(), $("#category").val() )
})


$(document).on('keyup','#keyword', function(){
	load( 1, $("#perpage").val(), $("#keyword").val(), $("#column").val(), $("#category").val() )
	
})

/* $(document).on('click','li',function(){
	load( $(this).text(), $("#perpage").val(), $("#keyword").val() )
}) */

$(document).on('change','#category',function(){
	
	$("#view").click()
})	

function editable(){
		//alert('')
		var edit_flag = false;
		return function(){
			if(edit_flag) return
			var column = $(this).attr('id').split('-')[0]
			var id = $(this).attr('id').split('-')[1]
			//var input = '<textarea>'+$(this).text()+'</textarea>';
			
			if(column == 'motto'){
				var input = '<textarea>'+$(this).text()+'</textarea>';
			}else{
				 var input = 
				 '<textarea class="form-control" id="edit_datepicker" value="'+$(this).text()+'"></textarea>'
			/* '<select>'+
				'<option value="'+$(this).text()+'">'+$(this).text()+'</option>'+
				'<option value="Sample Remarks">Sample Remarks</option>'+
				'<option value="test">test</option>'+
			'</select>';  */
			}
			  

			$(this).html(input)
			$("textarea,select,input",this).focus().blur(function(){
				saveEditable($(this).val(),id,column)
				$(this).after($(this).val()).unbind().remove()
				edit_flag = false
			})
			edit_flag = true;
		}
	}
		function saveEditable(value,id,column){
			$.ajax({
				type:'post',
				url:'php/editable.php',
				data:{
					value : value,
					id : id,
					column : column
				}
			}).done(function(data){
				//alert(data)
			})
		}


$(document).on('click','#addtrivia',function(){
			
			
				 $(".modal-title").html('Add Trivia')
				$(".modal-body").load('php/addtrivia.php')
				$(".modal").modal('show') 	
		
				
})
$(document).on('click','#add',function(){
		 
				 $(".modal-title").html('Add Category')
				$(".modal-body").load('php/addcategory.php')
				$(".modal").modal('show') 		
})
$(document).on('click','#saves',function(){
				/* if(!$("#control_number").val().match(/^[0-9A-Z]{7}-[0-9]{4}$/i)){
					alert('Please Input Control Number..!')
					return false
				}
				
				if(!$("#specification").val()){
					alert('Please Input Specification..!')
					return false
				} */
				

				
				$.ajax({
					type : 'post',
					url  : 'php/insert.php',
					data : {
							
							
							category : $("#cat").val()
							
					}	
					
				}).done(function(data){
					alert('Record Added..!')
					location.href='./'
				}).fail(function(data){	
					alert('failed..!')
				})
				
			})
	$(document).on('click','.edit',function(){
		//alert('test');
		
		$.ajax({
			type:'post',
			url : 'php/edit.php',
			data :{
				id : $(this).attr('id')
			}
		}).done(function(data){
			$(".modal-title").html('Update Record')
			$(".modal-body").html(data)
			$(".modal").modal('show')
		})
		
	})
	 $(document).on('click','#updateT',function(){
		//alert('test');
		
		$.ajax({
			type:'post',
			url : 'php/updateT.php',
			data :{
				id : $("#id").val(),
				item_photos : $("#item_photos").val(),
				description : $("#description").val(),
				answer : $("#answer").val(),
				category : $("#category").val()
				
				
			}
		}).done(function(data){
			$(".modal").modal('hide')
			location.href = "./"
			console.log(data)
		}).fail(function(data){
			alert('Faied.')
		})
		
	})
/* $(document).on('click', '.delete', function()
	{
		var button = $(this);
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		if(confirm('Do you want to delete this ?' )){
			$.ajax({
				type: 'post',
				url: 'php/delete.php',
				data: {
					id: del_id
				}
			}).done(function(data){
				alert("id")
				button.parent().remove()
				window.location.href='http://hrdapps33/qcc/index.php?success';
				alert('Successfully Deteled!');
		
			}).fail(function(data){
				alert('Failed.')
			})
				
		}
		return false;
	});  */
	
$(document).on('click','.delete',function(){
			var id = $(this).attr("id").split('-')[1];
			//$(this).parent().parent().css("background","pink")

			if(!confirm('Delete Record?' )){
				//$(this).parent().parent().css("background","blue")
				return false;
			}

			DeleteRecord(id);
			$(this).parent().parent().remove();
			
		});

		function DeleteRecord(id){
			$.ajax({
				type: 'post',
				url: 'php/delete.php',
				data: {
					id:id
				},
				success: function(data){
					alert('Record has been successfully deleted!');
					location.href='index.php'
				},
				error:function(data){
					alert('Failed');
				}
			});
		}