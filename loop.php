<?php 

//tampilkan 1 2 3 8 9 10

function nomorSatu($satu){
    for($r=1;$r<=$satu;$r++)
    {
        if($r==4){
            echo "";
        }elseif($r==5){
            echo "";
        }elseif($r==6){
            echo "";
        }elseif($r==7){
            echo "";
        }else{
            echo $r."\t";
        }
    }
}

nomorSatu(10);

//tampilkan 5 4 3 * *
echo PHP_EOL;

function nomorDua($two)
{
    for($dua=5;$dua>=$two;$dua--)
    {
        if($dua==2)
        {
            echo "*\t";
        }elseif($dua==1){
            echo "*\t";
        }else{
            echo $dua."\t";
        }
    }
    
}

nomorDua(0);

echo PHP_EOL;
//tampilkan 1 2 3 A A A 7

function nomorTiga($tiga)
{
    for($p=1;$p<=$tiga;$p++)
    {
        if($p==4)
        {
            echo "A\t";
        }elseif($p==5){
            echo "A\t";
        }elseif($p==6){
            echo "A\t";
        }else{
            echo $p."\t";
        }
    }
}
nomorTiga(7);



echo PHP_EOL;

function nomorEmpat()
{
    for($t=1;$t<=4;$t++)
    {
        if($t%2!=0){
            echo $t."a\t";
        }else{
            echo $t."b\t";
        }
    }
}

nomorEmpat();

//Tampilkan 4 3 A 1 A

//For
echo PHP_EOL;

function NomorLima($lima)
{
    for($a=4;$a>=$lima;$a--)
    {
        if($a==2)
        {
            echo "A\t";
        }elseif($a==0){
            echo "A";
        }else{
            echo $a."\t";
        }
    }
}

nomorLima(0);


echo PHP_EOL;

//tampilkan A A 2 3 4

function nomorEnam($enam)
{
    for($f=0;$f<=$enam;$f++)
    {
        if($f==0)
        {
            echo "A\t";
        }elseif($f==1){
            echo "A\t";
        }else{
            echo $f."\t";
        }
    }
}

nomorEnam(4);


?>