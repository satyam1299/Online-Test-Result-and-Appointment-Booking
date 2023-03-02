<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_style.css" />
    <link rel="stylesheet" href="css/animations.css">  
    <title>Appointment Portal</title>
    <style>
        table{
            animation: transitionIn-Y-bottom 0.5s;
        }

        input {
            padding: 9px;
            color: aliceblue;
            background-color: rgb(123, 123, 204);
            width: 220px;
            height: 60px;
        }

        p {
            text-decoration: solid;
        }
    </style>
        
</head>
<body>
<?php include('patient_header.php'); ?>
	<div class="main_content" style="background-color:#fff;">
		
    <div class="full-height">
        <center>
        <table border="0">
            <tr>
                <td width="80%">
                    <font class="edoc-logo">Welcome</font>
                </td>
            </tr>
            <tr>
                <td  colspan="3">
                    <p class="sub-text2">How is health today, Sounds like not good!<br>Don't worry. Find your doctor online and Book as you wish. <br>
                    We offer you a free doctor channeling service, Make your appointment now.</p>
                </td>
            </tr>
            <tr>
                
                <td colspan="3">
                    <center>
                    <a href="appoint_form.php" >
                        <input type="button" value="Make Appointment" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                    </a>
                </center>
                </td>
            
            </tr>
        </table>
    </center>
    
    </div>
          
    <?php include('patient_footer.php'); ?>
	</div><!--  containerFluid Ends -->

</body>
</html>