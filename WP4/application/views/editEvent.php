<?php
/**
 * Created by PhpStorm.
 * User: Brent
 * Date: 12/05/2017
 * Time: 17:31
 */
?>
<?php foreach ($events as $event):
    $startdate = date_create($event['start']);
    $enddate = date_create($event['end']);?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Aanpassen <?php echo $event['name'] ?></h2>
            </div>
        </div>
    </div>

    <form class="col-lg-8 col-lg-offset-2" style="margin-top: 40px" method="post"
          action="<?php echo base_url(); ?>event/editEvent/<?php echo $event['id'] ?>">
        <div class="form-group ">
            <label for="Name">Name</label>
            <input name="Name" type="text" class="form-control" required  value="<?php echo $event['name'] ?>">
        </div>
        <div class="form-group ">
            <label for="StartDate">Start Date</label>
            <input name="StartDate" type="date" class="form-control"  value="<?php echo date_format($startdate, 'Y-m-d'); ?>">
        </div>
        <div class="form-group ">
            <label for="EndDate">End Date</label>
            <input name="EndDate" type="date" class="form-control"  value="<?php echo date_format($enddate, 'Y-m-d'); ?>">
        </div>
        <div class="form-group ">
            <label for="Persons">Persons</label>
            <input name="Persons" type="number" class="form-control"  value="<?php echo $event['person'] ?>">
        </div>

        <div class="col-lg-8 col-lg-offset-2 text-center bla">
            <button type="submit" class="btn btn-primary btn-xl">Opslaan</button>
        </div>

    </form>
<?php endforeach; ?>

