$(document).ready(function(){

	$.ajax({
	  method: "GET",
	  url: './api/products/chart/bestsales'
	})
	  .done(function( response ) {
	  		

		var data = {
		    labels: response.labels,
		    datasets: [
		        {
		            label: "My Second dataset",
		            fillColor: "rgba(151,187,205,0.5)",
		            strokeColor: "rgba(151,187,205,0.8)",
		            highlightFill: "rgba(151,187,205,0.75)",
		            highlightStroke: "rgba(151,187,205,1)",
		            data: response.values
		        }
		    ]
		};


		var ctx = $("#myChart").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		var myNewChart = new Chart(ctx).Bar(data);


	 
	});




});
