<?php
use yii\bootstrap5\Html;
use cangak\ajaxcrud\BulkButtonWidget;
use kartik\grid\GridView;
use kartik\icons\Icon;
Icon::map($this);

$jlh_kelas = $data->getKelasSiswa()->count()??0;
?>

<table width=100%>
    <tr>
        <td>Nama Kelas : <?= $data->nama_kelas ?></td>
        <td></td>
        <td>Tingkat : <?= $data->tingkatan->nama_tingkatan??'' ?></td>
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

<table width="100%" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no=0;
            foreach ($siswa as $key => $value) :
                $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->nama_siswa ?></td>
                        <td>Aksi</td>
                    </tr>
                <?php
            endforeach
        ?>
</table>

<div class="siswa-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns_siswa.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="fas fa fa-plus" aria-hidden="true"></i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Tambah Siswas','class'=>'btn btn-default']).
                    Html::a('<i class="fas fa fa-sync" aria-hidden="true"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="fas fa fa-list" aria-hidden="true"></i> Siswas listing',
                'before'=>'<em>* Resize kolom table  serte kolom kanan dan kiri.</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttons'=>Html::a('<i class="fas fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus semua',
                                ["bulkdelete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>'Aapakah anda yakin?',
                                    'data-confirm-message'=>'Apakah Anda yakin akan menghapus data ini?'
                                ]),
                        ]).                        
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>