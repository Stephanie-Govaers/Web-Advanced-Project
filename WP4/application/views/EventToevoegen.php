<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 18:20
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 16:26
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Home - Monkey Business</title>


    <!-- Bootstrap Core CSS -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/stylesheet.css" rel="stylesheet"
          type="text/css">

    <link
            href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
            rel='stylesheet' type='text/css'>
    <link
            href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
            rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/creative.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icofont.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <![endif]-->
</head>
<body>

<section id="header-subpages" class="bg-primary ">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Event Aanpassen</h2>
                <hr class="light">

            </div>
        </div>
    </div>

</section>

<div id="container">
    <form class="col-lg-8 col-lg-offset-2" style="margin-top: 40px" method="post" action="<?php echo base_url(); ?>event/addEvent">

        <div class="form-group ">
            <label for="Name">Name</label>
            <input name="Name" type="text" class="form-control" required>
        </div>
        <div class="form-group ">
            <label for="StartDate">Start Date</label>
            <input name="StartDate" type="date" class="form-control">
        </div>
        <div class="form-group ">
            <label for="EndDate">End Date</label>
            <input name="EndDate" type="date" class="form-control">
        </div>
        <div class="form-group ">
            <label for="Persons">Persons</label>
            <input name="Persons" type="number" class="form-control">
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center bla">
            <button type="submit" class="btn btn-primary btn-xl">Submit</button>
        </div>

    </form>

</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/creative.min.js"></script>
<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/Test.js"></script>


</body>
</html>


