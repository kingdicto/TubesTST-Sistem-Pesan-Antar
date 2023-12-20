<p>Data Order</p>
<?php if (! empty($dbpesanantar) && is_array($dbpesanantar)): ?>
<table>
    <tr><th>Nama Pemesan</th><th>Tanggal Order</th><th>Margherita Pizza</th><th>Spaghetti Bolognese</th><th>Risotto ai Funghi</th><th>Tiramisu</th><th>Lasagna al Forno</th><th>Cannelloni Ricott</th><th>Prosciutto</th><th>Minestrone Soup</th><th>Negroni Cocktail</th><th>Caprese Salad</th><th>Total Harga</th></tr>
    <?php foreach ($dbpesanantar as $dbpesanantar_item): ?>
    <tr>
        <td> 
        <?= esc($dbpesanantar_item['nama_pemesan']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['tanggal_order']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Margherita_Pizza']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Spaghetti_Bolognese']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Risotto_ai_Funghi']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Tiramisu']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Lasagna_al_Forno']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Cannelloni_Ricott']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Prosciutto']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Minestrone_Soup']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Negroni_Cocktail']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Caprese_Salad']) ?>
        </td> 
        <td> 
        <?= esc($dbpesanantar_item['Total_Harga']) ?>
        </td> 
    </tr>
<?php endforeach ?> </table>
<?php else: ?>
<h3>No Data</h3>
<p>Unable to find any data for you.</p>
<?php endif ?>
