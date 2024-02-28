<!-- ---------NAVBAR------------ -->

<div class="nav-container img-z-index">

    <div class=" top-navbar">

        <div class="container">

            <div class="row">

                <div class="col-md-12 d-flex align-items-center">

                    <div class="btn btn-sm navbar-btn mx-1"><i class="fas fa-phone"></i> <a href="tel:+1 213 318 4345" class="text-white text-decoration-none">+1
                            213 318 4345</a></div>

                    <div class="btn btn-sm navbar-btn mx-1"> <i class="fas fa-envelope"></i> <a href="#" class="text-white text-decoration-none">info@domain.com</a> </div>

                </div>
            </div>

        </div>

    </div>
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">

        <div class="container">

            <a id="logo" href="<?= base_url() ?>">

                <img src="<?= asset_url() ?>images/ast-marketing-logo-1.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav ms-auto ">

                    <li class="nav-item">

                        <a class="nav-link" href="<?= base_url() ?>">Home</a>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>

                        <ul class="dropdown-menu mt-1" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="<?= base_url('web-design-development') ?>">Web Design &
                                    Development</a>
                            </li>

                            <li><a class="dropdown-item" href="<?= base_url('seo-services') ?>">SEO Services</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('social-media-marketing') ?>">Social Media
                                    Marketing</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('ppc-services') ?>"> PPC Services</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('graphic-design') ?>"> Graphics Desgin</a>
                            </li>

                            <li><a class="dropdown-item" href="<?= base_url('app-development') ?>">Application Design &
                                    Development</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('logo-design') ?>">Logo Design</a></li>

                        </ul>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link  active" aria-current="page" href="<?= base_url('about-us') ?>">About Us</a>

                    </li>
                    <!-- <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('contact-us') ?>">Contact</a>

                </li> -->


                    <!-- <li class="nav-item">

      <a class="btn btn-custom btn-light-blue btn-shadow" href="login.html"><i
          class="fas fa-user mx-2"></i>Login</a>

    </li> -->

                    <div class="btn-out-wrapper">
                        <li class="nav-item">

                            <a class="btn btn-primary btn-custom bg-whatsapp" href="https://wa.me/+447546546381" target="_blank">

                                <i class="fab fa-whatsapp whatsapp-icon"></i>WhatsApp</a>

                        </li>

                        <li class="nav-item">

                            <a class="btn btn-primary btn-custom bg-pink" href="<?= base_url('contact-us') ?>">Contact</a>

                        </li>

                    </div>


                </ul>

            </div>

        </div>

    </nav>

</div>
<!-- ----------------Navbar-------------- -->

<div id="sticky-icons">
    <div class="social-icon whatsapp">
        <img src="<?= asset_url() ?>images/icon-whatsapp-3.png" alt="WhatsApp" id="whatsapp-icon">
        <div class="phone-slider">
            <a href="https://wa.me/+447546546381" target="_blank" class="phone">+44 7546 54 6381</a>
        </div>
    </div>
    <!-- <div class="social-icon phone">
        <img src="<?= asset_url() ?>images/icon-us.png" alt="Phone 1" id="phone-icon-1">
        <div class="phone-slider">
            <a href="tel:+12133184345" class="phone">+1 213 318 4345</a>
        </div>
    </div> -->
    <div class="social-icon phone">
        <img src="<?= asset_url() ?>images/icon-uk.png" alt="Phone 2" id="phone-icon-2">
        <div class="phone-slider">
            <a href="tel:+441892710953" class="phone">+44 1892 71 0953</a>
        </div>
    </div>
    <!-- <div class="social-icon phone">
        <img src="<?= asset_url() ?>images/icon-australia.png" alt="Phone 3" id="phone-icon-3">
        <div class="phone-slider">
            <a href="tel:+61280113862" class="phone">+61 2 8011 3862</a>
        </div>
    </div> -->
</div>
<?php
$is_logged_in = $this->session->userdata('user_id');
if (!$is_logged_in) {
?>
    <div id="overlay"></div>

    <!-- Popup HTML structure -->
    <div style="display: none;" id="popup">
        <span id="close-btn" onclick="closePopup()">&times;</span>
        <h4>Kindly complete the form to access detailed information about our services.</h4>
        <p><?php echo validation_errors(); ?></p>
        <form action="<?= base_url('login') ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address:</label>
                <input type="email" name="email" class="form-control" id="email" required>
                <input type="hidden" name="country_code" class="form-control" id="country_code" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number:</label>
                <input type="text" onkeypress="if(this.value.length==10) return false;" name="phone" class="form-control phone_number" id="phone" required>
            </div>
            <button type="submit" class="btn btn-custom bg-pink">Submit</button>
        </form>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $('.social-icon').click(function() {
            // Close all phone sliders
            $('.phone-slider').css('left', '-200px');

            // Open the phone slider associated with the clicked icon
            $(this).find('.phone-slider').css('left', '60px');
        });

        $(document).click(function(event) {
            // Close all phone sliders when clicking outside
            if (!$(event.target).closest('.phone-slider, .social-icon').length) {
                $('.phone-slider').css('left', '-350px');
            }
        });
    });

</script>
<script>
    // Initialize the phone input
    var input = document.querySelector(".phone_number");
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
    });

    // Add an event listener for the country change event
    iti.promise.then(function() {
        input.addEventListener("countrychange", function() {
            var countryCode = iti.getSelectedCountryData().dialCode;
            // console.log("Updated Country Code: +" + countryCode);
            $("#country_code").val(countryCode);
            // alert(countryCode);
        });
    });
</script>

<!-- -----------------popup------------------- -->

<script>
    // Function to show the overlay and popup
    function showPopup() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        var emailValue = document.getElementById('email').value;
        var phoneValue = document.getElementById('phone').value;

        if (emailValue !== '' && phoneValue !== '') {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        } else {
            alert('Please fill in both email and phone number before closing the popup.');
        }
    }


    function submitForm(event) {
        event.preventDefault();

    }

    // Show the popup initially
    // showPopup();

    // Set interval to show the popup every 35 seconds
    // setInterval(showPopup, 20000); 
    // 20000 milliseconds = 20 seconds
</script>