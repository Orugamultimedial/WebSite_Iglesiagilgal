<link rel="stylesheet" href="./css/social_buttons.css">
<div class="social">
    <a href='//api.whatsapp.com/send?phone=543755688128'>
        <img id="whatsapp-logo" src="./img/whatsapp-icon.png" alt="Iglesia Gilgal">
    </a>
    <a href='https://www.facebook.com/iglegilgaloficial/'>
        <img id="linkedin-logo" src="./img/facebook-icon.png" alt="Iglesia Gilgal">
    </a>
    <a onclick="showContact()">
        <img id="gmail-logo" src="./img/gmail-icon.png" alt="Iglesia Gilgal">
    </a>
</div>

<script>
    function showContact() {
        contact = document.getElementById('container_contact');

        switch (contact.style.display) {
            case 'none':
                contact.style.display = 'block';  
                break;
            case 'block':
                contact.style.display = 'none';
        
            default:
            contact.style.display = 'none';
                break;
        };   
    };
</script>
