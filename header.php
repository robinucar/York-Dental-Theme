<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="site-header" role="banner">
    <div class="header-container">


      <div class="logo-left">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/invisalign.png" alt="Invisalign Diamond Provider" />
      </div>

 
      <div class="logo-separator" role="presentation" aria-hidden="true"></div>


      <div class="logo-center">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/dental-suite-logo.png" alt="The York Dental Suite" />
      </div>


      <div class="header-right">
        <a href="#contact" class="book-button">BOOK NOW</a>
        <div class="contact-info">
          <div>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="" class="contact-icon" aria-hidden="true" />
            <span class="icon-separator" role="presentation" aria-hidden="true"></span>
            <a href="tel:01904937041">01904 937 041</a>
          </div>
          <div>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/email-icon.svg" alt="" class="contact-icon" aria-hidden="true" />
            <span class="icon-separator" role="presentation" aria-hidden="true"></span>
            <a href="mailto:info@theyorkdentalsuite.co.uk">info@theyorkdentalsuite.co.uk</a>
          </div>
        </div>
      </div>

    </div>
  </header>
</body>
</html>
