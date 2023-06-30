var form = document.getElementById("contactForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "send_email.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
                // You can perform any additional actions here after receiving the response from the server
            }
        };
        xhr.send(formData);
        console.log("Thank you")
    });