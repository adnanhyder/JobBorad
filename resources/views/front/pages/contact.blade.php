@extends('front.layouts.other_layout')
@section('content')

<section class="main">

    <!-- Start home -->
    <section class="bg-contact-us page-next-level" style="background: url('../images/front_img/contact-us.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Contact Us</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Contact Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- MAP START -->
    <section class="section pt-0 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-earth"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Website</h4>
                            <p class="mb-0 text-muted">helpyea.com</p>
                            <p class="mb-0 text-muted">blog.helpyea.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-cellphone-iphone"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Call us</h4>
                            <p class="mb-0 text-muted">123 456 7890</p>
                            <p class="mb-0 text-muted">123 456 7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-email"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Email</h4>
                            <p class="mb-0 text-muted">info@helpyea.com</p>
                            <p class="mb-0 text-muted">maidathemes@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- CONTACT FORM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-0">Get In Touch :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7 mt-4 pt-2">
                    <div class="custom-form rounded border p-4">
                        <div id="message"></div>
                        <form method="post" action="https://Maidathemes.in/Joba/php/contact.php" name="contact-form"
                              id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Name</label>
                                        <input name="name" id="name2" type="text" class="form-control resume"
                                               placeholder="Enter Name..">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email address</label>
                                        <input name="email" id="email1" type="email" class="form-control resume"
                                               placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Subject</label>
                                        <input type="text" class="form-control resume" id="subject" placeholder="Subject..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Message</label>
                                        <textarea name="comments" id="comments" rows="5" class="form-control resume"
                                                  placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                           value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 pt-2">
                    <div class="border rounded text-center p-4">
                        <h5 class="text-dark pb-3">Contact Info</h5>
                        <div class="  mt-5 p-4">
                            <div class="contact-location-icon bg-white text-primary rounded-pill">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <p class="text-muted pt-4 f-20 mb-0">2453 Clinton StreetLittle Rock, AR 72211</p>

                        <h5 class="text-dark pt-4 f-20 mb-0">Follow Us</h5>
                        <ul class="list-unstyled social-icon mt-3 mb-0">
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->

    <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Subscribe To Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :"
                                       required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->


</section>

@endsection







