<?php 


/* if (file_exists('docs.txt')) {
    echo "El archivos si existe";
}else{
    echo "El archivo no existe";
} */

// echo file_get_contents('docs.txt');
// file_put_contents('docs.txt', "Hola wey \n", FILE_APPEND);

/* file_put_contents('docs.txt', '');
for ($i=1; $i <10 ; $i++) { 
    file_put_contents('docs.txt', "$i \n", FILE_APPEND);

} */

$file =  file('docs.txt');
echo '<pre>';

print_r($file);
// echo $file[7];

?>