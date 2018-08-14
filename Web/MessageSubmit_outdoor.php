<?php
	include("connect.php");
	if (isset($_POST['submitComment']))
	{
		$meIdCount;
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $row = $db->query("SELECT `meId` FROM `message` ORDER BY `meId` ASC");
	    while ($r = $row->fetch(PDO::FETCH_ASSOC))
	    {
	    	if((int)substr($r['meId'],1,1)==0)
	    	{
	    		if((int)substr($r['meId'],2,1)==0)
	    		{
	    			if((int)substr($r['meId'],3,1)==9 && (int)substr($r['meId'],4,1)==9)
	    			{
	    				$meIdCount=(int)substr($r['meId'],2,1)+1;
			           	$meId="m0".$meIdCount."00";
			        }
			        else
			        {
		    			if((int)substr($r['meId'],3,1)==0)
		    			{
		    				if((int)substr($r['meId'],4,1)!=9)
		    				{
		    					$meIdCount=(int)substr($r['meId'],4,1)+1;
		                		$meId="m000".$meIdCount;
		    				}
		                	else
		                	{
		                		$meIdCount=(int)substr($r['meId'],3,1)+1;
			           			$meId="m00".$meIdCount."0";
			           		}
		    			}
		            	else
		            	{
		            		$meIdCount=(int)substr($r['meId'],3,2)+1;
			           		$meId="m00".$meIdCount;
		            	}
		            }
	    		}
	        	else
	            	{
		        		$meIdCount=(int)substr($r['meId'],2,3)+1;
	        			$meId="m0".$meIdCount;
	            	}
	        	}
	        else
	        {
	        	$meIdCount=(int)substr($r['meId'],1,4)+1;
	        	$meId="m".$meIdCount;
	        }
	    }
		if(empty($_POST['nickName']) || empty($_POST['addComment']) || empty($_POST['gId']) || empty($_POST['meTime']))
		{
			echo "<script Language=javascript>"; 
		    echo "window.alert('有資料未輸入')"; 
		    echo "</script>";
		    echo "<script language=\"javascript\">"; 
		    echo 'location.href="scoreboard_outdoor.php?gId='.$_POST['gId'].'"';
		    echo "</script>"; 
		}
		else
		{
			try
			{
				$db->beginTransaction();
				$db->exec("INSERT INTO `message`(`meId`,`gId`,`meName`,`meText`,`meTime`) values ('".$meId."','".$_POST['gId']."','".$_POST['nickName']."','".$_POST['addComment']."','".$_POST['meTime']."')");
				$db->commit(); 
				echo "<script Language=javascript>"; 
			    echo "window.alert('新增成功')"; 
			    echo "</script>";
			    echo "<script language=\"javascript\">"; 
			    echo 'location.href="scoreboard_outdoor.php?gId='.$_POST['gId'].'"'; 
			    echo "</script>";
			}
			catch (PDOException $e)
			{
				$db->rollback();
				echo $e->getMessage();
			} 
		}
	}
	unset($_POST['submitComment']);
	//header("location: index.php");
?>