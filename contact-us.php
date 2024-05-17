<!doctype html>
<html lang=en>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Amazon Publishing Portal</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="https://amazonpublishingportal.com/contact-us">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/slick/slick/slick.css">
    <link rel="stylesheet" href="assets/lib/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/js/owl.carousel.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/my-responsive.css">
    <!-- Icons -->
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
  </head>
<?php include 'include/header.php';?> <!-- ======= Inner banner ======= --> <section class="contact-banner home-banner inner-banner"> <div class="container container-sm container-md container-lg container-xl container-xxxl"> <div class="row gy-5 gy-md-0 gx-0 gx-md-5"> <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"> <div class="banner-conter text-center"> <h1>We Provide Best Services. Need Help?<br> Get in Touch!</h1> <p>Welcome to the Amazon Publishing Portal! We appreciate your thoughts, questions, and offers of cooperation. To help you get the most out of your publishing experience and explore our platform, our committed team is present at every turn.</p> <p class="cp-text2">Please use the form below to contact us, or send an email. Our team of professionals is prepared to respond to your inquiries right away and guarantee a smooth publication process with Amazon.</p> </div> </div> </div> </div> </section> <!-- ======= Contact Section ======= --> 

<section class=signup>
  <div class=container data-aos=fade-down data-aos-duration=1200>
    <h2 class=text-center>Interested in collaboration?</h2>
    <p class="pt-2 pb-4 text-center">Get Your Book Published in Less Than A Month! <span class=d-block> Call Us at <a href=tel:+17373034658>+1 (737) 303-4658</a>
      </span>
    </p>
    <div class=row>
      <div class=col-md-9>
        <form action=/sendmail.php method=post class=validate-letsget>
          <div class=row>
            <div class=col-md-6>
                <input type="hidden" name="Contact-Us" value="" />
                <input type="hidden" name="https://amazonpublishingportal.com/contact-us" value="" />
              <input class="required input-control form-control" name=name required id=name placeholder="Full Name">
            </div>
            <div class=col-md-6>
              <input type=email class="required input-control form-control email" required name=email placeholder="Email Address">
            </div>
            <div class=col-md-6>
              <input type=tel class="required input-control form-control" required name=phone placeholder="Phone Number">
            </div>
            <div class=col-md-6>
              <select name=services id=ser-select class="required input-control form-control" required>
                <option selected>Book type?</option>
                <option value="Digital Book Publishing">Digital Book Publishing</option>
                <option value="Book Marketing Service">Book Marketing Service</option>
                <option value="Ghostwriting Service">Ghostwriting Service</option>
                <option value="Fiction Writing Service">Fiction Writing Service</option>
                <option value="Children’s Books Service">Children’s Books Service</option>
                <option value="Book Editing &amp; Proofreading Service">Book Editing & Proofreading Service</option>
                <option value="Book Cover Designing">Book Cover Designing</option>
                <option value="Illustrations &amp; Graphics Service">Illustrations & Graphics Service</option>
                <option value="Book Printing Service">Book Printing Service</option>
                <option value="Audiobook Production">Audiobook Production</option>
                <option value="Author Website Service">Author Website Service</option>
                <option value="Blurb Writing Service">Blurb Writing Service</option>
                <option value="Amazon Book Description">Amazon Book Description</option>
                <option value="Amazon Book Listing Optimization">Amazon Book Listing Optimization</option>
                <option value="Amazon Book Paid Ads">Amazon Book Paid Ads</option>
                <option value="Amazon Central Account">Amazon Central Account</option>
                <option value="Amazon A + Content">Amazon A + Content</option>
                <option value="Book Trailer">Book Trailer</option>
                <option value="Featured Articles">Featured Articles</option>
              </select>
            </div>
            <div class=col-md-12>
              <textarea class="required input-control form-control" autocomplete=nope name=comments required placeholder="Share your idea"></textarea>
            </div>
          </div>
          <label class=chota_fnt>
            <input type=checkbox name=bn_emailPromotional required checked> Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL ( <a href=privacy-policy>PRIVACY POLICY </a> & <a href=terms-and-conditions>TERMS & CONDITIONS</a> ) - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBEto STOP to unsbscribe anytime. </label>
          <div class="py-3 text-center">
            <input type=submit id=register class="btn btn-black" name=send_data value="Send Message">
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- ======= Request quote Section ======= --> <!-- ======= Footer Section ======= --> <?php include 'include/cta.php';?> <?php include 'include/footer.php';?>