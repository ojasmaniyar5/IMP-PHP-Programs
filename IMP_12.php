QUESTION :
Write a PHP script to define an interface which has methods area () and volume. Define constant PI. Create a class Cylinder which implements this interface and calculate area and volume ?




<?php

// Define the Shape interface
interface Shape {
    const PI = 3.14159; // Constant for the value of π

    public function area();
    public function volume();
}

// Implement the Shape interface in the Cylinder class
class Cylinder implements Shape {
    private $radius;
    private $height;

    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }

    // Implementation of the area() method for Cylinder
    public function area() {
        // Formula for the lateral surface area of a cylinder: A = 2πrh
        return 2 * self::PI * $this->radius * $this->height;
    }

    // Implementation of the volume() method for Cylinder
    public function volume() {
        // Formula for the volume of a cylinder: V = πr^2h
        return self::PI * pow($this->radius, 2) * $this->height;
    }
}

// Usage of the Cylinder class
$cylinder = new Cylinder(3, 5);

echo "Lateral surface area of the cylinder: " . $cylinder->area() . "<br>";
echo "Volume of the cylinder: " . $cylinder->volume() . "<br>";

?>
