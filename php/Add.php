<?php
    include 'Conexion.php';

    $conexion = new Conexion();
    $cnn = $conexion->getConexion();

    $checkout_token = $_POST["checkout_token"];
    $title= $_POST["title"];
    $tagLine= $_POST["tagline"];
    $message= $_POST["message"];
    $latitude= $_POST["latitude"];
    $longitude= $_POST["longitude"];
    $styleMap= $_POST["styleMap"];
    $chooseStyle= $_POST["chooseStyle"];
    $chooseFrame= $_POST["chooseFrame"];
    $chooseSize= $_POST["chooseSize"];
    
    $sql = "insert into Product (checkout_token, title, tagLine, message, longitude, latitude, styleMap, chooseStyle, chooseFrame, chooseSize)". 
    "values ('".$checkout_token."', '".$title."', '".$tagLine."', '".$message."', '".$latitude."', '".$longitude."', '".$styleMap."', '".$chooseStyle."', '".$chooseFrame."', '".$chooseSize."')";
    $statement = $cnn->prepare($sql);
    $valor = $statement->execute();
    if($valor){
        $result["success"] = true;
        $result["message"] = "Product saved!";
        echo json_encode($result);
    }
    else{
        $result["sql"] = $sql;
        $result["error"] = true;
        $result["message"] = "Product can´t be saved";
        echo json_encode($result);
        //echo '{"error" : true, "message" : "No se pudo guardar"';
    }

    $statement->closeCursor();
    $conexion = null;