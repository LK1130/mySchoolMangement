<template>
    <apexcharts type="line" :options="chartOptions" :series="series" :stroke="stroke" class="chartV2">
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
.chartV2 {
    width: 40em;
}

@media screen and (max-width: 765px) {
    .chartV2 {
        width: 25em;
    }
}
</style>
