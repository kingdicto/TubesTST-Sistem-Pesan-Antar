<b>Dbrestoran</b>
<p>Data Menu</p>
<?php if (! empty($dbrestoran) && is_array($dbrestoran)): ?>
<table>
    <tr><th>nama</th><th>harga</th><th>jumlah terpesan</th></tr>
    <?php foreach ($dbrestoran as $dbrestoran_item): ?>
    <tr>
        <td> 
            <?= esc($dbrestoran_item['nama']) ?>
        </td>
        <td> 
            <?= esc($dbrestoran_item['harga']) ?> 
        </td>
        <td> 
            <?= esc($dbrestoran_item['jumlah terpesan']) ?> 
        </td>
    </tr>
<?php endforeach ?> </table>
<?php else: ?>
<h3>No Data</h3>
<p>Unable to find any data for you.</p>
<?php endif ?>