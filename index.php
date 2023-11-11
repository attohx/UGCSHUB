<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCIT Home Page</title>
    <!--css file-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    @include "include/navbar.php";
?> 

<section class="bannerbg">
    <div class="overlay-bg>
        <div class="video-box"></div>
    </div>
</section>

<section class="sect-gap">
    <div class="events-area" >
        <div class="events-area-container" >
            <div class="events-image" ></div>
            <div class="events-menu-content">
                <div class = "title">
                    <h1>Departmental Events</h1>
                    <p>Programmes, Seminars, and events organised by the department</p>
                    <a href="events.php">
                        <b>View Upcoming and Ongoing Events</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sect-gap">
    <div class="container">
        <div class="popular-courses-section-align">
            <div class="popular-courses-menu-content">
                <div class="title">
                    <h1>Short Courses we offer</h1>
                    <p>Our eight week intensive certificate course is open to senior high school graduates, tertiary students, school graduates, workers and the general public.</p>
                    <h6>Evening and weekend session only</h6>
                </div>
            </div>
        </div>

    </div>
</section>
</body>

</html>