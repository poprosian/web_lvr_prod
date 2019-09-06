Vue.filter('2dec', function(value){
	return value.toFixed(2);
});

Vue.component('lista-produse',{
	props: ['produs','numarcos'],
	methods:{
		addToCos: function(id,cant){
			axios.get('../includes/cos_inc.php',{params:{
				id_produs: id,
				cantitate: cant
				}
			})
			.then((response) => {
				badge(response.data);
			})
			.catch(function(error){
				console.log(error);
			});
		}
	},
	template: `
		<div class="col-xl-3 col-sm-6 col-12  pdg">
			<div class="card cCard">
				<div class="text-center">
					<img style="max-height: 170px; max-width: 170px;" v-bind:src="'/images/product_images/' + produs.image" alt=""  class="card-img-top">
				</div>
				<div>
				
					<h5 class="card-title cardTitle">{{produs.titlu}}</h5>
					<div class="sideHr"></div>
					<br>
					<p class="card-text cardText">€{{produs.pret * 1 | 2dec}}</p>
					<form method="POST" action="includes/cos_inc.php">
						<input style="display:none;" type="number" value="1" class="float-left" maxlength="2" min="1" name="cantitate">
						<input style="display:none;"  value="{{produs.id_produs}}" name="id_produs">
						<input v-on:click.prevent="addToCos(produs.id_produs, 1)"" type="submit" onclick="notif();" class="cardButton  btn-block mt-auto" value="ADAUGA IN COS">
					</form>
				</div>
			</div>
		</div>
	`
});


new Vue({
	el: "#listaProduse",
	data:{
		produse: [''],
		sideMenu: true,
		mobileMenu: 0,
		badgeCount: 1,
		globalSearch: ''
	},
	created: function(){
		this.requestProduse("toate");
	},
	methods:{
		requestProduse: function(categorie,search=0,globalSearch=undefined){
			if(search==0)
			{
				axios.get('../includes/product_list_inc.php',{params:{
					submitCategorie: categorie
					}
				})
				.then((response) => {
					if(Array.isArray(response.data))
					{
						this.produse = response.data;
						this.mobileMenu = 0;

					}
					
				})
				.catch(function(error){
					console.log(error);
				});
			}
			else
			{
				axios.get('../includes/global_search_inc.php',{params:{
					globalSearch: globalSearch
					}
				})
				.then((response) => {
					this.produse = response.data;
					this.mobileMenu = 0;
				})
				.catch(function(error){
					console.log(error);
				});
			}
		},
		requestSearch: function(test){
			console.log(test);
		},
		toggleMobileMain: function(){
			if(this.mobileMenu == 1)
				this.mobileMenu = 0;
			else
				this.mobileMenu = 1;

		},
		toggleMobileNidas: function(){
			if(this.mobileMenu == 2)
				this.mobileMenu = 0;
			else
				this.mobileMenu = 2;

		}
	}
});