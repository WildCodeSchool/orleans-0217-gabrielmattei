<div class="container-fluid top">
    <div class="row nav">
        <div class="col-lg-3 col-md-3">
            <a href="index.php">Gabriel Mattei</a>
        </div>
        <div class="col-lg-3 col-md-3 symf">
            <a class="musique" id="symf">Symphonic Music</a>
            <img class="imgmusique" src="assets/img/picto/point-orgue_survol.png">
        </div>
        <div class="col-lg-3 col-md-3 perf">
            <a class="performing" id="perfo">Performing Art</a>
            <img class="imgperfo" src="assets/img/picto/point-orgue_survol.png">
        </div>

        <div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1">
            <a href="?p=about">About</a>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


<script src="assets/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
    $("[id^=year]").click(function () {
        annee = $(this).attr('id').replace('year', '');

        $(".content" + annee).fadeToggle();
    });
});

$(document).ready(function () {

    $("#symf").click(function () {
        jQuery('#perfo').hide();
        jQuery('#symf').show();
        jQuery('.imgperfo').show();
        jQuery('.imgmusique').hide();

        $(".symphonicMusic").css("visibility", 'visible');
        $(".performingArt").css("visibility", 'hidden');
    });

    $("#perfo").click(function () {
        jQuery('#symf').hide();
        jQuery('#perfo').show();
        jQuery('.imgmusique').show();
        jQuery('.imgperfo').hide();

        $(".performingArt").css("visibility", 'visible');
        $(".symphonicMusic").css("visibility", 'hidden');
    });

//        jQuery(".imgmusique").hover(
//            function() {
//                jQuery(this).hide();
//                jQuery('#symf').show();
//            }, function() {
//                jQuery(this).show();
//                jQuery('#symf').hide();
//            }
//        );
//
//        jQuery(".imgperfo").hover(
//            function() {
//                jQuery(this).hide();
//                jQuery('#perfo').show();
//            }, function() {
//                jQuery(this).show();
//                jQuery('#perfo').hide();
//            }
//        );
});

</script>