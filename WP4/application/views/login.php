<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 3/05/2017
 * Time: 15:38
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>

    <script>

        $(document).ready(function () {

            $("#loginButton").click(function(){

                $.ajax({
                    url: '<?php echo base_url();?>login/doLogin', v
                    type: 'POST',
                    data: {
                        username: $("#username").val(),
                        password: $("#password").val(),
                    },
                    success: function (data) {

                        if (data) {
                            alert("Yes, we are logged in");
                        } else if (!data) {
                            alert("Sorry, wrong login info");
                        } else {
                            alert(data);
                        }
                    }
                })
            })

        });

    </script>


</head>

<body>
<div class="login">
    <h1>Login</h1>
    <form method="post" id="formLogin" >
        <input id="username" name="u" placeholder="Username" required="required"/>
        <input id="password" type="password" name="p" placeholder="Password" required="required"/>
        <button type="submit" id="loginButton" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>





</body>
</html>


