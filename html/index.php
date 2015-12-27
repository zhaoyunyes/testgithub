<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
		$pResUrl = './';
		$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
	//if (empty($_GET['ref'])) $_GET['ref'] = '';

	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-68457026;

	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Sconti fino al 85% su Driver Booster PRO – Promozione natalizia di IObit</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
		<?php echo $gJavascript['public'];?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
			function decreasingPacks(){
				$.ajax({
					type: "GET",
					url: "novxmassale.php",
					data: "action=getPacks&r="+Math.random(),
					success: function(packs){
						$('#packs, #packs-floatlayer').html(packs);
						setTimeout('decreasingPacks()', 10000);
					}
				});
			}
			setTimeout('decreasingPacks()', 10000);
		</script>
	</head>
	<body>
	  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

    <!-- header -->
    <div class="header">
    	<!-- header-top -->
    	<div class="header-top">
    		<div class="wrapper">
					<a href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png"/></a>
	        <ul class="counttime clearfix" id="counttime">
	        	<li><span>00</span>Ore</li>
	        	<li><span>00</span>Min</li>
	        	<li><span>00</span>Sec</li>
	        	<li class="ms"><span>000</span>Ms</li>
	        </ul>
    		</div>
			</div>
    	<!-- header-top end -->
      <div class="clear"></div>
      <!-- banner -->
      <div class="banner">
      	<div class="wrapper">
					<h1>Natale con tuoi,prezzi super con noi!</h1>
	        <div class="product-box itema clearfix">
	          <img src="<?php echo $pResUrl; ?>images/db-boxshot-header.png"/>
	          <ul>
	            <li class="price"><strong>€24,90</strong><del>€74,85</del></li>
	            <li class="num">1PC / Anno</li>
	          </ul>
	          <dl>
	            <dd><a href="http://www.iobit.com/buy.php?product=it-db31pcsdpf&ref=it_db33pcsdpfpurchase1511&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1511-it');"><span></span>Attiva Ora</a></dd>
	            <dt class="hidden"></dt>
	          </dl>
	        </div>
	        <div class="product-box itemb clearfix">
	          <img src="<?php echo $pResUrl; ?>images/db-boxshot-big-header.png"/>
	          <ul>
	            <li class="price"><strong>€25,90</strong><del>€209,67</del></li>
	            <li class="num">3PC / Anno </li>
	          </ul>
	          <dl>
	            <dd><a href="http://www.iobit.com/buy.php?product=it-db33pciusdpf&ref=it_db33pciusdpfpurchase1511&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1511-it');"><span></span>Attiva Ora</a></dd>
	            <dt><img src="<?php echo $pResUrl; ?>images/icon-santa-caus-shoes.png"/><em><?php echo $buyNum ?> </em>personas han comprado</dt>
	          </dl>
	        </div>
      	</div>
			</div>
			<!-- banner end -->
		</div>
    <!-- header end -->
    <!-- main -->
    <div class="main">
      <!-- intro -->
      <div class="intro clearfix">
      	<div class="content">
					<div class="wrapper">
	          <h2>Goditi più privilegi nella nuova versione di Driver Booster 3 PRO!<span><span id="packs"><?php echo $packsNum ?> </span>Pacchetti rimasti oggi!</span></h2>
	          <img src="<?php echo $pResUrl; ?>images/db-boxshot-interface.jpg"/>
	          <ul>
	            <li><img src="<?php echo $pResUrl; ?>images/icon-intro-01.png"/>Sblocca la limitazione della velocità dell'aggiornamento dei Driver</li>
	            <li><img src="<?php echo $pResUrl; ?>images/icon-intro-02.png"/>Goditi la priorità per aggiornare più driver obsoleti o difficili da trovare</li>
	            <li><img src="<?php echo $pResUrl; ?>images/icon-intro-03.png"/>Supporta più componeti di gioco per la migliore esperienza di gioco</li>
	            <li><img src="<?php echo $pResUrl; ?>images/icon-intro-04.png"/>Driver Backup per la sicurezza del ripristinamento</li>
	            <li><a href="">Scopri più sulla versione PRO &gt;&gt;</a></li>
	          </ul>
	        </div>
      	</div>
       </div>
      <!-- intro end -->
    </div>
    <!-- main end -->


    <script type="text/javascript">
      $(function(){
        $(window).on('scroll', function () {
          var scrollHeight = $("#header .buybtn").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
            $('#floatlayer').addClass('on');
          } else {
            $('#floatlayer').removeClass('on');
          }
        });

        $("#user-rev .users li").mouseover(function(event) {
            var num = $(this).index();
          $("#user-rev .users li").each(function(index, el) {
            $(this).removeClass('current');
          });
          $(this).addClass('current');
          $("#user-rev dl").each(function(index, el) {
            $(this).removeClass('show').addClass('hidden')
          });
            $("#user-rev dl").eq(num).removeClass('hidden').addClass('show');
        });

        cycleCountdown();
      });

      function cycleCountdown(){
        var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
        var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
        d = MApp(2.2).packages.zeroize(datetime[0], 2);
        h = MApp(2.2).packages.zeroize(datetime[1], 2);
        i = MApp(2.2).packages.zeroize(datetime[2], 2);
        s = MApp(2.2).packages.zeroize(datetime[3], 2);
        mi = MApp(2.2).packages.zeroize(datetime[4], 3);
        $("#counttime li span").eq(0).html(h).end().eq(1).html(d).end().eq(2).html(s).end().eq(3).html(mi+"<sup>*</sup>");
        setTimeout('cycleCountdown()', 1);
      }

      function goTaget(target) {
        var Theigth = target.offset().top - 160;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      }
    </script>
	</body>
</html>