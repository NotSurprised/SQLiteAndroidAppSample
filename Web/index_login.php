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
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<?php
  session_start();
  include("connect.php");
?>
<style>
a:hover {text-decoration: none;}
h6{color:#000;}
p{color:#000;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.sticky.js"></script>
<script>
  $(window).load(function(){
    $("#bar_stikify").sticky({ topSpacing: 0 });
  });
</script>

</head>
  
<body style="background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 ); /* IE6-9 */
">

  <div id="top" style="0px;"></div> <!-- end of header --> -->
  <script>
  function libero_player_click_scroll() 
  {
    var scroll_offset = $("#libero-player").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  function setter_player_click_scroll() 
  {
    var scroll_offset = $("#setter-player").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  function scorer_player_click_scroll() 
  {
    var scroll_offset = $("#scorer-player").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  function blocker_player_click_scroll() 
  {
    var scroll_offset = $("#blocker-player").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  function manager_player_click_scroll() 
  {
    var scroll_offset = $("#manager-player").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  function top_click_scroll() 
  {
    var scroll_offset = $("#top").offset();  //得到pos这个div层的offset，包含两个值，top和left
    $("body,html").animate({scrollTop:scroll_offset.top /*让body的scrollTop等于pos的top，就实现了滚动*/},700);
  }
  </script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".person").click(function(){
      $(this).find(".p-expand-content").toggle("fast");
    });
  });
</script>
  <div class="container" style="height:100%;">
      <!-- Top Navigation -->
      <header style="margin: 0 auto;padding: 0em 1em 1em 1em;text-align: center;background: rgba(0,0,0,0.01);">
        <img src="./img/title.png" ><?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <h1 style="color:#000;font-family:Arial;">
        <span style="color:#555;font-family:Arial; text-align: center; line-height: 1.3; font-weight: 900; font-size: 10%; padding: 0 0 0 0.1em;"><?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index11'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content11=$r['textword'];
              echo $content11;
            }
          ?>
          <?php
            include("connect.php");
            if (isset($_POST['submit1-1']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content11=$_POST['content11'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content11."' WHERE textnumber = 'index11' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index11'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content11=$r['textword'];
            }
          echo'<div id="form-content11" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content11" value="" placeholder="'.$content11.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-1" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content11"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></span></br>
        <span style="color:#555;font-family:Arial; text-align: center; line-height: 1.3; font-weight: 900; font-size: 10%; padding: 0 0 0 0.1em;"><?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index12'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content12=$r['textword'];
              echo $content12;
            }
          ?>
        <?php
            include("connect.php");
            if (isset($_POST['submit1-2']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content12=$_POST['content12'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content12."' WHERE textnumber = 'index12' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index12'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content12=$r['textword'];
            }
            echo'<div id="form-content12" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content12" value="" placeholder="'.$content12.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-2" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content12"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></span></h1> 
        
      </header>
      
      <div align="center" class="container">
        <a href='./calender_login.php' class="btn-home btn-theme btn-sm btn-min-block" style="margin: 10px; font-size:44px; padding:10px 40px;">
        <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index13'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content13=$r['textword'];
              echo $content13;
            }
          ?></a>
        <?php
            include("connect.php");
            if (isset($_POST['submit1-3']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content13=$_POST['content13'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content13."' WHERE textnumber = 'index13' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index13'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content13=$r['textword'];
            }
            echo'<div id="form-content13" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content13" value="" placeholder="'.$content13.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-3" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content13"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
      </div>

      <div class="wrapper">
        <ul class="stage clearfix">
          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();">
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="blocker_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="blocker_player_click_scroll();">
               
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();">
               
              </div>
            </div>
          </li>

          <li class="scene" >
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="libero_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="libero_player_click_scroll();">
                
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();">
                
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="manager_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="manager_player_click_scroll();">
               
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();">
               
              </div>
            </div>
          </li>
        </ul>
      </div><!-- /wrapper -->
      <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:55px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:62px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:62px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:62px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:62px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:62px;margin-left:62px;"/></a>';
          ?>
          <?php
            echo'<div id="form-content10" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form enctype="multipart/form-data" method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <a style="color:#000000; position:relative;left:0%; font-weight: 300; font-family: impact; border:1px solid; padding:10px; font-size:20px;"><input type="file" name="image" placeholder="" style=" width:500px; height: 50px;font-size:15px; font-family: impact;"/>select image</a>
              </br><hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-0" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content10"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;margin-right:55px;margin-left:62px;"/></a>';
          ?>
    </div>
  </br>
  <div class="float-theme-bar" id="bar_stikify">
    <div class="float-theme-bar-inner" style="height: 100px;">
      <div class="nav-bar">
        <div class="div-inline" onclick="libero_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            if (isset($_POST['submit1-4']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content14=$_POST['content14'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content14."' WHERE textnumber = 'index14' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index14'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content14=$r['textword'];
              echo $content14;
            }?></a>
        </div>
        <?php
            echo'<div id="form-content14" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content14" value="" placeholder="'.$content14.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-4" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content14"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <div class="div-inline" onclick="setter_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            if (isset($_POST['submit1-5']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content15=$_POST['content15'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content15."' WHERE textnumber = 'index15' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index15'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content15=$r['textword'];
              echo $content15;
            }
          ?></a>
        </div>
        <?php
            echo'<div id="form-content15" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content15" value="" placeholder="'.$content15.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-5" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content15"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <div class="div-inline" onclick="scorer_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            if (isset($_POST['submit1-6']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content16=$_POST['content16'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content16."' WHERE textnumber = 'index16' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index16'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content16=$r['textword'];
              echo $content16;
            }
          ?></a>
        </div>
        <?php
            echo'<div id="form-content16" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content16" value="" placeholder="'.$content16.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-6" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content16"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <div class="div-inline" onclick="blocker_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            if (isset($_POST['submit1-7']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content15=$_POST['content17'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content17."' WHERE textnumber = 'index17' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index17'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content17=$r['textword'];
              echo $content17;
            }
          ?></a>
        </div>
        <?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <div class="div-inline" onclick="manager_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            if (isset($_POST['submit1-8']))
            {
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $content15=$_POST['content18'];
              try
              {
                $db->beginTransaction();
                $db->exec("UPDATE `worddata` SET  textword = '".$content18."' WHERE textnumber = 'index18' ");
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
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index18'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content18=$r['textword'];
              echo $content18;
            }
          ?></a>
        </div>
        <?php
            echo'<div id="form-content18" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content18" value="" placeholder="'.$content18.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-8" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content18"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?>
        <div class="div-inline" onclick="top_click_scroll();" style="position:fixed; right:10px; bottom:0px;">
          <img src="./img/top.png">
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="height:100%;">
      <div style="width:90%; margin: 0px auto;">
            <ul class="timeline">
              <div id="libero-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Libero</a></div>
                <div class="timeline-panel">
                    <div class="person">
                        <div class="p-img">
                          <img src="./img/head/17.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">祖頓<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                            <div cilss="jobTitle"><p>蘇子翔</p></div>
                            <div class="status-light"></div>
                            <div class="jobstatus">Starting</div>
                          </div>
                        </div>
                        <div class="p-expand-content" style="display: none;">
                          <div class="p-info-more">
                            <h4><a href="https://www.facebook.com/profile.php?id=100002589137659">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.</p>
                          </div>
                          <div>
                            <div class="pie">
                              <img src="./img/radar1.jpg">
                            </div>
                          </div>
                        </div>
                      </div>
                 </div>
              </li>
              <div id="setter-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Setter</a></div>
                <div class="timeline-panel" id="setter-player">
                    <div class="person">
                        <div class="p-img">
                          <img src="./img/head/04.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">維尼<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                            <div cilss="jobTitle"><p>謝委霖</p></div>
                            <div class="status-light"></div>
                            <div class="jobstatus">Starting</div>
                          </div>
                        </div>
                        <div class="p-expand-content" style="display: none;">
                          <div class="p-info-more">
                            <h4><a href="https://www.facebook.com/waynewe?fref=ts">FB</a></h4>
                            <h6>LANGUAGE</h6>
                            <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                            <h6>INTEREST</h6>
                            <p>Basketball, Saying DDs.</p>
                          </div>
                          <div>
                            <div class="pie">
                              <img src="./img/radar2.jpg">
                            </div>
                          </div>
                        </div>
                     </div>

                     <div class="person">
                        <div class="p-img">
                          <img src="./img/head/05.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">癡漢<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                            <div cilss="jobTitle"><p>翁定洋</p></div>
                            <div class="status-light"></div>
                            <div class="jobstatus">Starting</div>
                          </div>
                        </div>
                        <div class="p-expand-content" style="display: none;">
                          <div class="p-info-more">
                            <h4><a href="https://www.facebook.com/badenglishbydavid?fref=ts">FB</a></h4>
                            <h6>LANGUAGE</h6>
                            <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                            <h6>INTEREST</h6>
                            <p>Basketball, Saying DDs.</p>
                          </div>
                          <div>
                            <div class="pie">
                              <img src="./img/radar1.jpg">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="person">
                          <div class="p-img">
                            <img src="./img/head/07.jpg" class="img-circle">
                          </div>
                          <div class="p-detail">
                            <div class="p-info">
                              <div class="name">扭脖子<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                              <div cilss="jobTitle"><p>劉鉑志</p></div>
                              <div class="status-light"></div>
                              <div class="jobstatus">Starting</div>
                            </div>
                          </div>
                          <div class="p-expand-content" style="display: none;">
                            <div class="p-info-more">
                              <h4><a href="https://www.facebook.com/bozhi.liu?fref=ts">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.<p></p>
                            </div>
                            <div>
                              <div class="pie">
                              <img src="./img/radar2.jpg">
                            </div>
                            </div>
                          </div>
                        </div>
                </div>
              </li>
              <div id="scorer-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Scorer</a></div>
                <div class="timeline-panel">
                    <div class="person" >
                        <div class="p-img">
                          <img src="./img/head/02.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">中山柯景騰<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                            <div cilss="jobTitle"><p>郭峻齊</p></div>
                            <div class="status-light"></div>
                            <div class="jobstatus">Starting</div>
                          </div>
                        </div>
                        <div class="p-expand-content" style="display: none;">
                          <div class="p-info-more">
                            <h4><a href="https://www.facebook.com/kuojenter?fref=ts">FB</a></h4>
                            <h6>LANGUAGE</h6>
                            <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                            <h6>INTEREST</h6>
                            <p>Basketball, Saying DDs.</p>
                          </div>
                          <div>
                            <div class="pie">
                              <img src="./img/radar3.jpg">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </li>
              <div id="blocker-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Blocker</a></div>
                <div class="timeline-panel">
                    <div class="person">
                        <div class="p-img">
                          <img src="./img/head/16.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">閔閔<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                            <div cilss="jobTitle"><p>陳建閔</p></div>
                            <div class="status-light"></div>
                            <div class="jobstatus">Starting</div>
                          </div>
                        </div>
                        <div class="p-expand-content" style="display: none;">
                          <div class="p-info-more">
                            <h4><a href="https://www.facebook.com/profile.php?id=100000805640653&fref=ts">FB</a></h4>
                            <h6>LANGUAGE</h6>
                            <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                            <h6>INTEREST</h6>
                            <p>Basketball, Saying DDs.</p>
                          </div>
                          <div>
                            <div class="pie">
                              <img src="./img/radar1.jpg">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="person" >
                          <div class="p-img">
                            <img src="./img/head/12.jpg" class="img-circle">
                          </div>
                          <div class="p-detail">
                            <div class="p-info">
                              <div class="name">小澍<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                              <div cilss="jobTitle"><p>李宥澍</p></div>
                              <div class="status-light"></div>
                              <div class="jobstatus">Starting</div>
                            </div>
                          </div>
                          <div class="p-expand-content" style="display: none;">
                            <div class="p-info-more">
                              <h4><a href="https://www.facebook.com/profile.php?id=100000347113790">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.</p>
                            </div>
                            <div>
                              <div class="pie">
                                <img src="./img/radar3.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
              </li>
              <div id="manager-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Manager</a></div>
                <div class="timeline-panel">
                    <div class="person" >
                          <div class="p-img">
                            <img src="./img/head/w.jpg" class="img-circle">
                          </div>
                          <div class="p-detail">
                            <div class="p-info">
                              <div class="name">中山SHE<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                              <div cilss="jobTitle"><p>黃微芬</p></div>
                              <div class="status-light"></div>
                              <div class="jobstatus">Starting</div>
                            </div>
                          </div>
                          <div class="p-expand-content" style="display: none;">
                            <div class="p-info-more">
                              <h4><a href="https://www.facebook.com/weifen.huang?fref=ts">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.</p>
                            </div>
                            <div>
                              <div class="pie">
                              <img src="./img/radar4.jpg">
                            </div>
                            </div>
                          </div>
                        </div>


                    <div class="person" >
                          <div class="p-img">
                            <img src="./img/head/z.jpg" class="img-circle">
                          </div>
                          <div class="p-detail">
                            <div class="p-info">
                              <div class="name">麗麗<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                              <div cilss="jobTitle"><p>吳麗怡</p></div>
                              <div class="status-light"></div>
                              <div class="jobstatus">Starting</div>
                            </div>
                          </div>
                          <div class="p-expand-content" style="display: none;">
                            <div class="p-info-more">
                              <h4><a href="https://www.facebook.com/liyi.wu.9?fref=ts">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.</p>
                            </div>
                            <div>
                              <div class="pie">
                              <img src="./img/radar4.jpg">
                            </div>
                            </div>
                          </div>
                        </div>

                        <div class="person" >
                          <div class="p-img">
                            <img src="./img/head/r.jpg" class="img-circle">
                          </div>
                          <div class="p-detail">
                            <div class="p-info">
                              <div class="name">Roise<?php
            echo'<div id="form-content17" class="modal hide fade in" style="display: none;" >
            <div class="modal-header">
            <form method="post" action="" style="margin: 0 0 10px;">
              <a class="close" data-dismiss="modal">×</a>
              <h3 style="color:#000000; font-family: impact;">Change Content</h3>
              <hr />
              <p><input type="text" name="content17" value="" placeholder="'.$content17.'"  style=" width:500px; height: 50px;font-size:15px; font-family: impact;"></p>
              <hr />
              <input class="btn-home btn-theme btn-sm btn-min-block" type="submit" value="accept" name="submit1-7" style="color:#000000; position:relative;left:30%;">
              <a href="#" class="btn-home btn-theme btn-sm btn-min-block" data-dismiss="modal" style="color:#000000; position:relative;left:30%;  font-weight: 300;">cancel</a>
              </form>
            </div>
          </div>';
          echo '<a data-toggle="modal" href="#form-content17"><img src="./img/change.png" style="max-width: 40px;max-height: 40px;"/></a>';
          ?></div>
                              <div cilss="jobTitle"><p>余欣融</p></div>
                              <div class="status-light"></div>
                              <div class="jobstatus">Starting</div>
                            </div>
                          </div>
                          <div class="p-expand-content" style="display: none;">
                            <div class="p-info-more">
                              <h4><a href="https://www.facebook.com/rosie.yu.71?fref=ts">FB</a></h4>
                              <h6>LANGUAGE</h6>
                              <p>CSS, HTML5, jQuery, a little bit PHP.</p>
                              <h6>INTEREST</h6>
                              <p>Basketball, Saying DDs.</p>
                            </div>
                            <div>
                              <div class="pie">
                                <img src="./img/radar4.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
              </li>
          </ul>
        </div>
  </div><!-- /container -->
  
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>

</body>
</html>