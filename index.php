<!DOCTYPE html>
<html>
<body>

<!-- Câu 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen(). -->
<p>Câu 1</p>
<?php 
function countLength ($string){
    return strlen ($string);
}
echo countLength("Hello");
?>
<br>
<!-- Câu 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count() -->
<p>Câu 2</p>
<?php 
function countNumberWord ($string){
    return str_word_count ($string);
}
echo countNumberWord("Vu Thi Hai Yen");
?>
<br>
<!-- Câu 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev(). -->
<p>Câu 3</p>
<?php 
function reverseString ($string){
    return strrev ($string);
}
echo reverseString("Vu Thi Hai Yen");
?>
<br>
<!-- Câu 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos(). -->
<p>Câu 4</p>
<?php
function SearchSubString ($string){
    return strpos ($string);
}
$str = "Vũ Thị Hải Yến";
$pos = strpos ($str, 'Yến');
echo $pos;
?>
<br>
<!-- Câu 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace(). -->
<p>Câu 5</p>
<?php
function replaceWord($word, $word2, $word3){
    return str_replace ($word, $word2, $word3);
}
echo replaceWord ("world","John","hello world");
?>
<br>
<!-- Câu 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp(). -->
<p>Câu 6</p>
<?php
function checkString ($string1,$string2,$len){
    return strncmp($string1,$string2,$len);  //strncmp( $str1, $str2, $len)   
    //$len là số kí tự của 2 chuỗi tính từ đầu các chuỗi mà hàm strncmp() sẽ dùng để so sánh
}
if (checkString ("hello world!","hello",10)==0) { 
    echo("2 chuỗi bằng nhau.");
} else if (checkString ("hello world!","hello",10) > 0) {
    echo("Chuỗi 1 chứa chuỗi 2");
} else {
    echo("Chuỗi 1 không chứa chuỗi 2");
       }
?>
<br>
<!-- Câu 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper(). -->
<p>Câu 7</p>
<?php
function convertUppercase ($string){
    return strtoupper ($string);
}
    $str1 = "vu thi hai yen";
    $str2 = strtoupper($str1);
    echo $str2;
?>
<br>
<!-- Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower(). -->
<p>Câu 8 </p>
<?php
function convertLowercase ($string){
    return strtolower ($string);
}
    $str1 = "VU THI HAI YEN";
    $str2 = strtolower($str1);
    echo $str2;
?>
<br>
<!-- Câu 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords(). -->
<p>Câu 9 </p>
<?php
function convertucwords ($string){
    return ucwords ($string);
}
$str1 = "hom nay la thu 2";
echo ucwords($str1);
?>
<br>
<!-- Câu 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim(). -->
<p>Câu 10</p>

<?php
function trimSpace ($string){
    return trim ($string);
}
$str = '   Hom nay la thu 2    ';
echo trim ($str);
?> 
<br>
<!--Câu 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().  -->
<p>Câu 11</p>
<?php
function deleteFirstWord ($tring){
    return ltrim ($string);
}
    $text_01 = "Thực hành PHP";
    $text_02 = ltrim($text_01,"T");

    echo $text_01;
    echo "<br>";
    echo $text_02;
?>
<br>
<!--Câu 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim(). -->
<p>Câu 12</p>
<?php
function deleteLasttWord ($tring){
    return rtrim ($string);
}
    $text_01 = "Thực hành PHP";
    $text_02 = rtrim($text_01,"P");

    echo $text_01;
    echo "<br>";
    echo $text_02;
?>
<br>
<!--Câu 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode(). -->
<p>Câu 13</p>
<?php
function splitString ($string){
    return explode ($string);
}
$strUserInformation = "Vũ Thị Hải Yến!#20D191141!#Hưng Yên";
$arrUserInformation = explode("!#", $strUserInformation);
print_r($arrUserInformation);
?>
<br>
<!-- Câu 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode(). -->
<p>Câu 14</p>
<?php
function connectString ($string){
    return explode ($string);
}
$name_info = array(
    'firstname' => 'Vũ Thị Hải',
    'lastname' => 'Yến'
);
$fullname = implode(' ', $name_info);
echo $fullname;
?>
<br>
<!-- Câu 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad(). -->
<p>Câu 15</p>
<?php
function addString ($string){
    return str_pad ($string);
}
$str = "Vu Thi Hai Yen";
echo str_pad($str,20,"*",STR_PAD_RIGHT);
?>
<br>
<!-- Câu 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr(). -->
<p>Câu 16</p>
<?php
function checkString2 ($string, $char){
    return strrchr ($string,$char); //$char là kí tự cần tìm.
}
$str = 'This a test string';
$result = strrchr($str, 'show');
if ($result == false) {
    echo "kí tự không tồn tại trong chuỗi";
}else{
    echo $result;
}
?>
<br>
<!-- Câu 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr(). -->
<p>Câu 17</p>
<?php
function checkSubString ( $str, $char, $type){
    return strstr ( $str, $char, $type); //$str là chuỗi gốc cần xử lý.
    //$char là kí tự hoặc chuỗi cần xác định vị trí.
    //$type gồm true và false
}
echo strstr("Hello world!","world",true);
?>
<br>
<!-- Câu 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace(). -->
<p>Câu 18</p>
<?php
function replaceWord2 ($pattern, $replacement, $subject){
    return preg_replace ($pattern, $replacement, $subject); 
    //pattern: chuỗi cần thay thế.
    //replacement: chuỗi thay thế.sử dung $1, //1, /1 để thay thế các cụm Regx trong chuỗi tìm kiếm.
    //subject: đối tượng thay thế.
} 
$str = "Năm nay là năm 2023";
$newstr = preg_replace ("/[0-9]+/", "Quý Mão", $str);
echo $newstr;
?>
<br>
<!--Câu 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().-->
<p>Câu 19</p>
<?php
function checStringIsInteger ($var){
    return is_int ($var);
}
$var = 24.3535;
if (is_int($var)) {
    echo 'Biến thuộc kiểu số nguyên';
}else{
    echo 'Biến không thuộc kiểu số nguyên';
}
?>
<br>
<!--Câu 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var(). -->
<p>Câu 20</p>
<?php 
function emailValid ($value, $filter){
    return filter_var ($value, $filter);
}
$email = 'haiyen@gmail';
$rs = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($rs === false)
{
    echo $email, ' không phải địa chỉ email';
}
else
{
    echo $rs, ' là một địa chỉ email';
}
?> 
</html>
