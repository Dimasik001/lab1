Как владелец автомобиля, который использует автомойку регулярно, я хочу получать уведомления о завершении мойки, чтобы я мог сразу забрать машину и не тратить время на ожидание.<br>
Как клиент, который предпочитает определенные моющие средства и процедуры, я хочу иметь возможность сохранять свои предпочтения в профиле, чтобы каждый раз не указывать их заново.<br>
Как пользователь мобильного приложения автомойки, я хочу иметь возможность просматривать и редактировать свою предстоящую запись, чтобы при необходимости изменять время или услуги.<br>
Как клиент, который пользуется услугами автомойки на регулярной основе, я хочу иметь возможность просмотреть историю моек и услуг, чтобы отслеживать, какие процедуры были выполнены.<br>
Как водитель, который ценит быструю обработку заказа, я хочу иметь возможность заранее оплачивать мойку и дополнительные услуги через приложение, чтобы минимизировать время, проведенное на месте.<br>
Как новый пользователь автомойки, я хочу получать введение в услуги и их преимущества при первой записи, чтобы я мог лучше понять, что предлагается и как выбрать подходящую опцию.<br>
Как клиент, который заказывает услуги автомойки для нескольких автомобилей, я хочу иметь возможность управлять несколькими профилями автомобилей из одного приложения, чтобы упростить процесс записи и управления.<br>
Как пользователь, который имеет особые требования к мойке, я хочу иметь возможность оставить заметки или особые пожелания для работников автомойки, чтобы гарантировать, что моя машина будет обслужена в соответствии с моими ожиданиями.<br>
Как клиент, который имеет ограничения по времени, я хочу видеть актуальное время ожидания и доступные слоты в реальном времени, чтобы выбрать наименее загруженное время для посещения автомойки.<br>
Как пользователь, который предпочитает определенные дни недели для мойки, я хочу иметь возможность настроить регулярные автоматические записи на эти дни, чтобы мой автомобиль всегда был чистым без необходимости вручную записываться каждый раз.<br>

<br>
<h1>Учебное приложене по автомойке</h1>
<h2>Esatimates(Примерные показатели)</h2> <br>
Регион: Сахалинская область <br>
Численность: 500 000 чебурек  <br>
DAU: 15% от 500К = 75к <br>
RPS: 75/24/3600 = 1 <br>
<h2>Функциональные требования</h2>  <br>
UseCase  <br>

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
     2. Система ищет ближайшую к позиции пользователя мойки<br>
     3. Система формирует список моек<br>
     4. Система отображает экран с картой и список моек<br>
     5. Система ожидает выбора мойки<br>
     6. Система переходит к экрану выбора услуг <br>
