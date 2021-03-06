<div class="table table-hover CSSTabel table-list">
    <table id="tb1" style="width: 100%;">
        <thead>
            <th>No SJ</th>
            <th>No SO</th>
            <th>Pelanggan</th>
        </thead>

        <tbody id="tb_detail">
        <?php foreach($hasil as $row)
        {
            echo
            "<tr
                _no_sj = $row->No_Sj
            >
                <td>$row->No_Sj</td>
                <td>$row->No_Do</td>
                <td>$row->Perusahaan</td>
            </tr>";
        } ?>
        </tbody>
    </table>
</div>

<script>
$('#tb1 tbody tr').click(function (e) {
    var sj=$(this).attr("_no_sj");

    $('#sj').attr('disabled',true);
    $('#_do').attr('disabled',true);
    $('#pn').attr('disabled',true);
    
    document.getElementById('f_plg').style.visibility = 'hidden';

    $('#sj').val(sj);
    show_so("view");
    loadDetailSJ();
    getFormSj(sj);
    cek_batal();
    cek_kirim();

    <?php if ($this->authorization->is_permitted('update_surat_jalan')) : ?>
        $('#add').attr('mode','edit');
        $('#save').attr('mode','edit');
    <?php else: ?>
        $("#save").attr('disabled',true);
    <?php endif; ?>

    $('#cancel').attr('disabled',false);
    $('#delete').attr('disabled',false);

    jQuery(".hide-con").show();
});


var oTable = $('#tb1').dataTable( {
    "sScrollY": "400px",
    "sScrollYInner": "110%",
    "sScrollX": "100%", //panjang width
    "sScrollXInner": "100%", //overflow dalem
    "bPaginate": true,
    "bLengthChange": true,
    "aaSorting": [[ 4, "desc" ]],
    "oLanguage": {
         "sSearch": "",
         "sLengthMenu": " _MENU_ ",
         "sEmptyTable": "Tidak ada data tersedia",
         "sZeroRecords": "Data tidak ditemukan"
       },
    "bInfo": false //Showing 1 to 1 of 1 entries (filtered from 7 total entries)
} );
</script>
