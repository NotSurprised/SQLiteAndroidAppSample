<?php
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
			echo "密碼或帳號不可為空";
			echo '<meta http-equiv="refresh" content="2;url=./index.php" />';
		}
		else
		{
			echo $_POST['account'];
			echo $_POST['password'];
			$row = $db->prepare("SELECT * FROM `player` WHERE pId =:useID AND pPhone=:pwd");
			$where = array(':useID'=> $_POST['account'], ':pwd'=> $_POST['password']);
			$row->execute($where);
			echo "pass1<br>";
			if($count = $row->rowcount())
			{
				echo "pass2<br>";
				while($r = $row->fetch(PDO::FETCH_ASSOC))
				{
					echo "pass3<br>";
					$loginacc=$r['pId'];
					$loginpsw=$r['pPhone'];
					$loginName=$r['PName'];
					echo $r['PName'];
					echo "你好.<br/>";
					echo "Today is ".date("Y-m-d")."<br/>";
					$_SESSION['loginName']=$loginName;
					$_SESSION['loginName']=$loginacc;
				}
			}
			else 
			{
				echo '登錄失敗,5秒後跳轉首頁';
				echo '<meta http-equiv="refresh" content="5;url=./index.php" />';
			}
		}
	}
	//header("location: index.php");
?>