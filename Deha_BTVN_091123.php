<?php
echo "<h1> STT 18: Hoàng Thị Mai (Nhóm 03) </h1>";

// Câu 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "<b> Câu 1: <br> </b>"; 
function testSoChan($i) {
    if ($i % 2 == 0) {
        echo "Số " . $i . " là số chẵn!";
        echo"<br>";
    } else {
        echo "Số " . $i . " không phải là số chẵn!";
        echo"<br>"; 
    }
}
testSoChan(5);
echo "<hr>";

// Câu 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "<b> Câu 2: <br> </b>";
 function sum($n) {
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
 }
$n = 5;
echo "Tổng của các số từ 1 đến $n = " . sum($n);
echo "<hr>";

// Câu 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "<b> Câu 3: <br> </b>";
echo "Bảng cửu chương từ 1 đến 10 <br>";
function bangCuuChuong($n) {
    for ($i = 1; $i <= $n; $i++) {
        $result = $n * $i;
        echo " $n x $i = $result <br>";
}} 
for ($i = 1; $i <= 10; $i++) {
    bangCuuChuong($i);
}
echo"<hr>";

// Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "<b> Câu 4: <br> </b>";
function ktChuoi($a, $b) {
      $viTri = strpos($a, $b);
    if ($viTri !== false) {
        echo "Chuỗi '$a' chứa từ '$b'.";
    } else {
        echo "Chuỗi '$a' không chứa từ '$b'.";
    }
}
ktChuoi("Mùa đông thích thật đấy ^^", "sẽ thích hơn nếu không có mưa");
Echo "<hr>";

// Câu 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
Echo "<b> Câu 5: <br> </b>";
// Hàm tìm giá trị lớn nhất của mảng 
function maxCuaMang($mang) {
    $max = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri > $max) {
            $max = $giaTri;
        }
    }
    return $max;
}
// Hàm tìm giá trị nhỏ nhất của mảng
function minCuaMang($mang) {
     $min = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri < $min) {
            $min = $giaTri;
        }
    }
    return $min;
}

$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

$max = minCuaMang($mangRandom);
$min = maxCuaMang($mangRandom);

echo "Mảng đã cho là: " . implode(', ', $mangRandom) . "<br>";
echo "Giá trị lớn nhất của mảng: $max <br>";
echo "Giá trị nhỏ nhất của mảng: $min <br>";
echo "<hr>";

// Câu 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "<b> Câu 6: <br> </b>";
function xsMang($mang) {
    sort ($mang);
    return $mang;
}
$mangRandom = array(5, 8, 12, 3, 1, 9, 10, 2);
$result = xsMang($mangRandom);
echo "Mảng trước khi sắp xếp: " . implode(', ', $mangRandom) .'<br>';
echo "Mảng sau khi đã sắp xếp theo thứ tự tăng dần: " . implode(', ', $result) .'<br>';
echo "<hr>";

// Câu 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "<b> Câu 7: <br> </b>";
function tinhGiaiThua($x) {
    if ($x == 0 || $x == 1) {
        return 1;
    } else {
        return $x * tinhGiaiThua($x - 1);
    }
}
$x = 4;
$result = tinhGiaiThua($x);
echo "Giai thừa của số nguyên dương $x là: $result";
echo "<hr>";

// Câu 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "<b> Câu 8: <br> </b>";
Function snt($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function timSNT($x, $y) {
$soNguyenTo = array();
    for ($i = $x; $i <= $y; $i++) {
        if (snt($i)) {
            $soNguyenTo[] = $i;
        }
    }
    return $soNguyenTo;
}
$x = 1;
$y = 10;
$result = timSNT($x, $y);
echo "Các số nguyên tố trong khoảng từ $x đến $y là: " . implode(', ', $result);
echo "<hr>";

// Câu 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "<b> Câu 9: <br> </b>";
function sumMang($arr) {
    $tong = 0;
    foreach ($arr as $so) {
        $tong += $so;
    }
    return $tong;
}

$mangRandom = array(5, 8, 12, 3, 1, 9, 10, 2);
$result = sumMang($mangRandom);
echo "Mảng đã cho là: " . implode(', ', $mangRandom) .'<br>';
echo "Tổng các số trong mảng là: $result <br>";
echo "<hr>";

// Câu 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước
echo "<b> Câu 10: <br> </b>";
function fibonacci($n) {
    $fibonacciArray = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }
    return $fibonacciArray;
}

