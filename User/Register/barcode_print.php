<?php
if(isset($_POST["btnPrint"])){
    $path = "../../";
    include ('../../oop/obj.php');
    $border = 5;//กำหนดความหน้าของเส้น Barcode
    $height = 80;//กำหนดความสูงของ Barcode
    $barcode = $_POST["barcode_id"];
    $reg_id = $_POST["print_barcode"];
    $obj->get_name_sticker($_POST["print_barcode"]);
    // $result = mysqli_query($conn,"SELECT emp_name,surname,queue,company,r.barcode,date FROM register r LEFT JOIN employee e on r.barcode=e.barcode WHERE reg_id='$reg_id';");
    $row = mysqli_fetch_array($result_sticker,MYSQLI_ASSOC);
    $generatorSVG = new Picqer\Barcode\BarcodeGeneratorJPG();
    file_put_contents('../Employee/barcode/'.$barcode.'.jpg', $generatorSVG->getBarcode($barcode, $generatorSVG::TYPE_CODE_128,$border,$height));
    require_once '../../vendor/autoload.php';
    //158
    $mpdf = new \Mpdf\Mpdf([
        'format' => [105,23],
        'mode' => 'utf-8',      
        'default_font_size' => 8,
        'margin_top' => 2.2,
        'margin_left' => 2.5,
        'margin_bottom' => 0,
        'default_font' => 'saysettha_ot'
    ]);
    $content = '<style>
        .paper{
            width: 100%;
            float: left;
            font-size: 8px;
            padding-left: 5px;
        }
        .col-50{
            width: 49%;
            float: left;
        }
        .col2-50{
            width: 73%;
            float: left;
        }
        .col3-50{
            width: 26%;
            float: left;
        }
                </style>
    ';
    $content .='<div class="paper" >          
    ';
   foreach($_POST["sticker"] as $sticker){
    $content .='    
    <div class="col-50">
        <div class="col2-50">
        &nbsp;&nbsp;Reg: '.$row["barcode"].' <br>
        &nbsp;&nbsp;'.$row["emp_name"].' '.$row["surname"].'
        </div>
        <div class="col3-50" align="right">
            No.'.$row["queue"].' &nbsp; <br>
            '.$sticker.'
        </div>
        <div align="center">
            <img src="../Employee/barcode/'.$row["barcode"].'.jpg" style="width: 87%;height: 20px;" alt="">
        </div>
        <div align="center">
            '.$row["barcode"].'
        </div>
        <div align="left">
        &nbsp;&nbsp;'.$row["company"].'<br>
        &nbsp;&nbsp;'.date("d/m/Y",strtotime($row["date"])).'
        </div>
    </div>
                ';
    }
    $content .=' 
    </div>
    ';
    // $mpdf->SetJS('this.print()');
    $mpdf->WriteHTML($content);
    $mpdf->Output("Barcode.pdf","I");
}
?>
    
