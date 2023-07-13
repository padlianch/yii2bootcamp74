<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kelas */
?>
<div class="kelas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_tahun_ajaran',
            'id_wali_kelas',
            'id_ruangan',
            'id_tingkat_kelas',
            'nama_kelas',
        ],
    ]) ?>

</div>
