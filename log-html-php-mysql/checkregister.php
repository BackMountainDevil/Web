<?php 
/**
* 注册信息验证
*/
session_start();
if($_SESSION["validcode"] != $_POST['codeNum'])
{
	echo"<script type='text/javascript'>alert('验证码错误，登陆失败!'); location='register.php';</script>";  
}
else
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$confirm=$_POST['confirm'];
	$dbhost = "localhost";
	$charset = 'utf8';
	$dbname = "userforP";	//数据库名称
	$dbuser = "Admin2";		//数据库用户名
	$dbpass = "123456789";	//数据库密码
	$tbname = 'userforP'; 	//表格名
	if($pass!=$confirm)
	{    
		echo "<script>alert('两次输入密码不一致！');location='register.php';</script>";
	}
	else
	{	
		try
		{
			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
			$sql = "INSERT INTO userforP.userforP(Uname,Upassword) VALUES(?,?)";
			$stmt = $conn->prepare($sql);			
			$stmt->bindValue(1,$user);//绑定参数
			$stmt->bindValue(2,$pass);
			$count = $stmt->execute();//执行预处理语句
			if($count<>0)
			{
				echo"<script type='text/javascript'>alert('注册成功');location='logok.html';</script>";  
			}
			else
			{
				echo"<script type='text/javascript'>alert('注册失败,请使用其它用户名'); location='register.php';</script>";  
			}
			$stmt = null;//释放
			$conn = null; // 关闭连接
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
		}
	}
}	
?>
