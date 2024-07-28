<template>
    
    <div class="container">
       <div class="row justify-content-center mt-5">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">TO DO</div>
                   <div class="card-body">
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="Enter your task here">
                           <div class="input-group-append">
                               <button class="btn btn-info text-white">ADD</button>
                           </div>
                       </div>
                       <table class="table table-bordered table-striped table-dark mt-4">
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
                                       <!-- <button class="btn btn-success btn-sm">Edit</button>
                                       <button class="btn btn-danger btn-sm">Delete</button> -->
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
</template>

<script>
   export default {
       data(){
           return{
               todos:[],
           }
       },  
   }
</script>
