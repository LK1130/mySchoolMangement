<template>
    <apexcharts type="line" :options="chartOptions" :series="series" :stroke="stroke" class="chart">
    </apexcharts>
</template>

<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    name: 'ChartV2',
    components: {
        apexcharts: VueApexCharts,
    }
}
</script>

<style>
.chart {
    width: 55em;
}

@media screen and (max-width: 765px) {
    .chart {
        width: 22em;
    }
}
</style>
