<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Accueil</title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <a href="#sect1" class="js-scrollTo"> <div class="pimg1">
    <div class="ptext">
      <span class="border">
        EcomYan
      </span>
    </div>
  </div></a>

<div class="section section-light page page-header" id="sect1"> 
    <h2>T-Shirts</h2>
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>Tshirt1</p>
            </div>
            <div class="col-lg-6">
                <p>Tshirt2</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>Tshirt1</p>
            </div>
            <div class="col-lg-6">
                <p>Tshirt2</p>
            </div>
        </div>
    </div>
</div>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Image Two Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Section Two</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Section Three</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Traversy Media
      </span>
    </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 800; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>
</body>
</html>