<p style="font-family:Arial, Helvetica, sans-serif; color:#5a5754; font-size:12px;">
	Hi <strong>Admin</strong><br><br>
    
    The following message was received from the <strong>Contact Us</strong> page at <?=SITE_NAME;?> website.
</p>




<p style="font-family:Arial, Helvetica, sans-serif; color:#5a5754; font-size:12px;">
	<strong>Message Details</strong>
</p>
<table cellspacing="0" cellpadding="0" border="0"  style="border:none;font-family:Arial, Helvetica, sans-serif; color:#5a5754; font-size:12px; margin-bottom:20px; padding:0; border-collapse:collapse">
	<tr>
    	<td style="line-height:15px; padding:0; margin:0;"  width="150">Name</td>
        <td style="line-height:15px; padding:0; margin:0;" ><?=$message['name'];?></td>
    </tr>
    <tr>
    	<td style="line-height:15px; padding:0; margin:0;"  width="150">Enquiry For</td>
        <td style="line-height:15px; padding:0; margin:0;" ><?=$message['city'];?></td>
    </tr>
    <tr>
    	<td style="line-height:15px; padding:0; margin:0;"  width="150">Phone</td>
        <td style="line-height:15px; padding:0; margin:0;" ><?=$message['phone'];?></td>
    </tr>
	<tr>
    	<td style="line-height:15px; padding:0; margin:0;"  width="150">Email</td>
        <td style="line-height:15px; padding:0; margin:0;" ><?=$message['email'];?></td>
    </tr>
    <tr>
    	<td colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top" style="line-height:15px; padding:0; margin:0;"  width="150">Message</td>
        <td valign="top" style="line-height:15px; padding:0; margin:0;" ><?=nl2br($message['message']);?></td>
    </tr>
</table>