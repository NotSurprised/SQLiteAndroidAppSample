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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './recent_player.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './recent_player.php';</script>";
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
      <div id="header-inner"><a href="./index.php">
        <div class="valleyball-icon" style="font-size:23px">中山資管系男排</div></a>
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
            <div class="nav-li">
                <a href="train.php">練球菜單</a>
            </div>
            <div class="nav-li" style="background:#232323;">
                <li class="dropdown" style="line-height: 40px; display: block;">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >統計</a>
                  <ul class="dropdown-menu" role="menu" style="background-color: #000;">
                      <li><a href="gameboard.php">校內聯盟賽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="gameboard_outdoor.php">校外各盃賽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="fame_museum.php">名人堂</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="recent_player.php">現役球員</a></li>
                  </ul>
                </li>
            </div>
            <div class="nav-li">
                <li class="dropdown" style="line-height: 40px; display: block;">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >隊史</a>
                  <ul class="dropdown-menu" role="menu" style="background-color: #000;">
                      <li><a href="team_honor.php">隊譽</a></li>
                      <li class="divider" style="background-color: #333; border-bottom: 0.5px solid #333;"></li>
                      <li><a href="uniform.php">歷屆隊服</a></li>
                  </ul>
                </li>
            </div>
            <div class="nav-li">
                <a href="calender.php">行事曆</a>
            </div>
          </div>
      </div> <!-- end of header-inner -->
    </div> <!-- end of header -->
  <div id="container" style="background-color:#efefef; box-shadow:1px 1px 80px 20px rgba(20%,20%,20%,0.4) inset;"> 
    <div id="container-inner" style="width:90%; padding-top: 100px; background-color:none;">
      <ul class="breadcrumb" style="background-color: transparent; no-repeat; padding: 5px 15px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li><a style="color:#aaa;">Static</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">RecentPlayerData</a></li>
      </ul>
      <?php
                    
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $row = $db->query("SELECT `PName`,`pNum`,SUM(serveGoal),SUM(serveLost),SUM(spikeGoal),SUM(spikeLost),SUM(lobGoal),SUM(lobLost),SUM(serveGoal),SUM(serveDealMis),SUM(spikeDealMis),SUM(lobDealMis),SUM(dealMis),SUM(blockGoal),SUM(blockLost) FROM player LEFT JOIN record ON player.pId = record.pId group by player.pId");
                        echo '<table class="table" style="color:#fff;">';
                        echo '<thead >
                    <tr style="width:40px;">
                    <th>姓名</th>
                    <th>背號</th>
                      <th colspan="3">發球</th>
                      <th colspan="3">扣球</th>
                      <th colspan="3">吊球</th>
                      <th>成功率</th>
                    <th>接發失誤</th>
                      <th>接扣失誤</th>
                      <th>接吊失誤</th>
                      <th>處理失誤</th>
                      <th colspan="2">攔網</th>
                      <th>總得分</th>
                    </tr>
                    <tr >
                      <th></th>
                      <th></th>
                      <th>得分</th>
                      <th>失分</th>
                      <th>總數</th>
                      <th>得分</th>
                      <th>失分</th>
                      <th>總數</th>
                      <th>得分</th>
                      <th>失分</th>
                      <th>總數</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>得分</th>
                      <th>失分</th>
                      <th></th>
                    </tr>
                    </thead>
                            <tbody class="tbody">';
                        while ($r = $row->fetch(PDO::FETCH_ASSOC))
                        {
                          echo "<tr><td>".$r['PName']."</td>";
                          echo "<td>".$r['pNum']."</td>";
                          echo "<td>".$r['SUM(serveGoal)']."</td>";
                          echo "<td>".$r['SUM(serveLost)']."</td>";
                          $serveSum=$r['SUM(serveGoal)']+$r['SUM(serveLost)'];
                          echo "<td>".$serveSum."</td>";
                          echo "<td>".$r['SUM(spikeGoal)']."</td>";
                          echo "<td>".$r['SUM(spikeLost)']."</td>";
                          $spikeSum=$r['SUM(spikeGoal)']+$r['SUM(spikeLost)'];
                          echo "<td>".$spikeSum."</td>";
                          echo "<td>".$r['SUM(lobGoal)']."</td>";
                          echo "<td>".$r['SUM(lobLost)']."</td>";
                          $lobSum=$r['SUM(lobGoal)']+$r['SUM(lobLost)'];
                          echo "<td>".$lobSum."</td>";
                          if($r['SUM(serveGoal)']+$r['SUM(spikeGoal)']+$r['SUM(lobGoal)']>0)
                          {
                            $successRate=($r['SUM(serveGoal)']+$r['SUM(spikeGoal)']+$r['SUM(lobGoal)'])/($serveSum+$spikeSum+$lobSum)*100;
                            echo "<td>".(int)$successRate."%</td>";
                          }
                          else
                          {
                            echo "<td>NULL</td>";
                          }
                          echo "<td>".$r['SUM(serveDealMis)']."</td>";
                          echo "<td>".$r['SUM(spikeDealMis)']."</td>";
                          echo "<td>".$r['SUM(lobDealMis)']."</td>";
                          echo "<td>".$r['SUM(dealMis)']."</td>";
                          echo "<td>".$r['SUM(blockGoal)']."</td>";
                          echo "<td>".$r['SUM(blockLost)']."</td>";
                          $goalSum=$r['SUM(blockGoal)']+$r['SUM(serveGoal)']+$r['SUM(spikeGoal)']+$r['SUM(lobGoal)'];
                          echo "<td>".$goalSum."</td></tr>";
                        }
                        echo '</tbody></table>';  
                  ?>
                  <div>
                  </br>
                </div>
      </div> <!-- end of memo-area -->
    </div>
  </div>
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>

</body>
</html>