<?php
session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="setup-alert">
  <div class="container">
    <i class="fas fa-check-circle"></i> JobSathi Foundation Setup Successful
  </div>
</div>

<!-- ===== HERO SECTION ===== -->
<section class="hero-section" id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="hero-badge"><i class="fas fa-rocket me-2"></i>India's Growing Career Platform</div>
        <h1>Your <span>Career Partner</span></h1>
        <p>Jobs, Exams, Mock Tests — all in one place. We help job seekers and government exam aspirants across India achieve their dreams.</p>
        <div class="hero-buttons d-flex flex-wrap gap-3">
          <a href="#jobs" class="btn btn-hero-primary"><i class="fas fa-briefcase me-2"></i>Explore Jobs</a>
          <a href="#mock-tests" class="btn btn-hero-secondary"><i class="fas fa-graduation-cap me-2"></i>Start Preparation</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat-item">
            <h3>10,000+</h3>
            <p>Active Jobs</p>
          </div>
          <div class="hero-stat-item">
            <h3>50,000+</h3>
            <p>Registered Users</p>
          </div>
          <div class="hero-stat-item">
            <h3>500+</h3>
            <p>Exam Updates</p>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="hero-image">
          <div class="hero-image-placeholder">
            <div class="icon-box"><i class="fas fa-user-graduate"></i></div>
            <h5>Start Your Journey</h5>
            <p>Find your dream job or crack your dream exam with JobSathi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SEARCH JOBS SECTION ===== -->
<section class="search-section" id="search">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="search-card">
          <form class="row g-3 align-items-end">
            <div class="col-md-4">
              <label class="form-label fw-semibold small">Keyword</label>
              <input type="text" class="form-control" placeholder="Job title, skills, or keywords">
            </div>
            <div class="col-md-3">
              <label class="form-label fw-semibold small">Category</label>
              <select class="form-select">
                <option selected>All Categories</option>
                <option>Government Jobs</option>
                <option>Private Jobs</option>
                <option>Banking</option>
                <option>Railway</option>
                <option>Defence</option>
                <option>Teaching</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label fw-semibold small">Location</label>
              <select class="form-select">
                <option selected>All Locations</option>
                <option>Mumbai</option>
                <option>Delhi</option>
                <option>Bangalore</option>
                <option>Pune</option>
                <option>Hyderabad</option>
                <option>Chennai</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-search"><i class="fas fa-search me-2"></i>Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== LATEST JOBS ===== -->
<section class="section-padding" id="jobs">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Latest <span>Jobs</span></h2>
      <p>Discover new opportunities from top employers across India</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type full-time">Full Time</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #4698C6, #1a5f8a);"><i class="fas fa-building"></i></div>
          <h5>Software Developer</h5>
          <p class="company-name">TechCorp India Pvt Ltd</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> Mumbai</span>
            <span><i class="fas fa-briefcase"></i> 1-3 yrs</span>
            <span><i class="fas fa-rupee-sign"></i> 4-6 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 15 Jul 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type full-time">Full Time</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #22C55E, #16a34a);"><i class="fas fa-landmark"></i></div>
          <h5>Bank PO (Probationary Officer)</h5>
          <p class="company-name">State Bank of India</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> All India</span>
            <span><i class="fas fa-briefcase"></i> Freshers</span>
            <span><i class="fas fa-rupee-sign"></i> 8-12 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 20 Jul 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type remote">Remote</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #F59E0B, #d97706);"><i class="fas fa-chart-line"></i></div>
          <h5>Digital Marketing Executive</h5>
          <p class="company-name">GrowthX Solutions</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> Remote</span>
            <span><i class="fas fa-briefcase"></i> 2-4 yrs</span>
            <span><i class="fas fa-rupee-sign"></i> 3-5 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 10 Jul 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type full-time">Full Time</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #EF4444, #dc2626);"><i class="fas fa-graduation-cap"></i></div>
          <h5>Assistant Professor</h5>
          <p class="company-name">National University</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> Pune</span>
            <span><i class="fas fa-briefcase"></i> 3-5 yrs</span>
            <span><i class="fas fa-rupee-sign"></i> 6-9 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 25 Jul 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type contract">Contract</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #4698C6, #1a5f8a);"><i class="fas fa-project-diagram"></i></div>
          <h5>Project Manager</h5>
          <p class="company-name">InfraBuild Ltd</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> Delhi</span>
            <span><i class="fas fa-briefcase"></i> 5-8 yrs</span>
            <span><i class="fas fa-rupee-sign"></i> 12-18 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 30 Jul 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="job-card">
          <span class="job-type full-time">Full Time</span>
          <div class="company-icon" style="background: linear-gradient(135deg, #22C55E, #16a34a);"><i class="fas fa-train"></i></div>
          <h5>Railway Group D</h5>
          <p class="company-name">Indian Railways</p>
          <div class="job-meta">
            <span><i class="fas fa-map-marker-alt"></i> All India</span>
            <span><i class="fas fa-briefcase"></i> Freshers</span>
            <span><i class="fas fa-rupee-sign"></i> 5-7 LPA</span>
          </div>
          <p class="job-deadline"><i class="far fa-calendar-alt"></i> Apply by: 05 Aug 2026</p>
          <a href="#" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
    <div class="text-center mt-4 fade-up">
      <a href="#" class="btn btn-view-all"><i class="fas fa-arrow-right me-2"></i>View All Jobs</a>
    </div>
  </div>
