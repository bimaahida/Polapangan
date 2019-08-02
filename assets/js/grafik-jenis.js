var ctx = document.getElementById("chart_perjenis");
var label_value = ["Blimbing", "Lowokwaru", "Kedungkandang","Klojen","Sukun","Sukun"];
i = 0;
var label = [];
var dataSetEnergi = [];
var dataSetProtein = [];

var color = [
    ["rgba(255, 99, 132, 0.2)","rgba(255,99,132,1)"],
    ["rgba(54, 162, 235, 0.2)","rgba(54, 162, 235, 1)"],
    ["rgba(255, 206, 86, 0.2)","rgba(255, 206, 86, 1)"],
    ["rgba(75, 192, 192, 0.2)","rgba(75, 192, 192, 1)"],
    ["rgba(153, 102, 255, 0.2)","rgba(153, 102, 255, 1)"],
    ["rgba(135, 211, 124, 0.2)","rgba(135, 211, 124, 1)"],
    ["rgba(82, 179, 217, 0.2)","rgba(82, 179, 217, 1)"],
    ["rgba(239, 72, 54, 0.2)","rgba(239, 72, 54, 1)"]
];
data_perjenis.forEach(el => {
    dataSetEnergi.push(el.skor_ake);
    dataSetProtein.push(el.skor_protein)
    // var tmp = {
    //     label: el.jenis_pangan,
    //     backgroundColor: color[i][0],
    //     borderColor: color[i][1],
    //     borderWidth: 1, 
    //     data: el.skor_ake,
    // }
    // dataSet.push(tmp);
    label.push(el.jenis_pangan);
    // i++;
});

// console.log(data_perjenis);


var myChart = new Chart(ctx, {
    type: 'bar',
    labels: label,
    data: {
        labels: label,
        datasets: [
            {
                label: "Protein",
                backgroundColor: color[0][0],
                borderColor: color[0][1],
                borderWidth: 1, 
                data: dataSetProtein,
            },
            {
                label: "Energi",
                backgroundColor: color[1][0],
                borderColor: color[1][1],
                borderWidth: 1, 
                data: dataSetEnergi,
            },
        ],
    },
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});