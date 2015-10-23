<?php
$this->data->title = $this->translate("products");
?>
<div class="title-row">
    <div class="section group">
        <div class="col span-full">
            <h1><?= $this->translate('products') ?></h1>
        </div>
    </div>
</div>
<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <p><?= $this->link('suction', $this->translate('saugentmistung')) ?></p>
            <p><?= $this->link('salad', $this->translate('saladwasher')) ?></p>
            <p><?= $this->link('vacuumcleaner', $this->translate('vacuumcleaner')) ?></p>
        </div>
    </div>
</div>
