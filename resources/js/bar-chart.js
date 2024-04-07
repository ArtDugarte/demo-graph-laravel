import ApexCharts from "apexcharts";
import es from "apexcharts/dist/locales/es.json";

let series = JSON.parse(document.getElementById("bar-chart").dataset.series);

let categories = JSON.parse(
    document.getElementById("bar-chart").dataset.categories
);

var options = {
    series: series,
    colors: ["#13b256", "#003333"],
    chart: {
        locales: [es],
        defaultLocale: "es",
        type: "bar",
        height: 300,
    },
    plotOptions: {
        bar: {
            horizontal: true,
            dataLabels: {
                position: "top",
            },
        },
    },
    dataLabels: {
        enabled: true,
        offsetX: -6,
        style: {
            fontSize: "12px",
            colors: ["#fff"],
        },
    },
    stroke: {
        show: true,
        width: 1,
        colors: ["#fff"],
    },
    tooltip: {
        shared: true,
        intersect: false,
    },
    xaxis: {
        categories,
        labels: {
            style: {
                fontSize: "10px",
                fontWeight: 700,
                fontFamily: "Open Sans, Nunito, sans-serif",
                colors: "#9ca3af",
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                fontSize: "10px",
                fontWeight: 700,
                fontFamily: "Open Sans, Nunito, sans-serif",
                colors: "#9ca3af",
            },
        },
    },
    legend: {
        position: "bottom",
        fontFamily: "Open Sans, Nunito, sans-serif",
    },
    grid: {
        borderColor: "#f1f5f9",
        yaxis: {
            lines: {
                show: true,
            },
        },
    },
};

var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
chart.render();
