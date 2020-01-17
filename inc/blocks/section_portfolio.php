<?php 
  $portfolios =  get_sub_field('portfolios');
  $enterance_effect = get_sub_field('enterance_effect');
  $enterance_delay = get_sub_field('enterance_delay');
?>

<!-- Section Portfolio -->
<section id="section-portfolio" class="primary-color">
  <div data-aos="<?php echo $enterance_effect ?>" data-aos-delay="<?php echo $enterance_delay ?>" class="container content-box bg-white">
    <!-- Title Section -->
    <div class="content-header text-center secondary-color">
      <h1>Portfolio</h1>
    </div>

    <!-- Inner Section -->
    <?php foreach ($portfolios as $key=>$portfolio) {?>

    <div class="inner-content">
      <div class="row portfolio-container">
        <div class="col-md-12 more-portfolio">
          <div class="row">
            <div class="col-md-4">
              <div class="portfolio-img">
                <div class="portfolio-inner-img" style="background-image: url(<?php echo $portfolio['portfolio_image'] ?>);"></div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="portfolio-details">
                <div class="portfolio-title">
                  <h4><?php echo $portfolio['portfolio_title']?></h4>
                </div>
                <div class="portfolio-desc">
                  <p><?php echo $portfolio['portfolio_description']?></p>
                </div>
                <div class="portfolio-footer">
                  <a href="<?php echo $portfolio['portfolio_link']?>" class="btn btn-primary secondary-color">Visit</a>
                </div>
              </div>          
            </div>
          </div>
        </div>       
      </div>      
    </div>

    <?php } ?>

    <div id="load-more" class="load-more-wrapper text-center">
      <a href="#" class="btn btn-primary secondary-color">Load More</a>
    </div>
  </div>
</section>