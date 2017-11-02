<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<words>
    <definition word="definition" author="Jane Eyre">
        A statement of the exact meaning of a word, especially in a dictionary.
    </definition>
    <definition word="bar" author="Emily Bronte">
       A place that sells alcholic beverages
    </definition>
    <definition word="ajax" author="Stephen King">
        Technique which involves the use of javascript and xml (or JSON)
    </definition>
    <definition word="html" author="James Patterson">
        The standard markup language for creating web pages and web applications.
    </definition>
    <definition word="css" author="Charles Dickens">
        A style sheet language used for describing the presentation of a document written in a markup language.
    </definition>
    <definition word="javascript" author="Walt Disney">
       A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
    </definition>
    <definition word="php" author="Shakespear">
       A server-side scripting language, and a powerful tool for making dynamic and interactive websites
    </definition>
</words>';

if ($query=="&all=true"){
    header('Content-Type: text/xml');
    $xmlOutput = new SimpleXMLElement($xmldata);
    echo $xmlOutput->asXML();
}
else{
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definition[$query] . "</p>";
}
