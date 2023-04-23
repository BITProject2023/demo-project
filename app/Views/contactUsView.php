<?php $page_session = \Config\Services::session(); ?>
<?= $this->extend('layouts/books_layout.php') ?>

<?= $this->section('title') ?>
    Welcome
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="breadcrumb-area pt-35 pb-35 bg-gray-3 mt-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="#">Contact us</a>
                </li>
                <!-- <li class="active">About us </li> -->
            </ul>
        </div>

    <?php
    $validation = \Config\Services::validation();
    if(isset($validation)): ?>

    
     <!-- <div class="alert alert-warning" role="alert"> -->
     <?php //echo $validation->listErrors() 
          // echo  $validation->getError('email');



     ?>
     <!-- </div> -->


    <?php endif; ?>



 
    <div class="row mb-2">
            <div class="col-12">
            <?php if($page_session->getTempdata('success')){ ?>

                <p class="alert alert-success"><?=$page_session->getTempdata('success')?></p>

                <?php } ?>

                <?php if($page_session->getTempdata('error')){ ?>

                <p class="alert alert-danger"><?=$page_session->getTempdata('error')?></p>
                <?php }   ?>
            </div>
        </div>


   <?= form_open()?>

        <div class="row mb-2">
            <div class="col-2"> Email Address </div>
            <div class="col-6"> 
                 <input type="email" class="form-control" name="email" id="email"  placeholder="Type your email..." value = "<?= set_value('email') ?>" >
                 <?php if($validation->getError('email')):  ?>
                 <span class="text-danger"><?=$validation->getError('email')?></span>
                 <?php endif; ?>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2"> Moile No </div>
            <div class="col-6"> 
                 <input type="tel" class="form-control" name="mobile" id="mobile"  placeholder="+77xxxxxxx" value = "<?= set_value('mobile')?>" >
                 <?php if($validation->getError('mobile')):  ?>
                 <span class="text-danger"><?=$validation->getError('mobile')?></span>
                 <?php endif; ?>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2">Message </div>
            <div class="col-6"> 
                 <input type="text" class="form-control" name="message" id="message"  placeholder="Type your message  here ..." value = "<?= set_value('message')?>"  >
                 <?php if($validation->getError('message')):  ?>
                 <span class="text-danger"><?=$validation->getError('message')?></span>
                 <?php endif; ?>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-2">&nbsp; </div>
            <div class="col-6"> 
                 <input type="submit" class="btn btn-primary" name="send" id="send"  value="Send Message ">
            </div>
        </div>

    <?= form_close()?>

    </div>
</div>


<?= $this->endSection() ?>