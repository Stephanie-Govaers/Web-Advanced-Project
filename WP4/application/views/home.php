<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 10/05/2017
 * Time: 16:26
 */
?>
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
                        <td class="col-md-2"><?php echo $event['start']?></td>
                        <td class="col-md-2"><?php echo $event['end'] ?></td>
                        <td class="col-md-2"><?php echo $event['person'] ?></td>
                        <td class="col-md-2"><a target="_self" href="<?php echo base_url()?>event/editPage/<?php echo $event['id'] ?>" class="btn btn-warning">Aanpassen</a></td>
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



