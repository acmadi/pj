<style type="text/css">
	.bod td, th
	{
		border:1px solid black;
	}
	thead{
		border:1px solid black;
	}
	table{
		border-collapse:collapse;
	}
</style>

<table>
	<tr>
	<td width="75%"><h2 style="margin: 0">PD. PELITA JAYA</h2></td>
	<td width="20%">Tanggal : <?php echo $tanggal; ?></td>
	</tr>
	<tr><td><h3 >DAFTAR BARANG</h3></td></tr>
</table>

<table class="table bod" width="100%" style="font-size: 11px">
	<thead>
		<tr style="background: #C5C5C5;">
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama</th>
			
			<th>Ukuran</th>
			<th>Qty</th>
			<th>Satuan</th>
			<th>Hrg Beli</th>
			<th>Hrg Jual</th>
			<th>Keterangan</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $i=1;
		foreach($hasil2 as $row){
        
            echo
            "<tr>
				<td>$i</td>
                <td>$row->Kode</td>
                <td>$row->Nama</td>
				<td>$row->Ukuran</td>
				<td align='right'>$row->Qty1</td>
				<td>$row->Satuan1</td>
				<td>$row->Harga_Beli</td>
				<td>$row->Harga_Jual</td>
				<td>$row->Nama2</td>
				
            </tr>";$i++;
        }  ?>
	</tbody>
</table>
