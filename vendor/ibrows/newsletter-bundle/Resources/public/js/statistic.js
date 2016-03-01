var ns = ibrows_newsletter.namespace('ibrows_newsletter');

ns.statistic = function($options){

    var $self = this;
    var $options = $options;
    var $google = google;

    this.ready = function(){
        $google.load("visualization", "1", {packages:["corechart"]});
        $google.setOnLoadCallback(this.drawCharts);
    }

    this.drawCharts = function(){
        $self.drawReadPieChart();
        $self.drawJobPieChart();
        $self.drawJobLineChart();
    }

    this.drawReadPieChart = function(){
        var $data = $google.visualization.arrayToDataTable($options.readPieChart.data);
        var $chart = new $google.visualization.PieChart(document.getElementById($options.selectors.readPieChart));
        $chart.draw($data, $options.readPieChart.options);
    }

    this.drawJobPieChart = function(){
        var $data = $google.visualization.arrayToDataTable($options.jobPieChart.data);
        var $chart = new $google.visualization.PieChart(document.getElementById($options.selectors.jobPieChart));
        $chart.draw($data, $options.jobPieChart.options);
    }

    this.drawJobLineChart = function(){
        var $data = $google.visualization.arrayToDataTable($options.jobLineChart.data);
        var $chart = new $google.visualization.LineChart(document.getElementById($options.selectors.jobLineChart));
        $chart.draw($data, $options.jobLineChart.options);
    }

}