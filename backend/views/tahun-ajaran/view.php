<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TahunAjaran */
?>
<div class="tahun-ajaran-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tahun_mulai',
            'tahun_selesai',
            'status_berjalan:boolean',
        ],
    ]) ?>

</div>
