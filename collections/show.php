<?php
$collectionTitle = metadata('collection', 'display_title');
$totalItems = metadata('collection', 'total_items');
?>
<?php echo head(array('title' => $collectionTitle, 'bodyclass' => 'collections show')); ?>

<!-- Page Content -->
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">Oral Histories</h6>
          <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/eastwickoh1.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Margie & Nancy Cobb</h1>
              <h2>Eastwick Oral History Project</h2>
              <p>Eastwick is at the end of the line. But I had some great friends...</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
              <div class="img-box">
                <img src="img/eastwickoh2.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
            </div>
            </div>
            <!-- /.row -->

          </div>
          <!-- /.container -->
          <?php echo foot(); ?>
