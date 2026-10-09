document.addEventListener("DOMContentLoaded", function() {
    const loginBtn = document.getElementById("loginBtn");
    
    loginBtn.addEventListener("click", function(e) {
        e.preventDefault(); // Mencegah reload halaman
        
        const usernameInput = document.getElementById("username").value;
        const passwordInput = document.getElementById("password").value;
        
        if (usernameInput === "rafel" && passwordInput === "aldino") {
            // Jika benar, arahkan ke halaman utama.html
            window.location.href = "utama.html";
        } else {
            // Jika salah, tampilkan pesan error
            alert("Username atau Password salah!");
        }
    });
});
