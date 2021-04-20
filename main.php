<?php

$hotel = array('###Hotel1###' =>  "Caesars", '###Hotel2###' =>  "Venetian", '###Hotel3###' =>  "Bellagio");
$htmlresponse = readFile1('C:\Users\gabjetski\Desktop\xampp\htdocs\gabjetski\ViewaLasVegas\index.html');

foreach ($hotel as $key => $val){
    $htmlresponse =  str_replace($key, $val, $htmlresponse);
}

echo $htmlresponse;

function readFile1(string $path): string
{
    $handle = fopen($path, "r");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    return $contents ;
}


$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$view->assignMultiple([
    // Casting types
    'types' => [
        'csv' => 'one,two',
        'aStringWithNumbers' => '132 a string',
        'anArray' => ['one', 'two'],
        'typeNameInteger' => 'integer'
    ],
    'foobar' => 'string foo',
    // The variables we will use as dynamic part names:
    'dynamic1' => $dynamic1,
    'dynamic2' => $dynamic2,
    // Strings we will be accessing dynamically:
    'stringwith' . $dynamic1 . 'part' => 'String using $dynamic1',
    'stringwith' . $dynamic2 . 'part' => 'String using $dynamic2',
    // Arrays we will be accessing dynamically:
    'array' => [
        'fixed' => 'Fixed key in $array[fixed]',
        // A numerically indexed array which we will access directly.
        'numeric' => [
            'foo',
            'bar'
        ],
        $dynamic1 => 'Dynamic key in $array[$dynamic1]',
        $dynamic2 => 'Dynamic key in $array[$dynamic2]',
    ],
    '123numericprefix' => 'Numeric prefixed variable',
    // A variable whose value refers to another variable name
    'dynamicVariableName' => 'foobar'
]);
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename(__DIR__ . 'index.html');
$output = $view->render();
example_output($output);