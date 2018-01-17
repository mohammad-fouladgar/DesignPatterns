## What is Singleton Design Pattern?
Singleton pattern ensures a class has only one instance and provides a global point of access to it.

**Gang of Four (GoF) definition:**
Ensure a class has only one instance and provide a global point of access to it.

**A singleton class should have following features:**

* **Constructor of class should be private:** Since you don’t want to create multiple instance of the class, hence the constructor of the class should be private.
* **Clone of class should be private:** Prevent any object or instance of that class to be cloned and  prevent any copy of this object. 
* **The member that will be responsible for instance creation will be public and static:** This ensures that member of class can be accessed globally.


**Singleton Design Pattern**
* The **constructor** of singleton class is private.
* The **clone** of singleton class is private.
* The **getInstance** method is responsible creating instantiating the Singleton class. This method is static and has the public access modifier.
