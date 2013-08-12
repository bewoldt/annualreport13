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

<body class="interior">

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
            <a href="#">
                <img src="images/menu_dosl.png" alt="Division of Student Life" class="menu-dosl">
            </a>
        </div>
    </div>

    <!-- Preview List Include -->
    <?php include 'inc/previewlist.php'; ?>

    <article class="article">
		<div class="article-img">
			<img src="images/excel-finkbine.jpg" alt="">
		</div>
		<div class="article-body">
			<h1>The Finkbine Tradition Continues</h1>
			<div class="article-intro">
				<p>Student Health &amp; Wellness launched their new class “Look Once, Think Twice” in Fall 2012 and is specifically designed for students who are in the presence of alcohol, but not consuming alcohol.</p>
			</div>
			<div class="article-meta">
				<p>WORDS BY <em id="page-article-author">Caitlin Scott</em></p>
				<p>PHOTO BY <em>Ben Lewis</em></p>
			</div>
			<div class="article-content">
				<p>The Hancher-Finkbine Medallion is one of Iowa’s most prestigious awards. Receiving the award is an honor and instills pride in its recipients. As a recent graduate and the former UISG president for the 2012-2013 academic year, Nic Pottebaum’s hard work as a campus leader was recognized at the annual Finkbine Dinner.</p>

				<p>“Somewhere along the way I became a campus leader, but I never thought of it as striving for that title,” says Pottebaum. “Rather, I saw the opportunities that made me a campus leader just an opportunity to benefit my fellow students.”</p>

				<p>Pottebaum was one of seven award recipients recognized for their work on campus. This annual tradition of recognizing campus leaders had simple beginnings an event to bring people together on campus. Starting in 1917, dinners sponsored by William Finkbine and Carl Kuhnle were meant to gather leaders on campus, both students and professionals, to create connections and lasting ties on campus. The dinners were so successful that Finkbine created an endowment for them to continue.</p>

				<p>Each year a total of seven students, faculty, staff, and alumni are invited to attend the Finkbine dinner along with the UI president, deans, and other members of the UI. It was Finkbine’s hope that campus leaders would come together to have a better understanding of each other and their shared interest in the traditions and livelihood of the university. Four students, one professor, one staff member, and one alumnus are given awards each year. </p>

				<div class="full-quote"><p>“Every time I just get amazed [by the students] because they do something different that I have just never heard of before.”</p></div>

				<p>“Every time I just get amazed [by the students] because they do something different that I have just never heard of before,” says Belinda Marner, Assistant Vice President for Student Life and Chair of the Finkbine Dinner Committee. “It’s one of the highlights of the year for me because you just think about all the things these people are doing and where they’re going - it’s amazing to think about.”</p>

				<p>Award recipients are honored with medallions to recognize leadership, learning, and loyalty. The tradition of awarding medallions was established in 1964. These medallions are named after William Finkbine as well as Virgil Hancher who was a guest at the first dinner and served as president of the UI for 24 years.</p> 

				<p>Pottebaum believes the process of honoring positive qualities is important at the university. The awards encourage staff, students, faculty, and alumni to be good leaders and community members in the Finkbine tradition.</p> 

				<p>“My experience at Iowa taught me to balance many things while always valuing those around and doing things the right way,” says Pottebaum. “There are countless failures and successes I learned in my four years that will guide me for the rest of my life.”</p>
			</div>
		</div>
	</article>

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

    <!-- Ajaxify -->
    <!-- jQuery ScrollTo Plugin -->
    <script src="//balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script>

    <!-- History.js -->
    <script src="//browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>

    <!-- Ajaxify -->
    <script src="js/vendor/ajaxify-html5.js"></script>

</body>
</html>
