<li  <?php if( ($manufacturer['id'])%2 ): ?>class="odd"><?php else:?>class="even"> <?php endif;?>
    <a href="<?= \yii\helpers\Url::to(['manufacturer/view', 'id' => $manufacturer['id']]) ?>"><?= $manufacturer['name_manufacturer']?></a>
</li>
