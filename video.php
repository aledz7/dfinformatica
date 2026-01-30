<html >
<title>Vídeo</title>
<head>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	height: 100%;
	background: #ecebec;
	overflow:hidden;
}
html {
	height: 100%;
}
</style>

</head>
<body>
<video width="200" src="https://dfinformatica.com.br/Neutra.mp4" height="200" autoplay="" >
</video>

<script type="text/javascript">
var vid = document.querySelector('video');
vid.play()
</script>


<button onClick="vid.play();" type="button" value="asdf" id="botao_player" name="botao_player">asf</button>

<script>
setTimeout(function(){ document.getElementById('botao_player').click(); }, 2000);
</script>
</body>
</html>
