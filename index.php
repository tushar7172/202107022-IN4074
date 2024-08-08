<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $vio = $_POST['vio'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];

    $sql = "INSERT INTO registeri (Name, vio, sem, branch) VALUES ('$name', '$vio', '$sem', '$branch')";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>Scholar - Online Complaint Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <h1>Scholar</h1>
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Serach Start ***** -->
              <div class="search-input">
                <form id="search" action="#">
                  <input
                    type="text"
                    placeholder="Type Something"
                    id="searchText"
                    name="searchKeyword"
                    onkeypress="handle"
                  />
                  <i class="fa fa-search"></i>
                </form>
              </div>
              <!-- ***** Serach Start ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="#top" class="active">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#services">Services</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#courses">Courses</a>
                </li>
                <li class="scroll-to-section"><a href="#team">Team</a></li>
                <li class="scroll-to-section"><a href="#events">Events</a></li>
                <li class="scroll-to-section">
                  <a href="./info.php">Information</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#contact">Register Now!</a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-banner">
              <div class="item item-1">
                <div class="header-text">
                  <span class="category">Our Courses</span>
                  <h2>Welcome to Student Violation Reporting Portal</h2>
                  <p>
                  Welcome to the Student Violation Reporting Portal, a secure and user-friendly platform where students can report violations, manage their complaints, and contribute to a safer and fairer educational environment. Whether it's academic misconduct, harassment, discrimination, or any other form of violation, your voice is crucial in maintaining integrity and respect within our community.
                  </p>
                  <div class="buttons">
                    <div class="main-button">
                      <a href="#">Request Demo</a>
                    </div>
                    <div class="icon-button">
                      <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item item-2">
                <div class="header-text">
                  <span class="category">Best Result</span>
                  <h2>Create a Complaint</h2>
                  <p>
                  Encountered a violation? Easily create a complaint with all the necessary details. Your report will be kept confidential, and only authorized personnel will have access to your submission.
                  </p>
                  <div class="buttons">
                    <div class="main-button">
                      <a href="#">Request Demo</a>
                    </div>
                    <div class="icon-button">
                      <a href="#"
                        ><i class="fa fa-play"></i> What's the best result?</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="item item-3">
                <div class="header-text">
                  <span class="category">Online Learning</span>
                  <h2>Our Mission</h2>
                  <p>
                  At the Student Violation Reporting Portal, our mission is to empower students by providing a safe, confidential, and accessible platform to report violations within their educational environment. We believe in the power of every student's voice and are committed to fostering a culture of accountability, respect, and fairness.
                  </p>
                  <div class="buttons">
                    <div class="main-button">
                      <a href="#">Request Demo</a>
                    </div>
                    <div class="icon-button">
                      <a href="#"
                        ><i class="fa fa-play"></i> What's Online Course?</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services section" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon">
                <img src="assets/images/service-01.png" alt="online degrees" />
              </div>
              <div class="main-content">
                <h4>Online Degrees</h4>
                <p>
                   
                </p>
                <div class="main-button">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon">
                <img src="assets/images/service-02.png" alt="short courses" />
              </div>
              <div class="main-content">
                <h4>Short Courses</h4>
                <p>
                </p>
                <div class="main-button">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon">
                <img src="assets/images/service-03.png" alt="web experts" />
              </div>
              <div class="main-content">
                <h4>Web Experts</h4>
                <p>
                </p>
                <div class="main-button">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Where shall we begin?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                  We shall begin right where you are. Whether it's a question, a project, or an idea, let's take that first step together. What would you like to start with?
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    How do we work together?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                  The Student Violation Reporting Portal allows students to report a wide range of violations, including but not limited to:<br>

