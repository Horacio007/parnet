<?php
    require_once "../class/conexion.php";
    $conexion=conexion();
    $sql="SELECT COUNT(area_id), nombre_producto,  nombre_area, area_id FROM productos INNER JOIN areas ON area_id = id_area GROUP BY area_id HAVING COUNT(*)";
    $result=mysqli_query($conexion,$sql);
    $valoresY=array();//cantidad
    $valoresX=array();//nombres
    $valoresZ=array();

    while ($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
        $valoresZ[]=$ver[2];
    }

    $datosY=json_encode($valoresY);
    $datosX=json_encode($valoresX);
    $datosZ=json_encode($valoresZ);
    
    //echo $datosX;//cantidad que quiero
    //echo $datosY;
    //echo $datosZ;//nombres que quiero
?>
<div id="graficaLineal"></div>

<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosY=crearCadenaLineal('<?php echo $datosY ?>');
    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosZ=crearCadenaLineal('<?php echo $datosZ ?>');

    //console.log(datosY);
    ///console.log(datosX);
    //console.log(datosZ);

    var trace1 = {
        x: datosY,
        y: datosX,
        mode: 'lines+markers',
        line: {
            color: 'green',
            width: 1.0
        },
        marker: {
            color: 'green',
            size: 5
        }
    };

    var layout = {
        title: 'Tipos de Producto Registrados',
        xaxis: {
            title: 'Areas'
        },
        yaxis: {
            title: 'Registros'
        }
    };
    
    var config = {responsive: true}

    var data = [trace1];

    Plotly.newPlot('graficaLineal', data, layout, config);
</script>