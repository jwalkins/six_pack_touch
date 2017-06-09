<?php

//ETS Scrapers//
$ets_mixed = new DOMScraper();
$ets_mixed->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-stingrays/')->setSource();

$ets_mixed_stingrays_fixtures = new DOMScraper();
$ets_mixed_stingrays_fixtures->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-stingrays/')->setSource();

$ets_mixed_sharks_fixtures = new DOMScraper();
$ets_mixed_sharks_fixtures->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mixed/six-pack-sharks/')->setSource();

$ets_womens = new DOMScraper();
$ets_womens->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/womens/six-pack-swans/')->setSource();

$ets_mens = new DOMScraper();
$ets_mens->setSite('http://www.touchsuperleague.org.uk/edinburgh/draws-ladders/mens/six-pack-scorpions/')->setSource();


//In2Touch Scrapers//
$in2touch_mens_fixtures = new DOMScraper();
$in2touch_mens_fixtures->setSite('http://in2touchworldwide.spawtz.com/External/Fixtures/TeamProfile.aspx?VenueId=121&LeagueId=937&SeasonId=294&DivisionId=0&TeamId=6281')->setSource();

$in2touch_mixed_fixtures = new DOMScraper();
$in2touch_mixed_fixtures->setSite('http://in2touchworldwide.spawtz.com/External/Fixtures/TeamProfile.aspx?VenueId=121&LeagueId=936&SeasonId=293&DivisionId=950&TeamId=6280')->setSource();


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
