<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $meta_title ?></title>
    <link rel="icon" href="<?= asset_url() ?>images/faviconaw.png" type="image/png" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <link rel="stylesheet" href="<?= asset_url() ?>css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>


    <meta NAME="robots" CONTENT="noindex">
    <meta NAME="robots" CONTENT="nofollow">
    <meta NAME="robots" CONTENT="noindex,nofollow">
    <meta name="title" content="<?= isset($meta_title) ? $meta_title : '' ?>">
    <meta name="description" content="<?= isset($meta_title) ? $meta_descrption : '' ?>">
    <link rel="canonical" href="<?= $canonical_tag ?>" />
    <script src="https://unpkg.com/scrollreveal"></script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MBVW38WQ');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for https://marketing.allstartechnologies.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3792428,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Event snippet for Submit Lead form Conversion conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11435636009/6SEWCLnsh4oZEKnq98wq'});
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11435636009"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11435636009');
</script>
<!-- Event snippet for Whatsapp Button Clicks conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11435636009/yMw4CNTykYoZEKnq98wq'});
</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBVW38WQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php $this->load->view('frontend/header'); ?>



    <?php echo $content; ?>



    <?php $this->load->view('frontend/footer'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <!-- <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script> -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="<?= asset_url() ?>js/custom.js"></script>
    <!-- iti -->
    <script>
        var base_url = '<?= base_url() ?>';
        var asset_url = '<?= asset_url() ?>';
        var inputtel = document.querySelectorAll('input[type="tel"]');
        var geo = function(callback) {

            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {

                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);

            });
        }

        inputtel.forEach(function(input) {
            window.intlTelInput(input, {

                allowExtensions: false,

                autoFormat: false,

                autoHideDialCode: false,

                autoPlaceholder: false,

                separateDialCode: true,



                initialCountry: "auto",

                geoIpLookup: geo,


                ipinfoToken: "yolo",

                nationalMode: false,

                //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],

                //preferredCountries: ['cn', 'jp'],

                preventInvalidNumbers: true,

                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js" // just for formatting/placeholders etc

            });
        })
    </script>

    <!-- Form Validation Scripts -->
    <script>
        function validateForm(event, form, id) {
            event.preventDefault();
            var inputs = form.querySelectorAll('input');
            var selects = form.querySelectorAll('select');
            var user_phone = form.querySelector('input[name="user_phone"]');
            var dialcode = form.querySelector('.iti__selected-dial-code').textContent
            var isValid = true;
            selects.forEach(function(select) {
                if (select.value == 'Other') {
                    var other_services = form.querySelector('input[name="other_services"]');
                    if (other_services.value.trim() === '') {
                        other_services.classList.add('error');
                        isValid = false;
                        field_name = formatFieldName(input.name)
                    }
                }
            })
            inputs.forEach(function(input) {
                if (input.value.trim() === '') {
                    if (input.name == 'user_name' || input.name == 'first_name' || input.name == 'last_name' || input.name == 'user_phone' || input.name == 'user_email') {
                        input.classList.add('error');
                        isValid = false;
                        field_name = formatFieldName(input.name)
                        // removeErrorComponent(input);
                        // createErrorComponent(input, '' + field_name + ' required.', '');
                    }
                } else {
                    if (input.name == 'user_phone') {
                        if (!phoneValidations(input, input.name, input.value.trim())) {
                            isValid = false;
                        }
                    } else {
                        input.classList.remove('error');
                    }
                    if (input.name == 'user_email') {
                        if (!emailValidations(input, input.name, input.value.trim(), '1')) {
                            isValid = false;
                        }
                    }
                }
            });
            if (isValid) {
                user_phone.value = dialcode + '' + user_phone.value
                form.submit();
            }
        }

        function attachOnChangeToInputs() {
            // Get all the input elements on the page
            var inputs = document.getElementsByTagName('input');

            // Iterate over each input field
            for (var i = 0; i < inputs.length; i++) {
                // Attach the onchange event handler to the current input field
                inputs[i].addEventListener('change', handleInputChange);
                inputs[i].addEventListener('input', handleInputInput);
            }
        }
        attachOnChangeToInputs();

        function handleInputInput(event) {
            var input = event.target;
            var value = input.value;
            var name = input.getAttribute('name');

            // Remove any non-numeric characters

            if (name === 'user_phone') {
                var numericValue = value.replace(/\D/g, '');

                if (numericValue.length > 14) {
                    numericValue = numericValue.slice(0, 14);
                }
                input.value = numericValue;
            }

        }

        function handleInputChange(event) {
            var input = event.target;
            var value = input.value;
            var name = input.getAttribute('name');
            var form = input.closest('form');
            generateEngagements(form)
        }

        function generateEngagements(form) {
            var user_phone = form.querySelector('input[name="user_phone"]');
            var dialcode = form.querySelector('.iti__selected-dial-code').textContent
            var formdata = new FormData();
            url = base_url + 'LeadsController/generateLeads';
            var fields = {
                'lead_id': form.querySelector('input[name="lead_id"]').value,
                'user_phone': dialcode + user_phone.value,
                'user_email': form.querySelector('input[name="user_email"]').value,
                'type_of_service': form.querySelector('select[name="type_of_service"]').value,
                'other_services': form.querySelector('input[name="other_services"]').value,
                'user_name': form.querySelector('input[name="user_name"]').value,
                'comments_by_client': form.querySelector('textarea[name="comments_by_client"]').value,
                'response_type': 'json',
            }
            Object.entries(fields).forEach(([key, value]) => {
                formdata.append(key, value);
            });
            if (user_phone.value.trim() !== '') {
                $.ajax({
                    url: url,
                    type: 'POST',
                    processData: false,
                    data: formdata,
                    contentType: false,
                    dataType: 'json',
                    cache: false,
                    async: true,
                    success: function(data) {
                        // Handle successful response
                        form.querySelector('input[name="lead_id"]').value = data.lead_id;
                        console.log('Lead Generated successfully:', data);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error('There was a problem submitting the data:', error);
                    }
                });
            }
        }
        $('.selectservices').on('change', function() {
            let otherservices = $(this).closest('form').find('.otherservices')
            if (this.value == 'Other') {
                otherservices.show();
            } else {
                otherservices.hide();
            }
        });
    </script>
    <!-- End Form Validation Script -->


    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
    <script>
        let animationContainers = document.querySelectorAll('.lottie-container');
        let animationfilePath = "<?= asset_url() ?>animations/"
        animationContainers.forEach((container) => {
            let animationName = container.getAttribute('data-animation');
            let animationPath = animationfilePath + animationName + ".json";
            const animationData = {
                container: container,
                renderer: "svg",
                loop: true,
                autoplay: true,
                path: animationPath,
            };
            lottie.loadAnimation(animationData);
        });
    </script>

    <!-- // -----Testimonial Carousal------ -->
    <script>
        $(document).ready(function() {
            $('.customer-reviews').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,

                    }
                }]
            });
        });
    </script>
    <!-- trusted customer slider -->
    <script>
        $(document).ready(function() {
            $('.logo-design').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,

                    }
                }]
            });
        });
    </script>
    <!-- ------service page slider------- -->
    <script>
        $(document).ready(function() {
            $('.web-design').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,

                    }
                }]
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.other-services').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,

                    }
                }]
            });
        });
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var ourProcessSection = document.querySelector('.sec-our-process');
            var ourProcessOffset = ourProcessSection.offsetTop;
            console.log(ourProcessOffset)
            var elementsToShowHide = document.querySelector('.work-process');
            if (scrollPosition >= ourProcessOffset - 200) {
                elementsToShowHide.classList.remove('hide-mobile');

            } else {
                elementsToShowHide.classList.remove('hide-mobile');
                elementsToShowHide.classList.add('hide-mobile');


            }
        });
    </script>


</body>

</html>