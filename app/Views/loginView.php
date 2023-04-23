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
                    <a href="#">User Login</a>
                </li>
                <!-- <li class="active">About us </li> -->
            </ul>
        </div>
    </div>
</div>
<div class="welcome-area pt-100 pb-95">
    <div class="container">
        <div class="welcome-content text-center">

	<?php if(session()->has('error')) :  ?>

		<div class="alert alert-danger"><?=session('error')?></div>

	<?php endif; ?>

		<?php echo form_open('login/auth'); ?>

			<div class="row mb-2">
				<div class="col-2"> Username </div>
				<div class="col-4"> 
					<input type="text" name="username" class="form-control" placeholder="Enter Username" required>	
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-2"> Password </div>
				<div class="col-4"> 
					<input type="password" name="password" class="form-control" placeholder="Enter Password" required>	
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-2">  </div>
				<div class="col-4"> 
					<input type="submit" name="login" class="btn btn-primary" value="Login">	
				</div>
			</div>

			<?php echo form_close(); ?>

            
        </div>
    </div>
</div>

<?= $this->endSection() ?>