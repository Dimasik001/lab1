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
  usecase "UC1:Выбрать город" as UC1
  usecase "UC2:Выбрать автомойку" as UC2
  usecase "UC4:Выбрать дату и время" as UC4
  usecase "UC3:Выбрать услугу" as UC3
  usecase "UC5:Оплатить услуги" as UC5
  usecase "UC6:Выбрать способ оплаты" as UC6
  usecase "UC7:Отменить запись" as UC7
  usecase "UC8:Получить тех поддержку" as UC8
}
fc --> UC1
fc --> UC2
fc --> UC3
UC3 --> UC4:(include)
fc --> UC5
UC5 --> UC6:(include)
pc --> UC6
fc --> UC7
fc --> UC8

@enduml

```

  <br>
  

![image](https://github.com/user-attachments/assets/68928992-5d92-42fd-8067-404cfea33d47)



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
 <h2> Сценарий 1: Выбор автомойки на основе геолокации </h2> <br>
  <p><b>UC1: Выбрать город</b>: Система проверяет, передал ли пользователь свою геолокацию.</p>
  <p><b>ЕСЛИ:</b> Геолокация есть, то система переходит к шагу 3. <b>ИНАЧЕ:</b> Система переходит к "Сценарию 3: Выбор автомойки на основе ввода адреса".</p>
  <p><b>UC2: Выбрать автомойку</b>: Система ищет ближайшую к позиции пользователя мойки.</p>
  <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если не найдено ни одной мойки в радиусе действия геолокации, система уведомляет пользователя и предлагает ввести адрес вручную, переходя к "Сценарию 3: Выбор автомойки на основе ввода адреса".
     </p>
  <p>Система формирует список найденных моек.</p>
   <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если произошла ошибка при получении данных о мойках, система отображает сообщение об ошибке и предлагает перезагрузить страницу.
    </p>
  <p>Система отображает экран с картой и списком найденных моек.</p>
  <p>Система ожидает выбора мойки от пользователя.</p>
  <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если пользователь не выбирает мойку в течение заданного времени, система предлагает вернуться к списку или повторить поиск.
      </p>
  <p>Система переходит к <b>UC3: Выбрать услугу</b>.</p>
  <p>Сценарий завершен.</p><br>
   <h2> Сценарий 2: Запрос разрешения на геолокацию </h2> <br>
   <p><b>UC1: Выбрать город</b>: Система выводит сообщение клиенту с просьбой разрешить передачу геолокации.</p>
  <p><b>ЕСЛИ:</b> Клиент разрешил доступ к геолокации, то система переходит к "Сценарию 1: Шаг 3". <b>ИНАЧЕ:</b> Система переходит к "Сценарию 3: Выбор автомойки на основе ввода адреса".</p>
  <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если произошла ошибка при обработке запроса разрешения на геолокацию, система отображает сообщение об ошибке и предлагает повторить запрос.
    </p><br>
     <h2> Сценарий 3: Выбор автомойки на основе ввода адреса </h2> <br>
  <p><b>UC1: Выбрать город</b>: Система отображает поле для ввода адреса.</p>
  <p>
       <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если поле ввода адреса не может быть отображено, система показывает сообщение об ошибке и предлагает перезагрузить страницу.
    </p>
  <p>Система ожидает ввода адреса от пользователя.</p>
   <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если введенный адрес не может быть распознан, система предлагает ввести адрес повторно или использовать геолокацию.
    </p>
  <p><b>UC2: Выбрать автомойку</b>: Система ищет мойки в окрестностях введенного адреса.</p>
   <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если не найдено ни одной мойки в указанном районе, система сообщает об этом пользователю и предлагает изменить адрес или использовать геолокацию.
      </p>
      <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если произошла ошибка при поиске моек по адресу, система отображает сообщение об ошибке и предлагает повторить поиск.
     </p>
  <p>Система формирует список найденных моек.</p>
  <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если список моек пуст или произошла ошибка при формировании списка, система уведомляет об этом пользователя и предлагает повторить поиск.
      </p>
  <p>Система отображает экран с картой и списком найденных моек.</p>
   <p>
        <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если экран с картой не может быть отображен, система показывает список моек и предлагает продолжить без карты.
     </p>
  <p>Система ожидает выбора мойки от пользователя.</p>
   <p>
          <b>АЛЬТЕРНАТИВНЫЙ ПУТЬ:</b> Если пользователь не выбирает мойку в течение заданного времени, система предлагает вернуться к списку или повторить поиск.
     </p>
  <p>Система переходит к <b>UC3: Выбрать услугу</b>.</p>
  <p>Сценарий завершен.</p><br> 
<h1>ER- диаграмма</h1>

![image](https://github.com/user-attachments/assets/c0f2b77d-052e-4683-9422-9bdc0d6e4b15)
 
 <br> 

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

@enduml

```

