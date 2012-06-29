<center><table>
<?php echo  form_open('login/user_login')?>
<tr><td> Username : </td>
<td> <?php echo form_input('username','')?> </td></tr>
<tr><td> Password: </td>
<td> <?php echo form_password('password','')?></td></tr>
<tr><td> <?php echo form_submit('submit','Login')?> </td>
<td> <?php echo form_reset('reset','Reset')?> </td></tr>  
</form>
</table></center>