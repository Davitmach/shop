function loginUser() {
    var Login_Email = document.getElementById("Email").value;
    var Login_email_input = document.getElementById('Email');
    var Login_password = document.getElementById("Password").value;
    var Login_password_input = document.getElementById('Password');



    if (!Login_Email) {

        Login_email_input.style.border = '3px solid red'
        Login_email_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    }
    if (!Login_password) {

        Login_password_input.style.border = '3px solid red'
        Login_password_input.style.boxShadow = '0 5px 30px rgba(255, 0, 0, 0.185)'
    }

}