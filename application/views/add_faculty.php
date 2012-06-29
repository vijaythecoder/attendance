<?php 
$this->load->view('partial/header');
echo form_open('faculty/create_faculty',array('id'=>'add_faculty')); ?>
<center><ul type='none' id="error_message_box"></ul>
<table> 	
<tr><td> User Id:</td>
<td> <?php echo form_input('user_id',''); ?> </td></tr>
<tr><td> Faculty Name: </td>
<td> <?php echo form_input('faculty_name',''); ?> </td></tr>
<tr><td> Phone Number: </td>
<td> <?php echo form_input('phone_number',''); ?> </td></tr>
<tr><td> Email ID: </td>
<td> <?php echo form_input('email','')?> </td></tr>
<tr><td> Designation </td>
<td> <?php echo form_input('designation','')?> </td></tr>
<tr><td> No. Of Hours: </td>
<td> <?php echo form_input('hours','')?> </td></tr>
<tr><td> <?php echo form_submit('submit','Add Faculty')?></td>
<td><?php echo form_reset('reset','Reset')?></td></tr>
</table></center>


<script type='text/javascript'>

	var submitting = false;	
	
	$('#add_faculty').validate({
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
			user_id:"required",
			faculty_name:"required",
			phone_number:
			{
			required:true,
			minlength:10
			},
			designation:"required",
			email:{
				required:true,
				email:'valid'
			},
			hours:"required"
   		},
		messages: 
		{   
			user_id:"User Id is required",
			faculty_name:"Faculty Name is required",
			phone_number:
			{
			required:"Phone Number is required",
			minlength:"Phone number should be minimum 10"
			},
			designation:"Designation is required",
			email:"Email should be valid",
			hours:"Hours  required"
		}
	});
</script>



	
	
