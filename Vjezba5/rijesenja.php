<?php
//2. njena uloga je da sadrzi podatke nase aplikacije, a mysql sluzi za povezivanje sa bazom podataka
// view prikazuje prijasnje podatke tj pretvara jedan model ili vise njih u vizualnu prezentaciju a index tpl ima definirane varijable koje se mogu nadjacat
// control upravlja korisnickin zahtjevon, tj prati logiku aplikacije i dodiruje se prikaza i modela, indexpage prima podatke od korisnika i prica sa modelima
//3. request handler uzima zahtjeve i odgovara na njih
// 4. htaccess kontrolia web server i dali sve radi uredu sa zahttjevima
//5. instancira se na server u index datoteci
//6 mysql se instancira u appcore classu jer je to glavna klasa
//7 rest api karakteristike su prenosivost i neovisnost
// Json je "lagan" i zato ima dosta dobru razmjenu podataka on cest komunicira sa web stranicama
//osmi
class APIconnection
{
   private $url;
   private $response;
   function __set($property,$url){
    switch($property){
        case('url'):
            $this->url = $url;
    }
   }
   private function getAPIData()
   {
       $ch = curl_init($this->url);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
       $this->response = curl_exec($ch);
       curl_close($ch);
       return $this->response;
   }
   private function getFormatedData(){
       $formated = new SimpleXMLElement($this->getAPIData());
       return json_decode(json_encode($formated),true);
   }
   public function getHTMLdata() {
       $apiData = $this->getFormatedData();
       $tableHTML = "";
       foreach($apiData['Podatci'] as $pod){
           print($pod['Postaja']);
           foreach($pod['Termin'] as $term) {
               if($term){
                   print("<br>".$term. "<br>");
               }
           }
   }
   }
   public function getJson(){//tlo
    $fileContents= file_get_contents("https://vrijeme.hr/agro_temp.xml");
    $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
    $fileContents = trim(str_replace('"', "'", $fileContents));
    $simpleXml = simplexml_load_string($fileContents);
    $json = json_encode($simpleXml);
    $array = json_decode($json,TRUE); 
        return $array;
   }
}
$con = new APIconnection();//more
$con->url = 'https://vrijeme.hr/more_n.xml';
$con->getHTMLdata();
$con2 = new APIConnection();
print_r($con2->getJson());
?>

