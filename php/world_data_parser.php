<?php
class WorldDataParser
{
    // CSV Datei lesen und in einem Array einfügen
	function parseCSV($file)
	{
		$array = array();
		if(($handle = fopen($file, "r")) !== FALSE)
		{
			$header = fgetcsv($handle, 300, ",");
			while(($data = fgetcsv($handle, 300, ",")) !== FALSE)
			{
				$row = array();
				for($i=0; $i < count($data);$i++)
				{
                    // header sind für die Attribute von jeden Länder
					$row[$header[$i]] = $data[$i];
				}
				$array[] = $row;
			}
		}
	
		return $array;
	}
	
	// Umwandeln die Datei von CSV zu XML
	function saveXML($array)
	{
		// XML Datei
		$dom = new DOMDocument("1.0", "UTF-8");
		$dom->formatOutput = true;
		
		$element = $dom->createElement("Countries");
		
		foreach($array as $value)
		{
			// Kindknoten
			$country = $dom->createElement("Country");
			
			foreach($value as $key => $valueTwo)
			{
				$keyArray = explode(' ', trim($key));
				$elem = $dom->createElement($keyArray[0], trim($valueTwo));
				//Knoten zu country verbinden
				$country->appendChild($elem);
				
			}
			$element->appendChild($country);
		}
		//Die Datei bekommt alle Knoten 
		$dom->appendChild($element);
		
		$result = $dom->save("../data/world_data.xml");
		
		if($result == FALSE)
			return FALSE;
		else
			return TRUE;
		
	}
	
	function printXML($xmlPath, $xsltPath) // print.php Code an den Zeilen zwischen von 341 bis 359 sichtbar, sonst sind die Zeilen von index.html
	{
		// XML einlesen
		$xml = new DOMDocument;
		$xml->load($xmlPath);

		$xsl = new DOMDocument;
		$xsl->load($xsltPath);

		$proc = new XSLTProcessor;
		$proc->importStyleSheet($xsl); // XSL Regel
		
        $file = $proc->transformToDoc($xml);// XML zu HTML Table

		return $file->saveHTML();// HTML Table
	}

}
