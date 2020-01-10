<!DOCTYPE>
<html>
<head>
<title>FAKULTAS PERTANIAN UNS - Password Reminder</title>
</head>

<body>
			
<?php $row = $user->result();?>
<table width="100%" cellspacing="0" cellpadding="2" border="0" bgcolor="#ccddff">
<tbody><tr><td class="cthead_td_cmds" nowrap="" width="80%"><span class="cthead_cmds">
<td class="cthead_td_cmds right" nowrap="" valign="middle">
&nbsp;&nbsp;&nbsp;
</tbody></table>
<h3>Dear, <?php echo $row[0]->nama_user?></h3>
<br>
<p class="standard">This is a reminder for your account in the Sistem Peminjaman Ruang FP UNS.</p>
<p class="standard">You could log into <!-- <b>CBuddy Conference Management Systems</b> --> by using:</p>
<table id="datatable" class="table table-striped  dataTable no-footer"> 
	<tr>
		<td><strong>Username :
		</strong></td><td><?php echo $row[0]->user?></td>
	</tr>
	<tr>
		<td><strong>Password :
		</strong></td><td><?php echo $row[0]->pass?></td>
	</tr>
</table>
</td>
</tr>
</tbody>
</table>
<br>
<p class="standard">Please note that for logging in you will need to use both your</p>
<p class="standard">user name and your password. </p>

<br>
<p class="standard">Best regards, </p>
<p class="standard"><b>Sistem Peminjaman Ruang</b> FAKULTAS PERTANIAN UNS.</p>
</div>

<div style="border-top: solid 1px; width:500px;" ></div>
<p class="standard">Please do not reply to this email. This email</p>
<p class="standard">address is used only for sending email so you</p>
<p class="standard">will not receive a response.</p>
</body></html>