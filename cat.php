<?
include ('connect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pet Finder</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<style type="text/css">
        html,body{ margin:0; padding:0; width:100%; height:100%;}
        .box{ width:100%; height:100%; position:relative; color:#ffffff; font-size:24pt;}
        .container{
          color:black;
          margin-top:20px;
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
                        delta = event.wheelDelta / 120;
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
                            moveTop = $(this).prev().offset().top;
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
    </script>
<body>

  <!-- Navigation -->


  <!-- Header - set the background image for the header in the line below -->
<div class="box">
  <header>
    <img class="clip" src="head.jpg" width="100%">
  </header>

  <!-- Content section -->
    <div class="container">
      <h1>Pet Finder</h1>
      <p class="lead">Prediction Pet Adoption Speed.</p>
      <h5>Linear Regression, SVM, Random Forest, XGBoost 모델을 활용하여, 펫의 신상정보를 통해 입양 시기를 예측합니다.</p>
    </div>
</div>


  <!-- Content section -->
<div class="box">
	<iframe src="dog.php" frameborder="0" width="100%" height="90%"></iframe>
	<footer>
		<hr>
		굿모닝아이텍
	</footer>
</div>
    
  <!-- Footer -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
