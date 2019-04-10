<template>
<div>
 <div class="table-responsive">
  <table class="table">
   <thead>
    <tr>
      <th scope="col">Team name</th>
      <th scope="col">Actions</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      <td>Mark</td>
      <td>
        <button class="btn btn-primary" data-toggle="modal" data-target="#add-player">Add player</button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#view-members">View players</button>
      </td>
     </tr>
   </tbody>
  </table>
 </div>
 <div class="modal fade" id="add-team" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><h5 class="modal-title" id="exampleModalLongTitle">Add Team</h5></center>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label for="teamname">Team name</label>
            <input type="text" class="form-control" id="teamname" name="teamname">
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
<div class="modal fade" id="view-members" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><h5 class="text-center">View Team Members</h5></center>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <h4>Coach: Joshua Perez</h4>
            <ul class="list-group">
              <li class="list-group-item">Dapibus ac facilisis in</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of   the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</template>
<script>
export default {
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