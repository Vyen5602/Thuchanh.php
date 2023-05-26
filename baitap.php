<!-- Câu 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<p>Câu 1</p>
<?php
function checkEvenNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 10; // Thay đổi giá trị số ở đây để kiểm tra
echo checkEvenNumber($number);
?>
<br>
<!-- Câu 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<p>Câu 2</p>
<?php
function tinhTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; // Thay đổi giá trị n ở đây để tính tổng của các số khác
$tong = tinhTong($n);
echo "Tổng của các số từ 1 đến $n là: $tong";
?>
<br>

<!-- Cau 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<p>Câu 3</p>
<table border="1px">
<tr>
<?php
for($i = 1; $i <= 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
<br>
<!-- Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<p>Câu 4 </p>
<?php
function kiemTraChuoi($chuoi, $tu) {
    $kiemTra = strpos($chuoi, $tu);
    if ($kiemTra !== false) {
        echo "Chuỗi '$chuoi' chứa từ '$tu'.";
    } else {
        echo "Chuỗi '$chuoi' không chứa từ '$tu'.";
    }
}
$chuoi = "Hello, world!"; // Thay đổi chuỗi ở đây để kiểm tra
$tu = "world"; // Thay đổi từ cụ thể ở đây để kiểm tra

kiemTraChuoi($chuoi, $tu);
?>
<br>
<!-- Câu 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<p>Câu 5</p>
<?php
function findvalueMaxMin($array) {
    $min = $array[0]; // Giả sử phần tử đầu tiên là giá trị nhỏ nhất
    $max = $array[0]; // Giả sử phần tử đầu tiên là giá trị lớn nhất

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; // Cập nhật giá trị nhỏ nhất
        }

        if ($value > $max) {
            $max = $value; // Cập nhật giá trị lớn nhất
        }
    }

    echo "Giá trị nhỏ nhất trong mảng là: $min\n";
    echo "Giá trị lớn nhất trong mảng là: $max\n";
}

$array = [2, 9, 5, 7, 1, 4]; // Thay đổi giá trị của mảng ở đây để tìm giá trị lớn nhất và nhỏ nhất khác

findvalueMaxMin($array);
?>
<br>

<!-- Câu 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<p>Câu 6</p>
<?php
function sortUpAscending ($numbers){
$numbers = array(2, 4, 6, 8, 10);
sort($numbers);
  
foreach( $numbers as $n) {
    echo "$n <br>";
}
}
sortUpAscending ($numbers);
?>
<br>
<!-- Câu 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<p>Câu 7 </p>
<?php
$a = 5;
$b = 0;
$c = 10;
 
function tinhGiaithua($n) {
    if ($n > 0) {
        return $n * tinhGiaithua ( $n - 1 );
    } else {
        return 1;
    }
}
// tính giai thừa
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
?>
<br>
<!-- Câu 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<p>Câu 8 </p>
<?php
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 50);
?>
<br>
<!-- Câu 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<p>Câu 9</p>
<?php
function sumArray ($number){
    return array_sum ($number);
}
$prime_numbers = array(2, 3, 5, 7);
echo array_sum($prime_numbers);
?>
<br>
<!-- Câu 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.-->
<p>Câu 10</p>
<?php
function fibonacci($n) {
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
    }
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
?>
<br> 
<!-- Câu 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<!-- Một số Armstrong là một số mà tổng lũy thừa của các chữ số của nó bằng chính nó. Ví dụ: 153 là một số Armstrong vì $1^3 + 5^3 + 3^3 = 153$ -->
<p>Câu 11</p>

<?php
function isArmstrong($number) {
$temp = $number;
$sum = 0;
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += $remainder ** 3;
        $temp /= 10;
}
    if ($number == $sum) {
    return true;
    } else {
    return false;
    }
}
$number = 153;
    if (isArmstrong($number)) {
    echo "$number là số Armstrong";
    } else {
    echo "$number không phải là số Armstrong";
}
?>
<br>
<!-- Câu 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<p>Câu 12</P>
<?php
function insertElement($arr, $element, $position)
{
    // Sử dụng hàm array_splice để chèn phần tử vào mảng
    array_splice($arr, $position, 0, $element);


    // Trả về mảng sau khi chèn phần tử
    return $arr;
}
// Mảng ban đầu
$array = [1, 2, 3, 4, 5];


// Phần tử cần chèn
$element = 10;
// Vị trí muốn chèn phần tử (vị trí tính từ 0)
$position = 2;
// Gọi hàm insertElement để chèn phần tử vào mảng ở vị trí bất kỳ
$resultArray = insertElement($array, $element, $position);
// In mảng sau khi chèn phần tử
print_r($resultArray);
?>
<br>
<!-- Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<p>Câu 13</p>
<?php
function removeDuplicates($arr)
{
    // Sử dụng hàm array_count_values để đếm số lần xuất hiện của từng phần tử
    $counts = array_count_values($arr);

    // Lặp qua mảng ban đầu và chỉ giữ lại các phần tử có số lần xuất hiện là 1
    $result = array_filter($arr, function ($value) use ($counts) {
        return $counts[$value] === 1;
    });

    // Trả về mảng sau khi loại bỏ các phần tử trùng lặp
    return array_values($result);
}

