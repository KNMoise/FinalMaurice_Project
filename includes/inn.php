<!-- Company Background Story Section -->
<style>
    /* General Styles */
body {
  font-family: 'Roboto', sans-serif;
}

.section {
  padding: 80px 0;
}

.section-title {
  margin-bottom: 40px;
}

.display-4 {
  font-size: 3rem;
}

.lead {
  font-size: 1.25rem;
  line-height: 1.6;
}

/* Timeline Styles */
.timeline {
  position: relative;
  padding-left: 30px;
}

.timeline::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 100%;
  background-color: #e9ecef;
}

.timeline-item {
  position: relative;
  margin-bottom: 40px;
}

.timeline-icon {
  position: absolute;
  top: 0;
  left: -30px;
  width: 40px;
  height: 40px;
  background-color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.timeline-icon i {
  font-size: 20px;
}

.timeline-content {
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

.timeline-title {
  font-size: 1.25rem;
  font-weight: bold;
  margin-bottom: 10px;
}

.timeline-text {
  font-size: 1rem;
  line-height: 1.6;
}

/* Button Styles */
.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-lg {
  font-size: 1.25rem;
}

.rounded-pill {
  border-radius: 50rem;
}

.shadow {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>


<section class="section bg-light" style="background-image: url(''); ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center">
          <h2 class="display-4 font-weight-bold text-primary text-align:center">Our Story</h2>
        </div>
        <p class="lead" style="color: black;">Discover the journey of Innovate and how we've evolved over the years to become a leader in digital transformation and document management solutions.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="timeline">
          <!-- Timeline Item 1 -->
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="bi bi-calendar-event text-primary"></i>
            </div>
            <div class="timeline-content">
              <h3 class="timeline-title">Founding of Innovate</h3>
              <p class="timeline-text">Innovate was founded in [Year] with a vision to revolutionize the way businesses leverage technology for growth.</p>
            </div>
          </div>
          <!-- Timeline Item 2 -->
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="bi bi-briefcase text-primary"></i>
            </div>
            <div class="timeline-content">
              <h3 class="timeline-title">Expansion of Services</h3>
              <p class="timeline-text">As demand for digital transformation grew, Innovate expanded its services to include software consultancy, project management, and document management solutions.</p>
            </div>
          </div>
          <!-- Timeline Item 3 -->
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="bi bi-trophy text-primary"></i>
            </div>
            <div class="timeline-content">
              <h3 class="timeline-title">Recognition and Awards</h3>
              <p class="timeline-text">Innovate received several awards and recognition for its innovative approach and successful projects in driving digital transformation for clients across various industries.</p>
            </div>
          </div>
          <!-- Timeline Item 4 -->
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="bi bi-globe text-primary"></i>
            </div>
            <div class="timeline-content">
              <h3 class="timeline-title">Global Reach</h3>
              <p class="timeline-text">Today, Innovate serves clients worldwide, helping them navigate the complexities of the digital landscape and achieve sustainable growth through tailored solutions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6 text-center">
        <a href="service.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3 shadow">Explore Our Services</a>
      </div>
    </div>
  </div>
</section>
<!-- End of Company Background Story Section -->