</section>

<!-- ===== LATEST NOTICES ===== -->
<section class="section-padding" id="notices" style="background: var(--bg);">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Latest <span>Notices</span></h2>
      <p>Important announcements and updates for job seekers and exam aspirants</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="notice-card fade-up">
          <div class="notice-icon"><i class="fas fa-bullhorn"></i></div>
          <div class="notice-content">
            <h6>MPSC 2026 Preliminary Exam Date Announced</h6>
            <p>Maharashtra Public Service Commission has released the new exam schedule for the upcoming year.</p>
            <div class="notice-date"><i class="far fa-clock me-1"></i> 25 Jun 2026</div>
          </div>
        </div>
        <div class="notice-card fade-up">
          <div class="notice-icon"><i class="fas fa-file-alt"></i></div>
          <div class="notice-content">
            <h6>SSC CHSL 2026 Application Extended</h6>
            <p>Staff Selection Commission has extended the last date for CHSL 2026 applications.</p>
            <div class="notice-date"><i class="far fa-clock me-1"></i> 22 Jun 2026</div>
          </div>
        </div>
        <div class="notice-card fade-up">
          <div class="notice-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="notice-content">
            <h6>UPSC Civil Services 2026 Notification Out</h6>
            <p>Union Public Service Commission has released the notification for Civil Services Examination 2026.</p>
            <div class="notice-date"><i class="far fa-clock me-1"></i> 20 Jun 2026</div>
          </div>
        </div>
        <div class="notice-card fade-up">
          <div class="notice-icon"><i class="fas fa-book-open"></i></div>
          <div class="notice-content">
            <h6>New Study Material for Banking Exams 2026</h6>
            <p>Updated study material for IBPS PO, Clerk, and RRB exams now available on our platform.</p>
            <div class="notice-date"><i class="far fa-clock me-1"></i> 18 Jun 2026</div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3 fade-up">
      <a href="#" class="btn btn-view-all"><i class="fas fa-arrow-right me-2"></i>All Notices</a>
    </div>
  </div>
</section>

<!-- ===== LATEST RESULTS ===== -->
<section class="section-padding" id="results">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Latest <span>Results</span></h2>
      <p>Check your exam results and download scorecards</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="result-card">
          <div class="result-icon"><i class="fas fa-award"></i></div>
          <h6>MPSC Rajyaseva 2025</h6>
          <p>Final Result Declared</p>
          <a href="#" class="btn btn-result"><i class="fas fa-download me-1"></i>Download</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="result-card">
          <div class="result-icon"><i class="fas fa-trophy"></i></div>
          <h6>UPSC Prelims 2026</h6>
          <p>Result Announced</p>
          <a href="#" class="btn btn-result"><i class="fas fa-download me-1"></i>Download</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="result-card">
          <div class="result-icon"><i class="fas fa-medal"></i></div>
          <h6>SSC CGL 2025</h6>
          <p>Tier 1 Result Out</p>
          <a href="#" class="btn btn-result"><i class="fas fa-download me-1"></i>Download</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="result-card">
          <div class="result-icon"><i class="fas fa-star"></i></div>
          <h6>IBPS PO 2025</h6>
          <p>Prelims Result</p>
          <a href="#" class="btn btn-result"><i class="fas fa-download me-1"></i>Download</a>
        </div>
      </div>
    </div>
    <div class="text-center mt-4 fade-up">
      <a href="#" class="btn btn-view-all"><i class="fas fa-arrow-right me-2"></i>View All Results</a>
    </div>
  </div>
</section>

