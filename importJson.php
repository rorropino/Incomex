<?php

$json ='[
  {
    "Descripcion": "Xtech - USB cable - 1.8 m - 4 pin USB Type A - 4 pin USB Type A - USB 2.0 male-to-fem",
    "mpn": "XTC-301",
    "centralRecno": "174513",
    "localSku": "AB004XTK02",
    "DescripcionFabrica": "Accvent",
    "DescripcionMarca": "Xtech",
    "CategoriaCompleta": "Accesorios para Computadores>>Cables",
    "Cable / Género del conector izquierdo": "Macho",
    "Cable / Subcategoría de cable": "USB",
    "Cable / Tipo de cable I/O": "Cable USB",
    "Cable / Tipo de conector derecho ": "USB de 4 clavijas Tipo A",
    "Cable / Tipo de conector izquierdo": "USB de 4 clavijas Tipo A",
    "Dimensiones y peso / Longitud": "1.8 m",
    "Encabezamiento / Cantidad empaquetada": "1",
    "Encabezamiento / Compatibilidad": "PC",
    "Encabezamiento / Fabricante": "Xtech",
    "Encabezamiento / Gama de productos": "Xtech",
    "Encabezamiento / Marca": "Xtech",
    "Imagenes": [
      {
        "angulo": null,
        "imagenId": "39E02A47-339D-4A69-B910-4107D6DA86CF",
        "isMainImage": false,
        "ancho": "200",
        "alto": "150",
        "url": "https://iwsportaldvlp.intcomex.com/images/75060826"
      },
      {
        "angulo": null,
        "imagenId": "CDD3998A-626D-4EFB-B164-8C6C1C628E6C",
        "isMainImage": true,
        "ancho": "200",
        "alto": "112",
        "url": "https://iwsportaldvlp.intcomex.com/images/76869249"
      },
      {
        "angulo": null,
        "imagenId": "CDD3998A-626D-4EFB-B164-8C6C1C628E6C",
        "isMainImage": true,
        "ancho": "75",
        "alto": "42",
        "url": "https://iwsportaldvlp.intcomex.com/images/76869250"
      },
      {
        "angulo": null,
        "imagenId": "CDD3998A-626D-4EFB-B164-8C6C1C628E6C",
        "isMainImage": true,
        "ancho": "400",
        "alto": "223",
        "url": "https://iwsportaldvlp.intcomex.com/images/76869251"
      },
      {
        "angulo": null,
        "imagenId": "CDD3998A-626D-4EFB-B164-8C6C1C628E6C",
        "isMainImage": true,
        "ancho": "640",
        "alto": "356",
        "url": "https://iwsportaldvlp.intcomex.com/images/76869252"
      }
    ]
  }
  ]';

$json_string = json_decode($json, JSON_PRETTY_PRINT);

print_r($json_string);

foreach($json_string AS $js){
    foreach($js AS $key => $val){
    if($key == 'Imagenes'){
        print_r($val);
    }else{
        echo $key.' = '.$val.'<br/>';
    }
        
    
    
    
}
}
