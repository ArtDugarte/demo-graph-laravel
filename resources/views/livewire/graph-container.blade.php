<div>
    <h1>
        Apex Charts Laravel Test
    </h1>

    <div id="line-chart" data-series="{{ json_encode($series) }}" data-categories="{{ json_encode($categories) }}"></div>


</div>

@vite(['resources/js/line-chart.js'])
