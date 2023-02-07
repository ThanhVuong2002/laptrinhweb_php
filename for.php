<!DOCTYPE html>
<html>
<body>


    <style>
        .red{
            height:20px;
            width:20px;
            float:left;
            border:1px solid rgb(128, 128, 128);
            margin-left:5px;
            margin-bottom:5px;
            background: red;
        }
        .blue{
            height:20px;
            width:20px;
            float:left;
            border:1px solid rgb(128, 128, 128);
            margin-left:5px;
            margin-bottom:5px;
            background: blue;
        }

    </style>

    <script>
        for(var i = 0; i < 5; i++){
            for(var j = 0; j < 10; j++){
                if(i%2=0){
                document.write("<div class='blue'></div>");
            }
            else{
                document.write("<div class='red'></div>");
            }
            }
            document.write("<div style='clear:both'></div>");
        }
    </script>

    <?php
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                if($i%2=0){
                    echo "<div class='blue'></div>"; 
                }
                else{
                    echo "<div class='red'></div>";
                }
               
            }
            echo"<div style='clear:both'></div>";
        }
    ?>

</body>
</html>