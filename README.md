<h1 align= "center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align= "center">Лабораторная работа №11</p><br><br><br><br><br><br><br><br>
<p align= "right">Выполнил: Андреев Д.В.</p><br><br><br><br><br><br><br><br>
<p align="center">г. Южно-Сахалинск <br> 2023 год</p><br><br><br><br><br><br><br><br>
<h2 style="text-align: center">Введение</h2>
<p align="justify">PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.PHP отличается от JavaScript тем, что PHP-скрипты выполняются на сервере и генерируют HTML, который посылается клиенту. Если бы у вас на сервере был размещён скрипт, подобный вышеприведённому, клиент получил бы только результат его выполнения, но не смог бы выяснить, какой именно код его произвёл. Вы даже можете настроить свой сервер таким образом, чтобы обычные HTML-файлы обрабатывались процессором PHP, так что клиенты даже не смогут узнать, получают ли они обычный HTML-файл или результат выполнения скрипта.</p>
<h2 style="text-align: center">Цели и задачи</h2>
<ol align="justify"> <br>
<h2 align="center">Цели и задачи</h2>
 1.	Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.

         <!--задание 1-->
            <?php
            $var = 'hell';
            echo $var[0]; //выведем букву 'h'
            echo $var[1]; //выведем букву 'e'
            echo $var[4]; //выведем букву 'o'
            ?>

2.	Напишите скрипт, который считает количество секунд в часе.

           <!--задача 2-->
        <?php
        echo 60 * 60;
        ?>

3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
  
  
        <?php
              $var = 1;
              $var = $var + 12;
              $var = $var - 14;
              $var = $var * 5;
              $var = $var / 7;
              $var = $var + 1;
              $var = $var - 1;
              echo $var;
            ?>
   задача 3
   
            <?php
            $var = 1;
            $var += 12;
            $var -= 14;
            $var *= 5;
            $var /= 7;
            $var++;
            $var--;
            echo $var;
            ?>

      
4.	 Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.

        <!--задача 4-->
        <?php
        $a = 3;
        echo $a;
        ?>

5.	Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).

        <!--задача 5-->
           <?php
           $a = 10;
           $b = 2;
           echo $a+$b;
           echo $a-$b;
           echo $a*$b;
           echo $a/$b;
           ?>

6.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.

       <!--задача 6-->
          <?php
          $c = 15;
          $d = 2;
          $result = $c+$d;
          echo $result
          ?>

7.	Создайте переaменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.

       <!--задача 7-->
          <?php
          $a = 10;
          $b = 2;
          $c = 5;
          $result = $a+$b+$c;
          echo $result
          ?>

8.	 Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.

        <!--задача 8-->
            <?php
            $a = 17;
            $b = 10;
            $c = $a+$b;
            $d = 7;
            $result = $c+$d;
            echo $result;
            ?>

9.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.

           <!--задача 9-->
        <?php
        $text = 'Привет, Мир!'
        echo $text;
        ?>

10.	 Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.

         <!--задача 10-->
           <?php
           $text1 = 'Привет'
           $text2 = ', Мир!'
           echo $text1 . $text2;
           ?> 

11.	 Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.

          <!--задача 11-->
              <?php
              $name = 'Иван'
              echo 'привет,' . $name;
              ?>

12.	 Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.

          <!--задача 12-->
              <?php
              $age = '22';
              echo 'мне' . $age . 'лет';
              ?>

13.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.

        <!--задача 13-->
           <?php
           $text = 'abcde';
           $text[0] = '!';
           $text[2] = 'e';
           echo $text;
           ?>

14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.

    <!--задача 14-->
       <?php
       $text = 'abcde';
       $text[0] = '!';
       echo $text;
       ?> 

15.	 Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.

    <!--задача 15-->
      <?php
      $num = '12345';
      $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
      ?> 

16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.

        <!--задача 16-->
        <?php
        $hour = 60 * 60;
        $day = $hour * 24;
        $month = $day * 30;
        ?>

17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.

    <!--задача 17-->
       <?php
       $hour = 0;
       $min = 19;
       $sec = 33;
       echo $hour . ':' . $min . ':' . $sec;
       ?>

18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.

    <!--задача 18-->
      <?php
      $a = 6;
      $a *= $a;
      echo $a;
      ?>

19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.


        $var = 47;
        $var = $var + 7;
        $var = $var - 18;
        $var = $var * 10;
        $var = $var / 20;
        echo $var;
        
задача 19

        <?php
        $var = 47;
        $var += 7;
        $var -= 18;
        $var *= 10;
        $var /= 20;
        echo $var;
        ?>
        
20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.


          $text = 'Я';
          $text = $text.' хочу';
          $text = $text.' знать';
          $text = $text.' PHP!';
          echo $text;

      
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.


            $var = 10;
            $var = $var + 1;
            $var = $var + 1;
            $var = $var - 1;
            echo $var;
        
 задача 21
    
    <?php
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var;
    ?>
        
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.


            $var = 10;
            $var = $var + 7;
            $var = $var + 1;
            $var = $var - 1;
            $var = $var + 12;
            $var = $var * 7;
            $var = $var - 15;
            echo $var;

 задача 22
    
    <?php
    $var = 10;
       $var += 7;
       $va++;
       $var--;
       $var += 12;
       $var *= 7;
       $var -= 15;
       echo $var;
       ?>


 <div class="heading">
 
</div>


   <h2 style="text-align: center">ВЫВОД</h2>
    PHP крайне прост для освоения, но вместе с тем способен удовлетворить запросы профессиональных программистов. Не пугайтесь длинного списка возможностей PHP. Вы можете быстро начать, и уже в течение нескольких часов сможете создавать простые PHP-скрипты.

Хотя PHP, главным образом, предназначен для работы в среде веб-серверов, область его применения не ограничивается только этим. Читайте дальше и не пропустите главу Возможности PHP либо, начните непосредственно с Вводного руководства, если вас интересует исключительно веб-программирование.
 
