<?php 
//PHẦN TRẮC NGHIỆM
// 1.Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// 2.a
// 3.a
// 4.a
// 5.b


//PHẦN TƯ LUẬN

// Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
// Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
// Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.



function generateFibonacci($n)
{
    $fibonacciArray = array(); 

    if ($n >= 1) {
        $fibonacciArray[] = 0;
    }
    if ($n >= 2) {
        $fibonacciArray[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

    return $fibonacciArray;
}

$n = 10;
$fibonacciSequence = generateFibonacci($n);

echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}

// Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
// Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
// Hiển thị thông tin của tất cả học sinh trong mảng.
// Viết hàm để tìm học sinh có điểm cao nhất (grade).

// tạo một mảng kết hợp có khóa là các chuỗi
$student = array(
  "id" => "21D1",
  "name" => " Trịnh Thị Nhung",
  "age" => 20,
  "grade" => 9.0,
);
// truy cập vào giá trị của mảng bằng cách dùng khóa
echo "Mã số học sinh: " . $student["id"] . "\n";
echo "Tên học sinh: " . $student["name"] . "\n";
echo "Tuổi học sinh: " . $student["age"] . "\n";
echo "Điểm học sinh: " . $student["grade"] . "\n";
// tạo một mảng kết hợp chứa thông tin về học sinh
$students = array(
  array(
    "id" => "21D1",
    "name" => "Trịnh Thị Nhung",
    "age" => 20,
    "grade" => 9.0,
  ),
  array(
    "id" => "21D2",
    "name" => "Nguyễn Thị B",
    "age" => 19,
    "grade" => 9.0
  ),
  array(
    "id" => "21D3",
    "name" => "Trần Văn C",
    "age" => 17,
    "grade" => 7.5
  ),
  array(
    "id" => "21D4",
    "name" => "Nguyễn Hữu D",
    "age" => 19,
    "grade" => 8.0
  ),
  array(
    "id" => "21D5",
    "name" => "Hoàng Thị E",
    "age" => 21,
    "grade" => 8.5
  )
);
// hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh trong mảng:\n";
// lặp qua mảng và in ra thông tin của mỗi học sinh
foreach ($students as $student) {
echo "Mã số học sinh: " . $student["id"] . "\n";
echo "Tên học sinh: " . $student["name"] . "\n";
echo "Tuổi học sinh: " . $student["age"] . "\n";
echo "Điểm học sinh: " . $student["grade"] . "\n";
echo "--------------------------\n";
}
// hàm để tìm học sinh có điểm cao nhất
function findHighestGrade($students) {
  // khởi tạo biến để lưu trữ điểm cao nhất và học sinh có điểm cao nhất
  $highest_grade = 0;
  $highest_student = null;
  // lặp qua mảng và so sánh điểm của mỗi học sinh với điểm cao nhất
  foreach ($students as $student) {
    // nếu điểm của học sinh lớn hơn điểm cao nhất
    if ($student["grade"] > $highest_grade) {
      // cập nhật lại điểm cao nhất và học sinh có điểm cao nhất
      $highest_grade = $student["grade"];
      $highest_student = $student;
    }
  }
  // trả về học sinh có điểm cao nhất
  return $highest_student;
}
// gọi hàm để tìm học sinh có điểm cao nhất
$highest_student = findHighestGrade($students);
// hiển thị học sinh có điểm cao nhất
echo "Học sinh có điểm cao nhất là:\n";
echo "Mã số học sinh: " . $highest_student["id"] . "\n";
echo "Tên học sinh: " . $highest_student["name"] . "\n";
echo "Tuổi học sinh: " . $highest_student["age"] . "\n";
echo "Điểm học sinh: " . $highest_student["grade"] . "\n";
?>

