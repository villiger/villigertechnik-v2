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

<div class="products">
    <div class="image-row">
        <div class="section group">
            <div class="col span-half">
                <img src="/img/front/saugentmistung.jpg">
            </div>
            <div class="col span-half">
                <p><?= $this->link('suction', $this->translate('saugentmistung'), 'title') ?></p>
                <p>- <?= $this->link('suctionreferences', $this->translate('show_references')) ?></p>
            </div>
        </div>
    </div>

    <div class="image-row">
        <div class="section group">
            <div class="col span-half">
                <img src="/img/front/salatwaschmaschine.jpg">
            </div>
            <div class="col span-half">
                <p><?= $this->link('salad', $this->translate('saladwasher'), 'title') ?></p>
                <p>- <?= $this->link('vegetableproducts', $this->translate('show_vegetable_products')) ?></p>
            </div>
        </div>
    </div>

    <div class="image-row">
        <div class="section group">
            <div class="col span-half">
                <img src="/img/front/vacuumcleaner.jpg">
            </div>
            <div class="col span-half">
                <p><?= $this->link('vacuumcleaner', $this->translate('vacuumcleaner'), 'title') ?></p>
            </div>
        </div>
    </div>

    <div class="image-row"></div>
</div>

<style>
    .image-row p {
        font-size: 18px;
        text-align: left;
    }

    .image-row a.title {
        font-size: 25px;
        font-weight: bold;
    }

    .image-row {
        padding-top: 50px;
    }
</style>
