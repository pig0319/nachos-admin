$(document).ready(function(){
	$.ajax({
		url: "charts-trial/categoryData.php",
		method: "GET",
		success: function(data){
			console.log(JSON.parse(data));
			var data = JSON.parse(data);
			
			var category = [];
			var sum = [];

			for(var i in data){
				category.push(data[i].category);
				sum.push(data[i].count);
			}

			var chartdata = {
				labels: category,
				datasets : [
					{
						label: 'Summary of Orders',
						backgroundColor: 'rgba(128,42,42)',
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundColor: 'rgba(198,113,113,1)',
						hoverBorderColor: 'rgba(128,42,42)',
						data: sum
					}
				]
			};

			var ctx = $("#myCanvasBarGraphCategory");

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