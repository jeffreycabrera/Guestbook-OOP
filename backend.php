<?php
include_once('config.php');




?>

<table border = '1'>
	<tr>
		<td>ID<td>Name<td>Email<td>Message<td>Date Posted<td>Approved<td>Action
	</tr>


	
	<?php
		$message = new Message($config);	
		$messages = MessageDAO::getAllMessages();
			
			while($rows = mysql_fetch_array($messages)):
            $id = $rows['id'];
            $name = $rows['name'];
            $email = $rows['email'];
            $message = $rows['message'];
            $date_posted = $rows['date_posted'];
            $is_approved = $rows['is_approved'];  

            
    
			
		        
		        
				?>
				
				<tr>
					<td><?php echo $id; ?>
					<td><?php echo $name; ?>
					<td><?php echo $email; ?>
					<td><?php echo $message; ?>
					<td><?php echo $date_posted; ?>
					<td><?php echo $is_approved; ?>
					<td><?php 
        		if($is_approved == 'N'){
        			?>
        			<a href = "Approve.php?id=<?=$id?>" >Approve</a>
        		<?php
        		}else{
        		?>
        			<a href = "reject.php?id=<?=$id?>" >Reject</a>
        		<?php
        		}	
        		?>
        			<a href = "delete.php?id=<?=$id?>" >Delete</a>
        		
        
  
				
				</tr>

				<?php
				
    endwhile;

?>
</table>
<br><br><a href = "index.php">GO TO FRONT-END</a><br><br>