<!-- ===== FEATURED COURSES ===== -->
<section class="section-padding" id="courses" style="background: var(--bg);">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Featured <span>Courses</span></h2>
      <p>Expert-crafted courses to help you crack your dream exam</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="course-card">
          <div class="course-img">
            <i class="fas fa-university course-icon"></i>
            <span class="course-badge free">Free</span>
          </div>
          <div class="course-body">
            <h5>MPSC Complete Course</h5>
            <p>Comprehensive coverage of MPSC Rajyaseva syllabus with practice tests.</p>
            <a href="#" class="btn btn-enroll w-100">Enroll Free</a>
          </div>
          <div class="course-meta">
            <span><i class="fas fa-video"></i> 120+ Lessons</span>
            <span><i class="fas fa-user"></i> 4.8k Students</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="course-card">
          <div class="course-img" style="background: linear-gradient(135deg, #1a5f8a, #0f3b5c);">
            <i class="fas fa-landmark course-icon"></i>
            <span class="course-badge premium">Premium</span>
          </div>
          <div class="course-body">
            <h5>UPSC Foundation 2027</h5>
            <p>In-depth coverage of UPSC Civil Services with mock interviews.</p>
            <a href="#" class="btn btn-enroll w-100">View Details</a>
          </div>
          <div class="course-meta">
            <span><i class="fas fa-video"></i> 200+ Lessons</span>
            <span><i class="fas fa-user"></i> 3.2k Students</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="course-card">
          <div class="course-img" style="background: linear-gradient(135deg, #22C55E, #16a34a);">
            <i class="fas fa-calculator course-icon"></i>
            <span class="course-badge free">Free</span>
          </div>
          <div class="course-body">
            <h5>SSC Maths Mastery</h5>
            <p>Complete quantitative aptitude for SSC CGL, CHSL, and MTS exams.</p>
            <a href="#" class="btn btn-enroll w-100">Enroll Free</a>
          </div>
          <div class="course-meta">
            <span><i class="fas fa-video"></i> 80+ Lessons</span>
            <span><i class="fas fa-user"></i> 6.1k Students</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="course-card">
          <div class="course-img" style="background: linear-gradient(135deg, #F59E0B, #d97706);">
            <i class="fas fa-chart-bar course-icon"></i>
            <span class="course-badge premium">Premium</span>
          </div>
          <div class="course-body">
            <h5>Banking Pro 2026</h5>
            <p>Complete preparation for IBPS PO, Clerk, RRB, and SBI exams.</p>
            <a href="#" class="btn btn-enroll w-100">View Details</a>
          </div>
          <div class="course-meta">
            <span><i class="fas fa-video"></i> 150+ Lessons</span>
            <span><i class="fas fa-user"></i> 4.5k Students</span>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4 fade-up">
      <a href="#" class="btn btn-view-all"><i class="fas fa-arrow-right me-2"></i>View All Courses</a>
    </div>
  </div>
</section>

<!-- ===== MOCK TEST CATEGORIES ===== -->
<section class="section-padding" id="mock-tests">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Mock Test <span>Categories</span></h2>
      <p>Practice with exam-specific mock tests designed by experts</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="mock-card">
          <div class="mock-icon"><i class="fas fa-university"></i></div>
          <h5>MPSC</h5>
          <p>Rajyaseva, PSI, STI, & more</p>
          <span class="badge bg-success mb-3">36 Tests</span>
          <a href="#" class="btn btn-mock">Start Practice</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="mock-card">
          <div class="mock-icon"><i class="fas fa-landmark"></i></div>
          <h5>UPSC</h5>
          <p>Civil Services, CAPF, & more</p>
          <span class="badge bg-success mb-3">48 Tests</span>
          <a href="#" class="btn btn-mock">Start Practice</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="mock-card">
          <div class="mock-icon"><i class="fas fa-users"></i></div>
          <h5>SSC</h5>
          <p>CGL, CHSL, MTS, GD & more</p>
          <span class="badge bg-success mb-3">42 Tests</span>
          <a href="#" class="btn btn-mock">Start Practice</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="mock-card">
          <div class="mock-icon"><i class="fas fa-building-columns"></i></div>
          <h5>Banking</h5>
          <p>IBPS PO, Clerk, RRB & more</p>
          <span class="badge bg-success mb-3">30 Tests</span>
          <a href="#" class="btn btn-mock">Start Practice</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== STATISTICS ===== -->
<section class="stats-section" id="stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6 fade-up">
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-briefcase"></i></div>
          <div class="stat-number" data-target="12500">0</div>
          <p class="stat-label">Jobs Posted</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 fade-up">
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
          <div class="stat-number" data-target="58200">0</div>
          <p class="stat-label">Registered Users</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 fade-up">
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-file-alt"></i></div>
          <div class="stat-number" data-target="680">0</div>
          <p class="stat-label">Exam Updates</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 fade-up">
        <div class="stat-item">
          <div class="stat-icon"><i class="fas fa-trophy"></i></div>
          <div class="stat-number" data-target="15000">0</div>
          <p class="stat-label">Selections</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WHY CHOOSE JOBSATHI ===== -->
