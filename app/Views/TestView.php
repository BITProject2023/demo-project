
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test View</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
       
        <h1>Model View</h1>

    <?php
       // print_r($std_info);

        // foreach ($students as $stu):
        //         echo $stu["student_name"];
        //         echo "<br>";
        // endforeach;

        // foreach ($std_info as $stu){
        //     echo $stu->std_fname;
        //     echo "<br>";
        // }


    ?>

<div class="container">
    <table class="table table-bordered">
        <tr>
            <td>Student Name</td>
            <td>Email Address</td>
        </tr>
        <?php foreach($std_info as $student): ?>
        <tr>
            <td><?=$student->std_fname . " " . $student->std_lname?></td>
            <td><?= $student->std_email_adress?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
        
        <script src="" async defer></script>
    </body>
</html>