<?php

echo "Desimal: ";
var_dump(1234);

echo "Octal: ";
var_dump(01234);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b111111);

echo "Underscore in number: ";
var_dump(1_241_241_241);

echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000: ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minu (7 x 0.001: ";
var_dump(7e-3);

echo "Underscore di Floating: ";
var_dump(1_234.567);

echo "Integer Overflow: ";
var_dump(9223372036854775808); // convert to float
var_dump(9223372036854775807); // int