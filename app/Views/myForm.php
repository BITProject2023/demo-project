<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>


<div class="container col-4">
<h1>Hello-Bootstrap</h1>

<?php
    // if(isset($validation)){

    //      echo   $validation->listErrors();
    //     }
?>

<?= form_open(); ?>

<div class="input-group">
<input type="text" name ="username" value="" class="form-control"> <?php if(isset($validation)) { display_error($validation,'username');}?> <br>
<input type="text" name ="email" value="" class="form-control"> <br>
<input type="submit" name ="save" value="Save" class="btn btn-primary">
</div>
</div>

<?= form_close(); ?>


</body>
</html>