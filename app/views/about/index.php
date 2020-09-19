<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>

<body>
    <h1>About Me</h1>
    <!-- ambil data params dari controller About.php -->
    <p>Halo, nama saya <?= $data['nama']; ?>, pekerjaan saya <?= $data['pekerjaan']; ?>.</p>
</body>

</html>