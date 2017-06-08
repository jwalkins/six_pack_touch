<?php
$mixed = new DOMScraper();
//example couldent think of a site with an example table
$mixed->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-stingrays/')->setSource();

//all tables on page
//echo '<table>'.$scraper->getInnerHTML('table').'</table>';

//get only tables with id="some_table_id" or any attribute match eg class="somthing"
//echo '<table class="table-responsive table table-condensed">'.$mixed_table->getInnerHTML('table','class=ladder').'</table>';

$mixed_stingrays_fixtures = new DOMScraper();
//example couldent think of a site with an example table
$mixed_stingrays_fixtures->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-stingrays/')->setSource();

$mixed_sharks_fixtures = new DOMScraper();
//example couldent think of a site with an example table
$mixed_sharks_fixtures->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-sharks/')->setSource();

//all tables on page
//echo '<table>'.$scraper->getInnerHTML('table').'</table>';

//get only tables with id="some_table_id" or any attribute match eg class="somthing"
//echo '<table class="table-responsive table table-condensed">'.$mixed_stingrays_fixtures->getInnerHTML('table','class=team draw').'</table>';


//SET TABLE CLASS HERE - SO YOU CAN EDIT CSS!
$womens = new DOMScraper();
//example couldent think of a site with an example table
$womens->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/womens/six-pack-swans/')->setSource();


//all tables on page
//echo '<table>'.$scraper->getInnerHTML('table').'</table>';

//get only tables with id="some_table_id" or any attribute match eg class="somthing"
//echo '<table class="table-responsive table table-condensed">'.$womens_table->getInnerHTML('table','class=ladder').'</table>';

//SET TABLE CLASS HERE - SO YOU CAN EDIT CSS!
$mens = new DOMScraper();
//example couldent think of a site with an example table
$mens->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mens/six-pack-scorpions/')->setSource();

//echo '<table>'.$scraper->getInnerHTML('table').'</table>';



//get all tables contents but return only nodeValue/text
//echo '<table>'.$scraper->getInnerHTML('table','sticky-enabled',true).'</table>';


/**
 * Generic DOM scapper using DOMDocument and cURL
 */
Class DOMScraper extends DOMDocument{
    public $site;
    private $source;
    private $dom;

    function __construct(){
        libxml_use_internal_errors(true);
        $this->preserveWhiteSpace = false;
        $this->strictErrorChecking = false;
    }

    function setSite($site){
        $this->site = $site;
        return $this;
    }

    function setSource(){
        if(empty($this->site))return 'Error: Missing $this->site, use setSite() first';
        $this->source = $this->get_data($this->site);
        return $this;
    }

    function getInnerHTML($tag, $id=null, $nodeValue = false){
        if(empty($this->site))return 'Error: Missing $this->source, use setSource() first';
        $this->loadHTML($this->source);
        $tmp = $this->getElementsByTagName($tag);
        $ret = null;
        foreach ($tmp as $v){
            if($id !== null){
                $attr = explode('=',$id);
                if($v->getAttribute($attr[0])==$attr[1]){
                    if($nodeValue == true){
                        $ret .= trim($v->nodeValue);
                    }else{
                        $ret .= $this->innerHTML($v);
                    }
                }
            }else{
                if($nodeValue == true){
                    $ret .= trim($v->nodeValue);
                }else{
                    $ret .= $this->innerHTML($v);
                }
            }
        }
        return $ret;
    }

    function innerHTML($dom){
        $ret = "";
        $nodes = $dom->childNodes;
        foreach($nodes as $v){
            $tmp = new DOMDocument();
            $tmp->appendChild($tmp->importNode($v, true));
            $ret .= trim($tmp->saveHTML());
        }
        return $ret;
    }

    function get_data($url){
        if(function_exists('curl_init')){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }else{
            return file_get_contents($url);
        }
    }
}
?>
