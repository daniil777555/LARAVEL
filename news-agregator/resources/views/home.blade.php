<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@500&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
  <title>NewsBlog</title>
  <style>
    *{
      font-family: 'Open Sans', sans-serif;
      padding:0;
      margin:0 auto;
    }

    .header{
      font-family: 'Big Shoulders Display', cursive;
      text-align:center;
    }

    .logo{
      background: rgb(3,242,255);
      background: linear-gradient(90deg, rgba(3,242,255,1) 16%, rgba(0,189,252,1) 30%, rgba(2,119,255,1) 46%, rgba(21,121,245,1) 68%, rgba(55,49,236,1) 84%);
      padding: 25px 15px;
      box-sizing: border-box;
    }

    .logo-text{
      font-family: 'Big Shoulders Display', cursive;
      font-size: 33px;
      color: #fff;
    }

    .wrapper{
      width: 1200px;
      min-height: 100vh;
      box-sizing: border-box;
      border-left: 5px solid rgb(3,242,255);
      border-right: 5px solid rgb(3,242,255);
      border-image:linear-gradient(to bottom, rgba(3,242,255,1) 16%, rgba(0,189,252,1) 30%, rgba(2,119,255,1) 46%, rgba(21,121,245,1) 68%, rgba(55,49,236,1) 84%);
      border-image-slice: 1;
      background: rgb(247, 246, 246);
    }

    .news-block{
      padding: 25px 40px;
      box-sizing: border-box;
      display:flex;
      flex-direction: column;
    }

    .new-block{
      width: 50vw;
      text-align:center;
      padding: 10px;
      box-sizing: border-box;
      margin-bottom: 15px;
      border-bottom: 1px solid rgba(133, 132, 132, 0.6);
    }

    .new-block:last-child{
      border: none;
    }


    .new-img{
      max-width: 425px;
      background: blue;
      color: #fff;
    }

    .new-title{
      font-size: 23px;
      margin-top: 10px;
      text-align: left;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .new-text{
      font-size: 18px;
      text-align: left;
      margin-bottom: 10px;
      font-weight: 200;
      max-height: 100px;
      text-overflow: ellipsis; 
      overflow: hidden;
      float:right;
    }

    .more-text{
      cursor:pointer;
      text-align: left;
      float: left;
      font-size: 18px;
      color: rgb(35, 1, 129);
    }

    .more-text:hover{
      color: rgb(57, 14, 173);
      text-decoration: underline;
    }



  </style>
</head>
<body>
  <div class="container">

    <header class="header">
      <div class="logo"><h1 class="logo-text">NewsBlog</h1></div>
    </header>

    <div class="wrapper">
      <main class="news-block">
        <div class="new-block">
          <!-- If exists img -->
          <div class="new-img">IMG</div>
          <h3 class="new-title">Title</h3>
          <p class="new-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sunt. Animi aliquam, voluptatum culpa neque nulla esse asperiores, quibusdam cumque repudiandae suscipit quos exercitationem harum tenetur sint! Tenetur maxime pariatur impedit et possimus maiores amet quo, debitis ullam perspiciatis, eius cumque libero corporis rem ducimus? Aliquid temporibus aspernatur harum autem?</p>
          <span class="more-text">More</span>
        </div>
        <div class="new-block">
          <div class="new-img">IMG</div>
          <h3 class="new-title">Title</h3>
          <p class="new-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea numquam aut eveniet, eaque neque reprehenderit blanditiis suscipit mollitia autem commodi eligendi nihil! Perspiciatis vero quo voluptates dignissimos veniam deleniti voluptate nisi assumenda nulla soluta consequuntur veritatis id eum error molestiae, maiores accusamus. Placeat assumenda deserunt fuga saepe culpa modi aspernatur sint reprehenderit labore laboriosam asperiores est autem debitis adipisci incidunt eos minus minima unde iure, at impedit blanditiis, amet quo recusandae? Consectetur illo officiis sunt maxime ipsam tenetur quibusdam adipisci in atque pariatur nam incidunt temporibus doloremque nesciunt provident dolor, debitis esse saepe, illum ullam eum quis asperiores consequatur consequuntur.</p>
          <span class="more-text">More</span>
        </div>
        <div class="new-block">
          <div class="new-img">IMG</div>
          <h3 class="new-title">Title</h3>
          <p class="new-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dicta fuga nemo deserunt ab sed nihil eaque consequuntur. Doloremque mollitia placeat assumenda odio ipsam aperiam impedit amet expedita, nostrum vitae.</p>
          <span class="more-text">More</span>
        </div>
      </main>
    </div>

  </div>
  <script>
    let btnMoreCollection = document.querySelectorAll(".more-text");
    btnMoreCollection.forEach(el => {
      if(el.previousElementSibling.clientHeight < 100) el.style.display = "none"
      el.addEventListener("click", showMoreText);
      
    });

    function showMoreText(event){
      if(event.target.innerHTML === "More"){
        event.target.innerHTML = "Less"
        event.target.previousElementSibling.style.maxHeight = "max-content";
      } else{
        event.target.innerHTML = "More"
        event.target.previousElementSibling.style.maxHeight = "100px";
      }
    }
  </script>
</body>
</html>