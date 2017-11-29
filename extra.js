
document.querySelector("#email-form").querySelector(".w-button").addEventListener("click", function () {
            let email = document.querySelector("#E-mail").value;

            var xhr = new XMLHttpRequest();
            var body = 'email=' + encodeURIComponent(email);

            xhr.open("POST", '/email.php', true)
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

            xhr.send(body);
          }, false);
