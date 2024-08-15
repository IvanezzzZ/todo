Развёртывание:
1. git clone https://github.com/IvanezzzZ/todo.git
2. git checkout -b develop origin/develop
3. make up
4. Зайти в контейнер php-cli: make cli
5. В контейнере php-cli загрузить зависимости: composer install
6. выйти из контейнера командой exit и загрузить node модули: make npm-install
7. выполнить команду make npm-build
8. выполнить команду sudo chmod 777 -R storage/
9. открыть стартовую страницу в браузере: http://localhost:8080/
