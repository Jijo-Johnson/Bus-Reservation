<?php
include 'db.php';
$bus_id = $_GET['bus_id'];
$schedule_id = $_GET['schedule_id'];
$booked = "SELECT * FROM booking WHERE schedule_id = '$schedule_id' /*AND user_id = */";
$booked_query = mysqli_query($conn, $booked);
$booked_result = mysqli_fetch_assoc($booked_query);
$booked_result = $booked_result['seat_no'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bus Reservation | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //google fonts -->

    <style>
        #holder {
            height: 244px;
            width: 428px;
            background-color: #F5F5F5;
            border: 1px solid #A4A4A4;
            margin-left: 10px;
            padding: 19px;
            margin-bottom: 50px;
            margin: auto;
        }

        #place {
            position: relative;
            margin: 7px;
        }

        #place a {
            font-size: 0.6em;
        }

        #place li {
            list-style: none outside none;
            position: absolute;
        }

        #place li:hover {
            background-color: yellow;
        }

        #place .seat {
            background: url("images/available_seat_img.gif") no-repeat scroll 0 0 transparent;
            height: 33px;
            width: 33px;
            display: block;
        }

        #place .selectedSeat {
            background-image: url("images/booked_seat_img.gif");
        }

        #place .selectingSeat {
            background-image: url("images/selected_seat_img.gif");
        }

        #place .row-3,
        #place .row-4 {
            margin-top: 10px;
        }

        #seatDescription li {
            vertical-align: middle;
            list-style: none outside none;
            padding-left: 35px;
            height: 35px;
            float: left;
        }
    </style>

</head>

<body>
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container-fluid">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo" style="width: 7%;">
                    <h1> <a href="index.html"><img src="images/logo.png"></a></h1>
                </div>

                <!-- div class="forms mt-md-0 mt-2">
				<a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
				<a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Create Account</a>
			</div> -->
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li class="mr-lg-4 mr-2"><a href="#">Home</a></li>
                    <li class="mr-lg-4 mr-2 active"><a href="user_search.php">Search Bus</a></li>
                    <li class="mr-lg-4 mr-2"><a href="user_add_feed.php">Add Feedback</a></li>
                    <li class="mr-lg-4 mr-2"><a href="user_viewrec.php">View Tickets</a></li>
                    <li class="mr-lg-4 mr-2"><a href="user_pass.php">Change Password</a></li>
                    <li class=""><a href="common.php">Logout</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->

    <section class="admin-outer">
        <div class="breadcrumb-agile">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Seats</li>
                </ol>
            </div>
        </div>
        <section class="inner-banner text-center">
            <div class="container">
                <h3 class="text-center">View Seats</h3>

                <div id="holder">
                    <ul id="place">
                    </ul>
                </div>
                <div style="display:inline-block; padding:50px 0; margin:auto;">
                    <ul id="seatDescription">
                        <li style="background:url('images/available_seat_img.gif') no-repeat scroll 0 0 transparent;">Available Seat</li>
                        <li style="background:url('images/booked_seat_img.gif') no-repeat scroll 0 0 transparent;">Booked Seat</li>
                        <li style="background:url('images/selected_seat_img.gif') no-repeat scroll 0 0 transparent;">Selected Seat</li>
                    </ul>
                </div>
                <div style="clear:both;width:100%; text-align:center">
                    <input type="button" id="btnShowNew" value="Show Selected Seats" />
                    <input type="button" id="btnShow" value="Show All" />
                </div>
            </div>
        </section>

    </section>
    <!-- copyright -->
    <section class="copy-right py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="">© 2020 Bus Reservation. All rights reserved | Design by Bus Reservation System
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- copyright -->

    <!-- move top icon -->
    <a href="#home" class="move-top text-center"></a>
    <!-- //move top icon -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        var settings = {
            rows: 5,
            cols: 10,
            rowCssPrefix: 'row-',
            colCssPrefix: 'col-',
            seatWidth: 35,
            seatHeight: 35,
            seatCss: 'seat',
            selectedSeatCss: 'selectedSeat',
            selectingSeatCss: 'selectingSeat'
        };


        var init = function(reservedSeat) {
            var str = [],
                seatNo, className;
            for (i = 0; i < settings.rows; i++) {
                for (j = 0; j < settings.cols; j++) {
                    seatNo = (i + j * settings.rows + 1);
                    className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                    if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                        className += ' ' + settings.selectedSeatCss;
                    }
                    str.push('<li class="' + className + '"' +
                        'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                        '<a title="' + seatNo + '">' + seatNo + '</a>' +
                        '</li>');
                }
            }
            $('#place').html(str.join(''));
        };
        //case I: Show from starting
        //init();

        //Case II: If already booked
        // var bookedSeats = [5, 10, 25, 1, 2, 3];
        var bookedSeats = [<?php echo $booked_result; ?>];
        init(bookedSeats);



        $('.' + settings.seatCss).click(function() {
            if ($(this).hasClass(settings.selectedSeatCss)) {
                alert('This seat is already reserved');
            } else {
                $(this).toggleClass(settings.selectingSeatCss);
            }
        });

        $('#btnShow').click(function() {
            var str = [];
            $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.' + settings.selectingSeatCss + ' a'), function(index, value) {
                str.push($(this).attr('title'));
            });
            alert(str.join(','));
        })

        $('#btnShowNew').click(function() {
            var str = [],
                item;
            $.each($('#place li.' + settings.selectingSeatCss + ' a'), function(index, value) {
                item = $(this).attr('title');
                str.push(item);
            });
            var seats = str.join(',');
            if(seats == '')
            {
                alert('Select a Seat');
            }
            else
            {
                $.ajax(
                {
                    url:'book_seats.php',
                    method:'POST',
                    data:{data:seats},
                    success: function(data)
                    {
                        ;
                    }
                });
            }
            
            
        })
    </script>

</body>

</html>