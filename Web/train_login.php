<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中山資管系男排</title>
<link href='./img/sLOGO.png' rel='icon' type='image/x-icon'/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.js" type="text/javascript"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php
  session_start();
  include("connect.php");
  if (isset($_SESSION['login']))
  {
    echo $_SESSION['Name'];
    echo "你好.<br/>";
    echo "Today is ".date("Y-m-d")."<br/>";
    echo '<form method="post" action="logout.php">';
    echo '<input type="submit" name="logout" id="logout" value="登出" />';
    echo '</form>';
  }
  else if (isset($_POST['login']))
  {
    if(empty($_POST['account'])||empty($_POST['password']))
    {
      echo "<script>alert('密碼或帳號不可為空'); location.href = './train.php';</script>";
    }
    else
    {
      $row = $db->prepare("SELECT * FROM `player` WHERE pId =:useID AND pPhone=:pwd");
      $where = array(':useID'=> $_POST['account'], ':pwd'=> $_POST['password']);
      $row->execute($where);
      if($count = $row->rowcount())
      {
        while($r = $row->fetch(PDO::FETCH_ASSOC))
        {
          $loginacc=$r['pId'];
          $loginpsw=$r['pPhone'];
          $loginName=$r['PName'];
          $_SESSION['loginName']=$loginName;
          $_SESSION['loginName']=$loginacc;
        }
      }
      else 
      {
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './train.php';</script>";
      }
    }
  }
?>
  <script>
    $(document).ready(function () {
      $("input#submit").click(function(){
        $.ajax({
          type: "POST",
          url: "process.php", // 
          data: $('form.contact').serialize(),
          success: function(msg){
            $("#thanks").html(msg)
            $("#form-content").modal('hide'); 
          },
          error: function(){
            alert("failure");
          }
        });
      });
    });
  </script>
</head>
  
