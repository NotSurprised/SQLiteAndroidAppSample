<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中山資管系男排</title>
<link href='./img/sLOGO.png' rel='icon' type='image/x-icon'/>
<link rel=stylesheet type="text/css" href="./css/style.css">
<link rel=stylesheet type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<script src="./js/jquery-2.1.0.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.js" type="text/javascript"></script>
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
<script type="text/javascript">
  $(document).ready(function(){
    $(".person").click(function(){
      $(this).find(".p-expand-content").toggle("fast");
    });
  });
</script>
  <div class="container" style="height:100%;">
      <!-- Top Navigation -->
      <header>
        <img src="./img/sLOGO2.png">
        <h1 style="color:#000;font-family:Arial;">
        <span style="color:#000000;font-family:Arial;"></span> 
        <span style="color:#000000;font-family:Arial;"></span></h1> 
      </header>
      </div>
    </div>
  <div class="float-theme-bar" id="bar_stikify">
    <div class="float-theme-bar-inner" style="height: 100px;">
      <div class="nav-bar">
        <div class="div-inline" onclick="libero_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px; font-weight:900;">
          最新消息</a>
        </div>
        <div class="div-inline" onclick="setter_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px; font-weight:900;">
          競賽規章</a>
        </div>
        <div class="div-inline" onclick="scorer_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px; font-weight:900;">
          線上報名</a>
        </div>
        <div class="div-inline" onclick="blocker_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px; font-weight:900;">
          總成績</a>
        </div>
        <div class="div-inline" onclick="manager_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px; font-weight:900;">
          問題反饋</a>
        </div>
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
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">News</a></div>
                <div class="timeline-panel">
                    <div class="person">
                      </div>
                 </div>
              </li>
              <div id="setter-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Rules</a></div>
                <div class="timeline-panel" id="setter-player">
                    <div class="person">
                        
                        </div>
                </div>
              </li>
              <div id="scorer-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Join</a></div>
                <div class="timeline-panel">
                    <div class="person" >
                        
                      </div>
                </div>
              </li>
              <div id="blocker-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Score</a></div>
                <div class="timeline-panel">
                    <div class="person">
                        
                        </div>
                </div>
              </li>
              <div id="manager-player" style="height:30px;"></div>
              <li>
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Q&A</a></div>
                <div class="timeline-panel">
                    <div class="person" >
                          
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