Academic misconduct<br>
Harassment or bullying<br>
Discrimination<br>
Breaches of student rights<br>
Through our platform, students can easily create, update, and manage their complaints, ensuring that every report is handled with the seriousness and confidentiality it deserves.<br>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Why SCHOLAR is the best?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                  We are committed to continuously improving our platform to better serve the needs of our users. Your trust is important to us, and we are dedicated to providing a safe, supportive space for all students to report violations and seek justice.<br>
Thank you for being a part of our community.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Do we get the best support?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    You can also search on Google with specific keywords such as
                    <code
                      >Complaint Portal, Violation of student code of conduct</code
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <div class="section-heading">
              <h6>About Us</h6>
              <h2>What make us the best academy online?</h2>
              <p>
              We are a dedicated team of educators, developers, and advocates who are passionate about creating a safer and more equitable educational experience for all students. Our platform was built with the understanding that students need a trusted space to raise concerns and report violations without fear of retaliation or judgment.
              </p>
              <div class="main-button">
                <a href="#">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section courses" id="courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h6>Latest Courses</h6>
              <h2>Latest Courses</h2>
            </div>
          </div>
        </div>
        <ul class="event_filter">
          <li>
            <a class="is_active" href="#!" data-filter="*">Show All</a>
          </li>
          <li>
            <a href="#!" data-filter=".design">Webdesign</a>
          </li>
          <li>
            <a href="#!" data-filter=".development">Development</a>
          </li>
          <li>
            <a href="#!" data-filter=".wordpress">Wordpress</a>
          </li>
        </ul>
        <div class="row event_box">
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-01.jpg" alt="" /></a>
                <span class="category">Webdesign</span>
                <span class="price"
                  ><h6><em>$</em>160</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">Stella Blair</span>
                <h4>Learn Web Design</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-02.jpg" alt="" /></a>
                <span class="category">Development</span>
                <span class="price"
                  ><h6><em>$</em>340</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">Cindy Walker</span>
                <h4>Web Development Tips</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-03.jpg" alt="" /></a>
                <span class="category">Wordpress</span>
                <span class="price"
                  ><h6><em>$</em>640</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">David Hutson</span>
                <h4>Latest Web Trends</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-04.jpg" alt="" /></a>
                <span class="category">Development</span>
                <span class="price"
                  ><h6><em>$</em>450</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">Stella Blair</span>
                <h4>Online Learning Steps</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-05.jpg" alt="" /></a>
                <span class="category">Wordpress</span>
                <span class="price"
                  ><h6><em>$</em>320</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">Sophia Rose</span>
                <h4>Be a WordPress Master</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-06.jpg" alt="" /></a>
                <span class="category">Webdesign</span>
                <span class="price"
                  ><h6><em>$</em>240</h6></span
                >
              </div>
              <div class="down-content">
                <span class="author">David Hutson</span>
                <h4>Full Stack Developer</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="wrapper">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="counter">
                    <h2
                      class="timer count-title count-number"
                      data-to="150"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Happy Students</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter">
                    <h2
                      class="timer count-title count-number"
                      data-to="804"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Course Hours</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter">
                    <h2
                      class="timer count-title count-number"
                      data-to="50"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Employed Students</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter end">
                    <h2
                      class="timer count-title count-number"
                      data-to="15"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Years Experience</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team section" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="assets/images/member-01.jpg" alt="" />
                <span class="category">UX Teacher</span>
                <h4>Sophia Rose</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="assets/images/member-02.jpg" alt="" />
                <span class="category">Graphic Teacher</span>
                <h4>Cindy Walker</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="assets/images/member-03.jpg" alt="" />
                <span class="category">Full Stack Master</span>
                <h4>David Hutson</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="assets/images/member-04.jpg" alt="" />
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="owl-carousel owl-testimonials">
              <div class="item">
                <p>
                Objective:<br>
To obtain a Store Manager position at Bell Canada where I can leverage my leadership skills and experience to drive sales growth and exceed customer expectations.<br>

Education:<br>
- Bachelor of Science in Computer Science, University of Toronto, 2022<br>

                </p>
                <div class="author">
                  <img src="assets/images/profile.jpeg" alt="" />
                  <span class="category">Full Stack Master</span>
                  <h4>Tushar Singh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <div class="section-heading">
              <h6>About Me</h6>
              <h2>What they say about Me?</h2>
              <p>
              Skills:<br>
- Excellent communication skills<br>
- Strong customer service skills<br>
- Ability to work well in a team environment<br>
- Proficient in Microsoft Office Suite<br>
- Experience with sales data analysis and reporting<br>
- Knowledge of marketing principles and practices<br>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section events" id="events">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h6>Schedule</h6>
              <h2>Upcoming Events</h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets/images/event-01.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Web Design</span>
                      <h4>UI Best Practices</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>16 Feb 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>22 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>$120</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets/images/event-02.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Front End</span>
                      <h4>New Design Trend</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>24 Feb 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>30 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>$320</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets/images/event-03.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Full Stack</span>
                      <h4>Web Programming</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>12 Mar 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>48 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>$440</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-us section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Feel free to contact us anytime if you see any Violation of student code of conduct</h2>
              <p>
              At the Student Violation Reporting Portal, we believe that every student deserves to learn in a safe, respectful, and supportive environment. If you’ve experienced or witnessed a violation, we encourage you to file a complaint. Your report is a crucial step in addressing and resolving issues within our community.
              </p>
              <div class="special-offer">
                <span class="offer">off<br /><em>50%</em></span>
                <h6>Valide: <em>24 April 2036</em></h6>
                <h4>Special Offer <em>50%</em> OFF!</h4>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-us-content">
              <form id="contact-form" action="index.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="name"
                        name="Name"
                        id="name"
                        placeholder="Your Name..."
                        autocomplete="on"
                        required
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="text"
                        name="sem"
                        id="sem"
                        placeholder="Enter semester..."
                        required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="text"
                        name="branch"
                        id="branch"
                        placeholder="Your Branch..."
                        required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea
                        name="vio"
                        id="vio"
                        placeholder="Violation Type..."
                      ></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button
                        type="submit"
                        id="form-submit"
                        class="orange-button"
                      >
                        Send Message Now
                      </button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="col-lg-12">
          <p>
            Copyright © 2036 Tushar. All rights reserved. &nbsp;&nbsp;&nbsp;
            Design:
            <a href="https://templatemo.com" rel="nofollow" target="_blank"
              >TemplateMo</a
            >
            Distribution:
            <a href="https://themewagon.com" rel="nofollow" target="_blank"
              >Tushar</a
            >
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
