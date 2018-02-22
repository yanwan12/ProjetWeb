function chkpass() {
                var pass = document.getElementById("pass");
                var cpass = document.getElementById("cpass"); 
                var subm = document.getElementById('submit');
                var badColor = "#ff6666";
                var goodColor = "#66cc66";
                var message = document.getElementById('confirmMessage');
                if (cpass.value != pass.value) {
                  
                   subm.disabled = true;
                   message.style.color = badColor;
                   message.innerHTML ="Les Mots de Passes ne correspondent pas!";
                }
                else
                {
                    message.style.color = goodColor;
                    message.innerHTML = "Les Mots de Passes correspondent!";
                    subm.disabled = false;
                }
               
            }
