<h2>Insight Penjualan</h2>
<p>Insight penjualan dari pesan-antar</p>

<?php if (! empty($dbpesanantar) && is_array($dbpesanantar)): ?>
<table>
    <tr><th>Menu</th><th>Harga</th><th>Total Pesanan</th>Persentase dari Total Pemasukan<th>Bulan</th></tr>
    <?php foreach ($dbrestoran as $dbrestoran_item): ?>
    <tr>
        <td> 
            <?= esc($dbrestoran_item['Menu']) ?>
        </td>
        <td> 
            <?= esc($dbrestoran_item['Harga']) ?> 
        </td>
        <td> 
            <?= esc($dbrestoran_item['TotalPesanan']) ?> 
        </td>
        <td> 
            <?= esc($dbrestoran_item['TotalPemasukan']) ?> 
        </td>
        <td> 
            <?= esc($dbrestoran_item['PersentaseDariTotalPemasukan']) ?> 
        </td>
        <td> 
            <?= esc($dbrestoran_item['Bulan']) ?> 
        </td>
    </tr>
<?php endforeach ?> </table>
<?php else: ?>
<h3>No Data</h3>
<p>Unable to find any data for you.</p>
<?php endif ?>