const {createApp} = Vue;

createApp({
    data() {
        return {
            title: 'Todolist',
            todoList: [],
            apiUrl: 'server.php'
        }
    },
    methods: {
        readTodo() {
            axios.get(this.apiUrl).then((res) => {
                console.log(res.data)
                this.todoList = res.data
            });
        },
    },
    mounted() {
        this.readTodo();
    }
}).mount('#app');