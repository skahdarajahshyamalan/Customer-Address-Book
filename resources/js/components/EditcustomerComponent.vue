<template>
  <div class="container">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="form">
                <h3 class="text-center">Edit Customer</h3>
                <form method="post"  @submit.prevent="updatePost">
                    <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" v-model="post.name"  id="text" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nic</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"  v-model="post.nic" id="text" >
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required v-model="post.address" id="text" > 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">telephone</label>
                    <div class="col-sm-10" v-if="post.phonenumber">
                         <div v-for="item in post.phonenumber" :key="item.id">
                           <input type="number" class="form-control" v-model="item.telephone"  id="text" >
                         </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Update</button>
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>           
</template>

<script>
export default {
    data() {
            return {
                post: {},
                allerros: [],
                success: false,
            }
    },
     created() {
            let uri = `http://127.0.0.1:8000/api/Customers/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.post = response.data.data;
            });
            console.log(this.post);
        },
         methods: {
            updatePost() {
                let uri = `http://127.0.0.1:8000/api/Customers/${this.$route.params.id}`;
                this.axios.put(uri, this.post).then((response) => {
                    event.preventDefault();
                   this.$router.push({name: 'customer'});
                    }).then((result) => {
                        if (result.value) {
                            // alert('edited');
                            this.$router.push({name: 'posts'});
                        }
                    })
                .catch((error) => {
                    this.allerros = error.response.data.errors;
                    this.success = false;
                });
            
            }
         }


}
</script>

<style>

</style>