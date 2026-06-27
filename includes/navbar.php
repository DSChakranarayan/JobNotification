<!-- ===== STICKY NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-job fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL ?>">Job<span>Sathi</span></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars" style="font-size: 1.4rem; color: var(--dark);"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#jobs">Jobs</a></li>
        <li class="nav-item"><a class="nav-link" href="#results">Results</a></li>
        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="#mock-tests">Mock Tests</a></li>
        <li class="nav-item"><a class="nav-link" href="#notices">Notices</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <div class="d-flex gap-2 align-items-center">
        <?php if (isLoggedIn()): ?>
          <div class="dropdown">
            <button class="btn btn-user dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle me-1"></i><?= e(getUser('name')) ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">
              <li><span class="dropdown-item-text small text-muted"><?= e(getUser('email')) ?></span></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-columns me-2"></i>Dashboard</a></li>
              <li><a class="dropdown-item text-danger" href="<?= BASE_URL ?>pages/logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
          </div>
        <?php else: ?>
          <a href="<?= BASE_URL ?>pages/login.php" class="btn btn-login">Login</a>
          <a href="<?= BASE_URL ?>pages/register.php" class="btn btn-register">Register</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
