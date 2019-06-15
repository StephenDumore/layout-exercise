<?php 
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
       
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Layout</title>
       <style>
        ul{
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #373c4a;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        li {
          display: block;
          color: #ebebeb;
          font-size: 20px;
            font-weight: 200;
            padding-left: 1em;
            padding-right: 1em;
            padding-bottom: .5em;
            padding-top: .5em;
            margin: .2em;
            border-style: solid;
            border-color: #4f5663;
            border-width: 2px;
        }
        .parallaxtxt{
            position: absolute;
            top: 20%;
            width: 100%;
            text-align: center;
        }
        .herotxt{
            font-size: 60px;
            color: white;
            letter-spacing: 3px;
            font-weight: 100;
            text-shadow: 2px 2px black;
            margin-bottom: 0;
        }
        .brandstatment {
            color: white;
            text-shadow: 1px 1px black;
            font-weight: 200;
            margin-top: 0;
        }
        body{
            margin: 0px;
            font-family: "Open Sans";
        }
        .parallax {
            background-image: url(img/img11.jpg);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
         *{
            box-sizing: border-box;
        }
        
        .headlineimgs{
            display: flex;
            justify-content: center;
            flex-wrap: nowrap; 
            width: 60%;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        
        .headlineimgs > div {
            margin: 10px;
            justify-content: center;
            width: 33.3%;
            background-color: #f0f0f0;
        }
        .ptxt{
            padding: 8px;
            font-size: 15px;
            margin-top: 5px;
            
        }
        .hl1{
            font-size: 18px;
            color: #1c8a2a;
            margin: 5px;
        }
        .hl2{
            font-size: 18px;
            color: #1787bf;
            margin: 5px;
        }
         .hl3{
            font-size: 18px;
            color: #666666;
            margin: 5px;
        }
        
        .button1{
            font-size: 15px;
            color: white;
            background-color: #1c8a2a;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        .button2{
            font-size: 15px;
            color: white;
            background-color: #1787bf;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-bottom: 20px;
        }
          .button3{
            font-size: 15px;
            color: white;
            background-color: #852407;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        
        .imgs123 {
            max-width: 100%;
        }
        
        .twocolumn {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap; 
            width: 60%;
            margin: auto;
            padding-bottom: 40px;
        }
        .ptitle{
            font-size: 18px;
            color: #474747;
            text-align: center
        }
        
        .twocolumn > div {
            margin: 10px;
            justify-content: center;
            width: 50%;
            background-color: #f0f0f0;
        }
        .imgs12 {
            max-width: 100%;
        }
        
        .parallax2 {
            background-image: url(img/img13.jpg);
            min-height: 280px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .ourservices {
            text-align: center;
            color: white;
            font-weight: 200;
            text-shadow: 2px 2px #a8a8a8;
            padding-top: 60px;
            margin: auto;

        }
        .parallaxp {
            width: 60%;
            text-align: center;
            color: white;
            margin-left: auto;
            margin-right: auto;
        }
        
        .fourcolumn {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap; 
            width: 60%;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .fourcolumn > div {
            margin: 10px;
            justify-content: center;
            width: 50%;
            background-color: #f0f0f0;
        }
        .fourcolumnimg {
            max-width: 100%;
        }
        
        .onecolumn {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap; 
            width: 60%;
            margin: auto;
            padding-bottom: 40px;
        }
        .onecolumn > div {
            margin: 10px;
            justify-content: center;
            width: 100%;
            background-color: #f0f0f0;
        }
        .img1 {
            max-width: 100%;
        }
        
        .parallax3 {
            background-image: url(img/img14.jpg);
            min-height: 520px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /*FORM*/
        .form-title {
            letter-spacing: 2px;
            text-align: center;
            color: white;
            font-weight: 100;
            text-shadow: 2px 2px black;
        }
        .form {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap; 
            width: 40%;
            margin: auto;   
        }
        .form > div {
            
        }
        
        .transbox {
            background-color: #f0f0f0;
            opacity: .5;
            border-radius: 6px;
            padding-bottom: 22px;
            padding-top: 22px;
            padding-left: 42px;
            padding-right: 42px;
            z-index: -1;
        }
        
        div.transbox p {
            z-index: 3;
            color: black;
            margin: 0;
            text-align: center;
        }
        
        .formbox {
            background-color: #f0f0f0;
            opacity: .5;
            border-radius: 6px;
            font-family: open sans;
            border: none;
            padding: 8px;
            padding-right: 30%;
            color: black;
            margin-bottom: 20px;
        }
        
        .message {
            background-color: #f0f0f0;
            opacity: .5;
            border-radius: 6px;
            font-family: open sans;
            resize: vertical;
            border: none;
        }
        .boxes {
            flex-direction: column;
        }
        .boxes > div {
            width: 50%;
        }
        
        .send {
            font-size: 15px;
            background-color: black;
            color: white;
            border-style: solid;
            border-width: 1px;
            border-radius: 5px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
            float: right;
        }
        
        .lower-form-elements {
            display: flex;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
        /*FOOTER*/
        .footer {
            text-align: center;
        }
        .footer h1{
            color: #666666;
             font-style: italic;
            font-weight: 100;
        }
        .footerinfo {
            color: #bdbdbd;
            font-style: italic;
        }
        .vline {
            border-style: solid;
            border-width: 1px;
            color: #f7f7f7;
            margin-top: 50px;
            margin-bottom: 25px;
        }
        .copyr{
            color: #828282;
            margin-bottom: 75px;
            font-size: 15px;
        }
        .up-arrow {
          flex: 50%;
        }
    </style> 
</head>
<body>
   <ul>
       <li>Homepage</li>
       <li>About Us</li>
       <li>Services</li>
       <li>Contact</li>
       <li>External</li>
   </ul>
   
    <div class = "parallax">
       <div class = "parallaxtxt">
        <h1 class = "herotxt">HERO TEXT</h1>
        <h2 class = "brandstatment">Branding statment here</h2>
        </div>
        </div>
        
           <div class = "headlineimgs">
   <div ><img src="img/img1.jpg" alt="an image" class = "imgs123">
   <h2 class="hl1">Headline</h2>
   <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repellendus, beatae necessitatibus consequatur eos maxime praesentium repellat ab accusantium tenetur aspernatur,</p>
   <button type="button" class ="button1">Button Green</button></div>
   
   <div><img src="img/img2.jpg" alt="other img" class = "imgs123">
   <h2 class="hl2">Headline</h2>
   <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod quo dignissimos animi, culpa inventore. Atque error incidunt fugiat reiciendis ipsum asperiores iste veritatis iure corporis illum, hic ipsa provident ut!</p>
   <button type="button" class ="button2">See Details</button></div>
   
   <div><img src="img/img3.jpg" alt="Other img" class = "imgs123">
   <h2 class="hl3">Headline</h2>
   <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod quo dignissimos animi, culpa inventore. Atque error incidunt fugiat reiciendis ipsum asperiores iste veritatis iure corporis illum, hic ipsa provident ut!</p><button type="button" class="button3">Button Red</button></div>
    </div>
    
    <div class = "twocolumn">
        <div>
           <img src="img/img4.jpg" alt="A steaming pipe" class = "imgs12">
            <h2 class="ptitle">Two Colunmn Left Side</h2>
            <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, similique non cupiditate consectetur inventore est rerum esse nam odit, ipsa officia quam! Est minima, illum aliquid eos quidem porro repellendus.</p>
            <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum natus facere quos officiis corrupti magnam est molestias, in nulla fuga ratione nemo, aut deleniti delectus voluptatibus quisquam blanditiis nam laboriosam!</p>
        </div>
        
        <div>
           <img src="img/img5.jpg" alt="A sunset over the ocean" class = "imgs12">
            <h2 class="ptitle">Two Column Right Side</h2>
            <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, similique non cupiditate consectetur inventore est rerum esse nam odit, ipsa officia quam! Est minima, illum aliquid eos quidem porro repellendus.</p>
            <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum natus facere quos officiis corrupti magnam est molestias, in nulla fuga ratione nemo, aut deleniti delectus voluptatibus quisquam blanditiis nam laboriosam!</p>
        </div>
    </div>
    
    <div class = "parallax2">
        <div class = "parallax2txt">
            <h1 class="ourservices">Our Services</h1>
            <p class="parallaxp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum neque dolorum odio enim soluta atque at rerum dolores magni maxime, beatae dignissimos consectetur voluptatem ut inventore itaque laboriosam corporis autem?</p>
        </div>
    </div>
    
    <div class = "fourcolumn">
       <div> <img src="img/img6.jpg" alt="A dock going into a forest lake with mountains in the background" class="fourcolumnimg">
       <h2 class="ptitle">Column One</h2>
       <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quam, sunt eaque doloremque. Accusamus cum vero hic. Eveniet vero, alias natus magni incidunt est mollitia, ducimus culpa error, rem consequuntur.</p>
       </div>
       
       <div>
           <img src="img/img7.jpg" alt="Snowy mountains form close up" class="fourcolumnimg">
           <h2 class="ptitle">Column Two</h2>
           <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nesciunt aspernatur provident, cum, aut sapiente corporis fugit recusandae assumenda error sunt beatae unde illo necessitatibus porro iusto minima veritatis. Excepturi!</p>
       </div>
       
       <div>
           <img src="img/img8.jpg" alt="A beach with sunset reflecting in the water" class="fourcolumnimg">
           <h2 class="ptitle">Column Three</h2>
           <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nesciunt aspernatur provident, cum, aut sapiente corporis fugit recusandae assumenda error sunt beatae unde illo necessitatibus porro iusto minima veritatis. Excepturi!</p>
       </div>
       
          <div>
           <img src="img/img9.jpg" alt="A close-up of some Autum leaves" class="fourcolumnimg">
           <h2 class="ptitle">Column Four</h2>
           <p class="ptxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nesciunt aspernatur provident, cum, aut sapiente corporis fugit recusandae assumenda error sunt beatae unde illo necessitatibus porro iusto minima veritatis. Excepturi!</p>
       </div>
    </div>
    
    <div class = "onecolumn">
       <div>
        <img src="img/img10.jpg" alt="A lifegaurd overlooking a lake from her wooden tower" class="img1">
        <h2 class="ptitle">One Big Column</h2>
        <div class="ptxt">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, ut sed dignissimos quidem praesentium autem porro molestias error eos placeat, cupiditate nemo laborum inventore deleniti adipisci esse odit doloribus ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente exercitationem nemo, obcaecati sit porro libero nostrum error nisi, corrupti nulla, alias, magni eveniet perferendis repudiandae repellendus vero ut expedita molestias.</p>
        
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus eum, delectus itaque aperiam iste maxime nesciunt expedita doloremque. Debitis expedita quaerat voluptas praesentium sint eveniet voluptatem explicabo esse. Ab, iste! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ducimus iure mollitia animi, tempora illum ratione iste, consectetur cumque reprehenderit vel. Possimus explicabo optio nihil ab est repudiandae deserunt officia.</p>
        </div>
        </div>
    </div>
    
    <div class = "parallax3">
        <div class = "form">
          <div class = "form-content">
           <h1 class="form-title">Contact Form</h1>
           
           
           <div class = "transbox"><p class = "form-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id distinctio aliquam quis asperiores. Obcaecati vel vitae labore saepe pariatur commodi minima, excepturi, eveniet tempora nulla natus. Adipisci cumque aliquid eligendi.</p></div>
           
           <div class="lower-form-elements">
           <form class="boxes">
               <input type="text" name = "name" placeholder="Name" class="formbox">
               <input type="text" name = "email" placeholder="Email" class="formbox">
               <input type="text" name = "subject" placeholder="Subject" class="formbox">
           </form>
           <textarea name="message" placeholder="Your message here..."  cols="50" rows="10" class="message"></textarea>
           </div>
           
           <button type="button" class="send">Send</button>
           </div>
        </div>
    </div>
    
    <div class="footer">
    <h1>Footer</h1>
    <p class="footerinfo">Footer info</p>
    <div class="vline"></div>
    <p class="copyr">Copyright © 2084 Your Company Name</p>
    <img src="img/img0.png" alt="An up-arrow for site navigation" class="up-arrow">
    </div>
</body>
</html>
