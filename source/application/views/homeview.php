<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>/statics/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?=base_url()?>/statics/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">SEOAppers</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
				<?php foreach($websites as $site) { ?>
				
					<li class="nav-header"><?=$site->name?></li>
					
					<?php foreach($crawls["$site->website_id"] as $crawl) { ?>
						
						<li>
							<a href="<?=base_url()?>index.php/home/index/<?=$crawl->crawl_id?>">Crawl <?=$crawl->date_created?></a>
						</li>
						
					<?php } ?>
				
				<?php } ?>
			
			</ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

          <div class="hero-unit">
			  <div><a href="#" class="btn btn-success" style="float: right; font-size: 140%;">JeGaDe Score<br /><span style="font-size: 210%;">82</span></a></div>
			<h1>mcw-partner.de - 2012-08-23 01:44</h1>
			<p>Hier kommen ein paar lustige Diagramme mit performance-Daten von Jens.</p>
          </div>

		
		<?php foreach($pages as $page) { ?>
		
		<ul class="breadcrumb" style="margin-bottom: 0;">
			<li><a href="#"><?=$page['page_data']->path?></a></li>
			<li style="float: right;"><a href="#" style="color: #000;text-decoration: underline;" data-toggle="collapse" data-target="#result<?=$page['page_data']->page_id?>">- Ergebnisse verbergen</a></li>
		</ul>
		
		<div id="result<?=$page['page_data']->page_id?>" class="accordion-group in collapse" style="margin: 4px 0 8px 0;">
				<div class="accordion-inner" style="border-top: 0;">

							<div class="span8">
							
								<?php foreach($page['page_items'] as $page_item) { ?>
								<dl class="dl-horizontal">
								<dt><?=$page_item->page_item_key?></dt>
								<dd><?=$page_item->page_value?></dd>
								</dl>
								<?php } ?>
	
							</div>
							<div class="span4">
								Fuuu Bar
							</div>

				</div>
		</div>
		<?php } ?>
		
		<ul class="breadcrumb" style="margin-bottom: 0;">
			<li><a href="#">..</a> <span class="divider">/</span></li>
			<li><a href="#">philosophie-steuerberatung</a></li>
			<li style="float: right;"><a href="#" style="color: #000;text-decoration: underline;" data-toggle="collapse" data-target="#result21">- Ergebnisse verbergen</a></li>
		</ul>

		<div id="result21" class="accordion-group in collapse" style="margin: 4px 0 8px 0;">
				<div class="accordion-inner" style="border-top: 0;">

							<div class="span8">

								<dl class="dl-horizontal">
								<dt>meta title</dt>
								<dd>Steuerberater in Rüsselsheim - tax advisory services Rüsselsheim</dd>
								</dl>

								<dl class="dl-horizontal">
								<dt>meta descr</dt>
								<dd>Leistungen der Steuerberatung umfassen gestaltende und deklatorische Steuerberatung. Ferner die Rechtsformwahl, Unternehmensnachfolge, Erbschaftsteuer und Beratung von Vereinen, Stiftungen.</dd>
								</dl>

								<dl class="dl-horizontal">
								<dt>meta keywords</dt>
								<dd>Steuerberatung, Rechtsform, Unternehmensnachfolge, Erbschaftsteuer, Beratung, Vereine, Stiftung</dd>
								</dl>

								<dl class="dl-horizontal">
								<dt>Heading 1</dt>
								<dd>Steuerberatung</dd>
								</dl>

								<dl class="dl-horizontal">
								<dt>Heading 2</dt>
								<dd>...</dd>
								</dl>

								<dl class="dl-horizontal">
								<dt>Heading 2</dt>
								<dd>...</dd>
								</dl>

							</div>
							<div class="span4">
								Le coque sportiv!
							</div>

				</div>
		</div>

		

          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="<?=base_url()?>statics/js/bootstrap.js"></script>

			<script type="text/javascript">
				$(".collapse").collapse()
			</script>
<!--
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
-->
  </body>
</html>
