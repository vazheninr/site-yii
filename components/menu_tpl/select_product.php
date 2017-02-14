<option
    value="<?= $category['id']?>"
    <?php if(($category['id'] == $this->model->category_id) && ($this->model->parent_id != 0)) echo ' selected'?>
    ><?= $tab . $category['keywords']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . '-')?>
    </ul>
<?php endif;?>
