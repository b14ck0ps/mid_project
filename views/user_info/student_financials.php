<?php
require_once("../../controllers/validuser.php");
require_once("../../controllers/customElements.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financials</title>
</head>

<body>
    <br>
    <center>
        <h1><i>Invoice</i></h2>
    </center>

    <label for="name">Name :</label> <?= $_SESSION['student'][1] ?> <br>
    <label for="id">ID :</label> <?= $_SESSION['student'][0] ?> <br>
    <label for="email">Email :</label> <?= $_SESSION['student'][3] ?> <br>
    <label for="Due Date">Due Date :</label> 2022-03-14 <br>
    <br><br>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Fees</th>
            <th>Due</th>
            <th>Balance</th>
        </tr>
        <?php
        // need students financial data
        ?>
        <!-- invouice template -->
        <tr>
            <td>2021-11-07</td>
            <td>Semistar fee</td>
            <td>$87000</td>
            <td>$0</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>2022-03-07</td>
            <td>Late admit print</td>
            <td>$100</td>
            <td>$0</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>2022-02-16</td>
            <td>2nd Installment</td>
            <td>$37500</td>
            <td>$37500</td>
            <td>$0</td>
        </tr>
    </table>
    <br><br>
    <b>Total Due: </b> $37500 <br>
    <b>Bank Name: </b> Dhaka Bank <br>
    <b>Account Number: </b> 0123456789 <br>
    <b>Account Name: </b> <?= $_SESSION['student'][1] ?> <br>
    <b>Branch: </b> Dhaka <br> <br>
    <a href="">Print</a> <!-- will added later -->
    
</body>

</html>