<?php

/**
*- Proyecto 1, depende de varios repositorios:
*	- Librería 1 (telefono)
*    - Librería 2 (carrito de compras)
*    	- Librería 4 (personas)
*	       - Librería 7 (country-list)
*		- Librería 5 (carbon)
*       - Librería 7 (country-list)
*	- Librería 3 (carbon)
*/

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';

use Ampliffy\Library1\Phone;
use Ampliffy\Library1\Phone\ModelPhone;

use Ampliffy\Library2\ShoppingCart;
use Ampliffy\Library4\Person;
use Ampliffy\Library4\Person\GenrePerson;
use Carbon\Carbon;

$codeCountry  = 'ARG';

#uso de Librería 4 y Librería 6
$genre = new GenrePerson(GenrePerson::MALE);
$person = new Person('Juan', 'Carrizalez', 39, $genre, $codeCountry);

echo "\nPersona: {$person->getName()} {$person->getSurname()}";

#uso de Librería 2, Librería 1, Librería 7 y Librería 5
$shoppingCart = new ShoppingCart($person, $codeCountry);
$shoppingCart->addItem(new Phone('samsungA72'));
$shoppingCart->addItem(new Phone('iphone12'));

echo "\nFecha Creacion: {$shoppingCart->getDate()}";

foreach ($shoppingCart->getItems() as $key => $comprar) {

	echo "\nCompra{$key}: modelo: {$comprar->getModel()->getValue()}, \tOS:{$comprar->getSystem()->getValue()}, \timei: {$comprar->getImei()->getValue()}";
}
#uso de Librería 3
echo "\nFecha Procesar: ".Carbon::now();

?>