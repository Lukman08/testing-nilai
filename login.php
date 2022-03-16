<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing || Lukman Hakim</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    
    <div class="scroll-down">SCROLL DOWN
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path
                d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z" />
        </svg>
    </div>
    <div class="container"></div>

    
    <div class="modal">
        <div class="modal-container">
            <div class="modal-left">
                <h1 class="modal-title">Selamat Datang!</h1>
                <p class="modal-desc">Mari kita coba hal sederhana yang menakjubkan</p>
                <form name="login">
                    <div class="input-block">
                        <label for="username" class="input-label">Username</label>
                        <input type="text" name="username" id="username" placeholder="Masukan Username">
                    </div>
                    <div class="input-block">
                        <label for="password" class="input-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukan Password">
                    </div>
                    <div class="modal-buttons">
                        <button class="input-button" type="button" onClick="Login()">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="modal-right">
                <img src="image/abc.png">
                    alt="">
            </div>
            <button class="icon-button close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path
                        d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z">
                    </path>
                </svg>
            </button>
        </div>
        <button class="modal-button">Klik disini untuk login</button>
    </div>

    
    <script>

        // Login System Logic
        function Login() {
            var done = 0;
            var username = document.login.username.value;
            username = username.toLowerCase();
            var password = document.login.password.value;
            password = password.toLowerCase();
            if (username == "lh412808@gmail.com" && password == "lh412808@gmail.com") {
                window.location.href = "nilai_matkul.php";
            } else
                if (done == 0) {
                    alert("Username/Password yang anda masukan salah!");
                }
        }


        // Javascript Template 
        const body = document.querySelector("body");
        const modal = document.querySelector(".modal");
        const modalButton = document.querySelector(".modal-button");
        const closeButton = document.querySelector(".close-button");
        const scrollDown = document.querySelector(".scroll-down");
        let isOpened = false;

        const openModal = () => {
            modal.classList.add("is-open");
            body.style.overflow = "hidden";
        };

        const closeModal = () => {
            modal.classList.remove("is-open");
            body.style.overflow = "initial";
        };

        window.addEventListener("scroll", () => {
            if (window.scrollY > window.innerHeight / 3 && !isOpened) {
                isOpened = true;
                scrollDown.style.display = "none";
                openModal();
            }
        });

        modalButton.addEventListener("click", openModal);
        closeButton.addEventListener("click", closeModal);

        document.onkeydown = evt => {
            evt = evt || window.event;
            evt.keyCode === 27 ? closeModal() : false;
        };

    </script>
</body>
</html>