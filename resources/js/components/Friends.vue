<template>
    <div>
        <b-container>
            
            <div class="d-flex flex-wrap">
                <div v-for="friend in friends" :key="friend.id" class="p-5">

        <b-card
    :title="friend.title"
    
    img-alt="Image"
    img-top
    tag="article"
    :style="[(friend.alive)?{'max-width': '20rem','background': '#90ee90'}:{'max-width': '20rem','background': 'grey'}]"
    class="mb-2"
  >
    <b-card-text>
      Definition
    </b-card-text>
    <button v-if="!friend.alive" type="button" class="btn btn-success" @click="changeState(friend)">
        Here
    </button>
    <button v-else type="button" class="btn btn-danger" @click="changeState(friend)">
        Leave
    </button>
  </b-card>
        
        </div>
</div>
        </b-container>

        
        

    </div>

</template>

<script>
export default {
    data(){
        return{
            friends:{

            }
        };
    },
    methods: {
        getFriends(){
            axios.get('api/getfriends').then(response=>{
                

                this.friends=response.data.friends;
            })
        },
        changeState(friend){
            axios.put('api/changestate/'+friend.id).then(response=>{
                this.getFriends();
            })
        }
    },
    created(){
        this.getFriends();
    }
}
</script>