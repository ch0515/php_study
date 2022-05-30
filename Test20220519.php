<!--1. strlen()글자길이-->
<?php
$str="PHP is a popular language";
echo "글자길이: ".strlen($str);
?>
<!-- strpos(전체문자열, 찾을 문자열) 문자 위치 찾기-->
<?php
$str="abcdefghijklmn";
$findme="e";
echo "findme의 위치: ".strpos($str, $findme);
?>
<!-- strcmp(문자열, 문자열) : 문자열 비교 같으면 0, 다르면 1-->
<?php
$str1 = "Hello PHP";
$str2 = "Hello php";
if(strcmp($str1,$str2)==0){
    echo "같다";
}else{
    echo "다르다";
}
?>
<!-- substr(문자열, 시작위치, [추출길이]) 문자열 추출-->
<!--시작위치: 5에서 5개 추출하는데 결과 : php w-->
<?php
$str = "hello php welcome";
$sub = substr($str,5,5);
echo "추출한 문자는".$sub;
?>
<!-- strtolower(문자열) 소문자로-->
<?php
$str="<br/>"."Marry Had A Little Lamb and She LOVED It So"."<br/>";
//소문자로 출력
echo strtolower($str);
?>
<!-- strtoupper(문자열) 대문자로-->
<?php
$str="Marry Had A Little Lamb and She LOVED It So";
//대문자로 출력
echo strtoupper($str);
?>
<!-- explode(구분자, 문자열) 문자열을 배열로 만들어 주는 것-->
<?php
$str="pizza1 pizza2 pizza3 pizza4 pizza5";
//explode 함수 써서 배열 값 출력하기
$arr = explode(" ",$str);
/*for($i=0; $i <5; $i++){
    echo $arr[$i];
}*/
foreach($arr as $str){
    echo "<br/>".$str;
}

?>
<?php
$str="one|two|three|four|five";
//explode 함수 써서 배열 값 출력하기
$arr = explode("|",$str);
/*for($i=0; $i <5; $i++){
    echo $arr[$i];
}*/
foreach($arr as $str){
    echo "<br/>".$str;
}
?>
<!-- implode(구분자, 배열) 배열을 문자열로 바꿈-->
<?php
$array=array("lastname","email","phone");
//implde 함수를 써서 문자열로 출력
$str=implode(",",$array);
echo "<br/>";
echo "implode 실행 결과 후".$str;
?>
<!-- str_replace(원본문자열, 변경 완료될 문자, 대상 문자열) 문자열 치환-->
<?php
$txt="you should study";//should를 could로 변경
$result=str_replace("should","could",$txt);
echo "<br/>"."변경전 문자열:".$txt."<br/>";
echo "변경 후 문자열:".$result;
?>