<?php
header('Content-type: text/xml');
$callerId = "+12018907711";
$client = 'devtacsuitecrm';

$to = str_replace('-', '', $_REQUEST['To']);
$to =  '+'.preg_replace('/[^A-Za-z0-9\-]/', '', $to);

$dial = "<Number>" . $_REQUEST['To'] . "</Number>";
if ($to == $callerId || $to == 'devtacsuitecrm' || $to == 'client:devtacsuitecrm') {
    $callerId = $_REQUEST['From'];
    $dial = "<Client>" . $client . "</Client>";
}

?>
<Response>
    <Dial callerId="<?php echo $callerId ?>"><?php echo $dial ?></Dial>
</Response>
