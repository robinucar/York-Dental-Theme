

  <div class="modal-form">

    <!-- Hero image & title -->
    <div class="form-parent">
      <!-- Replace the src attribute with your own image path -->
      <img class="form-img" src="<?= get_template_directory_uri(); ?>/assets/images/form-image.png" alt="Say it with your smile backdrop" />

      <button class="close-btn" aria-label="Close">&times;</button>
      <h2>Book a FREE consultation</h2>
    </div>

    <!-- Form fields -->
    <form class="form" action="#" method="post">
      <input type="text" class="field" name="name" placeholder="Name" required />
      <input type="email" class="field" name="email" placeholder="Email" required />
      <input type="tel" class="field" name="phone" placeholder="Phone" />
      <button type="submit" class="submit-btn">Submit</button>
    </form>

    <!-- Disclaimer text -->
    <p class="disclaimer">
      By clicking submit I agree to The York Dental Suite using my personal data to provide me with dental treatment and keep me informed about marketing offers and initiatives. Full details of how we handle your data and how you can change your contact preferences can be found in our <a href="#">privacy policy</a>.
    </p>

  </div>