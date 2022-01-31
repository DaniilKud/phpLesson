<?php

class Rectangle
{
   /* public function __toString(): string     Конвертирует в строку
    {
        return 'kui';
    }
   */



    public float $a;
    public float $b;

    public function __invoke(float $a, float $b)
    {
        return $b - $a;
    }

  /* Конструктор
   *
   * public function __construct(float $a, float $b)
  {
      $this->a = $a;
      $this->b = $b;
  }
  return ;
  */

    public function setA(float $a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setB(float $b)
    {
        $this->b = $b;
    }

    public function getB()
    {

        return $this->b;
    }

    public function printSides()
    {
        echo $this->a . ' ' . $this->b . PHP_EOL;
    }

    public function printSquad()
    {
        echo $this->a * $this->b . PHP_EOL;
    }

    public function printPerim()
    {
        echo ($this->a + $this->b) * 2 . PHP_EOL;
    }
}

$rect = new Rectangle();

$rect->setA(1);
$rect->setB(3);
$rect->a = 2;
$rect->printSides();
$rect->printSquad();
$rect->printPerim();

echo $rect(11,22 ) . PHP_EOL;


// Наследование

class A
{
    public $public = 4;
    protected $protected = 5;
    private  $privet = 7;

}

class B extends A
{
    public function getprotected()
    {
        return $this->protected;
    }

}

$exam = new B();
$examA = new A();


class ArrayWrapper
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function toArray()
    {
        return $this->items;
    }


    public function addElement(int|string $key, mixed $value)
    {
        $this->items[$key] = $value;
    }

    public function getElement($key)
    {
        if (array_key_exists($key, $this->items))
        {
             return $this->items[$key];
        }

        return null;

    }

    public function checkElement($value)
    {
        if (array_search($value, $this->items)) {
            //$e = array_search($value, $this->items);
            return 'Да существует ' . PHP_EOL;
        }
        return 'Такого элемента нет' . PHP_EOL;
    }

    public function giveAwayIndex ($value)
    {
        $index = array_search($value, $this->items);
        echo "Это индекс: " . $index . PHP_EOL;
    }

    public function addInBeginningArray ($value)
    {
        array_unshift($this->items, $value);
        return $this->items;
    }

    public function addInEndArray ($value)
    {
        array_push($this->items, $value);
        return $this->items;
    }

    public function getFirstElement ()
    {
        $first = array_key_first($this->items);
        return $this->items[$first];
    }

    public function getLastElement ()
    {
        $first = array_key_last($this->items);
        return $this->items[$first];
    }

}
    $testArray = [11, 32, 44, 'dsddg'];
    $wrappedTestArray = new ArrayWrapper($testArray);

    print_r($testArray);

    $wrappedTestArray->addElement('22', 1444);

    print_r($wrappedTestArray->toArray());

    echo $wrappedTestArray-> getElement(2000);
    echo $wrappedTestArray-> checkElement(44);
    echo $wrappedTestArray-> giveAwayIndex(44);
    print_r($wrappedTestArray-> addInBeginningArray(1));
    print_r($wrappedTestArray-> addInEndArray("конец"));
    echo $wrappedTestArray-> getFirstElement();
    echo $wrappedTestArray-> getLastElement();




















