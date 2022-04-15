<?php
//


//                                           Task 1
//                              Скрипт записує 'Hello,world!' в file.txt, потім витягує з
//                              нього строку, та виводить у браузер.
                                $file = 'file.txt';
                                $hello = 'Hello, world!';
                                if (file_put_contents($file, $hello, FILE_APPEND)) {
                                    $content = file_get_contents('file.txt');
                                    echo $content;
}


//                                            Task 2
//                              Скрипт створює файл у поточному каталозі, з поточною датою у назві,
//                              та записує у файл рандомне число

                                date_default_timezone_set('Europe/Kiev');
                                $date = date("Y-m-d-H-i-s");
                                $dtfile =  "$date.txt";
                                file_put_contents($dtfile, mt_rand());


//                                            Task 3
//                              Якщо 1 більше 2 то 1 = 3, якщо 2 більше одного то 2 = 3

                                $one = 1; $two = 2; $three = 3;
                                if ($one > $two){
                                    $one = $three;
                                }elseif ($two > $one){
                                    $two = $three;
                                }

//                              Те ж саме рівняння, але в одну строку і з одним if

                                if ($one > $two and $one = $three or $two > $one and $two = $three);

                                echo $one, $two, $three;
