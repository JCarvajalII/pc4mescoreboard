<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .openH {
            display: inline;
            width: 100px;
        }

    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Ionicons  -->
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
    <title></title>
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class=" text-center">
                    <ion-icon name="trending-up"></ion-icon>Scoreboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a class="openH" href="../index.php">
                            <ion-icon name="arrow-round-back"></ion-icon>
                        </a>
                        <h1 class="openH">OPEN TICKETS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  What is contained here?
        Number of open tickets
        Open tickets threshold
        Score for the number of ticket
    -->
    <div class="container-fluid">
        <h4>As of <span id="date"></span></h4>
        <script type="text/javascript" src="../js/open.js" async></script>
        <h4>No. of Open Tickets: <span id="noTickets">0</span></h4>
        <h4>Open Tickets Threshold: <span id="opentthreshold"></span></h4>
        <h4>Open Ticket Score: <span id="opentscore">0%</span></h4>
    </div>
    <!--    <script type="text/javascript" src="../js/index.js"></script>-->
</body>

</html>