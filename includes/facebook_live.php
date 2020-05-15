<link rel="stylesheet" href="./css/facebook_live.css">

<a href="#" onclick="videoplay()">
<div id='facebook_live'>
    <h5>Estamos en vivo</h5>
    <img id='facebook_live_img' src="./img/facebook_live-icon.png" alt="facebook live">
</div>
</a>

<script>
    function videoplay(){
        URL = './includes/live.php'; 
        newWindow = window.open(URL,"ventana1","width=400px,height=400px,scrollbars=NO");
    };
</script>