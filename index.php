<?php

require 'function/functions.php';
$blog = query("SELECT * FROM blog");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Rimper | BLOG</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
      .section-empty {
        background-color: rgb(250, 250, 250);
        padding: 20px;
        text-align: center;
      }
      .section-empty img {
        max-width: 100%;
        height: auto;
      }
      .section-about {
        background-color: #1483D5;
        padding: 20px;
        text-align: center;
      }
      .section-about h2 {
        margin-bottom: 20px;
      }
      .section-about p {
        margin: 5px 0;
      }
    </style>
  </head>
  <body style="background-image: url('https://images.unsplash.com/photo-1601436155198-2ebfea8117b0?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">   
   
    <header>
      <a href="#" class="brand">Myblog</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="#">Home</a>
        <a href="#blog-section">Blog</a>
        <a href="#contact-section">Contact</a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>
    <section class="section-main">
      <h1>hII! IM KEVIN RIMPER.</h1>
    </section>
    <section class="section-two" id="blog-section">
        <h2>About Me</h2>
        <p>hello my name is kevin rimper i am 19 years old, i am studying informatics at samratulangi university, my hobby is playing basketball and i also like cooking, this is my first blog, here i will show you the athletes that i really like because they are people who inspire me</p>
        
        <h2>Gallery </h2>
        <div class="gallery">
          <div class="gallery-item">
           

        <h1></h2>
            <div class="gallery-item"></div>
            <a href="https://en.wikipedia.org/wiki/Lionel_Messi">
            <p>LIONEL MESSI</p>
            <img src="https://cdn.antaranews.com/cache/1200x800/2019/12/26/Lionel-Messi-Barcelona-vs-Alaves.jpg" alt="Athlete 1">
         
          </div>
          <div class="gallery-item">
            <a href="https://en.wikipedia.org/wiki/Kyrie_Irving">
            <p>KYRIE IRVING</p>
            <img src="https://wallpapers.com/images/hd/kyrie-irving-nets-1200-x-800-n8h7t17shesr3d8j.jpg" alt="Athlete 2">
            
          </div>
          <div class="gallery-item">
            <a href="https://en.wikipedia.org/wiki/Jorge_Lorenzo">
            <p>JORGE LORENZO</p>
            <img src="https://asset.kompas.com/crops/s0FS0hpBv1f-YG27NtUgigCdj3E=/0x0:594x396/1200x800/data/photo/2019/11/15/5dcd98797fad0.jpg" alt="Athlete 3">
            
          </div>
        </div>
      </section>
    </section>
    <section class="section-about" id="contact-section">
        <section class="section-about" id="contact-section" style="background-color: #1483D5; color : #f3f6f8;">

      <h2>Contact</h2>
      <p><strong>Phone:</strong> 087714531975</p>
      <p><strong>Instagram:</strong> @_kevinrimper</p>
      <p><strong>Email:</strong> kevinrimper026@student.unsrat.ac.id</p>
      <p><strong>Address:</strong> Jln elang raya, Malalayang 1 Timur</p>
    </section>
    <script type="text/javascript">
      //javascript for navigation bar effect on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });

     
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>
  </body>
</html>