// Mảng ban đầu
$originalArray = [1, 2, 3, 2, 4, 3, 5, 6, 1];


// Gọi hàm removeDuplicates để loại bỏ các phần tử trùng lặp
$filteredArray = removeDuplicates($originalArray);


// In mảng sau khi loại bỏ các phần tử trùng lặp
print_r($filteredArray);
?>
<br>
<!-- Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<p> Câu 14</p>
<?php
function findElementPosition($arr, $element)
{
    // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    $position = array_search($element, $arr);
    if ($position !== false) {
        return $position; // Trả về vị trí của phần tử nếu tìm thấy
    } else {
        return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
    }
}
// Mảng ban đầu
$array = [1, 2, 3, 4, 5];
// Phần tử cần tìm vị trí
$element = 3;
// Gọi hàm findElementPosition để tìm vị trí của phần tử trong mảng
$position = findElementPosition($array, $element);


// In kết quả
if ($position !== -1) {
    echo "Vị trí của phần tử $element là $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
?>
<br>
<!-- Câu 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('1234')."\n");
?>
<br>
<!-- Câu 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<p>Câu 16</p>
<?php
function countNumber($array) {
    $number = count($array);
    return $number;
}


$array = [1, 2, 3, 4, 5]; // Thay đổi giá trị của mảng ở đây


$number = countNumber($array);
echo "Số lượng phần tử trong mảng là: $number";
?>
<br>
<!-- Câu 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<p>Câu 17</p>
<?php
        function checkPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkPalindrome('madam')."<br>";
       ?>
<br>
<!-- Câu 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<p>Câu 18</p>

<br>
<!-- Câu 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<p>Câu 19</p>
<?php
function sortArrayDescending($arr)
{
    // Sử dụng hàm rsort để sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);

    // Trả về mảng sau khi sắp xếp
    return $arr;
}
// Mảng ban đầu
$array = [5, 2, 9, 1, 3];

// Gọi hàm sortArrayDescending để sắp xếp mảng theo thứ tự giảm dần
$sortedArray = sortArrayDescending($array);

// In mảng sau khi sắp xếp
print_r($sortedArray);
?>
<br>
<!-- Câu 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<p>Câu 20</p>
<?php
function addElementToArray($arr, $element, $position)
{
    if ($position === 'beginning') {
        // Thêm phần tử vào đầu mảng
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        // Thêm phần tử vào cuối mảng
        $arr[] = $element;
    }

    // Trả về mảng sau khi thêm phần tử
    return $arr;
}

// Mảng ban đầu
$array = [1, 2, 3, 4, 5];

// Phần tử cần thêm
$element = 10;

// Vị trí muốn thêm phần tử ('beginning' để thêm vào đầu, 'end' để thêm vào cuối)
$position = 'end';

// Gọi hàm addElementToArray để thêm phần tử vào mảng
$resultArray = addElementToArray($array, $element, $position);

// In mảng sau khi thêm phần tử
print_r($resultArray);
?>
<br>
<!-- Câu 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<p> Câu 21</p>
<?php
function findSecondLargestNumber($arr)
{
    // Kiểm tra số phần tử trong mảng
    $count = count($arr);


    // Nếu mảng có ít hơn hai phần tử, không có số lớn thứ hai
    if ($count < 2) {
        return "Không có số lớn thứ hai trong mảng.";
    }

    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);

    // Trả về số lớn thứ hai
    return $arr[1];
}

// Mảng ban đầu
$array = [10, 5, 8, 12, 7];

// Gọi hàm findSecondLargestNumber để tìm số lớn thứ hai trong mảng
$secondLargest = findSecondLargestNumber($array);

// In kết quả
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>
<br>
<!-- Câu 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<p> Câu 22</p>
<?php
function findGCD($a, $b)
{
    // Sử dụng thuật toán Euclid để tìm ước số chung lớn nhất (USCLN)
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findLCM($a, $b)
{
    // Tìm bội số chung nhỏ nhất (BSCNN) dựa trên USCLN
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}

// Số nguyên dương thứ nhất
$num1 = 12;

// Số nguyên dương thứ hai
$num2 = 18;

// Tìm USCLN của hai số
$gcd = findGCD($num1, $num2);

// Tìm BSCNN của hai số
$lcm = findLCM($num1, $num2);

// In kết quả
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm;
?>
<br>
<!-- Câu 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<p> Câu 23</p>
<?php
function isPerfectNumber($number)
{
    // Kiểm tra số nguyên dương
    if ($number <= 0) {
        return false;
    }
    // Tính tổng các ước số dương của số
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    // Kiểm tra xem tổng ước số có bằng số ban đầu hay không
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
// Số cần kiểm tra
$number = 28;
// Gọi hàm isPerfectNumber để kiểm tra số hoàn hảo
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?>
