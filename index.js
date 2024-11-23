function sendMail(){
    let parms = {
        name : document.getElementById("name").value ,
        email : document.getElementById("email").value ,
        message : document.getElementById("messsage").value ,
        subject :document.getElementById("subject").value

    }
    emailjs.send("service_rl6gal5","template_4aka1kb",parms).then(alert("email sent"))
}