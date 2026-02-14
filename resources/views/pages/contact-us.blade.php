@extends('layouts.main')
@section('content')

@section('title', 'AK IT Lab - Quality Tech Products with Free Shipping')

@section('description', 'Shop for top tech products at AK IT Lab, your trusted destination for electronics, accessories, and more in Rwanda. Enjoy free shipping on orders over RWF 1000!')

@section('keywords', '')


<div class="main-wrapper">

    <div class="contact-banner-box section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-sm-12 mb-4">
                    <div class="section-title text-center">
                        <h5>Get in Touch with Us</h5>
                        <h3>We’re Here to Help You Achieve Your IT Goals</h3>
                        <p>
                            At AK IT Lab, we’re committed to providing the support and solutions you need to drive your business forward. Whether you have a question, need assistance, or want to explore how our IT services can transform your operations, our team is here to help.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cont3-box mb-4">
                        <div class="cont3-icon-box">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="cont3-txt-box">
                            <h4>Call Us</h4>
                            <p>+250 739 171 865</p>
                        </div>
                    </div>
                    <div class="cont3-box mb-4">
                        <div class="cont3-icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="cont3-txt-box">
                            <h4>Email Us</h4>
                            <p>info@akitlab.com</p>
                        </div>
                    </div>
                    <div class="cont3-box mb-4">
                        <div class="cont3-icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="cont3-txt-box">
                            <h4>Visit Us</h4>
                            <p>Shop #1, Ground Floor Le che apparts Building Nyarugenge District, Kigali, Rwanda</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="contact3-form-wrap">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form class="contact-form" action="mail/mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mrb-small contact-form__group">
                                                <label class="contact-form__label" for="inputName">First Name</label>
                                                <input type="text" class="form-control contact-form__input"
                                                    id="inputName" name="name" placeholder="Enter your first name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mrb-small contact-form__group">
                                                <label class="contact-form__label" for="inputMail">Last Name</label>
                                                <input type="text" class="form-control contact-form__input"
                                                    id="inputMail" name="email" placeholder="Enter your last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mrb-small contact-form__group">
                                                <label class="contact-form__label" for="inputPhone">Mobile Number</label>
                                                <input type="text" class="form-control contact-form__input"
                                                    id="inputPhone" name="phone" placeholder="Enter your mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mrb-small contact-form__group">
                                                <label class="contact-form__label" for="inputPhone">Email Id</label>
                                                <input type="email" class="form-control contact-form__input"
                                                    id="inputPhone" name="phone" placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mrb-small contact-form__group">
                                        <label class="contact-form__label" for="inputMsg">Your Message</label>
                                        <textarea class="form-control contact-form__textarea" id="inputMsg" name="message" placeholder="Write your message"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="contact-form__button">
                                        <button type="submit" class="read-more-btn" name="contact_submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255203.5538356047!2d29.962085253194488!3d-1.9297625886231888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca4258ed8e797%3A0xf32b36a5411d0bc8!2sKigali%2C%20Rwanda!5e0!3m2!1sen!2sin!4v1771070143495!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>

@endsection