<html>
    <head>
        <style>
            #vedio
            {
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                width:100%;
                border-collapse:collapse;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <table id="vedio">
            <tr>
                <?php
                for ($t = 0; $t < 10; $t++) {
                    if ($t % 3 == 0) {
                        echo "<tr>";
                        $tem=$t;
                    }

                    echo "
                <td>
            
                <ul>
                    <ul><a charset='113-1-1-1' title='Video' href='video.php' target='_blank'></a></ul>
                    <ul><img src='http://g2.ykimg.com/0100641F464EF574F502EF05D76204B2B97F11-3DB1-D105-3EAC-EAA13772A6F0' alt='videoname'/></ul>
                    <ul title='Add to list'><span id='PlayListFlag_XNjAwODc2NjI4' class='ico__listquick'></span></ul>
                    <ul><span class='num'>46:47</span><span class='bg'></span></ul>
                    <ul></ul>
                    <ul><a charset='113-1-1-2' title='video' href='video.php' target='_blank'>Play my video</a> </ul>
                    <ul>
                        <label><span class='ico__usercommon' title='user'></span></label>
                        <a href='user own channel.php' target='_blank' title='username'>username</a>
                    </ul>
                    <ul ><span class=ico__statplay' title='play'></span><span class='num'>viewed times</span></ul>
                </ul>
               </td>
            </div>
        
                            ";
                    if ($t % 3 == 0 && $t>$tem) {
                        echo "</tr>";
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

