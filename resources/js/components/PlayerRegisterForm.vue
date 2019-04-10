<template>
 <div>
 	<label><b>Full Name</b></label>
 <input type="text" class="form-control" name="fullname" v-model="postRequest.fullname" />
 <br>
 <label><b>Jersey Number</b></label>
 <input type="number" class="form-control" name="number" v-model="postRequest.number" />
 <br>
 <label><b>Position</b></label>
 <select class="form-control" v-model="postRequest.position">
     <option value="point guard">Point Guard</option>
     <option value="shooting guard">Shooting Guard</option>
     <option value="small forward">Small Forward</option>
     <option value="Power forward">Power Forward</option>
     <option value="center">Center</option>
 </select>
 <br>
 <label><b>Username</b></label>
 <input type="text" class="form-control" name="username" v-model="postRequest.username" />
 <br>
 <label><b>Password</b></label>
 <input type="password" class="form-control" name="password" v-model="postRequest.password" />
 <br>
 <button class="btn btn-primary" type="button" @click="savePlayer">
   <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="spinner"></span>
    Save
 </button>
 </div>
</template>
<script>
	export default {
		data: function() {
			return {
				spinner:false,
				postRequest:{'fullname':'','number':0,'position':'','username':'','password':''}
			}
		},
		mounted() {
			console.log('hello~');
		},
		methods: {
			savePlayer() {
				new Promise((resolve, reject) => {
					this.spinner = true;
					setTimeout(() => {
						resolve(1);
					},1000)
				}).then(() => {
					axios.post('/api/create-player',{
						'fullname': this.postRequest.fullname,
						'number': this.postRequest.number,
						'position': this.postRequest.position,
						'username': this.postRequest.username,
						'password': this.postRequest.password
					}).then(response => {
						this.spinner = false;
						if(response.data)
						{
							this.postRequest.fullname = '';
							this.postRequest.number = '';
							this.postRequest.position = '';
							this.postRequest.username = '';
							this.postRequest.password = '';

							toastr.success('Player successfully added.');
						}
						else
						{
							toastr.error('Validation failed!');
						}

					}).catch(() => {
						this.spinner = false;
						toastr.error('Validation failed!');
					});
				});
			}
		}
	}
</script>