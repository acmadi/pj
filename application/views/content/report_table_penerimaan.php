<script type="text/javascript" src="<?php echo base_url().'assets/js/dragtable.js';?>" ></script>

<div class="table CSSTabel table-list2">
<label id="lab1"style="
    margin-left: 5px;"><b>Laporan Penerimaan Barang</b></label>

<table width="100%;">
	<tr>
		<td width="70%">
			
			<div><b>PERIODE : <?php echo $periode ?></b></div> <!--ambil berdasarkan input radio dari user -->
		</td>
		<td width="30%" style="text-align:right;">
			<b>Tanggal : <?php echo $tanggal ?></b>
		</td>
	</tr>
</table>

		<div id="LimitTab">
			
				
					<table border='0px' id="tablesorter" class="draggable" style="width:100%;font-size:11px;">
						<thead><tr>
						<th>Tanggal</th>
						<th>No. BPB.</th>
						<th>Supplier</th>
						<th>No. Reff.</th>
						<th>Nama Barang</th>
						<th>Jenis Barang</th>
						<th>Qty1</th>
						<th>Satuan</th>
						</tr></thead>
						
						<?php
							$no_br="";$plg="";$tgl="";
							foreach($hasil2 as $row)
							{
							$originalDate1 = $row->Tgl_Bpb;
							$dmy1 = date("d-m-Y", strtotime($originalDate1));
							
							if($no_br != $row->No_Bpb){
								$no_br=$row->No_Bpb;$plg=$row->NS;$tgl=$dmy1;
							}else{
								$no_br="";$plg="";$tgl="";
							}
								echo
								"<tr>
									<td>$tgl</td>
									<td>$no_br</td>
									<td>$plg</td>
									<td>$row->No_Reff</td>
									<td>$row->Nama</td>
									<td>$row->Ukuran</td>
									<td align='right'>$row->Qty1</td>
									<td>$row->Satuan1</td>
								</tr>";
								$no_br=$row->No_Bpb;
							}
								?>
					</table>
			
		</div>
<!--</div>-->

</div>
				
