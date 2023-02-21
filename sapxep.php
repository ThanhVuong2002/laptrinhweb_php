<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Smart Phone</title>

    <style>
        img{
            width: 150px;
        }
        .titles{
            text-align:center;
            background: rgb(39, 194, 194) ;
            color: white;
            font-size:  30px;
            border-radius:20px ;
        }
        .price{
            color: red;
        }
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'NỔI BẬT NHẤT'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQWZvphQ3l30ALdCXsISLA-0pAYKJ_c2N_V6er1zBp-0iXH7qdOdRAWVM42x0cFC9-FqFQ-IPvLwXs5&usqp=CAc"/>',
                    'name'=>'A iphone 13',
                    'Price'=>17790000,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRSjaiEB4phNdJbGq05Ktenm6GXqgjibiGTAoD_-9dLxCqd9LCmObAwW9hwn_WBi0_2x3cyfBCA1zs&usqp=CAc"/>',
                    'name'=>'C iphone 12',
                    'Price'=>6890000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR2Xy2nmPgm30gww2DpG9dXh-Smc6tOxNKxDH7NzkI0TdL0vflkfn1n0TdSJdhCl-BFfkFisq3i4Oc&usqp=CAc"/>',
                    'name'=>' B iphone 14',
                    'Price'=>34990000,
                ),
                'sp4'=>array(
                    'img'=>'<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRyH350TtawiAhhDoUywvePJ3HHl1asOws-vs6oMtQLY7NCvfia6zGi_nCfiX2kXn3_PD11NqMTNBI&usqp=CAc"/>',
                    'name'=>'V iphone 11',
                    'Price'=>10800000,
                ),
                'sp5'=>array(
                    'img'=>'<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQMpyx4o5n77MKxZzRey3hmcP82OJLJFsAGO_jPpWOruBByn-35sfAtZNBQ7XP5QWprDwLu7ndzpSk&usqp=CAc"/>',
                    'name'=>'H iphone X',
                    'Price'=>12098000,
                )
                ,
                'sp6'=>array(
                    'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS969P9swMpNFbLm_mynDiEsjf6tARobFCWt_PldqllgP-jjPwdNZJdRy_Rc3T1Q5wELHHzkUihA00&usqp=CAc"/>',
                    'name'=>'S iphone XS',
                    'Price'=>5490000,
                )
                ),

                'SẢN PHẨM MỚI NHẤT'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQJFBmupMzdmN4VoirGuRMNDGxzPcZB88TbHWuT9LvZstiFCwUdoA59pO4fFXB9zrwmjURRbgy3pg&usqp=CAc"/>',
                        'name'=>'N SamSung',
                        'Price'=>399000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRVX3MGYL7qKWHxf5pyooxhIYz2g3mh7gWTO2ycUigo7DvrwhPPRoD856U9Z8PEoJ6y5jDrJcddgA&usqp=CAc"/>',
                        'name'=>'P OPPO rino 10',
                        'Price'=>3990900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQJFBmupMzdmN4VoirGuRMNDGxzPcZB88TbHWuT9LvZstiFCwUdoA59pO4fFXB9zrwmjURRbgy3pg&usqp=CAc"/>',
                        'name'=>'E OPPO reno8',
                        'Price'=>499090,
                    ),
                    'sp04'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRVX3MGYL7qKWHxf5pyooxhIYz2g3mh7gWTO2ycUigo7DvrwhPPRoD856U9Z8PEoJ6y5jDrJcddgA&usqp=CAc"/>',
                        'name'=>'K OPPO A77s',
                        'Price'=>5590000,
                    ),
                    'sp05'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQJFBmupMzdmN4VoirGuRMNDGxzPcZB88TbHWuT9LvZstiFCwUdoA59pO4fFXB9zrwmjURRbgy3pg&usqp=CAc"/>',
                        'name'=>'Y Vivo Y22',
                        'Price'=>5290000,
                    )
                    ,
                    'sp06'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT61qH2zLjo4FkEkVO0KkAY6kz3ZaMhm2zKsr927biyfzSHpUWtYcKJI2OLgEcrEAxRY303B_IlOuA&usqp=CAc"/>',
                        'name'=>'I Vivo V25',
                        'Price'=>11990000,
                    )
                )
                    );
        ksort($sanpham);

        

    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles">*<?php echo $k ?>*</div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-2">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
<i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <span style="font-size:  10px;">100 đánh giá</span>
                                </p>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>   
    <?php
    }
    ?>
</body>
</html>