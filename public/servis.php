<?php
header('Content-Type: text/html; charset=utf-8');
@mysql_connect("localhost","root","");
mysql_select_db("onemliyerler");
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'"); 


function servislistele($islemturu,$filtre1_kolon,$filtre1_deger)
{
$ch =      curl_init();
           curl_setopt($ch, CURLOPT_URL,"http://cbs.izmir.bel.tr/CBSWebServisleri/CBSKurumSozelServisi/Service.asmx/servisListele?");  
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_POST, 1); 
           curl_setopt($ch, CURLOPT_POSTFIELDS,"islemturu=".$islemturu."&filtre1_kolon=".$filtre1_kolon."&filtre1_deger=".$filtre1_deger."&filtre2_kolon=&filtre2_deger=&koordinatli=1&kullaniciadi=iesob&sifre=i20e1s0ob&coordSys=EPSG:4326"); 
$sonuc   = curl_exec($ch);
           curl_close($ch);
		   
		   return $sonuc;
}

function servisarama($islemturu,$filtre1_kolon,$filtre1_deger)
{
$ch =      curl_init();
           curl_setopt($ch, CURLOPT_URL,"http://cbs.izmir.bel.tr/CBSWebServisleri/CBSKurumSozelServisi/Service.asmx/servisArama");  
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_POST, 1); 
           curl_setopt($ch, CURLOPT_POSTFIELDS,"islemturu=".$islemturu."&filtre1_kolon=".$filtre1_kolon."&filtre1_deger=".$filtre1_deger."&filtre2_kolon=&filtre2_deger=&filtre3_deger=&sayfa_numarasi=&koordinatli=1&kullaniciadi=iesob&sifre=i20e1s0ob&coordSys=EPSG:4326"); 
$sonuc   = curl_exec($ch);
           curl_close($ch);
		   
		   return $sonuc;
}


function kategori(){

$sonuc = servislistele("onemliyerler","","");  	   
$xml = new SimpleXMLElement($sonuc);
foreach($xml->xmlNode as $xmlNode)
{
	$name = $xmlNode->Name;
    mysql_query("INSERT INTO kategori(name)VALUES('".$name."')");
}
}
###############################
function altkategori(){

$sql = mysql_query("SELECT * FROM kategori");
while($cek = mysql_fetch_assoc($sql)){

$sonuc = servislistele("onemliyerler","tip2",$cek['name']);  	   
$xml = new SimpleXMLElement($sonuc);
foreach($xml->xmlNode as $xmlNode)
{
	$id   = $xmlNode->Id;
	$name = $xmlNode->Name;
    mysql_query("INSERT INTO altkategori(name,kategori)VALUES('".$name."','".$cek['id']."')");
}

}
}
#########################################
function yerler(){

$sql = mysql_query("SELECT * FROM altkategori");
while($cek = mysql_fetch_assoc($sql)){



$sonuc = servisarama("onemliyerler","tip",$cek['name']);  	   


/**/
$xml = new SimpleXMLElement($sonuc);
foreach($xml->Result as $xmlNode)
{
	
	
	$ilce   = $xmlNode->ILCE;
	$mahalle = $xmlNode->MAHALLE;
	$yol = $xmlNode->YOL;
	$kapino = $xmlNode->KAPINO;
	$adi = $xmlNode->ADI;
	$telefon = $xmlNode->TELEFON;
	$aciklama = $xmlNode->ACIKLAMA;
	$kod = $xmlNode->KOD;
	$coords = $xmlNode->COORDS;

    mysql_query("INSERT INTO yerler(ilce,mahalle,yol,kapino,adi,telefon,aciklama,kod,coords,altkategori)VALUES('
    	".$ilce."',
    	'".$mahalle."',
    	'".$yol."',
    	'".$kapino."',
    	'".$adi."',
    	'".$telefon."',
    	'".$aciklama."',
    	'".$kod."',
    	'".$coords."',
    	'".$cek['id']."'
    	)");

	
	


}
/**/
}
}



//kategori();
//altkategori();
yerler();

?>
