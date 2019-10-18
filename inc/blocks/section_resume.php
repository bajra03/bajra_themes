 <?php
 
  $experiences = get_sub_field('experiences');
  $educations = get_sub_field('educations');
 
 ?>

 <!-- Section Resume -->
 <section id="section-resume" class="primary-color">
    <div class="container content-box bg-white">
      <div class="content-header text-center secondary-color">
        <h1>Resume</h1>
      </div>
      <div class="inner-content">
        <div class="row">

          <div class="col-md-6">
            <div class="resume-title">
              <h4>Experience</h4>
            </div>
            <?php foreach( $experiences as $experience ) {?>
              <div class="resume-timeline">
                <div class="timeline-item">
                  <h4 class="item-title"><?php echo $experience['experience_company_name'] ?></h4>
                  <span class="item-period"><?php echo $experience['experience_date_from'] ?> - <?php echo $experience['experience_date_until']?></span>
                  <span class="item-profision"><?php echo $experience['experience_title']?></span>
                  <p class="item-desc"><?php echo $experience['experience_detail']?></p>
                </div>
              </div>
            <?php  } ?>  
          </div>  


          <div class="col-md-6">
            <div class="resume-title">
              <h4>Education</h4>
            </div>
            <?php foreach( $educations as $education ) { ?>
              <div class="resume-timeline">
                <div class="timeline-item">
                  <h4 class="item-title"><?php echo $education['education_school_name']?></h4>
                  <span class="item-period"><?php echo $education['education_date_from']?> - <?php echo $education['education_date_until']?></span>
                  <span class="item-profision"><?php echo $education['education_majors']?></span>
                  <p class="item-desc"><?php echo $education['education_detail']?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>