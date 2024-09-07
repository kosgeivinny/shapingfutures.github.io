<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Shaping Futures</title>
  <link rel="stylesheet" href="shafs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="shafs.js" defer></script>
</head>

<body>
<header>
  <div class="logo">
    <img src="images/logo.jpg" alt="Shaping Futures Logo">
  </div>
  <nav>
    <ul>
      <li><a href="#" data-target="home">Home</a></li>
      <li><a href="#" data-target="about">About Us</a></li>
      <li><a href="#" data-target="programs">Programs</a></li>
      <li><a href="#" data-target="get-involved">Get Involved</a></li>
      <li><a href="#" data-target="contact">Contact</a></li>
      <li><a href="#" data-target="gallery">Gallery</a></li>
    </ul>
  </nav>
  <div class="social-media">
    <a href="https://twitter.com/yourprofile" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com/yourprofile" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://tiktok.com/@yourprofile" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    <a href="https://facebook.com/yourprofile" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://youtube.com/c/yourchannel" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
  </div>
</header>


  <main>
    <section id="home" class="page">
      <div class="video-background">
        <video autoplay muted loop id="bg-video">
          <source src="videos/back.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="hero-content">
        <h2>Empowering Youth Through Dance and Community Support</h2>
        <button onclick="document.getElementById('get-involved').scrollIntoView()">Join Us</button>
      </div>

      <div id="sponsors">
      <h2>Our Sponsors</h2> <!-- Header for the sponsors section -->
        <div class="sponsor-container">
      
          <img src="images/comp1.jpeg" alt="Sponsor 1 Logo">
          <img src="images/comp2.png" alt="Sponsor 2 Logo">
          <img src="images/comp3.png" alt="Sponsor 3 Logo">
          <img src="images/comp4.png" alt="Sponsor 4 Logo">
          <img src="images/comp5.jpeg" alt="Sponsor 5 Logo">
          <img src="images/comp6.jpeg" alt="Sponsor 6 Logo">
          <!-- Add more sponsor logos as needed -->
        </div>
      </div>

    </section>
    

<section id="about" class="page">
  <div class="about-container">
    <h2>About Us</h2>
    <p>Welcome to our organization! We are dedicated to making a positive impact on the community through various programs, with a primary focus on dance. Our mission is to provide support and opportunities for children in need, helping them develop their skills and talents while fostering a sense of community and belonging.</p>
    
    <div class="about-details">
      <div class="about-card">
        <h3>Our Mission</h3>
        <p>Our mission is to empower youth through the transformative power of dance and community support. We believe that every child deserves the opportunity to thrive and succeed, both academically and personally.</p>
      </div>
      <div class="about-card">
        <h3>Our Vision</h3>
        <p>We envision a world where every child has access to resources and support that enable them to reach their full potential. Through our programs, we aim to create a positive and lasting impact on the lives of the children we serve.</p>
      </div>
      <div class="about-card">
        <h3>Our Values</h3>
        <ul>
          <li>Inclusivity: We welcome and embrace children from all backgrounds.</li>
          <li>Empowerment: We provide tools and resources for personal growth.</li>
          <li>Community: We foster a supportive and collaborative environment.</li>
          <li>Excellence: We strive for the highest standards in all we do.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

            <section id="programs" class="page">
    <h2>Our Programs</h2>

    <div class="program">
        <h3>Clothes Donations</h3>
        <p>We collect and distribute clothing to those in need. Our clothes donation program aims to support families and individuals in difficult circumstances.</p>
        <button class="view-photos-btn" data-target="clothes-donations">View Photos</button>
        <div class="program-content" id="clothes-donations">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815902716951532539120_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Clothes Donation 1">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815502816951532702950_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Clothes Donation 2">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815502816958583516930_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Clothes Donation 3">
        </div>
    </div>

    <div class="program">
        <h3>Feeding Program</h3>
        <p>Our feeding program provides nutritious meals to those who are food insecure. We aim to improve the health and well-being of our community members.</p>
        <button class="view-photos-btn" data-target="feeding-program">View Photos</button>
        <div class="program-content" id="feeding-program">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202824105416962695885330_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Feeding Program 1">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202824617416962695878720_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Feeding Program 2">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202824617416962695879230_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Feeding Program 3">
        </div>
    </div>

    <div class="program">
        <h3>Sanitary Towel Donation</h3>
        <p>We provide sanitary towels to young girls and women who lack access to menstrual hygiene products. Our goal is to ensure dignity and hygiene for all.</p>
        <button class="view-photos-btn" data-target="sanitary-towel-donation">View Photos</button>
        <div class="program-content" id="sanitary-towel-donation">
            <img src="images/sanitary1.jpg" alt="Sanitary Towel Donation 1">
            <img src="images/sanitary2.jpg" alt="Sanitary Towel Donation 2">
            <img src="images/sanitary3.jpg" alt="Sanitary Towel Donation 3">
        </div>
    </div>

    <div class="program">
        <h3>Mtoto na Elimu Program</h3>
        <p>This program supports children’s education by providing school supplies, tutoring, and other resources to enhance their learning experience.</p>
        <button class="view-photos-btn" data-target="mtoto-na-elimu">View Photos</button>
        <div class="program-content" id="mtoto-na-elimu">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202824617416968498832370_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Mtoto na Elimu 1">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202823017516968500147190_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Mtoto na Elimu 2">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815012416968502137500_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Mtoto na Elimu 3">
        </div>
    </div>

    <div class="program">
        <h3>Life Skills Program</h3>
        <p>Our life skills program equips individuals with essential skills for personal development and self-sufficiency, including financial literacy, communication, and more.</p>
        <button class="view-photos-btn" data-target="life-skills-program">View Photos</button>
        <div class="program-content" id="life-skills-program">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202823911316958589877680_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Life Skills Program 1">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815012416958587755390_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Life Skills Program 2">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202823017516958585573490_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Life Skills Program 3">
        </div>
    </div>

    <div class="program">
        <h3>Dance Program</h3>
        <p>Our dance program encourages creativity and physical fitness through various dance styles. We offer classes for all ages and skill levels to foster artistic expression.</p>
        <button class="view-photos-btn" data-target="dance-program">View Photos</button>
        <div class="program-content" id="dance-program">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815502816964368082030_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Dance Program 1">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815502816964368085060_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Dance Program 2">
            <img src="https://download-accl.zoho.com/webdownload?x-service=CLIQ&event-id=a_17202815502816964368092270_1_789865487&x-cli-msg=%7Bthumbnail%3Atrue%7D" alt="Dance Program 3">
        </div>
    </div>
