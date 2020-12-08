<?php 
function nominal($parameter){ //memmbuat nama fungsi nominal untuk menampung sebuah parameter, misal 1.000
$nilai=number_format($parameter,0,',','.'); //parameter yang tersebut diubah ke dalam format 1.000,00 (tidak ada nilai dibelakang koma), ditaruh ke dalam var nilai
return $nilai;
}
?>