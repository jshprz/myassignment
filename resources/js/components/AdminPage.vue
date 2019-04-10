<template>
 <div>
  <div class="row">
  <div class="col-md-6">
    <div class="card float-left" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[0].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5" style="height: 1px;width: 15rem;background-color: black;">
      <div style="width: 1px;background-color: black;height: 121px;float: right;">
        <div class="mt-3" style="height: 1px;width: 2rem;background-color: black;">
          <div class="card float-left mb-5" style="width: 13rem; cursor: pointer;">
            <div class="card-body">
              <h5 class="card-title">Cards title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
          </div>
          <div class="card float-left mt-5" style="width: 10rem;margin-left: 25px; cursor: pointer;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
          </div>
          <div style="width: 1px;background-color: black;height: 400px; margin-left: 100px;">
            <div class="card float-left" style="width: 10rem;margin-left: 135px; bottom: 25%; cursor: pointer;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
          </div>
          </div>

      </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="card float-left" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[1].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5" style="height: 1px;width: 15rem;background-color: black;">
    </div>
  </div>
  <div class="col-md-6">
    <div class="card float-right" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[4].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5 float-right" style="height: 1px;width: 2rem;background-color: black;">
      <div style="width: 1px;background-color: black;height: 121px;float: left;">
        <div class="card float-right mt-3" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="float-right" style="width: 1px;background-color: black;height: 350px; margin-right: 100px;">
    </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card float-right" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[5].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5 float-right" style="height: 1px;width: 2rem;background-color: black;"></div>
    <div class="mt-0 float-right" style="height: 1px;width: 2rem;background-color: black;"></div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-6">
    <div class="card float-left" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[2].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5" style="height: 1px;width: 15rem;background-color: black;">
      <div style="width: 1px;background-color: black;height: 121px;float: right;">
        <div class="mt-3" style="height: 1px;width: 2rem;background-color: black;">
          <div class="card float-left mb-5" style="width: 13rem; cursor: pointer;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
          </div>
      </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="card float-left" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[3].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5" style="height: 1px;width: 15rem;background-color: black;">
    </div>
  </div>
  <div class="col-md-6">
    <div class="card float-left" style="width: 10rem; bottom:60%; left: 23%; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="card float-right" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[6].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5 float-right" style="height: 1px;width: 2rem;background-color: black;">
      <div style="width: 1px;background-color: black;height: 121px;float: left;">
        <div class="card float-right mt-3" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card float-right" style="width: 13rem; cursor: pointer;">
      <div class="card-body">
        <h5 class="card-title">{{ teamsQuarter[7].team_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      </div>
    </div>
    <div class="mt-5 float-right" style="height: 1px;width: 2rem;background-color: black;"></div>
    <div class="mt-0 float-right" style="height: 1px;width: 2rem;background-color: black;"></div>
  </div>
</div>
</div>
</template>
<script>
export default {
  data: function() {
    return {
      spinner:false,
      teamsQuarter:[],
      teamsSemis:[],
      teamsFinals:[]
    }
  },
	mounted() {
		console.log('Hello Component')
	},
  created: function() {
    this.getTeams();
  },
  methods: {
    getTeams() {
      axios.get('/api/get-teams').then(response => {
        console.log(response.data);
        this.teamsQuarter = response.data.quarter;
        this.teamsSemis = response.data.semis;
        this.teamsFinals = response.data.finals;
      });
    },
    declareWinnerQuarter()
    {

    }
  }
}
</script>