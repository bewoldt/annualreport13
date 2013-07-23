<?php include 'inc/doctype.php'; ?>
<?php include 'inc/meta.php'; ?>
<title>Annual Report 2013</title>
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700, 800' rel='stylesheet' type='text/css'> -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.js"></script>
    <script src="js/vendor/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/master.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
</head>

<body>
    <ul class="top-nav">
        <li><a href="#">Excel</a></li>
        <li><a href="#">Stretch</a></li>
        <li><a href="#">Engage</a></li>
        <li><a href="#">Choose</a></li>
        <li><a href="#">Serve</a></li>
    </ul>
    <div id="slides">
        <ul class="slides-container">
            <li>
                <img src="images/slide_tom.jpg" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Annual Report</h1>
                    <p>As a University of Iowa student, you become part of the Hawkeye family—students and alumni transformed by their experiences at Iowa. The University asks you to follow their example and rise to the challenge of these five expectations:</p>
                    <br>
                    <a class="various fancybox.iframe" href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1">
                        <img src="images/play.png">
                    </a>
                </div>
            </li>
            <li>
                <img src="images/ballet.jpg" width="1024" height="682" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Excel</h1>
                    <p>Academic excellence means setting and meeting high standards for yourself as a student. Faculty, staff and other students will ask you to work hard and push yourself intellectually. We expect a lot of you; you should expect only the best from yourself and the University.</p>
                    <a href="excel.php" class="block-anchor">View the stories</a>
                </div>
            </li>
            <li>
                <img src="images/slide_fraternity.jpg" width="1024" height="683" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Stretch</h1>
                    <div>
                        <p>At Iowa, you will find diversity of people, ideas, opportunities, and experiences. That diversity is one of the benefits of being an Iowa student. Step away from the familiar, try new ideas, experience new cultures, and learn from people different from yourself.</p>
                        <a href="#" class="block-anchor">View the stories</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slide_cheer.jpg" width="1024" height="685" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Engage</h1>
                    <div>
                        <p>You will be a more successful student and enjoy yourself more if you spend your time and energy on activities that matter. The University of Iowa offers almost limitless opportunities and the resources to help you become a leader in and out of the classroom. Take advantage of them.</p>
                        <a href="#" class="block-anchor">View the stories</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/lunar-anthem.jpg" width="1024" height="685" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Choose</h1>
                    <div>
                        <p>Every day you make decisions that affect your education and your future. Take your choices seriously and use your freedom wisely. Your Iowa education is what you make it. Make it something you and your university can be proud of.</p>
                        <a href="#" class="block-anchor">View the stories</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/finkbine.jpg" width="1024" height="685" alt="" class="slide-img">
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Serve</h1>
                    <div>
                        <p>As an Iowa student, you are a member of many communities, on and off the campus. You have the opportunity and responsibility to be a good neighbor and citizen and to serve the community. Make your community a great place to live.</p>
                        <a href="#" class="block-anchor">View the stories</a>
                    </div>
                </div>
            </li>
        </ul>

        <nav class="slides-navigation">
            <a href="#" class="next">
                <i class="icon-chevron-right"></i>
            </a>
            <a href="#" class="prev">
                <i class="icon-chevron-left"></i>
            </a>
        </nav>
    </div><!-- end #slides -->
    <?php include 'inc/footer.php'; ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery.animate-enhanced.min.js"></script>
    <script src="js/vendor/hammer.min.js"></script>
    <script src="js/plugins-ck.js"></script>
    <script src="js/main-ck.js"></script>
    <script src="js/vendor/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
    <script>
    $(function() {
      var $slides = $('#slides');

      Hammer($slides[0]).on("swipeleft", function(e) {
        $slides.data('superslides').animate('next');
      });

      Hammer($slides[0]).on("swiperight", function(e) {
        $slides.data('superslides').animate('prev');
      });

      $slides.superslides({
        hashchange: true
      });
    });

    </script>
</body>
</html>
