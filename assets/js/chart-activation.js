
let chartLabel = [25010, 22110, 29010, 32020, 25010, 29010, 28010,27010,31010,20010];
chartData = {
    labels: ["Apr 19", "Apr 18","Apr 17","Apr 16","Apr 15","Apr 14","Apr 13","Apr 12","Apr 11","Apr 10",],
    datasets: [
        {
            label: "",
            fill: true,
            backgroundColor: 'rgba(42, 156, 245, 0.9)',
            borderColor: 'rgba(42, 156, 245)',
            data: chartLabel,
        }]
};


createChart('chartChart', chartData);

function createChart(id,data){
    var ctx = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem) {
                        return tooltipItem.yLabel;
                    }
                }
            }
        }
    });

}

setTimeout(function(){
    document.getElementById('chartChart').style.height = '243px'; 
}, 100);