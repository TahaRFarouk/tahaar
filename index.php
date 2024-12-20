<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&family=Itim&family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="shortcut icon" href="img/TH Letters Monogram.png" type="image/x-icon">
    <title>TahaR</title>
</head>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: "Poppins", serif;
}

.page1{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 100vh;
    min-height: fit-content;
    
}
.page1-top{
    display: flex;
    width: 100%;
    height: 48%;
}
.page1-bottom{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: calc(100% - 48% - 80px);
    min-height: fit-content;
}
.page1-nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 80px;
}
.page1-nav-left{
    display: flex;
    align-items: center;
    justify-content: center;
    height:100% ;
    width: 30%;
    min-width: 220px;
}
.page1-nav-right{
    display: flex;
    align-items: center;
    height:100% ;
    width:70%;
}
nav{
    display: flex;
    justify-content: right;
    height: 100%;
    width: 100%;
}
nav a {
    display: flex;
    align-items: center;
    height: 100%;
    margin-right: 1em;
    font-size: 1.3rem;
    color: #0d0d0d;
}
nav a img{
    height: 30px;
    margin-right: 0.3em;
}
.page1-top-left{
    display: flex;
    justify-content: center;
    overflow: hidden;
    width: 60%;
    height: 100%;
}
.page1-top-left img{
    transform: scale(1.2);
    height: 100%;
    border-radius: 50%;
    border: 4px solid #fff;
}
.page1-top-right{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1em;
    width: 40%;
    height: 100%;
}
.page1-top-right-description{
    height: 70%;
    width: 100%;
}
.page1-top-right-btns{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    height: 30%;
    width: 100%;
    justify-content: space-around;
}
.page1-top-right-btns button {
    background-color: #fff;
    border-radius: 0.4em;
    border: 0.1em solid #4285f4;
    padding: 0 0.2em;
    margin: 0.1em 0.3em;
}
.page1-top-right-btns button a{
    display: flex;
    justify-content: center;
    font-size: 1.2rem;
    color: #4285f4;
}
.page1-top-right-btns button a img{
    margin-right: 0.3em;
}

.page1-bottom-description{
    min-height: fit-content;
    padding: 1em;
    height: 150px;
    width: 100%;
}
.page1-bottom-description h2{
    text-align: center;
    font-size: 1.5rem;
}
.page1-bottom-logos{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    height: calc(100% - 150px);
    width: 100%;
}
.smallcard{
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #0d0d0d;
    width: 16%;
    min-width: 150px;
    height: 3em;
    border: 1px solid #4285f4 ;
    margin: 1em;
    border-radius: 0.3em;
}
.smallcard img {
    height: 30px;
    margin-right: 0.5em;
}
.smallcard p{
    font-size: 1.3rem;
}
.page2{
    height: 50vh;
    width: 100%;
}
.page2 header{
    text-align: center;
    height: 70px;
    width: 100%;
}
.page2 main {
    height: calc(100% - 70px);
    width: 100%;
    display: flex;
    
}
.main-left{
    height: 100%;
    width: 30%;
    max-width: 250px;
}
.main-right{
    padding: 1em;
    height: 100%;
    width: 70%;
}
.main-right p{
    font-size: 1.2rem;
}
.main-left-top{
    overflow: hidden;
    height: 80%;
    width: 100%;
}
.main-left-top img{
    height: 100%;
    width: 100%;
    border-radius: 50%;
    opacity: 0.8;
    transition: all 0.3s ease;
}
.main-left-top img:hover{
    opacity: 1;
    transform: scale(1.2);
}
.main-left-bottom{
    text-align: center;
    height: 20%;
    width: 100%;
}
.page3{
    display: flex;
    justify-content: space-around;
    align-items: first baseline;
    overflow: hidden;
    height: 100vh;
    width: 100%;
}
.page3-left{
    padding: 1em;
    font-size: 1.2rem;
    height: 100%;
    width: 44%;
}
.page3-left h2{
    text-align: center;
}
.page3-left h3{
    padding-top: 1em;
}
.page3-right{
    height: 100%;
    width: 44%;
}

form{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 2em;
    padding: 3em;
}
form input{
    width: 70%;
    min-width: 250px;
    padding: 1em;
    border-radius: 0.5em;
    border: 2px solid #4285f4;
    margin: 0.5em;
}
form textarea{
    width: 70%;
    padding: 1em;
    border-radius: 0.5em;
    border: 2px solid #4285f4;
    margin: 0.5em;
    min-width: 250px;

}
.send{
    padding: 0.5em;
    font-size: 1.4rem; 
    width: 50%;
    min-width: 150px;
    max-width: 300px;
    border-radius: 1em;
    margin: 0 auto;
    background-color: rgb(0, 94, 25);
    cursor: pointer;
    margin-bottom: 1em;
    border: none;
    transition:all 0.2s linear;
    color: white;
    font-weight: bold;
}
.send:hover{
    width: 60%;
    padding-left: 2em;
    max-width: 800px;
    
} 

