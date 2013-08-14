<?php include 'inc/doctype.php'; ?>
<?php include 'inc/meta.php'; ?>
<title>Annual Report 2013</title>
<script type="text/javascript" src="//use.typekit.net/ocu2ncd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
    <script src="js/vendor/respond.min.js"></script>
<![endif]-->

<!-- CSS -->
<link rel="stylesheet" href="css/master.css">
<!-- JS -->
<script src="js/vendor/modernizr.custom.82319.js"></script>

</head>

<body>

    <div class="menu">
        <a href="index.php"><img src="images/logo.gif"></a>
        <ul id="filters" class="main-nav">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".excel">Excel</a></li>
            <li><a href="#" data-filter=".stretch">Stretch</a></li>
            <li><a href="#" data-filter=".choose">Choose</a></li>
            <li><a href="#" data-filter=".engage">Engage</a></li>
            <li><a href="#" data-filter=".serve">Serve</a></li>
        </ul>
        <div class="pos-btm">
            <a href="http://studentlife.uiowa.edu">
                <img src="images/menu_dosl.png" alt="Division of Student Life" class="menu-dosl">
            </a>
        </div>
    </div>

    <!-- Preview List Include -->
    <?php include 'inc/previewlist.php'; ?>

    <div class="home-content">
        <img src="images/dosl-lg.png" alt="" class="dosl" width="500">
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="js/vendor/jquery.isotope.min.js"></script>
    <script>
        $(function() {
            var $container = $('#container');

            $container.isotope({
                // options
                itemSelector : '.item',
                layoutMode : 'straightDown'
            });

            // filter items when filter link is clicked
            $('#filters a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                $('#filters a').removeClass('active');
                $(this).addClass('active');
                return false;
            });
        });  
    </script>

    <!-- Big Video -->
    <script src="js/jquery-ui-1.8.22.custom.min.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/video.js"></script>
    <script src="js/bigvideo.js"></script>
    <script>
        $(function() {
            var BV = new $.BigVideo({useFlashForFirefox:false});
            BV.init();
            BV.show('vids/xmen.mp4');
        });
    </script>
</body>
</html>
