<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUMENAVE | International Limited</title>
    <link rel="shortcut icon" href="{{ asset("/images/lumenave_favicon.png") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/2023_style.css') }}">
</head>
<body>
    <!-- <div class="loading-screen">
      <div class="loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div> -->
    <nav class="navbar navbar-expand-lg large-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url("/") }}"><img src="{{ asset("/images/lumenave_logo.png") }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="{{ url("#") }}" data-number="1">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("#") }}" data-number="2">Solutions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("#") }}" data-number="3">Support</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{ url("#") }}"data-number="4">Learn</a>
              </li>  
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn" type="button">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg small-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset("/images/lumenave_logo.png") }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" role="button" data-bs-toggle="dropdown">Product and Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url("#") }}">Home</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Professional Services</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Outsourcing and Managed Services</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">IT Financing</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Bandwidth Provisioning</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" role="button" data-bs-toggle="dropdown">Solutions</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url("#") }}">Home</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Information Security</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Information Availability</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Information Management</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Information System</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" role="button" data-bs-toggle="dropdown">Support</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url("#") }}">Home</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Support Option</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Standard Support</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Classic Support</a></li>
                <li><a class="dropdown-item" href="{{ url("#") }}">Premium Support</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ url("#") }}" class="nav-link">Learn</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn" type="button">Search</button>
        </form>
        </div>
      </div>
    </nav>
    <div class="nav_menu">
      <div class="menu" data-number="1">
        <div class="close"><a href="{{ url("#") }}" class="btn nav-link"><i class="fa-solid fa-xmark"></i></a></div>
        <div class="open-menu">
          <ul>
            <li>
              <a href="{{ url("#") }}" style="color: #fe0000; font-weight: 600;">Product and Services Home</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="menu-link active-link" data-number="11">Professional Services</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="menu-link" data-number="12">Outsourcing and Managed Services</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="menu-link" data-number="13">IT Financing</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="menu-link" data-number="14">Bandwidth Provisioning</a>
            </li>
          </ul>
          <div class="expanded-menu">
            <div class="product" data-number="11">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/advisory-services.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Advisory Services</h5>
                    <p>
                      We provide the best advice for that IT Problem or for that next IT purchase.
                    </p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/implementation-servives.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Implementation Services</h5>
                    <p>Implement that initial business initiatives and values not matter the products used.</p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="product" data-number="12">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/outsource-service.png") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Outsourcing Services</h5>
                    <p>
                      Our tech experts provide 24/7 enterprise tech support and critical case management.
                    </p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/managed_servives.png") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Managed Security Services</h5>
                    <p>Have 24x7x365 monitoring and management of in-house security resources.</p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More</a>
              </div>
            </div>
            <div class="product" data-number="13">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/it-finance.webp") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>IT Finance and Capital</h5>
                    <p>
                      Use the technology of need without much impact on overall budget.
                    </p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/it-insure.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>IT Insurance</h5>
                    <p>Protect Investment in IT Hardware against theft, fire and factory damages.</p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More</a>
              </div>
            </div>
            <div class="product" data-number="14">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/private-network.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Private Network Connection</h5>
                    <p>
                      Provide appropriate and high-quality connectivity for short, medium, and long distances.
                    </p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/mobile-connect.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Mobile Connectivity</h5>
                    <p>Fast, Efficient and Dependable Connectivity Options for Today's Mobile Workforce.</p>
                    <a href="{{ url("#") }}">Learn More</a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu" data-number="2">
        <div class="close"><button class="btn nav-link"><i class="fa-solid fa-xmark"></i></button></div>
        <div class="open-menu">
          <ul>
            <li>
              <a href="{{ url("#") }}" style="color: #fe0000; font-weight: 600;">Solutions Home</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="solution-link active-link" data-number="15">Information Security</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="solution-link" data-number="16">Information Availability</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="solution-link" data-number="17">Information Management</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="solution-link" data-number="18">Information Systems</a>
            </li>
          </ul>
          <div class="expanded-menu">
            <div class="solution" data-number="15">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/cloud-security.webp") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Cloud Security</h5>
                    <p>
                      Ensure data integrity and protection on shared public or private resources.
                    </p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/data-protection.webp") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Data Protection</h5>
                    <p>Identification, and classification of sensitive documents to prevent data leakage and reputational damage</p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="solution" data-number="16">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/backup-recovery.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Backup and Recovery</h5>
                    <p>
                      Protect and recover information in less time across a multitude of storage environments.
                    </p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/bcp.png") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Business Continuity</h5>
                    <p>Have a predictable and deterministic service recovery across all platforms</p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="solution" data-number="17">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/enterprise-management.png") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Enterprise Management</h5>
                    <p>
                      Proactively identify and report on enterprise resource usage, faults, and performance.
                    </p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/security-management.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Security Management</h5>
                    <p>Identify and fix security fringes in applications, networks, and systems before it is too late</p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="solution" data-number="18">
              <div class="row">
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/infrastructure-solutions.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Infrastructure Solutions</h5>
                    <p>
                      Reliable infrastructure that ensure fast-paced data transport with improved network reponse time.
                    </p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="image">
                    <img src="{{ asset("/inner-pages/images/network-solution.jpg") }}" alt="">
                  </div>
                  <div class="info">
                    <h5>Network Solutions</h5>
                    <p>Design, build, and maintain networks, unified Collaboration systems and wireless systems.</p>
                    <a href="{{ url("#") }}">Learn More <i class="fa-solid fa-angle-right"></i></a>
                  </div>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu" data-number="3">
        <div class="close"><button class="btn nav-link"><i class="fa-solid fa-xmark"></i></button></div>
        <div class="open-menu">
          <ul>
            <li>
              <a href="{{ url("#") }}" style="color: #fe0000; font-weight: 600;">Support Home</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="support-link active-link" data-number="IX">Support Options</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="support-link" data-number="X">Standard Support</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="support-link" data-number="XI">Classic Support</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="support-link" data-number="XII">Premium Support</a>
            </li>
          </ul>
          <div class="expanded-menu">
            <div class="support" data-number="IX">
              <div class="row">
                <div class="col-6" style="display: block;">
                  <p>
                    LUMENAVE provides various cost-effective and convenient support options for every business. Our support options are designed and priced to meet the various needs of small, medium or large enterprises. Our Support options are simple, reliable and efficient ensuring businesses get the full benefits of using our products, services, and solutions.
                  </p>
                </div>
                <div class="col-6" style="display: block;">
                  <p>Our support offering includes but limited to:</p>
                  <ul style="list-style:initial; border: none;">
                    <li>Provides 24x7x365 assistance to customers on various Information Communication Technology (ICT) products and solutions. See Supported Solutions below.</li>
                    <li>Available to customers that currently have installed products or solutions that are NOT optimally configured or been used in their organizations.</li>
                  </ul>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="support" data-number="X">
              <div class="row">
                <div class="col-6" style="display: block;">
                  <p>
                    Every product sold, services rendered, or solution deployed by LUMENAVE consultants, comes with three-month free standard support either done onsite, offsite, telephone calls, email, or by a logging a call.<br>In addition, our technology experts are always available to provide technical assistance and advice on several ways of optimizing the use of our products, services, and solutions.
                  </p>
                </div>
                <div class="col-6" style="display: block;">
                  <p>Standard support features:</p>
                  <ul style="list-style:initial; border: none;">
                    <li>Business Day support (Monday-Sunday, 6am-6pm GMT+1, excl. Major Holidays†)</li>
                    <li>Monthly Reports and Recommendations on Capacity, Faults, Inventory, Availability. Security, Configuration change and Performance</li>
                    <li>Proactive Support-Provide Alerts on Issues that May Affect Business Continuity</li>
                  </ul>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="support" data-number="XI">
              <div class="row">
                <div class="col-6" style="display: block;">
                  <p>LUMENAVE Classic Support is a world-class, reliable response support channel designed specifically for growing small and medium enterprise LUMENAVE Classic Support covers issues related to your use of LUMENAVE products, services, and solutions.</p>
                </div>
                <div class="col-6" style="display: block;">
                  <p>Classic support features:</p>
                  <ul style="list-style: inherit; border: none;">
                    <li>Business Day support (Monday-Sunday, 6am-6pm GMT+1, excl. Major Holidays†)</li>
                    <li>Monthly Reports and Recommendations on Capacity, Faults, Inventory, Availability. Security, Configuration change and Performance</li>
                    <li>Quarterly Routine Maintenance of all Registered IT Systems in the Contract</li>
                  </ul>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
            <div class="support" data-number="XII">
              <div class="row">
                <div class="col-6" style="display: block;">
                  <p>Our Premium Support is a one-on-one, world-class, fast-response support channel to help organization get better experience on the use of LUMENAVE products, services and solution.</p>
                </div>
                <div class="col-6" style="display: block;">
                  <p>Premium support features:</p>
                  <ul style="list-style: initial; border: none;">
                    <li>Business Day support (Monday-Sunday, 6am-6pm GMT+1, excl. Major Holidays†)</li>
                    <li>Monthly Reports and Recommendations on Capacity, Faults, Inventory, Availability. Security, Configuration change and Performance</li>
                    <li>Quarterly Routine Maintenance of all Registered IT Systems in the Contract</li>
                  </ul>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu" data-number="4">
        <div class="close"><button class="btn nav-link"><i class="fa-solid fa-xmark"></i></button></div>
        <div class="open-menu">
          <ul>
            <li>
              <a href="{{ url("#") }}" style="color: #fe0000; font-weight: 600;">Learn Home</a>
            </li>
            
          </ul>
          <div class="expanded-menu">
            <div class="learn">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset("/images/digital-learning.jpg") }}" alt="">
                  <h5>Lumenave Digital Learning</h5>
                  <p>Access our online product, technology, and certification courses, with video lectures and hands-on labs—anytime, anywhere.</p>
                </div>
                <div class="col-4">
                  <img src="{{ asset("/images/bootcamp.jpg") }}" alt="">
                  <h5>Training bootcamps</h5>
                  <p>Taliored to your team's skills and goals, this intensive training program gets your team the skills they need to help your organization realize its potential.</p>
                </div>
                <div class="col-4">
                  <img src="{{ asset("/images/event.jpeg") }}" alt="">
                  <h5>Events</h5>
                  <p>Join us to take advantage of the latest networking opportunities with Cisco customers, partners, employees, and subject-matter experts.</p>
                </div>
                <a href="{{ url("#") }}">Explore More <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="header">
        <div class="header">
          <h1>
            Think LUMENAVE
          </h1>
          <h4>Think Information <span>Availability</span>, <span>Security</span> and <span>Management</span>.</h4>
          <button class="btn">Secure your future</button>
        </div>
    </section>
    <section id="home"></section>
    <section id="barner">
      <div class="row">
        <div class="col-2">
          <span class="material-symbols-outlined">
            dns
            </span>
            <p>ICT Guides</p>
        </div>
        <div class="col-2">
          <span class="material-symbols-outlined">
            school
            </span>
            <p>Training</p>
        </div>
        <div class="col-2">
          <span class="material-symbols-outlined">
            person_search
            </span>
            <p>Careers</p>
        </div>
        <div class="col-2">
          <span class="material-symbols-outlined">
            store
            </span>
            <p>Store</h6>
        </div>
        <div class="col-2">
          <span class="material-symbols-outlined">
            edit_note
            </span>
            <p>Blog</h6>
        </div>
        <div class="col-2">
          <span class="material-symbols-outlined">
            support_agent
            </span>
            <p>Support</p>
        </div>
      </div>
    </section>
    <section id="partner">
      <div class="container-fluid p-3">
        <h6>Our Partners, Our Pride</h6>
          <div class="slider">
              <div class="slider-track">
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/solarwinds.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/broadcom.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/cisco.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/boldonjames.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/check-point.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/cyberark_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/fortinet.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/imperva.png") }}" alt="" style="background-color: black;">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/micorfocus.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/randtronics.png") }}" alt="" style="height: 100px; width: 100px;">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/rapid7.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/titania.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/veritas.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/vmware_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/microsoft_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/oracle.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/tenable.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/trellix.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/acunetix.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/portnox.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/f5.png") }}" alt="" style="height: 80px; width: 110px;">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/delinea.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("images/img_2023/partners/fortra.png") }}" alt="">
                </div>
              </div>
          </div>
      </div>
    </section>
    <section id="services">
      <h3>
        Take the LUMENAVE Advantage Today
      </h3>
      <div class="services">
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/learn-more-1.jpg") }}" alt="">
          </div>
          <div class="write-up">
            <h4>Information Availability </h4>
            <p>
                Improve uptime with Guarantee Business Continuity in Challenging IT Environment.
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/pro-services.jpg") }}" alt="">
          </div>
          <div class="write-up">
            <h4>Professional Services</h4>
            <p>
                We help organizations deliver IT projects that meet expected business objectives.
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/service-4.png") }}" alt="">
          </div>
          <div class="write-up">
            <h4>Accelerate your IT career</h4>
            <p>
                Advance your career through our word class training delivered by industry expert.
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/it_insure.png") }}" alt="">
          </div>
          <div class="write-up">
            <h4>IT Finance</h4>
            <p>
                Let your Organization's Technology Maximize Cashflow and Profitability
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/support.jpg") }}" alt="">
          </div>
          <div class="write-up">
            <h4>Support Options</h4>
            <p>
                LUMENAVE provides various cost-effective and convenient support options for every business.
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
        <div class="service">
          <div class="image">
            <img src="{{ asset("images/img_2023/bg-images/trusted-solution.jpg") }}" alt="">
          </div>
          <div class="write-up">
            <h4>Tested, Trusted and Industry-Based Solutions</h4>
            <p>
                We tailor our solutions to meet diverse business objectives.
            </p>
            <a href="{{ url("#") }}">Learn More
              <span class="material-symbols-outlined">
              arrow_forward
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="number">
      <div class="row">
        <div class="col-4">
          <h3>
            The most comprehensive technology ecosystem you can find.
          </h3>
        </div>
        <div class="col-8">
          <div class="background"></div>
          <div class="numbers">
            <div class="number data">
              <div class="figure">
                <h2>35+</h2>
                <div class="stars">
                  <div class="star single"></div>
                  <div class="group">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                  <div class="star single-2"></div>
                  <div class="group-2">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                </div>
              </div>
              <div class="caption">
                <h4>Happy Customers</h4>
              </div>
            </div>
            <div class="number storage">
              <div class="figure">
                <h2>100+</h2>
                <div class="stars">
                  <div class="star single"></div>
                  <div class="group">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                  <div class="star single-2"></div>
                  <div class="group-2">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                </div>
              </div>
              <div class="caption">
                <h4>Deployed Projects</h4>
              </div>
            </div>
            <div class="number operating-system">
              <div class="figure">
                <h2>15+</h2>
                <div class="stars">
                  <div class="star single"></div>
                  <div class="group">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                  <div class="star single-2"></div>
                  <div class="group-2">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                </div>
              </div>
              <div class="caption">
                <h4>Partners</h4>
              </div>
            </div>
            <div class="number cloud">
              <div class="figure">
                <h2>25+</h2>
                <div class="stars">
                  <div class="star single"></div>
                  <div class="group">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                  <div class="star single-2"></div>
                  <div class="group-2">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                  </div>
                </div>
              </div>
              <div class="caption">
                <h4>Solutions</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="learn-more">
      <div class="row">
        <div class="col-6">
          <img src="{{ asset("images/img_2023/bg-images/learn-more.png") }}" alt="">
        </div>
        <div class="col-6 write-up" style="padding-left: 150px;">
          <h3>AI Powered EDR Solutions</h3>
          <p>Get secured every day with AI capabilities to boost your security team's resources for optimal value.</p>
          <button class="btn">Discover EDR</button>
        </div>
      </div>
      <div class="row responsive-row">
        <div class="col-6 write-up" style="padding-right: 150px;">
          <h3>Improve Security Operations and Mitigate threats</h3>
          <p>Prevent Loss, misuse, illegal access to, or modification of data that could negatively impact your operations. </p>
          <button class="btn">Mitigate Threat</button>
        </div>
        <div class="col-6">
          <img src="{{ asset("images/img_2023/bg-images/learn-more-2.png") }}" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="{{ asset("images/img_2023/bg-images/learn-more-3.jpg") }}" alt="">
        </div>
        <div class="col-6 write-up" style="padding-left: 150px;">
          <h3>Increase your enterprise operational effectiveness.</h3>
          <p>Improve applications and services uptime through proper monitoring of applications processes, services, and resources. </p>
          <button class="btn">Learn More</button>
        </div>
      </div>
    </section>
    <section id="video_ads">
      <h3>Keep things moving with security resilience</h3>
      <p>Be ready for whatever the future throws at you.</p>
      <!-- <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls preload="auto" width="60%" height="70%"
        data-setup="{}">
        <source src="https://www.youtube.com/watch?v=zOQJ3otsLHM" type='video/mp4'>
        <source src="MY_VIDEO.webm" type='video/webm'>
      </video> -->
      <iframe id="video" src="https://www.youtube.com/embed/zOQJ3otsLHM"title=""></iframe><br><br>
      
    </section>
    <!-- <section id="partners">
      <h3>Partner with the world’s largest and best information and communication technology companies including:</h3>
      <div class="partners">
        <div class="partner">
          <img src="{{ asset("/images/partners/rapid7.png") }}" alt="">
        </div>
        <div class="partner">
          <img class="firstbank" src="{{ asset("/images/partners/veritas.png") }}" alt="">
        </div>
        <div class="partner" style="background-color: black;">
          <img src="{{ asset("/new-images/partners/imperva.png") }}" alt="">
        </div>
        <div class="partner">
          <img src="{{ asset("/new-images/partners/solarwinds.png") }}" alt="">
        </div>
        <div class="partner">
          <img class="leadway" src="{{ asset("/new-images/partners/cisco.png") }}" alt="">
        </div>
        <div class="partner">
          <img src="{{ asset("/new-images/partners/fortinet.png") }}" alt="">
        </div>
        <div class="partner">
          <img class="firstbank" src="{{ asset("/new-images/partners/cyberark_logo.png") }}" alt="">
        </div>
        <div class="partner">
          <img src="new-images/partners/broadcom.png" alt="">
        </div>
        <div class="partner">
          <img class="fcmb" src="{{ asset("/new-images/partners/boldonjames.png") }}" alt="">
        </div>
        <div class="partner">
          <img src="new-images/partners/check-point.jpg" alt="">
        </div>
      </div>
    </section> -->
    <section id="testimonial">
      <h3>Our customers, Our Competence...</h3>
      <div class="swiper-container swiper-testimonial">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="title">
                  <p>Abolaji Oyebo,<br> <span>Head, Infrastructure.</span></p>
                </div>
                <img src="{{ asset('images/img_2023/testimonials/testimonial-1.png') }}" alt="">
                <div class="body">
                  <p>“We have worked with LUMENAVE on numerious projects spanning all areas of ICT. WW are very happy with their competence, quality service delivery,and excellent customer service.”</p>
                </div>
            </div>
            <div class="swiper-slide">
              <div class="title">
                <p>Sunkanmi Shuaib,<br> <span>Head, Information Technology.</span></p>
              </div>
              <img src="{{ asset('images/img_2023/testimonials/testimonial-2.jpg') }}" alt="">
              <div class="body">
                <p>“The implementation of the data protection solution was handled professionally and LUMENAVE was willing to work with us as partner resolving all issues as they were been reported.”</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="title">
                <p>Olumuyiwa Fagbenro,<br> <span>Head, Information Technology.</span></p>
              </div>
              <img src="{{ asset('images/img_2023/testimonials/testimonial-3.jpg') }}" alt="">
              <div class="body">
                <p>“We were highly impressed with the way the implementation of Enterprise Monitoring Solution was carried out by LUMENAVE...It was excellent job done.”</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="title">
                <p>Akinbami Babatunde,<br> <span>Head, Information Technology.</span></p>
              </div>
              <img src="{{ asset('images/img_2023/testimonials/testimonial-4.jpg') }}" alt="">
              <div class="body">
                <p>“It has been a great delight having LUMENAVE as our Symantec Partner as they are very responsive and professional. We are very much at ease because we know LUMENAVE has got our back.”</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="title">
                <p>Abba Yahaya,<br> <span>Chief Information Officer.</span></p>
              </div>
              <img src="{{ asset('images/img_2023/testimonials/testimonial-5.jpg') }}" alt="">
              <div class="body">
                <p>“LUMENAVE has delivered successfully and satisfactorily on our Enterprise Monitoring Solution...going the extra miles providing us features beyond our expectations.”</p>
              </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>

      </div>
    </section>
    <!-- <section id="partner">
      <div class="container-fluid p-5">
        <h6>In the News:</h6>
          <div class="slider">
              <div class="slider-track">
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/solarwinds.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images//partners/broadcom.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/cisco.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/boldonjames.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/check-point.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/cyberark_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/fortinet.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/imperva.png") }}" alt="" style="background-color: black;">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/micorfocus.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/randtronics.png") }}" alt="" style="height: 100px; width: 100px;">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/rapid7.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/titania.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/veritas.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/vmware_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/microsoft_logo.png") }}" alt="">
                </div>
                <div class="slide">
                  <img src="{{ asset("/new-images/partners/oracle.png") }}" alt="">
                </div>
              </div>
          </div>
      </div>
    </section> -->
    <footer>
      <div class="large-screen">
        <div class="footer-links">
          <ul>
            <li><a href="{{ url("") }}">About Us</a></li>
            <li><a href="{{ url("") }}">Contact Us</a></li>
            <li><a href="{{ url("") }}">Career</a></li>
            <li><a href="{{ url("") }}">Partners</a></li>
          </ul>
          <div class="media">
            <a href="{{ url("") }}"><i class="fa-brands fa-facebook"></i></a>
            <a href="{{ url("") }}"><i class="fa-brands fa-twitter"></i></a>
            <a href="{{ url("") }}"><i class="fa-brands fa-instagram"></i></a>
            <a href="{{ url("") }}"><i class="fa-brands fa-linkedin"></i></a>
            <a href="{{ url("") }}"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <ul>
          <li><a href="{{ url("") }}">Feedback</a></li>
          <li><a href="{{ url("") }}">Help</a></li>
          <li><a href="{{ url("") }}">Terms and Conditions</a></li>
          <li><a href="{{ url("") }}">Privacy Statement</a></li>
          <li><a href="{{ url("") }}">Cookies</a></li>
          <li><a href="{{ url("") }}">Trademark</a></li>
          <li><a href="{{ url("") }}">Sitemap</a></li>
        </ul>
      </div>
      <div class="small-screen">
        <div class="footer-link">
          <ul>
            <li><a href="{{ url("") }}">About Us</a></li>
            <li><a href="{{ url("") }}">Contact Us</a></li>
            <li><a href="{{ url("") }}">Career</a></li>
            <li><a href="{{ url("") }}">Partners</a></li>
            <li><a href="{{ url("") }}">Privacy Statement</a></li>
          </ul>
          <ul>
            <li><a href="{{ url("") }}">Feedback</a></li>
            <li><a href="{{ url("") }}">Help</a></li>
            <li><a href="{{ url("") }}">Terms and Conditions</a></li>
            <li><a href="{{ url("") }}">Cookies</a></li>
            <li><a href="{{ url("") }}">Trademark</a></li>
            <li><a href="{{ url("") }}">Sitemap</a></li>
          </ul>
        </div>
        <div class="media">
          <a href="{{ url("") }}"><i class="fa-brands fa-facebook"></i></a>
          <a href="{{ url("") }}"><i class="fa-brands fa-twitter"></i></a>
          <a href="{{ url("") }}"><i class="fa-brands fa-instagram"></i></a>
          <a href="{{ url("") }}"><i class="fa-brands fa-linkedin"></i></a>
          <a href="{{ url("") }}"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="copy">
        <p>&#169 2023 LUMENAVE, Inc.</p>
      </div>
    </footer>



    <script src='{{ asset("js/2023_app.js") }}'></script>
  </body>
</html>