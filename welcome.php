<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    header("Location: error.php");
    exit();
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');
$date = date('d F Y');
$day = date('l');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h3 class="text-center">Welcome</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">Halo, <?php echo $name; ?>!</p>
                        <p>Email Anda: <?php echo $email; ?></p>
                        <p>Waktu login: <?php echo $time; ?></p>
                        <p>Hari: <?php echo $day; ?></p>
                        <p>Tanggal: <?php echo $date; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>