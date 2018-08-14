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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './gameboard.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './gameboard.php';</script>";
      }
    }
  }
?>
  <script>
    
    jQuery(document).ready(function($) {
      $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
      });
    });
  </script>

<style>
thead:hover {background-color: none;}
tbody>tr:hover {background-color: #111;}
</style>
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
              				<li  class="active"><a href="gameboard.php">校內聯盟賽</a></li>
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
		<div id="container-inner"  style="padding-top: 100px; background-color:none;">
      <ul class="breadcrumb" style="background-color: transparent; padding: 5px 15px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li><a style="color:#aaa;">Static</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">GameBoard(School)</a></li>
      </ul>
      <?php
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $row = $db->query("SELECT * FROM `game` WHERE gClass = '校內'");
          echo '<table class="table" style="color:#fff;">';
          echo '<thead style="font-size:20px;">
                <th>日期</th>
                <th>比賽名稱</th>
                <th>對手</th>
                <th>比賽場地</th>
                <th>勝敗</th>
                </thead>
                <tbody class="tbody">';
          while ($r = $row->fetch(PDO::FETCH_ASSOC))
          {
            echo '<tr class="clickable-row" data-href="scoreboard.php?gId='.$r['gId'].'">';
            echo "<td>".$r['gTime']."</td>";
            echo "<td>".$r['gTitle']."</td>";
            echo "<td>".$r['gOpponent']."</td>";
            echo "<td>".$r['gPlace']."</td>";
            echo "<td>".$r['gResult']."</td></tr>";
          }
          echo '</tbody>
          </table>';
      ?>
		</div>
  </br>
	</div>
	<div id="footer">
		<div id="footer-inner">copyright@nsysu.mis.volleyman</div>
	</div>
</body>
</html>