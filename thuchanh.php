<!-- Cau 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<p>Câu 3</p>
<table border="1px">
<tr>
<?php
function multiplicationTable ($n){
    echo "<br>"."Bảng cửu chương $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>

</tr>
</table>
<br>
<!-- Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<p>Câu 4 </p>
<?php
function checkString($string, $word) {
    $check = strpos($string, $word);
    if ($check !== false) {
        echo "Chuỗi '$string' chứa từ '$word'.";
    } else {
        echo "Chuỗi '$string' không chứa từ '$word'.";
    }
}
$string = "Hello, world!"; // Thay đổi chuỗi ở đây để kiểm tra
$word = "world"; // Thay đổi từ cụ thể ở đây để kiểm tra

checkString($string, $word);
?>
<p>Câu 5</p>
<?php
function searchMaxMin($array) {
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
searchMaxMin($array);
?>
<br>