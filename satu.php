<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#fff;
            color:#1a1a1a;
            letter-spacing:2px;
            font-family:times new roman;
            text-transform:capitalize;
            position: relative;
            margin:10px;
            padding:5px;
        }
    </style>
</head>
<body>
    <div></div>
    <?php
    //4 methode sorting(pencarian)

    function counting($array){
        //cari nilai max pd array
        $max=max($array);

        //buat array penghitung dg ukuran sesuai nilai max +1

        $count=array_fill(0,$max +1,0);
        /*ada tiga parameter dalamarray fill
        parameter pertama di isidengan mulai index nya
        ke dua diisi dengan array/jmlh arraynya
        ke tiga diisi dengan nilai yang akn diisi pada array.


        menghitung frekuensi kemunculan setiap element pada-
         array asli*/

        foreach ($array as $value) {
            $count[$value]++;
        }

        //hasilin array yang ber urut

        $urutkan=[];
        foreach ($count as $value => $frekuensi) {
            for ($i=0; $i < $frekuensi; $i++) { 
                $urutkan[]=$value;
            }
        }
        return $urutkan;
    }

    //contoh penggunaan

    $array=[4,2,2,8,3,3,1];
    echo"array asli 👉 : ";
    print_r($array);
    $urutkan =counting($array);
    echo '<br><br>array telah di urutkan 👉 : ';
    print_r($urutkan);

//maxsimunm sortt

function maxsort($Array){
    $length =count($Array);
    for ($i=0; $i < $length - 1; $i++) { 
       $maxindex=$i;
       for ($j=$i + 1; $j < $length ; $j++) { 
        if ($Array[$j] > $Array[$maxindex]) {
            $maxindex =$j;
        }
       
       }

       //tukar element maksimum dengan element pertama dari sub array yang belum di urutkan

       $temp =$Array[$maxindex];
       $Array[$maxindex]=$Array[$i];
       $Array[$i]=$temp;
    }
   return $Array;
}

//contohpenggunaan

$data = [64,34,25,12,22,11,90];
$sortdata=maxsort($data);
echo '<br><br><br><br><p>maxsimum sort data array 👇 </p>';
print_r($sortdata);

//insertion array

function insertionsort($array)  {
    $length=count($array);

    for ($i=1; $i <$length; $i++) { 
        $key =$array[$i];
        $j =$i - 1 ;

        /*pindahkan element array [0...i...-1] yang lebih besar
        dari key ke satu pisisi di depan posisi saat ini .*/
        while($j >= 0 && $array[$j]>$key){
            $array[$j +1] = $array[$j];
            $j--;
        }
        $array[$j + 1 ] =$key;
    }

    return $array;
}

//contoh penggunaan.
echo '<br><br><p>insertion sort data array 👇 </p>';
$sata=[64,34,25,12,22,11,90];
$sorteddata=insertionsort($sata);
print_r($sorteddata);


function bubblesort($Array){
    $length =count($Array);
    for ($i=0; $i < $length - 1; $i++) { 
       for ($j=0; $j < $length - $i - 1 ; $j++) { 
        if ($Array[$j] > $Array[$j + 1]) {
            
            //tukar element 

            $temp =$Array[$j];
            $Array[$j]=$Array[$j + 1];
            $Array[$j + 1 ]=$temp;

        }
       }
     }
   return $Array;
}

//contohpenggunaan

$dataa = [64,34,25,12,22,11,90];
$sortdataa=bubblesort($dataa);
echo '<br><br><p>bubble sort data array 👇 </p>';
print_r($sortdataa);
    ?>
</body>
</html>