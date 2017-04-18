<html>
    <head>
        <title>WP2</title>
    </head>
    <body>
    <?php echo form_open('personcontroller/editPerson'); ?>
        <select name="id">
            <?php foreach ($persons as $person){
                echo '<option value="'.$person['id'].'"">'.$person['name'].'</option>';
            }?>
        </select>
    <input type="text" width="100" name="name"/>
    <input type="submit" name="submit" value="update" />
    </form>
    </body>
</html>