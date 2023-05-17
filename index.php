<?php
class Shape
{
    protected $name;
    protected $perimeter;
    protected $area;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function displayPerimeter()
    {
        echo "{$this->name}'s calculated perimeter is {$this->perimeter}\n";
    }
    public function displayArea()
    {
        echo "{$this->name}'s calculated area is {$this->area}";
    }
}

class Triangle extends Shape
{
    private $a;
    private $b;
    private $c;
    public function __construct($a = 0, $b = 0, $c = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }
    public function calculatePerimeter()
    {
        $this->perimeter = ($this->a + $this->b + $this->c) / 2;
        $this->displayPerimeter();
    }
    public function calculateArea()
    {
        $this->area = sqrt($this->perimeter * ($this->perimeter - $this->a) * ($this->perimeter - $this->b) * ($this->perimeter - $this->c));
        $this->displayArea();
    }
}

$triangle = new Triangle(4, 5, 6);
$triangle->calculatePerimeter();
$triangle->calculateArea();
