<?php


function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <=sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

echo"Câu 1:<br>";
echo "Danh sách các số nguyên tố từ 1 đến 100 là :";

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";




// -------------------------------------------------------------------cau2
echo "Câu 2: ";
echo "<br>";
$products = array(
    "product1" => array(
        "name" => "egg",
        "price" => 1000,
        "quantity" => 1
    ),
    "product2" => array(
        "name" => "milk",
        "price" => 2000,
        "quantity" => 2
    ),
    "product3" => array(
        "name" => "bread",
        "price" => 3000,
        "quantity" => 3
    )
);

// Hiển thị thông tin của tất cả sản phẩm
echo "Thông tin của tất cả sản phẩm:<br>";
foreach ($products as $product) {
    echo "Tên: " . $product["name"] . ", Giá:" . $product["price"] . ", Số lượng: " . $product["quantity"] . ".<br>";
    echo "<br>";
}

// Tổng giá trị của tất cả sản phẩm
function tongGiaTri($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product["price"] * $product["quantity"];
    }
    return $totalValue;
}

echo "Tổng giá trị của tất cả sản phẩm:" . tongGiaTri($products);


?>






