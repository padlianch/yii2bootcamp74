<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'id_tahun_ajaran',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'id_wali_kelas',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'id_ruangan',
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'id_tingkat_kelas',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_kelas',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header'=>'Tahun',
        'value' => function ($model) {
            $text = $model->thnAjaran->tahun_mulai;
            $text .= ' - ';
            $text .= $model->getThnAjaran()->one()->tahun_selesai;
            
            return $text;
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'thnAjaran.tahun_mulai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'thnAjaran.tahun_selesai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tingkatan.nama_tingkatan',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'Lihat','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Hapus', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Anda Yakin?',
                          'data-confirm-message'=>'Apakah Anda yakin akan menghapus data ini?'], 
    ],

];   