//STRING METHODS

<?php
//Strlen()

echo "</br>" . strlen("Salam Azerbaycan");//metinin uzunlugunu geri qaytarir

//Strpos()

echo "</br>" . strpos("Salam Azerbaycan", "Azerbaycan");//metinde qeyd edilen hissenin yerlesdiyi yer

//Str_replace

echo "</br>" . str_replace("Azerbaycan", "Qarabagh", "Salam Azerbaycan");//metinde mueyyen yerlerin deyerlerini deyishir

//Substr()

echo "</br>" . substr("Salam Azerbaycan", 0, 6);// metinin mueyyen hissesini geri qaytarir

//Trim()

echo "</br>" . trim("                  Salam Azerbaycan  ");//evvelinde ve sonunda olan bosluqlari temizleyir

//Strtoupper()

echo "</br>" . strtoupper("Salam Azerbaycan");//metinin butun herifleri boyuk yazilir

//Strtolower()

echo "</br>" . strtolower("Salam Azerbaycan");//metinin butun herifleri kichik yazilir

//Ucfirst()

echo "</br>" . ucfirst("salam Azerbaycan");//metinin ilk herifini boyuk edir

//Ucwords()

echo "</br>" . ucwords("salam azerbaycan");//metinin hər bir sözün ilk hərfini böyük edir.

//Str_split()

echo '<pre>';
print_r(str_split("Azerbaycan"));//Metini array -ye chevirir
echo '</pre>';

//Str_repeat()

echo "</br>" . str_repeat("Salam Azerbaycan  !  ", 3);//metinin qeyd elinen sayda tekrarlayir.


//Explode()

echo '<pre>';
print_r(explode(" ", "Salam Azerbaycan"));//Metini qeyd edilen hisseden parcalayir ve array -ye chevirir
echo '</pre>';

//Implode()

echo "</br>" . implode(",", ['Salam', 'Azerbaycan']);// Array-e qeyd edilen sherte esasen birleshdirib ve metine cevirir

//str_contains()

echo "</br>" . str_contains("Salam Azerbaycan", "Salam");//metinde qeyd edilen deyerin var olub olmamasini yoxlayir ve geriye true ve ya false deyerlerini qaytarir

//Str_starts_with()

echo "</br>" . str_starts_with("Salam Azerbaycan", "Salam");//gosterilen sozle baslayib baslamamgin yoxlayir ve geriye true ve ya false deyerlerini qaytarir

//str_ends_widh()

echo "</br>" . str_ends_with("Salam Azerbaycan", "Azerbaycan");//gosterilen sozle bitib bitmemesini yoxlayir ve geriye true ve ya false deyerlerini qaytarir
?>