<section class="section-padding" id="why-choose">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Why Choose <span>JobSathi</span></h2>
      <p>We are committed to helping you achieve your career goals</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-bolt"></i></div>
          <h5>Fast Updates</h5>
          <p>Get real-time notifications for job openings, exam dates, and result announcements.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-check-circle"></i></div>
          <h5>Verified Listings</h5>
          <p>All job postings and exam notifications are verified for authenticity and accuracy.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-graduation-cap"></i></div>
          <h5>Expert Content</h5>
          <p>Courses and mock tests designed by top educators and industry professionals.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-mobile-alt"></i></div>
          <h5>Mobile Friendly</h5>
          <p>Fully responsive platform that works perfectly on all your devices.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="section-padding" id="testimonials" style="background: var(--bg);">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>What Our <span>Students Say</span></h2>
      <p>Hear from students who achieved their dreams with JobSathi</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 fade-up">
        <div class="testimonial-card">
          <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
          <p class="testi-text">JobSathi helped me stay updated with all MPSC notifications. I cleared my prelims with the help of their mock tests. Highly recommended for every aspirant!</p>
          <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <div class="testi-author">
            <div class="testi-avatar">PR</div>
            <div class="testi-info">
              <h6>Priya Sharma</h6>
              <p>MPSC Rajyaseva Aspirant</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 fade-up">
        <div class="testimonial-card">
          <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
          <p class="testi-text">I found my first job through JobSathi. The job alerts and application process was seamless. The platform is very easy to use and the listings are genuine.</p>
          <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <div class="testi-author">
            <div class="testi-avatar">RK</div>
            <div class="testi-info">
              <h6>Rahul Kumar</h6>
              <p>Software Engineer at TechCorp</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 fade-up">
        <div class="testimonial-card">
          <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
          <p class="testi-text">The SSC Maths course on JobSathi is fantastic. Clear explanations and plenty of practice questions. I scored 175+ in SSC CGL Tier 1 thanks to this platform.</p>
          <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <div class="testi-author">
            <div class="testi-avatar">AV</div>
            <div class="testi-info">
              <h6>Anita Verma</h6>
              <p>SSC CGL 2025 Qualified</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FAQ SECTION ===== -->
<section class="section-padding faq-section" id="faq">
  <div class="container">
    <div class="section-title fade-up">
      <div class="section-divider"></div>
      <h2>Frequently Asked <span>Questions</span></h2>
      <p>Find answers to common questions about JobSathi</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="faq-item fade-up active">
          <div class="faq-question">What is JobSathi? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">JobSathi is India's comprehensive career platform that provides job listings, exam notifications, mock tests, and online courses for job seekers and government exam aspirants including MPSC, UPSC, SSC, Banking, Railway, and more.</div>
        </div>
        <div class="faq-item fade-up">
          <div class="faq-question">Is JobSathi free to use? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">Yes, JobSathi is completely free for job browsing, exam notifications, and result updates. Some premium courses and advanced mock test series may have nominal fees to support quality content creation.</div>
        </div>
        <div class="faq-item fade-up">
          <div class="faq-question">How do I apply for jobs on JobSathi? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">You can browse job listings on the Jobs page and click "Apply Now" on any position. You will be redirected to the official application portal or guided through the application process directly on our platform.</div>
        </div>
        <div class="faq-item fade-up">
          <div class="faq-question">Which exams does JobSathi cover? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">JobSathi covers major Indian government exams including MPSC (Rajyaseva, PSI, STI), UPSC (Civil Services, CAPF), SSC (CGL, CHSL, MTS, GD), Banking (IBPS PO, Clerk, RRB), Railway, Defence, and many more.</div>
        </div>
        <div class="faq-item fade-up">
          <div class="faq-question">How can I get notifications about new jobs? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">Register for a free account and subscribe to job alerts based on your preferred categories and locations. You will receive instant notifications via email and on-platform alerts.</div>
        </div>
        <div class="faq-item fade-up">
          <div class="faq-question">Are the mock tests exam-specific? <i class="fas fa-chevron-down"></i></div>
          <div class="faq-answer">Yes, all mock tests are designed specifically for each exam following the latest pattern, syllabus, and marking scheme. You can practice subject-wise or take full-length tests.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
