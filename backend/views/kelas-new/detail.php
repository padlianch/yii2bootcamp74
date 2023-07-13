<?php
$jlh_kelas = $data->getKelasSiswa()->count()??0;
?>

<table width=100%>
    <tr>
        <td>Nama Kelas : <?= $data->nama_kelas ?></td>
        <td></td>
        <td>Tingkat : <?= $data->tingkatan->nama_tingkatan ?></td>
    </tr>
    <tr>
        <td>Ruangan : <?= $data->nama_kelas ?></td>
        <td></td>
        <td>Wali Kelas : <?= $data->waliKelas->nama_guru??'-' ?></td>
    </tr>
    <tr>
        <td>Jumlah Siswa : <?= $jlh_kelas ?></td>
        <td></td>
        <td></td>
    </tr>
</table>

<?php
foreach ($siswa as $key => $value) {
    echo '- ';
    echo $value->nama_siswa;
    echo '<br>';
}
?>