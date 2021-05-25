<?php
$this->data->title = $this->translate("contact");
?>
<div>
<div class="title-row">
    <div class="section group">
        <div class="col span-full">
            <h1><?= $this->translate('contact') ?></h1>
        </div>
    </div>
</div>

<div class="content-row jobs">
    <div class="section group">
        <div class="col span-full">
            <?= $this->translate('about_jobs') ?>
        </div>
    </div>
</div>

<div class="content-row">
    <div class="section group">
        <div class="col span-full">
            <p>
                Villiger Technik GmbH<br>
                Bahnhofstrasse 27<br>
                5647 Oberrüti<br>
                <?= $this->translate('switzerland') ?><br>
            </p>
            <p>
                Tel +41 56 496 26 00<br>
            </p>
            <p>
                <a href="mailto:info@villigertechnik.ch">info@villigertechnik.ch</a><br>
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCvjK51CZkqYkqbUb3Nykl7znog1pWdJqc"></script>
    <div style="overflow: hidden; height: 400px; width: 100%;">
        <div id="gmap_canvas" style="height: 400px; width: 100%;"></div>
        <style scoped>
            #gmap_canvas img {
                max-width: none !important;
                background: none !important
            }
        </style>
    </div>
    <script type="text/javascript">
        function initMap() {
            var latlng = new google.maps.LatLng(47.1647524, 8.4019042);

            map = new google.maps.Map(document.getElementById("gmap_canvas"), {
                zoom: 14,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            marker = new google.maps.Marker({
                map: map,
                position: latlng
            });
            infowindow = new google.maps.InfoWindow({
                content: "<b>Villiger Technik GmbH</b><br>Bahnhofstrasse 27<br>5647 Oberrüti<br><a href='https://goo.gl/maps/6cjRjq64G7vCtmUg9' target='_blank'><strong>In Google Maps öffnen</strong></a>"
            });
            google.maps.event.addListener(marker, "click", function() {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</div>
