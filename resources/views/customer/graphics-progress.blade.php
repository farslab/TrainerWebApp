@extends('app')
@section('title','Gelişim İstatistikleri')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Kilo(kg)</h3>

                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="weightChart" style="
                                         min-height: 250px;
                                         height: 250px;
                                         max-height: 250px;
                                         max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Boy(cm)</h3>

                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="heightChart" style="
                                         min-height: 250px;
                                         height: 250px;
                                         max-height: 250px;
                                         max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Yağ Oranı(%)</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="bodyFatChart" style="
                                         min-height: 250px;
                                         height: 250px;
                                         max-height: 250px;
                                         max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Kas Kütlesi(kg)</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="muscleMassChart" style="
                                         min-height: 250px;
                                         height: 250px;
                                         max-height: 250px;
                                         max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Beden Kitle Endeksi</h3>

                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="bodyMassIndexChart" style="
                                         min-height: 250px;
                                         height: 250px;
                                         max-height: 250px;
                                         max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<script>
    // Weight Chart
    var weightData = {
        labels: <?php echo $dates; ?>,
        datasets: [{
            label: "Kilo",
            backgroundColor: "rgba(75,192,192,0.2)",
            borderColor: "rgba(75,192,192,1)",
            borderWidth: 1,
            data: <?php echo json_encode($weights); ?>,
        }]
    };

    var weightCtx = document.getElementById('weightChart').getContext('2d');
    var weightChart = new Chart(weightCtx, {
        type: 'line',
        data: weightData,
    });

    // Height Chart
    var heightData = {
        labels: <?php echo $dates; ?>,
        datasets: [{
            label: "Boy",
            backgroundColor: "rgba(192,75,192,0.2)",
            borderColor: "rgba(192,75,192,1)",
            borderWidth: 1,
            data: <?php echo json_encode($heights); ?>,
        }]
    };

    var heightCtx = document.getElementById('heightChart').getContext('2d');
    var heightChart = new Chart(heightCtx, {
        type: 'line',
        data: heightData,
    });

    // Body Fat Chart
    var bodyFatData = {
        labels: <?php echo $dates; ?>,
        datasets: [{
            label: "Yağ Oranı",
            backgroundColor: "rgba(192,192,75,0.2)",
            borderColor: "rgba(192,192,75,1)",
            borderWidth: 1,
            data: <?php echo json_encode($bodyFatPercentages); ?>,
        }]
    };

    var bodyFatCtx = document.getElementById('bodyFatChart').getContext('2d');
    var bodyFatChart = new Chart(bodyFatCtx, {
        type: 'line',
        data: bodyFatData,
    });

    // Muscle Mass Chart
    var muscleMassData = {
        labels: <?php echo $dates; ?>,
        datasets: [{
            label: "Kas Kütlesi",
            backgroundColor: "rgba(75,192,75,0.2)",
            borderColor: "rgba(75,192,75,1)",
            borderWidth: 1,
            data: <?php echo json_encode($muscleMasses); ?>,
        }]
    };

    var muscleMassCtx = document.getElementById('muscleMassChart').getContext('2d');
    var muscleMassChart = new Chart(muscleMassCtx, {
        type: 'line',
        data: muscleMassData,
    });

    // Body Mass Index Chart
    var bodyMassIndexData = {
        labels: <?php echo $dates; ?>,
        datasets: [{
            label: "Beden Kitle Endeksi",
            backgroundColor: "rgba(192,75,75,0.2)",
            borderColor: "rgba(192,75,75,1)",
            borderWidth: 1,
            data: <?php echo json_encode($bodyMassIndexes); ?>,
        }]
    };

    var bodyMassIndexCtx = document.getElementById('bodyMassIndexChart').getContext('2d');
    var bodyMassIndexChart = new Chart(bodyMassIndexCtx, {
        type: 'line',
        data: bodyMassIndexData,
    });
</script>

@endsection