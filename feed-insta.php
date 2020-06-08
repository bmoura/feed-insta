<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=10">
		<meta name="viewport" content="width=device-width">
		<title>Citroën - Novo Aircross - Filme Clicável</title>
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
				font-family: "Arial";
				overflow-y: scroll;
				overflow-x: hidden;
				float: left;
				position: relative;
				width: 100%;
			}

			a, img{
				outline: 0 none;
				text-decoration: none;
				border: 0 none;
			}

			#bt_ver-mais, #bt_ver-mais::before, #instagram, #load{
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-ms-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
			}
			
			#instagram a, #instagram a img{
				-webkit-transition: all 800ms ease-in-out;
				-moz-transition: all 800ms ease-in-out;
				-ms-transition: all 800ms ease-in-out;
				-o-transition: all 800ms ease-in-out;
				transition: all 800ms ease-in-out;
			}

			#instagram{
				color: #cc2181;
				float: left;
				font-size: 15px;
				padding: 0.2%;
				text-align: center;
				line-height: 330px;
				width: 99.6%;
			}

			.success#load{
				opacity: 0;
				filter: alpha(opacity=0);
			}

			#instagram a{
				float: left;
				padding: 0.2%;
				opacity: 0;
				filter: alpha(opacity=0);
				position: relative;
				width: 24.6%;
				overflow: hidden;
			}

			.success#instagram a{
				opacity: 0.8;
				filter: alpha(opacity=80);
			}

			.success#instagram a:hover{
				opacity: 10;
				filter: alpha(opacity=100);
			}

			#instagram a img{
				width: 100%;
				float: left;
			}

			#bt_ver-mais{
				color: #cc2181;
				float: left;
				font-size: 15px;
				font-weight: bold;
				left: 50%;
				margin: 10px 0 10px -40px;
				padding: 0 0 40px;
				position: relative;
				text-align: center;
				text-decoration: none;
				text-transform: uppercase;
				width: 80px;
				display: none;
			}

			#bt_ver-mais:hover{
				color: #FFF;
			}

			#bt_ver-mais::before {
				content: " ";
				border-right: 3px solid #cc2181;
				width: 30px;
				height: 30px;
				position: absolute;
				transform: rotate(45deg);
				left: 50%;
				border-bottom: 3px solid #cc2181;
				margin:5px 0 20px -15px;
				top: 0;
				border-radius: 4px;
			}

			#bt_ver-mais:hover::before{
				margin-top: 7px;
				border-right-color: #FFF;
				border-bottom-color: #FFF;
			}

			.success#bt_ver-mais{
				display: block;
			}

			#bg_ver-mais{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				display: none;
			}

			#bg_ver-mais:before {
				content: "";
				width: 75px;
				height: 75px;
				background-color: #FFF;
				position: absolute;
				left: 50%;
				border-radius: 10px;
				margin: 2.3px 0 2.3px -37.5px;
				background-image: url("../assets/images/AjaxLoader.gif");
				background-position: center;
				background-repeat: no-repeat;
				bottom: 0;
			}

			#bg_ver-mais.show{
				display: block;
			}
		</style>
	</head>
	<body>
		<div id="instagram">
			<p id="load">Carregando imagens...</p>
		</div>
		<a id="bt_ver-mais" href="javascript:;" title="Ver mais">Ver mais</a>
		<div id="bg_ver-mais">&nbsp;</div>
		<script type="text/javascript" src="../assets/js/lib/instagram.min.js"></script>
		<script type="text/javascript">
			var instagram = document.getElementById('instagram'),
				btMais = document.getElementById('bt_ver-mais'),
				bgMais = document.getElementById('bg_ver-mais'),
				load = document.getElementById('load'),
				feed = new Instafeed({
				get: 'user',
				userId: 758182267,
				accessToken: '758182267.9fb62dd.ee021e698f05457595446e75f71259a8',
				target: 'instagram',
				resolution: 'standard_resolution',
				sortBy: 'none',
				mock: false,
				limit: 12,
				template: '<a class="animation" href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
				before: function(e){},
				after: function(e){
					if(!instagram.hasAttribute('class')){
						btMais.setAttribute('class', 'success');
						load.setAttribute('class', 'success');
						setTimeout(function(){
							load.parentNode.removeChild(load);
							instagram.setAttribute('class', 'success');
						}, 350);
					}
				},
				error: function(e){
					instagram.innerHTML = e;
				},
				success: function(e){
					bgMais.removeAttribute('class');
				}
			});
			
			window.onload = function(){
				btMais.addEventListener('click', function(e){
					bgMais.setAttribute('class', 'show');
					if(feed.hasNext()){
						feed.next();
					} else {
						btMais.parentNode.removeChild(btMais);
					}
				});
				feed.run();
			};
			//https://api.instagram.com/v1/users/758182267/media/recent?access_token=758182267.9fb62dd.ee021e698f05457595446e75f71259a8
		</script>
	</body>
</html>