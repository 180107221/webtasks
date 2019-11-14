<html>
<head><style>
.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
.menu {display:block;width:700px;margin-left:auto;margin-right:auto;}
.card .title{font-size:20px;font-weight:bold;}
.card .price{color:green;}
.card .description{display:flex;flex-direction:column;}
.card .price{flex-grow:1;}
.card .year{font-weight:bold;font-size:18px;}
</style></head>
<body>

<div class="cards">
<?php
$cars = [["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://d1hu588lul0tna.cloudfront.net/toyotaone/ruru/002-camry-exclusive-next-steps_tcm-3020-870114.jpg"],["maker"=>"Audi","model"=>"A8","year"=>1986,"price"=>12000,"image"=>"http://www.theautohost.com/_contentPages/vehicleContentPages/audi/2017/A8%20L/images/2017-Audi-A8L-exterior-grille.jpg"],
["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"X5","year"=>2015,"price"=>19000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"Model 7","year"=>2014,"price"=>22000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
];

if(isset($_REQUEST['maker'])){
    if($_REQUEST['maker']=="Toyota"){
        if(isset($_REQUEST['price'])){
            if(isset($_REQUEST['year'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Toyota") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Toyota" && $cars[$x]['price'] > (int) $_REQUEST['price']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        elseif(isset($_REQUEST['year'])){
            if(isset($_REQUEST['price'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Toyota") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Toyota" && $cars[$x]['year'] < (int) $_REQUEST['year']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        else{
            for($x = 0; $x < 8; $x++){
                if($cars[$x]['maker'] == "Toyota"){
                    $maker = $cars[$x]['maker'];
                    $model = $cars[$x]['model'];
                    $image = $cars[$x]['image'];
                    $year = $cars[$x]['year'];
                    $price = $cars[$x]['price'];
                    $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                    echo $card;
                }
            }
        }
    }


    if($_REQUEST['maker']=="BMW"){
        if(isset($_REQUEST['price'])){
            if(isset($_REQUEST['year'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "BMW") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "BMW" && $cars[$x]['price'] > (int) $_REQUEST['price']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        elseif(isset($_REQUEST['year'])){
            if(isset($_REQUEST['price'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "BMW") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "BMW" && $cars[$x]['year'] < (int) $_REQUEST['year']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        else{
            for($x = 0; $x < 8; $x++){
                if($cars[$x]['maker'] == "BMW"){
                    $maker = $cars[$x]['maker'];
                    $model = $cars[$x]['model'];
                    $image = $cars[$x]['image'];
                    $year = $cars[$x]['year'];
                    $price = $cars[$x]['price'];
                    $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                    echo $card;
                }
            }
        }
    }


    if($_REQUEST['maker']=="Audi"){
        if(isset($_REQUEST['price'])){
            if(isset($_REQUEST['year'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Audi") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Audi" && $cars[$x]['price'] > (int) $_REQUEST['price']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        elseif(isset($_REQUEST['year'])){
            if(isset($_REQUEST['price'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Audi") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Audi" && $cars[$x]['year'] < (int) $_REQUEST['year']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        else{
            for($x = 0; $x < 8; $x++){
                if($cars[$x]['maker'] == "Audi"){
                    $maker = $cars[$x]['maker'];
                    $model = $cars[$x]['model'];
                    $image = $cars[$x]['image'];
                    $year = $cars[$x]['year'];
                    $price = $cars[$x]['price'];
                    $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                    echo $card;
                }
            }
        }
    }


    if($_REQUEST['maker']=="Lada"){
        if(isset($_REQUEST['price'])){
            if(isset($_REQUEST['year'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Lada") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Lada" && $cars[$x]['price'] > (int) $_REQUEST['price']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        elseif(isset($_REQUEST['year'])){
            if(isset($_REQUEST['price'])){
                for($x = 0; $x < 8; $x++){
                    if(($cars[$x]['maker'] == "Lada") && ($cars[$x]['price'] > (int) $_REQUEST['price']) && ($cars[$x]['year'] < (int) $_REQUEST['year'])){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
            else{
                for($x = 0; $x < 8; $x++){
                    if($cars[$x]['maker'] == "Lada" && $cars[$x]['year'] < (int) $_REQUEST['year']){
                        $maker = $cars[$x]['maker'];
                        $model = $cars[$x]['model'];
                        $image = $cars[$x]['image'];
                        $year = $cars[$x]['year'];
                        $price = $cars[$x]['price'];
                        $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                        echo $card;
                    }
                }
            }
        }
        else{
            for($x = 0; $x < 8; $x++){
                if($cars[$x]['maker'] == "Lada"){
                    $maker = $cars[$x]['maker'];
                    $model = $cars[$x]['model'];
                    $image = $cars[$x]['image'];
                    $year = $cars[$x]['year'];
                    $price = $cars[$x]['price'];
                    $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
                    echo $card;
                }
            }
        }
    }         
}
elseif(isset($_REQUEST['year'])){
    for($x = 0; $x < 8; $x++){
        if($cars[$x]['year'] < 2012){
            $maker = $cars[$x]['maker'];
            $model = $cars[$x]['model'];
            $image = $cars[$x]['image'];
            $year = $cars[$x]['year'];
            $price = $cars[$x]['price'];
            $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
            echo $card;
        }
    }
}
elseif(isset($_REQUEST['price'])){
    for($x = 0; $x < 8; $x++){
        if($cars[$x]['price'] > 20000){
            $maker = $cars[$x]['maker'];
            $model = $cars[$x]['model'];
            $image = $cars[$x]['image'];
            $year = $cars[$x]['year'];
            $price = $cars[$x]['price'];
            $card = "<div class='card'><image width='150px' height='100px' src='$image'> <div class='description'> <div class='title'> $maker $model</div> <div class='price'> $price$</div><div class='year'> $year years</div> </div> </div>";
            echo $card;
        }
    }
}
?>
</div>
<div class="menu">
<a href="task3.php">Home</a>|<a href="task3.php?maker=Toyota">Toyota</a>|<a href="task3.php?maker=BMW">BMW</a>|<a href="task3.php?maker=Audi">Audi</a>|<a href="task3.php?maker=Lada">Lada</a></div>

<div class="menu">
<a href="task3.php?year=old">Old cars (More than 7 years)</a>|<a href="task3.php?price=expensive">Expensive cars (more than 20.000$)</a></div>