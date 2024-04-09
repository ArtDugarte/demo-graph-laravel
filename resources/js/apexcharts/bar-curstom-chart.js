import ApexCharts from "apexcharts";
import es from "apexcharts/dist/locales/es.json";

let series = JSON.parse(
    document.getElementById("bar-custom-chart").dataset.series
);

var options = {
    series: [
        {
            data: series.data,
        },
    ],
    chart: {
        type: "bar",
        height: 200,
        locales: [es],
        defaultLocale: "es",
    },
    plotOptions: {
        bar: {
            barHeight: "100%",
            distributed: true,
            horizontal: true,
            dataLabels: {
                position: "bottom",
            },
        },
    },
    colors: ["#13b256", "#EED818", "#96C93D", "#003333", "#6E807A"],
    dataLabels: {
        enabled: true,
        textAnchor: "start",
        style: {
            colors: ["#fff"],
            fontFamily: "Open Sans, Nunito, sans-serif",
        },
        formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val;
        },
        offsetX: 0,
        dropShadow: {
            enabled: true,
        },
    },
    stroke: {
        width: 1,
        colors: ["#fff"],
    },
    xaxis: {
        categories: series.categories,
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
            show: false,
        },
    },
    title: {
        text: "Más Usados",
        align: "center",
        floating: true,
    },
    tooltip: {
        theme: "dark",
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function () {
                    return "";
                },
            },
        },
    },
    legend: {
        fontFamily: "Open Sans, Nunito, sans-serif",
    },
};

var chart = new ApexCharts(
    document.querySelector("#bar-custom-chart"),
    options
);
chart.render();
