<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- START CONTACT HEADING -->
                <div class="heading">
                    <h1 class="wow fadeInLeftBig" align="left">Contact Us</h1>
                    <p align="left">If you have any query about our service or product, just drop your questions
                        here without any hesitation. We will respond shortly.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- BEGAIN CONTACT CONTENT -->
            <div class="contact_content">
                <!-- BEGAIN CONTACT FORM -->
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="contact_form">

                        <!-- FOR CONTACT FORM MESSAGE -->
                        <div id="form-messages"></div>

                        <form name="myform" action="javascript:sendmail()" method="post">
                            <input class="form-control" id="Name" type="text" placeholder="Name">
                            <input class="form-control" id="Sender" type="email" placeholder="Email">
                            <input class="form-control" id="Subject" type="text" placeholder="Subject">
                            <textarea class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <input class="submit_btn" type="submit" value="Send">
                        </form>
                    </div>



                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://smtpjs.com/v3/smtp.js"></script>
                    <script>
                        function sendmail() {

                            if (document.getElementById('Name').value == "") {
                                alert('Name Required');
                                return false;
                            } else {
                                var name = $('#Name').val();
                            }

                            if (document.getElementById('Sender').value == "") {
                                alert('Your Email Required');
                                return false;
                            } else {
                                var email = $('#Sender').val();
                            }

                            if (document.getElementById('Subject').value == "") {
                                alert('Enter Subject');
                                return false;
                            } else {
                                var subject = $('#Subject').val();
                            }

                            if (document.getElementById('Message').value == "") {
                                alert('Enter your query');
                                return false;
                            } else {
                                var message = $('#Message').val();
                            }


                            // var body = $('#body').val();

                            var Body = 'Name: ' + name + '<br>Email: ' + email + '<br>Subject: ' + subject + '<br>Message: ' + message;
                            //console.log(name, phone, email, message);

                            Email.send({
                                SecureToken: "bb2c65d6-5987-4835-9d83-e638f7af0dc2",
                                Host: "smtp.gmail.com",
                                Username: "info.fivedtech@gmail.com",
                                Password: "flsjgazgbpegpvna",
                                To: 'tanzimulislam799@gmail.com',
                                From: "iamtanzim36@gmail.com",
                                Subject: "New message on contact from " + name,
                                Body: Body
                            }).then(
                                message => {
                                    //console.log (message);
                                    if (message == 'OK') {
                                        alert('Your mail has been sent successfully.');
                                    } else {
                                        console.error(message);
                                        alert('There is error at sending message. ')

                                    }

                                }
                            );
                        }
                    </script>

                </div>
                <!-- BEGAIN CONTACT MAP -->
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="contact_map">
                        <!-- BEGAIN GOOGLE MAP -->
                        <div id="map_canvas">

                            <p><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1532.3806073926328!2d89.25676027478599!3d24.00863316150034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe8563ff427c61%3A0x188cbcd93cd5cb24!2z4Kas4Ka-4KaH4Kaq4Ka-4Ka4IOCmn-CmvuCmsOCnjeCmruCmv-CmqOCmvuCmsg!5e0!3m2!1sen!2sbd!4v1618361790236!5m2!1sen!2sbd"
                                    width="650" height="404" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contactFeature">
    <!-- SKILLS COUNTER OVERLAY -->
    <div class="slider_overlay"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="container">
                <div class="contact_feature">
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-phone"></i>
                            <h4>Call Us</h4>
                            <p>+8801924623393</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Email Address</h4>
                            <p>info.fivedtech@gmail.com</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-map-marker"></i>
                            <h4>Office Location</h4>
                            <p>Dhaka & Pabna, Bangladesh</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-clock-o"></i>
                            <h4>Working Hours</h4>
                            <p>Saturday to Sunday 24x7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
