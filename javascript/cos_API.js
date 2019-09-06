Vue.filter('2dec', function(value){
	return value.toFixed(2);
});



Vue.component('tabel-desktop',{
	data: function(){
		return{
			count: 1
		};
	},
	props: ['produs'],
	methods:{
		productQuantity: function(action, id)
		{
			axios.get('../includes/cos_inc.php?action='+action+'&id='+id)
			.then((response) =>{
				
			})
			.catch(function(error){
				console.log(error)
			});
			this.$emit('request-cos');
		}
	},
  	template: `
  	<tr>
		<th scope="row">{{count}}</th>
		<td>{{produs.titlu}}</td>
		<td>{{produs.cant}} buc.</td>
		<td>€{{produs.pret * 1 | 2dec}}</td>
		<td>€{{produs.pret*produs.cant | 2dec}}</td>
		<td><a v-on:click.prevent="productQuantity('delete',produs.id_produs)" class="btn btn-danger" href="">Sterge</a></td>
	</tr>`
});


Vue.component('tabel-mobil', {
	props: ['produs','showX'],
	methods:{
		productQuantity: function(action, id)
		{
			axios.get('../includes/cos_inc.php?action='+action+'&id='+id)
			.then((response) =>{
				this.$emit('request-cos');
			})
			.catch(function(error){
				console.log(error)
			});
			/*
			setTimeout( () => {
				this.$emit('request-cos');
			},100);*/
			
		}
	},
  	template: `
  	<div>
	  	<div style="position: relative;">
			<div v-bind:style="[showX ? {'width' : '80%'} : {'width' : '100%'}]" class="cardMobilCos">
				<button v-on:click.prevent="showX = !showX" class="xBtn">x</button>
				<h2>{{produs.titlu}}</h2>
				<div class="cardQty">
					<p class="qtyP">{{produs.cant}}</p>
				</div>
				<a v-on:click.prevent="productQuantity('plus',produs.id_produs)" href="" class="qtyPlus">+</a>
				<a v-on:click.prevent="productQuantity('minus',produs.id_produs)" href="" class="qtyMinus">-</a>
				<p class="bucati">buc.</p>
				<p class="pret">€{{produs.pret*produs.cant | 2dec}}</p>
			</div>
			<a v-show="showX" v-on:click.prevent="productQuantity('delete',produs.id_produs)" class="delBtn" href="">X</a>
		</div>
		<br>
	</div>`
})


new Vue({
	el: "#app-id",
	data:{
		cos: [''],
		total: 5,
		showX: false
	},
	created: function()
	{
		this.requestCos();
	},
	methods:{
		requestCos: function()
		{
			axios.get('../includes/cos_mobile_inc.php')
			.then((response) => {
				this.cos = response.data;
				this.updateTotal();
				
			})
			.catch(function(error){
				console.log(error);
			});

		},
		updateTotal: function()
		{
			this.total = 5;
			for(var i=0; i<this.cos.length;i++)
			{

				this.total = this.total + parseFloat(this.cos[i].pret*this.cos[i].cant);
			}
		}

		
	}
});
