<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="container d-flex flex-column align-items-center mt-5 debug">
            <h1 class="text-uppercase">{{title}}</h1>
            <ul class="w-25 mt-3">
                <li v-for="(todo, index) in todoList" :key="index">
                    <div class="box d-flex justify-content-between">
                    <span class="fw-semibold">{{todo}}</span>
                    <span class="text-danger" id="remove" @click="removeTodo(index)">&cross;</span>
                    </div> 
                </li>
            </ul>
            <section class="add-todo">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-column align-items-center mt-5">
                            <label for="add-todo" class="fst-italic">Aggiungi alla lista una nuova cosa da fare</label>
                            <input name="add-todo "type="text" v-model="todoItem" class="form-control" @keyup.enter="addTodo">
                            <button class="btn btn-success" type="button" id="button-add" @click="addTodo">Aggiungi</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>  
    </div>
    <script src="./js/script.js"></script>
</body>
</html>