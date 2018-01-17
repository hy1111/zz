<?php
$yh=$_POST['yh'];
$mm=$_POST['mm'];
$sj=$_POST['sj'];
$yx=$_POST['yx'];
$sql= new mysqli();
	//第二步：执行连接数据库的代码
				//1.主机名		2.数据库账号          3.数据库密码   4.数据库的表名   没有的话用空字符串表示
$sql->connect('localhost','root','','mysql');
	//第三步：设置字符串编码
$sql -> set_charset('utf8');
//if($flag==0){
	$res =$sql ->query("INSERT INTO `mysql`.`zhuce` (`name`, `password`, `shouji`, `youxiang`) VALUES ('".yh."', '".mm."', '".sj."', '".yx."');");
    if($res==1){
	echo "注册成功";
}else{
	echo "注册失败";
}
//}else if($flag==1){
// $res =$sql ->query("SELECT * FROM `denglu` WHERE `yh` LIKE '".$yh."' AND `mm` LIKE '".$mm."' AND `sj` LIKE '".$sj."'");
////      $content=array();
////		while($arr = $res -> fetch_array()){
////          $content[] = $arr;
////      }
////		echo json_encode($content);
////		
////	}	
//$row=$res ->fetch_row();
////    echo $res;
//if($row[0]==$yh && $row[1]==$mm && $row[2]==$sj){
//	echo "登陆成功";
//}else{
//	echo "登陆失败";
//};
//};
?>
	