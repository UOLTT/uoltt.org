<html>
    <head>
        <title>DND stuff</title>
    </head>
    <body>
        <?php
        /**
         * Created by PhpStorm.
         * User: Luka_offline
         * Date: 15/04/2018
         * Time: 20:13
         */

        $dice_data = $_GET["roll"];

        $dice_arr = preg_split("/d|\+/", $dice_data);
        $num_of_dice = $dice_arr[0];
        $num_of_sides = $dice_arr[1];
        $offset = $dice_arr[2] ?? 0;

        $results = [];
        for($i=0; $i<$num_of_dice; $i++){
            try{
                $results[] = random_int(1, $num_of_sides) + $offset;
            }catch (Exception $e){
                $results[] = $e->getMessage();
            }
        }
        ?>
        <?= implode(" ", $results); ?>

    </body>
</html>
