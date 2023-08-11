* > статьи автора
- https://habr.com/ru/articles/655399/
- https://habr.com/ru/articles/667590/
- Альберт Степанцев
- https://pr-of-it.ru/teachers/1.html

# Альберт Степанцев
# Вебинары

1. Система типов современного PHP (8.1)
2. PHP в Docker: по шагам
3. Symfony 6: Быстрый старт 
4. Асинхронность? Параллельность?? Многопоточность???
5. PHP: Атрибуты и их практическое применение

6. PHP 8.1 - что нового?

7. PHP Parallel - новое расширение для многопоточности в PHP

8. Почему ограничения - это хорошо?

9. "Вуду" регулярных выражений

10. PHP-8: что нового и пора ли переходить?

11. XDebug - как начать пользоваться отладкой в PHP?

12. Система типов в современном PHP

13. Как c нуля стать востребованным программистом за три месяца?

14. "Магия" в PHP: что это и для чего нужно?

15. Что нового в PHP 7.4?

16. Нужна ли веб-разработчику PostgreSQL?

17. Поём Psalm и радуемся!

18. Docker: как начать и что он даст простому веб-разработчику?

19. MySQL 8: всё, что вам нужно знать об этой версии или "А где же 6 и 7?"

20. Введение в фреймворк Codeception

21. Git для самых "маленьких"

22. Redis - основы и практическое использование

23. Что нового в PHP (7.3)?

24. Runn Me! HTML - простой ответ на сложные вопросы

25. Как искать в базе данных? Триграммный, полнотекстовый и другие виды поиска на примере Postgres

26. ReactPHP: асинхронный неблокирующий сервер на PHP на простых примерах

27. Использование концепций Value Objects и DTO в PHP на реальных примерах

28. ClickHouse - современная колоночная база данных

29. Система типов в современном PHP

30. Модели хранения деревьев в реляционных БД

31. Архитектурные вечера: разговор про микросервисы

32. По мотивам Highload: Знакомство с новыми возможностями MariaDB

33. Архитектурные вечера: поговорим о бизнес-процессах

34. Что нового в PHP (7.2)?

35. Как С НУЛЯ стать востребованным ПРОГРАММИСТОМ всего ЗА ТРИ МЕСЯЦА?

36. XDebug: полезное расширение для каждого разработчика

37. Кэш: что? где? когда?

38. Куки, сессии, авторизация и всё такое

39. Создаем простого бота для Telegram за один час!

40. Разработка через тестирование для начинающих

41. "Вуду" регулярных выражений

42. DDD: панацея от плохого дизайна или антипаттерн?

43. Правильный деплой приложений на PHP

44. Паттерны (шаблоны проектирования) для начинающих

45. Многопоточность в PHP: мифы и реальность

46. Что нового в PHP (7.1)?

47. Генераторы и сопрограммы в PHP

48. Flexbox - первое знакомство

49. Особенности малого бизнеса в IT в России
"
50. Магия" в PHP: что это и для чего нужно?

51. Веб-сервер nginx для разработчика

52. Что нового в PHP (лето 2016)?

53. Введение в Doctrine

54. PHP: Готовимся к собеседованию

55. Презентация партнерской программы ProfIT

56. PHP не для сайтов

57. Дао программиста. Итоги года и взгляд вперед.

58. Работа с изображениями на PHP

59. Исключения - "серебряная пуля" для программиста на PHP

60. PHP 7 - что нужно знать уже сейчас?

61. Дао программиста. Путь к деньгам, свободе и счастью

62. Легенды и мифы о TDD

63. Объектная модель современного PHP

64. Что такое JQuery и почему он вам нужен?

65. Правильный деплой приложений на PHP

66. PDO - PHP Data Objects или Как работать с базой данных правильно?

67. Не хотите ли немного Linux?

68. Как перестать бояться GIT и начать его применять?

69. Нужна ли веб-разработчику PostgreSQL?

70. T4 - фреймворк, о котором никто не знает-2

71. T4 - фреймворк, о котором никто не знает

72. Паттерны и антипаттерны - помощники в разработке

73. Базы данных для веб-разработчика - что нужно знать?

74. Что нового в PHP?

75. "Вуду" регулярных выражений

76. "Правильный" деплой приложений на PHP

* > Курсы


1. PHP-1: Введение в профессию

2. PHP-3: Повышение квалификации

3. Современные фреймворки на PHP

4. DBA: Введение в профессию

