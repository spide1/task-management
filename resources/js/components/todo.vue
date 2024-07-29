
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
                  <input type="text" class="form-control" placeholder="Enter your task here">
                  <div class="input-group-append">
                    <button class="btn btn-info text-white">ADD</button>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-success btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
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
export default {
  data() {
    return {
      todos: [],
      theme: 'light',
    };
  },
  methods: {
    toggleTheme() {
      this.theme = this.theme === 'light' ? 'dark' : 'light';
      document.body.className = this.theme;
    },
  },
  mounted() {
    document.body.className = this.theme;
  },
};
</script>
