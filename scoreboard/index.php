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

        #sump {
            display: inline-block;
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
    <title>Scoreboard</title>
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
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="overall" class="container-fluid tab-pane active"><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4" style="background-color: white; padding: 20px;">
                                    <div class="card">
                                        <h1 class="card-header">Total Score</h1>
                                    </div>
                                    <p class="display-1 text-success" style="font-size: 150px;">100%</p>
                                    <p>Very Good!
                                        <ion-icon name="happy"></ion-icon>
                                    </p>
                                </div>
                                <div class="col-sm-8" style="background-color: white; padding: 20px;">
                                    <div class="card">
                                        <h1 class="card-header" style="background: ;">Summary</h1>
                                    </div>
                                    <br>
                                    <div class="row ">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #4dff4d;">
                                                    <ion-icon name="open"></ion-icon>&nbsp;Open
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        include_once 'php/connectDB.php';
                                                        include_once 'php/test.php';
                                                        $sql = "SELECT open_ticket_day from ticketsday where td_id='1'";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                          echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"OPENScore\">&nbsp;" . getOpenPercentage($row['open_ticket_day']) . "%</span></h5>";  
                                                        }
                                                        foreach($data as $row){
                                                            echo "<p>No. of Tickets: <span id=\"OPENTicket\">" . $row['open_ticket_day'] . "</span></p>";
                                                        }
                                                    ?>
                                                        <form method="GET" action="php/add.php">
                                                            <button type="submit" name="submit">Add 1 to ticket</button>
                                                        </form>
                                                        <a id="openHref" href="php/open.php">View Details</a>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #4d4dff;">
                                                    <ion-icon name="thumbs-up"></ion-icon>Pick Up
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT pickup_ticket_day from ticketsday where td_id='1'";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"PICKUPScore\">&nbsp;" . getPickUpPercentage($row['pickup_ticket_day']) . "%</span></h5>";  
                                                        }
                                                        foreach($data as $row){
                                                            echo "<p>No. of Tickets: <span id=\"PICKUPTicket\">" . $row['pickup_ticket_day'] . "</span></p>";
                                                        }
                                                    ?>
                                                        <a id="pickupHref" href="php/pickup.php">View Details</a>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ff704d;">
                                                    <ion-icon name="cart"></ion-icon>Ordered Parts
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT orderedpart_ticket_day from ticketsday where td_id='1'";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"ORDEREDPARTScore\">&nbsp;" . getOrderedPartsPercentage($row['orderedpart_ticket_day']) . "%</span></h5>";  
                                                        }
                                                        foreach($data as $row){
                                                            echo "<p>No. of Tickets: <span id=\"ORDEREDPARTSTicket\">" . $row['orderedpart_ticket_day'] . "</span></p>";
                                                        }
                                                    ?>
                                                        <a id="pickupHref" href="php/orderedParts.php">View Details</a>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ffff4d;">
                                                    <ion-icon name="alert"></ion-icon>&nbsp;Overdue
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT overdue_ticket_day from ticketsday where td_id='1'";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"OVERDUEScore\">&nbsp;" . getOverduePercentage($row['overdue_ticket_day']) . "%</span></h5>";  
                                                        }
                                                        foreach($data as $row){
                                                            echo "<p>No. of Tickets: <span id=\"OVERDUETicket\">" . $row['overdue_ticket_day'] . "</span></p>";
                                                        }
                                                    ?>
                                                        <a id="pickupHref" href="php/overdue.php">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ffc34d;">
                                                    <ion-icon name="return-left"></ion-icon>RMA
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT rma_ticket_day from ticketsday where td_id='1'";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"RMAScore\">&nbsp;" . getRMAPercentage($row['rma_ticket_day']) . "%</span></h5>";  
                                                        }
                                                        foreach($data as $row){
                                                            echo "<p>No. of Tickets: <span id=\"RMATicket\">" . $row['rma_ticket_day'] . "</span></p>";
                                                        }
                                                    ?>
                                                        <a id="pickupHref" href="php/rma.php">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/open.js"></script>

</body>

</html>