</section>


    <section id="get-involved" class="page">
  <div class="get-involved-container">
    <h2>Get Involved</h2>
    <p>Join us in making a difference! There are many ways you can get involved with our organization and help us achieve our mission. Whether you want to volunteer your time, make a donation, or participate in our events, your support is invaluable.</p>
    
    <div class="get-involved-options">
      <div class="option">
        <h3>Volunteer with Us</h3>
        <p>Our volunteers are the backbone of our organization. Help us by offering your time and skills to support our programs and initiatives. We welcome volunteers of all ages and backgrounds.</p>
        <a href="#" class="cta-button">Sign Up to Volunteer</a>
      </div>
      
      <div class="option">
        <h3>Make a Donation</h3>
        <p>Your generous donations enable us to continue our work and expand our reach. Support our programs and make a lasting impact in the lives of those we serve.</p>
        <a href="#" class="cta-button">Donate Now</a>
      </div>
      
      <div class="option">
        <h3>Attend Our Events</h3>
        <p>Participate in our events and see firsthand the positive impact we’re making in the community. Join us for workshops, fundraisers, and more!</p>
        <a href="#" class="cta-button">View Upcoming Events</a>
      </div>
    </div>
  </div>
</section>


    <section id="contact" class="page">
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

<section id="gallery" class="page">
  <h2>Our Gallery</h2>
  <div class="gallery-grid">
    <div class="gallery-item">
      <img src="images/comp1.jpeg" alt="Gallery Image 1">
    </div>
    <div class="gallery-item">
      <img src="images/comp2.png" alt="Gallery Image 2">
    </div>
    <div class="gallery-item">
      <img src="images/comp3.png" alt="Gallery Image 3">
    </div>
    <div class="gallery-item">
      <img src="images/comp4.png" alt="Gallery Image 4">
    </div>
    <div class="gallery-item">
      <img src="images/comp5.jpeg" alt="Gallery Image 5">
    </div>
    <div class="gallery-item">
      <img src="images/comp6.jpeg" alt="Gallery Image 6">
    </div>
    <!-- Add more gallery items as needed -->
  </div>
</section>

  </main>

  <footer>
  <p>Contact us: <a href="mailto:info@yourorganization.org">info@shapingfutures.org</a></p>
  <p>Follow us on:
    <a href="https://twitter.com/yourprofile" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com/yourprofile" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://tiktok.com/@yourprofile" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    <a href="https://facebook.com/yourprofile" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://youtube.com/c/yourchannel" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
  </p>
</footer>
</body>

</html>
