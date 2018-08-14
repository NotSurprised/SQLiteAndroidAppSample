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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './fame_museum.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './fame_museum.php';</script>";
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
<style>
h5{font-size: 16px; margin:0px;}
thead:hover {background-color: none;}
tbody>tr:hover {background-color: #111;}
</style>
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
            <div class="nav-li" style="">
                <a href="train_login.php">練球菜單</a>
            </div>
            <div class="nav-li">
                <li class="dropdown" style="line-height: 40px; display: block;background:#232323;">
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
    <div id="container-inner"  style="padding-top: 100px; background-color: transparent;">
      <ul class="breadcrumb" style="background-color: transparent; padding: 5px 15px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li><a style="color:#aaa;">Static</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">FameMuseum</a></li>
      </ul>
<?php
        try
        {
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $row = $db->query("SELECT `PName`,`pNum`,`PPosition`,SUM(serveGoal),SUM(serveLost),SUM(spikeGoal),SUM(spikeLost),SUM(lobGoal),SUM(lobLost),SUM(serveGoal),SUM(serveDealMis),SUM(spikeDealMis),SUM(lobDealMis),SUM(dealMis),SUM(blockGoal),SUM(blockLost) FROM player LEFT JOIN record ON player.pId = record.pId group by player.pId");
          echo '<table class="table" style="color:#fff;">';
          echo '<thead style="font-size:20px;">
                <th>事蹟</th>
                <th>姓名</th>
                <th>背號</th>
                <th>主打位置</th>
                <th>紀錄</th>
                </thead>
                <tbody class="tbody">';
          $HonorName[]=20;
          $HonorNum[]=20;
          $HonorPosition[]=20;
          $MostServe=0;
          $MostServeLost=0;
          $MostSpike=0;
          $MostSpikeLost=0;
          $MostLob=0;
          $MostLobLost=0;
          $successRate1=0;
          $successRate2=0;
          $MostServeDealMis=0;
          $MostSpikeDealMis=0;
          $MostLobDealMis=0;
          $MostDealMis=0;
          $MostBlockGoal=0;
          $MostBlockLost=0;
          $randomNum=rand(1,20);
          while ($r = $row->fetch(PDO::FETCH_ASSOC))
          {
            $serveSum=$r['SUM(serveGoal)']+$r['SUM(serveLost)'];
            $spikeSum=$r['SUM(spikeGoal)']+$r['SUM(spikeLost)'];
            $lobSum=$r['SUM(lobGoal)']+$r['SUM(lobLost)'];
            if($r['SUM(serveGoal)']+$r['SUM(spikeGoal)']+$r['SUM(lobGoal)']>0)
            {
              $successRate2=($r['SUM(serveGoal)']+$r['SUM(spikeGoal)']+$r['SUM(lobGoal)'])/($serveSum+$spikeSum+$lobSum)*100;
            }
            if($r['SUM(serveGoal)']>$MostServe)
            {
              $HonorName[1]=$r['PName'];
              $HonorNum[1]=$r['pNum'];
              $HonorPosition[1]=$r['PPosition'];
              $MostServe=$r['SUM(serveGoal)'];
            }
            if($r['SUM(serveLost)']>$MostServeLost)
            {
              $HonorName[2]=$r['PName'];
              $HonorNum[2]=$r['pNum'];
              $HonorPosition[2]=$r['PPosition'];
              $MostServeLost=$r['SUM(serveLost)'];
            }
            if($r['SUM(spikeGoal)']>$MostSpike)
            {
              $HonorName[3]=$r['PName'];
              $HonorNum[3]=$r['pNum'];
              $HonorPosition[3]=$r['PPosition'];
              $MostSpike=$r['SUM(spikeGoal)'];
            }
            if($r['SUM(spikeLost)']>$MostSpikeLost)
            {
              $HonorName[4]=$r['PName'];
              $HonorNum[4]=$r['pNum'];
              $HonorPosition[4]=$r['PPosition'];
              $MostSpikeLost=$r['SUM(spikeLost)'];
            }
            if($r['SUM(lobGoal)']>$MostLob)
            {
              $HonorName[5]=$r['PName'];
              $HonorNum[5]=$r['pNum'];
              $HonorPosition[5]=$r['PPosition'];
              $MostLob=$r['SUM(lobGoal)'];
            }
            if($r['SUM(lobLost)']>$MostLobLost)
            {
              $HonorName[6]=$r['PName'];
              $HonorNum[6]=$r['pNum'];
              $HonorPosition[6]=$r['PPosition'];
              $MostLobLost=$r['SUM(lobLost)'];
            }
            if($successRate2>$successRate1)
            {
              $HonorName[7]=$r['PName'];
              $HonorNum[7]=$r['pNum'];
              $HonorPosition[7]=$r['PPosition'];
              $successRate1=$successRate2;
            }
            if($r['SUM(serveDealMis)']>$MostServeDealMis)
            {
              $HonorName[8]=$r['PName'];
              $HonorNum[8]=$r['pNum'];
              $HonorPosition[8]=$r['PPosition'];
              $MostServeDealMis=$r['SUM(serveDealMis)'];
            }
            if($r['SUM(spikeDealMis)']>$MostSpikeDealMis)
            {
              $HonorName[9]=$r['PName'];
              $HonorNum[9]=$r['pNum'];
              $HonorPosition[9]=$r['PPosition'];
              $MostSpikeDealMis=$r['SUM(spikeDealMis)'];
            }
            if($r['SUM(lobDealMis)']>$MostLobDealMis)
            {
              $HonorName[10]=$r['PName'];
              $HonorNum[10]=$r['pNum'];
              $HonorPosition[10]=$r['PPosition'];
              $MostLobDealMis=$r['SUM(lobDealMis)'];
            }
            if($r['SUM(dealMis)']>$MostDealMis)
            {
              $HonorName[11]=$r['PName'];
              $HonorNum[11]=$r['pNum'];
              $HonorPosition[11]=$r['PPosition'];
              $MostDealMis=$r['SUM(dealMis)'];
            }
            if($r['SUM(blockGoal)']>$MostBlockGoal)
            {
              $HonorName[12]=$r['PName'];
              $HonorNum[12]=$r['pNum'];
              $HonorPosition[12]=$r['PPosition'];
              $MostBlockGoal=$r['SUM(blockGoal)'];
            }
            if($r['SUM(blockLost)']>$MostBlockLost)
            {
              $HonorName[13]=$r['PName'];
              $HonorNum[13]=$r['pNum'];
              $HonorPosition[13]=$r['PPosition'];
              $MostBlockLost=$r['SUM(blockLost)'];
            }
            if($r['pNum']==$randomNum)
            {
              $HonorName[19]=$r['PName'];
              $HonorNum[19]=$r['pNum'];
              $HonorPosition[19]=$r['PPosition'];
            }
          }
          $MostRecord=rand(20,250);
          echo "<tr><td><h5>睡過頭所以遲到<h5></td>";
          echo "<td>".$HonorName[19]."</td>";
          echo "<td>".$HonorNum[19]."</td>";
          echo "<td>".$HonorPosition[19]."</td>";
          echo "<td>".$MostRecord."</td></tr>";
          $MostRecord=rand(20,250);
          echo "<tr><td><h5>扶老太太過馬路所以遲到</h5></td>";
          echo "<td>".$HonorName[19]."</td>";
          echo "<td>".$HonorNum[19]."</td>";
          echo "<td>".$HonorPosition[19]."</td>";
          echo "<td>".$MostRecord."</td></tr>";
          $MostRecord=rand(20,250);
          echo "<tr><td><h5>翹練</h5></td>";
          echo "<td>".$HonorName[19]."</td>";
          echo "<td>".$HonorNum[19]."</td>";
          echo "<td>".$HonorPosition[19]."</td>";
          echo "<td>".$MostRecord."</td></tr>";

          echo "<tr><td>累積最多發球得分</td>";
          echo "<td>".$HonorName[1]."</td>";
          echo "<td>".$HonorNum[1]."</td>";
          echo "<td>".$HonorPosition[1]."</td>";
          echo "<td>".$MostServe."</td></tr>";
          
          echo "<tr><td>累積最多發球失分</td>";
          echo "<td>".$HonorName[2]."</td>";
          echo "<td>".$HonorNum[2]."</td>";
          echo "<td>".$HonorPosition[2]."</td>";
          echo "<td>".$MostServeLost."</td></tr>";
          
          echo "<tr><td>累積最多扣球得分</td>";
          echo "<td>".$HonorName[3]."</td>";
          echo "<td>".$HonorNum[3]."</td>";
          echo "<td>".$HonorPosition[3]."</td>";
          echo "<td>".$MostSpike."</td>";  

          echo "<tr><td>累積最多扣球失分</td>";
          echo "<td>".$HonorName[4]."</td>";
          echo "<td>".$HonorNum[4]."</td>";
          echo "<td>".$HonorPosition[4]."</td>";
          echo "<td>".$MostSpikeLost."</td></tr>";

          echo "<tr><td>累積最多吊球得分</td>";
          echo "<td>".$HonorName[5]."</td>";
          echo "<td>".$HonorNum[5]."</td>";
          echo "<td>".$HonorPosition[5]."</td>";
          echo "<td>".$MostLob."</td></tr>";  

          echo "<tr><td>累積最多吊球得分</td>";
          echo "<td>".$HonorName[6]."</td>";
          echo "<td>".$HonorNum[6]."</td>";
          echo "<td>".$HonorPosition[6]."</td>";
          echo "<td>".$MostLobLost."</td></tr>";

          echo "<tr><td>最高成功率</td>";
          echo "<td>".$HonorName[7]."</td>";
          echo "<td>".$HonorNum[7]."</td>";
          echo "<td>".$HonorPosition[7]."</td>";
          echo "<td>".(int)$successRate1."%</td></tr>";

          echo "<tr><td>累積最多接發失誤</td>";
          echo "<td>".$HonorName[8]."</td>";
          echo "<td>".$HonorNum[8]."</td>";
          echo "<td>".$HonorPosition[8]."</td>";
          echo "<td>".$MostServeDealMis."</td></tr>";

          echo "<tr><td>累積最多接扣失誤</td>";
          echo "<td>".$HonorName[9]."</td>";
          echo "<td>".$HonorNum[9]."</td>";
          echo "<td>".$HonorPosition[9]."</td>";
          echo "<td>".$MostSpikeDealMis."</td></tr>";

          echo "<tr><td>累積最多接吊失誤</td>";
          echo "<td>".$HonorName[10]."</td>";
          echo "<td>".$HonorNum[10]."</td>";
          echo "<td>".$HonorPosition[10]."</td>";
          echo "<td>".$MostLobDealMis."</td></tr>";

          echo "<tr><td>累積最多處理失誤</td>";
          echo "<td>".$HonorName[11]."</td>";
          echo "<td>".$HonorNum[11]."</td>";
          echo "<td>".$HonorPosition[11]."</td>";
          echo "<td>".$MostDealMis."</td></tr>";

          echo "<tr><td>累積最多攔網得分</td>";
          echo "<td>".$HonorName[12]."</td>";
          echo "<td>".$HonorNum[12]."</td>";
          echo "<td>".$HonorPosition[12]."</td>";
          echo "<td>".$MostBlockGoal."</td></tr>";

          echo "<tr><td>累積最多攔網失分</td>";
          echo "<td>".$HonorName[13]."</td>";
          echo "<td>".$HonorNum[13]."</td>";
          echo "<td>".$HonorPosition[13]."</td>";
          echo "<td>".$MostBlockLost."</td></tr>";
          echo '</tbody></table>';
        }
        catch (PDOException $e)
        {
          $db->rollback();
          echo $e->getMessage();
        }
      ?>
    </div>
    <div>
      </br>
    </div>
  </div>
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>


</body>
</html>
