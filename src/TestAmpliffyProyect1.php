<?php
declare( strict_types = 1 );
namespace Person;

class TestAmpliffyProyect1
{
	public const FEMALE = 'female';
	public const MALE = 'male';

	protected ?string $value;

	public function __construct(string $value): void
	{
		$this->setValue(strtolower($value));
	}

	private function setValue(string $value): void
	{ 
		if(!in_array($value, [self::FEMALE, self::MALE])){

			$value = null;
		}

		$this->value = $value;
	}

	public function getValue(): ?string
	{
		$this->value;
	}
}


/*



- Proyecto 1, depende de varios repositorios:
    - Librería 1 telefono
    - Librería 2 carrito de compras
       - Librería 4 personas
       		- Librería 6 country-list
       - Librería 5 carbon
       - Librería 1 telefono
    - Librería 3 calculadora

- Proyecto 2, depende de varios repositorios:
    - Librería 2 carrito de compras
       - Librería 4 personas
       		- Librería 6 country-list
       - Librería 5 carbon
    - Librería 3 calculadora
    - Librería 6 country-list

*/