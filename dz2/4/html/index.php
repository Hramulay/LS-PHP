<?php
include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";

/** @var TariffInterface $tariff */
$tariff = new TariffBasic(5, 60);
$tariff->addService(new ServiceGPS(15));

echo 'Тариф: ' . $tariff->getName() . ' (' . $tariff->getDistance() . ' км, ' . $tariff->getMinutes() . ' мин)<br>';

$services = $tariff->getServices();
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));


echo "Услуга: \n";
foreach ($tariff->getServices() as $service) {
    echo "- " . get_class($service) . "\n";
}


echo '<br>Стоимость: ' . $tariff->countPrice() . ' руб<br>';
