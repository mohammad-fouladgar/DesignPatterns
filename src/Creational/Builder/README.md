## What is Builder Design Pattern?

Builder design pattern separates the complex object construction from its representation.
It builds the complex object using some construction logic. This construction logic is implemented with step by step process. With different construction logic, different complex objects will be created.

**Gang of Four (GoF) Definition:**
“Separate the construction of a complex object from its representation so that the same construction process can create different representations.”

## Participants in this pattern are:

* **Builder:** Defines an interface for the steps to construct the product.
* **ConcreteBuilder:** Defines a class that creates complex products, implements Builder interface.
* **Director:** Defines a class that constructs the actual product object using builder interface.
* **Product:** The main object that will be constructed.

## Classes in the example are:**
* **ILaptopBuilder:** Builder interface
* **GamingLaptopBuilder:** Concrete Builder that  implements Builder interface
* **NormalLaptopBuilder:** Concrete Builder that implements Builder interface
* **LaptopManufacturer:** Director class
* **Laptop:** Product class