function  inFibonacci($a, $b) {
    if ($a < 0 || $b < 0 || $b < $a) {
        echo "Vui lòng nhập khoảng hợp lệ!";
        return;
    }
    $fibonacciArray = fibonacci($b);
    echo "Các số Fibonacci trong khoảng từ $a đến $b là: ";
    for ($i = 0; $i < $b; $i++) {
        if ($fibonacciArray[$i] >= $a && $fibonacciArray[$i] <= $b) {
            echo $fibonacciArray[$i] . " ";
        }
    }
}
inFibonacci(3, 15);
echo "<hr>";

// Câu 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo "<b> Câu 11: <br> </b>";
function armstrong($n) {
    $soGoc = $n;
    $soChuSo = strlen($n);
    $sum = 0;

    while ($n > 0) {
        $chuSo= $n % 10;
        $sum += pow($chuSo, $soChuSo);
        $n = (int)($n / 10);
    }
    return $sum === $soGoc;
} 

$n = 25;
if (armstrong($n)) {
    echo "$n là số Armstrong!";
} else {
    echo "$n không phải là số Armstrong!";
}
echo "<hr>";

// Câu 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "<b> Câu 12: <br> </b>";
function chenPhanTu($mangRandom, $phanTu, $viTri) {
    if ($viTri < 0 || $viTri > count($mangRandom)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mangRandom;
    }
    array_splice($mangRandom, $viTri, 0, $phanTu);
    return $mangRandom;
}
$mangRandom = array(5, 8, 12, 3, 1, 9, 10, 2);
$phanTuChen = 11;
$viTriChen = 7;
$mangRandom = chenPhanTu($mangRandom, $phanTuChen, $viTriChen);
echo "Mảng sau khi chèn phần tử $phanTuChen vào vị trí $viTriChen là: ";
echo implode(', ', $mangRandom);
echo "<hr>";

// Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo " <b> Câu 13: <br> </b>";
function loaiTrungLap($mang) {
    $mangBanDau = array_unique($mang);
    return $mangBanDau;
}

$mang = array(1, 1, 2, 2, 3, 3, 4, 4, 5, 5);
$mangSauKhiLoaiBo = loaiTrungLap($mang);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
echo implode(', ', $mangSauKhiLoaiBo);
echo"<hr>";

// Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "<b> Câu 14: <br> </b>";
function timViTri($mang, $phanTu) {
    $viTri = array_search($phanTu, $mang);
    if ($viTri !== false) {
        echo "Vị trí của phần tử $phanTu trong mảng là: $viTri";
    } else {
        echo "Phần tử $phanTu không tồn tại trong mảng.";
    }
}
$mang = array(1, 2, 3, 4, 5);
$phanTuTim = 3;
timViTri($mang, $phanTuTim);
echo"<hr>";

// Câu 15. Viết chương trình PHP để đảo ngược một chuỗi.
echo "<b> Câu 15: <br> </b>";
function daoNguoc($a) {
    return strrev($a);
}
$chuoiBanDau = "Hoang Thi Mai";
$chuoiDaoNguoc = daoNguoc($chuoiBanDau);
echo "Chuỗi ban đầu: " . $chuoiBanDau . "<br>";
echo "Chuỗi sau khi đảo ngược: " . $chuoiDaoNguoc;
echo "<hr>";

