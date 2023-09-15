<h1 align= "center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align= "center">Лабораторная работа №1</p><br><br><br><br><br><br><br><br>
<p align= "right">Выполнил: Андреев Д.В.</p><br><br><br><br><br><br><br><br>
<p align="center">г. Южно-Сахалинск <br> 2023 год</p><br><br><br><br><br><br><br><br>
<h2 style="text-align: center">Введение</h2>
<p align="justify">JavaScript ("JS" для краткости) — это полноценный динамический язык программирования, который применяется к HTML документу, и может обеспечить динамическую интерактивность на веб-сайтах. Его разработал Brendan Eich, сооснователь проекта Mozilla, Mozilla Foundation и Mozilla Corporation.
JavaScript сам по себе довольно компактный, но очень гибкий. Разработчиками написано большое количество инструментов поверх основного языка JavaScript, которые разблокируют огромное количество дополнительных функций с очень небольшим усилием. 
JavaScript невероятно универсален и дружелюбен к новичкам. Обладая большим опытом, вы сможете создавать игры, анимированную 2D и 3D графику, полномасштабные приложения с базами данных и многое другое!</p>
<h2 style="text-align: center">Цели и задачи</h2>
<ol align="justify"> <br>
<h2 align="center">Цели и задачи</h2>
1.	Создайте переменную str и присвойте ей значение 'hdfgv'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'd', символ 'v'. <br>
2.	Напишите скрипт, который считает количество секунд в часе. <br>
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
var num = 1;
num = num + 12;
num = num - 14;
num = num * 5;
num = num / 7;
num = num + 1;
num = num - 1;
alert(num);
4.	Создайте переменную num и присвойте ей значение 3. Выведите значение этой переменной на экран с помощью метода alert.
5.	Создайте переменные a=10 и b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6.	Создайте переменные c=15 и d=2. Просуммируйте их, а результат присвойте переменной result. Выведите на экран значение переменной result.
7.	Создайте переменные a=10, b=2 и c=5. Выведите на экран их сумму.
8.	Создайте переменные a=17 и b=10. Отнимите от a переменную b и результат присвойте переменной c. Затем создайте переменную d, присвойте ей значение 7. Сложите переменные c и d, а результат запишите в переменную result. Выведите на экран значение переменной result.
9.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
10.	Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
11.	Создайте переменную, присвойте ей число. Возведите это число в квадрат. Выведите его на экран.
12.	Напишите однострочное решение, которое вычисляет сумму квадратных корней для всех чётных чисел целочисленного массива.
13.	Яблоко стоит 1.15, апельсин стоит 2.30. Сколько они стоят вместе – чему равна сумма 1.15 + 2.30 с точки зрения JavaScript?
14.	Какое будет выведено значение: let x = 5; alert(x++); ?
15.	Чему равно такое выражение: [ ] + false - null + true ?
16.	Что выведет этот код: let y = 1; let x = y = 2; console.log(x); ?
17.	Чему равна сумма [ ] + 1 + 2?
18.	Создайте переменные a6, a7, a8, a9, a10. Поместите в них результат выражений:
5 % 3,
3 % 5,
5 + '3',
'5' - 3,
75 + 'кг'
19.	Напишите скрипт, который находит площадь прямоугольника высота 23см. (в числовую переменную height), шириной 10см (в числовую переменную width), значение площади должно хранится в числовой переменной s.
20.	Напиши скрипт, который находит объем цилиндра высотой 10м (переменная heightC) и диаметром основания 4м (dC), результат поместите в переменную v.
21.	Даны размер ипотечного кредита (S — 2 млн.руб), процентная ставка (p  — 10%), кол-во лет (years — 5). Найти переплату по кредиту, значение переплаты должно содержаться в переменной perepl.
22.	Определите переменные str, num, flag и txt со значениями «Привет», 123, true, «true». При помощи оператора определения типа убедитесь, что переменных принадлежат типам: string, number, boolean.
23.	Дано число, необходимо вернуть противоположное число.
<br>
console.log('Задача 1');
 
    var str = 'hdfgv';
    console.log(str[0]); 

    console.log(str[1]); 

    console.log(str[4]);
  
  
