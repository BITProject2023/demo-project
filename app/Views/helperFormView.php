<?php if(isset($validation)):?>
<?php  
    echo "<pre>";
  //  print_r($validation); 
    echo $validation->listErrors();?>
<?php endif; ?>
<?= form_open()?>

<input type="text" name="username" > <br>
<input type="text" name="email" > <br>
<input type="text" name="mobile" > <br>
<input type="submit" name="save" value="Save"> <br>


<?= form_close()?>