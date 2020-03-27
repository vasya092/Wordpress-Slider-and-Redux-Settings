# Wordpress-Slider-and-Redux-Settings
Добавление шорткода слайдера и опций в родительскую тему Twenty Twenty Wordpress

## Установка
* Перенести папки assets и inc в директорию темы
* Код из function.php добавить в function.php темы.
## Shorcode

Добавление шорткода на страницу
```
[wp_sl]
  [img url='' alt='']
  [img url='']
  [img]
[wp_sl]
```

Пример использования:
```
[wp_sl]
  [img]
  [img url='https://i.ytimg.com/vi/dqUGFsuZNu8/sddefault.jpg']
[/wp_sl]
```

## Redux Framework Config
```
inc/theme-config.php
```