5. PHP-2: Профессиональное программирование

6. Я - предприниматель!

7. PHP-3: Повышение квалификации

8. JavaScript-1: С самого начала

9. Программирование для чайников или Почему они так много зарабатывают?

10. Современные PHP-фреймворки

11. Ликбез будущего программиста

12. Мой первый сайт

13. Git для профессионалов

> >  I - Model ( Представление в MVC ) 
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


 * Interfaces (договоренность)
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


* >   II - VIEW ( Представление в MVC )
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

* >  Магией (magic functions)
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


* > III -  Controllers
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

* > IV -  ROUTING - ROUTER
* фронт контрллер
# Front Controller 
* In the context of web development, a Front Controller typically receives requests from clients (browsers or other systems) and performs the following tasks:
* 1  Routing: The Front Controller examines the incoming request's URL to determine which controller or handler should be responsible for processing the request. It extracts relevant information from the URL, such as the requested resource, query parameters, or HTTP method.
* 2 Request Handling: Based on the routing information, the Front Controller passes the request to the appropriate controller or handler to handle the request. The controller will then process the request, perform necessary actions, and generate a response. 
* 3 Middleware Processing: In some web frameworks, a Front Controller may also handle middleware, which are components that can intercept and modify the request and response before passing them to the final handler. Middleware can be used for tasks like authentication, logging, or input validation. 
* 4 Response Handling: After the controller or handler has processed the request, the Front Controller takes the response generated by the controller and sends it back to the client or the appropriate destination. 
* 5 Error Handling: The Front Controller can also handle errors or exceptions that occur during the request processing and take appropriate action, such as displaying an error page or logging the error.

* > V - Уровень веб сервера nginx apache 
* избавиться от некрасивых адресов 
*  файл .htaccess 
* MOD_REWRITE
* 
* > Новые возможности пчп
- Анонимные функции - функции без имени
- объект первого класса
- Замыкания - позволяет замкнут на анонимную функцию какое либо значение из родительского класса
*  Контектс - это что видит функция 
- функции видят свои аргументы 
- функции видят обявленные внутри переменные
- функии видят $this
- closure
- Closures can capture variables from the surrounding scope using the use keyword, which makes them useful for creating callbacks or when you need to pass functions as arguments.
- замыкания это не глобальная переменная
- An anonymous function does not necessarily need to create a closure, and a closure is not created only for anonymous functions.
- cтрелочные функции
- автоматически замыкают на себя весь контекст места их рождения
$message = "Hello";
$greeting = fn($name) => "$message, $name!";
echo $greeting("John"); // Output: Hello, John!
- Отличие:
- Вместо return одно едиснтенное выражение которое будет возвращено fn($x) => $x; 
- они охватиывают контекст

* > Генераторы
- yeald (можно сделать много задачность)
- Переменное число аргументов  fn(...$x)
- spaceship <=> оператор для сравнения и сортировки массива
```
 $a = 10;
  $b = 5;

$result = $a <=> $b;

if ($result === -1) {
echo "$a is less than $b.";
} elseif ($result === 0) {
echo "$a is equal to $b.";
} else {
echo "$a is greater than $b.";
}
```
- для филтра надо создать функцию которая возврашает -1 или 1 илил 0 
- исходя из этого определеная функция сортирует массив
- функции и константы в пространстве имен
- тернарные оператори - это выбор из двух вариантов ?? или ?: 
- namespace - это префикс
* TYPE hinting
* void 
* iterable - generator
* nullable
* object
* 
* > Anonymous classes
* 
* >  Фреймворк  - это набор методик, ограничений и определенных технологий
- Депенденси инвершн - Инверсия контрол
- Библиотека VS Framework
- Библиотека - это вы его подключили и вызывете ее кодю Ваш код внутри себя вызывает классы, методы библиотеки
- Framework - Ваш код вызывается фреймкорком. Инверсия контроля
- Система которая принимает запрос и определяет какой котролер вызыватьи вызывает его
- Нащ код будет вызыватся нащим фреймворком
- ZEND, YII, Laravel, Symphony
- Zend is a company that provides products and services related to PHP, an open-source server-side scripting language used primarily for web development. Zend is well-known for its contributions to the PHP ecosystem, and it offers various tools and technologies to enhance PHP development.
- Фреймворк - это кто то за нас уже установил правила и флов обработки кода заранее за нас уже утсановил архитектуру
- а наш код идет по флову - фреймворк берет наш код и обрабатывает
- А библиотека это загатовка кода мы берем и используем
- In PHP projects, the "vendor" folder typically refers to a directory where external dependencies are managed. It is commonly associated with projects that use Composer, which is a dependency management tool for PHP.
- In summary, Active Record is a pattern where a model class directly handles database interactions, while ORM is a broader concept that uses mapping techniques to abstract database operations and provide a higher-level object-oriented interface for working with databases. The choice between Active Record and ORM depends on the specific requirements and preferences of the project and the developer team.
- console commands
- dependency injection
- Container Паттер - это объект который готовит для нас други обекты по определенным рецептам чтобы мы их использовали
- (auto wiring - автовайринг, container, dependency injection)