<body>
  <div id="header">
    <div id="header-inner"><a href="./index_login.php">
      <div class="valleyball-icon" style="family-name："微軟正黑體" font-size:23px">中山資管系男排</div></a>
      <div class="nav-bar">
            <div class="nav-li" id="thanks" style="max-width: 50px;">
              <?php
                    if(isset($_SESSION['loginName']))
                    {
                      echo '<a href="./logout.php" ><span class="glyphicon glyphicon-off"></span> 登出</a>';
                    }
                    else
                    {
                      echo'<div id="form-content" class="modal hide fade in" style="display: none;" >
                            <div class="modal-header">
                            <form method="post" action="" style="margin: 0 0 10px;">
                              <a class="close" data-dismiss="modal">×</a>
                              <h3 style="color:#000000; font-family: impact;">Teammate Login</h3>
                              <hr />
                              <p><input type="text" name="account" value="" placeholder="StudentID"  style="font-family: impact;"></p>
                              <p><input type="password" name="password" value="" placeholder="Password"  style="font-family: impact;"></p>
                              <hr />
                              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="login" name="login" style="color:#000000; position:relative;left:30%;">
                              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;">cancel</a>
                              </form>
                            </div>
                          </div>';
                        echo '<a data-toggle="modal" href="#form-content"><img src="./img/Login.png" style="max-width: 40px;
max-height: 40px;"/></a>';
                    }
                  ?>
            </div>
            <div class="nav-li" style="background:#232323;">
                <a href="train_login.php">練球菜單</a>
            </div>
            <div class="nav-li">
                <li class="dropdown" style="line-height: 40px; display: block;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >統計</a>
                  <ul class="dropdown-menu" role="menu" style="background-color: #000;">
                      <li><a href="gameboard_login.php">校內聯盟賽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="gameboard_outdoor_login.php">校外各盃賽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="fame_museum_login.php">名人堂</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="recent_player_login.php">現役球員</a></li>
                  </ul>
                </li>
            </div>
            <div class="nav-li">
                <li class="dropdown" style="line-height: 40px; display: block;">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >隊史</a>
                  <ul class="dropdown-menu" role="menu" style="background-color: #000;">
                      <li><a href="team_honor_login.php">隊譽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="uniform_login.php">歷屆隊服</a></li>
                  </ul>
                </li>
            </div>
            <div class="nav-li">
                <a href="calender_login.php">行事曆</a>
            </div>
          </div>
    </div> <!-- end of header-inner -->
  </div> <!-- end of header -->
  <div id="container" style="background-color:#efefef; box-shadow:1px 1px 80px 20px rgba(20%,20%,20%,0.4) inset;"> 
  <div id="container-inner" style="width:70%; padding-top: 100px; background-color: transparent;">
    <ul class="breadcrumb" style="background-color: transparent; padding: 5px 15px; margin:0px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">TrainList</a></li>
      </ul>
  <div class="tabbable" style="margin-top: 30px; margin-bottom: 30px; border:#000 2px solid; padding:30px; background: url('./img/TbCalBG1.jpg'); background-size: 100%;"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs" style="margin-bottom: 0px;">
      <li class="active"><a href="#tab1" data-toggle="tab" style="font-weight:900; font-size:20px;">基礎體能</a></li>
      <li><a href="#tab2" data-toggle="tab" style="font-weight:900; font-size:20px;">共同技巧</a></li>
      <li><a href="#tab3" data-toggle="tab" style="font-weight:900; font-size:20px;">進階體能</a></li>
      <li><a href="#tab4" data-toggle="tab" style="font-weight:900; font-size:20px;">個別技巧</a></li>
      <li><a href="#tab5" data-toggle="tab" style="font-weight:900; font-size:20px;">拉筋舒緩</a></li>
      <li><a href="#tab6" data-toggle="tab" style="font-weight:900; font-size:20px;">球經輔助</a></li>
      <li><a href="#tab7" data-toggle="tab" style="font-weight:900; font-size:20px;">當周菜單</a></li>
    </ul>
    <div class="tab-content" style="background:#fff;">
      <div class="tab-pane active" id="tab1">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="4">太空椅</td>
              <td rowspan="4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhPGVlzMSBUpaZ55Ym7vYsphAM0QkmJbzAwoXx00oP14qsXZCt0A" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td rowspan="4">棒式</td>
              <td rowspan="4"><img src="http://d2p1ovod81kcns.cloudfront.net/upload/img/2012/11076397d.JPG" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab2">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="2">接發球</td>
              <td rowspan="2"><img src="http://i1.sinaimg.cn/ty/o/2012-07-01/U7813P6T12D6120266F44DT20120701011305.jpg" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="2"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>連續接三顆好球</td>
              <td>穩定的接發球</td>
              <td><span class="label label-success">防守</span></td>          
            </tr>
            <tr>            
              <td>送平球</td>
              <td>侵略性接發</td>
              <td><span class="label label-success">防守</span></td>          
            </tr>
            
            <tr>            
              <td rowspan="3">發球</td>
              <td rowspan="3"><img src="data:image/jpeg;base64,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" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="3"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>連續發過20顆</td>
              <td>穩定的發球</td>
              <td><span class="label label-important">攻擊</span></td>          
            </tr>
            <tr>            
              <td>發左右邊線</td>
              <td>侵略性接球</td>
              <td><span class="label label-important">攻擊</span></td>          
            </tr>
            <tr>            
              <td>發在三米線內</td>
              <td>發短球</td>
              <td><span class="label label-important">攻擊</span></td>          
            </tr>
            
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab3">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="3">手推車</td>
              <td rowspan="3"><img src="http://www.matsu.idv.tw/attach/matsu-321dc79708487efab4a9c66864499b9b.jpg" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="3"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一次10m，休息一分鐘，做三次</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">大砲</span></td>          
            </tr>
            <tr>            
              <td>一次10m，休息一分鐘，做五次</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">大砲</span></td>          
            </tr>
            <tr>            
              <td>一次20m，休息一分鐘，做三次</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">大砲</span></td>          
            </tr>
            <tr>            
              <td rowspan="1">深跳</td>
              <td rowspan="1"><img src="http://1.share.photo.xuite.net/aaaaa129.tw/11d49fd/17443776/947188797_m.jpg" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="1"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td> 跳起時雙腳膝蓋碰胸，一次連跳15下,做3組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">快攻</span></td>          
            </tr>
            <tr>            
              <td rowspan="2">快步小跑</td>
              <td rowspan="2"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTEhUUEhQVFRUVFxcXGBcYGRoWFxccGBccFxcXFRwYICggHBwlHBQXITEhJSorLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGywkICYsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLC8sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAL0BCwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAQIDBQYAB//EAE0QAAEDAQQGBgUJBAgFBQEAAAECAxEABBIhMQUGQVFhkRMiUoGh0RQycZKTBxZCU1SxweHwFSMzYjRDRHKistLxJGOCo+IXg6SzwiX/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQQDAgUG/8QAMBEAAgIBAgUBBgYDAQAAAAAAAAECEQMSIQQTMUFRIhRSYYGRoTJCcbHh8MHR8ZL/2gAMAwEAAhEDEQA/AIzZ0z66eR8qUMJ7aeR8qszak9iy+6fOndOn6uy8lD/9VuZGf0xokPJSEvNouqvSqQMNmVVtp1TJcUoWlgXiTBWZE1pdM6XQw3fVZ7OsTEJv/wCqqA62MJVjY2zOMhS8fb1qTBEA1VV9qs/vnypfmor7VZ/iHyov522c/wBiR7y/9VOGtlm+xI95f+qlYUgH5nLz9KY+IfKpU6qL+1Wf4h8qmVrdZc/Qk9X+de3vqdOttlP9jHvr86BgfzUc+1Wf4hqVjVZwXv8AiWOshSRDhwnbUrmtVl+xA/8AWvzpzOtFlUbosaQSD9NzYJjOhMVIDRqq6P7Ux8U0q9VHjlamPinyotvWyyEf0Me+vzrla02T7GPiOedFjAzqk/8AamPjHypWtUXxnaWfjHyqVetdj22L/uOedTNa02MYehxH/McOdFhRB81n/tLPxjSK1VfP9pZ+MaKXrRY/sk/+4umL1lsUz6H/ANxdFhSI3NVn7iB6SyCkqk9MYMmRTEar2j7Uz8Y+VFJ1nslwK9EwUpQA6ReYzrk6y2OP6IfiLosKQN82LR9pZ+MajOqlomfSmvjGrA6zWKP6IfiLqA6z2ImfRD1f+asZ8IxoAiTqy/8AamfjGl+bL/2ln4xotOs1jP8AZT8RXlSnWWx/ZVfEV5U7FsV6dVn7yT6U1gQY6Y441I9qy/fUfSmoJJjpThjTndZ7ESEmxqxIj98ofhU1o1ksYWUmyqJBxPSq8qVjBfmy99qZ+Kajc1XeP9rZ+KasPnLY/sqviK8qhd1psQH9FV8RXlRYASdVXRnbGfimn/Nhz7Wx8U09vWSxJgCxqyn+Ks51P86LJ9kPxF+VIAFWq7n2xj4hqfRWrhbUsqtbKpSU+uTBJGJp7mtNl+yH4iqXRWnrM64blkumIkurOXCgA6yWS6hKVOIJAgkEn8KkLCe2nx8qsWVtKAIaaji6ukUW/qmviLrs5KpVnT20+PlTDZk9tPj5Vaq6P6tn4i6aS39Wz76/OkMf+yXez4jzp40U72fEUB6KvcrxrvRl7leNMBusurz7rN1tu8q8DEgfeazKtS7YVXgySMPpJ2CDtq/0m8WkXl3gMttZ9emwFdZaoIF3E5RwpMAhOpls+pPvJ86U6mWz6g+8nzqNOnUdtf8Aipj+nExg4vmqlqDScrUe2k/wFccU+dEJ1Ltg/qFc0+dDWXT6YEuL44qqResI+i4uduKsttCaBolOpls+oVzT50rWp1sCpLChgoTKcyIG2mnWBBiHF81edEsacQTHSL27VbqLQaQRnUy2DD0dfNPnT1an2z7OvmnzqRGn04/vV+8vzodWsIk/vl+8vzp6kGka5qVbD/Z180+dczqZbRnZ1nvT51Mzp/tvLn+8r8DSu6wCcHl+8vzrm0Ojvmhbfs6+afOmq1Otv2dXNPnRKNPoj+Mr3l+dKvTyfrle8rzp2LSDJ1PtnRpT0C5CiY6uAIGOdcnVG2/Z1c0+dSHTpuA9MqCoibyt2Wc1w06I/jK95XnRYaSM6oWz7OrmnzqBWpVtn+jr44p86sxp1H1yveV50idPox/fK95XnRY6B29TrZ9Qrmnzp3zQtn1CuafOmv6wCRceX/N1lZVx1hT9cv3l+dPULSQP6lW0wQwvDinzqa1anWxS1KSwogmZlPnU3zhRH8VfNfnT7Vp1AUR0ixEYSrd7aVodAg1Ptv2dXNPnUTupdtIj0dXNPnUj+sSIVDq8sMVZ86hGsMABbqyqMesrzockLSNa1Itw/qFc0+dEfMu2/UH3k+dL84kR66+avOua0+2c1r5q86SY6Gq1Itp/qf8AEnzqfQ2pVrbcvLbAEEDrJzOW2oXNOt9tf+LzqLR+lgt4wtZSRABJid8TRdhRqNG6FfS2ErbIUCqcQdp40QrRbvYPhQ6ELIwvEd9L0C/5vGuhEh0W72D4U39lu9g+FRqYXuV4030Ze5XjQBfjRaP5/eNKNFN/z+8ataeiu6ObKDSGr7Lybrl8jP1iKq2NSLGsAqS4SJA65GAMVsX0iKA0eMY4q/zUaUFlL8xLH2XPfNNOolk7LnvGtgDTwadIRi06gWTYHPeNd/6fWXP95lHrVsk0tKkOzEj5PrMMuk96mr1Ks6IIKxiBid+B++txNBaXAuj2j7xTSQWZc6gWbYXOf5U1XydWY5lzn+VbCx+r3n76KbAJjKaUtKW44pt0jCn5PLNN6XZ9v5U7/wBP7Lvc5/lXoC2EjNxAocuM/Xt8x51lzMZpycj7GJHyf2be5z/Kmq+T6z73Of5Vu7zeEOoM7o86aa6jKEugpY5x6o8/TqJZ/wCHLl1JvZ4ycN1Tp+T+zb3Pe/KtAZ6VX/T95qzTAFd6UZ2Y46g2fe5z/Kmj5P2N7nP8q24inBM0nS3Y0m9kYMfJ5Z5JvOYiM/ypw+T2zja5z/KttadI2dhMumD3mqlOufSm7ZGFufzQEoHtUcKn58LpKylcNKrbookfJ4yrBPST7cKmtXyeMzKyskgZGMhurRK0jbShXUYSYw66jzhMVSaMtNudcBdDYQDJF8yU5ECAfGnryWqiNYsVO5Fa58ntlOfSe9+VKfk/spJMue9+VbgRS4VvS8EtmITqFZf+Zzp6dRLLuc941ssKRSqdIVmP+YNl3Oe8ag+ZtmYUlSL8lQzVOeFbUqqu0sPVP8yfvpUh2CM6JSBCVLj+8akOih2l+8aMsQ6onj99TyKdCsqFaLTvX7xpv7NTvX7xq1XUfR06QWGBocaeGeNVgXTwquafkdotPRZHrRnsqCzWAAkg7T4maBvUrBiin5HsWqrNxpUscar0qO+mlwzmadPyK14LPoONIWONVvSHeaelw7zRT8hsWAs/HwqG1WEKTBPhUF/iaGtoKkkSeZFLcexZIswSDidpqG1G6gqicPZSWFN4gE4Znup2nn0m6klKUyBiYnbEngDU2e5PTZZw1RTnRWp1WaXCnitRMEovEIBOMACCY4mjmdAWdIwZa9xJPM11+uWuto41HoTyzSl1ZBpLVlh0CR0ZGSm4Qfug8qVppqxt/vrQQCSb7qxJ9kmMBGQpmkLb0TS3DJCElUDMwJgV4NpXSblpeKnVlV5UxjdE7EjcBhXMkou+4a5Sjpb2PebA/ZrQtSmH0uERN0g7ZB9mOdW3ovGvA9F2zoFpU2opUnaDznhwr1vRen23m0LCwkrHqEwoGbpEHHMETtruLb2Rw18DRFiNtSNpupKiKD0a4lThSueqASkgpMHIkKxjCjdN21IREYbf14VPmlfpTKcMNO7RStWRFpWtTgC0pKQlJEpBxJMZHApzqyFmAEDADcIFAWdF0Ae0n2nE09RNbYoaI0Y5cmuTYabJh63hQ1lsARkd48ZqEk7zUTExma03M9i16OuLdAFR30wrophsWHQ13QigmEqUYTJ/W2i3GAgdckncKznNR6s7hjc+iHdAN9D2ywBQgnKDyM/hVVprSobTKXWkkfQUqCeGO2ptF6cs9ub6Mm4sZpmFJIxw7x31OuKt0UvhGo2Ht2aBAO0+ONL0I30NaW1IMHuO+ob9Vq2rTI2qdNBgYG+uLA3mgCrGlmnv5DYZS0wGpDTORwpzFNFPZpgPKaaU41JSTQAt2gdNaTbszJdcmMgBmo5gDlVhmYFeZ/K5bzeZaCuoEKUYMhSiq7jGHVunnWcppGkYt79iFHylu3iS02EbAQsq5zHhWv0FrU1akEpSQtKVKLeZVAwCThM+HKvE78wCcpr0n5OF9G3eS22QokKWo9fZASN0bJ35zhhLNKKs3w4VklRd2XXppbqXSVBK0BKoxGBJEDZ6x8N1aHRWkWbS8m4qS0b6Z2yCk4HaAa84sS2lOu2fo0gX3FoHtJUpIIxEYkcAdwq50XYkMrC0lwKGUKETuOEx31nolP1R6MsemK0vqanWS0BjSNnHSNpacCemQpQRgpZQHBegDZkZ6u2jNNWyzsLKVPRCgkzBCVKCiAojKbihJGYjaK881sDtolbwvmOqtHqgA4IIOIGXmTVlqvoBjSaLzjzrL4MPI6qgpaRgtM4iRB3TeAyq/PCUcUXB3WzJI44Kb19GSfKa44mxhaFgIvJBAxK73q4zgkZ7ZJTlGPj9kbJVAz2V6nrnqVa7NZ1r6Xp2EgJITN5KIwUpBwCRvBMZ+zAMqSALqFK3HDzNefLJP8y3NVgg36XsbDVTR4Q2r94UOEhQUmCCY9VcgynhsmdgrT6y6WRZmEqbuhSFpXCQMZBSYGEYqHKvPbLbHGhKSYmJnhNQ2u2lawlUmQSJyOOMcqxhOSyKX9+P2LJY4qGlfI9EZ14bLqXujgqbCVGZmDIPieNWNs0i1am1JSoqxbXGIwQ4lRHDAV48w70K4UJQcQdo/W0Vv9TbU1eEkFKsO7aK0lBwdrdPozG4yVdGuxutJNqbUChtS0FF43TK03c4BMqwIOGOe6mMkKQFpIUhWSgZB76edOJVbGUtqBCCAoDGAsKBM7MQBHt3YHayaurXedsiyh3FRbmEOmN3qpWY9aDOE76uxTUqjLZ+f9nlv1SlXZlfTUmvP9Y9eHrOvoCgIdTHSEwSJE3YkpnfjuFVli17tMzfSeBSgjwAPjXU2otoFE9WsKr7t0AkIIK1fQGRCCdqjuGW2MJj0Xp9btmvKeSq5LYKUhId6MlCnFhV4pkoPVBEfdk9QrU4pt4wsgrKwtUgKK8TBOeU4bDwrFWWxPILhEENPLSEDFScb0gbUyoju3TEU8zk2kW48MUk33Pb1264i90zaUgTIIPM41i9L61OP9IltSlBpClm5CZSkSpalEAhI7IxNYq06UcdAvKJjLIDuAwpHD0dncWgkrUCkiYJC8FJkQYgnCsY3N0USjoVno+omrVntbItYdU48CUKC0i60uASgAE4wodYkyCDAyoDWPUro1Fyz/uHRjA/hLjdHq92HCaC+QjWBCVvWW4U3oeHWvYiELwIECLu05V6zbdIWUgJecahcwFqCZ2dSYJyOXGq1CNVWxDzJ6tV7mF1d0wtxJYtaSlxOBOeP0Thv2HI40Y42Ukg5jx41R6x6Ssi3lstOEKQIQ8R+6JObfSD6MgYnCd8GbfV613mUocI7MrIEH+8eGO+PDPXyHT6M1cVnjq6NdQmzWRS1dUe07BVomwtjA4kZmpG2lIEJSXDsAUG2x7VHrn2hNL6C4cS2yJ2XnVR3yJ5CuMmWc+hzCEYGeTT1Y1F06e0OYpVWhO8c69AjJRUjZoYWhO8c6Vu1J3jnTEGXhXA0Om0p7Q5070hPaHMUwB9OOOIbvtI6RSDeKJiUwQYjGcZw3bcq8/19saXQwmzqStSm75CSCVEScSTiv8AeOT2oB2V6Ym0Jn1hzFYrXTQaB/xLJgzLgScQfrExiDOce3fUuaDvWivBNOPLffoeZNaJcKC4pNxIIHXlJUTOCBGMRj+darVaxPvBTbVxISAolRIA2CCATJ/A12mtJvWkN9KoKDYIBAgmc1K2TgMoyrYakWdLVnKyRedVPG6nADnePfWMYrJOuxRvgxt9x1m1TKQlSHApQxIUAMSIJQoYpzOYOBx31BpQqZT1kqSomAqARvzPV2RNamy2pMZjnUxtSDgSO8irVDT+Ej57f4tzF6OtC1IKlXTugEY5KBmPZS6Ps5ZtKbQwQgKgLbGRGaSncUnZuJrSvWRhWYSNvVVd8AY8KGb0G2pQuuLiZiQfGMK5blBX2NYzhLYc58oRs9qbbWQWnEjpMCehx/iJGZSoYFOyMMoVRad+Ti0Fan7Ipu0turW4kIUlBSlSipIF5V1QgjEHu21t20hlASgJwAkwJMCJJ2mq216c6GSglJOZBiTvOw99S5cuOaWxRjxzg7iyssHybITZkO2sKLqj12gqEoBPVEozVvx24ZSanW3VdtDYW03LTapWgFV5IOClJUSSAIB4QSZGWu0FrFaLQHErCXEDBK4CSSRiFAYGAZkAYjlP0yRIJAO0H8Qa0hCEo0v5J8s8kZ3L+Dw/TGi1JF5tRebzkDro4OAbh9IYYbMqbYNEPFJINy8OqkqulfCPZOf3Y16TpnVdokuWZfRrzuAi4d8dn7uArKWpKm1hD8oJyUIWk8RjxzBkcKI5JYtpL6GumGXeL+QmpGknmbUhlV5MEoU2rC7HXy3gjbsy2V7lo3S99QTtIB8dnhXmHWW0XUselvNIV0a2z0byBdICVhJSXEQSLoCzjhuq0+S/Sr74X0zSkrblIcUkpbK7xkEGMU7UjaNkmOJSTzcyPRpJ+U99/wBPuYclwtPqeN6zWct2y0tqmUPupM54OGDjvGM7ZoSzOkTAEnvrY/K1oNbNtU6VF1L8K6SAB0kQpuE4SAkEcDtgms5ouwOEhaU3onaMxjjxppOX4Vf6BGDunsep6qPqDJW48paHUJUkKUZbViFp604YDxqmXox9t9b0BTLl7rAzBvYBQzBmRuxqHVph20C6450baMyDCzOxI/E7q32j+iabDaSLoB9ZV4mSSbxOcyazw8PK9T2LOI4lR9K3fcxK7KlZkpCt8yD3lJBPfQukdBJUJSopO7FSORxH6wrY2rQrKpLbnRk+xSR3SDHCapRoN9s9V5DiABheEnfN/LZHWPGdtCi4O6MOdGXRmAcS9YXg6kXVdYCReQq8CMNhGRjeBNVb9oW4u+6pS1KzUokk8PZwGVav5QrM4lLJWAEyoABSTjAMwk8DWKmuZytmMqvY0IcvtpCLxImQmcdsARJMCttqNbw0mzoXeC3w+etIMtLSEDHZdJMb/ZWP1KsRccIKnEJKVdZGBOWGNX+t9rW2bG4SSpvpQDnkQm8Jx6ySDBymJqbLkt6SvBhqOs9rsj88qKvHfXjmgdf1oIv9YbxXoTGsaFJCoiRNcKfk6lifYqBo1r6tHuinfs5r6tHuiirtcRXrHlAn7Pa+rR7op6NHNfVo90URT0UCB06Na+rR7opDoxr6tHIUaRXEUwBE6Ma+rTyFPTo5v6tHuiiUin0rAyOlNSErcCmVhpJ9ZESBxRu9mX3VdJ0W2hKUhCeqAASMcNp41aCh3RXMMcYttI0nlnNJSfQFYsLZEltOPAVJ+z2+wjkKkYThUl2uzMFVYWxiW0cqnbShpOAAJxIGFdfTJnG7yBqr0loi02oEMlCRvWopngIST4VBxGS3pR6XDYtMdT7lZpfWYJJSnrEcqzmlHLQ4106kK6OYCo6o4742TlOFa/RupAahVpha+yP4Y54q74HCtGEiIIBEREYRlEbq5x8O5K2zvLxSg6irPKtWdOKsx2lJMnHGd9el2O0sWtIWAlSwMZAvRuNZPT+peJcso4lon/6yf8p7jsqn0JpT0dcglCgYUkgjLMEHI1nU8UjRuGaOx6MbA32E8hTHtEsLF1TSFA7CkGi9G2tFpQFNqTeiSJw4nhRWj2x6xy2VY88dNnnrBJSordXNVEMFSpISCSkFR6o3E7f1nQutWlXmyC2AUEpShBN2+pS7nWV9EYiPGjNO6e6MdUSMoAJJ4QKxGkdalLMXE7usJjGYjdIGHAVA2j0sal1ZrdC2ZZSVW1Tal4wgQUNg7ATmeNUOuGmLNCm0oRnJVAEEfSkYzWV0jppRwCySeMA+2MhVTa9FupIcegjZdxQmcsd/6xpxrqwknfxPR9QUMuIcU4gHpFkgECUpSSET/OQcTjsknGtDadDtpPqIIORgfqa8o0Xb1tkFtV0jZsNemar6a9ITCxB2gZe1O6t48VNyuW5Pm4ZVsSfs9v6tHIV37Pb7COQo95opMHu40jKLxx9UZ+VVzyqMbIYYnKVHnmvdhL7JSyxdCDeSsoKb5GBCTGRBPtwrzixaFecUAExJAlRugSYxnGvfNO6xstpKDCpEEHEEca8stFsKlQiTKuqBic8AIzNQPM2XR4dFcw65ZlFOSk9WRiMNoPGp0pd0g62zeAJnrkEhIiSojugZSSBUmsDVoauJcTcC0ymIx/lkbROXGu0KbQytKktOXjgAUKAWDsBIrJpp79SrUpRpdD0226FYWm6plAEQLouEDYElMQOGWFUC9VnQepaiE7ApMke0gieVXY0opLYLiSlUeqYJB4waoHtPCTiO9UVvLNjklcdyWGDJBupUvqbEGnXqjBp16vQPNOmnoNMmuCqYBSTSzUKVUpXSAlmlmoCunpVTAemonacFU1w4UDobZ8hUoqCyrwFTqcigRQaY0baA4XrMpJn1ml4YgRKFZbBgY9uyqtGlba11l2RxW+Be/wAk1sg7ShdTz4eMnZVDipxWnqZln5SrmDrak8FT9xq6sOuNhfzUEK5UYojbjQVr0VZ3R+8abVxgAj2KGI51wsEo/hkdvPCX4ol+jRt9KVtuJIVlOE7orJazart2lxQCujfbgKUkSDIBSFjCcDgQecRWp0H1FNt3JF1SkrMqIAUEpSNiTniezhM4Lpe0C+oJTdkhbmUqUEhKASNyAD3p3Gu3cvS9/Jmqh6ls62+vc8zsWhbXZngm8kJIUL4MpIjIgwZ3jdJExV1ojWdV4svAIUjBQG3iOBGNWOsOj/SGggYQtKpkpyBGMCSMcRIkSNtZrT2qrxV0zK76wMURdMAfQxM7cDv7qmyYJJvStizHxEZRWt7mxtGhk2gApcUGzmhJulfAq9YD2EGojoJhKVN9ChIUClUJF4giPWz75rC6E1pcaN1ZIHik8RW70dpoWhOy8ndtG8cKWCai6aOeIhJq0zyDTWjVWd1TSs0HA9pJ9VQ9o8ZGyr3VfSqSLjhGGGOII2g1pNd9X12lKFs3ekRIIJi8k4wCcJBGEx6xrz+16CtTHWcaUlOEqlKk44CSkmO+jLicW6Wx1izKUVb3NnbdTQ8AuxwFHNBPUOc3T9E8MsRlVHZ7c9Y3IWlSFA+qoRMZxsPtE1ptVdYEMANrWDMGc431rbbZbPbUwVNuAZpUAY4kZgjYQe+sopM0lKUX5RS2TXxlbPXlKsAZE5mCR7KJVa0PN/uSSo4BN6Ek7yaqdKfJ82QRZ1FCsgL19JJMQQrrcjhORrL2B17R79x9JTf2nEKAMSg5HjtGRg05xkluKEoP8PUtLXqktTgQ4u86oXzH8NpJMSqcVqJBASIyJJrQaL0EzZxLaZXEFxWKzwGxI4CKL0dpttwQsyd+0A5GiHoBwM1vwrh07k3Fcz5Gbt+mlMqBUCUJUiAEAHrJjAqMqzPqjLCnaZ1oSlAVIxEgA4kbxwx21bIsqFXVEC8lJCTtTOccaiY0Y0hHRhCSCIVeAJXOd7fNd5OG1yuxY+KUIpUZpxKrTBW6hCTHVbUklXArxg8IqutT1hbUUCzrcu4X+lVidu3fI7qB1m0AuyrKmwVMHEKzKP5Vn7lHP21Rm0cam0uDplWpZFaZ603pEHbTk6QFUzbbIEAL51Mktblc6sWV9zzuWvKLNzSApPTwMTEUAOi7KudIttkjFCvep84OWvKLcW4cIp4tg2VVpLQHqq509KmuwrnT5wcuPlB3popfTQKCC2uwedcHGuwrnRzQ5a8osBbRTV20b6C6VrsK50vSNdg86OaGiPkIslqw5/fRJtQqvS40MkHnTg+12Dzp80OXHyG+lCkNrFBl9vsnnSdO12DRzg5cfJYG1CmG1ig/SG+waT0hvsGlzkGheUS2vT6W1oQ24VrukrS2cgqLrd8TdJJClECUgHEGiXLfOJMk4mqphphE3WomTnOeJiThjuqbpWuwedZQk03J9TbJplST2QeLaKcLYKrg812DSi0t9g1pzjHQvIDrHopp0FYAS4r6Q3jarZEZ1R6u23oXQFxGwjER2knaDvrTvuNKSU3DiKrtA2RBfTZltFaUkuIcIJupgApVEkid4iEisZxU3tsVYsmlU3ZqH3YSFjFC5uq2E5ke2g12pKgQoAg4EHEEHMEVtVaGQtotySgxdwACCMlJyPCBhGG+sC+ltCikoMg789xHAjGttbS3JdMW76FRbdVLMs3mlKZV/KZR7qvwIrO27RVqYMi8tKcltySBxA6w8RxraqfaEm4rnQeirXevqcSImE3cOJnHiB3GspQjJXRtHLKP5rKHQ+uVoQoXihwDtDriOIgyK3bBbt7CkEXys3glUYKOPVP0ZgiQR99U9ts1md/iM3jleyV3KBnxoTQI9EfvJUSgSU31XQmc+scyAQO/bXEIU6b2NJ5FJbdSi0vo5+wuwQoIJPRrIMKjNBORIyI760OgtPJWjrm7dgSdgJiFewnPcK2emCi22W6pCVIwV1Z2mE3SQIViTlsjbXkWlLGbK861evBKovZTB27jvFZyWido0hLmQ0y6nqFqsDjDSVrKCk4ApUCMcRG+QNlV6raKrdDWtT7HXWpaWPobAIhKp3jrCndK12TzqtZ7Inip02Fqtgqqf0VZFKJUy3Jzwj7qmKmuyrnXKdaP0DQ8qfVAoJdJFeHKcHaEvDZ305CvbzqHmSPX9kxeP3DQun3ztFBA08K7qOZIPZMXj9wy8fyx8q6+d1Ck8TXYHeaXMkP2TD7oWHOFIp7fA76E6FB+iOQ8q5LDfYHIeVGt+R+y4vdCvTEiZI94eNILcjtD3hUCGk9gdwHlS3B2RRzGHsuP3USDSTfbR7yfOni3NZ9IjmPOogkbAK5xpJPqp5A/fT1sXsuPwiRWkGh/Wt+8KT9ot/WNn/qH4mg3W2tzQO4hP3YUwso3Mx/cHnRrYvZ4e6g8aQb+sR7yfOpGrSFeqoH2GfuNVyEoH1Q9gHn+oqNdnJBh1GeHUHH+bGjW/I/Z4e6v78y4XeBggg8QQfGolWtIzUnmPOqVuxugyh5A9jaQfvqdSrYD/SThsMgcpijV8RcmHufsWYtQO0cx513pPEfrvqtS/atrjJGGbSCT3lM04LeOZZx+kAsHuAWE+FGp+Q5MPc/YtGCpZCUJvFRgAbTurbasathlRetJAWpIT0V8KSADIKvolQxgjIE444eZuIjEuqSfakcpE+NI4wFxNrcVwWnpBJnOXuO6tI5VFfHzuYZeGcpenZfoj1DWLWyzMFLXToOHXAUCuNkHj+iJrD6a1oatDoUkoHVSkJCxOEwIAzxiBOzOqxNlWBhaWAOLSx3RMDnTk2Z3a60fYWx4FU1pHiEl6o38zP2F3tKvkv8ALDrOw4+SluJGfqgIBjFRzUeAk7qvbDospb6NYhMHZKp7U7cZPed9ZgWR7ZeM9kAjmAaicYWPWw9og+Io9qS/L9x+wX+b7fyXdqsLqMbsjgpJ8M/CqV+1oUCFXCOJCsfZTEpMyVciEnvlJ/CqtWgQFBQUCA4HSlfWBMyUym7AMRtraHE4XeqKX1Zjk4HLGtLb/wDKPRNXdIlLMOgj1sxdlIJA9YyQMDjjGdZZqwKceWp5BWFKMAC9JUSbxAkgAA7MzwotOkmHD/8A0HClMyEMgIbUABHSrgrUcxEgRGdamya1aOZQlNncbTGECFGJxGIxJg45yNtSRktXp79dmzt4nHeS+6QHoWztthbQbjpBdhIbAjaesRKgYIEHLKqDS9m6F0okqTmlUReSdsHjIPEGn6X0gl5wOXbpUCVCb90zhcw2jMkjEHBIONbpu3m0KSSswgXYujKT/MSMDvNVxjz8mmC2S3f9ZjOS4eGrJ1fZr/NET9shN4Eb52e01M1MC+tCFdkgyN07jEYbKhsLiEqSpSLyRMIJiDnewzI2bJxzAi3e04i8f3YVxkGd2yqI8E+lEsuNg3dL5f8ACmCv1+v1hUk7yOX5VCEnd+u409I/WVeMfSkqVZ5cpqQE/oHu2VAgcqkBoAkJ3/iPwpyRuPOfKovYD7IqVJ3CgY8CMZ8fupSePI0gI40t3H8x+hQM4qO/PiaW+e14mugUoSI/38qAEB4+CorigHMg8/KnXRhiP9+6nQP1NFCIg0IgXeR8qjNhbOxB9qfyqdUY1woHQN6C32G+X/jSKsDQyQ37v/jRYjj9/wCNJhQKkBq0Yyf6tv3B5U39mM/VtHZ6o8qOw4/rvpLqT+h50bhpXgrjoZn6tPiKhVoFjsT7CrHxq3IG88vzpIB2nkPOi2LRHx9igXolhP8AVO4dm8rz+6hjYE7G1ewpOH/xyPGtTCds8h50hA2TyHnT1M5eNdv2M5Z2kg/0ZeeYQk/ehJ8KLL422dyRuSg/jVtIH+01xA4+FDY1Gu5T+lj7M77ifOnq0wpIH7l/DcP9Kqs5nPdspFJHHw86Vg4vz9itd0+oGFMOkiJvtpWcswVzUJ1iT9KzE/8AthP+QirN0K+jd75/ChlF7YG+ap4DKur/ALZw4tf8AxrKzMGzlO+DcO76aiPClb0ywcOiX3LZPhInwosl3GQ3HAq/EUA6i0xgpHcPvxo2FUl3f0/kNs1saPqrcQT/AHE87jp/Gn2gAkSoLw3nDvXFUqk2uPWT3AT/AJaj/wCK4HjH5inv5+5xa7p/RFovRyFEkstKPtYJP+KTXHQ4+yf9tP4VWpTaMJge0H8F0pYf3pPcv/VS+Y0/h9jVaE0Qu03whQBQBgZkkhUBPHqxiRmKIb0EShbgWkhAdORk9GVjI5T0Rzymqqx21xono3FIkpJu4TdMpnfBqb9oORF7O99FOF+9ejDD+IvLK8YihONbnTjkvZljb9BraZ6ZSgU3gMNsyCe66a5WhHuE9YReTiUqDZAMxN9V2N4NAuW51aSlTilAkEg5SnAezOmN21YvQtXWBBxOIUbxB9pAJ30XEajlrdoNc0a4lVwxPXOYEJQVXlHHAdRWe6p2tCuqEgJgwQSpOJKb4GeBuwqNxqubtLnbWMSRCiIJMk55zXekLwlSjszOGeWPE8zvo9J1WTygtNiV1JwKyUgRjgbt48L0jP6CqRNmV0fSfRmNk7NkztFQKfUDN4zF2SZIERAnEYYYVIbYsogmQTMQM8TOWeJ50tjr1CEV2H6H50xKpNKTs/WVI7JJGz7q4xx/XfTKW7QBJA3/AK51xAG37pqLZTiKBD0gdqugb/vqKcacVeNAEmG/wrsO14Y1EDNdFAD548q48J/XfTZwrlYCkB0j9f71xw21w/XdSHKgB2HHjTVAcc9351y6jR7KYD4G/wAPzppjefDzpql8KVWFAjpExj7IppjKT4U05e2kOX69lAHKA3me7zpJG/w/Om3saYo0AKQN9Mkb/D865Jk86jG6gQx4H6JE8RP4ihSl3tN+6f8AVRdcE0zlqz//2Q==" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="2"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>小跑三步，衝刺三步，一次五趟，20秒內完成</td>
              <td>增強肌耐力&衝刺能力</td>
              <td><span class="label label-important">自由球員</span></td>          
            </tr>
            <tr>            
              <td>小跑三步，衝刺三步，一次十趟，45秒內完成</td>
              <td>增強肌耐力&衝刺能力</td>
              <td><span class="label label-important">自由球員</span></td>          
            </tr>
            
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab4">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="4">長包球</td>
              <td rowspan="4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhPGVlzMSBUpaZ55Ym7vYsphAM0QkmJbzAwoXx00oP14qsXZCt0A" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td rowspan="4">棒式</td>
              <td rowspan="4"><img src="http://d2p1ovod81kcns.cloudfront.net/upload/img/2012/11076397d.JPG" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab5">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="4">太空椅</td>
              <td rowspan="4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhPGVlzMSBUpaZ55Ym7vYsphAM0QkmJbzAwoXx00oP14qsXZCt0A" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td>一組2分鐘，休息一分鐘，做七組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-success">下肢</span></td>          
            </tr>
            <tr>            
              <td rowspan="4">棒式</td>
              <td rowspan="4"><img src="http://d2p1ovod81kcns.cloudfront.net/upload/img/2012/11076397d.JPG" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="4"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
            <tr>            
              <td>一組4分鐘，休息一分鐘，做六組</td>
              <td>增強肌耐力&連續跳躍能力</td>
              <td><span class="label label-warning">軀幹</span></td>          
            </tr>
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab6">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>名稱</th>
              <th>圖片</th>
              <th>連結</th>
              <th>內容</th>
              <th>目的</th>
              <th>部位/位置</th>
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td rowspan="1">計時</td>
              <td rowspan="1"><img src="data:image/jpeg;base64,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" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="1"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>計算球員鍛鍊時間</td>
              <td>控制訓練量</td>
              <td><span class="label label-success">訓練</span></td>          
            </tr>           
            <tr>            
              <td rowspan="1">補水</td>
              <td rowspan="1"><img src="http://s1.gigacircle.com/media/s1_53b15cf94ce88.jpg" height="200" width="200"style="display:block; margin:auto;"></td>
              <td rowspan="1"><a href="https://www.youtube.com/watch?v=yRtbjm4Bv0s">影片連結</a></td>
              <td>定時給予適量水分</td>
              <td>避免球員抽筋</td>
              <td><span class="label label-success">訓練</span></td>          
            </tr>
            
        </tbody>
      </table>
      </div>
      <div class="tab-pane" id="tab7">
        <table class="table table-bordered" style="background:none;">
          <thead>
            <tr>
              <th>球員</th>
              <th>訓練項目</th>             
            </tr>
          </thead>
          <tbody>           
            <tr>            
              <td>
                <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10408123_799079296853096_5441423380959526673_n.jpg?oh=035c8ef5dc3e59c06e33160b81a4b647&oe=5585F531&__gda__=1434671288_5d5d6e19bbe9587f7283e009b4692785" height="200" width="150"style="display:block; margin:auto;">
              </td>
              <td>
                <ol>
                  <li>太空椅：一組4分鐘，休息一分鐘，做六組</li>
                  <li>棒式：一組3分鐘，休息一分鐘，做七組</li>
                  <li>老漢推車：一次10m，休息一分鐘，做五次</li>
                </ol>
                <?php
          echo'<div id="form-content21" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content21" value="" placeholder=""  style="font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit2-1" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content21"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
        ?>  
              </td>                 
            </tr>
            <tr>
              <td colspan="2">        
                <div class="progress progress-striped active">
              <div class="bar" style="width: 62%;"></div>
              </div>
            </td>                                                 
            </tr> 
            <tr>            
              <td>
                <img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/p206x206/10978590_946786072006611_9217496904402625168_n.jpg?oh=650068c2f90ae91635c1ec3f4d742be2&oe=55B3697D&__gda__=1433631053_1312a80da3adcb8778d260b766113f8b" height="200" width="150"style="display:block; margin:auto;">
              </td>
              <td>
                <ol>
                  <li>太空椅：一組4分鐘，休息一分鐘，做六組</li>
                  <li>棒式：一組3分鐘，休息一分鐘，做七組</li>
                  <li>老漢推車：一次10m，休息一分鐘，做五次</li>
                </ol>
                <?php
          echo'<div id="form-content21" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content21" value="" placeholder=""  style="font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit2-1" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content21"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
        ?>  
              </td>                 
            </tr>
            <tr>
              <td colspan="2">        
                <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 14%;"></div>
              </div>
            </td>                                                 
            </tr> 
            <tr>            
              <td>
                <img src="https://scontent.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/10427269_705499416153573_6974402205880190394_n.jpg?oh=0a882cc65f20e1a92ba9b5bf4a7b405b&oe=55828FA0" height="200" width="150"style="display:block; margin:auto;">
              </td>
              <td>
                <ol>
                  <li>太空椅：一組4分鐘，休息一分鐘，做六組</li>
                  <li>棒式：一組3分鐘，休息一分鐘，做七組</li>
                  <li>老漢推車：一次10m，休息一分鐘，做五次</li>
                </ol>
                <?php
          echo'<div id="form-content21" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content21" value="" placeholder=""  style="font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit2-1" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content21"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
        ?>  
              </td>               
            </tr>
            <tr>
              <td colspan="2">        
                <div class="progress progress-striped active">
              <div class="bar" style="width: 97%;"></div>
              </div>
            </td>                                                 
            </tr>           
         </tbody>
      </table>
      </div>
    </div>
  </div>
  
  </div>
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>

</body>
</html>