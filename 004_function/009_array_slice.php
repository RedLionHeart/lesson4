<?php

/*
array_slice � �������� ���� �������

array_slice() ���������� ������������������ ��������� ������� array, ����������� ����������� offset (������ ����� ����) � length (����� �����).


*/
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // ���������� "c", "d", � "e"
$output = array_slice($input, -2, 1);  // ���������� "d"
$output = array_slice($input, 0, 3);   // ���������� "a", "b", � "c"

print_r($output);

?>