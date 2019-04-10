<template>
<div>
 <div class="table-responsive">
  <table class="table">
   <thead>
    <tr>
      <th scope="col">Player name</th>
      <th scope="col">Player number</th>
      <th scope="col">Player position</th>
      <th scope="col">Action</th>
    </tr>
   </thead>
   <tbody>
    <tr v-for="item in playerData">
      <td>{{ item.name }}</td>
      <td>{{ item.number }}</td>
      <td>{{ item.position }}</td>
      <td>
        <button class="btn btn-danger" @click="removePlayer(item.id)">Remove player</button>
      </td>
     </tr>
   </tbody>
  </table>
 </div>
 <div class="modal fade" id="add-player" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><h5 class="modal-title" id="exampleModalLongTitle">Available Players</h5></center>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <label for="position">Filter by position</label>
            <select class="form-control" id="position" name="position" v-model="filter_position" @change="getPlayersData">
              <option value="point guard">Point Guard</option>
              <option value="shooting guard">Shooting Guard</option>
              <option value="small forward">Small Forward</option>
              <option value="Power forward">Power Forward</option>
              <option value="center">Center</option>
            </select>
          </div>
          <div class="col-md-12">
            <br>
            <ul class="list-group" v-for="player in filteredPlayerData">
              <li class="list-group-item text-center" style="cursor:pointer;" :class="{active:spinner}" @click="selectPlayer(player.id, coachTableData.id)">{{ player.name }} - {{ player.number }}</li>
            </ul>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="modal fade" id="remove-player" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><h5 class="modal-title" id="exampleModalLongTitle">You sure to remove this player?</h5></center>
      <div class="text-center">
        <button class="btn btn-danger">Yes</button>
        <button class="btn btn-primary">No</button>
      </div>
      <br>
    </div>
  </div>
</div>
</div>
</template>
<script>
export default {
  props: ['coach_id'],
  data: function() {
    return {
      coachTableData:[],
      playerData:[],
      spinner:false,
      filter_position:'Point Guard',
      filteredPlayerData:[]
    }
  },
	mounted() {
		console.log(this.filter_position);
	},
  created: function(){
    this.getCoachTableData();
    this.getPlayersData();
  },
  methods: {
    selectPlayer(player_id, team_id) {
        axios.post('/api/add-player-to-team',{
            player_id:player_id,
            team_id:team_id
        }).then(response => {
            if(response.data)
            {
                this.getPlayersData();
                this.getCoachTableData();
                toastr.success('player added.');
            }
        }); 
    },
    getCoachTableData() {
      axios.post('/api/get-coach-data',{
        coach_id: this.coach_id
      }).then(response => {
          this.coachTableData = response.data;
          this.playerData = response.data.user;
      });
    },
    getPlayersData() {
      axios.post('/api/get-players-data',{
          filter_position:this.filter_position
      }).then(response => {
          this.filteredPlayerData = response.data;
      });
    },
    removePlayer(player_id) {
        axios.post('/api/remove-player-from-team',{
          player_id:player_id
        }).then(response => {
            if (response.data) {
              this.getPlayersData();
              this.getCoachTableData();
              toastr.success('Player Removed.');
            }
        });
    }
  }
}
</script>