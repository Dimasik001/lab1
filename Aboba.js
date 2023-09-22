console.log('Задача 1');
 
    var str = 'hdfgv';
    console.log(str[0]); // Вывести 'h'

    console.log(str[1]); // Вывести 'd'

    console.log(str[4]); // Вывести 'v'
  
  
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
  