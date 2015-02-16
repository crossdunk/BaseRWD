<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>測試CSS</title>
    <script src="/libs/js/jquery-1.10.2.min.js" ></script>
</head>
<style>
.cf{
 zoom:1;
}
.cf:before,.cf:after{
 display: table;
 content:"";
 }
.cf:after{
 clear: both;
}
html{
  font-family: '微軟正黑體';
  font-weight: 900;
}
#content{
  margin:auto;
}
@media screen and (min-width: 1280px) {
    #content{
      width:90%;
    }
    .block{
      width:30%;
    }
    .b_content{
      font-size: 16px;
    }
}
@media screen and (min-width: 1023px) and (max-width: 1279px) {
    #content{
      width:90%;
    }
    .block{
      width:29%;
    }
    .b_content{
      font-size: 14px;
    }
}
@media screen and (min-width: 769px) and (max-width: 1023px) {
    #content{
      width:90%;
    }
    .block{
      width:45%;
    }
    .b_content{
      font-size: 14px;
    }
}
@media screen and (max-width: 768px) {
    #content{
      width:90%; 
    }
    .block{
      width:100%;
    }
    .b_content{
      font-size: 16px;
    }
}
.b_price{
  width:100%;
  color:#D75842;
}
.b_price:before{
  content:'$';
  color:#272323;
}
.b_price:after{
  content:'元起'; 
  color:#272323;
}
.b_content{
  width:90%;
}
.block{
  float:left;
  margin: 15px;
}
.b_img img{
  width:100%;
}

</style>
<body>
  <div id='content'>
  <?php
  for($i=1;$i<=9;$i++){
    echo "

    <div class='block'>

        <div class='b_img'>
          <img src='images/banner/2.jpg'>
        </div>
        <div class='b_price'>
        500
        </div>
        <div class='b_content'>
    蜜月好禮：
    凡新婚6個月內之夫妻，連續住宿4晚以上，可享氣泡酒一瓶、迎賓巧克力；連續住宿7晚以上，可享氣泡酒一瓶、迎賓巧克力、沙灘私人晚餐一次、海豚巡航一次。
    請提供喜帖以利申請，實際內容以渡假村現場提供為主。
        </div>

  </div>

  ";
  }

  ?>
  
</div>

</body>

</html>