* > PHP 1 ВВедение в профессию
- В пчп все является выражением 
- присваивание это тоже выражение
- Выражение это то что имеет значение и может быть присвоенно в переменную
- An expression in PHP is a combination of operators, variables, and values that can be ~~evaluated to produce a resulting value~~.
- PHP expressions, like expressions in other programming languages, represent computations or operations that can yield a specific outcome. 
- - The result of an expression can be used in various ways, such as being assigned to a variable, used in conditional statements, or passed as an argument to a function.
- Однако есть и некоторые инструкции (statements) в PHP, которые не являются выражениями, так как они не возвращают какого-либо значения.
- В PHP результатом операции присваивания является значение, которое было присвоено переменной. 
- Оператор приведение типа (кастовать накалдовать)
- `or, and, xor, nor` приоритет этих оперторов ниже присваивания
- в отличие от "С" в пчп все что не ноль это истина  А в С ноль это тру
- пустая строка это лож
- Все это лож при кастовании на (bool)'', (bool)'0', (bool)0, bool(null) 
- (string)false == '', (string)true == '1'
- явное не явное рпиведение типов
- Операторы ветвлений if
- При сравнении всегда писать переменную справа
- контекст в пчп замкнутые

* > файлы на сервере
- 
- Функции чтения
- type resource - Все во что можно писать или читать от туда файл, соединение с БД сетевое соединение
- fopen(), fgets(), fread(), fclose(), feof()
- `__DIR__` это константа вернет путь к директории где была вызвана эта константа
- file() - возврашает массивб каждая строка это элеменет массива
- file_get_contents() - вес файл берет в памят в строку
- file_exists()
- is_readable()
- readfile()
- Запись
- fopen(path, 'w'), fwrite() fclose() 
- режимы открытия файла (r - чтение, r+ - чтение и запись. w -запись,
w+ запис и чтение. файл будет создан если не существует или обнулен(пустым станет файл), 
a - append - запис в конце, pointer to the end)
- file_put_coontents()
- include - возврашает то что возврашает файл
- например
- file.php который имее <?php return 2+2; include возврашает 4

* > функции работы с файлами
- `scandir(__DIR__)`
- path_info()
- dirname()
- filesize(), realpath()
- Канонический путь (или абсолютный путь)
* > Загрузка файлов
- пост метод реквест формой enctype="multipart/form-data"
- $FILES is a superglobal array
- move_uploaded_file(from, to) vs copy 
- this one is secure 

* > string
  In PHP, there's a distinction between single-quoted and double-quoted strings:

  Single-Quoted Strings (')
  Variables are not parsed within single-quoted strings. For example, '$variable' will be treated as a literal string, not the value of the variable.
  Escape sequences (\n, \t, \\, \', etc.) are not interpreted within single-quoted strings except for \\ and \'.

  Double-Quoted Strings (")
  Variables inside double-quoted strings are parsed and replaced with their values. For example, "$variable" will be replaced with the value of the variable.
  Escape sequences are interpreted within double-quoted strings. For example, "\n" will be interpreted as a newline character.

* > Массивы
-  foreach(){}
- index 
- functions for arrays 
- implode() explode() in_array() array_merge()

* > super global array $_GET
- $_POST
- http protocol methods get and post

* > переменные
- в пчп переменное - это значение которое имеет свое собственное имя
- Это выражение (значение) сохраненное под понятным для нас значением
- В пчп В памяти хранится значение и ему можно дать  имя
- это и есть отличие определение переменной в пчп от других
- Например можно написать так `<?php 43; ?>`   это значение но у него нет имени
- $q = 43; Это уже значение у которого есть имя
- In PHP, a variable is a named container used to store data values.

