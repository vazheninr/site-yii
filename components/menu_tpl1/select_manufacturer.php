<option
    value="<?= $manufacturer['id']?>"
    <?php if($manufacturer['id'] == $this->model->manufacturer_id) echo ' selected'?>
    ><?= $tab . $manufacturer['name_manufacturer']?>
</option>
