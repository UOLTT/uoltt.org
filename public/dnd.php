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
        # 2d6+5

        $dice_arr = preg_split("/d|\ |\-/", $dice_data); #treating space as plus due to encoding, might break in the future
        $num_of_dice = $dice_arr[0];
        $num_of_sides = $dice_arr[1];
        $offset = $dice_arr[2] ?? 0;

        $op = substr($dice_data, strlen($dice_data)-strlen($offset)-1, 1);

        if($op == "-"){ $offset = -1 * $offset; }
        elseif ($op == " ") { $op="+"; }

        $results = [];
        for($i=0; $i<$num_of_dice; $i++){
            try{
                $results[] = random_int(1, $num_of_sides) + intval($offset);
            }catch (Exception $e){
                $results[] = $e->getMessage();
            }
        }

        $out = [];
        foreach ($results as $throw){
            $roll = $throw - $offset;
            $throw = strval($throw);
            $off = abs($offset);
            if($throw > $num_of_sides){
                $out[] = "$throw($roll$op$off)";
            }
            else{
                $out[] = $throw;
            }
        }
        ?>
        <?= implode(", ", $out); ?>

    </body>
</html>
