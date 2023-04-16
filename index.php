<?php
require(__DIR__ . '/Product.php');
require(__DIR__ . '/Test.php');


$productModel = new Product();

// $id = $productModel->insert([
//     'name' => 'san-pham-1',
//     'price' => 100,
//     'decription' => 'mo-ta-1'
// ]);

// ->where('id', 1)
// ->where('id', '>', 1)

// $productModel
// ->where('id', 1)
// ->update([
//     'name' => 'duc789',
//     'price' => 5000
// ]);

// $data = $productModel
// ->select('products.id, name, decription, product_tag.name_tag')
// ->join('product_tag', 'products.id = product_tag.product_id')
// ->where('products.id', 3)
// ->groupBy('name')
// ->orderBy('name desc')
// // ->limit(2, 1)
// ->get();

// echo "<pre>";
// print_r($data);

// $productModel->setName('product1');
// $productModel->save($productModel);

// echo "<pre>";
// print_r($productModel);

$data = $productModel
->select('products.id, name, decription')
->with('comments')
->get();


echo "<pre>";
print_r($data);



// echo "<pre>";
// print_r($productModel);

// eager loading
// $productModel->test();

// $productModel->comments;







