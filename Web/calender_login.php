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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './calender.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './calender.php';</script>";
      }
    }
  }
?>
<!--Calendar_Js-->
<link href="js/fullcalendar-1.6.4/fullcalendar/fullcalendar.css" rel="stylesheet" />
<link href="js/fullcalendar-1.6.4/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="js/fullcalendar-1.6.4/lib/jquery-ui.custom.min.js"></script>
<script src="js/fullcalendar-1.6.4/fullcalendar/fullcalendar.js"></script>
<script type='text/javascript' src='fullcalendar/gcal.js'></script>
<script>

    $(document).ready(function() {
        
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        console.log("m = "+m);
        var y = date.getFullYear();
        
        $('#calendar').fullCalendar({
            /*googleCalendarApiKey: '<AIzaSyBnsc2M8spwjkPDn_nE14-tIG6_AredotI>',
            events: 
            {
              googleCalendarId: 'dl9j4ip4q9ve6dgcnfr7lud6l4@group.calendar.google.com',
              className: 'gcal-event'
            }*/
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
  //調整calendar屬性
            editable: false,
            diableDragging : false,
  handleWindowResize: true,
  
            events: [

                {
                    title: '測試',
                    start: new Date(2015, 01-1, 27, 09, 0),
                    end: new Date(2015, 01-1, 28, 17, 0),
                    allDay : false
                },

            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }

            ],
            timeFormat: 'H:mm' // uppercase H for 24-hour clock

        });
    });
</script>

</head>
<body>
  <div id="header">
    <div id="header-inner"><a href="./index_login.php">
      <div class="valleyball-icon" style="font-size:23px">
      <?php
        include("connect.php");
            if (isset($_POST['submit2-1']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content21=$_POST['content21'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content21."' WHERE textnumber = 'index21' ");
                $db->commit();  
                echo "<script Language=javascript>"; 
                echo "window.alert('更新成功')"; 
                echo "</script>";
                echo "<script language=\"javascript\">"; 
                echo "location.href='./index_login.php'"; 
                echo "</script>";
              }
              catch (PDOException $e)
              {
                $db->rollback();
                echo $e->getMessage();
                echo "<script Language=javascript>"; 
                echo "window.alert('更新失敗')"; 
                echo "</script>";
                echo "<script language=\"javascript\">"; 
                echo "location.href='./index_login.php'"; 
                echo "</script>";
              } 
            }
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index21'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content21=$r['textword'];
              echo $content21;
            }?>
            </div></a>
            <?php
          echo'<div id="form-content21" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content21" value="" placeholder="'.$content21.'"  style="font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit2-1" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content21"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
        ?>
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
        <div class="nav-li" style="background:#232323;">
          <a href="calender_login.php">行事曆</a>
        </div>
        <?php
          if(isset($_POST['loginName']))
            {
              echo '<a>'.$_POST['loginName'].'</a>';
              echo '<a>，您好!</a>';
            }?>
      </div>
    </div> <!-- end of header-inner -->
  </div> <!-- end of header -->
    <div id="container"  style="background-color:#efefef; box-shadow:1px 1px 80px 20px rgba(20%,20%,20%,0.4) inset;"> 
    <div id="container-inner" style="width:70%; padding-top: 100px; background-color: transparent;">
      <ul class="breadcrumb" style="background: url('./img/banner2.png') no-repeat; padding: 5px 15px; margin:0px;">
        <li><a href="index.php" style="color:#aaa;">Home</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">Calender</a></li>
      </ul>
      <div class="board-area" style="margin:10px;">
        <div class="widget widget-nopad">
            <!--<div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Recent News</h3>
            </div>-->
            <!-- /widget-header -->
            <!--<div class="widget-content">
              <p>
                <晨練>大家練球要記得準時,別再遲到囉~
              </p>
              <p>
                <大資盃>雖然說第一場比賽是下午比,但還是決定前一天就前往台中,所以是2/5下午或晚上就會在台中住下了喔!
              </p>
              <p>
                <大資盃>這次大資盃的目標不是打出多ㄅㄧㄤˋ的球,而是在球還沒落地前比賽就還沒結束!!
              </p>
              <p>
                <寒訓>明天一樣是7:00開始,請學弟6:30以前就先佔到"校訓牆",注意!!是校訓牆!!!
              </p>
              <p>
                <寒訓>大家記得明天開始就是我們的寒訓囉!請各位6:50集合唷!!
              </p>
              <p>
                <大資盃>大家快交訂金!!!
              </p>

            </div>-->
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

      </div> <!-- end of board-area -->
      <div id='calendar'>
        <div id="calendarTag" class="page-section">
          <div  id='calendar'>
          </div>
        </div>
        <canvas id="area-chart" style="width: 100%;height:0px;"> 
        </canvas>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>


</body>
</html>