// Câu 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "<b> Câu 16: <br> </b>";
function soLuongPhanTu($mangRandom) {
    return count($mangRandom);
}
$mangRandom = array(1, 2, 3, 4, 5);
$soLuongPhanTu = soLuongPhanTu($mangRandom);
echo "Số lượng phần tử trong mảng là: " . $soLuongPhanTu;
echo "<hr>";

// Câu 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "<b> Câu 17: <br> </b>";
function chuoiPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}

$mystr = "Judy's here!";
if (chuoiPalindrome($mystr)) {
    echo "Chuỗi '$mystr' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$mystr' không phải là chuỗi Palindrome.";
}
echo "<hr>";

// Câu 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "<b> Câu 18: <br> </b>";
function soLanXuatHien($mang, $phanTuCanDem) {
    $soLanXuatHien = array_count_values($mang);
    return isset($soLanXuatHien[$phanTuCanDem]) ? $soLanXuatHien[$phanTuCanDem] : 0;
}

$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
$phanTuCanDem = 10;
$soLanXuatHien = soLanXuatHien($mangRandom, $phanTuCanDem);
echo "Số lần xuất hiện của phần tử $phanTuCanDem trong mảng là: " . $soLanXuatHien;
echo "<hr>";

// Câu 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "<b> Câu 19: <br> </b>";
function sxGiamDan($a) {
    arsort($a);
    return $a;
}

$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
$mangDaSapXep = sxGiamDan($mangRandom);
echo "Mảng đã sắp xếp giảm dần: " . implode(', ', $mangDaSapXep);
echo "<hr>";

// Câu 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "<b> Câu 20: <br> </b>";
function themDauMang($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}

function themCuoiMang($mang, $phanTu) {
    $mang[] = $phanTu;
    return $mang;
}
$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$phanTuThem = 11;

$mangSauThemVaoDau = themDauMang($mangRandom, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu: " . implode(', ', $mangSauThemVaoDau);

$mangSauThemVaoCuoi = themCuoiMang($mangRandom, $phanTuThem);
echo "<br> Mảng sau khi thêm phần tử $phanTuThem vào cuối: " . implode(', ', $mangSauThemVaoCuoi);
echo "<hr>";

// Câu 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "<b> Câu 21: <br> </b>";
function timSoLonThuHai($mangRandom) {
    rsort($mangRandom);
    $soLonThuHai = $mangRandom[1];
    return $soLonThuHai;
}
$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "Số lớn thứ hai trong mảng là: " . timSoLonThuHai($mangRandom);
echo "<hr>";

// Câu 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "<b> Câu 22: <br> </b>";
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return abs($a * $b) / timUSCLN($a, $b);
}
$so1 = 5;
$so2 = 10;
echo "Ước số chung lớn nhất của $so1 và $so2 là: " . timUSCLN($so1, $so2) . "<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: " . timBSCNN($so1, $so2) . "<br>";
echo "<hr>";

// Câu 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "<b> Câu 23: <br> </b>";
function ktSoHoanHao($n) {
    if ($n <= 0) {
        return false;
    }
    $tongUoc = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $tongUoc += $i;
        }
    }
    return $tongUoc == $n;
}
$soCanKiemTra = 28;
if (ktSoHoanHao($soCanKiemTra)) {
    echo "Số $soCanKiemTra là số hoàn hảo! <br>";
} else {
    echo "Số $soCanKiemTra không phải là số hoàn hảo! <br>";
}
echo "<hr>";

// Câu 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "<b> Câu 24: <br> </b>";
function timSoLeLonNhat($a) {
    $soLeLonNhat = 0;
    foreach ($a as $so) {
        if ($so % 2 != 0) { // Kiểm tra xem số có phải là số lẻ
            if ($soLeLonNhat === 0 || $so > $soLeLonNhat) {
                $soLeLonNhat = $so;
            }}}
    return $soLeLonNhat;
}

