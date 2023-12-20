<?= $this->extends('layout/header') ?>
<?= $this->section('container') ?>

<div class= "container">
    <div class="row">
        <div class="col">
        <h1 class="mt-2"> Daftar Menu</h1>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><img src ="/img/spa.jpg" alt="" width="100"></td>
            <td>Spaghetti Bolognese</td>
            <td>Rp 100.000</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>

    
<?= $this->section() ?>