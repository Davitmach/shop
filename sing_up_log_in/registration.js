
function registerUser() {
    var firstName = document.getElementById("Name").value;
    var lastName = document.getElementById("Lastname").value;
    var photo = document.getElementById("Img").value;
    var Email_val = document.getElementById('Email').value;
    var Password_Val = document.getElementById('Password').value;
    var firstname_input = document.getElementById("Name");
    var lastname_input = document.getElementById("Lastname");
    var photo_input = document.getElementById("Img");
    var Email_input = document.getElementById('Email');
    var Password_input = document.getElementById('Password');


 

    // Валидация имени
    if (!firstName || !/^[a-zA-Z]+$/.test(firstName)) {
 
     
        firstname_input.style.border = '3px solid red'
        firstname_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    } else {
        firstname_input.style.border = '3px solid green'
        firstname_input.style.boxShadow = '0 5px 30px rgba(0, 255, 4, 0.185)'
    }

    // Валидация фамилии
    if (!lastName || !/^[a-zA-Z]+$/.test(lastName)) {
        
        lastname_input.style.border = '3px solid red'
        lastname_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    } else {
        lastname_input.style.border = '3px solid green'
        lastname_input.style.boxShadow = '0 5px 30px rgba(0, 255, 4, 0.185)'
    }

    // email
    if (!Email_val || !/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(Email_val)) {

     
       
        Email_input.style.border = '3px solid red'
        Email_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    } else {
        Email_input.style.border = '3px solid green'
        Email_input.style.boxShadow = '0 5px 30px rgba(0, 255, 4, 0.185)'
    }


    ///// password
    if (!Password_Val) {
   
    
        Password_input.style.border = '3px solid red'
        Password_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    } else {
        Password_input.style.border = '3px solid green'
        Password_input.style.boxShadow = '0 5px 30px rgba(0, 255, 4, 0.185)'
    }

    // Валидация фотографии
    if (!photo) {
      
        photo_input.style.border = '3px solid red'
        photo_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    } else {
        photo_input.style.border = '3px solid green'
        photo_input.style.boxShadow = '0 5px 30px rgba(0, 255, 4, 0.185)'


       
    }
}
