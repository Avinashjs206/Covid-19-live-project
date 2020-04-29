<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">COVID-19 LIVE UPDATE IN U.S</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    
                    <th class="text-capitalize">state</th>
                    <th class="text-capitalize">TotalCases</th>
                    <th class="text-capitalize">ActiveCases</th>
                    <th class="text-capitalize">TotalDeaths</th>
                    <!-- <th class="text-capitalize">TotalRecovered</th> -->
                    <!-- <th class="text-capitalize">recoverd</th>
                    <th class="text-capitalize">death</th> -->
                </tr>
                
            </thead>
            <tbody>
            
<?php

$data = file_get_contents('https://covid19-server.chrismichael.now.sh/api/v1/CasesInAllUSStates');
$coranalive = json_decode($data, true);

        

//  $atotal = $coranalive['data'][0]['table'][0]['ActiveCases'] ;
//  $dtotal = $coranalive['data'][0]['table'][0]['TotalDeaths'];
//  $total =  $coranalive['data'][0]['table'][0]['TotalCases'];
//  $ctotal = $atotal + $dtotal;
//  $rec = $total - $ctotal;

//  echo $rec;

// $recovered = $coranalive['data'][0]['table'][0]['TotalCases'] - $total;
// echo $recovered;

// echo "<pre>";
//     print_r($coranalive);
// echo "</pre>";
// echo $coranalive['data'][0]['table'][2]['USAState'];
$i = 1;

while ($i <= 55) {
    // $total = $coranalive['data'][0]['table'][$i]['ActiveCases'] + $coranalive['data'][0]['table'][1]['TotalDeaths'];

    // $recovered = $coranalive['data'][0]['table'][$i]['TotalCases'] - $total;

?>             
               <tr>
                   <td><?php echo $coranalive['data'][0]['table'][$i]['USAState'] ?></td>
                   <td><?php echo $coranalive['data'][0]['table'][$i]['TotalCases'] ?></td>
                   <td><?php echo $coranalive['data'][0]['table'][$i]['ActiveCases'] ?></td>
                   <td><?php echo $coranalive['data'][0]['table'][$i]['TotalDeaths'] ?></td>
                   <!-- <td><?php echo $recovered ?></td> -->
                   <!-- <td><?php echo $coranalive['data'][0]['table'][$i]['USAState'] ?></td>
                   <td><?php echo $coranalive['data'][0]['table'][$i]['USAState'] ?></td> -->
                   
               </tr>

               <!-- echo $coranalive[$i]['state']."<br>";
//     echo $coranalive[$i]['lastUpdateEt']."<br>";
//     echo $coranalive[$i]['positive']."<br>";
//     echo $coranalive[$i]['recovered']."<br>";
//     echo $coranalive[$i]['death']."<br>"; -->

<?php
    $i++;
}
        
// ?>         
            <tr>
                    <td style="background: green"><?php echo $coranalive['data'][0]['table'][0]['USAState'] ?></td>
                    <td style="background: green"><?php echo $coranalive['data'][0]['table'][0]['TotalCases'] ?></td>
                    <td style="background: green"><?php echo $coranalive['data'][0]['table'][0]['ActiveCases'] ?></td>
                    <td style="background: green"><?php echo $coranalive['data'][0]['table'][0]['TotalDeaths'] ?></td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>