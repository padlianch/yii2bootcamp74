<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
?>
<div class="siswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nis',
            'nama_siswa',
            'tanggal_lahir',
            'alamat:ntext',
        ],
    ]) ?>

</div>
