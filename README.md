    $ cp .env.example .env //created the file **.env**
    $ docker-compose up -d --build //To start you application
    $ docker-compose ps //list all the containers 
    $ docker exec -i -t app_workspace_1 /bin/bash //command to use the workspace container as your main bash
    $ php artisan
