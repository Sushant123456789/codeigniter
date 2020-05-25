<!DOCTYPE html>  
<html>  
<head>  
    <title>Edit Student Record</title>  
</head>  
<body>  
    <form method="post" action="<?php echo site_url('allcontroller/updateuser'); ?>">  
      
<?php 	  

if(isset($data))
{
?>
<table>  
            <tr>  
                <td>First Name:</td>  
                <td>:</td>  
                <td>
				<input type="hidden" name="sid" value="<?php echo $data[0]->id; ?>">
				<input type="text" name="first_name" value="<?php echo $data[0]->first_name; ?>">
				</td>  
            </tr>  
            <tr>  
                <td>Last Name:</td>  
                <td>:</td>  
                <td><input type="text" name="last_name" value="<?php echo $data[0]->last_name; ?>"></td>  
            </tr>  
            <tr>  
                <td>Email:</td>  
                <td>:</td>  
                <td><input type="text" name="email" value="<?php echo $data[0]->email; ?>"></td>  
            </tr>  
            <tr>  
                <td>Password:</td>  
                <td>:</td>  
                <td><input type="password" name="password" value="<?php echo $data[0]->password; ?>"></td>
					
            </tr><br><br>  
            <tr>  
                <td><input type="submit" name="submit" value="Update">	</td>	 
            </tr>  
        </table>

<?php
}
else
{
?>

<table>  
            <tr>  
                <td>First Name:</td>  
                <td>:</td>  
                <td><input type="text" name="first_name"></td>  
            </tr>  
            <tr>  
                <td>Last Name:</td>  
                <td>:</td>  
                <td><input type="text" name="last_name"></td>  
            </tr>  
            <tr>  
                <td>Email:</td>  
                <td>:</td>  
                <td><input type="text" name="email"></td>  
            </tr>  
            <tr>  
                <td>Password:</td>  
                <td>:</td>  
                <td><input type="password" name="password"></td>
					
            </tr><br><br>  
            <tr>  
                <td><input type="submit" name="submit" value="Update">	</td>	 
            </tr>  
        </table>

<?php	
}

?>
	     
    </form>  
</body>  
</html>  