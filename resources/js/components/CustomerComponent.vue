<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'createcustomer' }" class="btn btn-primary">Add Customer</router-link> 
             </div>
        </div>
        <br/>

        <!--code-->
        <table class="table table-striped table-bordered table-hover no-footer">
            <thead>
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Nic</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Address</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
            </thead>
            <tbody class="text-xs-center">
                <tr v-for="post in customerdata" :key="post.id">
                <td class="text-center">{{ post.id }}</td>
                <td class="text-center">{{ post.name }}</td>
                <td class="text-center">{{ post.nic }}</td>
                
                 <td class="text-center">
                     <div v-for="itemtelethone in post.phonenumber" :key="itemtelethone.id">
                         {{ itemtelethone.telephone}}
                         </div> 
                     </td>
                      <td class="text-center">
                     <div v-for="item in post.address" :key="item.id">
                         {{ item.adressname}}
                         </div> 
                     </td>
                <td><router-link :to="{name: 'editcustomer', params: { id: post.id }}" class="btn btn-primary">Edit
                    </router-link></td>
                <td>delete</td>
                </tr>
            </tbody>
        </table>        
        <!--endcode-->
    </div>
</template>

<script>
export default {
     data() {
            return {
                customerdata: []
            }
        },
        created() {
            let uri = 'http://127.0.0.1:8000/api/Customers';
            this.axios.get(uri).then(response => {
                this.customerdata = response.data.data;
            });
        },
         
};
</script>

<style>
</style>