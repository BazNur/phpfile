<?
$a = array(); 
$fp = fopen("geolocation.csv", "r"); 
while (!feof($fp)) { 
     $a[] = fgetcsv($fp, 1024, ";"); 
} 
echo "<PRE>";
    print_r($a);
echo "<PRE>";
$fp = fopen('geolocation.csv', 'w');

foreach ($a as $fields) {
    fputcsv($fp, $fields);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>geolocation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [<? ?>],
                zoom: 17
            }); 
            
            myPlacemark = new ymaps.Placemark([<? ?>], {
                hintContent: 'IUCA!',
                balloonContent: 'Tokmok'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
</head>

<body>
<a href="<? ?>">Фаиза</a>
<div id="map" style="width: 300px; height: 250px"></div>
<?php close($fp); ?>

</body>
</html>