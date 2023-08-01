#   1 Model ( Представление в MVC ) 
# Архитектура
- это
   - кмпоненты кода (на какие части разбиты),
   - струатура этих компонетов (что где находится)
   - отношения между компонентами

 - Архитектура - это базовая орагнизация системы, воплощенная в ее компонентах,
                 их отношениях между собой и с окружением, а также принципы,
                 определеяющие проектирование и развитие системы (IEEE 1471)

 - Патерны - Шаблоны типового решения стандартной задачи (Заготовки)
 - MVC
   - Model - работает с данными. Код который знает где данные находятся
     и как они организованы. Можно в модели относить различные класы
     подключения к БД, конфиги подключения БД описания таблицы
   - Модель умеем CRUD


====================== Модель данных  - ОРМ =================
 - это Концепция
 - ORM - Object Relational mapping - отображения реальных данных на языке пчп
   
 - Объкты в пчп принято использовать в качестве модели данных
   Модель данных - с помощью класса мы описываем структуру данных которые есть в хранилище
   (в реляционной БД)
   - иии как аксиома принимаем что каждая запис соотвествует какому то объекту

 - Model - слой моделей знает где находятся данные

  * 1 $class = get_called_class(); defines in runtime what class called  a method
  * 2 self keyword compiled time binding
  * 3 static keyword defines a class in runtime. runtime binding
  * 4 echo $class;
  * 5 die;



- Три этапа исполнения кода
 1 - parsing (zend engine строит дерево исполнения кода)
 2 - compile time (early binding) здесь self
 3 - execution or runtime (late binding) здесь static


#   2 Interfaces (договоренность)
 * множественного наследования нет
 * Type hinting 
 * In PHP, type hinting (or type casting)
 * singleton
 * traits (повторяющийся код) сборник свойст методов для того чтобы 
не дублировать код
 * Актив рекорд - это архитектурный патерн "Активная запись"
 - Записи в БД сооствествует объект в языке програмирования
 - Запись в базе даннхы может "сама себя" сохранить и удалить,
используя методы объекта
 - ОРМ - это шаблон где запись данных в БД отображается в виде обхекта на языке програмирования

# Актив рекорд??? data mapper ? 


#   3 VIEW ( Представление в MVC )
 - задача view - сформировать ответь на запрос 
 - view (представление) использует html, css js
 - view может сожержать логику (на пчп)

 ** правильное разделение view и бизнес логики
 * шаблонизаторы ?

# !!!
 - задача програмиста ставит себе как можно больше ограничений - constraints
 - Прочесть и понять задачу 
 - Уточнить задачу
 - Запланировать

#  Магией (magic functions)
- в пчп называют методы которые автоматически вызываются в определенных ситуациях
- __set() - перехватчик
- In PHP, __set() is a magic method that is automatically fired when an attempt is made to assign a value to an inaccessible or undefined property within an object. This magic method allows you to control the behavior when setting the value of properties that are not directly accessible within the class.
- The __set() magic method is defined within a class and takes two parameters: $name (the name of the property being set) and $value (the value being assigned to the property).
- __set() {}
- __get() {}
- __isset() {} when an attempt is made to check the existence of an inaccessible or undefined property using the isset() function or the empty() function.

* Пример
* Если например у наст есть класс View и у него нет поля products то при присвоении данных
* в это поле вызывается магический метод __set() 
* $view = new View();
* $view->products = Product::findAll();
* при этом первым параметром передается имя поля вторым данные которые должны быть присвоены этому поле
* public function __set(string $products, Products:all()): void


# 6 Controllers
* 
* Класс контролера нам нужен чтобы:
- Контролер был обектом и значит мы получит все возможности ООП
- Чтобы использовать преимущество наследлвания
 * * 
 * Внедрение зависимости
 * 
 **** magic method __invoke ---- In PHP, __invoke() is a magic method that allows an object to be used as a function. When you call an object as if it were a function, PHP will automatically look for and invoke the __invoke() method if it's defined in the object.
* фронт - контролер - роутер

* Буфер вывода
* SPL - стандартные бибилиотеки пчп 

# ! ROUTING - ROUTER
* фронт контрллер
# Front Controller 
* In the context of web development, a Front Controller typically receives requests from clients (browsers or other systems) and performs the following tasks:
* 1  Routing: The Front Controller examines the incoming request's URL to determine which controller or handler should be responsible for processing the request. It extracts relevant information from the URL, such as the requested resource, query parameters, or HTTP method.
* 2 Request Handling: Based on the routing information, the Front Controller passes the request to the appropriate controller or handler to handle the request. The controller will then process the request, perform necessary actions, and generate a response. 
* 3 Middleware Processing: In some web frameworks, a Front Controller may also handle middleware, which are components that can intercept and modify the request and response before passing them to the final handler. Middleware can be used for tasks like authentication, logging, or input validation. 
* 4 Response Handling: After the controller or handler has processed the request, the Front Controller takes the response generated by the controller and sends it back to the client or the appropriate destination. 
* 5 Error Handling: The Front Controller can also handle errors or exceptions that occur during the request processing and take appropriate action, such as displaying an error page or logging the error.