console.log('Задача 2');

    var secondsInHour = 60 * 60;
    console.log(secondsInHour); 
  
    console.log('Задача 3');
 
    var num = 1;
    num += 12;
    num -= 14;
    num *= 5;
    num /= 7;
    num++;
    num--;
    console.log(num);

  
  console.log('Задача 4');
    var num = 3;
 console.log(num)

  
 console.log('Задача 5');
    var a = 10;
    var b = 2;
    console.log(a + b);
    console.log(a - b); 
    console.log(a * b); 
    console.log(a / b); 
  
    console.log('Задача 6');
 
    var c = 15;
    var d = 2;
    var result = c + d;
    console.log(result);
 
  
    console.log('Задача 7');
 
    var a = 10;
    var b = 2;
    var c = 5;
    console.log(a + b + c); 

  
    console.log('Задача 8');
 
    var a = 17;
    var b = 10;
    var c = a - b;
    var d = 7;
    var result = c + d;
    console.log(result); // Выведет 14
 
  
  console.log('Задача 9');
  
    var secondsInHour = 60 * 60;
    var secondsInDay = secondsInHour * 24;
    var secondsInMonth = secondsInDay * 30;
    console.log('Секунд в часе: ' + secondsInHour);
    console.log('Секунд в сутках: ' + secondsInDay);
    console.log('Секунд в месяце: ' + secondsInMonth);
 
  
    console.log('Задача 10');
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    console.log('Текущее время: ' + hour + ':' + minute + ':' + second);
 
  
    console.log('Задача 11');
  
    var num = 7;
    var squared = num * num;
    console.log('Квадрат числа ' + num + ' равен ' + squared);

  
    console.log('Задача 12');
  
    var numbers = [1, 2, 3, 4, 5, 6, 7, 8];
    //метод Math.sqrt- корень
    var sumOfSquares = numbers.filter(num => num % 2 === 0).reduce((acc, num) => acc + Math.sqrt(num), 0);//метод filter - фильтрует чётные числа в массиве
    console.log(sumOfSquares);    //метод reduce - суммирует результаты массива
  
    console.log('Задача 13');
 
    var applePrice = 1.15;
    var orangePrice = 2.30;
    var totalCost = applePrice + orangePrice;
    console.log('Сумма стоимости яблок и апельсинов: ' + totalCost);
  
    console.log('Задача 14');
    var x = 5;
    console.log(x++)
  

    console.log('Задача 15');
    console.log([] + false - null + true); 

  
    console.log('Задача 16');
    var y = 1;
    var x = y = 2;
    console.log('Значение переменной x: ' + x);

  
    console.log('Задача 17');
    console.log([] + 1 + 2); 
  
  
    console.log('Задача 18');
    var a6 = 5 % 3; 
    var a7 = 3 % 5; 
    var a8 = 5 + '3'; 
    var a9 = '5' - 3; 
    var a10 = 75 + 'кг'; 
    console.log('a6:', a6);
    console.log('a7:', a7);
    console.log('a8:', a8);
    console.log('a9:', a9);
    console.log('a10:', a10);
  
  
    console.log('Задача 19');
    var height = 23; 
    var width = 10; 
    var s = height * width; 
    console.log('Площадь прямоугольника: ' + s + ' кв. см');

  
    console.log('Задача 20');
    var heightC = 10; 
    var dC = 4; 
    var r = dC / 2;
    var v = Math.PI * r * r * heightC;
    console.log('Объем цилиндра: ' + v + ' куб. м');
  
  
    console.log('Задача 21');
    var S = 2000000; // сумма кредита в рублях
    var p = 0.10; // процентная ставка (10%)
    var years = 5; // количество лет
    var perepl = S * p * years; // сумма переплаты
    console.log('Переплата по кредиту: ' + perepl + ' руб.');
  
  
    console.log('Задача 22');
    var str = "Привет";
    var num = 123;
    var flag = true;
    var txt = "true";
    console.log('Тип переменной str: ' + typeof str);
    console.log('Тип переменной num: ' + typeof num);
    console.log('Тип переменной flag: ' + typeof flag);
    console.log('Тип переменной txt: ' + typeof txt);
  
  
    console.log('Задача 23');
  number=5
    console.log(-number);
  


 <div class="heading">
 
</div>


   <h2 style="text-align: center">ВЫВОД</h2>
   JavaScript – это язык программирования, который добавляет интерактивность на ваш веб-сайт (например: игры, отклик при нажатии кнопок или при вводе данных в формы, динамические стили, анимация). Эта статья поможет вам начать работать с этим захватывающим языком и даст вам представление о том, на что он способен.
 
