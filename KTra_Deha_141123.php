<?php
echo "<h1> STT 18: Hoàng Thị Mai (Nhóm 03) </h1>";

echo "<h2> Trắc nghiệm </h2>";

// Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// Câu 2: A. True
// Câu 3: A. array()
// Câu 4: A. readfile()
// Câu 5: B. Chuyển đổi một đối tượng thành một chuỗi 

echo "<h2> Tự luận </h2>";

// Câu 1: 
echo "<b> Câu 1 <br> </b>";
// Yêu cầu 1: Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
function fibonacci($n) {
    $fibArray = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibArray[$i] = $fibArray[$i - 1] + $fibArray[$i - 2];
    }
    return $fibArray;
}

function inFibonacci($fibArray) {
    echo "Dãy số Fibonacci: ";
    foreach ($fibArray as $number) {
        echo "<span class='fibonacci'> $number </span>, ";
    }
}

// Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.
$n = 10;
$fibArray = generateFibonacci($n);
inFibonacci($fibArray);

// CSS 
<style>
    .fibonacci {
        color: blue; 
    }
</style>

echo "<hr>"

// Câu 2: 
echo "<b> Câu 2: <br> </b>";
<?php

// Tạo một mảng kết hợp chứa thông tin về học sinh
$students = array(
    array('id' => 1, 'name' => 'Hoang Thi Mai', 'age' => 20, 'grade' => 90, 'address' => 'Ha Noi', 'sdt' => '0123456789'),
    array('id' => 2, 'name' => 'Hoang Thi Quynh Nga', 'age' => 20, 'grade' => 92, 'address' => 'Thai Binh', 'sdt' => '0123456789'),
    array('id' => 3, 'name' => 'Chu Thi Hong Nhung', 'age' => 20, 'grade' => 92, 'address' => 'Hung Yen', 'sdt' => '0123456789'),
    array('id' => 4, 'name' => 'Do Van Long', 'age' => 20, 'grade' => 92, 'address' => 'Ha Noi', 'sdt' => '0123456789')
);

// Hiển thị thông tin của tất cả học sinh trong mảng
function hienThiThongTinHocSinh($students) {
    echo "Thông tin của tất cả học sinh: <br>";
    foreach ($students as $student) {
        echo "ID: {$student['id']}, Tên: {$student['name']}, Tuổi: {$student['age']}, Điểm: {$student['grade']}, Địa chỉ: {$student['address']}, Số điện thoại: {$student['sdt']} <br>";
    }}

// Viết hàm để tìm học sinh có điểm cao nhất
function timHocSinhDiemCaoNhat($students) {
    $diemCaoNhat = 0;
    $hocSinhDiemCaoNhat = null;

    foreach ($students as $student) {
        if ($student['grade'] > $diemCaoNhat) {
            $diemCaoNhat = $student['grade'];
            $hocSinhDiemCaoNhat = $student;
        }}
    return $hocSinhDiemCaoNhat;
}

// Gọi hàm để hiển thị thông tin của tất cả học sinh
hienThiThongTinHocSinh($students);

// Gọi hàm để tìm học sinh có điểm cao nhất
$hocSinhDiemCaoNhat = timHocSinhDiemCaoNhat($students);
echo "<br";
// Hiển thị thông tin của học sinh có điểm cao nhất
echo "Học sinh có điểm cao nhất: <br>";
if ($hocSinhDiemCaoNhat !== null) {
    echo "ID: {$hocSinhDiemCaoNhat['id']}, Tên: {$hocSinhDiemCaoNhat['name']}, Tuổi: {$hocSinhDiemCaoNhat['age']}, Điểm: {$hocSinhDiemCaoNhat['grade']}, Địa chỉ: {$hocSinhDiemCaoNhat['address']}, Số điện thoại: {$hocSinhDiemCaoNhat['sdt']}\n";
} else {
    echo "Không có học sinh nào trong danh sách! <br>";
}
?>