$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
echo "Mảng đã cho là: " . implode(", ", $mangRandom) . "<br>";
$result = timSoLeLonNhat($mangRandom);
if ($result !== 0) {
    echo "Số lẻ lớn nhất trong mảng là số: " . $result;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<hr>";

// Câu 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "<b> Câu 25: <br> </b>";
$x = 11;
if (snt($x)) 
{
    echo "Số $x là số nguyên tố! <br>";
} else {
    echo "Số $x không là số nguyên tố! <br>";
}
echo "<hr>";

// Câu 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "<b> Câu 26: <br> </b>";
function timSoDuongLonNhat($a) {
    $soDuongLonNhat = 0;
    foreach ($a as $so) {
        if ($so > 0) {
            if ($soDuongLonNhat === 0 || $so > $soDuongLonNhat) {
                $soDuongLonNhat = $so;
            }}}
    return $soDuongLonNhat;
}

$mangRandom = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
$result = timSoDuongLonNhat($mangRandom);
echo "Mảng đã cho là: " . implode(", ", $mangRandom) . "<br>";

if ($result !== 0) {
    echo "Số dương lớn nhất trong mảng là: " . $result;
} else {
    echo "Không có số dương trong mảng.";
}
echo "<hr>";

// Câu 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "<b> Câu 27: <br> </b>";
function timSoAmLonNhat($a) {
    $soAmLonNhat = 0;
    foreach ($a as $so) {
        if ($so < 0) {
            if ($soAmLonNhat === 0 || $so > $soAmLonNhat) {
                $soAmLonNhat = $so;
            }}}
    return $soAmLonNhat;
}

$mangRandom= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11);
echo "Mảng đã cho là: " . implode(", ", $mangRandom) . "<br>";
$result = timSoAmLonNhat($mangRandom);
if ($result !== 0) {
    echo "Số âm lớn nhất trong mảng là: " . $result;
} else {
    echo "Không có số âm trong mảng.";
}
echo "<hr>";

// Câu 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo "<b> Câu 28: <br> </b>";
function sumSoLe($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 11;
echo "Tổng các số lẻ từ 1 đến $n là: " . sumSoLe($n);
echo "<hr>";

// Câu 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "<b> Câu 29: <br> </b>";
function timSoChinhPhuong($a, $b) {
    $soChinhPhuong = array();
    for ($i = $a; $i <= $b; $i++) {
        $canBacHai = sqrt($i);
        if ($canBacHai == (int)$canBacHai) {
            $soChinhPhuong[] = $i;
        }}
    return $soChinhPhuong;
}

$a = 1;
$b = 10;
echo "Khoảng đã cho là: $a đến $b <br>";
$result = timSoChinhPhuong($a, $b);

if (!empty($result)) {
    echo "Các số chính phương trong khoảng từ $a đến $b là: " . implode(', ', $result);
} else {
    echo "Không có số chính phương trong khoảng từ $a đến $b.";
}
echo "<hr>";

// Câu 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "<b> Câu 30: <br> </b>";
function laChuoiCon($chuoiMe, $chuoiCon) {
    $doDaiChuoiChinh = strlen($chuoiMe);
    $doDaiChuoiCon = strlen($chuoiCon);

    for ($i = 0; $i <= $doDaiChuoiChinh - $doDaiChuoiCon; $i++) {
        $chuoiPhu = substr($chuoiMe, $i, $doDaiChuoiCon);
        if ($chuoiPhu == $chuoiCon) {
            return true;
        }
    }
    return false;
}
$chuoiMe= "Hãy đi xem The Eras Tour đi!";
$chuoiCon = "Đi luôn";

if (laChuoiCon($chuoiMe, $chuoiCon)) {
    echo "'$chuoiCon' là chuỗi con của '$chuoiMe' <br>";
} else {
    echo "'$chuoiCon' không là chuỗi con của '$chuoiMe' <br>";
}
?>