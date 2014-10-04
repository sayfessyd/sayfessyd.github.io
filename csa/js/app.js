var app = angular.module("CSA", ['ngAnimate']);

app.controller("CustomerController", function($scope)
{
	$scope.customers = [
	{
		first_name: "Lorem",
		last_name: "Ipsum",
		company: "Apple",
		gender: "male",
		date_of_birth: "14/07/1951",
		email: "--@--.com",
		join_date: "10/09/2014"
	},
	{
		first_name: "Lorem",
		last_name: "Ipsum",
		company: "Apple",
		gender: "female",
		date_of_birth: "10/11/1951",
		email: "--@--.com",
		join_date: "10/09/2014"
	},
	{
		first_name: "Lorem",
		last_name: "Ipsum",
		company: "Apple",
		gender: "male",
		date_of_birth: "10/09/1979",
		email: "contact@gmail.com",
		join_date: "10/09/2014"
	},
	{
		first_name: "Lorem",
		last_name: "Ipsum",
		company: "Apple",
		gender: "male",
		date_of_birth: "11/11/1985",
		email: "contact@yahoo.fr",
		join_date: "10/09/2014"
	},
	{
		first_name: "Lorem",
		last_name: "Ipsum",
		company: "Apple",
		gender: "male",
		date_of_birth: "24/06/1994",
		email: "contact@yahoo.com",
		join_date: "10/09/2014"
	}
	];
});

app.controller("OrderController", function($scope)
{

});

app.controller("StockController", function($scope)
{

});