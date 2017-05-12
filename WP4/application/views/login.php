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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<div class="login">
    <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <input type="submit" value="Login"/>
    </form>
</div>





</body>
</html>


