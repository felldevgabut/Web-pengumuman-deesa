document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("userLoginForm");
    
    loginForm.addEventListener("submit", function(e) {
        e.preventDefault();
        
        const usernameInput = document.getElementById("username").value.trim();
        const passwordInput = document.getElementById("password").value;
        
        // Pengecekan username "user" dan password "iv"
        if (usernameInput === "user" && passwordInput === "iv") {
            window.location.href = "index.php";
        } else {
            alert("Username atau Password salah!");
        }
    });
});
