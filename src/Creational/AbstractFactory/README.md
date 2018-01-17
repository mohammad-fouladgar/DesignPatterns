## What is Abstract Factory Design Pattern?
Abstract factory design pattern provides an interface to create the set of related or dependent objects without specifying their concrete classes. Abstract factory pattern behaves as the master factory which is responsible for creating other factories.

Within abstract factory, factory design pattern is used to create objects. However, it is not mandatory to use factory pattern within abstract factory. Depending upon your requirement or choice, you can also use builder pattern or prototype pattern to create objects within abstract factory.

**Gang of Four (GoF) Definition:**
“Provide an interface for creating families of related or dependent objects without specifying their concrete classes.”

## participants in this pattern are:

* **AbstractFactory:** This is an Interface that is used to create abstract products
* **ConcreteFactory:** Implements AbstractFactory interface to create concrete product objects
* **AbstractProduct:** This is an Interface which declares type of Product object.
* **Product:** Implements AbstractProduct interface to create Product object.
* **Client:** Uses AbstractFactory and AbstractProduct interfaces to create family of related objects

## Classes in the example are:
* **IComputerFactory:** AbstractFactory interface
* **DellFactory, LenovoFactory:** ConcreteFactoryA and ConcreteFactoryB
* **ILaptop, IDesktop:** AbstractProductA and AbstractProductB
* **GamingLaptop, NormalLaptop, GamingDesktop, NormalDesktop:** ProductA1, ProductA2, ProductB1 and ProductB2
* **ComputerClient:** Client