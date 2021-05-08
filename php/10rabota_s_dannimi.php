<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $userInfo = [
                'login' => 'Gergard',
                'password' => '1234567890',
                'location' => [
                    'country' => 'Kazakstan',
                    'city' => 'Almaty',
                    'street' => 'Abay'
                ]
            ];
            foreach($userInfo as $key => $value){
                if(is_array($value)){
                    foreach($value as $key => $result){
                        echo $result.'<br /> ';
                    }
                }else echo $value .'<br />';
            };

            $array = [1,2,3,4,5,6,7,8,9];

            foreach($array as $value){
                $value = $value * $value;
                echo '<br />' , $value;
            }



            unset($value);

            $value = 12;

            echo $value;












        ?>
    </body>
</html>