@media (max-width:650px){
    .page1{
        height: 120vh;
    }
    .page1-top{
        display: flex;
        flex-direction: column;
    }
    .page1-top-left{
        width: 100%;
        height: 50%;
    }
    .page1-top-right{
        width: 100%;
        min-height: 50%;
    }
    span{
        display: none;
    }   
    .page1-top-right-btns button {
        padding: 0.6em 1.5em;
    }
   
}
@media (max-width:890px){
    .page1-top{
        height: 70%;
    }
    .page1-bottom{
        height: 30%;
    }
    .page1-bottom-description{
        height: 70px;
    }
    .page1-bottom-logos{
        height: 100%; 
    }
    .page2{
        height: 70vh;
    }
    .page3{
        height: 140vh;
        flex-direction: column;
    }
    .page3-left{
        width: 100%;
        height: 35%;
    }
    .page3-right{
        width: 100%;
        height: 65%;
    }
}
@media (min-width:651px) and (max-width:1035px){
    
    .page1-top-left{
        width: 40%;    
    }
    .page1-top-right{
        width: 60%;    
    }
}
    </style>
<body>
    <div class="page1">
        <div class="page1-nav">
            <div class="page1-nav-left">
                <h1>Tahar Farouk</h1>
            </div>
            <div class="page1-nav-right">
                <nav>
                    <a href=""><img src="img/github-sign.png" alt=""><span>git-hub</span></a>
                    <a href=""><img src="img/email.png" alt=""><span>Email</span></a>
                    <a href=""><img src="img/message.png" alt=""><span>LinkedIn</span></a>
                    
                </nav>   
            </div>

        </div>
        <div class="page1-top">
            <div class="page1-top-left">
                <img src="img/real1.png" alt="">
            </div>
            <div class="page1-top-right">
                <div class="page1-top-right-description">
                    <h2>Hi i'm Tahar &#128075;</h2>
                    <p>I'm a dedicated third-year Computer Science student at the Ecole Normale Superieure of Kouba. With a strong foundation in programming languages like [C,Python,Html,Css,javascript], data structures, and algorithms,I have a passionate about leveraging technology to solve complex problems.</p>
                </div>
                <div class="page1-top-right-btns">
                    <button><a href="#skills"><img src="img/coding.png" alt="">Skills</a></button>
                    <button><a href="#testimony"><img src="img/pencil.png" alt="">Testimony</a></button>
                    <button><a href="#contact"><img src="img/email1.png" alt="" >Contact</a></button>
                </div>
               
            </div>
        </div>
        <div class="page1-bottom" id="skills">
            <div class="page1-bottom-description">
                <h2>Skills</h2>
                <p>I included these programming languages in my list to demonstrate my foundational knowledge, while also acknowledging that I am still actively learning and growing in these areas</p>
            </div>
            <div class="page1-bottom-logos">
                <div class="smallcard">
                    <img src="img/css-3.png" alt="" srcset="">
                    <p>Css</p>
                </div>
                <div class="smallcard">
                    <img src="img/html-5.png" alt="" srcset="">
                    <p>Html</p>
                </div>
                <div class="smallcard">
                    <img src="img/js.png" alt="" srcset="">
                    <p>javascript</p>
                </div>
                <div class="smallcard">
                    <img src="img/python.png" alt="" srcset="">
                    <p>Python</p>
                </div>
                <div class="smallcard">
                    <img src="img/icons8-c-programming-48.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
     <div class="page2" id="testimony">
        <header>
            <h2>Testimony</h2>
        </header>
        <main>
            <div class="main-left">
                <div class="main-left-top">
                    <img src="img/Default_pfp.svg.png" alt="">
                </div>
                <div class="main-left-bottom">
                    <h3>Unknown</h3>
                </div>
            </div>
            <div class="main-right">
                <p>I was incredibly disappointed with the website builder. The user interface was clunky and counterintuitive ,The limited customization options and lack of flexibility .Overall, my experience with this website builder was extremely negative and I would not recommend it to anyone. <i class="fa fa-thumbs-down" style="margin-right: 0.5em;"></i><i class="fa fa-thumbs-down"style="margin-right: 0.5em;"></i><i class="fa fa-thumbs-down"></i></p>
            </div>
        </main>
    </div>
    <div class="page3" id="contact">
        <div class="page3-left">
            <h2>Contact</h2>
            <h3>Get In Touch</h3>
            <p> If you'd like to support my work or have any questions, please don't hesitate to reach out. I'm always happy to connect and discuss new ideas</p>
        </div>
        <div class="page3-right">
            <form action="contact.php" method="post" id="contactForm">
                <input type="text" name="name" id="name" placeholder="your name" required >
                <input type="text" name="number" id="number" placeholder="your number" >
                <input type="email" name="email" id="email" placeholder="your email" required>
                <input type="text" name="subject" id="subject" placeholder="your subject" required>
                <textarea name="message" id="message" cols="40" rows="5" placeholder="your message" required></textarea>
                <button type="submit" class="send">Send</button>
            </form>
        </div>
    </div>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
         emailjs.init({
         publicKey: "eCtHYuWyPQvXPQNq-",
         });
        })();
    </script> 
    <script src="js/script.js"></script>
</body>
</html>
