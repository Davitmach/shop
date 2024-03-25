function Submit_mail() {
var Footer_email_value = document.getElementById('Footer_email').value;
var Error_message = document.getElementById("Error_message");
var Error_box = document.getElementById("Error_box");
var validation = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!Footer_email_value) {
        Error_message.innerHTML = 'Please fill out this field.';
        Error_box.style.backgroundColor = '#f1c40f';
        Error_box.style.display = 'block';
        Error_box.innerHTML = '<i style="color:white" class="fa-solid fa-exclamation"></i><p>ONE OR MORE FIELDS HAVE AN ERROR. PLEASE CHECK AND TRY AGAIN.</p>'
    }
    else if(!validation.test(Footer_email_value)) {
        Error_message.innerHTML = 'Please fill out this field.';
        Error_box.style.backgroundColor = '#f1c40f';
        Error_box.style.display = 'block';
        Error_box.innerHTML = '<i style="color:white" class="fa-solid fa-exclamation"></i><p>ONE OR MORE FIELDS HAVE AN ERROR. PLEASE CHECK AND TRY AGAIN.</p>'
    }
    else {
        
        Error_message.innerHTML = '';
        Error_box.style.animation = '';
        setTimeout(() => {
            Error_box.style.backgroundColor = '#1abc9c';
            Error_box.innerHTML = '';
            Error_box.innerHTML = '<i style="color:white" class="fa-solid fa-thumbs-up"></i><p>THANK YOU FOR YOUR MESSAGE. IT HAS BEEN SENT.</p>'
        }, 2000);
       
    }

}