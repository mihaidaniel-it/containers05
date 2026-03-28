# Лабораторная работа №5

## Запуск сайта в контейнере (Apache + PHP + MariaDB + WordPress)

---

##  Цель работы

Изучить процесс создания Docker-контейнера для запуска веб-приложения на базе Apache HTTP Server, PHP (mod_php), MariaDB и развертывания WordPress.

---

##  Задание

Создать Docker-образ, содержащий:

* Apache HTTP Server
* PHP (mod_php)
* MariaDB
* WordPress

Обеспечить:

* хранение базы данных в volume
* доступ к серверу через порт 8000
* работоспособность WordPress

---

##  Ход выполнения работы

### 1. Создание структуры проекта

Создана папка `containers05` со структурой:

* files/apache2
* files/php
* files/mariadb
* files/supervisor

---

### 2. Настройка Apache

Изменён файл `000-default.conf`:

![Apache config](step0.png)

Добавлено:

* ServerName localhost
* DirectoryIndex index.php

---

### 3. Dockerfile

Создан Dockerfile:

![Dockerfile](step1.png)

---

### 4. Настройка Supervisor

Создан файл `supervisord.conf`:

![Supervisor](step2.png)

Обеспечивает запуск:

* Apache
* MariaDB

---

### 5. Запуск контейнера

Контейнер успешно запущен:

![Run container](step3.png)

---

### 6. Настройка базы данных

В WordPress введены параметры подключения:

![DB setup](step4.png)

---

### 7. Установка WordPress

Произведена установка системы:

![Install WP](step5.png)

---

### 8. Итоговый результат

WordPress успешно запущен:

![Final site](step6.png)

---

##  Ответы на вопросы

### 1. Какие файлы конфигурации были изменены

* apache2.conf
* 000-default.conf
* php.ini
* 50-server.cnf

---

### 2. За что отвечает DirectoryIndex

Определяет, какой файл открывается первым (например index.php).

---

### 3. Зачем нужен wp-config.php

Содержит параметры подключения к базе данных.

---

### 4. За что отвечает post_max_size

Определяет максимальный размер POST-запроса.

---

### 5. Недостатки контейнера

* все сервисы в одном контейнере
* отсутствие масштабируемости
* нет разделения на микросервисы

---

##  Вывод

В ходе работы был создан Docker-контейнер, включающий Apache, PHP, MariaDB и WordPress.
Была выполнена настройка конфигурационных файлов и успешно развернут веб-сайт.

Получены практические навыки работы с Docker, конфигурацией веб-серверов и баз данных.

---
