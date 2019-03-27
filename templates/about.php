<?php
$this->data->title = $this->translate("company");
?>
<div class="title-row">
    <div class="section group">
        <div class="col span-full">
            <h1><?= $this->translate('company') ?></h1>
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group" style="padding-bottom: 40px;">
        <div class="col span-full">
            <?= $this->translate('about_text1') ?>
        </div>
    </div>
</div>

<div class="image-row">
    <div class="section group info-row">
        <div class="col span-half">
            <img src="/img/portrait/bruno.jpg">
        </div>
        <div class="col span-half info">
            <p><strong>Bruno Villiger</strong></p>
            <p>Geschäftsleitung</p>
            <p><a href="mailto:bruno@villigertechnik.ch">bruno@villigertechnik.ch</a></p>
        </div>
    </div>
    <div class="section group info-row">
        <div class="col span-half">
            <img src="/img/portrait/andy.jpg">
        </div>
        <div class="col span-half info">
            <p><strong>Andy Villiger</strong></p>
            <p>Leitung Verkauf &amp; IT</p>
            <p><a href="mailto:andy@villigertechnik.ch">andy@villigertechnik.ch</a></p>
        </div>
    </div>
    <div class="section group info-row">
        <div class="col span-half">
            <img src="/img/portrait/manuel.jpg">
        </div>
        <div class="col span-half info">
            <p><strong>Manuel Villiger</strong></p>
            <p>Leitung Werkstatt &amp; Montage</p>
            <p><a href="mailto:manuel@villigertechnik.ch">manuel@villigertechnik.ch</a></p>
        </div>
    </div>
</div>

<style>
.image-row .info {
    font-size: 18px;
}

.section.group.info-row {
    padding-bottom: 40px;
}
</style>

<?php
/**
<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_mobileheating1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-half">
            <img src="/img/about/eisfeld-heizung1.jpg">
        </div>
        <div class="col span-half">
            <img src="/img/about/eisfeld-heizung4.jpg">
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_tentheating1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-half">
            <img src="/img/about/zeltheizung1.jpg">
        </div>
        <div class="col span-half">
            <img src="/img/about/zeltheizung2.jpg">
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_horse1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-half">
            <img src="/img/about/boxen1.jpg">
        </div>
        <div class="col span-half">
            <img src="/img/about/schiebetueren1.jpg">
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_agritec1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-half">
            <img src="/img/about/landtechnik1.jpg">
        </div>
        <div class="col span-half">
            <img src="/img/about/landtechnik2.jpg">
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_handlers1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-full">
            <img src="/img/about/teleskoplader1.jpg">
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_fodder1') ?>
        </div>
    </div>
</div>
<div class="image-row">
    <div class="section group">
        <div class="col span-full">
            <img src="/img/about/futtermischwagen1.jpg">
        </div>
    </div>
</div>