<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - How Are You?</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./assets/css/style-bintang.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form id="form" method="post">
<!-- <input class="input100" type="text" placeholder="Username" name="username" autofocus> -->
  <fieldset class="stars">
    <input type="radio" name="stars" id="star1" ontouchstart="ontouchstart" value="5"/>
    <label class="fa fa-star" for="star1"></label>
    <input type="radio" name="stars" id="star2" ontouchstart="ontouchstart" value="4"/>
    <label class="fa fa-star" for="star2"></label>
    <input type="radio" name="stars" id="star3" ontouchstart="ontouchstart" value="3"/>
    <label class="fa fa-star" for="star3"></label>
    <input type="radio" name="stars" id="star4" ontouchstart="ontouchstart" value="2"/>
    <label class="fa fa-star" for="star4"></label>
    <input type="radio" name="stars" id="star5" ontouchstart="ontouchstart" value="1"/>
    <label class="fa fa-star" for="star5"></label>
    <input type="radio" name="stars" id="star-reset" />
    <label class="reset" for="star-reset" type="submit" name="btnlogin">simpan</label>
    <!-- <input type="submit" class="reset" for="star-reset" value="Submit"> -->

    

    <figure class="face"><i></i><i></i>
      <u>
        <div class="cover"></div>
      </u>
    </figure>
    
  </fieldset>
  
<!-- <label class="reset" for="star-reset" type="submit" name="btnlogin">simpanxxxxxxxxxx</label> -->

<button type="submit" name="simpan" for="star-reset" >
								simpan
</button>
</form>
<!-- partial -->
  <!-- <script src='https://use.fontawesome.com/a99e0df3d3.js'></script><script  src="./script.js"></script> -->

</body>
</html>
