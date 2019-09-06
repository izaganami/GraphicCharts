<style>
    td->div
    {
        width: 100%;
    }
    table.table-bordered{
        border:3px solid ;
        margin-top:20px;
    }
    table.table-bordered > thead > tr > th{
        border:3px solid ;
    }
    table.table-bordered > tbody > tr > td{
        border:3px solid ;
    }
    iframe{
        display: none;
    }
    .btn-group
    {
        display: flex;
    }
    .btn-group button {
        background-color: #035096; /* EB background */
        border: 1px solid #035096; /* EB border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        float: left; /* Float the buttons side by side */
        display: flex;
        font-size: initial;
    }

    .btn-group button:not(:last-child) {
        border-right: none; /* Prevent double borders */
        display: flex;
    }

    /* Clear floats (clearfix hack) */
    .btn-group:after {
        content: "";
        clear: both;
        display: table;
        display: flex;
    }

    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #035096;
        display: flex;
    }
</style>
<script>
    function process(date){
        var parts = date.split("/");
        return new Date(parts[2], parts[1] - 1, parts[0]);
    }
    var Max0,Min0,Average0;
    function updateLegendLabel() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max0=max;
                    Min0=min;
                    Average0=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["stock A"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'stock A'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }





    var Max1,Min1,Average1;
    function updateLegendLabel1() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max1=max;
                    Min1=min;
                    Average1=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["ZC"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'ZC EST'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }






    var Max2,Min2,Average2;
    function updateLegendLabel2() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max2=max;
                    Min2=min;
                    Average2=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["ZC"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'ZC OUEST'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }





    var Max3,Min3,Average3;
    function updateLegendLabel3() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max3=max;
                    Min3=min;
                    Average3=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["Stock B"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'Stock B'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }






    var Max4,Min4,Average4;
    function updateLegendLabel4() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max4=max;
                    Min4=min;
                    Average4=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["Stock C"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'Stock C'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'
                }
            }
        });
    }



    var Max5,Min5,Average5;
    function updateLegendLabel5() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max5=max;
                    Min5=min;
                    Average5=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["Stock D"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'Stock D'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }




    var Max6,Min6,Average6;
    function updateLegendLabel6() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max6=max;
                    Min6=min;
                    Average6=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["SC EST"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'SCH1'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }




    var Max7,Min7,Average7;
    function updateLegendLabel7() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max7 =max;
                    Min7=min;
                    Average7=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["SC OUEST"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'SCH2'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }




    var Max8,Min8,Average8;
    function updateLegendLabel8() {
        var chrt = !this.chart ? this : this.chart;
        chrt.update({
            legend: {
                labelFormatter: function() {
                    var lastVal = this.yData[this.yData.length - 1],
                        chart = this.chart,
                        xAxis = this.xAxis,
                        points = this.points,
                        avg = 0,
                        counter = 0,
                        min, max;

                    points.forEach(function(point, inx) {
                        if (!min || min > point.y) {
                            min = point.y;
                        }

                        if (!max || max < point.y) {
                            max = point.y;
                        }

                        counter++;
                        avg += point.y;
                    });
                    counter--;
                    avg /= counter;
                    Max8=max;
                    Min8=min;
                    Average8=avg;
                    if(typeof unit0==='undefined')
                    {
                        unit0=["BPL"]
                    }
                    if(typeof car==='undefined')
                    {
                        car=["DAOUI"]
                    }
                    return this.name +
                        '<br>' +'<span style="color: red">Carreau:' + 'DAOUI'  + '</span><br>' +
                        '<br>' +'<span style="color: red">Unit:' + unit0  + '</span><br>' +
                        '<br>' + 'Now: ' + lastVal + '<br>' +
                        '<span style="color: red">Min: ' + min + '</span><br/>' +
                        '<span style="color: red">Max: ' + max + '</span><br/>' +
                        '<span style="color: red">Average: ' + avg.toFixed(2); + '</span><br/>'



                }
            }
        });
    }



    var datmax0=67;
    var datmin0=64;
</script>
<?php
include 'connection.php';
$conn = OpenCon();
mysqli_query($conn,'SET NAMES utf8');
?>

