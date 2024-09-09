<?php include('header.php'); ?>

<main>
<section id="contact">
  <h2>Contact Us</h2>
  <div class="contact-container">
    <form class="contact-form" action="submit_form.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
</section>
</main>

<?php include('footer.php'); ?>
