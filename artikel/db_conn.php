





try {

$PDOobjekt= new PDO('mysql:host=localhost;dbname=artikel2019;charset=utf8','root','');
$PDOobjekt->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$PDOobjekt->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);



}catch(PDOException $e){

echo 'ERROR '.$e->getMessage();

}
