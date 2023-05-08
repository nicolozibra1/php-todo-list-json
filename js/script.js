const {createApp} = Vue;

createApp({
    data() {
        return {
            title: 'Todolist',
            todoList: [],
            apiUrl: 'server.php',
            todoItem: '',
            removeItem: ''
        }
    },
    methods: {
        readTodo() {
            axios.get(this.apiUrl).then((res) => {
                this.todoList = res.data;
            });
        },
        addTodo() {
            console.log(this.todoItem);
            const data = {
                todoItem: this.todoItem
            };
            axios.post(this.apiUrl, data, {headers: { 'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.todoItem = '';
                this.todoList = res.data;
            });
        },
        removeTodo(index) {
            axios.post(this.apiUrl, { removeItem: index }, {headers: { 'Content-Type': 'multipart/form-data'}}).then((res) => {
              this.todoList.splice(index, 1);
            });
        }
    },
    mounted() {
        this.readTodo()
    }
}).mount('#app');