<?php
$record0=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='stock A'  ");
$list0 = array();
while($row=mysqli_fetch_assoc($record0))
{
    $list0[] = $row;
}
$array0=array();
$time0=array();
for($i = 0; $i < count($list0); $i++)
{
    $array0[$i]=$list0[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time0[$i]=$list0[$i]['Dateperelevement'];
}




$record1=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='ZC EST '  ");
$list1 = array();
while($row=mysqli_fetch_assoc($record1))
{
    $list1[] = $row;
}
$array1=array();
$time1=array();
for($i = 0; $i < count($list1); $i++)
{
    $array1[$i]=$list1[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time1[$i]=$list1[$i]['Dateperelevement'];
}



$record2=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='ZC OUEST '  ");
$list2 = array();
while($row=mysqli_fetch_assoc($record2))
{
    $list2[] = $row;
}
$array2=array();
$time2=array();
for($i = 0; $i < count($list2); $i++)
{
    $array2[$i]=$list2[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time2[$i]=$list2[$i]['Dateperelevement'];
}




$record3=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='Stock B '  ");
$list3 = array();
while($row=mysqli_fetch_assoc($record3))
{
    $list3[] = $row;
}
$array3=array();
$time3=array();
for($i = 0; $i < count($list3); $i++)
{
    $array3[$i]=$list3[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time3[$i]=$list3[$i]['Dateperelevement'];
}

$record4=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='Stock C '  ");
$list4 = array();
while($row=mysqli_fetch_assoc($record4))
{
    $list4[] = $row;
}
$array4=array();
$time4=array();
for($i = 0; $i < count($list4); $i++)
{
    $array4[$i]=$list4[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time4[$i]=$list4[$i]['Dateperelevement'];
}



$record5=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='Stock D '  ");
$list5 = array();
while($row=mysqli_fetch_assoc($record5))
{
    $list5[] = $row;
}
$array5=array();
$time5=array();
for($i = 0; $i < count($list5); $i++)
{
    $array5[$i]=$list5[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time5[$i]=$list5[$i]['Dateperelevement'];
}



$record6=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='SCH1'  ");
$list6 = array();
while($row=mysqli_fetch_assoc($record6))
{
    $list6[] = $row;
}
$array6=array();
$time6=array();
for($i = 0; $i < count($list6); $i++)
{
    $array6[$i]=$list6[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time6[$i]=$list6[$i]['Dateperelevement'];
}



$record7=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference='BTR') AND Nom='BPL' AND echantillon='SCH2'  ");
$list7 = array();
while($row=mysqli_fetch_assoc($record7))
{
    $list7[] = $row;
}
$array7=array();
$time7=array();
for($i = 0; $i < count($list7); $i++)
{
    $array7[$i]=$list7[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time7[$i]=$list7[$i]['Dateperelevement'];
}



$record8=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,Nom,echantillon FROM tbl_name  WHERE (Qualite='BTR' OR Reference LIKE '%BTR%') AND Nom='BPL' AND (echantillon='DAOUI' OR echantillon='Entree Laverie')  ");
$list8 = array();
while($row=mysqli_fetch_assoc($record8))
{
    $list8[] = $row;
}
$array8=array();
$time8=array();
for($i = 0; $i < count($list8); $i++)
{
    $array8[$i]=$list8[$i]['Resultat']/*.$list[$i]['Unite']*/;
    $time8[$i]=$list8[$i]['Dateperelevement'];
}



?>
<script type="text/javascript" language="javascript">
    var time0 = new Array();
    <?php foreach($time0 as $key => $val){ ?>
    time0.push('<?php echo $val; ?>');
    <?php } ?>
    var array0 = new Array();
    <?php foreach($array0 as $key => $val){ ?>
    array0.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>


<script type="text/javascript" language="javascript">
    var time1 = new Array();
    <?php foreach($time1 as $key => $val){ ?>
    time1.push('<?php echo $val; ?>');
    <?php } ?>
    var array1 = new Array();
    <?php foreach($array1 as $key => $val){ ?>
    array1.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>


<script type="text/javascript" language="javascript">
    var time2 = new Array();
    <?php foreach($time2 as $key => $val){ ?>
    time2.push('<?php echo $val; ?>');
    <?php } ?>
    var array2 = new Array();
    <?php foreach($array2 as $key => $val){ ?>
    array2.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>


<script type="text/javascript" language="javascript">
    var time3 = new Array();
    <?php foreach($time3 as $key => $val){ ?>
    time3.push('<?php echo $val; ?>');
    <?php } ?>
    var array3 = new Array();
    <?php foreach($array3 as $key => $val){ ?>
    array3.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>

<script type="text/javascript" language="javascript">
    var time4 = new Array();
    <?php foreach($time4 as $key => $val){ ?>
    time4.push('<?php echo $val; ?>');
    <?php } ?>
    var array4 = new Array();
    <?php foreach($array4 as $key => $val){ ?>
    array4.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>

<script type="text/javascript" language="javascript">
    var time5 = new Array();
    <?php foreach($time5 as $key => $val){ ?>
    time5.push('<?php echo $val; ?>');
    <?php } ?>
    var array5 = new Array();
    <?php foreach($array5 as $key => $val){ ?>
    array5.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>


<script type="text/javascript" language="javascript">
    var time6 = new Array();
    <?php foreach($time6 as $key => $val){ ?>
    time6.push('<?php echo $val; ?>');
    <?php } ?>
    var array6 = new Array();
    <?php foreach($array6 as $key => $val){ ?>
    array6.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>


<script type="text/javascript" language="javascript">
    var time7 = new Array();
    <?php foreach($time7 as $key => $val){ ?>
    time7.push('<?php echo $val; ?>');
    <?php } ?>
    var array7 = new Array();
    <?php foreach($array7 as $key => $val){ ?>
    array7.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>



<script type="text/javascript" language="javascript">
    var time8 = new Array();
    <?php foreach($time8 as $key => $val){ ?>
    time8.push('<?php echo $val; ?>');
    <?php } ?>
    var array8 = new Array();
    <?php foreach($array8 as $key => $val){ ?>
    array8.push(parseFloat('<?php echo $val; ?>'));
    <?php } ?>
</script>

<!DOCTYPE html>
<html>
<head>.

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body id="body">



<table class="table table-borderless table-dark">
    <tbody>
    <tr>
<form action="#" method="post" >

    <td style="width: 30px">
    <table class="table table-borderless">
    <tbody>
        <tr>
        <td>
    <label for="start"><font color="white">Start date:</font></label>

    <input type="date" id="start" name="start" data-date="" data-date-format="DD MMMM YYYY"
           value="22/07/2018"
           min="01/01/2000" max="31/12/2019">
        </td>
    </tr>
    <tr>
        <td>
    <label for="end"><font color="white">End date:&nbsp&nbsp</font></label>

    <input type="date" id="end" name="end" data-date="" data-date-format="DD MMMM YYYY"
           value="22/07/2018"
           min="02/01/2000" max="01/01/2020">
        </td>
    </tr>
    </tbody>
    </table>
<td style="width: 120px;padding-top: 30px">
Qualite<br/><br/>
    <input type="checkbox" name="check_list[]" value="THT"><label>THT</label><br/>
    <input type="checkbox" name="check_list[]" value="HTN"><label>HTN</label><br/>
    <input type="checkbox" name="check_list[]" value="HTM"><label>HTM</label><br/>
    <input type="checkbox" name="check_list[]" value="MT"><label>MT</label><br/>
    <input type="checkbox" name="check_list[]" value="BTR"><label>BTR</label><br/>
    <input type="checkbox" name="check_list[]" value="BT"><label>BT</label><br/>
    <input type="checkbox" name="check_list[]" value="TBT"><label>TBT</label><br/>
    <input type="checkbox" name="check_list[]" value="BTN"><label>BTN</label><br/>
        <input type="checkbox" name="check_list[]" value="Phosphate"><label>Phosphate</label><br/>


    </td>
    <td style="padding-top: 30px">
        Nom<br/><br/>
    <input type="checkbox" name="unit_list[]" value="BPL"><label>BPL</label><br/>
    <input type="checkbox" name="unit_list[]" value="MgO"><label>MgO</label><br/>
    <input type="checkbox" name="unit_list[]" value="SiO2 T"><label>SiO2</label><br/>
    <input type="checkbox" name="unit_list[]" value="Cd"><label>Cd</label><br/>
    </td>
</tr>
    <tr>
        <td>
            <input id='sub' type="submit" class="btn btn-light" name="submit" value="Generate"/>

        </td>
    </tr>


</form>
    </tbody>
<script>
    var datmax0,datmin0;
    <?php

    if(isset($_POST['submit'])){//to run PHP script on submit
    if(!empty($_POST['check_list']) && !empty($_POST['unit_list'])  && !empty($_POST['start']) && !empty($_POST['end']) ){
    // Loop to store and display values of individual checked checkbox.
    $check0=array();
    foreach($_POST['check_list'] as $selected)
    {
        array_push($check0,$selected);
    }
    $unit0=array();
    foreach($_POST['unit_list'] as $selected)
    {
        array_push($unit0,$selected);
    }
    $car0=array();
    /*foreach($_POST['car_list'] as $selected)
    {
        array_push($car0,$selected);
    }*/
    $start = date('d/m/Y', strtotime($_POST['start']));
    $end =date('d/m/Y', strtotime($_POST['end']));
    $ncar0=join("','",$car0);
    $nunit0=join("','",$unit0);
    $ncheck0=join("','",$check0);
    $request0=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0'))  AND Nom IN ('$nunit0') AND echantillon='stock A'  ");
    $request1=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='ZC EST '  ");
    $request2=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='ZC OUEST '  ");
    $request3=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='Stock B'  ");
    $request4=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='Stock C'  ");
    $request5=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='Stock D'  ");
    $request6=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='SCH1'  ");
    $request7=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0')) AND Nom IN ('$nunit0') AND echantillon='SCH2'  ");
    $request8=mysqli_query($conn,"SELECT  Resultat,Unite,Dateperelevement,echantillon FROM tbl_name  WHERE (Qualite IN ('$ncheck0') OR Reference IN ('$ncheck0'))  AND Nom IN ('$nunit0') AND (echantillon='DAOUI' OR echantillon='Entree Laverie')  ");




    $list0 = array();
    while($row=mysqli_fetch_assoc($request0))
    {
        $list0[] = $row;
    }
    $array0=array();
    $time0=array();
    for($i = 0; $i < count($list0); $i++)
    {
        $array0[$i]=$list0[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time0[$i]=$list0[$i]['Dateperelevement'];
    }





    $list1 = array();
    while($row=mysqli_fetch_assoc($request1))
    {
        $list1[] = $row;
    }
    $array1=array();
    $time1=array();
    for($i = 0; $i < count($list1); $i++)
    {
        $array1[$i]=$list1[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time1[$i]=$list1[$i]['Dateperelevement'];
    }




    $list2 = array();
    while($row=mysqli_fetch_assoc($request2))
    {
        $list2[] = $row;
    }
    $array2=array();
    $time2=array();
    for($i = 0; $i < count($list2); $i++)
    {
        $array2[$i]=$list2[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time2[$i]=$list2[$i]['Dateperelevement'];
    }




    $list3 = array();
    while($row=mysqli_fetch_assoc($request3))
    {
        $list3[] = $row;
    }
    $array3=array();
    $time3=array();
    for($i = 0; $i < count($list3); $i++)
    {
        $array3[$i]=$list3[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time3[$i]=$list3[$i]['Dateperelevement'];
    }





    $list4 = array();
    while($row=mysqli_fetch_assoc($request4))
    {
        $list4[] = $row;
    }
    $array4=array();
    $time4=array();
    for($i = 0; $i < count($list4); $i++)
    {
        $array4[$i]=$list4[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time4[$i]=$list4[$i]['Dateperelevement'];
    }



    $list5 = array();
    while($row=mysqli_fetch_assoc($request5))
    {
        $list5[] = $row;
    }
    $array5=array();
    $time5=array();
    for($i = 0; $i < count($list5); $i++)
    {
        $array5[$i]=$list5[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time5[$i]=$list5[$i]['Dateperelevement'];
    }



    $list6 = array();
    while($row=mysqli_fetch_assoc($request6))
    {
        $list6[] = $row;
    }
    $array6=array();
    $time6=array();
    for($i = 0; $i < count($list6); $i++)
    {
        $array6[$i]=$list6[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time6[$i]=$list6[$i]['Dateperelevement'];
    }




    $list7 = array();
    while($row=mysqli_fetch_assoc($request7))
    {
        $list7[] = $row;
    }
    $array7=array();
    $time7=array();
    for($i = 0; $i < count($list7); $i++)
    {
        $array7[$i]=$list7[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time7[$i]=$list7[$i]['Dateperelevement'];
    }




    $list8 = array();
    while($row=mysqli_fetch_assoc($request8))
    {
        $list8[] = $row;
    }
    $array8=array();
    $time8=array();
    for($i = 0; $i < count($list8); $i++)
    {
        $array8[$i]=$list8[$i]['Resultat']/*.$list[$i]['Unite']*/;
        $time8[$i]=$list8[$i]['Dateperelevement'];
    }

    ?>









    var start = '<?php echo $start ;?>';
    var end = '<?php echo $end ;?>';





    var time0 = new Array();
    var timex = new Array();

    var time1 = new Array();
    var timex1 = new Array();

    var time2 = new Array();
    var timex2 = new Array();

    var time3 = new Array();
    var timex3 = new Array();

    var time4 = new Array();
    var timex4 = new Array();

    var time5 = new Array();
    var timex5 = new Array();

    var time6 = new Array();
    var timex6 = new Array();

    var time7 = new Array();
    var timex7 = new Array();

    var time8 = new Array();
    var timex8 = new Array();

    var i=0;
    var j=0;
    var k=0;
    var l=0;
    var m=0;
    var n=0;
    var o=0;
    var p=0;
    var q=0;



    <?php foreach($time0 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex.push('<?php echo $val; ?>');
    }
    time0.push('<?php echo $val; ?>');
    <?php } ?>


    <?php foreach($time1 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex1.push('<?php echo $val; ?>');
    }
    time1.push('<?php echo $val; ?>');
    <?php } ?>



    <?php foreach($time2 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex2.push('<?php echo $val; ?>');
    }
    time2.push('<?php echo $val; ?>');
    <?php } ?>



    <?php foreach($time3 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex3.push('<?php echo $val; ?>');
    }
    time3.push('<?php echo $val; ?>');
    <?php } ?>


    <?php foreach($time4 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex4.push('<?php echo $val; ?>');
    }
    time4.push('<?php echo $val; ?>');
    <?php } ?>


    <?php foreach($time5 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex5.push('<?php echo $val; ?>');
    }
    time5.push('<?php echo $val; ?>');
    <?php } ?>


    <?php foreach($time6 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex6.push('<?php echo $val; ?>');
    }
    time6.push('<?php echo $val; ?>');
    <?php } ?>


    <?php foreach($time7 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex7.push('<?php echo $val; ?>');
    }
    time7.push('<?php echo $val; ?>');
    <?php } ?>



    <?php foreach($time8 as $key => $val){ ?>
    if(((process('<?php echo $val; ?>')>=process(start))==true) && ((process('<?php echo $val; ?>')<=process(end))==true))
    {
        timex8.push('<?php echo $val; ?>');
    }
    time8.push('<?php echo $val; ?>');
    <?php } ?>



    var check0 = new Array();
    <?php foreach($check0 as $key => $val){ ?>
    check0.push('<?php echo $val; ?>');
    <?php } ?>
    var unit0 = new Array();
    <?php foreach($unit0 as $key => $val){ ?>
    unit0.push('<?php echo $val; ?>');
    <?php } ?>
    var car0=new Array();
    <?php foreach($car0 as $key => $val){ ?>
    car0.push('<?php echo $val; ?>');
    <?php } ?>











    var array0 = new Array();
    <?php foreach($array0 as $key => $val){ ?>
    if(((process(time0[i])>=process(start))==true) && ((process(time0[i])<=process(end))==true))
    {
        console.log((((process(time0[i])>=process(start))==true) && ((process(time0[i])<=process(end))==true)),i)
        array0.push(parseFloat('<?php echo $val; ?>'));
    }
    i += 1;
    <?php } ?>


    var array1 = new Array();
    <?php foreach($array1 as $key => $val){ ?>
    if(((process(time1[j])>=process(start))==true) && ((process(time1[j])<=process(end))==true))
    {
        console.log((((process(time1[j])>=process(start))==true) && ((process(time1[j])<=process(end))==true)),j)
        array1.push(parseFloat('<?php echo $val; ?>'));
    }
    j += 1;
    <?php } ?>



    var array2 = new Array();
    <?php foreach($array2 as $key => $val){ ?>
    if(((process(time2[k])>=process(start))==true) && ((process(time2[k])<=process(end))==true))
    {
        console.log((((process(time2[k])>=process(start))==true) && ((process(time2[k])<=process(end))==true)),j)
        array2.push(parseFloat('<?php echo $val; ?>'));
    }
    k += 1;
    <?php } ?>



    var array3 = new Array();
    <?php foreach($array3 as $key => $val){ ?>
    if(((process(time3[l])>=process(start))==true) && ((process(time3[l])<=process(end))==true))
    {
        array3.push(parseFloat('<?php echo $val; ?>'));
    }
    l += 1;
    <?php } ?>


    var array4 = new Array();
    <?php foreach($array4 as $key => $val){ ?>
    if(((process(time4[m])>=process(start))==true) && ((process(time4[m])<=process(end))==true))
    {
        array4.push(parseFloat('<?php echo $val; ?>'));
    }
    m += 1;
    <?php } ?>



    var array5 = new Array();
    <?php foreach($array5 as $key => $val){ ?>
    if(((process(time5[n])>=process(start))==true) && ((process(time5[n])<=process(end))==true))
    {
        array5.push(parseFloat('<?php echo $val; ?>'));
    }
    n += 1;
    <?php } ?>


    var array6 = new Array();
    <?php foreach($array6 as $key => $val){ ?>
    if(((process(time6[o])>=process(start))==true) && ((process(time6[o])<=process(end))==true))
    {
        array6.push(parseFloat('<?php echo $val; ?>'));
    }
    o += 1;
    <?php } ?>



    var array7 = new Array();
    <?php foreach($array7 as $key => $val){ ?>
    if(((process(time7[p])>=process(start))==true) && ((process(time7[p])<=process(end))==true))
    {
        array7.push(parseFloat('<?php echo $val; ?>'));
    }
    p += 1;
    <?php } ?>



    var array8 = new Array();
    <?php foreach($array8 as $key => $val){ ?>
    if(((process(time8[q])>=process(start))==true) && ((process(time8[q])<=process(end))==true))
    {
        array8.push(parseFloat('<?php echo $val; ?>'));
    }
    q += 1;
    <?php } ?>






    <?php
            $minq=64;
            $maxq=67;
    if(in_array('BPL',$unit0,true)==true && in_array('THT',$check0,true)==true)
    {
        echo 'true';
    $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='THT' AND Nom='BPL'");
    $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='THT' AND Nom='BPL'");
    }


    if(in_array('BPL',$unit0,true) && in_array('HTN',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='HTN' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTN' AND Nom='BPL'");
    }


    if(in_array('BPL',$unit0,true) && in_array('HTM',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='HTM' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTM' AND Nom='BPL'");
    }

    if(in_array('BPL',$unit0,true) && in_array('MT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='MT' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='MT' AND Nom='BPL'");
    }

    if(in_array('BPL',$unit0,true) && in_array('BTR',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='BTR' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BTR' AND Nom='BPL'");
    }

    if(in_array('BPL',$unit0,true) && in_array('BT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='BT' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BT' AND Nom='BPL'");
    }

    if(in_array('BPL',$unit0,true) && in_array('TBT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='TBT' AND Nom='BPL'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='TBT' AND Nom='BPL'");
    }


    if(in_array('MgO',$unit0,true) && in_array('THT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='THT' AND Nom='BPL'");
    }

    if(in_array('MgO',$unit0,true) && in_array('THT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='THT' AND Nom='MgO'");
    }

    if(in_array('MgO',$unit0,true) && in_array('HTN',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTN' AND Nom='MgO'");
    }

    if(in_array('MgO',$unit0,true) && in_array('HTM',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTM' AND Nom='MgO'");
    }
    if(in_array('MgO',$unit0,true) && in_array('MT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='MT' AND Nom='MgO'");
    }

    if(in_array('MgO',$unit0,true) && in_array('BTR',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BTR' AND Nom='MgO'");
    }

    if(in_array('MgO',$unit0,true) && in_array('BT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BT' AND Nom='MgO'");
    }
    if(in_array('MgO',$unit0,true) && in_array('TBT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='TBT' AND Nom='MgO'");
    }


    if(in_array('SiO',$unit0,true) && in_array('THT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='THT' AND Nom='SiO'");
    }

    if(in_array('SiO',$unit0,true) && in_array('HTN',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTN' AND Nom='SiO'");
    }
    if(in_array('SiO',$unit0,true) && in_array('HTM',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTM' AND Nom='SiO'");
    }

    if(in_array('SiO',$unit0,true) && in_array('MT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='MT' AND Nom='SiO'");
    }

    if(in_array('SiO',$unit0,true) && in_array('BTR',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BTR' AND Nom='SiO'");
    }

    if(in_array('SiO',$unit0,true) && in_array('BT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BT' AND Nom='SiO'");
    }

    if(in_array('SiO',$unit0,true) && in_array('TBT',$check0,true))
    {
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='TBT' AND Nom='SiO'");
    }


    if(in_array('Cd',$unit0,true) && in_array('THT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='THT' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='THT' AND Nom='Cd'");
    }
    if(in_array('Cd',$unit0,true) && in_array('HTN',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='HTN' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTN' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('HTM',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='HTM' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTM' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('HTN',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='HTN' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='HTN' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('MT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='MT' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='MT' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('BTR',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='BTR' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BTR' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('BT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='BT' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='BT' AND Nom='Cd'");
    }

    if(in_array('Cd',$unit0,true) && in_array('TBT',$check0,true))
    {
        $minq=mysqli_query($conn,"SELECT  `min` FROM teneurs  WHERE qualite='TBT' AND Nom='Cd'");
        $maxq=mysqli_query($conn,"SELECT  `max` FROM teneurs  WHERE qualite='TBT' AND Nom='Cd'");
    }

     ?>

    <?php
    $testmin=0;
    $testmax=0;
    if ($minq == TRUE && is_int($minq)==FALSE)
    {
        $testmin=1;
        $listmin = array();
        while($row=mysqli_fetch_assoc($minq))
        {
            $listmin[] = $row;
        }
        $arraymin=array();
        for($i = 0; $i < count($listmin); $i++)
        {
            $arraymin[$i]=$listmin[$i]['min'];
        }


    }

    if($maxq == TRUE && is_int($maxq)==FALSE)
    {
        $testmax=1;
        $listmax = array();
        while($row=mysqli_fetch_assoc($maxq))
        {
            $listmax[] = $row;
        }
        $arraymax=array();
        for($i = 0; $i < count($listmax); $i++)
        {
            $arraymax[$i]=$listmax[$i]['max'];
        }
    }




    ?>
    var arraymin = new Array();
    var imin=0;

    <?php if($testmin==1){foreach($arraymin as $key => $val){ ?>
        arraymin.push(parseFloat('<?php echo $val; ?>'));
    imin += 1;
    <?php } ?>

    datmin0=parseFloat(arraymin[0]);
    <?php } ?>


    var arraymax = new Array();
    var imax=0;
    <?php if($testmax==1){foreach($arraymax as $key => $val){ ?>
    arraymax.push(parseFloat('<?php echo $val; ?>'));
    imax += 1;
    <?php } ?>

    datmax0=parseFloat(arraymax[0]);
    <?php } ?>


    console.log(datmin0);
    console.log(datmax0);
    console.log((datmin0+datmax0)/2);





















    <?php
    }
    }
    ?>
</script>

<script>
    function  stocka()
    {
        document.getElementById("container3").style.display='none';
        document.getElementById("container4").style.display='none';
        document.getElementById("container5").style.display='none';
        document.getElementById("container0").style.display='inline';
    }
    function  stockb()
    {
        document.getElementById("container3").style.display='inline';
        document.getElementById("container0").style.display='none';
        document.getElementById("container4").style.display='none';
        document.getElementById("container5").style.display='none';



    }
    function stockc()
    {
        document.getElementById("container3").style.display='none';
        document.getElementById("container0").style.display='none';
        document.getElementById("container4").style.display='inline';
        document.getElementById("container5").style.display='none';



    }
    function stockd()
    {
        document.getElementById("container3").style.display='none';
        document.getElementById("container0").style.display='none';
        document.getElementById("container4").style.display='none';
        document.getElementById("container5").style.display='inline';

    }
</script>
<table class="table table-bordered">
    <tbody>
    <tr>
        <td style="width: 50%">
            <div id="container1" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
            <div id="container2" style="min-width: 310px; height: 500px; margin: 0 auto;display: none"></div>
<br/>
            <div class="btn-group">
                <button onclick="zcest()">ZC EST</button>
                <button onclick="zcouest()" >ZC OUEST</button>
            </div>
        </td>
        <td style="width: auto">
            <div id="container0" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
            <div id="container3" style="min-width: 310px; height: 500px; margin: 0 auto;display: none"></div>
            <div id="container4" style="min-width: 310px; height: 500px; margin: 0 auto;display: none"></div>
            <div id="container5" style="min-width: 310px; height: 500px; margin: 0 auto;display: none"></div>
            <br/>

            <div class="btn-group">
                <button onclick="stocka()">Stock A</button>
                <button onclick="stockb()" >Stock B</button>
                <button onclick="stockc()" >Stock C</button>
                <button onclick="stockd()" >Stock D</button>


            </div>
        </td>
    </tr>
    <tr>
        <td style="width: auto">
            <div id="container6" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
            <div id="container7" style="min-width: 310px; height: 500px; margin: 0 auto;display: none"></div>
            <br/>
            <div class="btn-group">
                <button onclick="scest()">SCH1</button>
                <button onclick="scouest()" >SCH2</button>
            </div>
        </td>
        <td style="width: 50%">
            <div id="container8" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
        </td>
    </tr>
    </tbody>
</table>

<script>
    function  zcest()
    {
        document.getElementById("container2").style.display='none';
        document.getElementById("container1").style.display='inline';
    }
    function  zcouest()
    {
        document.getElementById("container2").style.display='inline';
        document.getElementById("container1").style.display='none';

    }
    function scest()
    {
        document.getElementById("container7").style.display='none';
        document.getElementById("container6").style.display='inline';

    }
    function scouest()
    {
        document.getElementById("container7").style.display='inline';
        document.getElementById("container6").style.display='none';

    }
</script>


</body>
<script>


    function insertionSort(list) {
        const len = list.length
        for (let i = 1; i < len; i++)
        {
            if (process(list[i]) < process(list[0]))
            {
                // move current element to the first position
                list.unshift(list.splice(i,1)[0])
            }
            else if (process(list[i]) > process(list[i-1]))
            {
                // maintain element position
                continue
            }
            else {
                // find where element should go
                for (let j = 1; j < i; j++) {
                    if (process(list[i]) > process(list[j-1]) && process(list[i]) < process(list[j]))
                    {
                        // move element
                        list.splice(j, 0, list.splice(i,1)[0])
                    }
                }
            }
        }
        return list
    }



    Highcharts.theme = {
        colors: ["#DDDF0D", "#7798BF", "#55BF3B", "#DF5353", "#aaeeee", "#ff0066", "#eeaaee",
            "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
        chart: {
            backgroundColor: {
                linearGradient: [0, 0, 0, 400],
                stops: [
                    [0, 'rgb(96, 96, 96)'],
                    [1, 'rgb(16, 16, 16)']
                ]
            },
            borderWidth: 0,
            borderRadius: 15,
            plotBackgroundColor: null,
            plotShadow: false,
            plotBorderWidth: 0
        },
        title: {
            style: {
                color: '#FFF',
                font: '16px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif'
            }
        },
        subtitle: {
            style: {
                color: '#DDD',
                font: '12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif'
            }
        },
        xAxis: {
            gridLineWidth: 0,
            lineColor: '#999',
            tickColor: '#999',
            labels: {
                style: {
                    color: '#999',
                    fontWeight: 'bold'
                }
            },
            title: {
                style: {
                    color: '#AAA',
                    font: 'bold 12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif'
                }
            }
        },
        yAxis: {
            alternateGridColor: null,
            minorTickInterval: null,
            gridLineColor: 'rgba(255, 255, 255, .1)',
            lineWidth: 0,
            tickWidth: 0,
            labels: {
                style: {
                    color: '#999',
                    fontWeight: 'bold'
                }
            },
            title: {
                style: {
                    color: '#AAA',
                    font: 'bold 12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif'
                }
            }
        },
        legend: {
            itemStyle: {
                color: '#CCC'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#333'
            }
        },
        labels: {
            style: {
                color: '#CCC'
            }
        },
        tooltip: {
            backgroundColor: {
                linearGradient: [0, 0, 0, 50],
                stops: [
                    [0, 'rgba(96, 96, 96, .8)'],
                    [1, 'rgba(16, 16, 16, .8)']
                ]
            },
            borderWidth: 0,
            style: {
                color: '#FFF'
            }
        },


        plotOptions: {
            line: {
                dataLabels: {
                    color: '#CCC'
                },
                marker: {
                    lineColor: '#333'
                }
            },
            spline: {
                marker: {
                    lineColor: '#333'
                }
            },
            scatter: {
                marker: {
                    lineColor: '#333'
                }
            },
            candlestick: {
                lineColor: 'white'
            }
        },

        toolbar: {
            itemStyle: {
                color: '#CCC'
            }
        },

        navigation: {
            buttonOptions: {
                backgroundColor: {
                    linearGradient: [0, 0, 0, 20],
                    stops: [
                        [0.4, '#606060'],
                        [0.6, '#333333']
                    ]
                },
                borderColor: '#000000',
                symbolStroke: '#C0C0C0',
                hoverSymbolStroke: '#FFFFFF'
            }
        },

        exporting: {
            buttons: {
                exportButton: {
                    symbolFill: '#55BE3B'
                },
                printButton: {
                    symbolFill: '#7797BE'
                }
            }
        },

        // scroll charts
        rangeSelector: {
            buttonTheme: {
                fill: {
                    linearGradient: [0, 0, 0, 20],
                    stops: [
                        [0.4, '#888'],
                        [0.6, '#555']
                    ]
                },
                stroke: '#000000',
                style: {
                    color: '#CCC',
                    fontWeight: 'bold'
                },
                states: {
                    hover: {
                        fill: {
                            linearGradient: [0, 0, 0, 20],
                            stops: [
                                [0.4, '#BBB'],
                                [0.6, '#888']
                            ]
                        },
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    },
                    select: {
                        fill: {
                            linearGradient: [0, 0, 0, 20],
                            stops: [
                                [0.1, '#000'],
                                [0.3, '#333']
                            ]
                        },
                        stroke: '#000000',
                        style: {
                            color: 'yellow'
                        }
                    }
                }
            },
            inputStyle: {
                backgroundColor: '#333',
                color: 'silver'
            },
            labelStyle: {
                color: 'silver'
            }
        },

        navigator: {
            handles: {
                backgroundColor: '#666',
                borderColor: '#AAA'
            },
            outlineColor: '#CCC',
            maskFill: 'rgba(16, 16, 16, 0.5)',
            series: {
                color: '#7798BF',
                lineColor: '#A6C7ED'
            }
        },

        scrollbar: {
            barBackgroundColor: {
                linearGradient: [0, 0, 0, 20],
                stops: [
                    [0.4, '#888'],
                    [0.6, '#555']
                ]
            },
            barBorderColor: '#CCC',
            buttonArrowColor: '#CCC',
            buttonBackgroundColor: {
                linearGradient: [0, 0, 0, 20],
                stops: [
                    [0.4, '#888'],
                    [0.6, '#555']
                ]
            },
            buttonBorderColor: '#CCC',
            rifleColor: '#FFF',
            trackBackgroundColor: {
                linearGradient: [0, 0, 0, 10],
                stops: [
                    [0, '#000'],
                    [1, '#333']
                ]
            },
            trackBorderColor: '#666'
        },

        // special colors for some of the demo examples
        legendBackgroundColor: 'rgba(48, 48, 48, 0.8)',
        legendBackgroundColorSolid: 'rgb(70, 70, 70)',
        dataLabelsColor: '#444',
        textColor: '#E0E0E0',
        maskColor: 'rgba(255,255,255,0.3)'
    };

    // Apply the theme
    var highchartsOptions = Highcharts.setOptions(Highcharts.theme);




























var chart00={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'BA'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex=='undefined') ? insertionSort(time0) : insertionSort(timex),
        events: {
            afterSetExtremes: updateLegendLabel
        }
    },
    plotOptions: {
        column: {

            stacking: 'normal',

            dataLabels: {

                enabled: true,

                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'

            }

        }

    ,
        series: {
            animation: true
        }
    },
    yAxis: {

        minRange:(datmax0>Max0) ? datmax0 : Max0,
        min:(datmin0<Min0) ? datmin0 : Min0,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array0
    }]
};
    var chart0=Highcharts.chart('container0', chart00);
    ////////////////



var chart11={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel1}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'ZC'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex1=='undefined') ? insertionSort(time1) : insertionSort(timex1),
        events: {
            afterSetExtremes: updateLegendLabel1
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max1) ? datmax0 : Max1,
        min:(datmin0<Min1) ? datmin0 : Min1,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array1
    }]
};
var chart1=Highcharts.chart('container1', chart11);
////////////////

var chart22={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel2}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'ZC'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex2=='undefined') ? insertionSort(time2) : insertionSort(timex2),
        events: {
            afterSetExtremes: updateLegendLabel2
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max2) ? datmax0 : Max2,
        min:(datmin0<Min2) ? datmin0 : Min2,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array2
    }]
};
var chart2=Highcharts.chart('container2', chart22);



var chart33={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel3}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'BA'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex3=='undefined') ? insertionSort(time3) : insertionSort(timex3),
        events: {
            afterSetExtremes: updateLegendLabel3
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max3) ? datmax0 : Max3,
        min:(datmin0<Min3) ? datmin0 : Min3,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array3
    }]
};
var chart3=Highcharts.chart('container3', chart33);




var chart44={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel4}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'BA'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex4=='undefined') ? insertionSort(time4) : insertionSort(timex4),
        events: {
            afterSetExtremes: updateLegendLabel4
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max4) ? datmax0 : Max4,
        min:(datmin0<Min4) ? datmin0 : Min4,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array4
    }]
};
var chart4=Highcharts.chart('container4', chart44);



var chart55={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel5}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'BA'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex5=='undefined') ? insertionSort(time5) : insertionSort(timex5),
        events: {
            afterSetExtremes: updateLegendLabel5
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max5) ? datmax0 : Max5,
        min:(datmin0<Min5) ? datmin0 : Min5,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array5
    }]
};
var chart5=Highcharts.chart('container5', chart55);


var chart66={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel6}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'SC'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex6=='undefined') ? insertionSort(time6) : insertionSort(timex6),
        events: {
            afterSetExtremes: updateLegendLabel6
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max6) ? datmax0 : Max6,
        min:(datmin0<Min6) ? datmin0 : Min6,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array6
    }]
};
var chart6=Highcharts.chart('container6', chart66);



var chart77={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel7}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'SC'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex7=='undefined') ? insertionSort(time7) : insertionSort(timex7),
        events: {
            afterSetExtremes: updateLegendLabel7
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max7) ? datmax0 : Max7,
        min:(datmin0<Min7) ? datmin0 : Min7,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array7
    }]
};
var chart7=Highcharts.chart('container7', chart77);





var chart88={
    chart: {
        type: 'line',
        zoomType: 'x',
        events: {
            load: updateLegendLabel8}
    },
    rangeSelector: {
        selected: 0
    },
    title: {
        text: 'DAOUI'
    },
    legend: {
        enabled: true
    },
    subtitle: {
        text: 'Source: Lims'
    },
    xAxis: {
        categories: (typeof timex8=='undefined') ? insertionSort(time8) : insertionSort(timex8),
        events: {
            afterSetExtremes: updateLegendLabel8
        }
    },
    plotOptions: {
        series: {
            animation: false
        }
    },
    yAxis: {

        minRange:(datmax0>Max8) ? datmax0 : Max8,
        min:(datmin0<Min8) ? datmin0 : Min8,
        title: {
            text: 'Resultat'
        },
        plotLines: [{
            value: datmin0,
            color: 'green',
            dashStyle: 'shortdash',
            width: 2,
            label: {
                text: 'minimum'
            }
        },
            {
                value: datmax0,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'maximum'
                }
            },
            {
                value: (datmin0+datmax0)/2,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2,
                label: {
                    text: 'moyenne'
                }
            }]

    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },

    series: [{
        name: (typeof check0 === 'undefined') ? 'BTR':check0,
        data: array8
    }]
};
var chart8=Highcharts.chart('container8', chart88);



$('#sub').click(function() {
    /*chart.series[0].data=[];
    chart.series[0].data=array;
    chart.series[0].name=(typeof check === 'undefined') ? 'HTNSC' : check;
    chart.xAxis=[];
    chart.xAxis= {
        categories: (typeof timex == 'undefined') ? time : timex,
        events: {
            afterSetExtremes: updateLegendLabel
        }
    }
    chart.redraw();*/
    chart0.series[0].setData(array0);
    chart1.series[0].setData(array1);

});



</script>
<?php
CloseCon($conn);
?>
