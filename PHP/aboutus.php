<!DOCTYPE html>
<html>
<head>
  <style>
    *{
    margin: 09;
    padding: 0;
    box-sizing: border-box;
  }

  footer{


    left: 0;
    right: 0;
    background: #082032;
    height: auto;
    width: 99vw;
    font-family: "Open Sans";
    padding-top: 5px;
    margin-bottom: 0px;
    color: #fff;

  }

  .footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    height: 150px;
  }
  .footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
  }

  .footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
  }

  .socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
  }

  .socials li{
    margin: 0 10px;
  }

  .socials a{
    text-decoration: none;
    color: #fff;

  }

  .socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;
  }

  .socials a:hover{
    color: #1D5C63;
  }

  .footer-bottom{
    background: #000;
    width: 99vw;
    padding: 20px 0;
    text-align: center;
  }

  .footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  }

  .footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
  }



  </style>


	<link rel="stylesheet" type="text/css" href="../css/about.css">
	<title>About Us</title>
	<script type="text/javascript">
		function anime (){
			var myimage=document.getElementById("mainimg");
			var images=['../image/1.jpg','../image/2.jpg','../image/3.jpg','../image/4.jpg','../image/5.jpg']
			var imgindex=0;

			function changeimg(){
				myimage.setAttribute("src",images[imgindex]);
				imgindex++;
				if(imgindex>=images.length){
					imgindex=0;

				}

			}
			setInterval(changeimg,2000);

		}

		window.onload=function(){
			anime();
		}

	</script>
  <link rel="stylesheet" type="text/css" href="../css/nav.css"/>
</head>
<body style="background-color: #ede3c2;">

  <div class="navbar">
    <div class="icon">
      <h2 class="logo">WINNER</h2>
    </div>
    <div class="menu">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="courses.php">Course</a></li>
        <li><a href="ebook-pdf.php">Resources</a></li>
        <li><a href="contact us.php">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>

    </div>
    </div>


	<center>
	<h1 class="large-font" style="color:red;"><b>..OUR WORKS..</b></h1>

	<img class="main" src="../image/1.jpg"  id="mainimg" width="50%" align="centre">

<p style="width: 50%"; >Our goal is to build bridges of trust and understanding among people around the world. Through our programmes, we give opportunities to hundreds of millions of people worldwide to learn about British culture and creativity.</p></center>

<div class="container">
  <div class="row">
    <div class="column-66">

      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Our work in arts</b></h1>
      <p><span style="font-size:36px">Our work</span>  in the arts promotes innovative ways of working and is driven by a commitment to develop skills of Sri Lankan artists and cultural leaders through collaboration with the UK.</p>

    </div>
    <div class="column-33">
        <img class="img00" src="../image/11.jpg" width="335" height="471">
    </div>
  </div>
</div>


<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img class="img00" src="../image/22.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">

      <h1 class="large-font" style="color:red;"><b>Our work in education</b></h1>
      <p><span style="font-size:24px">We connect</span>  the UK and Sri Lankan school and higher education sectors to enrich education, promote global citizenship and build international trust and understanding.
</p>

    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="column-66">

      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Our work in society</b></h1>
      <p><span style="font-size:36px">Our work in society</span>  helps citizens and institutions contribute to a more inclusive, open and prosperous world and connects local issues to global themes.
</p>

    </div>
    <div class="column-33">
        <img class="img00" src="../image/33.jpg" width="335" height="471" >
    </div>
  </div>
</div>

<footer>
  <div class="footer-content">
    <h3>WINNER</h3>
    <p>JOIN WITH US AND WIN YOUR FUTURE...</p>
    
  </div>
  <div class="footer-bottom">
    <p>copyright &copy;2022 WINNER . designed by <span>Online Teacher Trainer</span></p>

  </div>
</footer>


</body>
</html>
