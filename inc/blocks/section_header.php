<?php
  $profile_image = get_sub_field('profile_image');
  $profile_name = get_sub_field('profile_name');
  $profile_title = get_sub_field('profile_title');
  $profile_resume = get_sub_field('profile_resume');
  $profile_email = get_sub_field('profile_email');
  $profile_facebook = get_sub_field('profile_facebook');
  $profile_skype = get_sub_field('profile_skype');
  $profile_linkedin = get_sub_field('profile_linkedin');
  $enterance_effect = get_sub_field('enterance_effect');
  $enterance_delay = get_sub_field('enterance_delay');
?>

<!-- Section Header -->
<section id="section-header" class="primary-color h-100">
  <div data-aos="<?php echo $enterance_effect ?>" data-aos-delay="<?php echo $enterance_delay ?>" class="container p-3 profile-box">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-5">
        <div class="img-profile">
          <img src="<?php echo $profile_image?>" alt="Profile Picture" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-7 profile-detail">
        <h1><?php echo $profile_name?></h1>
        <h4><?php echo $profile_title?></h4>
        <hr>
        <p><?php echo $profile_resume?></p><hr>
        <div class="social-wrapper">
          <h4>Get in touch with me on</h4>
          <ul>
            <li><a href="mailto:<?php echo $profile_email?>" title="Email me"><i class="far fa-envelope"></i></a></li>
            <li><a href="<?php echo $profile_facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="skype:<?php echo $profile_skype?>?call" title="Skype me"><i class="fab fa-skype"></i></a></li>
            <li><a href="<?php echo $profile_linkedin?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>