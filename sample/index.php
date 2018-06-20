<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>Title</title>
</head>

<body>
    <div class=" wrapper">
        <div class="ui three item menu">
            <a class="active item">Hello</a>
            <a class="item">Bye</a>
            <a class="item">Hi</a>
        </div>
        <button class="ui primary button" onclick="solveOpen();">Solve</button>
        <div class="main content">
            <table class="ui celled table">
                <thead>
                    <tr align="left">
                        <th>
                            <h1>Ticket Type</h1>
                        </th>
                        <th>
                            <h1>&gt;</h1>
                        </th>
                        <th>
                            <h1>Header</h1>
                        </th>
                        <th>
                            <h1>&lt;</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="r1">
                        <td class="positive" width="25%">
                            <h3>Open</h3>
                        </td>
                        <td class="positive" id="t1" width="25%">0</td>
                        <td class="positive" id="mid" width="25%" rowspan="6">100%</td>
                        <td class="negative" id="t2" width="25%">&nbsp;</td>
                    </tr>
                    <tr id="r2">
                        <td align="left">
                            <h3>Pick Up</h3>
                        </td>
                        <td class="positive">&nbsp;</td>
                        <td class="negative">&nbsp;</td>
                    </tr>
                    <tr id="r3">
                        <td align="left">
                            <h3>Overdue</h3>
                        </td>
                        <td class="positive" id="t5">&nbsp;</td>
                        <td class="negative" id="t6"></td>
                    </tr>
                    <tr id="r4">
                        <td align="left">
                            <h3>RMA</h3>
                        </td>
                        <td class="positive" id="t7">&nbsp;</td>
                        <td class="negative" id="t8">&nbsp;</td>
                    </tr>
                    <tr id="r5">
                        <td align="left">
                            <h3>Ordered Parts</h3>
                        </td>
                        <td class="positive" id="t9">&nbsp;</td>
                        <td class="negative" id="t10">&nbsp;</td>
                    </tr>
                    <tr id="r6">
                        <td align="left">
                            <h3>Closed</h3>
                        </td>
                        <td class="positive" id="t11">&nbsp;</td>
                        <td class="negative" id="t12">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="ui two column grid">
            <div class="column">
                <div class="ui raised segment">
                    <a class="ui red ribbon label">Overview</a>
                    <span>Account Details</span>
                    <p></p>
                    <a class="ui blue ribbon label">Community</a> User Reviews
                    <p></p>
                </div>
            </div>
            <div class="column">
                <div class="ui segment">
                    <a class="ui orange right ribbon label">Specs</a>
                    <p></p>
                    <a class="ui teal right ribbon label">Reviews</a>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
