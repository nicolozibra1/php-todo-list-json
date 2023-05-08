const {createApp} = Vue;

createApp({
    data() {
        return {
            title: 'Todolist',
            todoList: [],
            apiUrl: 'server.php',
            todoItem: ''
        }
    },
    methods: {
        readTodo() {
            axios.get(this.apiUrl).then((res) => {
                console.log(res.data)
                this.todoList = res.data
            });
        },
        addTodo() {
            console.log(this.todoItem);
            const data = {
                todoItem: this.todoItem
            };
            axios.post(this.apiUrl, data, {headers: { 'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.todoItem = '';
                console.log(res.data);
                this.todoList = res.data
            });
        }
    },
    mounted() {
        this.readTodo();
    }
}).mount('#app');