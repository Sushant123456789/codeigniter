<!DOCTYPE html>  
<html>  
<head>  
    <title>Student Record</title>  
</head>  
<body>  

<?php echo form_open_multipart('allcontroller/insert'); ?>
 <!--<form method="post" action="<?php //echo site_url('allcontroller/insert'); ?>"> -->
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
					
            </tr>
           
            <br><br>  
            <tr>  
                <td><input type="submit" name="submit" value="Submit">	</td>	 
            </tr>  
        </table>  
    </form>  
</body>  
</html>  