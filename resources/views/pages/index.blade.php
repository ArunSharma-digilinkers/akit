@extends('layouts.main')
@section('content')

@section('title', 'AK IT Lab - Quality Tech Products with Free Shipping')

@section('description', 'Shop for top tech products at AK IT Lab, your trusted destination for electronics, accessories, and more in Rwanda. Enjoy free shipping on orders over RWF 1000!')

@section('keywords', '')


<div class="main-wrapper">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/demo-banner-1.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h4 class="banner-text">Empowering Your IT Journey</h4>
                    <p class="banner-subtext">Innovative solutions for digital transformation and business growth.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="hm-info-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-5 col-sm-12">
                    <div class="info-wrap">
                        <h5>About AK IT Lab</h5>
                        <h3>Empowering Innovation Through Smart IT Solutions</h3>
                        <p>
                            At AK IT Lab, we strive to drive your business forward by providing innovative and tailored IT solutions. Our expertise in technology helps organizations harness the power of IT to improve efficiency, scalability, and security. We specialize in a range of services, including cloud computing, data analytics, cybersecurity, and automation, to ensure that your business is always equipped with the best technology solutions.
                        </p>

                        <div class="counter-container">
                            <div class="counter-box">
                                <div class="counter" data-target="50" data-suffix="+">0</div>
                                <p>Years of experience</p>
                            </div>
                            <div class="counter-box">
                                <div class="counter" data-target="100" data-suffix="+">0</div>
                                <p>Project Delivered</p>
                            </div>
                        </div>
                        <div class="hm-btn-1">
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-lg-7 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mt-30">
                            <div class="hm-info-box">
                                <img src="img/info-icon-1.png" class="img-fluid">
                                <h4>Robust Data Security</h4>
                                <p>
                                    Protect your data with comprehensive, industry-leading security measures, ensuring
                                    safety against emerging cyber threats.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="hm-info-box-2">
                                <img src="img/info-icon-2.png" class="img-fluid">
                                <h4>Expert Analytics & Insights</h4>
                                <p>
                                    Leverage advanced data analytics to gain actionable insights, improving decision-making
                                    and business performance.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mt-30">
                            <div class="hm-info-box">
                                <img src="img/info-icon-3.png" class="img-fluid">
                                <h4>Data Management</h4>
                                <p>
                                    Organize, manage, and optimize your business data with scalable solutions designed for
                                    operational efficiency.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="hm-info-box-2">
                                <img src="img/info-icon-4.png" class="img-fluid">
                                <h4>Reliable System Performance</h4>
                                <p>
                                    Ensure consistent, high-performance IT systems with proactive monitoring, eliminating
                                    downtime and maximizing productivity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>

    <div class="cta-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="cta-img-box">
                        <img src="img/cta-laptop-img.png" class="img-fluid float-animation">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12" data-aos="fade-left">
                    <div class="cta-txt-box">
                        <h5>Still Using Outdated Infrastructure?</h5>
                        <h3>Is your technology holding you back instead of moving you forward?</h3>
                        <p>
                            In today’s fast-paced digital world, outdated systems and sluggish IT responses can cost your
                            business more than just time—they cost you clients, credibility, and growth. Our expert IT
                            solutions are tailored to streamline operations, strengthen cybersecurity, and future-proof your
                            infrastructure. Whether you're scaling up or tightening security, we deliver results that speak
                            for themselves.
                        </p>
                        <p>
                            Technology should empower your business, not confuse it. With our data-driven approach, we help
                            you make smarter, faster, and more cost-effective decisions.
                        </p>
                        <div class="hm-btn-2">
                            <a href="">Explore Our Tech Solutions Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="why-choose-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" >
                    <div class="why-box">
                        <h5>Why Choose Us</h5>
                        <h3>Elevate Growth With Our IT Solutions For Success.</h3>
                        <p>
                            we provide cutting-edge IT solutions designed to foster growth, streamline operations, and drive
                            digital transformation for businesses of all sizes. Our team of highly skilled professionals
                            works closely with you to understand your unique challenges and goals, ensuring that our
                            technology solutions align with your business vision. Whether you’re scaling up your IT
                            infrastructure, securing your data, or migrating to the cloud, we’re here to help you every step
                            of the way.
                        </p>

                        <div class="value-points mt-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">Experienced &amp; Compassionate Doctors</p>
                        </div>

                        <div class="value-points mt-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">Commitment to Innovation</p>
                        </div>

                        <div class="value-points mt-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">Customer-Centric Approach</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left">
                    <img src="img/why-choose-img.png" class="img-fluid">
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                    <div class="mision-box">
                        <img src="img/ideaology-icon.png" class="img-fluid">
                        <h4>Our Ideology</h4>
                        <p>
                            We believe in empowering businesses with reliable, cutting-edge technology that simplifies
                            processes, fosters innovation, and ensures long-term success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                    <div class="mision-box">
                        <img src="img/mision-icon.png" class="img-fluid">
                        <h4>Our Mission</h4>
                        <p>
                            Our mission is to provide businesses with IT solutions that enhance operational efficiency,
                            security, and scalability.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                    <div class="mision-box">
                        <img src="img/vision-icon.png" class="img-fluid">
                        <h4>Our Vision</h4>
                        <p>
                            To become a leading provider of innovative IT solutions that help organizations across
                            industries thrive in the digital age.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cta2-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="cta2-box">
                        <h3>Transform Your Business with Cutting-Edge IT Solutions</h3>
                        <p>
                            we specialize in providing innovative IT solutions tailored to meet your business needs. Whether you're looking to enhance efficiency, improve security, or drive digital transformation, our team of experts is here to help you succeed. Partner with us and stay ahead of the competition with customized solutions that leverage the latest in cloud computing, cybersecurity, and AI-driven technologies. Let's take your business to the next level — get in touch with us today to start your journey towards a smarter future.
                        </p>

                        <div class="hm-btn-2">
                            <a href="">Get Started Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hm-product-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="product-heading">
                        <h5>Comprehensive IT Services for Seamless Digital Transformation</h5>
                        <h3>Unlock the Power of Technology with Tailored IT Solutions</h3>
                        <p>
                            we specialize in providing end-to-end IT services that are designed to meet the unique needs of
                            your business. From infrastructure setup and cloud migration to advanced data analytics and
                            cybersecurity, our solutions empower organizations to streamline operations, enhance security,
                            and accelerate growth.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service1-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">Cloud Solution</h4>
                            <p class="card-description">Flexible and scalable cloud solutions to improve efficiency, performance, and security for your business needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service2-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">Data-Center Solution</h4>
                            <p class="card-description">Optimized data-center solutions that enhance performance, security, and reliability for mission-critical operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service3-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">Cyber security Services</h4>
                            <p class="card-description">Comprehensive cybersecurity services to safeguard your business from evolving cyber threats and vulnerabilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service4-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">Infrastructure Modernization</h4>
                            <p class="card-description">Modernize infrastructure with advanced technologies, improving agility, efficiency, and performance across your operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service5-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">UPS & Power Solutions</h4>
                            <p class="card-description">Protect your systems and data with robust cybersecurity solutions designed to prevent and detect threats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card">
                        <img src="img/service6-img.jpg" class="card-img-top" alt="Cloud Solution Image">
                        <div class="card-body text-center">
                            <h4 class="card-title">Integration & Deployment</h4>
                            <p class="card-description">Seamlessly integrate and deploy IT solutions, ensuring smooth transitions and optimized system performance for businesses.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="testimonials-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="test-heading-box">
                        <h5>What Our Clients Say About Us</h5>
                        <h3>Discover why businesses trust us for innovative IT solutions</h3>
                        <p>
                            Our clients consistently rave about our ability to deliver cutting-edge, reliable IT solutions
                            tailored to their unique needs.
                        </p>
                    </div>

                    <div class="testimonials owl-carousel owl-theme">
                        <div class="item test-wrap">
                            <div class="test-name-box">
                                <div class="test-img-box">
                                    <img src="img/client.png" class="img-fluid">
                                </div>
                                <div class="name-txt-box">
                                    <h6>Ramesh Chauhan<br><span>Happy Client</span></h6>
                                </div>
                            </div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <div class="testi-box aticle-box">
                                <p>“AK IT Lab transformed our business with their innovative solutions, improving efficiency and security. Highly recommended.”
                                </p>
                            </div>
                        </div>
                        <div class="item test-wrap">
                            <div class="test-name-box">
                                <div class="test-img-box">
                                    <img src="img/client-2.png" class="img-fluid">
                                </div>
                                <div class="name-txt-box">
                                    <h6>Kiran Sharma<br><span>Happy Client</span></h6>
                                </div>
                            </div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <div class="testi-box aticle-box">
                                <p>“Working with AK IT Lab was a game-changer. Their expertise in IT solutions boosted our productivity and streamlined operations.”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
