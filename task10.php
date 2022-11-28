<?php 

echo "Grade Nilai Mahasiswa Kampus<br>";
$nilai = 87;

if ($nilai >0 && $nilai <50) {
    echo "E<br>";

} elseif ($nilai >=50 && $nilai <60) {
    echo "D<br>";

} elseif ($nilai >=60 && $nilai <70) {
    echo "C<br>";

} elseif ($nilai >=70 && $nilai <80) {
    echo "B<br>";

} elseif ($nilai >=80 && $nilai <90) {
    echo "A<br>";

} else {
    echo "A+<br>";
}
?>