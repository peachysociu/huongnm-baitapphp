<?php
//1. kiểm tra một số có phải số chẵn không
function checkEvenNumbers($number)
{
    if ($number % 2 == 0)
    {
        return true;
    } else 
    {
        return false;
    }
}
$number = 123;
if (checkEvenNumbers($number)) 
{
    echo $number.'số chẵn';
} else {
    echo $number.'số lẻ';
}



//2.tính tổng từ 1 đến n
function getSum($n)
{
    $sum=0;
    for ($i=1;$i<=$n;$i++)
    {
        $sum+=$i;
    }
    return $sum;
}
$n=;
$sum=$getSum($n);
echo $sum.'là tổng';

//3. in ra bảng cửu chương từ 1 đến 10
function isMultiplicationTable()
{
    for ($i=1;$i<=10;$i++)
    {
        echo "bảng cửu chương của số".$i."<br>";
        for ($j=1;$j<=10;$j++)
        {
            $result = $i*$j;
            echo $i."x"."$j"."=".$result."<br>";
        }
        echo "<br>";
    }
} isMultiplicationTable();


//4.kiểm tra một chuỗi có chứa một từ cụ thể
$keyword = "manga";
$string = "Cô gái thích đọc manga và xem anime";
$keyword_length = strlen($keyword);
$string_length = strlen($string);
$found = false;
function checkString($string, $key_work) {
   for ($i = 0; $i <= $string_length - $keyword_length; $i++) {
    $j = 0;
    while ($j < $keyword_length && $string[$i + $j] == $keyword[$j]) {
        $j++;
    }
    if ($j == $keyword_length) {
        $found = true;
        break;
    }
}
}

    if ($found) {
    echo "Chuỗi không chứa từ khóa '$keyword'";
} else {
    echo "Chuỗi chứa từ khóa '$keyword'";
}


//5.tìm min max trong mảng
function checkMinMax($array) 
{
    $min = $array[0];
    $max = $array[0];

    $length = count($array);
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    $result = [
        'min' => $min,
        'max' => $max
    ];

    return $result;
}
    $array = [1, 2, 5 ,7 ,20, 6, 21];
    $result  = checkMinMax($array);

    echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";
    echo "Giá trị lớn nhất: " . $result['max'];

//6. sắp xếp một mảng theo thứ tự tăng dần
function sortArray($array) {
    sort($array);
    return $array;
}
    $array = [3, 5 , 7, 2, 9, 4];
    $changeArray = sortArray($array);

    echo "Mảng sau khi sắp xếp: ";
    foreach ($changeArray as $element) {
        echo $element . " ";
    }
//7. tính giai thừa một số nguyên dương
function isFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
    $n = 5;
    $result = isFactorial($n);
    echo "Giai thừa của $n là: $result";
//8.tìm số nguyên tố trong một khoảng cho trước
function isPrime($start, $end) {
    $prime = [];

    for ($number = $start; $number <= $end; $number++) {
        $count = 0;

        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) 
            {
                $count++;
            }
        }

        if ($count == 2) {
            $prime[] = $number;
        }
    }

    return $prime;
}
    $start = 1;
    $end = 20;

    $prime = isPrime($start, $end);

    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    foreach ($prime as $so) 
    {
        echo $so . " ";
    }

//9.tính tổng các số trong một mảng
function isSum($array) 
{
    $sum = 0;
    foreach ($array as $so) {
        $sum += $so;
    }
    return $sum;
}
    $array = [1,4, 5,6, 7];
    $sum = isSum($array) ;

    echo "Tổng của các số trong mảng là: $sum";


//10. tìm số fibonacci
function isFibonacci($start, $end) 
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $end; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    $fibonacciInArray= [];
    for ($j = $start; $j <= $end; $j++) {
        $fibonacciInArray[] = $fibonacci[$j];
    }

    return $fibonacciInArray;
}
$start = 0;
$end = 10;

