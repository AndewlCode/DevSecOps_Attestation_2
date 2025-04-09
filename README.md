# DevSecOps_Attestation_2

## Cоздание GitLab CI пайплайнов для статического анализа PHP проектов.

Для анализа PHP приложений будем использовать [PHPStan](https://phpstan.org/try)

1. Необходимо установить phpstan при помощи команды:

`
composer require --dev phpstan/phpstan
`

Далее создаём конфигурационный файл [phpstan.neon](phpstan/phpstan.neon) внутри проекта и следуя инструкциям на оф. сайте проекта производим настройки:

2. Необходимо убедиться, что функция "Pipelines" включена для проекта, в котором планируется использовать PHPStan.

![CI/CD Part 1](/screenshots/browser_AR08tiiRAf.png)

На следующей странице настраиваются группы пользователей, которым разрешено работать с пайплайнами.

![CI/CD Part 2](/screenshots/browser_cgrEylNgpX.png)

3. Необходимо настроить пайплайн, установив галку напротив меню "Pipelines must succeed"

![CI/CD Part 3](/screenshots/browser_tt2GvaNZo7.png)

4. Далее вносим изменения в  конфигурационный файл [.gitlab-ci.yml](phpstan/.gitlab-ci.yml), он должен размещаться в корневой директории нашего проекта.

5. Для использования нового пайплайна необходимо сделать коммит файла .gitlab-ci.yml на сервер.

Теперь при последующих коммитах будет запускаться скрипт проверки PHPStan, который будет сканировать файлы приложения.

Аналогичным образом можно запустить сканирование и при помощи командной строки.
Для этого используем команду:

`
analyse -c phpstan.neon
`

В результате выполнения скрипта будет выведен отчёт об ошибках:
![PHPStan console result](/screenshots/VirtualBoxVM_UKEuHNne7e.png)