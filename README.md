<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Clonando o repositorio

```bash
git clone https://github.com/Memlith/my-spot.git
```

## Preparando para rodar o projeto

Instalando dependencias e criando arquivos necessarios para iniciar o projeto, colocando os commando no Terminal

```bash
npm install # instala dependencias do node

npm audit fix # fix das dependencias linux que não vão para windows

composer install # instala dependecias do php

cp .env.example .env # copia arquivo .env.example e cria arquivo .env

php artisan key:generate # gera chaves de criptografia

php artisan migrate # cria o banco de dados limpo
```

## Antes de começar a codar

Syncronizando o repo com o da nuvem, rodando no Terminal

```bash
git fetch # synca o repo local com remoto sem puxar arquivos

git pull #synca o repo local com remoto e puxa arquivos

git checkout -b "nome_branch" #cria e entre em uma nova branch para codar separadamente da main
```

O nome da branch é melhor ser o nome da funcionalidade que voce vai trabalhar.

```bash
#EXEMPLO
git checkout -b tela-pagamento
```

depois que voce fizer todo o codigo e der commit para a branch, solicitar o PULL REQUEST para dar merge na main, essa
opção aparece direto no site do repositoio [aqui](https://github.com/Memlith/my-spot.git) em amarelo logo acima dos
arquivos do repo.

## Hosteando o web server localmente

Rodar no Terminal

```bash
php artisan serve # roda servidor local php

npm run dev # roda servidor local node
```

Então abrir no browser o link que o <i><b>php artisan serve</b></i> mostrou

## Problemas comuns

1. Problema com alocação de porta do php no windows

    - Ir ate a pasta raiz do php
    - Abrir o arquivo php.ini com bloco de notas
    - Alterar linha com VARIABLE_ORDER="EGPCS" para "GPCS"

## Anotações Felipe

23/04/2025

1. composer install (cria a /vendor)
2. npm install (cria a /node_modules)

Model - App/Models\
Controller - App/Http/Controllers\
View - resources/views\
Migrations - database/migrations\
Rotas/Endpoints - routes/web.php\

Task (Tarefas - titulo / feita?)

1. ...php artisan make:model -m Task
   (Model e a migration de Task)
2. Editar o migration
3. ...php artisan migrate
4. Editar o Model ($fillable)
5. ...php artisan make:controller -r TaskController
   (Controller com as func index, create, store, edit, update, delete)
6. Ajustar a func() create (view = task.create)
7. resources/views - Criar a pasta task > create.blade.php
8. Ajusta o form no create.blade.php
9. Ajustar routes/web.php e adicionar o Route::get('/tarefa/cadastro')

---

30/04/2025

1. Ajustar o create.blade.php para adicionar a tag x-app-layout
2. npm run dev - no terminal
3. Ajustar o create.blade para ter o form e route('task.store')
4. Ajustar o routes/web.php para adicionar o Route::post
5. Ajustar o TaskController para ter a func() store

---

07/05/2025

1. Ajustar o Controller index() para devolver as Tasks (Task::all())
2. Criar a view task/index.blade.php
3. Ajustar o routes/web.php para ter a rota task.index
4. Corrigir a rota de redirect do Controller na store()
5. Ajustar o Controller destroy para fazer $task->delete
6. Ajustar o index para adicionar o form com DELETE
7. Ajustar o routes/web.php para ter a rota task.destroy
8. Ajustar o Controller edit para trazer a task
9. Ajustar routes/web.php para ter a rota task.edit
10. Criar a view task/edit.blade.php
11. Ajustar o Controller update
12. Ajustar o routes/web.php para ter a rota task.update
13. Ajustar o index.blade para ter o link task.edit

---

14/05/2025

1.  Ajustar a migration create_task_table para adicionar o user_id (foreignIdFor)
2.  Executar o php artisan migrate:fresh para recriar o BD
3.  Alterar o model Task para ter a func() user
4.  Alterar o model User para ter a func() tasks
5.  Ajustar o Controller Task index() - devolver só as tasks do user logado
6.  Corrigir no Model Task o fillable para adicionar o user_id
7.  Ajustar o Controller Task store() - adicionar o user_id
8.  Corrigir no Controller Task edit, update, destroy - garantir que o user_id está correto

---

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
