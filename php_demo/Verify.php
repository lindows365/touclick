<?php 

$publicKey = "2b28d3b5-7753-4bc4-999c-fa7828d707de";
$privateKey = "9e35b1a2-876a-492a-8788-6b23a2d40aef";
$check_key = $_POST['check_key'];
$check_address = $_POST['check_address'];

require_once 'touclick.class.php';

$touclick = new touclick();
$res = $touclick->touclickCheck($publicKey, $privateKey, $check_key, $check_address);

if($res){
	//һ����֤��ȷ,�����ύ����
	echo "That's ok!";
}else{
	//������Ϊ��һ����֤ʧ�ܡ���û�н���һ����֤���������Ȼ������֤
	echo "ERROR";
}
?>