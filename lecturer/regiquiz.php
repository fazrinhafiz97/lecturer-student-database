<!--
//index.php
!-->

<html>  
    <head>  
        <title>Insert Quiz</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Insert Question For Quiz</a></h3><br />
			<br />
			<br />
			<div align="right" style="margin-bottom:5px;">
				<button type="button" name="add" id="add" class="btn btn-success btn-large">Add</button>
				<button onclick="window.location.href='register.php';" class="btn btn-success btn-large">Main Menu</button>
			</div>
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
						<th>No</th>
							<th>Question</th>
							<th>Details</th>
							<th>Remove</th>
						</tr>
					</table>
				</div>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Insert Number</label>
				<input type="text" name="insert_number" id="insert_number" class="form-control" />
				<span id="error_number" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Question</label>
				<input type="text" name="question" id="question" class="form-control" />
				<span id="error_question" class="text-danger"></span>
			</div>
			<div class="form-group" align="center">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
		</div>
		<div id="action_alert" title="Action">

		</div>
		<div class="footer">
    </body>  
</html>  




<script>  
$(document).ready(function(){ 
	
	var count = 0;

	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#insert_number').val('');
		$('#question').val('');
		$('#error_number').text('');
		$('#error_question').text('');
		$('#insert_number').css('border-color', '');
		$('#question').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_number = '';
		var error_question = '';
		var inser_number = '';
		var question = '';
		if($('#insert_number').val() == '')
		{
			error_number = 'Number is required';
			$('#error_number').text(error_number);
			$('#insert_number').css('border-color', '#cc0000');
			insert_number = '';
		}
		else
		{
			error_number = '';
			$('#error_number').text(error_number);
			$('#insert_number').css('border-color', '');
			insert_number = $('#insert_number').val();
		}	
		if($('#question').val() == '')
		{
			error_question = 'Question is required';
			$('#error_question').text(error_question);
			$('#question').css('border-color', '#cc0000');
			question = '';
		}
		else
		{
			error_question = '';
			$('#error_question').text(error_question);
			$('#question').css('border-color', '');
			question = $('#question').val();
		}
		if(error_number != '' || error_question != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+insert_number+' <input type="hidden" name="hidden_insert_number[]" id="insert_number'+count+'" class="insert_number" value="'+insert_number+'" /></td>';
				output += '<td>'+question+' <input type="hidden" name="hidden_question[]" id="question'+count+'"class="question" value="'+question+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+insert_number+' <input type="hidden" name="insert_number[]" id="insert_number'+row_id+'" class="insert_number" value="'+insert_number+'" /></td>';
				output += '<td>'+question+' <input type="hidden" name="hidden_question[]" id="question'+row_id+'" class="question" value="'+question+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var insert_number = $('#insert_number'+row_id+'').val();
		var question = $('#question'+row_id+'').val();
		$('#insert_number').val(insert_number);
		$('#question').val(question);
		$('#save').text('Edit');
		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.insert_number').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					$('#action_alert').html('<p>Data Inserted Successfully</p>');
					$('#action_alert').dialog('open');
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add Data</p>');
			$('#action_alert').dialog('open');
		}
	});
	
});  
</script>