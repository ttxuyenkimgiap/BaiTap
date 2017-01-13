<?php 
	//Tăng dần FOR
    function sapxeptang_for($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < ($sophantu - 1); $i++)
        {
            for ($j = $i+1; $j < $sophantu; $j++)
            {
                if ($mang[$i] > $mang[$j])
                {
                    $tmp = $mang[$j];
                    $mang[$j] = $mang[$i];
                    $mang[$i] = $tmp;
                }
            }
        }
        return $mang;
    }

    //Giảm dần FOR
    function sapxepgiam_for($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < ($sophantu - 1); $i++)
        {
            for ($j = $i+1; $j < $sophantu; $j++)
            {
                if ($mang[$i] < $mang[$j])
                {
                    $tmp = $mang[$j];
                    $mang[$j] = $mang[$i];
                    $mang[$i] = $tmp;
                }
            }
        }
        return $mang;
    }

    //Hiển thị FOR
    function hienthi_for($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < $sophantu; $i++) 
        { 
            print_r("<pre>");
            echo $mang[$i]. ' ';
        }
    }

    //main
    echo "Sắp xếp tăng_for". "<br>";
    $mang = array(3, 27, 9, 11, 94, 95, 30);
    $mang = sapxeptang_for($mang);
    hienthi_for($mang);
    echo "<br>". "Sắp xếp giảm_for";
    $mang2 = array(3, 27, 9, 11, 94, 95, 30);
    $mang2 = sapxepgiam_for($mang2);
    hienthi_for($mang2);

/* ??????????????????????
    $sophantu = count($mang);
    while ($sophantu > 1) 
    {
        $c = 0; //đặt lại giá trị cờ
        for ($i = 0; $i < $sophantu; $i++)
        {
            if ($mang[$i] > $mang[$i+1])
            {
                $temp = $mang[$i];
                $mang[$i] = $mang[$i+1];
                $mang[$i+1] = $temp;
                $c = 1;            
            }
        }
        if ($c != 0) $i--;
        else break;
    }*/
    
    //Tăng dần WHILE
    $mang3 = array(3, 27, 9, 11, 94, 95, 30);
    $sophantu = count($mang3);
    $i=0;
    while ($i < ($sophantu - 1)) 
    {
        
        for ($j = $i+1; $j < $sophantu; $j++)
        {
            if ($mang3[$i] > $mang3[$j])
            {
                $tmp = $mang3[$j];
                $mang3[$j] = $mang3[$i];
                $mang3[$i] = $tmp;
            }
        }
        $i++;
    }
    
    //Hàm hiển thị
    function hienthi_while($mang)
    {
        $sophantu = count($mang);
        $i=0;
        while ($i < $sophantu) 
        {
            print_r("<pre>");
            echo $mang[$i]. "<br>";
            $i++;
        }
    }
    echo "<br>". "Tăng dần WHILE". "<br>";
    hienthi_while($mang3);
    
    //Giảm dần WHILE
    $mang4 = array(3, 27, 9, 11, 94, 95, 30);
    $sophantu = count($mang4);
    $i=0;
    while ($i < ($sophantu - 1)) 
    {
        
        for ($j = $i+1; $j < $sophantu; $j++)
        {
            if ($mang4[$i] < $mang4[$j])
            {
                $tmp = $mang4[$j];
                $mang4[$j] = $mang4[$i];
                $mang4[$i] = $tmp;
            }
        }
        $i++;
    }
    echo "<br>". "Giảm dần WHILE". "<br>";
    hienthi_while($mang4);	

//Tăng dần Do...While
    $mang5 = array(3, 27, 9, 11, 94, 95, 30);
    $sophantu = count($mang5);
    $i=0;
    do 
    {
        for ($j = $i+1; $j < $sophantu; $j++)
        {
            if ($mang5[$i] > $mang5[$j])
            {
                $tmp = $mang5[$j];
                $mang5[$j] = $mang5[$i];
                $mang5[$i] = $tmp;
            }
        }
        $i++;
    } while ($i < ($sophantu - 1));
    
    function hienthi_do_while($mang)
    {
        $sophantu = count($mang);
        $i = 0;
        do 
        {
            print_r("<pre>");
            echo $mang[$i]. "<br>";
            $i++;
        } while ($i < $sophantu);
    }
    echo "<br>". "Tăng dần Do...While". "<br>";
    hienthi_do_while($mang5);

    //Giảm dần Do...While
    $mang6 = array(3, 27, 9, 11, 94, 95, 30);
    $sophantu = count($mang6);
    $i=0;
    do 
    {
        for ($j = $i+1; $j < $sophantu; $j++)
        {
            if ($mang6[$i] < $mang6[$j])
            {
                $tmp = $mang6[$j];
                $mang6[$j] = $mang6[$i];
                $mang6[$i] = $tmp;
            }
        }
        $i++;
    } while ($i < ($sophantu - 1));
    echo "<br>". "Giảm dần Do...While". "<br>";
    hienthi_do_while($mang6);
?>
	
