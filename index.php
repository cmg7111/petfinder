<?php
include ('connect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  <title>Pet Finder</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<style type="text/css">
        html,body{ margin:0; padding:0; width:100%; height:100%;}
        .box{ width:100%; height:1100px; position:relative; color:#ffffff; font-size:24pt;}
        .container{
          color:black;
        }
                .thumbnail{
          width:100%;
          height:200px;
          background: #F2F2F2;
          padding-top:10px;
        }
        .thumb_image{
          margin-bottom:20px;
        }

        h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 60px;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  border-radius: 1px;
  background: #7ac400;
  left: 0;
  right: 0;
  bottom: -20px;
}
.carousel {
  margin: auto;
  padding: 0 70px;
}
.carousel .item {
  color: #747d89;
  min-height: 300px;
    text-align: center;
  overflow: hidden;
}
.carousel .thumb-wrapper {
  padding: 25px 15px;
  height:290px;
  background: #fff;
  border-radius: 6px;
  text-align: center;
  position: relative;
  box-shadow: 0 3px 3px rgba(0,0,0,0.2);
}
.carousel .thumb-wrapper:hover{
  background: #E0ECF8;
}
.carousel .thumb-wrapper2 {
  padding: 25px 15px;
  height:700px;
  background: #fff;
  border-radius: 6px;
  text-align: center;
  position: relative;
  box-shadow: 0 3px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
  height: 190px;
  margin-bottom: 20px;
  width: 100%;
  position: relative;
}
.carousel .item .img-box2 {
  height: 320px;
  width: 100%;  
}
.carousel .item img { 
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.carousel .item h4 {
  font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
  margin-bottom: 5px;
}
.carousel .thumb-content .btn {
  color: #7ac400;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #7ac400;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
  color: #fff;
  background: #7ac400;
  box-shadow: none;
}
.carousel .thumb-content .btn i {
  font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .carousel-control {
  height: 44px;
  width: 40px;
  background: #7ac400;  
    margin: auto 0;
    border-radius: 4px;
  opacity: 0.8;
}
.carousel .carousel-control:hover {
  background: #78bf00;
  opacity: 1;
}
.carousel .carousel-control i {
    font-size: 36px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -19px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: #fff;
  text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
  font-size: 13px;
  padding: 2px 0;
}
.carousel .item-price strike {
  opacity: 0.7;
  margin-right: 5px;
}
.carousel .carousel-control.left i {
  margin-left: -2px;
}
.carousel .carousel-control.right i {
  margin-right: -4px;
}
.carousel .carousel-indicators {
  bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 4px;
  border-radius: 50%;
  border-color: transparent;
}
.carousel-indicators li { 
  background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {  
  background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
  position: absolute;
  right: 10px;
  top: 10px;
  z-index: 99;
  cursor: pointer;
  font-size: 16px;
  color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
  color: #ff6161;
}
.star-rating li {
  padding: 0;
}
.star-rating i {
  font-size: 14px;
  color: #ffc000;
}

a.tooltips {
    position: relative;
    display: inline;
}
a.tooltips span {
    position: absolute;
    padding:20px;
    width: 300px;
    color: #FFFFFF;
    background: #000000;
    line-height: 20px;
    text-align: center;
    visibility: hidden;
    border-radius: 6px;
}
a.tooltips span:after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    width: 0; height: 0;
    border-top: 8px solid #000000;
    border-right: 8px solid transparent;
    border-left: 8px solid transparent;
}
a:hover.tooltips span {
    visibility: visible;
    opacity: 0.8;
    bottom: 30px;
    left: 50%;
    margin-left: -150px;
    z-index: 999;
}

iframe { 
    width:100%; 
    height:100%; 
} 

</style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">

        window.onload = function () {
            $(".box").each(function () {
                // 개별적으로 Wheel 이벤트 적용
                $(this).on("mousewheel DOMMouseScroll", function (e) {
                    e.preventDefault();
                    var delta = 0;
                    if (!event) event = window.event;
                    if (event.wheelDelta) {
                        delta = event.wheelDelta / 150;
                        if (window.opera) delta = -delta;
                    } else if (event.detail) delta = -event.detail / 3;
                    var moveTop = null;
                    // 마우스휠을 위에서 아래로
                    if (delta < 0) {
                        if ($(this).next() != undefined) {
                            moveTop = $(this).next().offset().top;
                        }
                    // 마우스휠을 아래에서 위로
                    } else {
                        if ($(this).prev() != undefined) {
                          console.log("top");
                        }
                    }
                    // 화면 이동 0.8초(800)
                    $("html,body").stop().animate({
                        scrollTop: moveTop + 'px'
                    }, {
                        duration: 800, complete: function () {
                        }
                    });
                });
            });
        }

        function move(){
          moveTop=$(document).height();
          $("html,body").stop().animate({
                        scrollTop: moveTop + 'px'
                    }, {
                        duration: 800, complete: function () {
                        }
                    });
        }

        function select(petid){
            alert(petid);
            function refreshDiv(){

            }
        }

    </script>
<body>

  <!-- Navigation -->


  <!-- Header - set the background image for the header in the line below -->
<div class="box">
  <header>
    <img class="clip" src="head.jpg" width="100%">
  </header>

  <!-- Content section -->
    <div class="container" style="margin-top:30px">
      <h1>Pet Finder</h1>
      <p class="lead"><h3>보호소 애완동물의 입양시기 예측</h3></p>
      <h3 style="line-height: 130%">애완동물의 신상정보를 기반으로 다양한 기계학습 모델(Linear SVM, K-neighbors, Logistic Regression, Random Forest, XGBoost)을 이용하여 입양 시기를 예측합니다.</p>
    </div>
</div>

<!---box2-->

 <div class="box" style="background: #e2eaef;">   
    <iframe src="list.php" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0></iframe>
  </div>
  <!-- Footer -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
<script type="text/javascript">

</script>
</html>
