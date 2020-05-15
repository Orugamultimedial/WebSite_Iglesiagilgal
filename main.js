function createUser() {
    element = document.getElementById('create_user');

    if (element.style.display == 'none') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    };

};

function modifyActivities() {
    activities = document.getElementById('container_existingactivities');
    buttonActive = document.getElementById('modifyActivities')

    if (activities.style.display == 'none') {
        activities.style.display = 'block';


    } else {
        activities.style.display = 'none';

    };

};


function buttonActived(clicked_id) {
    console.log("se activo " + clicked_id);
    button = document.getElementById(clicked_id);
    if (button.classList == 'desactive') {
        button.classList.add('active');
        button.classList.remove('desactive');
    } else {
        button.classList.add('desactive');
        button.classList.remove('active');
    }
};



function modifyFacebookUrl() {
    facebookUrl = document.getElementById('container_facebok_live_url');
    buttonActive = document.getElementById('modifyActivities');

    switch (facebookUrl.style.display) {
        case 'none':
            facebookUrl.style.display = 'block';
            break;
        case 'block':
            facebookUrl.style.display = 'none';

        default:
            facebookUrl.style.display = 'none';
            break;
    }
};


function SessionActive(){

};