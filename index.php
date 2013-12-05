Guestbook-OOP
=============
<?php
require_once('config.php');

if((!empty($_POST['name'])) && (!empty($_POST['email'])) && (!empty($_POST['message']))){
	

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message1 = $_POST['message'];


	$config = array(
	     'id' => 1,
	     'name' => $name,
	     'message' => $message1,
	     'email' => $email,
	     'date_posted' => '',
	     'is_approved' => 'N'
	     );


	$message = new Message($config);
	$messages = MessageDAO::createMessage($config);
}

?>

<center><div>
	<form action = "" method = "POST">
		<table>
			<tr>
				POST NEW MESSAGE<br />
			</tr>
			<tr>
				<td>Name<td><input type = 'text' name = 'name'><br />
			</tr>
			<tr>
				<td>Email<td><input type = 'text' name = 'email'><td><br />
			</tr>
			<tr>
				<td>Message<td><textarea name='message' cols="17px" rows="5"></textarea><br>
			</tr>
			<tr>
				<td><td><input type = 'submit' name = POST MESSAGE>
			</tr>
		</table>
	</form>
</div></center>
<br><br>


<center><div>
	<table border = '1'>	
		<?php
			
			$messages = MessageDAO::getMessage();
			$numrows = MessageDAO::numRows();
			
			
		        while($row = mysql_fetch_array($messages)) {
		            $name = $row['name'];
		            $date_posted = $row['date_posted'];
		            $message = $row['message'];
		        
				?>
				
				<tr>
					<td height="80" width="100px"><center><?php echo $name; ?><br><?php echo $date_posted; ?></td>
					<td height="80" width="200px"><center><?php echo $message; ?></td>
				</tr>

				<?php
				}
			
		?>	
	</table>
</div></center>

<br><br><center><a href = "backend.php">GO TO BACK-END</a></center><br><br>


