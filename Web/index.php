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
      <header>
        <img src="./img/title.png" >
        <h1 style="color:#000;font-family:Arial;">
        <span style="color:#000000;font-family:Arial;"><?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index11'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content11=$r['textword'];
              echo $content11;
            }
          ?></span> 
        <span style="color:#000000;font-family:Arial;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index12'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content12=$r['textword'];
              echo $content12;
            }
          ?></span></h1> 
        
      </header>
      
      <div align="center" class="container">
        <a href='./calender.php' class="btn-home btn-theme btn-sm btn-min-block" style="margin: 10px; font-size:44px; padding:10px 40px;"><?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index13'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content13=$r['textword'];
              echo $content13;
            }
          ?></a>
      </div>

      <div class="wrapper">
        <ul class="stage clearfix">

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();">
                <header>
                setter
              </header>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="blocker_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="blocker_player_click_scroll();">
               blocker
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();">
               scorer
              </div>
            </div>
          </li>

          <li class="scene" >
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="libero_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="libero_player_click_scroll();">
                libero
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="setter_player_click_scroll();">
                setter
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="manager_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="manager_player_click_scroll();">
               manager
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();"></div>
              <div class="info" style="cursor: pointer; padding:10px;" onclick="scorer_player_click_scroll();">
               score
              </div>
            </div>
          </li>
        </ul>
      </div><!-- /wrapper -->
    </div>
  <div class="float-theme-bar" id="bar_stikify">
    <div class="float-theme-bar-inner" style="height: 100px;">
      <div class="nav-bar">
        <div class="div-inline" onclick="libero_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index14'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content14=$r['textword'];
              echo $content14;
            }
          ?></a>
        </div>
        <div class="div-inline" onclick="setter_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index15'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content15=$r['textword'];
              echo $content15;
            }
          ?></a>
        </div>
        <div class="div-inline" onclick="scorer_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index16'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content16=$r['textword'];
              echo $content16;
            }
          ?></a>
        </div>
        <div class="div-inline" onclick="blocker_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index17'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content17=$r['textword'];
              echo $content17;
            }
          ?></a>
        </div>
        <div class="div-inline" onclick="manager_player_click_scroll();">
          <a style="font-size:20px; color:#fff; cursor: pointer; margin:10px;">
          <?php
            include("connect.php");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row = $db->query("SELECT * FROM `worddata` WHERE textnumber = 'index18'");
            while ($r = $row->fetch(PDO::FETCH_ASSOC))
            {
              $content18=$r['textword'];
              echo $content18;
            }
          ?></a>
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
                <div class="timeline-badge primary" style="z-index:1"><a style="font-size:20px; color:#fff; font-family:impact;">Libero</a></div>
                <div class="timeline-panel">
                    <div class="person">
                        <div class="p-img">
                          <img src="./img/head/17.jpg" class="img-circle">
                        </div>
                        <div class="p-detail">
                          <div class="p-info">
                            <div class="name">祖頓</div>
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
                            <div class="name">維尼</div>
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
                            <div class="name">癡漢</div>
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
                              <div class="name">扭脖子</div>
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
                            <div class="name">中山柯景騰</div>
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
                            <div class="name">閔閔</div>
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
                              <div class="name">小澍</div>
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
                              <div class="name">中山SHE</div>
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
                              <div class="name">麗麗</div>
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
                              <div class="name">Roise</div>
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