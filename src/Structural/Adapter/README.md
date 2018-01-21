## What is Adapter Design Pattern?

Adapter design pattern allows a system to use classes whose interfaces are mutually incompatible.
Adapter design pattern provides the bridge or connection between these mutually incompatible interfaces.
This pattern is useful for off-the-self code, toolkits and libraries.

**Gang of Four (GoF) definition:**
Convert the interface of a class into another interface client expect. Adapter lets classes work together that couldn’t otherwise because of incompatible interfaces.

## Participants in this pattern are:

**Client** and **Adaptee** classes are incompatible with each other. **Client** calls **ITarget** interface to achieve functionality of Adaptee class.


* **Client:** This is the class which is incompatible with **Adaptee** class but wants to use Adaptee class code

* **ITarget:** The interface that client class uses to achieve **Adaptee** class functionality.

* **Adapter:** This class implements ITarget interface; this class also calls Adaptee class functionality inside.

* **Adaptee:** This is the class which Client class want to use.

## Classes in the example are:

* **IPaymentAdapter:** ITarget interface
* **IPayment:** IProduct interface simple
* **Paypal and WebMoney:** Adaptee class
* **PaypalAdapter and WebMoneyAdapter:** Adapter class