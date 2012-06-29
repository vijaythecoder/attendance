<?php 
$this->load->view('partial/header');
echo form_open('student/create_student',array('id'=>'add_student')); ?>
<center><ul type='none' id="error_message_box"></ul>
<table> 	
<tr><td> Student Id:</td>
<td> <?php echo form_input('student_id',''); ?> </td></tr>
<tr><td> Student Name: </td>
<td> <?php echo form_input('student_name',''); ?> </td></tr>
<tr><td> Phone Number: </td>
<td> <?php echo form_input('phone_number',''); ?> </td></tr>
<tr><td> Email ID: </td>
<td> <?php echo form_input('email','')?> </td></tr>
<tr><td> Branch: </td>
<td> <?php echo form_input('branch','')?> </td></tr>
<tr><td> Year </td>
<td> <?php echo form_input('year','')?> </td></tr>
<tr><td> Sem </td>
<td> <?php echo form_input('sem','')?> </td></tr>
<tr><td> Address </td>
<td> <?php echo form_textarea('address','')?> </td></tr>
<tr><td> <?php echo form_submit('submit','Add Student')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center>


<script type='text/javascript'>

	var submitting = false;	
	
	$('#add_student').validate({
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
			student_id:"required",
			student_name:"required",
			phone_number:
			{
			required:true,
			minlength:10
			},
			branch:"required",
			year:"required",
			sem:"required",
			email:{
				required:true,
				email:'valid'
			},
			address:"required"
   		},
		messages: 
		{   
			student_id:"Student Id is required",
			student_name:"Student Name is required",
			phone_number:
			{
			required:"Phone Number is required",
			minlength:"Phone number should be minimum 10"
			},
			branch:"branch is required",
			year:"year is required",
			sem:"Sem is required",
			email:"Email should be valid",
			address:"address  required"
		}
	});
</script>



	
	
