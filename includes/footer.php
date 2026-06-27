<!-- ===== FOOTER ===== -->
<footer class="footer" id="contact">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="brand-text">Job<span>Sathi</span></div>
        <p>Your trusted career partner for jobs, exam preparation, mock tests, and government exam results. We help students and job seekers across India achieve their career goals.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5>Quick Links</h5>
        <ul class="footer-links">
          <li><a href="#">Latest Jobs</a></li>
          <li><a href="#">Exam Results</a></li>
          <li><a href="#">Online Courses</a></li>
          <li><a href="#">Mock Tests</a></li>
          <li><a href="#">Study Material</a></li>
          <li><a href="#">Notices</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5>Exam Categories</h5>
        <ul class="footer-links">
          <li><a href="#">MPSC</a></li>
          <li><a href="#">UPSC</a></li>
          <li><a href="#">SSC</a></li>
          <li><a href="#">Banking</a></li>
          <li><a href="#">Railway</a></li>
          <li><a href="#">Defence</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6">
        <h5>Contact Us</h5>
        <ul class="footer-contact">
          <li><i class="fas fa-map-marker-alt"></i> JobSathi EduTech, Mumbai, Maharashtra, India</li>
          <li><i class="fas fa-envelope"></i> support@jobsathi.com</li>
          <li><i class="fas fa-phone"></i> +91 98765 43210</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <a href="index.php"><?= defined('SITE_NAME') ? SITE_NAME : 'JobSathi' ?></a>. All rights reserved. | <?= defined('SITE_TAGLINE') ? SITE_TAGLINE : 'Your Career Partner' ?></p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
  <script src="<?= defined('BASE_URL') ? BASE_URL : '' ?>assets/js/main.js"></script>
</body>
</html>
