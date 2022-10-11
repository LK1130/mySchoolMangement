<template>
        <apexcharts width="500" height="350" type="line" :options="chartOptions" :series="series"></apexcharts>
</template>

<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    name: 'Chart',
    components: {
        apexcharts: VueApexCharts,
    }
}
</script>