<h1> C4 Model Level 1</h1>

![image](https://github.com/user-attachments/assets/cfec1431-23ff-4750-8e10-dd03a9e34517)


<br>

```
@startuml
!include https://raw.githubusercontent.com/plantuml-stdlib/C4-PlantUML/master/C4_Context.puml

LAYOUT_WITH_LEGEND()

System_Ext(PaymentSystem, "СЕРВИСЫ и БД", -------, --------, --------)


Person(Customer, "ПОЛЬЗОВАТЕЛИ")


System(AutoWashApp, "ПРИЛОЖЕНИЯ" , -------, --------, --------)

Rel(Customer, AutoWashApp, "Используют")
Rel(AutoWashApp, PaymentSystem, "Отправляют")



@enduml
```

<h1> C4 Model Level 2</h1>

![image](https://github.com/user-attachments/assets/1b5ca04b-97a1-443d-902d-b386feffd6ca)


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
Container(MobileApp, "Мобильное приложение", "Mobile App", "Пользовательский интерфейс для работников автомойки и администратора", "Native App")
Container(ApiServer, "API Сервер", "API", "Предоставляет API для клиентских приложений", "Node.js, Express")
ContainerDb(Database, "База данных",  "Хранит данные о клиентах, записях, сервисах")
' Взаимодействия
Rel(Customer, MobileApp, "Использует")
Rel(Admin, WebApp, "Использует")
Rel(Admin, MobileApp, "Использует")
Rel(Employee, WebApp, "Использует")

Rel(WebApp, ApiServer, "Использует", "HTTPS")
Rel(MobileApp, ApiServer, "Использует", "HTTPS")
Rel(ApiServer, Database, "Использует", "DB")

Rel(ApiServer, PaymentSystem, "Использует", "Протокол HTTPS")
Rel(ApiServer, SmsService, "Использует", "Протокол HTTPS")
Rel(ApiServer, EmailService, "Использует", "Протокол HTTPS")
Rel(ApiServer, MapService, "Использует", "Протокол HTTPS")
@enduml
```

<h1>Сценарий 1: Запись клиента на мойку</h1>

![image](https://github.com/user-attachments/assets/ffc6b2ef-0c4b-4529-9c3f-a9347d7ac87f)


```
@startuml
title Запись Клиента на мойку
participant Customer as "Клиент"
participant WebApp as "Веб-приложение"
participant ApiServer as "API Сервер"
participant Database as "База данных"
participant SmsService as "СМС Сервис"

Customer -> WebApp: Запрашивает страницу записи
WebApp -> ApiServer: Запрашивает список доступных услуг и дат
ApiServer -> Database: Запрашивает данные о услугах и расписании
Database --> ApiServer: Возвращает данные о услугах и расписании
ApiServer --> WebApp: Возвращает список услуг и дат
WebApp -> Customer: Отображает страницу записи
Customer -> WebApp: Выбирает услугу, дату и время
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

<h1>Сценарий 4: Оплата услуги</h1>

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

``` 
openapi: 3.0.0
info:
  title: Car Wash Service API
  version: 1.0.0
  description: API for managing clients, cars, services, appointments, employees and car washes.
paths:
  /clients:
    get:
      summary: Get a list of all clients
      tags:
        - clients
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Client'
    post:
      summary: Create a new client
      tags:
        - clients
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Client'
      responses:
        '201':
          description: Client created successfully
        '400':
          description: Invalid input
  /clients/{clientId}:
    get:
      summary: Get a client by ID
      tags:
        - clients
      parameters:
        - in: path
          name: clientId
          required: true
          description: ID of the client to get
          schema:
            type: integer
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Client'
        '404':
          description: Client not found
    put:
      summary: Update an existing client
      tags:
        - clients
      parameters:
        - in: path
          name: clientId
          required: true
          description: ID of the client to update
          schema:
            type: integer
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Client'
      responses:
        '200':
          description: Client updated successfully
        '400':
          description: Invalid input
        '404':
          description: Client not found
    delete:
      summary: Delete a client by ID
      tags:
        - clients
      parameters:
        - in: path
          name: clientId
          required: true
          description: ID of the client to delete
          schema:
            type: integer
      responses:
        '204':
          description: Client deleted successfully
        '404':
          description: Client not found
  /cars:
    get:
      summary: Get a list of all cars
      tags:
        - cars
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Car'
    post:
      summary: Create a new car
      tags:
        - cars
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Car'
      responses:
        '201':
          description: Car created successfully
        '400':
          description: Invalid input
  /cars/{carId}:
      get:
        summary: Get a car by ID
        tags:
          - cars
        parameters:
          - in: path
            name: carId
            required: true
            description: ID of the car to get
            schema:
              type: integer
        responses:
          '200':
            description: Successful response
            content:
              application/json:
                schema:
                  $ref: '#/components/schemas/Car'
          '404':
            description: Car not found
      put:
        summary: Update an existing car
        tags:
          - cars
        parameters:
          - in: path
            name: carId
            required: true
            description: ID of the car to update
            schema:
              type: integer
        requestBody:
          required: true
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Car'
        responses:
          '200':
            description: Car updated successfully
          '400':
            description: Invalid input
          '404':
            description: Car not found
      delete:
        summary: Delete a car by ID
        tags:
          - cars
        parameters:
          - in: path
            name: carId
            required: true
            description: ID of the car to delete
            schema:
              type: integer
        responses:
          '204':
            description: Car deleted successfully
          '404':
            description: Car not found
  /services:
    get:
      summary: Get a list of all services
      tags:
        - services
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Service'
    post:
      summary: Create a new service
      tags:
        - services
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Service'
      responses:
        '201':
          description: Service created successfully
        '400':
          description: Invalid input
  /services/{serviceId}:
    get:
      summary: Get a service by ID
      tags:
        - services
      parameters:
        - in: path
          name: serviceId
          required: true
          description: ID of the service to get
          schema:
            type: integer
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Service'
        '404':
          description: Service not found
    put:
      summary: Update an existing service
      tags:
        - services
      parameters:
        - in: path
          name: serviceId
          required: true
          description: ID of the service to update
          schema:
            type: integer
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Service'
      responses:
        '200':
          description: Service updated successfully
        '400':
          description: Invalid input
        '404':
          description: Service not found
    delete:
        summary: Delete a service by ID
        tags:
          - services
        parameters:
          - in: path
            name: serviceId
            required: true
            description: ID of the service to delete
            schema:
              type: integer
        responses:
          '204':
            description: Service deleted successfully
          '404':
            description: Service not found
  /appointments:
    get:
      summary: Get a list of all appointments
      tags:
        - appointments
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Appointment'
    post:
      summary: Create a new appointment
      tags:
        - appointments
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Appointment'
      responses:
        '201':
          description: Appointment created successfully
        '400':
          description: Invalid input
  /appointments/{appointmentId}:
      get:
        summary: Get an appointment by ID
        tags:
          - appointments
        parameters:
          - in: path
            name: appointmentId
            required: true
            description: ID of the appointment to get
            schema:
              type: integer
        responses:
          '200':
            description: Successful response
            content:
              application/json:
                schema:
                  $ref: '#/components/schemas/Appointment'
          '404':
            description: Appointment not found
      put:
        summary: Update an existing appointment
        tags:
          - appointments
        parameters:
          - in: path
            name: appointmentId
            required: true
            description: ID of the appointment to update
            schema:
              type: integer
        requestBody:
          required: true
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Appointment'
        responses:
          '200':
            description: Appointment updated successfully
          '400':
            description: Invalid input
          '404':
            description: Appointment not found
      delete:
        summary: Delete an appointment by ID
        tags:
          - appointments
        parameters:
          - in: path
            name: appointmentId
            required: true
            description: ID of the appointment to delete
            schema:
              type: integer
        responses:
          '204':
            description: Appointment deleted successfully
          '404':
            description: Appointment not found
  /employees:
    get:
      summary: Get a list of all employees
      tags:
        - employees
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Employee'
    post:
      summary: Create a new employee
      tags:
        - employees
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/Employee'
      responses:
        '201':
          description: Employee created successfully
        '400':
          description: Invalid input
  /employees/{employeeId}:
      get:
        summary: Get an employee by ID
        tags:
          - employees
        parameters:
          - in: path
            name: employeeId
            required: true
            description: ID of the employee to get
            schema:
              type: integer
        responses:
          '200':
            description: Successful response
            content:
              application/json:
                schema:
                  $ref: '#/components/schemas/Employee'
          '404':
            description: Employee not found
      put:
        summary: Update an existing employee
        tags:
          - employees
        parameters:
          - in: path
            name: employeeId
            required: true
            description: ID of the employee to update
            schema:
              type: integer
        requestBody:
          required: true
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Employee'
        responses:
          '200':
            description: Employee updated successfully
          '400':
            description: Invalid input
          '404':
            description: Employee not found
      delete:
        summary: Delete an employee by ID
        tags:
          - employees
        parameters:
          - in: path
            name: employeeId
            required: true
            description: ID of the employee to delete
            schema:
              type: integer
        responses:
          '204':
            description: Employee deleted successfully
          '404':
            description: Employee not found
  /carwashes:
    get:
      summary: Get a list of all car washes
      tags:
        - carwashes
      responses:
        '200':
          description: Successful response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/CarWash'
    post:
      summary: Create a new car wash
      tags:
        - carwashes
      requestBody:
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/CarWash'
      responses:
        '201':
          description: Car wash created successfully
        '400':
          description: Invalid input
  /carwashes/{carwashId}:
      get:
        summary: Get a car wash by ID
        tags:
          - carwashes
        parameters:
          - in: path
            name: carwashId
            required: true
            description: ID of the car wash to get
            schema:
              type: integer
        responses:
          '200':
            description: Successful response
            content:
              application/json:
                schema:
                  $ref: '#/components/schemas/CarWash'
          '404':
            description: Car wash not found
      put:
        summary: Update an existing car wash
        tags:
          - carwashes
        parameters:
          - in: path
            name: carwashId
            required: true
            description: ID of the car wash to update
            schema:
              type: integer
        requestBody:
          required: true
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CarWash'
        responses:
          '200':
            description: Car wash updated successfully
          '400':
            description: Invalid input
          '404':
            description: Car wash not found
      delete:
        summary: Delete a car wash by ID
        tags:
          - carwashes
        parameters:
          - in: path
            name: carwashId
            required: true
            description: ID of the car wash to delete
            schema:
              type: integer
        responses:
          '204':
            description: Car wash deleted successfully
          '404':
            description: Car wash not found
components:
  schemas:
    Client:
      type: object
      properties:
        clientId:
          type: integer
          description: Unique ID of the client
        name:
          type: string
          description: Name of the client
        phone:
          type: string
          description: Phone number of the client
      required:
        - name
        - phone
    Car:
      type: object
      properties:
        carId:
          type: integer
          description: Unique ID of the car
        make:
          type: string
          description: Make of the car
        model:
          type: string
          description: Model of the car
        year:
          type: integer
          description: Year of the car
        clientId:
          type: integer
          description: ID of the client owning the car
      required:
          - make
          - model
          - year
          - clientId
    Service:
      type: object
      properties:
        serviceId:
          type: integer
          description: Unique ID of the service
        name:
          type: string
          description: Name of the service
        price:
          type: number
          format: float
          description: Price of the service
      required:
          - name
          - price
    Appointment:
      type: object
      properties:
        appointmentId:
          type: integer
          description: Unique ID of the appointment
        dateTime:
          type: string
          format: date-time
          description: Date and time of the appointment
        carId:
          type: integer
          description: ID of the car for the appointment
        serviceId:
          type: integer
          description: ID of the service for the appointment
        employeeId:
          type: integer
          description: ID of the employee performing the appointment
      required:
          - dateTime
          - carId
          - serviceId
          - employeeId
    Employee:
      type: object
      properties:
        employeeId:
          type: integer
          description: Unique ID of the employee
        name:
          type: string
          description: Name of the employee
        position:
          type: string
          description: Position of the employee
        carWashId:
          type: integer
          description: ID of the car wash where the employee works
      required:
          - name
          - position
          - carWashId
    CarWash:
      type: object
      properties:
        carWashId:
          type: integer
          description: Unique ID of the car wash
        address:
          type: string
          description: Address of the car wash
        phone:
          type: string
          description: Phone number of the car wash
      required:
          - address
          - phone
```

