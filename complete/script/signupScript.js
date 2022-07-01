function dropdownMenu() {
    document.getElementById("dropdownList").classList.toggle("show");
    }
    
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var dropdownList = document.getElementById("dropdownList");
        if (dropdownList.classList.contains('show')) {
            dropdownList.classList.remove('show');
        }
    }
}

function cancel_comfirm() {
    if (confirm("Are you sure?") == true) {
        window.open("select_role.php", "_self") // redirect to home
    }
}

function passwordToggle() {
    var getPassword = document.getElementById("password");
    var getConPassword = document.getElementById("confirm_pw");
    if (getPassword.type == "password") {
        getPassword.type = "text";        
    } else {
        getPassword.type = "password";  
    }

    if (getConPassword.type == "password") {
        getConPassword.type = "text";
    } else {
        getConPassword.type = "password";
    }
}

function verifyConfirmPassword() {
    var pw = document.getElementById("password").value;
    var conPw = document.getElementById("confirm_pw").value;

    if(pw != conPw) {
        var message = "Password is not match!";
        document.getElementById('pwMessage').innerHTML = message;
    } else {
        document.getElementById('pwMessage').innerHTML = " ";
    }
}