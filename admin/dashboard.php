<?php 

error_reporting('0');

include('config.php'); 

session_start();



if($_SESSION['memid']=='')

{

header('location:index.php');

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">



	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="Neon Admin Panel" />

	<meta name="author" content="" />



	<title><?php echo $shopname; ?> | Dashboard</title>



	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">

	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">

	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<link rel="stylesheet" href="assets/css/neon-core.css">

	<link rel="stylesheet" href="assets/css/neon-theme.css">

	<link rel="stylesheet" href="assets/css/neon-forms.css">

	<link rel="stylesheet" href="assets/css/custom.css">



	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<script>$.noConflict();</script>






<style>

.tile-stats.tile-neon-red {

    background: #146dcc;

}

</style>

</head>

<body class="page-body  page-fade gray" data-url="http://neon.dev">



<div class="page-container">

	

	<?php include('leftside_menu.php'); ?>



	<div class="main-content">

				

	<?php include('top.php'); ?>

		

		<hr />

		

		<script type="text/javascript">

		jQuery(document).ready(function($) 

		{

			// Sample Toastr Notification

			setTimeout(function()

			{			

				var opts = {

					"closeButton": true,

					"debug": false,

					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",

					"toastClass": "black",

					"onclick": null,

					"showDuration": "300",

					"hideDuration": "1000",

					"timeOut": "5000",

					"extendedTimeOut": "1000",

					"showEasing": "swing",

					"hideEasing": "linear",

					"showMethod": "fadeIn",

					"hideMethod": "fadeOut"

				};

		

				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);

			}, 3000);

			

			// Sparkline Charts

			$(".top-apps").sparkline('html', {

			    type: 'line',

			    width: '50px',

			    height: '15px',

			    lineColor: '#ff4e50',

			    fillColor: '',

			    lineWidth: 2,

			    spotColor: '#a9282a',

			    minSpotColor: '#a9282a',

			    maxSpotColor: '#a9282a',

			    highlightSpotColor: '#a9282a',

			    highlightLineColor: '#f4c3c4',

			    spotRadius: 2,

			    drawNormalOnTop: true

			 });

		

			$(".monthly-sales").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5,4,5,6,7,8,6,7,6,3,2], {

				type: 'bar',

				barColor: '#ff4e50',

				height: '55px',

				width: '100%',

				barWidth: 8,

				barSpacing: 1

			});	

			

			$(".pie-chart").sparkline([2.5,3,2], {

			    type: 'pie',

			    width: '95',

			    height: '95',

			    sliceColors: ['#ff4e50','#db3739','#a9282a']

			});

		    

		    

			$(".daily-visitors").sparkline([1,5,5.5,5.4,5.8,6,8,9,13,12,10,11.5,9,8,5,8,9], {

			    type: 'line',

			    width: '100%',

			    height: '55',

			    lineColor: '#ff4e50',

			    fillColor: '#ffd2d3',

			    lineWidth: 2,

			    spotColor: '#a9282a',

			    minSpotColor: '#a9282a',

			    maxSpotColor: '#a9282a',

			    highlightSpotColor: '#a9282a',

			    highlightLineColor: '#f4c3c4',

			    spotRadius: 2,

			    drawNormalOnTop: true

			 });

		

		

			$(".stock-market").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5], {

			    type: 'line',

			    width: '100%',

			    height: '55',

			    lineColor: '#ff4e50',

			    fillColor: '',

			    lineWidth: 2,

			    spotColor: '#a9282a',

			    minSpotColor: '#a9282a',

			    maxSpotColor: '#a9282a',

			    highlightSpotColor: '#a9282a',

			    highlightLineColor: '#f4c3c4',

			    spotRadius: 2,

			    drawNormalOnTop: true

			 });

		

			 

			 $("#calendar").fullCalendar({

				header: {

					left: '',

					right: '',

				},

				

				firstDay: 1,

				height: 200,

			});

		});

		

		

		function getRandomInt(min, max) 

		{

			return Math.floor(Math.random() * (max - min + 1)) + min;

		}

		</script>

		




		<!-- Footer -->

		<?php include('footer.php'); ?>





	</div>



		

	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

	

		<div class="chat-inner">

	

	

			<h2 class="chat-header">

				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>

	

				<i class="entypo-users"></i>

				Chat

				<span class="badge badge-success is-hidden">0</span>

			</h2>

	

	

			<div class="chat-group" id="group-1">

				<strong>Favorites</strong>

	

				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>

				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>

				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>

				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>

			</div>

	

	

			<div class="chat-group" id="group-2">

				<strong>Work</strong>

	

				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>

				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>

				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>

			</div>

	

	

			<div class="chat-group" id="group-3">

				<strong>Social</strong>

	

				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>

				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>

			</div>

	

		</div>

	

		<!-- conversation template -->

		<div class="chat-conversation">

	

			<div class="conversation-header">

				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

	

				<span class="user-status"></span>

				<span class="display-name"></span>

				<small></small>

			</div>

	

			<ul class="conversation-body">

			</ul>

	

			<div class="chat-textarea">

				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>

			</div>

	

		</div>

	

	</div>

	

	

	<!-- Chat Histories -->

	<ul class="chat-history" id="sample_history">

		<li>

			<span class="user">Art Ramadani</span>

			<p>Are you here?</p>

			<span class="time">09:00</span>

		</li>

	

		<li class="opponent">

			<span class="user">Catherine J. Watkins</span>

			<p>This message is pre-queued.</p>

			<span class="time">09:25</span>

		</li>

	

		<li class="opponent">

			<span class="user">Catherine J. Watkins</span>

			<p>Whohoo!</p>

			<span class="time">09:26</span>

		</li>

	

		<li class="opponent unread">

			<span class="user">Catherine J. Watkins</span>

			<p>Do you like it?</p>

			<span class="time">09:27</span>

		</li>

	</ul>

	

	

	

	

	<!-- Chat Histories -->

	<ul class="chat-history" id="sample_history_2">

		<li class="opponent unread">

			<span class="user">Daniel A. Pena</span>

			<p>I am going out.</p>

			<span class="time">08:21</span>

		</li>

	

		<li class="opponent unread">

			<span class="user">Daniel A. Pena</span>

			<p>Call me when you see this message.</p>

			<span class="time">08:27</span>

		</li>

	</ul>



	

</div>











	<!-- Imported styles on this page -->

	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">

	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">



	<!-- Bottom scripts (common) -->

	<script src="assets/js/gsap/main-gsap.js"></script>

	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>

	<script src="assets/js/bootstrap.js"></script>

	<script src="assets/js/joinable.js"></script>

	<script src="assets/js/resizeable.js"></script>

	<script src="assets/js/neon-api.js"></script>

	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>





	<!-- Imported scripts on this page -->

	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>

	<script src="assets/js/jquery.sparkline.min.js"></script>

	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>

	<script src="assets/js/rickshaw/rickshaw.min.js"></script>

	<script src="assets/js/raphael-min.js"></script>

	<script src="assets/js/morris.min.js"></script>

	<script src="assets/js/toastr.js"></script>

	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>

	<script src="assets/js/neon-chat.js"></script>





	<!-- JavaScripts initializations and stuff -->

	<script src="assets/js/neon-custom.js"></script>





	<!-- Demo Settings -->

	<script src="assets/js/neon-demo.js"></script>



</body>

</html>