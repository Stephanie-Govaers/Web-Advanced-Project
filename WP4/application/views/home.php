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
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-toggleable-lg" data-spy="affix" data-offset-top="100">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#header-subpages">Monkey Business</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#">
                            Event Aanpassen
                        </a>
                    </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section id="header-subpages" class="bg-primary ">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Monkey Business</h2>
                <hr class="light">

            </div>
        </div>
    </div>

</section>

<section class="no-padding" id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Evenementen</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="col-lg-offset-1 table table-hover table-striped text-left " style="width: 80%">
            <thead class="bg-primary">
            <th>Name</th>
            <th>Start date</th>
            <th>End date</th>
            <th>person</th>
            <th></th>
            <th></th>

            </thead>
            <tbody>
            <form method="post">
                <?php
                foreach ($events as $event):
                    ?>
                    <tr>
                        <td class="col-md-2"><?php echo $event['name'] ?></td>
                        <td class="col-md-2"><?php echo $event['start'] ?></td>
                        <td class="col-md-2"><?php echo $event['end'] ?></td>
                        <td class="col-md-2"><?php echo $event['person'] ?></td>
                        <td class="col-md-2"><a target="_self" href="#  " class="btn btn-warning">Aanpassen</a></td>
                        <td class="col-md-2"><a target="_self" href="<?php echo base_url()?>event/deleteEvent/<?php echo $event['id'] ?>" class="btn btn-danger">Verwijderen</a></td>

                    </tr>
                    <?php
                endforeach;
                ?>
            </form>
            </tbody>
        </table>
    </div>
    <div class="col-lg-8 col-lg-offset-2 text-center bla">
        <a href="<?php echo base_url(); ?>home/toevoegen" target="_self"
           class="btn btn-primary btn-xl page-scroll">Toevoegen</a>
    </div>
</section>

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

<script src="<?php echo base_url();?>assets/js/Test.js"></script>




</body>
</html>

