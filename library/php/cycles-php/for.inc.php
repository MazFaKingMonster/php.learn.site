<?php
// for

// Цикл "for" нужен для исполнения какого-то кода определенные кол-во раз установленное в счетчике!
// Устроен цикл вот так:

// for (

//       1 часть:

//       Обьявление счетчика (зачастую) ; <-- точки с запятой нужны обязательно в количестве 2 шт.

//         2 часть:

//         Условие (должно быть "true" что-бы цикл работал) ; <-- Они разделяют части цикла!

//           3 часть:

//           Действие при каждом прохождении цикла (зачастую изменение счетчика)

//           )

//       {

//         В фигурных скобках можно написать код который будет исполнятся каждый проход цикла!

//       }



for ($i=0; $i < 10 ; $i++) {  // В первой части цикла я обьявил счетчик в виде переменной
    // и присвоил ему значение 0
    // Во второй условие: Счетчик меньше 10, цикл вертится пока счетчик меньше 10!
    // А в третей задал действие: Увеличить счетчик на 1, каждый проход счетчик +1!

    echo "<br> \n Количество циклов for: $i";
    // Ну с собственно сам код который будет исполнятся каждый проход!
};

echo "<p>";

// Как-то скучно с этим "for"..
// Другой цикл переберу...
?>