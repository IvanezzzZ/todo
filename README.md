Задание выполнено в ветке develop

Развёртывание:
1. make up
2. Зайти в контейнер php-cli: make cli
3. В контейнере php-cli загрузить зависимости: composer install
4. выйти из контейнера командой exit и загрузить node модули: make npm-install
5. выполнить команду sudo chmod 777 -R storage/
6. открыть стартовую страницу в браузере: http://localhost:8080/
