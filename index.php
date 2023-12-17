<?php
// Інтерфейс, який визначає спільний метод
interface Target {
    public function request();
}

// Клас, який будемо адаптувати
class Adaptee {
    public function specificRequest() {
        return "Specific request";
    }
}

// Адаптер, який реалізує інтерфейс Target і використовує об'єкт Adaptee
class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request() {
        return $this->adaptee->specificRequest();
    }
}

// Використання паттерна Адаптер
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

// Виклик методу через адаптер, який використовує Adaptee
$result = $adapter->request();

echo $result; // Виведе: Specific request
