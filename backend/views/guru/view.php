<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Guru */
?>
<div class="guru-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nip',
            'nama_guru',
            'tanggal_lahir',
            'alamat',
        ],
    ]) ?>

</div>
