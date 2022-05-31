<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif
        }

    </style>
</head>
<body>
<?php include "pages/components/header.php"?>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Los Angeles</h3>
            <p><b>We had the best time playing at Venice Beach!</b></p>
        </div>
    </div>

    <!-- The Tour Section -->
    <div class="w3-black" id="tour">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">Hello</h2>
            <p class="w3-opacity w3-center"><i>Our content!</i></p><br>

            <ul class="w3-ul w3-border w3-white w3-text-grey">
                <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
            </ul>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-third w3-margin-bottom">
                    <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="New York"
                         style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>New York</b></p>
                        <p class="w3-opacity">Fri 27 Nov 2016</p>
                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="Paris"
                         style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Paris</b></p>
                        <p class="w3-opacity">Sat 28 Nov 2016</p>
                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="San Francisco"
                         style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>San Francisco</b></p>
                        <p class="w3-opacity">Sun 29 Nov 2016</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('ticketModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
                <input class="w3-input w3-border" type="text" placeholder="How many?">
                <p><label><i class="fa fa-user"></i> Send To</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Enter email">
                <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i
                            class="fa fa-check"></i></button>
                <button class="w3-button w3-red w3-section"
                        onclick="document.getElementById('ticketModal').style.display='none'">Close <i
                            class="fa fa-remove"></i></button>
                <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
            </div>
        </div>
    </div>
    <?php include "pages/components/footer.php"?>
<script>

</script>

</body>
</html>
