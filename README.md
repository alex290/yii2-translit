Transliterator Yii2 Cyrillic
============================
Транслитерация Yii2 Русского текста

Installation
------------

Предпочтительным способом установки этого расширения является [composer](http://getcomposer.org/download/).

Нужно запустить

```
php composer.phar require --prefer-dist alex290/yii2-translit "*"
```

или добавить

```
"alex290/yii2-translit": "*"
```

в раздел require вашего `composer.json` файла.


Использование
-----

После установки расширения просто используйте его в коде :

```php
<?= \alex290\translit\Translit::widget((['text' => 'Ваш русский текст', 'sufix' => '.html', 'length' => 50])); ?>```

где

'text' - Ваш русский текст

'sufix' - Суфикс например .html (Необязательный параметр)

'length' - Длина (количество) символов. Если не указывать то по умалчанию 50 