$fibonacciInArray = isFibonacci($start, $end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
foreach ($fibonacciInArray as $so) {
    echo $so . " ";
}

//11.kiểm tra số amstrong
function isArmstrongNumber($number) {
    $digits = str_split($number); 
    $numDigits = count($digits); 

    $sum = 0;

    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 1203;

if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}
//12. chèn một phần tử vào một mảng bất kì
function insertElement($array, $element, $position) {
    $result = array();
    $arrayLength = count($array);

    if ($position < 0 || $position > $arrayLength) {
        echo "Vị trí chèn không hợp lệ!";
        return $array;
    }
    for ($i = 0; $i < $arrayLength; $i++) {
        if ($i == $position) {
            $result[] = $element;
        }

        $result[] = $array[$i];
    }
    if ($position == $arrayLength) {
        $result[] = $element;
    }

    return $result;
}

$originalArray = [1, 2, 3, 4, 5];

$newElement = 10;

$insertPosition = 2;

$resultArray = insertElement($originalArray, $newElement, $insertPosition);

print_r($resultArray);

//13.loại bỏ phần tử trung lặp của hàm
function removeDuplicates($arr) {
    $newArr = array();
    for($i = 0; $i < count($arr); $i++) {
        $isDuplicate = false;
        for($j = 0; $j < count($newArr); $j++) {
            if($arr[$i] == $newArr[$j]) {
                $isDuplicate = true;
                break;
            }
        }
        if(!$isDuplicate) {
            array_push($newArr, $arr[$i]);
        }
    }
    return $newArr;
}

$arr = array(8, 4, 3, 2, 4, 7, 3);
$newArr = removeDuplicates($arr);
echo "Mảng mới sau khi loại bỏ phần tử trùng lặp là: ";
foreach($newArr as $value) {
    echo $value . " ";
}
//14.đảo ngược một chuỗi
function reverseString($string) {
    $length = strlen($string);
    $reversed = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

$string = "apple,pine apple, grape";
$reversedString = reverseString($string);
echo $reversedString;
//15. tính số lượng phần tử trong mảng
function countElements($array) {
    return count($array);
}

$array = ["apple, red, blue, yellow,pink,black"];
$count = countElements($array);
echo "Số lượng phần tử trong mảng là: $count";
function countElements($array) {
    return count($array);
}
$array = ["apple, red, blue, yellow,pink,black"];
$count = countElements($array);
echo "Số lượng phần tử trong mảng là: $count";

//16.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
    $reversed = strrev($string);
    if ($string === $reversed) {
        return true;
    } else {
        return false;
    }
}
$string = "A man, a plan, a canal: Panama";
if (isPalindrome($string)) {
    echo "$string là chuỗi Palindrome.";
} else {
    echo "$string không phải là chuỗi Palindrome.";
}
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}

$array = [1, 2, 3, 4, 1, 2, 1];
$element = 1;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function bubbleSort($arr) {
    $n = count($arr);
    for($i = 0; $i < $n-1; $i++) {
        for($j = 0; $j < $n-$i-1; $j++) {
            if($arr[$j] < $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);
$newArr = bubbleSort($arr);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần là: ";
foreach($newArr as $value) {
    echo $value . " ";
}

//20. viết chương trình thêm một chuỗi vào  đầu mảng hoặc cuối mảng
<?php
function prependElement($array, $element) {
    array_unshift($array, $element);
    return $array;
}
$array = ["banana, apple, orange"];
$element = "blue";
$result = prependElement($array, $element);
echo "Mảng sau khi thêm phần tử vào đầu: ";
foreach ($result as $value) {
    echo $value . " ";
}
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
<?php
function findSecondLargest($array) {
    $max = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;
    foreach ($array as $value) {
        if ($value > $max) {
            $secondMax = $max;
            $max = $value;
        } elseif ($value > $secondMax && $value < $max) {
            $secondMax = $value;
        }
    }

    return $secondMax;
}

$array = [6, 2, 8, 10, 0, 3, 7];
$secondLargest = findSecondLargest($array);
echo "Số lớn thứ hai trong mảng là: $secondLargest";
//22. tìm ucln và bcnn 2 số nguyên dương
function gcd($a, $b) {
    while($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

$num1 = 21;
$num2 = 54;
$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm";
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 32;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không là số hoàn hảo.";
}
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
<?php
function findLargestOdd($array) {
    $largestOdd = null;

    foreach ($array as $value) {
        if ($value % 2 != 0 && ($largestOdd === null || $value > $largestOdd)) {
            $largestOdd = $value;
        }
    }

    return $largestOdd;
}
$array = [1, 3, 5, 7, 9, 11, 13];
$largestOdd = findLargestOdd($array);
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOdd";
} else {
    echo "Không có số lẻ trong mảng";
}
//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 57;

if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $value) {
        if ($value > 0 && ($largestPositive === null || $value > $largestPositive)) {
            $largestPositive = $value;
        }
    }

    return $largestPositive;
}
$array = [-2, -5, 5, 16, 3, -8, 9];
$largestPositive = findLargestPositive($array);
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive";
} else {
    echo "Không có số dương trong mảng";
}
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $value) {
        if ($value < 0 && ($largestNegative === null || $value > $largestNegative)) {
            $largestNegative = $value;
        }
    }

    return $largestNegative;
}

$array = [-2, -5, 7, 10, -3, -8, 9];
$largestNegative = findLargestNegative($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative";
} else {
    echo "Không có số âm trong mảng";

}
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }

    return $sum;
}
$n = 10;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum";
?>
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function findPerfectSquares($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);

        // Kiểm tra nếu số là số chính phương
        if ($sqrt == intval($sqrt)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($perfectSquares as $square) {
    echo $square . " ";
}
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.

function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    if ($substringLength > $stringLength) {
        return false;
    }

    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        while ($j < $substringLength && $string[$i + $j] == $substring[$j]) {
            $j++;
        }
        if ($j == $substringLength) {
            return true;
        }
    }

    return false;
}
$string = "blue, rose, red, violet, pink";
$substring = "blue";
if (isSubstring($string, $substring)) {
    echo "'$substring' là chuỗi con của '$string'";
} else {
    echo "'$substring' không là chuỗi con của '$string'";
}

?>