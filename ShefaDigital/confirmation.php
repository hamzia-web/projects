<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
<!-- Including header and connection -->
<?php
include 'header.php';
include 'connection.php';
?>  

    <?php if (isset($_POST['submit'])) {
        $patientName = $_POST['patientName'];
        $date = $_POST['date'];
        $partsOf = $_POST['partsOf'];
        $refByDoctor = $_POST['refByDoctor'];
        $amount = $_POST['amount'];
        $due = $_POST['due'];
        $report = $_POST['report'];

        // Form captured data to show on confirmation page
        echo '<center style=" margin-top: 100px;"><h2>Thank you for your interest in Shefa Digital X-Ray</h2></center><br>';
        echo "<div style='text-align:left; padding-left:45%;'><span style='color: black;'/><p>Patient Name: &nbsp;" .
            $patientName .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Date: &nbsp;" .
            $date .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Parts of X-Ray: &nbsp;" .
            $partsOf .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Referred by Doctor: &nbsp;" .
            $refByDoctor .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Amount: &nbsp;" .
            $amount .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Due: &nbsp;" .
            $due .
            '</span> </p>';
        echo "<span style='color: black;'/><p>Report: &nbsp;" .
            $report .
            '</span> </p></div> <br><br><br><br><br>';

        $sql_ins = "INSERT INTO `shefadigitalxray`(`sno`, `patientName`, `date`, `partsOf`, `refByDoctor`, `amount`, `due`, `report`) VALUES ('', '$patientName', '$date', '$partsOf', '$refByDoctor', '$amount', '$due', '$report')";
        $result = mysqli_query($connection, $sql_ins);

        if ($result) { ?>
            <script>
                console.log("Data inserted successfully");
            </script>
        <?php } else { ?>
            <script>
                console.log("Data not inserted successfully");
            </script>
       <?php }
    } ?>

     <!-- Mail Sending logic: Copy content from sendMail.php, arrange PHP content and paste below -->

<!-- Including Footer -->
<?php include 'footer.php'; ?>   
 
</body>
</html>

