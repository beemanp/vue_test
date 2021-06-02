var app = new Vue({
    el:'#app',
    data:{
        users:"",
        message:'Hello World',
        form:{
            name:"",
            lname:"",
            isEdit:false,
            status:"บันทึก"
        }
    },
    methods:{
        GetAllUsers(){
            axios.post('action.php',{
                action:"GetAll"
            }).then(function(res){
                app.users=res.data
            })
        },

    },
    created(){
        this.GetAllUsers();
    }
})