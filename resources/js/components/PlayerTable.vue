<template>
<div>
 <div class="table-responsive">
  <table class="table">
   <thead>
    <tr>
      <th scope="col">Team name</th>
      <th scope="col">Player name</th>
      <th scope="col">Player number</th>
      <th scope="col">Player position</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      <td>{{ team_name }}</td>
      <td>{{ player_name }}</td>
      <td>{{ player_number }}</td>
      <td>{{ player_position }}</td>
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
            <select class="form-control" id="position" name="position">
              <option>Point Guard</option>
            </select>
          </div>
          <div class="col-md-12">
            <br>
            <ul class="list-group">
              <li class="list-group-item text-center" style="cursor:pointer;" :class="{active:spinner}" @click="selectPlayer">Joshua Perez asdasdad asdasd</li>
            </ul>
            <br>
            <center>
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="spinner"></span>
              Save
            </button>
            </center>
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
  props:['team_name','player_name','player_number','player_position'],
  data: function() {
    return {
      spinner:false
    }
  },
	mounted() {
		console.log('Hello Component')
	},
  methods: {
    selectPlayer() {
      if(this.spinner == false)
      {
        this.spinner = true;
      }
      else
      {
        this.spinner = false;
      }
    }
  }
}
</script>