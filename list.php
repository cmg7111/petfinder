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

        h1 {
  color: #000;
  font-size: 40px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 60px;
}
h1::after {
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
  position: relative;
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
/*END Form Wizard*/
.container2{
  width: 100%;
}

td{
  width: 50%;

}


.bs-wizard {padding: 0 0 10px 3px; margin-left: 0px;}
.bs-wizard > .bs-wizard-step {margin: 0 -1px 0 0; padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-weight: bold; font-size: 16px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;} 
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .bar {width:0px; box-shadow: none; background: #fbe8aa; transition: width .1s linear;}
.bs-wizard > .bs-wizard-step.complete > .progress > .bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }

.bold{top:-5px; position: relative; margin:10px; left:-20px;}
.time{position:absolute; left:-110px; }
.timeline-wrapper {
  width:100%;
padding-left:140px;
min-width: 400px;
font-family: 'Helvetica';
font-size: 14px;
/*border: 1px solid #CCC;*/
}
.StepProgress {
position: relative;
padding-left: 45px;
list-style: none;
}
.StepProgress::before {
display: inline-block;
content: '';
position: absolute;
top: 0;
left: 13px;
width: 10px;
height: 95%;
border-left: 2px solid #CCC;
}
.StepProgress-item {
position: relative;
counter-increment: list;
}
.StepProgress-item:not(:last-child) {
padding-bottom: 20px;
}
.StepProgress-item::before {
display: inline-block;
content: '';
position: absolute;
left: -32px;
height: 100%;
width: 10px;
}
.StepProgress-item::after {
content: '';
display: inline-block;
position: absolute;
top: 0;
left: -37px;
width: 12px;
height: 12px;
border: 2px solid #CCC;
border-radius: 50%;
background-color: #FFF;
}
.StepProgress-item.is-done::before {
border-left: 2px solid green;
height: 120%;
}
.StepProgress-item.is-done::after {
/*content: "?";*/
font-size: 10px;
color: #FFF;
text-align: center;

}
.StepProgress-item.comp::before {
}
.StepProgress-item.comp::after {
/*content: "?";*/
font-size: 10px;
color: #FFF;
text-align: center;
border: 2px solid green;
background-color: green;
}
/*.StepProgress-item.current::before { 
border-left: 2px solid green;
}
.StepProgress-item.current::after {
content: counter(list);
padding-top: 1px;
width: 19px;
height: 18px;
top: -4px;
left: -40px;
font-size: 14px;
text-align: center;
color: green;
border: 2px solid green;
background-color: white;
}*/
.StepProgress strong {
display: block;
}


.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

#card{
  cursor: pointer;
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
                          parent.$('html,body').animate({ scrollTop: 0 }, 800);
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

        $("#prog").mouseover(function(){
          alert("zz");
        })
        
        function check(pred){
          $("#button").hide();
          $("#result").show();
          if(pred==0){
            $("#prog0").attr('class','StepProgress-item comp');
            $("#prog_text0").css('color','green');
          }
          if(pred==1){
            $("#prog0").attr('class','StepProgress-item is-done');
            $("#prog1").attr('class','StepProgress-item comp');
            $("#prog_text1").css('color','green');
          }
          if(pred==2){
            $("#prog0").attr('class','StepProgress-item is-done');
            $("#prog1").attr('class','StepProgress-item is-done');
            $("#prog2").attr('class','StepProgress-item comp');
            $("#prog_text2").css('color','green');
          }
          if(pred==3){
            $("#prog0").attr('class','StepProgress-item is-done');
            $("#prog1").attr('class','StepProgress-item is-done');
            $("#prog2").attr('class','StepProgress-item is-done');
            $("#prog3").attr('class','StepProgress-item comp');
            $("#prog_text3").css('color','green');
          }
          if(pred==4){
            $("#prog0").attr('class','StepProgress-item is-done');
            $("#prog1").attr('class','StepProgress-item is-done');
            $("#prog2").attr('class','StepProgress-item is-done');
            $("#prog3").attr('class','StepProgress-item is-done');
            $("#prog4").attr('class','StepProgress-item comp');
            $("#prog_text4").css('color','green');
          }
        }


    </script>
<body>

  <!-- Navigation -->


  <!-- Header - set the background image for the header in the line below -->

<!---box2-->

    
<div class="box" id="pet" style=" background: #e2eaef;">
      <div class="container" style="width: 100%">
    <br>
  <div class="row">
    <div class="col-md-20">
      <h1><b>Pet Finder</b></h1>
<br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="row">


          <div class="col-sm-5">
              <div class="thumb-wrapper2">
                <div class="thumb-content"> 
                  <h4><b>입양 동물 리스트</b></h4>

                  <div class="container" style="width: 100%;">
  <div class="row">
    <div class="col-md-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="row">
<?php 
$page = ($_GET['page'])?$_GET['page']:1;
$page2 = ($_GET['page2'])?$_GET['page2']:1;
$petid=$_GET['pet'];
 $s_point = ($page-1) * 2;
 $sql='SELECT * FROM data WHERE Type = "1" LIMIT '.$s_point.',2';
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 while ($row = $stmt->fetch()) {
    $path="dataset/".$row['PetID']."-1.jpg";
    if ($row['Gender']=='1'){
      $gender="Male";
    }
    else if($row['Gender']=='2'){
      $gender="Female";
    }
    else{
      $gender="Mixed";
    }

?>
            <div class="col-sm-6">
              <div class="thumb-wrapper" onclick="location.href='<?=$PHP_SELP?>?page=<?=$page?>&page2=<?=$page2?>&pet=<?=$row['PetID']?>'" id="card">
                <div class="img-box">
                  <img src="<?=$path?>" class="img-responsive img-fluid" alt="">    
                </div>
                <div class="thumb-content">
                  <h4><font size="4" color="#29088A"><?=$row['Name']?></font></h4>                 
                  <p class="item-price"><?=$gender?>, <?=$row['Age']?> Months</p>
                </div>            
              </div>
            </div>
            <?php 
          }
            ?>

          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <input type="hidden" id="scrollPos" name="scrollPos" runat="server"/>
      <a class="carousel-control left carousel-control-prev" href="<?=$PHP_SELP?>?page=<?=$page-1?>&page2=<?=$page2?>&pet=<?=$petid?>" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control right carousel-control-next" href="<?=$PHP_SELP?>?page=<?=$page+1?>&page2=<?=$page2?>&pet=<?=$petid?>" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    </div>
  </div>
</div>

 <div class="container" style="width: 100%;">
  <div class="row">
    <div class="col-md-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="row">

<?php 
 $s_point = ($page2-1) * 2;
 $sql='SELECT * FROM data WHERE Type = "2" LIMIT '.$s_point.',2';
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 while ($row = $stmt->fetch()) {
    $path="dataset/".$row['PetID']."-1.jpg";
    if ($row['Gender']=='1'){
      $gender="Male";
    }
    else if($row['Gender']=='2'){
      $gender="Female";
    }
    else{
      $gender="Mixed";
    }
?>
            <div class="col-sm-6">
             <div class="thumb-wrapper" onclick="location.href='<?=$PHP_SELP?>?page=<?=$page?>&page2=<?=$page2?>&pet=<?=$row['PetID']?>'" id="card">
                <div class="img-box">
                  <img src="<?=$path?>" class="img-responsive img-fluid" alt="">    
                </div>
                <div class="thumb-content">
                  <h4><font size="4" color="#29088A"><?=$row['Name']?></font></h4>                
                  <p class="item-price"><?=$gender?>, <?=$row['Age']?> Months</p>
                </div>            
              </div>
            </div>
            <?php 
          }
            ?>

          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left carousel-control-prev" href="<?=$PHP_SELP?>?page2=<?=$page2-1?>&page=<?=$page?>&pet=<?=$petid?>" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control right carousel-control-next" href="<?=$PHP_SELP?>?page2=<?=$page2+1?>&page=<?=$page?>&pet=<?=$petid?>" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    </div>
  </div>
</div>

      <?php 
      if(!$_GET['pet']){
        $petid='3422e4906';
      }
      else{
        $petid=$_GET['pet'];
       }
         $sql='SELECT * FROM data WHERE PetID="'.$petid.'"';
         $stmt = $conn->prepare($sql);
         $stmt->execute();
         $row = $stmt->fetch();
         $path="dataset/".$row['PetID']."-1.jpg";
         $VDS=["Yes","No","Not Sure"];
         $cond=["Not Specified","Healthy","Minor Injury","Serious Injury"];
         $Mat=["Not Specified","Small","Medium","Large","Extra Large"];
         $Fur=["Not Specified","Short","Medium","Long"];
         $color=["Black","Brown","Golden","Yellow","Cream","Gray","White"];
         

         $sql2='SELECT * FROM Breed WHERE BreedID="'.$row['Breed1'].'"';
         $stmt = $conn->prepare($sql2);
         $stmt->execute();
         $row2 = $stmt->fetch();
         $row2['BreedName']=str_replace('"', '', $row2['BreedName']);

         $sql3='SELECT * FROM state WHERE StateID="'.$row['State'].'"';
         $stmt = $conn->prepare($sql3);
         $stmt->execute();
         $row3 = $stmt->fetch();
         $row3['StateName']=str_replace('"', '', $row3['StateName']);
         function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
          $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
          $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
          $result = str_replace($escapers, $replacements, $value);
          return $result;
        }
        $sent=file_get_contents('dataset/train_sentiment/'.$petid.'.json');
        $json_a = json_decode($sent, true);
        $meta=file_get_contents('dataset/train_metadata/'.$petid.'-1.json');
        $json_b = json_decode($meta, true);

      ?>
                </div>            
              </div>
            </div>

            <div class="col-sm-3">
              <div class="thumb-wrapper2" id="aboutpet">
                <div class="img-box2">
                  <img src="<?=$path?>" alt="">    
                </div>
                <div class="thumb-content">
                  <h4 style="margin-top:10px;"><font size="5" color="#29088A"><?=$row['Name']?></font></h4>
                  <p class="item-price" ><?=$gender?>, <?=$row['Age']?>Months</p>
                  <table align="center" width=90% cellpadding=3 style="font-size:13px; line-height: 170%; position:relative;">
                    <!-- <tr><td><font color=#444444><b>Type</b></td><td>Dog</td></tr> -->
                    <tr><td><font color="#0080FF"><b>품종</b></td><td><font color="#0080FF"><?=$row2['BreedName']?></td></tr>
                    <!--<tr><td><font color=#444444><b>성별</b></td><td><?=$gender?></td></tr>-->
                    <tr><td><font color="blue"><b>나이</b></td><td><font color="blue"><?=$row['Age']?>Months</td></tr>
                    <!-- <tr><td><font color=#444444><b>Age</b></td><td>2 Months</td></tr> -->
                    <tr><td><font color=#444444><b>백신접종 여부</b></td><td><?=$VDS[$row['Vaccinated']-1]?></td></tr>
                    <tr><td><font color=#444444><b>구충 여부</b></td><td><?=$VDS[$row['Dewormed']-1]?></td></tr>
                    <tr><td><font color=#444444><b>중성화 여부</b></td><td><?=$VDS[$row['Sterilized']-1]?></td></tr>
                    <tr><td><font color=#444444><b>건강 상태</b></td><td><?=$cond[$row['Health']]?></td></tr>
                    <tr><td><font color=#444444><b>신체 정보</b></td><td><?=$Mat[$row['MaturitySize']]?> Size, <?=$Fur[$row['FurLength']]?> Fur</td></tr>
                    <tr><td><font color=#444444><b>색상</b></td><td><?=$color[$row['Color1']-1]?>, <?=$color[$row['Color2']-1]?></td></tr>
                    <tr><td><font color=#444444><b>지역</b></td><td><?=$row3['StateName']?></td></tr>
                    <tr><td><font color=#444444><b>입양비</b></td><td><font color=#2bb673><b><?=$row['Fee']?>$</b></font></td></tr>
                    <tr><td><font color=#444444></td><td><font color="blue"><b><a class="tooltips">Description<span><?=$row['Description'];?><br><br> 
                      <?php 
                      if($json_a['documentSentiment']['score']<0.0){
                        echo '<font color="red">';
                      }
                      elseif($json_a['documentSentiment']['score']>=0.0){
                        echo '<font color="#A9E2F3">';
                      }?>
                      Description Sentimnet score : <?=$json_a['documentSentiment']['score']?></font><br>Description Magnitude score : <?=$json_a['documentSentiment']['magnitude']?></span></a></b></font> / 
                      <font color="blue"><b><a class="tooltips">Metadata<span>Label, Score : <?=$json_b['labelAnnotations']['0']['description']?>, <?=$json_b['labelAnnotations']['0']['score']?>
                        <br>Dominant Pixel score : <?=$json_b['imagePropertiesAnnotation']['dominantColors']['colors']['0']['score']?>
                        <br>Dominant Pixel Fraction : <?=$json_b['imagePropertiesAnnotation']['dominantColors']['colors']['0']['pixelFraction']?>
                      </span>
                  </table>
                   
               
                </div>            
              </div>
            </div>

                    <?php 
                          if(!$_GET['pet']){
                            $petid='3422e4906';
                          }
                          else{
                            $petid=$_GET['pet'];
                          }
                         $sql='SELECT LinearSVC,Kneighbors,Logistic,RF,xgboost,AdoptionSpeed FROM result2 WHERE PetID="'.$petid.'"';
                         $stmt = $conn->prepare($sql);
                         $stmt->execute();
                         $row2 = $stmt->fetch();

                         $result=["즉시 입양","7일 이내","30일 이내","90일 이내","입양 어려움"];
                         $conc=Array();
                         for($i=2;$i<=6;$i++){
                            $conc[$row2[$i]]++;
                         }
                         $max_key = array_keys($conc, max($conc));
                         $max_key=$max_key[0];
                    ?>
            <div class="col-sm-4">
              <div class="thumb-wrapper2">
                <div class="thumb-content">
                  <h2 style="margin-top:10px; margin-bottom: 40px"><b><font color="green">입양 시기 예측 결과</font></b></h2>
                    <hr>
                    <div id="button" style="width:100%; height:100%; margin: auto; margin-top:200px;">
                      <b>P R E D I C T I O N<b><br>
                      <button type="button" class="btn btn-info btn-circle btn-xl" style="width:100px; height:100px; border-radius: 50%;" onclick="check('<?=$max_key?>')"><i class="glyphicon glyphicon-ok" style="margin: 0px; font-size:30px;"></i></button>
                    </div>
                    
                    <div id="result" style="display: none;">
                      <div class="timeline-wrapper" style="margin-top:40px"> 
                       <ul class="StepProgress">
                        <font size="4">
                              <li id="prog0" class="StepProgress-item">
                                  <div id="prog_text0"  class="bold"><b>즉시 입양</b></div>
                              </li>
                              <li id="prog1" class="StepProgress-item">
                                  <div id="prog_text1"  class="bold"><b>7일 이내</b></div>
                              </li>
                              <li id="prog2" class="StepProgress-item">
                                  <div id="prog_text2"  class="bold"><b>30일 이내</b></div>
                              </li>
                              <li id="prog3" class="StepProgress-item">
                                  <div id="prog_text3"  class="bold"><b>90일 이내</b></div>
                              </li>
                              <li id="prog4" class="StepProgress-item">
                                  <div id="prog_text4" class="bold"><b>입양 어려움</b></div>
                              </li>
                          </font>
                        </ul>
                      </div>
                      <hr>
                      <div id="resulttable">
                        <h4><b><font color="#29088A">기계학습 모델 별 입양 시기 예측 결과</font></b></h4>
                        <table align="center" width=100% style="font-size:13px; line-height: 180%; margin-top:20px">
                        <tr><td><font color=#444444><b>Linear SVM</b></td><td><font color="#08298A"><?=$result[$row2['LinearSVC']]?></font></td></tr>
                        <tr><td><font color=#444444><b>K-neighbors</b></td><td><font color="#08298A"><?=$result[$row2['Kneighbors']]?></td></tr>
                        <tr><td><font color=#444444><b>Logistic Regression</b></td><td><font color="#08298A"><?=$result[$row2['Logistic']]?></font></td></tr>
                        <!--<tr><td><font color=#444444><b>Decision Tree</b></td><td><font color="#08298A"><?=$result[$row2['Decisiontree']]?></font></td></tr>-->
                        <tr><td><font color=#444444><b>Random Forest</b></td><td><font color="#08298A"><?=$result[$row2['RF']]?></font></td></tr>
                        <tr><td><font color=#444444><b>XGBoost</b></td><td><font color="#08298A"><?=$result[$row2['xgboost']]?></font></td></tr>
                        <tr><td>&nbsp</td><td>&nbsp</td></tr>
                        <tr><td><font color=#444444><b>True label</b></td><td><font color="red"><?=$result[$row2['AdoptionSpeed']]?></font></td></tr>
                        </table>
                      </div>
                    
                    <Br>
                  </div> 

                </div>
              </div>


              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
    </div>
    </div>
  </div>
</div>
</div>
  <!-- Footer -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
<script type="text/javascript">

</script>
</html>
