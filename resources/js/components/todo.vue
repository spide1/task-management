
<template>
    <div>
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8">
            <div class="card" :class="theme">
              <div class="card-header d-flex justify-content-between">
                TO DO
                <button @click="toggleTheme" class="btn btn-secondary" :class="theme">
                  {{ theme === 'dark' ? 'Light Mode' : 'Dark Mode' }}
                </button>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" v-model="newTask" class="form-control" placeholder="Enter your task here">
                  <div class="input-group-append">
                    <button @click="addTask" class="btn btn-info text-white">ADD</button>
                  </div>
                </div>
                <table class="table table-bordered table-striped mt-4" :class="theme === 'dark' ? 'table-dark' : ''">
                  <thead>
                    <tr>
                      <th>SL.NO</th>
                      <th>Task-List</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(todo,index) in todos " :key="todo.id">   
                      <td>{{ index + 1 }}</td>
                      <td>{{ todo.name }}</td>
                      <td>
                        <button class="btn btn-success btn-sm">Edit</button>
                        <button @click="deleteTodo(todo.id)" class="btn btn-danger btn-sm">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  

  <script>
import axios from 'axios';

export default {
  data() {
    return {
      todos: [],
      newTask: '',
      theme: 'light',
    };
  },
  methods: {
    toggleTheme() {
      this.theme = this.theme === 'light' ? 'dark' : 'light';
      document.body.className = this.theme;
    },
    fetchtodos() {
      axios.get('/api/todos')
        .then(response => {
          this.todos = response.data;
        })
        .catch(error => {
          console.error('There was an error fetching todos!', error);
        });
    },
    addTask() {
      if (this.newTask.trim() === '') return;
      axios.post('/api/todos', { name: this.newTask })
        .then(response => {
          this.todos.push(response.data);
          this.newTask = '';
        })
        .catch(error => {
          console.error('There was an error adding the task!', error);
        });
    },
    deleteTodo(id) {
      axios.delete(`/api/todos/${id}`)
        .then(response => {
          this.todos = this.todos.filter(task => task.id !== id);
        })
        .catch(error => {
          console.error('There was an error deleting the task!', error);
        });
    }
  },
  mounted() {
    document.body.className = this.theme;
    this.fetchtodos();
  },
};
</script>
