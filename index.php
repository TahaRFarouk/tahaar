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