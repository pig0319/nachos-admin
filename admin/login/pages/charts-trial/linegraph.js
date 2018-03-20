$(document).ready(function(){
	$.ajax({
		url: "lineGraphData.php",
		type: "GET",
		success: function(data){
			var data = JSON.parse(data);
			console.log(data);	

			var total = [];
			var month = [];
			
			for(var i in data){
				if(data[i] == '01'){
					data[i] = "January";
				}
				month.push("Month: "+data[i].date);
				total.push(data[i].total);


			}

			var chartdata = {
				labels: month,
				datasets: [
					{
					label: "Monthly Sales",
					fill: false,
					lineTension: 0.1,
					backgroundColor: 'rgba(128,42,42)',
					borderColor: 'rgba(128,42,42)',
					pointHoverBackgroundColor: 'rgba(128,42,42)',
					pointHoverBorderColor: 'rgba(128,42,42)',
					data: total
				}
				]	
			};

			var ctx = $("#myCanvasLineGraph");

			var LineGraph = new Chart(ctx,{
				
				type: 'line',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}

	});
});