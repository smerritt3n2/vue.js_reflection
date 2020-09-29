<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wizard Builder</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--========================================================================================================================================================-->
        <div id="app">
            <div class="container">
                <h2>Wizard Builder Tool</h2>

                <p>
                  <input v-model="newInput"> 
                  <button @click="addInput">Add Data to List</button>
                </p>

                <div v-for="(input,n) in input">
                  <p>
                  <span class="input">{{input}}</span> 
                    <button @click="removeInput(n)">Remove</button>  <!-- Removes Selected Data -->
                    <button @click="display = !display">Edit</button> <!-- Reveals Editing Field -->
                    <button @click="displayE = !displayE; collectInput;">Send Email</button> <!-- Reveals Editing Field -->
                    <input v-show="!display" v-model="update">
                    <button v-show="!display" @click="updateInput(n)">Apply Changes</button>
                  </p>
                </div>
                
                <form v-show="!displayE" action="email.php" method="post" enctype="text/plain">
                    <h2>Contact Us</h2>
                    <label>Name</label>
                    <input type="text" id="name">
                    <label>Email</label>
                    <input type="email" id="email">
                    <label>Message</label>
                    <textarea name="message" id="message"></textarea>
                    <label>The Resource Selected is;</label>
                    <div v-for="(input,n) in input"> 
                        <label>{{input}}</label>
                        <input type="checkbox" v-model="checkedId" :value="input">
                    </div>
                    {{checkedId}} <!-- Continue with this area! -->
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <!--========================================================================================================================================================-->

        <!--========================================================================================================================================================-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            const app = new Vue({
                el:'#app',
                data: {
                    input:[],
                    newInput:null,
                    display:true,
                    displayE:true,
                },
                mounted() {
                    
                    if(localStorage.getItem('input')) {
                    try {
                        this.input = JSON.parse(localStorage.getItem('input'));
                    } catch(e) {
                        localStorage.removeItem('input');
                    }
                    }
                },
                methods: {
                    addInput() {
                    if(!this.newInput) return; // Checks that user has put data into text-field
                    this.input.push(this.newInput);
                    this.newInput = '';
                    this.saveInput();
                    },
                    removeInput(x) {
                    this.input.splice(x,1);
                    this.saveInput();
                    },
                    saveInput() {
                    let parsed = JSON.stringify(this.input);
                    localStorage.setItem('input', parsed);
                    },
                    updateInput(x) {
                    this.input.fill(this.update);
                    this.saveInput();
                    location.reload();
                    },
                }
                })
        </script>
        <!--========================================================================================================================================================-->
    </body>
</html>