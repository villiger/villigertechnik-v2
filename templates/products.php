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
                <ul style="font-size: 22px;">
                    <li><?= $this->link('suction', $this->translate('saugentmistung'), 'title') ?></li>
                    <li><?= $this->link('suctionreferences', $this->translate('show_references'), 'title') ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="image-row">
        <div class="section group">
            <div class="col span-half">
                <img src="/img/front/salatwaschmaschine.jpg">
            </div>
            <div class="col span-half">
                <ul style="font-size: 22px;">
                    <li><?= $this->link('salad', $this->translate('saladwasher'), 'title') ?></li>
                    <li><?= $this->link('vegetableproducts', $this->translate('show_vegetable_products'), 'title') ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="image-row">
        <div class="section group">
            <div class="col span-half">
                <img src="/img/front/vacuumcleaner.jpg">
            </div>
            <div class="col span-half">
                <ul style="font-size: 22px;">
                    <li><?= $this->link('vacuumcleaner', $this->translate('vacuumcleaner'), 'title') ?></li>
                </ul>
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
