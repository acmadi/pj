<div class="table CSSTabel table-list table-hover" style="height: 395px;">
    <table id="tbl_list">
        <thead>
            <th>No Terima</th>
            <th>Tanggal</th>
        </thead>

        <tbody>
        <?php foreach($hasil as $row)
        {   $originalDate1 = $row->Tgl;
            $dmy1 = date("d-m-Y", strtotime($originalDate1));
            echo
            "<tr
                kode = $row->Kode
                tgl = $dmy1
                plg = $row->Kode_plg
				toInv = $row->TotalInvoice
                toBayar = $row->TotalBayar
				nama = $row->Nama
            >

                <td>$row->Kode</td>
                <td>$dmy1</td>
            </tr>";
        } ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
$('#tbl_list tr').click(function (e) {
    $('#delete').attr('disabled', false);
   
    var id = $(this).attr("kode"); 
    var tgl = $(this).attr("tgl");
    var toBayar = $(this).attr("toBayar");
    var plg = $(this).attr("plg");
    var toInv = $(this).attr("toInv");
	var nama = $(this).attr("Nama");
    
    $('#no_terima').val(id);
    $('#_tgl1').val(tgl);
    $('#totInvo').val(toInv);
    $('#totByr').val(toBayar);
    $('#kd_plg').val(plg);
    $('#_pn').val(nama);

    
    $('#save').attr('mode','edit');
    detail_SO();
	detail_pembayaran();
	detail_invoice()
});


var oTable = $('#tbl_list').dataTable( {
    "sScrollY": "290px",
    "sScrollYInner": "110%",
    "sScrollX": "100%", //panjang width
    "sScrollXInner": "100%", //overflow dalem
    "bPaginate": true,
    "bLengthChange": false,
    "aaSorting": [[ 4, "desc" ]],
    "bInfo": false //Showing 1 to 1 of 1 entries (filtered from 7 total entries)
} );
</script>