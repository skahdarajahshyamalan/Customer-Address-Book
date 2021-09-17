<template>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Add new Customer</h3>
            <form method="post" @submit.prevent="addPost">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" v-model="post.name" id="text" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nic</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" v-model="post.nic" id="text" >
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" v-model="post.address" id="text" >
                    </div>
                </div>
                <div class="form-group row"  v-for="(input, index) in phoneNumbers" :key="`phoneInput-${index}`">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-8"><input type="text" v-model="input.phone"  class="form-control" id="text" ></div>
                            <div class="col-sm-2">
                                 <div class="row">
                                     <div class="col-sm-6"> 
                                         <svg
                                                @click="addField(input, phoneNumbers)"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                width="24"
                                                height="24"
                                                class="ml-2 cursor-pointer"
                                            >
                                         <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                            fill="green"
                                            d="M11 11V7h2v4h4v2h-4v4h-2v-4H7v-2h4zm1 11C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"
                                            />
                                            </svg></div>
                                     <div class="col-sm-6">
                                           <svg
                                               v-show="phoneNumbers.length > 1"
                                               @click="removeField(index, phoneNumbers)"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                width="24"
                                                height="24"
                                                class="ml-2 cursor-pointer"
                                            >
                                         <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                            fill="#EC4899"
                                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"
                                            />
                                        </svg>
                                     </div>
                                 </div>
                                
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>
 </div>
</template>

<script>
export default {
  name: "AddRemove",
  data() {
    return {
      phoneNumbers: [{ phone: "" }],
       post: {},
       allerros: [],
      success: false,
    };
  },
  methods: {
    addField(value, fieldType) {
      fieldType.push({ value: "" });
    },
    removeField(index, fieldType) {
        fieldType.splice(index, 1);
       },
        addPost() {
            console.log(this.post);
             console.log(this.phoneNumbers);
             event.preventDefault();
        }
  },
};
</script>