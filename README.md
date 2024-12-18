<h1>Учебное приложене по автомойке</h1>

<h1>User STORY</h1>
1) Я Как владелец автомобиля, который использует автомойку регулярно, я хочу получать уведомления о завершении мойки, чтобы я мог сразу забрать машину и не тратить время на ожидание.<br>
2) Я Как клиент, который предпочитает определенные моющие средства и процедуры, я хочу иметь возможность сохранять свои предпочтения в профиле, чтобы каждый раз не указывать их заново.<br>
3) Я Как пользователь мобильного приложения автомойки, я хочу иметь возможность просматривать и редактировать свою предстоящую запись, чтобы при необходимости изменять время или услуги.<br>
4) Я Как клиент, который пользуется услугами автомойки на регулярной основе, я хочу иметь возможность просмотреть историю моек и услуг, чтобы отслеживать, какие процедуры были выполнены.<br>
5) Я Как водитель, который ценит быструю обработку заказа, я хочу иметь возможность заранее оплачивать мойку и дополнительные услуги через приложение, чтобы минимизировать время, проведенное на месте.<br>
6) Я Как новый пользователь автомойки, я хочу получать введение в услуги и их преимущества при первой записи, чтобы я мог лучше понять, что предлагается и как выбрать подходящую опцию.<br>
7) Я Как клиент, который заказывает услуги автомойки для нескольких автомобилей, я хочу иметь возможность управлять несколькими профилями автомобилей из одного приложения, чтобы упростить процесс записи и управления.<br>
8) Я Как пользователь, который имеет особые требования к мойке, я хочу иметь возможность оставить заметки или особые пожелания для работников автомойки, чтобы гарантировать, что моя машина будет обслужена в соответствии с моими ожиданиями.<br>
9) Я Как клиент, который имеет ограничения по времени, я хочу видеть актуальное время ожидания и доступные слоты в реальном времени, чтобы выбрать наименее загруженное время для посещения автомойки.<br>
10) Я Как пользователь, который предпочитает определенные дни недели для мойки, я хочу иметь возможность настроить регулярные автоматические записи на эти дни, чтобы мой автомобиль всегда был чистым без необходимости вручную записываться каждый раз.<br>

<br>


<h1>UseCase</h1>  <br>

```
@startuml
left to right direction
actor "Человек" as fc
rectangle "Плат система" as pc
rectangle Мойка{
  usecase "UC1:Выбрать автомойку" as UC1
  usecase "UC2:Выбрать город" as UC2
  usecase "UC3:Выбрать дату и время" as UC3
  usecase "UC4:Выбрать услугу" as UC4 
usecase "UC5:Оплатить услуги" as UC5
  usecase "UC6:Выбрать способ оплаты" as UC6
 usecase "UC7:Отменить запись" as UC7
 usecase "UC8:Получить тех поддержку" as UC8
}
fc --> UC1
fc --> UC2
fc --> UC3 
fc --> UC4
fc --> UC5 
fc --> UC6
fc --> UC7
fc --> UC8
UC5 <-- pc
@enduml
```

  <br>
  

