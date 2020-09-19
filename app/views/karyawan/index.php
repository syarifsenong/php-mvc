<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar karyawan</h3>
            <?php foreach ($data['kry'] as $kry) : ?>
                <ul>
                    <li><?= $kry['nama']; ?></li>
                    <li><?= $kry['umur']; ?></li>
                    <li><?= $kry['pekerjaan']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>