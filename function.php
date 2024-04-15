<?php


// 33. დავალება
function calculatePremiumPrice($basicPrice) {
   
    $premiumPrice = $basicPrice * 10;
    
  
    return $premiumPrice;
}


$basicPrice = 9.99;
$premiumPrice = calculatePremiumPrice($basicPrice);
// 33 დავალების დასასრული


// 34 დავალება
$blogData = array(
    array(
        "image" => "assets/imgs/img-1.jpg",
        "title" => "Consectetur adipisicing elit",
        "author" => "Admin",
        "likes" => 234,
        "comments" => 123,
        "text1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                    delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium
                    neque numquam mollitia modi quasi distinctio.",
        "text2" => "Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.",
        "text3" => "Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.",
        "read" => "Read more",
    ),
    array(
        "image" => "assets/imgs/img-2.jpg",
        "title" => "Explicabo illo",
        "author" => "Admin",
        "likes" => 456,
        "comments" => 264,
        "text1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid,
         minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem",
        "read" => "Read more",
    )
);

function getCurrentYear() {
    return date("Y");
}
?>




