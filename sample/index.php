<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.js"></script>
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
                    <tr>
                        <th>Ticket Type</th>
                        <th>&gt;</th>
                        <th>Header</th>
                        <th>&lt;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="r1">
                        <td class="positive">Open</td>
                        <td class="positive" id="t1">0</td>
                        <td class="positive" id="mid" rowspan="6">100%</td>
                        <td class="negative" id="t2">&nbsp;</td>
                    </tr>
                    <tr id="r2">
                        <td>Pick Up</td>
                        <td class="positive">&nbsp;</td>
                        <td class="negative">&nbsp;</td>
                    </tr>
                    <tr id="r3">
                        <td>Overdue</td>
                        <td class="positive" id="t5">&nbsp;</td>
                        <td class="negative" id="t6"></td>
                    </tr>
                    <tr id="r4">
                        <td>RMA</td>
                        <td class="positive" id="t7">&nbsp;</td>
                        <td class="negative" id="t8">&nbsp;</td>
                    </tr>
                    <tr id="r5">
                        <td>Ordered Parts</td>
                        <td class="positive" id="t9">&nbsp;</td>
                        <td class="negative" id="t10">&nbsp;</td>
                    </tr>
                    <tr id="r6">
                        <td>Closed</td>
                        <td class="positive" id="t11">&nbsp;</td>
                        <td class="negative" id="t12">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
