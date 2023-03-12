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
    </div>
</div>
<div class="welcome-area pt-100 pb-95">
    <div class="container">
        <div class="welcome-content text-center">
            <h5>Who Are We</h5>
            <h1>Welcome To Flone</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat irure </p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>