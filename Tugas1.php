<html>
    <head
        <meta charset="UTF-8">
        <title>Konversi Suhu</title>
        <link type="text/css" href="../CSS/Style.css" rel="stylesheet">
    </head>
    <body>
        <div id="isi">
            <legend><h1 class="home">Konversi Suhu</h1>
            
        <form name="tugas_1" method="POST" action="#">
                     Konversi:
                    <br> <select name="konversi_suhu"> 
                                  <input Type="radio"name="konversi_suhu"value="1">Celcius ke Fahrenheit
                                  <input Type="radio"name="konversi_suhu"value="2">Fahrenheit ke Celcius<br>
                        </select>
                        
               <br> <br> 
                <input type="text" name="suhu" placeholder="Nilai Suhu">
                    <hr>
                    
                
                <tr>
                    <br><th colspan="3"><input type="submit" name="konversi" value="Konversi"></th>
                </tr>
            
        </form>        
        <!--                code untuk konversi suhu-->
                <?php
                if (isset($_POST['konversi_suhu'])) {
                    $suhu           = $_POST['suhu'];
                    $type_konversi  = $_POST['konversi_suhu'];
                                          
                    } if ($type_konversi == "1") {
                        $perhitungan = (9/5) * $suhu + 32;
                        echo "suhu : $suhu °F = "; echo "$perhitungan °C";                                      
                    } elseif ($type_konversi == "2") {
                        $perhitungan = (5/9) * $suhu - 32;
                        echo "suhu : $suhu °F = "; echo "$perhitungan °C";                                       
                                        
                    }
                
                ?>
    </legend>
        </div>
    </body>
</html>
