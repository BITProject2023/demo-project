<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
    About Us
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<h2>Blog Title : <?php echo $blog_title ?></h2>

<h3>Blog Heading : <?= $blog_heading ?></h3>

<h4>Blog Entries : </h4>
    <ul>
    <!-- Method 1 -->
        <?php foreach($blog_entries as $entry){
            echo "<li>" . $entry . "</li>";
        } ?></li>


    <!-- method2  -->

        <?php foreach ($blog_entries as $e): ?>           
            <li> <a href="#"> <?= $e ?></a></li>
        <?php  endforeach; ?>

    </ul>

<?= $this->endSection() ?>