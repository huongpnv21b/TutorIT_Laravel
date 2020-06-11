<?php
	 $fruit= array(
	 	0 =>"Apple",
	 	1 => "Banana",
	 	2 => "Orange"
	 );
 //Cau b dem so luong phan tu trong mang
 	 $dem=count($fruit);
 	 echo $dem.'<br>';
//cau c in ra phan tu thu hai trong mang
 		echo $fruit[1].'<br>';

 //cau d khai bao mang
 $ages=array(
		'An'=>27,
		'Binh'=>25,
		'Cuong'=>22
	);
//in ra tuoi cua cuong
 
echo 'Tuoi cua Cuong la :'.$ages['Cuong'].'<br>';

//Sử dụng vòng lặp foreach() in ra từng phần tử của $ages

foreach ($ages as $key => $value) {
	echo "{$key} => {$value} ".'<br>';
    // print_r($ages);
}

//cau g Khai báo mảng $colors chứa các màu red, green, blue, yellow

$colors =Array(
    0 => 'red',
    1 => 'green',
    2 => 'blue',
    3 => 'yellow'
);

//h. Sắp xếp mảng $colors theo thứ tự alphabet

 sort($colors);
 var_dump($colors);
 echo" ".'<br>';
//i. Sắp xếp mảng $colors theo thứ tự ngược alphabet

 rsort($colors);
  var_dump($colors);
//j. Sắp xếp mảng $ages theo số tuổi tăng dần

echo " ".'<br>';
krsort($ages);

foreach($ages as $key => $value) {
echo 'Ten =' . $key . ', Tuoi=' . $value;
echo ' '.'<br>';

}

//k. Cho 2 mảng số tự nhiên có cùng kích thước bất kỳ [-1, 3, 8, 2, 9, 5] và [4, 1, 2, 10, 5, 20], 1 số tự nhiên làm mục tiêu: 24
//Viết hàm nhận 3 thông số này và trả về các cặp giữa 2 mảng sao cho tổng của cặp này gần với số mục tiêu nhất. Trong trường hợp này sẽ là (3, 20) và (5, 20)

?>