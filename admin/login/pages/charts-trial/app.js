$(document).ready(function(){
	$.ajax({
		url: "charts-trial/data.php",
		method: "GET",
		success: function(data){
			console.log(JSON.parse(data));
			var data = JSON.parse(data);
			
			var order_name = [];
			var quantity = [];

			for(var i in data){
				order_name.push(data[i].order_name);
				quantity.push(data[i].quantity);
			}

			var chartdata = {
				labels: order_name,
				datasets : [
					{
						label: 'Summary of Orders',
						backgroundColor: 'rgba(128,42,42)',
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundColor: 'rgba(198,113,113,1)',
						hoverBorderColor: 'rgba(128,42,42)',
						data: quantity
					}
				]
			};

			var ctx = $("#myCanvasBarGraph");

			var barGraph = new Chart(ctx,{
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);	
		}
	});

});

