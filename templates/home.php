<style>
    @media only screen and (max-width: 800px) {
        .footer {
            width: 100%;
            color: #aaa;
            text-align: center;
        }
    }

    @media only screen and (min-width: 800px) {
        .footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
        }
    }
</style>
<script>
    $(document).ready(function() {
        var touchmoved = false;
        $('.front .element').on('click touchend', function(e){
            if(!touchmoved){
                window.location = $(this).find('.title a').attr('href');
            }
        }).on('touchmove', function(e){
            touchmoved = true;
        }).on('touchstart', function(){
            touchmoved = false;
        });
    });
</script>
<div class="front">
    <div class="element">
        <div class="shadow"></div>
        <div class="title"><?= $this->link('suction', $this->translate('saugentmistung')) ?></div>
        <div class="caption">Entmistungsanlage die den Mist aus den Boxen absaugt.</div>
    </div>
    <div class="element">
        <div class="shadow"></div>
        <div class="title"><?= $this->link('salad', $this->translate('saladwasher')) ?></div>
        <div class="caption">Automatisches Waschen von Gemüse und Salaten.</div>
    </div>
    <div class="element">
        <div class="shadow"></div>
        <div class="title"><?= $this->link('vacuumcleaner', $this->translate('vacuumcleaner')) ?></div>
        <div class="caption">Leistungsstarke Wassersauger für den professionellen Einsatz.</div>
    </div>
</div>
