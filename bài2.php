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
    <title>Clothes Shop</title>

    <style>
        img{
            width: 150px;
        }
        .titles{
            color: gold;
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
            'Giày dép'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://s1.storage.5giay.vn/image/2017/07/20170701_5b45641a5bec339189e35965e875195a_1498875838.jpg"/>',
                    'name'=>'Sandal nữ cao gót phong cách Hàn Quốc-kem-SD02K',
                    'Price'=>400.000,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://c1img.onlinefriday.vn/tmp/09_2018/c/fc/8/5671254523_1537244361.jpg"/>',
                    'name'=>'Giày sandal đế xuồng 7 cm quai chéo 10190-S8-ZM Shoegarden',
                    'Price'=>600.000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoM7_8otw6FptQB1MEKQCVVbbSAiIo0t2Xvg&usqp=CAU"/>',
                    'name'=>' Giày cao gót bít mũi Tammy shoes 8 cm đen-AD8',
                    'Price'=>218.000,
                )
            ),

                'Túi xách'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://product.hstatic.net/1000296863/product/tui-xach-nu-da-ca-sau_cdd1dd7a575c4722bb84e04cd95dc44f_large.jpg"/>',
                        'name'=>'Túi xách nữ thời trang POKETO',
                        'Price'=>1,500,000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://tuixachbn.com/wp-content/uploads/2022/06/tui-xach-nu-TN268-1.jpg"/>',
                        'name'=>'Sale hot Túi xách nữ da cao cấp T68-SP-2A1-ĐEN',
                        'Price'=>600,000,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://luxshop.vn/Uploads/images/product/item/tui-xach-nu-chanel-cao-cap-25-185cm/090b6d9a-1ea7-490c-81e3-01868e113330.jpg"/>',
                        'name'=>'Sale hot Túi xách nữ da cao cấp T6868-11-2A1-ĐEN',
                        'Price'=>450,000,
                        
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
                                    <button type="submit" onclick="camon()" name="Đặt mua" class="btn btn-primary btn-block">Đặt mua</button>
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
    <script>
        function camon(){
            alert("Thank you your order")
        };
    </script>
    </body>
</html>