@startuml
left to right direction
actor "Человек" as fc
rectangle "Плат система" as pc
rectangle Мойка{
  usecase "Выбрать автомойку" as UC1
  usecase "Выбрать город" as UC2
  usecase "Выбрать дату и время" as UC3
  usecase "Выбрать услугу" as UC4 
usecase "Оплатить услуги" as UC5
  usecase "Выбрать способ оплаты" as UC6
 usecase "Отменить запись" as UC7
 usecase "Получить тех поддержку" as UC8
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
