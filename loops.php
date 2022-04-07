<?php
$products = [
['name' => 'دورات تدريبية', 'price' => 10],
['name' => 'تعلم البرمجة', 'price' => 20],
['name' => 'الهندسة', 'price' => 50],
['name' => 'الطب', 'price' => 100]

];
/*foreach($products as $product){
    echo $product['name'] . ' - ' . $product['price'];
    echo '<br />';
} 
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> learn php </title>
</head>
<body>

<h1>Products</h1>
<ul>
    <?php foreach($products as $product){ ?>
<h3><?php echo $product['name']; ?> </h3>
<p>$ <?php echo $product['price']; ?> </p>
  <?php  }?>
    </ul>
  </body>
</html>