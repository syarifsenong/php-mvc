<div class="container">
    <h1 class="mt-4">About Me</h1>
    <img src="<?= BASEURL; ?>/img/gambar.jpg" alt="Syarif" width="200" class="rounded-circle shadow mb-3">
    <!-- ambil data params dari controller About.php -->
    <p>Halo, nama saya <?= $data['nama']; ?>, pekerjaan saya <?= $data['pekerjaan']; ?>.</p>
</div>