import ApexCharts from "apexcharts";
import es from "apexcharts/dist/locales/es.json";

let series = JSON.parse(document.getElementById("line-chart").dataset.series);

let categories = JSON.parse(
    document.getElementById("line-chart").dataset.categories
);

let options = {
    series,
    colors: [
        "#008FFB", // blue
        "#00E396", // green
        "#FEB019", // yellow
        "#FF4560", // red
        "#775DD0", // purple
    ],
    chart: {
        locales: [es],
        defaultLocale: "es",
        height: 350,
        type: "area",
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "straight",
        width: 2,
    },
    xaxis: {
        type: "datetime",
        categories,
        labels: {
            datetimeUTC: true,
            format: "MMM yyyy",
        },
    },
    tooltip: {
        x: {
            format: "dd/MM/yy HH:mm",
        },
    },
    legend: {
        position: "top",
    },
    noData: {
        text: "Loading data...",
    },
};

var chart = new ApexCharts(document.querySelector("#line-chart"), options);
chart.render();
