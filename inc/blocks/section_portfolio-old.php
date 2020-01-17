<?php 
  $portfolios =  get_sub_field('portfolios');
  $enterance_effect = get_sub_field('enterance_effect');
  $enterance_delay = get_sub_field('enterance_delay');
  print_r($portfolios);

?>
<!-- Section Portfolio -->
<section id="section-portfolio" class="primary-color">
  <div data-aos="<?php echo $enterance_effect ?>" data-aos-delay="<?php echo $enterance_delay ?>" class="container content-box bg-white">
    <div class="content-header text-center secondary-color">
      <h1>Portfolio</h1>
    </div>
    <div class="inner-content">
      <div class="row portfolio-container">

        <?php foreach ($portfolios as $key=>$portfolio) {?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 more-portfolio">
            <a href="#" data-toggle="modal" data-target="#portfolio-modal-<?php echo $key ?>">
              <div class="portfolio-item">
                <div class="card">
                  <img src="<?php echo $portfolio['portfolio_image'] ?>" class="card-img-top" alt="Portfolio">
                </div>
              </div>
            </a>
            
            <!-- Portfolio Modal -->
            <div class="modal fade" id="portfolio-modal-<?php echo $key ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title" id="portfolioModalLabel">
                      <h3><?php echo $portfolio['portfolio_title']?></h3>
                    </div>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="<?php echo $portfolio['portfolio_image']?>" alt="Portfolio item" class="img-fluid">
                    <p><?php echo $portfolio['portfolio_description']?></p>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo $portfolio['portfolio_link']?>" class="btn secondary-color text-white">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>

      <div id="load-more" class="load-more-wrapper text-center">
          <a href="#" class="btn btn-primary secondary-color">Load More</a>
        </div>
    </div>
  </div>
</section>