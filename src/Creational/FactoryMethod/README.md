## Factory Method Design Pattern

As the name **Factory** indicates that it will create something. This something is nothing but the objects. Factory method design pattern is a way to create object but the client or calling class will not know about how the objects were created. In factory pattern subclass decides about instantiation of a class.

**Gang of Four (GoF) definition:**

“Define an interface for creating an object, but let subclasses decide which class to instantiate.”

## participants in this pattern are:

**IProduct:** The interface for the concrete product

**ConcreteProduct:** Class type that provides Concrete implementation of IProduct interface

**Creator:** Abstract class that provides FactoryMethod.

**ConcreteCreator:** Class that will implement abstract method FactoryMethod

**FactoryMethod:** Method that will decide which class will instantiate