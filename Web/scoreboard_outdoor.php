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
  $_SESSION['gId']=$_GET['gId'];
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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './scoreboard.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './scoreboard.php';</script>";
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
  <!-- FB Massage-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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
		<div id="container-inner" style="width:90%; padding-top: 100px">
      <ul class="breadcrumb" style="background-color: transparent; no-repeat; padding: 5px 15px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li><a style="color:#aaa;">Static</a><span class="divider">/</span></li>
        <li><a href="gameboard.php" style="color:#aaa;">GameBoard(outdoor)</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">ScoreBoard(outdoor)</a></li>
      </ul>
							<?php
        						try
        						{
        					  		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          							$row = $db->query("SELECT * FROM `record` natural join `player` natural join `game` WHERE gId = '".$_GET['gId']."'");
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
            							echo "<td>".$r['serveGoal']."</td>";
            							echo "<td>".$r['serveLost']."</td>";
            							$serveSum=$r['serveGoal']+$r['serveLost'];
            							echo "<td>".$serveSum."</td>";
            							echo "<td>".$r['spikeGoal']."</td>";
            							echo "<td>".$r['spikeLost']."</td>";
            							$spikeSum=$r['spikeGoal']+$r['spikeLost'];
            							echo "<td>".$spikeSum."</td>";
            							echo "<td>".$r['lobGoal']."</td>";
            							echo "<td>".$r['lobLost']."</td>";
            							$lobSum=$r['lobGoal']+$r['lobLost'];
            							echo "<td>".$lobSum."</td>";
            							$successRate=($r['serveGoal']+$r['spikeGoal']+$r['lobGoal'])/($serveSum+$spikeSum+$lobSum)*100;
            							echo "<td>".(int)$successRate."%</td>";
            							echo "<td>".$r['serveDealMis']."</td>";
            							echo "<td>".$r['spikeDealMis']."</td>";
            							echo "<td>".$r['lobDealMis']."</td>";
            							echo "<td>".$r['dealMis']."</td>";
            							echo "<td>".$r['blockGoal']."</td>";
            							echo "<td>".$r['blockLost']."</td>";
            							$goalSum=$r['blockGoal']+$r['serveGoal']+$r['spikeGoal']+$r['lobGoal'];
            							echo "<td>".$goalSum."</td></tr>";
          							}
          							echo '</tbody></table>';              
        						}
        						catch (PDOException $e)
        						{
          							$db->rollback();
          							echo $e->getMessage();
        						}
      						?>
						<div style="float:right;" href="#form-content1">
							<a href="https://www.youtube.com/watch?v=yDP5OJ4gtC0" 
							class="btn-home btn-theme btn-sm btn-min-block" style="margin: 5px; font-size:15px; padding:0px 10px;">VOD Of This Game!</a>
						</div>
            <div id="form-content1" class="modal hide fade in" style="display: none; width:60%; height:80%; margin-left:-30%;" >
              <iframe allowfullscreen="" frameborder="0" height="100%" src="//www.youtube.com/embed/yDP5OJ4gtC0?rel=0" width="100%"></iframe>
            </div>
					</div>
<div class="container" style="width:70%;">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header" style="margin:0px;">
            <h3 class="reviews">Recent Comments</h3>
            <div class="logout">               
            </div>
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <?php
                      try
                      {
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $row = $db->query("SELECT * FROM `message` where gId = '".$_GET['gId']."'");
                        while ($r = $row->fetch(PDO::FETCH_ASSOC))
                        {
                          echo '<li class="media">
                                  <a class="pull-left">
                                    <img class="media-object img-circle" src="./img/head/01.jpg" alt="profile">
                                  </a>
                                  <div class="media-body">
                                    <div class="well well-lg">';
                          echo '<h4 class="media-heading text-uppercase reviews">'.$r['meName']."</h4>";
                          echo '<ul class="media-date text-uppercase reviews list-inline">
                                <li>'.$r['meTime']."</li>                              
                                </ul>";
                          echo '<p class="media-comment">'.$r['meText']."</p>";
                          echo "</div>              
                                </div>
                                </li>";
                        }
                      }
                      catch (PDOException $e)
                      {
                        $db->rollback();
                        echo $e->getMessage();
                      }
                    ?>
                      <li class="media">
                        <a class="pull-left">
                          <img class="media-object img-circle" src="./img/head/w.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">微芬 </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li>22.09.2014</li>                              
                              </ul>
                              <p class="media-comment">
                                你們真的有在認真練嗎?
                              </p>
                            </div>              
                        </div>
                      </li>          
                      <li class="media">
                        <a class="pull-left">
                          <img class="media-object img-circle" src="./img/head/07.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">柏志</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li>22.09.2014</li> 
                              </ul>
                              <p class="media-comment">
                                不要來找我了。我可能需要一點空間思考。
                              </p>
                          </div>              
                        </div>
                      </li>
                      <li class="media">
                        <a class="pull-left">
                          <img class="media-object img-circle" src="./img/head/05.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">喜德</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li>22.09.2014</li> 
                              </ul>
                              <p class="media-comment">
                                啊就不派我上場吼。ㄏㄏ。
                              </p>
                              <div class="embed-responsive embed-responsive-16by9">
                              </div>
                            </div>              
                        </div>
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="MessageSubmit.php" method="post" class="form-horizontal" id="commentForm" role="form"> 
                      <div class="form-group">
                            <span for="avatar" class="col-sm-2 control-label">Avatar</span>
                            <div class="col-sm-10">                                
                                <div class="custom-input-file" style="float:left; background:url(./img/head/01.jpg);">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nickName" class="col-sm-2 control-label" style="float:left; margin:10px;">Nick name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nickName" placeholder="Firerycon" style="float:left; margin:10px;">
                                  <input type="hidden" name="gId" value="<?php echo$_GET['gId']; ?>" />
                                  <input type="hidden" name="meTime" value="<?php $datetime = date ("Y-m-d H:i:s"); echo $datetime; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label" style="margin:10px;">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment"rows="5" style="margin:10px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="float:right; margin:10px; width:20%">
                            <div>                    
                                <button class="btn-home btn-theme btn-sm btn-min-block" type="submit" name="submitComment" style="background-image: linear-gradient(to bottom, #595959, #333); line-height: 20px; */">Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
            <div>
              </br>
              </br>
              </br>
            </div>
        </div>
    </div>
    </br>
  </div>
  <div>
  </br>
  </br>
</div>
</div>
  </div>
</div>
			</div> <!-- end of memo-area -->
		</div>
	</div>
	<div id="footer">
		<div id="footer-inner">copyright@nsysu.mis.volleyman</div>
	</div>

</body>
</html>