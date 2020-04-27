<template>
  <div class="container">
    <div class="row1">
      <div class="col1">
        <div id="div1">
          <h3>Body Temperature</h3>
        </div>
        <div id="div2">
          <vue-chart type="bar" :data="chartData2" width="400" height="200"></vue-chart>
        </div>
      </div>
      <div class="col2">
        <div id="div1">
          <h3>Heart-Rate</h3>
        </div>
        <div id="div2">
          <vue-chart type="line" :data="chartData1" width="400" height="200"></vue-chart>
        </div>
      </div>
    </div>
    <div class="row2">
      <div class="col1">
        <div id="div1">
          <h3>Activity</h3>
        </div>
        <div id="div2">
          <vue-chart type="line" :data="chartData4" width="400" height="200"></vue-chart>
        </div>
      </div>
      <div class="col2">
        <div id="div1">
          <h3>Heart-Rate Variability</h3>
        </div>
        <div id="div2">
          <vue-chart type="line" :data="chartData3" width="400" height="200"></vue-chart>
        </div>
      </div>
    </div>
    <div class="row3">
      <div id="div1">
        <h3>Covid-19 Heatmap</h3>
      </div>
      <div id="div2">
        <vue-google-heatmap :points="points" :width="1065" :height="650" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    chartData1: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [
        {
          label: "bpm",
          data: [85, 78, 90, 120, 110, 102],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)"
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)"
          ],
          borderWidth: 3
        }
      ]
    },
    chartData2: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [
        {
          label: "°F",
          data: [100, 98.3, 103, 102, 101, 99],
          backgroundColor: [
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)"
          ],
          borderColor: [
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(255, 159, 64, 1)"
          ],
          borderWidth: 3
        }
      ]
    },
    chartData3: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [
        {
          label: "Max",
          backgroundColor: "rgba(75, 192, 192, 0.2)",
          borderColor: "#3abd5d",
          data: [85, 102, 96, 185, 70, 72, 100]
        },
        {
          label: "Min",
          backgroundColor: "rgba(255, 99, 132, 0.21)",
          borderColor: "rgba(255, 99, 132, 1)",
          data: [28, 48, 40, 19, 56, 27, 45]
        }
      ],
      borderWidth: 3
    },
    chartData4: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [
        {
          label: "Steps",
          data: [8000, 3000, 8000, 7500, 10100, 9609],
          backgroundColor: [
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)"
          ],
          borderColor: [
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(255, 159, 64, 1)"
          ],
          borderWidth: 3
        }
      ]
    },
    points: [
      { lat: 37.786117, lng: -122.440119 },
      { lat: 37.786564, lng: -122.440209 },
      { lat: 37.786905, lng: -122.44027 },
      { lat: 37.786956, lng: -122.440279 },
      { lat: 37.800224, lng: -122.43352 },
      { lat: 37.800155, lng: -122.434101 },
      { lat: 37.80016, lng: -122.43443 },
      { lat: 37.800378, lng: -122.434527 },
      { lat: 37.800738, lng: -122.434598 },
      { lat: 37.800938, lng: -122.43465 },
      { lat: 37.801024, lng: -122.434889 },
      { lat: 37.800955, lng: -122.435392 },
      { lat: 37.800886, lng: -122.435959 }
    ],
    options: {
      title: {
        display: true,
        text: "Custom Chart Title"
      },
      backgroundColor: "rgba(255, 159, 64, 1)",
      scales: {
        yAxes: [
          {
            gridLines: {
              lineWidth: 0
            }
          }
        ],
        xAxes: [
          {
            gridLines: {
              lineWidth: 0
            }
          }
        ]
      },

      backgroundColor: "#000"
    }
  })
  //   components: {
  //     highcharts: areaspline
  //   },
  //   data() {
  //     return {
  //       chartOptions: {
  //         chart: {
  //           type: "areaspline"
  //         },
  //         title: {
  //           text: "Average fruit consumption during one week"
  //         },
  //         legend: {
  //           layout: "vertical",
  //           align: "left",
  //           verticalAlign: "top",
  //           x: 150,
  //           y: 100,
  //           floating: true,
  //           borderWidth: 1,
  //           backgroundColor:
  //             Highcharts.defaultOptions.legend.backgroundColor || "#FFFFFF"
  //         },
  //         xAxis: {
  //           categories: [
  //             "Monday",
  //             "Tuesday",
  //             "Wednesday",
  //             "Thursday",
  //             "Friday",
  //             "Saturday",
  //             "Sunday"
  //           ],
  //           plotBands: [
  //             {
  //               // visualize the weekend
  //               from: 4.5,
  //               to: 6.5,
  //               color: "rgba(68, 170, 213, .2)"
  //             }
  //           ]
  //         },
  //         yAxis: {
  //           title: {
  //             text: "Fruit units"
  //           }
  //         },
  //         tooltip: {
  //           shared: true,
  //           valueSuffix: " units"
  //         },
  //         credits: {
  //           enabled: false
  //         },
  //         plotOptions: {
  //           areaspline: {
  //             fillOpacity: 0.5
  //           }
  //         },
  //         series: [
  //           {
  //             name: "John",
  //             data: [3, 4, 3, 5, 4, 10, 12]
  //           },
  //           {
  //             name: "Jane",
  //             data: [1, 3, 4, 3, 3, 5, 4]
  //           }
  //         ]
  //       }
  //     };
  //   }
};
</script>

<style scoped>
.container {
  height: 100%;
}

h3 {
  font-weight: 800;
}

.row1 {
  display: flex;
}

.row2 {
  display: flex;
}

.col1 {
  width: 1000px;
  height: 350px;
  text-align: center;
  align-content: center;
  margin: 50px 20px;
  padding: 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
}
.col2 {
  width: 1000px;
  height: 350px;
  text-align: center;
  vertical-align: center;
  padding: 20px 20px;

  align-items: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;

  margin: 50px 20px;
}

#div1 {
  text-align: left;
  margin-left: 10px;
}

.row3 {
  width: 97%;
  height: 80%;
  text-align: center;
  align-content: center;
  margin: 50px 20px;
  padding: 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
}
</style>