![image](https://github.com/user-attachments/assets/b9060ab3-f308-47a5-9f5d-9c0122c462e9) 
    <br>
     <br>
   <h2>  Сценарии использования </h2> <br>
     UC1 - Найти и выбрать автомойку  <br>
     Участники <br>
     ---Пользовательские приложения <br>
     Предусловия  <br>
     ---Пользователь зарегетрирован и авторизован <br>
     Условие для запуска сценария <br>
     ---Пользователь нажал  кнопку "Найти кнопку" <br>
     Признак успешности <br> 
     ---Пользователь выбрал автомойку <br>
      <h2>  Базовый сценарий </h2> <br>
     1. Система проверяет что пользователь передал свою геолокацию<br>
     ЕСЛИ: Геолокации НЕТ, <br>
     ТО: Система переходит к "Базовому сценарию 3"<br>
     2. Система ищет ближайшую к позиции пользователя мойки<br>
     3. Система формирует список моек<br>
     4. Система отображает экран с картой и список моек<br>
     5. Система ожидает выбора мойки<br>
     6. Система переходит к экрану выбора услуг <br>
     7. Сценарий завершен<br>
      <h2> Базовый сценарий 2 </h2> <br>
     1. Сисема выводит соощение клиента с просьбой разрешить передачу геолокации<br>
     2. ЕСЛИ: клиент разрешил доступ к геолокации <br>ТО: Система переходит в "Базовый сценарий шаг 2" <br>ИНАЧЕ: Система переходит в "Базовому сценарию 3"<br>
      <h2>  Базовый сценарий 3 </h2> <br>
     1. Система отображает поле для ввода адреса<br>
     2. Система ожидает от пользователя ввод адреса<br>
     3. Система переходит в "Базовый сценарий Шаг 2"<br> 
<h1>ER- диаграмма</h1>

![XPCnJy9G58Nt_egNZYOTN9aW4Gs9OgBT2H464d2GEXaJ88uaLiM02DWoE3bKGms2rBzmtZ_olaRiRMEnspiz_UuzzxvccrRvp3flrBMJUhdP51ZY4GFSOuofkD04FOMYgUGbvl2nafrIhHBgn-PHeRWdoFqfhsFAb8nB-F8A0LRQfRPcsxYbTnFE_P6Ip14ysS82Na8DC5DisOq](https://github.com/user-attachments/assets/1c9a93b2-fdb0-4bf7-b4d5-cb55ca7b5eaa)  <br> 

```
@startuml
class КЛИЕНТ {
    INT Клиент_id
    STRING Имя
    STRING Телефон
}

class АВТО {
    INT АВТО_id
    STRING Марка
    STRING Модель
    INT Год
    INT Клиент_id
}

class СЕРВИС {
    INT Сервис_id
    STRING Имя
    FLOAT Цена
}

class ЗАПИСЬ {
    INT Запись_id
    DATETIME Дата_time
    INT АВТО_id
    INT Сервис_id
    INT Работник_id
}

class РАБОТНИК {
    INT Работник_id
    STRING Имя
    STRING Должность
    INT Мойка_id
}

class МОЙКА {
    INT Мойка_id
    STRING Адрес
    STRING Телефон
}

КЛИЕНТ "1" -- "*" АВТО : -
АВТО "1" -- "*" ЗАПИСЬ :-
ЗАПИСЬ "1" -- "*" СЕРВИС : -
ЗАПИСЬ "1" -- "*" РАБОТНИК : -
РАБОТНИК "1" -- "*" МОЙКА : -
МОЙКА "1" -- "*" РАБОТНИК : -

@enduml
```

<h1> C4 Model Level 1</h1>

![image](https://github.com/user-attachments/assets/b890440f-a615-4bc6-97f1-792e023daac6)

<br>

```
@startuml
!include https://raw.githubusercontent.com/plantuml-stdlib/C4-PlantUML/master/C4_Context.puml

LAYOUT_WITH_LEGEND()

System_Ext(PaymentSystem, "Платежная система", "Обработка платежей")
System_Ext(SmsService, "СМС Сервис", "Отправка СМС уведомлений")
System_Ext(EmailService, "Email Сервис", "Отправка Email уведомлений")
System_Ext(MapService, "Картографический сервис", "Отображение местоположения моек")

Person(Customer, "Клиент", "Записывается на мойку, просматривает услуги")
Person(Admin, "Администратор", "Управляет сервисами, записями и сотрудниками")
Person(Employee, "Работник автомойки", "Просматривает назначенные записи, выполняет работу")

System(AutoWashApp, "Учебное приложение автомойки", "Управляет записями, клиентами, сервисами и сотрудниками.")

Rel(Customer, AutoWashApp, "Использует")
Rel(Admin, AutoWashApp, "Управляет")
Rel(Employee, AutoWashApp, "Выполняет работу", "Просматривает записи")
Rel(AutoWashApp, PaymentSystem, "Отправляет", "Платежи")
Rel(AutoWashApp, SmsService, "Отправляет", "СМС уведомления")
Rel(AutoWashApp, EmailService, "Отправляет", "Email уведомления")
Rel(AutoWashApp, MapService, "Использует", "Отображение местоположения моек")

@enduml
```

<h1> C4 Model Level 2</h1>

![image](https://github.com/user-attachments/assets/f778c2af-1816-49d2-a2d0-6c814ecef605)

<br>

```
@startuml
!include https://raw.githubusercontent.com/plantuml-stdlib/C4-PlantUML/master/C4_Container.puml

LAYOUT_WITH_LEGEND()

' Внешние системы
System_Ext(PaymentSystem, "Платежная система", "Обработка платежей")
System_Ext(SmsService, "СМС Сервис", "Отправка СМС уведомлений")
System_Ext(EmailService, "Email Сервис", "Отправка Email уведомлений")
System_Ext(MapService, "Картографический сервис", "Отображение местоположения моек")

' Пользователи
Person(Customer, "Клиент", "Записывается на мойку, просматривает услуги")
Person(Admin, "Администратор", "Управляет сервисами, записями и сотрудниками")
Person(Employee, "Работник автомойки", "Просматривает назначенные записи, выполняет работу")

' Контейнеры приложения
Container(WebApp, "Веб-приложение", "Web Browser", "Пользовательский интерфейс для клиентов и администраторов", "HTML, CSS, JavaScript")
Container(MobileApp, "Мобильное приложение", "Mobile App", "Пользовательский интерфейс для работников автомойки", "Native App")
Container(ApiServer, "API Сервер", "API", "Предоставляет API для клиентских приложений", "Node.js, Express")
ContainerDb(Database, "База данных", "Database", "Хранит данные о клиентах, записях, сервисах", "PostgreSQL")
' Взаимодействия
Rel(Customer, WebApp, "Использует")
Rel(Admin, WebApp, "Использует")
Rel(Employee, MobileApp, "Использует")

Rel(WebApp, ApiServer, "Использует", "HTTPS")
Rel(MobileApp, ApiServer, "Использует", "HTTPS")
Rel(ApiServer, Database, "Использует", "JDBC")

Rel(ApiServer, PaymentSystem, "Отправляет", "Платежи")
Rel(ApiServer, SmsService, "Отправляет", "СМС уведомления")
Rel(ApiServer, EmailService, "Отправляет", "Email уведомления")
Rel(ApiServer, MapService, "Использует", "Получение данных о местоположении")
@enduml
```

<h1>Сценарий 1: Запись клиента на мойку</h1>

![image](https://github.com/user-attachments/assets/cbf7e735-47cb-42d9-beb0-9962bcc1fc1e)

```
@startuml
title Запись Клиента на мойку
participant Customer as "Клиент"
participant WebApp as "Веб-приложение"
participant ApiServer as "API Сервер"
participant Database as "База данных"
participant SmsService as "СМС Сервис"

Customer -> WebApp: Запрашивает страницу записи
WebApp -> ApiServer: Запрашивает список доступных сервисов и дат
ApiServer -> Database: Запрашивает данные о сервисах и расписании
Database --> ApiServer: Возвращает данные о сервисах и расписании
ApiServer --> WebApp: Возвращает список сервисов и дат
WebApp -> Customer: Отображает страницу записи
Customer -> WebApp: Выбирает сервис, дату и время
WebApp -> ApiServer: Отправляет запрос на создание записи
ApiServer -> Database: Создает новую запись в БД
Database --> ApiServer: Возвращает ID новой записи
ApiServer -> SmsService: Отправляет СМС уведомление клиенту
SmsService --> ApiServer: Возвращает подтверждение отправки
ApiServer --> WebApp: Возвращает подтверждение создания записи
WebApp --> Customer: Отображает подтверждение записи
@enduml
```

<h1>Сценарий 2: Просмотр записей работником автомойки</h1>

![image](https://github.com/user-attachments/assets/44e61fe2-0173-437c-9ee5-f0d3cede2ee5)

```
@startuml
title Просмотр записей работником
participant Employee as "Работник автомойки"
participant MobileApp as "Мобильное приложение"
participant ApiServer as "API Сервер"
participant Database as "База данных"

Employee -> MobileApp: Запрашивает список записей
MobileApp -> ApiServer: Запрашивает записи на сегодня
ApiServer -> Database: Запрашивает записи из БД
Database --> ApiServer: Возвращает список записей
ApiServer --> MobileApp: Возвращает список записей
MobileApp -> Employee: Отображает список записей
@enduml
```

<h1>Сценарий 3: Редактирование записи администратором</h1>

![image](https://github.com/user-attachments/assets/b3845bf1-7950-4381-bb40-bb588bd1f724)

```
@startuml
title Редактирование записи администратором
participant Admin as "Администратор"
participant WebApp as "Веб-приложение"
participant ApiServer as "API Сервер"
participant Database as "База данных"

Admin -> WebApp: Запрашивает страницу редактирования записи
WebApp -> ApiServer: Запрашивает данные о записи
ApiServer -> Database: Запрашивает данные из БД
Database --> ApiServer: Возвращает данные записи
ApiServer --> WebApp: Возвращает данные записи
WebApp -> Admin: Отображает форму редактирования
Admin -> WebApp: Вносит изменения в запись
WebApp -> ApiServer: Отправляет запрос на изменение записи
ApiServer -> Database: Обновляет запись в БД
Database --> ApiServer: Возвращает подтверждение обновления
ApiServer --> WebApp: Возвращает подтверждение изменения
WebApp -> Admin: Отображает подтверждение редактирования
@enduml
```

<h1>Сценарий 4: Оплата услуги (без деталей платежной системы)</h1>

![image](https://github.com/user-attachments/assets/333dd993-b3ab-441b-b337-107c39442fc7)

```
@startuml
title Оплата услуги
participant Customer as "Клиент"
participant WebApp as "Веб-приложение"
participant ApiServer as "API Сервер"
participant PaymentSystem as "Платежная система"

Customer -> WebApp: Запрашивает страницу оплаты
WebApp -> ApiServer: Запрашивает данные о записи
ApiServer -> Database: Запрашивает данные о записи
Database --> ApiServer: Возвращает данные о записи
ApiServer --> WebApp: Возвращает данные записи
WebApp -> Customer: Отображает страницу оплаты
Customer -> WebApp: Вводит платежные данные
WebApp -> ApiServer: Отправляет запрос на оплату
ApiServer -> PaymentSystem: Инициирует платеж
PaymentSystem --> ApiServer: Возвращает результат платежа
ApiServer --> WebApp: Возвращает результат оплаты
WebApp -> Customer: Отображает результат оплаты
@enduml
```

<h1>OpenAPI</h1>


