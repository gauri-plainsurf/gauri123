<section class="contact py-5">
    <div class="container py-sm-3">
        <h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us - <span>Get In Touch</span> </h3>
        <div class="address row">
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Address</h6>
                        <p> 2466H 5th Street Parking, King Block, New York City.

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Email</h6>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                        <p>+1 234 567 8901</p>
                        <p>+1 234 567 8901</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form row py-5">
            <div class="col-lg-6 contact-form">
                <form action="process.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="fields-grid col-lg-6">
                            <div class="styled-input agile-styled-input-top">

                                <input type="text" name="first_name" required=""> 
                                <label>First Name</label>
                                <span></span>
                            </div> 
                            <div class="styled-input">
                                <input type="email" name="email_id" required="">
                                <label>Email Address</label>
                                <span></span>
                            </div>

                        </div>
                        <div class="fields-grid col-lg-6">
                            <div class="styled-input agile-styled-input-top">

                                <input type="text" name="last_name" required=""> 
                                <label>last Name</label>
                                <span></span>
                            </div> 
                            <div class="styled-input">
                                <input type="tel" name="phone_no" required="">
                                <label>phone number</label>
                                <span></span>
                            </div>


                        </div>

                    </div>

                    <div class="styled-input mt-5">

                        <input type="text" name="description" required=""><label>Description</label>
                        <span></span>
                    </div>
                    <input type="radio" name="opt" value="friends">friends &nbsp;
                    <input type="radio" name="opt" value="social">social &nbsp;
                    <input type="radio" name="opt" value="others">others<br>&nbsp;
                    
                   <input type="file" name="myfile" id="myfile" class="form-control" onchange="preview_image(event)" accept="image/*" id="fileToUpload">
                    

                    <img id="output_image"/>
                    <input type="submit" name="submit" value="upload and submit">
                        </form>


                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="bg-img">
                            <div class="contact-layer">
                                <h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
                                <p><i class="fas mr-2 fa-phone"></i> +12 327 8976 2334</p>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
                        style="border:0"></iframe>
            </div>
        </div>
</section>
<script type="text/javascript">      
  function previewImage(input) {
    var preview = document.getElementById('preview');
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        preview.setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    } else {
      preview.setAttribute('src', '$fileName');
    }
  }
</script>
