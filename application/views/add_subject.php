<?php 
$this->load->view('partial/header');
echo form_open('subject/create_subject',array('id'=>'add_subject')); ?>
<center><ul type='none' id="error_message_box"></ul>
<table> 	
<tr><td> Subject Id:</td>
<td> <?php echo form_input('subject_id',''); ?> </td></tr>
<tr><td> Subject Name: </td>
<td> <?php echo form_input('subject_name',''); ?> </td></tr>
<tr><td> Branch: </td>
<td> <?php echo form_input('branch','')?> </td></tr>
<tr><td> Year </td>
<td> <?php echo form_input('year','')?> </td></tr>
<tr><td> Sem </td>
<td> <?php echo form_input('sem','')?> </td></tr>
<tr><td> <?php echo form_submit('submit','Add Subject')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center>


<script type='text/javascript'>

	var submitting = false;	
	
	$('#add_subject').validate({
		submitHandler:function(form)
		{
			if (submitting) return;
			submitting = true;
			$(form).mask("Loading Please wait");
			$(form).ajaxSubmit({
			success:function(response)
			{
				alert('success');
			},
			dataType:'json'
		});

		},
		errorLabelContainer: "#error_message_box",
 		wrapper: "li",
		rules: 
		{
			subject_id:"required",
			subject_name:"required",
			branch:"required",
			year:"required",
			sem:"required"
   		},
		messages: 
		{   
			subject_id:"subject Id is required",
			subject_name:"subject Name is required",
			branch:"branch is required",
			year:"year is required",
			sem:"Sem is required"
		}
	});
</script>



	
	
