Dictionary
----------------------------------------------------------------------------------------------------------------------------

PHP Dictionary data structure

You can use the dictionary with a specific datatype like the one in c#. 

Please instantiate the class with one of the following datatypes

  integer,
  double,
  array,
  object,
  resource and
  NULL

EXAMPLE
---------------------------------------------------------------------------------------------------------------------------
$d = new Dictionary("integer","string");

Where integer is the datatype of the key and string is the datatype of value. If you give a wrong datatype for the key values,
an exception willl be thrown. 


In case if you dont need the a specific datatypes, you can still instantiate the class like this

$d = new Dictionary();
