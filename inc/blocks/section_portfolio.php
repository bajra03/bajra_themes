<?php 
$lokasi =  get_template_directory_uri();
// print_r ($lokasi);
?>
<!-- Section Portfolio -->
<section id="section-portfolio" class="primary-color">
  <div class="container content-box bg-white">
    <div class="content-header text-center secondary-color">
      <h1>Portfolio</h1>
    </div>
    <div class="inner-content">
      <h4>My Works</h4>
      <div class="row">
        <div class="col-md-12">
          <div id="filter-option" class="btn-group filter-option">
            <button class="filter-btn active" data-filter="*">All</button>
            <button class="filter-btn" data-filter=".realestate">Realestate</button>
            <button class="filter-btn" data-filter=".company">Company</button>
            <button class="filter-btn" data-filter=".single-page">Single Page</button>
          </div>
        </div>
      </div>
      <div class="row portfolio-container">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter realestate">
          <a href="#" data-toggle="modal" data-target="#portfolioModal">
            <div class="portfolio-item">
              <div class="card">
                <img src="<?php $lokasi ?>/assets/images/portfolio-img.png" class="card-img-top" alt="Portfolio">
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter company">
          <a href="#" data-toggle="modal" data-target="#portfolioModal">
            <div class="portfolio-item">
              <div class="card" >
                <img src="./assets/img/portfolio-img.png" class="card-img-top img-fluid" alt="Portfolio">
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter single-page company">
          <a href="#" data-toggle="modal" data-target="#portfolioModal">
            <div class="portfolio-item">
              <div class="card">
                <img src="./assets/img/portfolio-img.png" class="card-img-top img-fluid" alt="Portfolio">
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter realestate">
            <a href="#" data-toggle="modal" data-target="#portfolioModal">
              <div class="portfolio-item">
                <div class="card" >
                  <img src="./assets/img/portfolio-img.png" class="card-img-top img-fluid" alt="Portfolio">
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter company">
            <a href="#" data-toggle="modal" data-target="#portfolioModal">
              <div class="portfolio-item">
                <div class="card" >
                  <img src="./assets/img/portfolio-img.png" class="card-img-top img-fluid" alt="Portfolio">
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 filter single-page company">
            <a href="#" data-toggle="modal" data-target="#portfolioModal">
              <div class="portfolio-item">
                <div class="card" >
                  <img src="./assets/img/portfolio-img.png" class="card-img-top img-fluid" alt="Portfolio">
                </div>
              </div>
            </a>
          </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal -->
  <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" id="portfolioModalLabel">
            <h3>Portfolio Title</h3>
          </div>
          <button class="close" type="button" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img src="./assets/img/portfolio-img.png" alt="Portfolio item" class="img-fluid">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptates maiores laudantium possimus pariatur ipsa, neque perferendis quidem nisi ab nostrum id similique quibusdam eligendi incidunt consectetur minus. Pariatur, rerum!</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn secondary-color text-white">View</a>
        </div>
      </div>
    </div>
  </div>
</section>