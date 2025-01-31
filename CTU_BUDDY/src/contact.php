<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <style>
        /* Basic styles for the navigation bar */
        .navbar {
            overflow: hidden;
            background-color: #333;
            padding: 14px 20px;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Clearfix after navbar links */
        .navbar::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Style for error messages */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Highlight inputs with errors */
        .input.error {
            border-color: red;
        }

        /* Style for success messages */
        .success-message {
            color: green;
            font-size: 14px;
            margin-top: 15px;
        }

        /* Additional style for the map container */
        .map-box {
            width: 100%;
            height: 400px; /* Adjust height as needed */
            position: relative; /* Ensure the map container is positioned correctly */
        }
    </style>

    <!-- Include TomTom Maps SDK -->
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.22.0/maps/maps-web.min.js"></script>
    <link rel="stylesheet" href="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.22.0/maps/maps.css">
</head>
<body>
    
    <div class="navbar">
        <a href="home.html">Home</a>
        <a href="contact.html">Contact Us</a>
        <a href="about.html">About Us</a>
        <a href="timetable.html">Timetable</a> 
        <a href="discussions.html">Discussions</a>
        <a href="share_resources.html">Share Resources</a>
    </div>

    <div class="contact_us_6">
        <div class="responsive-container-block container">
            <form class="form-box">
                <div class="container-block form-wrapper">
                    <div class="mob-text">
                        <p class="text-blk contactus-head">
                            Get in Touch
                        </p>
                        <p class="text-blk contactus-subhead">
                            <!-- Optional subheading can go here -->
                        </p>
                    </div>
                    <div class="responsive-container-block" id="i2cbk">
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                            <p class="text-blk input-title">FIRST NAME</p>
                            <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                            <p class="text-blk input-title">EMAIL</p>
                            <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                            <p class="text-blk input-title">PHONE NUMBER</p>
                            <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                            <p class="text-blk input-title">WHAT DO YOU HAVE IN MIND?</p>
                            <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
                        </div>
                    </div>
                    <button class="submit-btn" type="submit" id="w-c-s-bgc_p-1-dm-id-2">Submit</button>
                </div>
            </form>
            <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                <div class="map-part">
                    <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">Reach us at</p>
                    <ul>
                        <li>Ross Solomons - Manager (082 328 4084)</li> 
                        <li>Zaid Moses - Chief Developer (084 830 2929)</li>
                        <li>Luvuyo Vumani - Chief Developer (078 873 0376)</li>
                        <li>Mercholm Goliath - Chief Designer (078 020 1476)</li> 
                    </ul>
                    <div class="social-media-links mob">
                        <a class="social-icon-link" href="#" id="ix94i-2-2">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                        </a>
                        <a class="social-icon-link" href="#" id="itixd">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                        </a>
                        <a class="social-icon-link" href="#" id="izxvt">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                        </a>
                        <a class="social-icon-link" href="#" id="izldf-2-2">
                            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
                        </a>
                    </div>
                    <!-- Map container for TomTom -->
                    <div id="map" class="map-box"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector('.form-box');
            const firstName = document.getElementById("ijowk-3");
            const email = document.getElementById("ipmgh-3");
            const phone = document.getElementById("imgis-3");
            const query = document.getElementById("i5vyy-3");

            // Initialize the TomTom Map
            tt.setProductInfo('CTU_BUDDY', '1.0'); 
            const map = tt.map({
                key: 'z7Px0hmoymQ349fnKJaFZh3zuRAYPmkl', // Replace with your actual TomTom API key
                container: 'map', // The ID of the map container
                center: [18.8555, -33.9321], // Longitude and Latitude of Stellenbosch
                zoom: 14
            });

            // Add a marker to the map at Stellenbosch
            new tt.Marker()
                .setLngLat([18.8555, -33.9321]) // Longitude and Latitude of Stellenbosch
                .addTo(map);

            // Form submission and validation script
            form.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Validate the form inputs
                if (validateForm()) {
                    clearInputs();
                    displaySuccessMessage("Thank you! Your submission has been received.");
                }
            });

            function validateForm() {
                let isValid = true;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email regex pattern

                // Check if the first name is empty
                if (firstName.value.trim() === "") {
                    displayError(firstName, "First Name cannot be empty.");
                    isValid = false;
                } else {
                    clearError(firstName);
                }

                // Check if the email is empty or invalid
                if (email.value.trim() === "" || !emailPattern.test(email.value.trim())) {
                    displayError(email, "Please enter a valid email.");
                    isValid = false;
                } else {
                    clearError(email);
                }

                // Check if the phone number is empty
                if (phone.value.trim() === "") {
                    displayError(phone, "Phone Number cannot be empty.");
                    isValid = false;
                } else {
                    clearError(phone);
                }

                // Check if the query is empty
                if (query.value.trim() === "") {
                    displayError(query, "Query cannot be empty.");
                    isValid = false;
                } else {
                    clearError(query);
                }

                return isValid;
            }

            function displayError(input, message) {
                input.classList.add("error");
                let errorElement = input.nextElementSibling; // Assuming the error message is placed right after the input
                if (!errorElement || !errorElement.classList.contains("error-message")) {
                    errorElement = document.createElement("p");
                    errorElement.classList.add("error-message");
                    input.parentNode.insertBefore(errorElement, input.nextSibling);
                }
                errorElement.textContent = message;
            }

            function clearError(input) {
                input.classList.remove("error");
                const errorElement = input.nextElementSibling;
                if (errorElement && errorElement.classList.contains("error-message")) {
                    errorElement.textContent = "";
                }
            }

            function clearInputs() {
                firstName.value = "";
                email.value = "";
                phone.value = "";
                query.value = "";
            }

            function displaySuccessMessage(message) {
                const successMessage = document.createElement("p");
                successMessage.classList.add("success-message");
                successMessage.textContent = message;
                form.appendChild(successMessage);

                // Automatically remove the success message after a few seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }
        });
    </script>

</body>
</html>
