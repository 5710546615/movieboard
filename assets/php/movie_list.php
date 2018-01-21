<?php

require_once('simple_html_dom.php');
$dom_object = file_get_html('http://www.thaicreate.com/');
$allHrefNodes = $dom_object->find('a'); // ตัวนี้จะได้ object array มานะครับ ถ้าต้องการเอา tag a ที่ตำแหน่งไหนก็ $dom_object->find('a', 0) ครับ

print '<pre>';
foreach( $allHrefNodes as $aNode )
  print '<h1>' . $aNode->attr['href'] . '</h1>';

/* จริงๆ แล้ว เข้าไปอ่าน Document ได้ที่ http://simplehtmldom.sourceforge.net/manual.htm*/
 
