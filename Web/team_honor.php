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
      echo "<script>alert('密碼或帳號不可為空'); location.href = './team_honor.php';</script>";
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
        echo "<script>alert('登錄失敗,跳轉首頁'); location.href = './team_honor.php';</script>";
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
      <div class="valleyball-icon" style="font-size:23px;">中山資管系男排</div></a>
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
        <div class="nav-li">
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
        <div class="nav-li" style="background:#232323;">
          <li class="dropdown" style="line-height: 40px; display: block;">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >隊史</a>
            <ul class="dropdown-menu" role="menu" style="background-color: #000;">
              <li class="active"><a href="team_honor.php">隊譽</a></li>
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
        <li><a style="color:#aaa;">History</a><span class="divider">/</span></li>
        <li class="active"><a style="color:#fff;">Honor</a></li>
      </ul>
      <div class="board-area" style="border:#000 2px solid; padding:30px;">
        <div id="wrap">
          <h1>排球歷史</h1>
<h3>威廉·G·摩根 - 排球之父</h3>

<p>出生於1870年在洛克波特，紐約，威廉·G·摩根度過了他的童年就讀公立學校，並在父親的船塢上的舊伊利運河的銀行合作。在1891年進入摩根山 Hermon的預科學校在諾斯菲爾德，馬薩諸塞州，它在那裡，他開發的詹姆斯·A·奈史密斯，誰注定是籃球的鼻祖了友誼。奈史密斯是年輕摩根的運動技能印象深刻，並鼓勵摩根繼續他在國際青年基督徒協會培訓學校在馬薩諸塞州斯普林菲爾德（現在稱為斯普林菲爾德學院）教育。而在斯普林菲爾德，摩根參加了其中扮演的冠軍球阿倫佐A.斯塔格，“大老無所足球”之一的領導下，學院的著名足球隊。1894年，大學畢業後，摩根接受了奧本，緬因州YMCA物理主任的位置。次年，他在接受霍利奧克，馬薩諸塞州一個類似的帖子，並在這裡排球的故事開始了。</p>

<h3>遊戲的發明</h3>

<p>這一年是1895年和物理主任威廉·G·摩根有一個問題。籃球新創建的遊戲，而很受孩子們，被證明是太費勁了當地商人。他需要一個替代 - 這些東西老紳士們可以發揮 - 這是沒有太多的“碰撞”或“顛簸”。

它必須是物理 - 玩遊戲，下班後和午餐時間，應提供運動，但它也有放鬆的參與者 - 它可能不會太激進。

它必須是一種運動，摩根說，“具有較強的運動衝動，但沒有身體接觸。”

於是，他借來的。從籃球，他拿球。從網球網。利用手的能力和發揮的牆壁和過掛起，他從手球借來的。而且，從棒球，他帶著局的概念。

他所說的這個新遊戲“Mintonette”。雖然無可否認不完整的，這足以證明成功在明年馬薩諸塞州斯普林菲爾德舉行的基督教青年會體育幹事的會議來贏得觀眾。

就在這個發布會上說，阿爾弗雷德·霍爾斯特德博士，在斯普林菲爾德學院教授，建議現名的兩個Word版本。“排球”。

它卡住了。

排球比賽是從我們已經習慣了有點不同。它被演奏在一個較小的25'x50'法院，以無限數量的球員擊球的次數不限，在6'6“高淨值的兩側。事情往往變得有些擁擠。

每場比賽被分為九局，由三奏各局，或“服務”。這些發球可以幫助過網由第二球員，如果服務器沒有完全達到淨。

最初使用的籃球被證明是一個有點過於沉重，以及隨後利用一個籃球膀胱，太軟了。摩根通過聯繫AG斯伯丁，當地的體育用品製造商誰設計了一種特殊的球彌補這一點 - “左右周長的”一個橡膠氣囊，裝在皮革，25排球“。

雖然仍處於起步階段，這項運動是緩慢發展，並與YCMA採取的統治，摩根相信女排會繼續娛樂和放鬆下來的男孩在“Y”。

他可能沒有意識到的是，他剛剛創造了什麼將成為世界上第二個最流行的團隊運動。</p>

<h3>全球發展</h3>

<p>青年會的體育主管，尤其是鼓勵兩個專業學校體育教育，在馬薩諸塞州和喬治·威廉姆斯學院在芝加哥（現在在下面樹叢，伊利諾伊州）斯普林菲爾德學院，在其所有的社會遍及美國，加拿大採取了排球（在1900年加拿大成為第一個國外採用的遊戲），而且在許多其他國家：埃爾伍德S.布朗在菲律賓（1910年），J.霍華德·克羅克在中國，富蘭克林H.布朗在日本（1908年），博士。JH格雷在緬甸，在中國和印度，以及其他在墨西哥和南美，歐洲和非洲國​​家。

到1913年男排亞洲大陸的發展是有保證的，在這一年，本場比賽被列入第一遠東運動會，組織在馬尼拉的計劃。應該指出的是，很長一段時間，排球根據，除其他事項外，使用16名球員（使比賽中更多地參與）的“布朗”的規則發揮在亞洲。

排球在美國成長的指示中給出了由羅伯特C.郭鵬發表在1916年的斯伯丁排球指南中，並寫了一篇文章。在這篇文章中郭鵬估計的玩家數量已經達到了一個共有20萬人細分為以下方式：在YMCA（男孩，男青年和老年男性）70000，在基督教女青年會（女孩和婦女）50,000，在學校（男孩和女孩）25,000高校（年輕人）萬。

1916年，YMCA設法誘使強大的全國大學生體育協會（NCAA）公佈其規則和一系列的文章，促進排球的快速增長之間的青年大學生。在1918年的每隊球員的數量被限制為6，並在1922年與球授權的聯繫人的最大數目被固定為3。

直到20世紀30年代初是排球的大部分遊戲的休閒和娛樂，而只有少數的國際活動和比賽。有遊戲世界中的各個部分的不同的規則; 然而，全國錦標賽，共奏在許多國家（例如，在東歐那裡發揮出水平已經達到了一個顯著的標準）。

排球從而變得越來越有競爭力的運動具有很高的物理和技術性能。</p>

<h3>國際排聯</h3>

<p>它已經看到了兩個世紀的開始和新千年的曙光。排球是現在的五大國際體育之一，國際排聯，其下屬220個國家聯合會，是世界上最大的國際體育聯合會。

排球見證了前所未有的增長在過去十年。隨著世界賽事，如世界女排錦標賽，世界女排聯賽中，世界女排大獎賽，世界女排世界杯，以及國際排聯大冠軍杯賽以及奧運會，參與各級水平的巨大成功國際繼續成倍增長。

沙灘排球的現象也繼續驚奇。沙灘排球自推出以來，奧運會在1996年亞特蘭大和FIVB斯沃琪世界巡迴賽和世界錦標賽的驚人的成功壓倒一切的觀眾和電視的成功開闢了排球到一個完全新的市場。</p>
        </div>
      </div> <!-- end of board-area -->
      <div>
      </br>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="footer-inner">copyright@nsysu.mis.volleyman</div>
  </div>


</body>
</html>
