define(["Backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			"":"home",
			home: "home",
			market: "market",
			order: "order",
			mine: "mine"
		},
		home: function(){
			require(["modules/home/home.js"],function(home){
				home.init();
				/*home.animations();
				home.lunbo();*/
			});
		},
		market: function(){
			require(["modules/market/market.js"],function(market){
				market.init();
			});
		},
		order: function(){
			require(["modules/order/order.js"],function(order){
				order.init();
			});
		},
		mine: function(){
			require(["modules/mine/mine.js"],function(mine){
				mine.init();
			});
		},
	});
	return new Router();
});
