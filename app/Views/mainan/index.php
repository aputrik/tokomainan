<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Mainan</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Nama Mainan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/playmat.jpg" alt="" width="200"></td>
                        <td>0 - 12 Bulan</td>
                        <td>Play Mat</td>
                        <td>75.000</td>
                        <td><a href="" class="btn btn-success">Beli</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="/img/donatsusun.jpg" alt="" width="200"></td>
                        <td>1 - 2 Tahun</td>
                        <td>Donat Susun</td>
                        <td>50.000</td>
                        <td><a href="" class="btn btn-success">Beli</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="/img/boneka.jpg" alt="" width="200"></td>
                        <td>2 -3 Tahun</td>
                        <td>Boneka</td>
                        <td>100.000</td>
                        <td><a href="" class="btn btn-success">Beli</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="/img/laptopmainan.jpg" alt="" width="200"></td>
                        <td>4 - 5 Tahun</td>
                        <td>Komputer Mainan</td>
                        <td>150.000</td>
                        <td><a href="" class="btn btn-success">Beli</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>