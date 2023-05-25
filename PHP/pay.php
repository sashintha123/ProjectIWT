
<!DOCTYPE html>
<html>
<head>
	<title>pay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  href="../css/styl.css" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
	<div class="navbar">
			<div class="icon">
			  <h2 class="logo">WINNER</h2>
			</div>
	</div>

	<div class="menu">
		<ul class="ul1" >
			<li><a href="home.php">Home</a></li>
			<li><a href="courses.php">Course</a></li>
			<li><a href="ebook-pdf.php">Resources</a></li>
			<li><a href="contact us.php">Contact</a></li>
			<li><a href="aboutus.php">About</a></li>
		</ul>
	</div>
	<div class="agileits_w3layouts">
    <h1 class="agile_head text-center">PAYMENT</h1>
	<div class="w3layouts_main wrap">

	<div class="background">
	<center><img src="../image/card1.png" width=50%></center><br>

	</div>
	<form action="feedback.php" method="post" class="agile_form">
		<h4 style="color:skyblue;" >BUY COURSE/ RESOURCE</h4>
		<ul class="agile_info_select">
			<li><input type="radio" name="view" value="$19.99" id="$19.99" required>
			<label for="$19.99">Data Science:- $19.99</label>
			<div class="check w3"></div>
			</li>
			<li><input type="radio" name="view" value="$29.99" id="$29.99">
			<label for="$29.99">Networking Development:- $29.99</label>
			<div class="check w3ls"></div>
			</li>
			<li><input type="radio" name="view" value="$9.99" id="$9.99">
			<label for="$9.99">Science and Technology:- $9.99</label>
			<div class="check w3ls"></div>
			</li>
			<li><input type="radio" name="view" value="$15" id="$15">
			<label for="$15">Software Engineering:- $15</label>
			<div class="check w3ls"></div>
			</li>
			<li><input type="radio" name="view" value="$12" id="$12">
			<label for="$12">Web Development:- $12</label>
			<div class="check w3ls"></div>
			</li>
			</ul>
			<textarea placeholder="ID NUMBER" class="w3l_summary" name="comments" maxlength="3" required=""></textarea>
			<input type="text" placeholder="Your Name" name="name" minlength="3" />
			<input type="email" placeholder="Your Email " name="email"/>
			<input type="text" placeholder="Your Phone Number " name="num" maxlength="10"  /><br>
			<!-- Card Number -->
			<div class="form-group">
			  <label class="col-sm-4 control-label" for="textinput"></label>
			  <div class="col-sm-6">
			  <input type="text" id="cardnumber"  minlength="16" maxlength="16" placeholder="Card Number" class="card-number form-control">
			  </div>
			</div>

			<!-- CVV -->
			<div class="form-group">
				<label class="col-sm-4 control-label" for="textinput"></label>
				<div class="col-sm-3">
				<input type="text" id="cvv" placeholder="CVV" minlength="3" maxlength="3" class="card-cvc form-control">
				 </div>
				</div>
			<!-- Expiry-->
			<div class="form-group">
			<label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
			<div class="col-sm-6">
			<div class="form-inline">
			<select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
				<option value="01" selected="selected">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			<span> / </span>
			<select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
				<option value="2022" selected="selected">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
				<option value="2027">2027</option>
				<option value="2028">2028</option>
				<option value="2029">2029</option>
				<option value="2030">2030</option>

			</select>

			<script type="text/javascript">
				var select = $(".card-expiry-year"),
				year = new Date().getFullYear();

				for (var i = 0; i < 12; i++) {
					select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
				}
			</script>
        </div>
      </div>
    </div>
			<center><input type="submit" value="P A Y   N O W"  /></center>
<br>
<p>
 <a href=""><b><h3><center><h3 class="agile_head text-center">BACK</h3> </b></h3></center></a> </p></br></br>
	  </form>
	</div>




</body>
</html>
