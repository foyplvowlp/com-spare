<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<!DOCTYPE html>



<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>
                    <?php echo $total_server ?>
                </h3>
                <p>
                <h4>Server</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-linux"></i>
            </div>
            <a href="?r=server/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    <?php echo $total_switchh ?>
                </h3>
                <p>
                <h4>Switch</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-compress"></i>
            </div>
            <a href="?r=switchh/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3>
                    <?php echo $total_computer ?>
                </h3>
                <p>
                <h4>Computer</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-desktop"></i>
            </div>
            <a href="?r=computer/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>
                    <?php echo $total_internet ?>
                </h3>
                <p>
                <h4>Internet</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-facebook-square"></i>
            </div>
            <a href="?r=internet/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>
                    <?php echo $total_printer ?>
                </h3>
                <p>
                <h4>Printer</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-print"></i>
            </div>
            <a href="?r=printer/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>
                    <?php echo $total_wifi ?>
                </h3>
                <p>
                <h4>WIFI</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-signal"></i>
            </div>
            <a href="?r=wifi/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3>
                    <?php echo $total_ups ?>
                </h3>
                <p>
                <h4>UPS</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-bolt"></i>
            </div>
            <a href="?r=ups/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black">
            <div class="inner">
                <h3>
                    <?php echo $total_program ?>
                </h3>
                <p>
                <h4>Program</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-spinner"></i>
            </div>
            <a href="?r=program/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-fuchsia">
            <div class="inner">
                <h3>
                    <?php echo $total_website ?>
                </h3>
                <p>
                <h4>Website</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-globe"></i>
            </div>
            <a href="?r=website/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon-gradient">
            <div class="inner">
                <h3>
                    <?php echo $total_viruss ?>
                </h3>
                <p>
                <h4>Virus</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-bug"></i>
            </div>
            <a href="?r=viruss/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>
                    <?php echo $total_lan ?>
                </h3>
                <p>
                <h4>LAN</h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-sitemap"></i>
            </div>
            <a href="?r=lan/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>
                    <?php echo $total_report_etc ?>
                </h3>
                <p>
                <h4>Meeting & Document 
                </h4>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-file-word-o"></i>
            </div>
            <a href="?r=reportetc/create" class="small-box-footer">
                บันทึกกิจกรรม <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row --><hr>

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">                            


        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Morris chart - Sales -->

            <!-- <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>    !-->

            <div class="well">

                <?php
                $server = Yii::app()->db->createCommand("select SUM(total) from server")->queryScalar();
                $switchh = Yii::app()->db->createCommand("select SUM(total) from switchh")->queryScalar();
                $computer = Yii::app()->db->createCommand("select SUM(total) from computer")->queryScalar();
                $internet = Yii::app()->db->createCommand("select SUM(total) from internet")->queryScalar();
                $printer = Yii::app()->db->createCommand("select SUM(total) from printer")->queryScalar();
                $wifi = Yii::app()->db->createCommand("select SUM(total) from wifi")->queryScalar();
                $ups = Yii::app()->db->createCommand("select SUM(total) from ups")->queryScalar();
                $program = Yii::app()->db->createCommand("select SUM(total) from program")->queryScalar();
                $website = Yii::app()->db->createCommand("select SUM(total) from website")->queryScalar();
                $viruss = Yii::app()->db->createCommand("select SUM(total) from viruss")->queryScalar();
                $lan = Yii::app()->db->createCommand("select SUM(total) from lan")->queryScalar();
                $report_etc = Yii::app()->db->createCommand("select SUM(total) from report_etc")->queryScalar();


                $this->Widget('ext.highcharts.HighchartsWidget', array(
                    'options' => array(
                        'chart' => array(
                            'type' => 'column',),
                        'title' => array('text' => 'ภาระกิจงานประจำวัน'),
                        'xAxis' => array(
                            'categories' => array(
                                'Server',
                                'Switch',
                                'Computer',
                                'Internet',
                                'Printer',
                                'Wifi',
                                'Ups',
                                'Program',
                                'Website',
                                'Virus',
                                'Lan',
                                'Meeting')
                        ),
                        'yAxis' => array(
                            'title' => array('text' => 'จำนวน/ครั้ง')
                        ),
                        'colors' => array('#0066CC', '#33CC99', '#33CCFF', '#009999', '#9900FF', '#FF3333', '#FFCC33', '#000000', '#FF3399', '#990066', '#005500', '#FF9900',),
                        'gradient' => array('enabled' => true),
                        'credits' => array('enabled' => false),
                        'exporting' => array('enabled' => false),
                        'chart' => array(
                            'plotBackgroundColor' => '#ffffff',
                            'plotBorderWidth' => null,
                            'plotShadow' => false,
                            'height' => 400,
                            'type' => 'column'
                        ),
                        'series' => array(
                            array('name' => 'จำนวนครั้ง', 'data' => array(
                                    intval($server),
                                    intval($switchh),
                                    intval($computer),
                                    intval($internet),
                                    intval($printer),
                                    intval($wifi),
                                    intval($ups),
                                    intval($program),
                                    intval($website),
                                    intval($viruss),
                                    intval($lan),
                                    intval($report_etc),
                                )),
                        ),
                    )
                ));
                ?>
            </div>
        </div><!-- /.nav-tabs-custom -->








        <!-- TO DO List -->

        <center>
            <u><h4>งานแต่ละประเภทที่ปฎิบัติครั้งล่าสุด</h4></u>
        </center>

        <div class="box">
            <div class="box-header">
                <div class="box-tools pull-right">
                </div>
            </div><!-- /.box-header -->


            <div class="box-body">
                <ul class="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-linux"></i>
                            </div>
                        </span>
                        <!-- todo text -->
                        <span class="text">
                            SERVER :: <?php echo $total_server_howto ?>
                        </span>
                        <!-- Emphasis label -->
                        <small class="label bg-primary"><i class="fa fa-clock-o"></i>
                            <?php echo $total_server_date ?></small>
                        <!-- General tools such as edit or delete-->
                    </li>

                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-compress"></i>
                            </div>
                        </span>
                        <span class="text">
                            SWITCH :: <?php echo $total_switchh_howto ?>
                        </span>
                        <small class="label bg-green"><i class="fa fa-clock-o"></i>
                            <?php echo $total_switchh_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                        </span>
                        <span class="text">
                            COMPUTER :: <?php echo $total_computer_howto ?>
                        </span>
                        <small class="label bg-aqua-gradient"><i class="fa fa-clock-o"></i>
                            <?php echo $total_computer_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-facebook-square"></i>
                            </div>
                        </span>
                        <span class="text">
                            INTERNET :: <?php echo $total_internet_howto ?>
                        </span>
                        <small class="label bg-teal"><i class="fa fa-clock-o"></i>
                            <?php echo $total_internet_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                        </span>
                        <span class="text">
                            PRINTER :: <?php echo $total_printer_howto ?>
                        </span>
                        <small class="label bg-purple"><i class="fa fa-clock-o"></i>
                            <?php echo $total_printer_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-signal"></i>
                            </div>
                        </span>
                        <span class="text">
                            WIFI :: <?php echo $total_wifi_howto ?>
                        </span>
                        <small class="label bg-red"><i class="fa fa-clock-o"></i>
                            <?php echo $total_wifi_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-bolt"></i>
                            </div>
                        </span>
                        <span class="text">
                            UPS :: <?php echo $total_ups_howto ?>
                        </span>
                        <small class="label bg-yellow-gradient"><i class="fa fa-clock-o"></i>
                            <?php echo $total_ups_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-spinner"></i>
                            </div>
                        </span>
                        <span class="text">
                            PROGRAM :: <?php echo $total_program_howto ?>
                        </span>
                        <small class="label bg-black"><i class="fa fa-clock-o"></i>
                            <?php echo $total_program_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                        </span>
                        <span class="text">
                            WEBSITE :: <?php echo $total_website_howto ?>
                        </span>
                        <small class="label bg-fuchsia"><i class="fa fa-clock-o"></i>
                            <?php echo $total_website_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-bug"></i>
                            </div>
                        </span>
                        <span class="text">
                            VIRUS :: <?php echo $total_viruss_howto ?>
                        </span>
                        <small class="label bg-maroon-gradient"><i class="fa fa-clock-o"></i>
                            <?php echo $total_viruss_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-sitemap"></i>
                            </div>
                        </span>
                        <span class="text">
                            LAN :: <?php echo $total_lan_howto ?>
                        </span>
                        <small class="label bg-olive"><i class="fa fa-clock-o"></i>
                            <?php echo $total_lan_date ?></small>
                    </li>

                    <li>
                        <span class="handle">
                            <div class="icon">
                                <i class="fa fa-file-word-o"></i>
                            </div>
                        </span>
                        <span class="text">
                            Meeting & Ducument :: <?php echo $total_meeting_howto ?>
                        </span>
                        <small class="label bg-orange"><i class="fa fa-clock-o"></i>
                            <?php echo $total_meeting_date ?></small>
                    </li>

                </ul>
            </div><!-- /.box-body -->

        </div><!-- /.box -->



    </section><!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable"> 

        <!-- Map box -->
        <div class="nav-tabs-custom">
            <div class="box-header">
                <div class="well">
                    <?php
                    $data = $dataProvider->getData();   //รับค่า $dataProvider จาก Controller

                    $device = array();
                    $total = array();
                    foreach ($data as $d) {
                        $piedata[] = array($d['device'], intval($d['total']));
                        array_push($device, $d['device']);
                        array_push($total, intval($d['total']));  //intval แปลงตัวอักษรจากตัวหนังสือเป็นตัวเลข
                    }


//เรียกใช้งาน widgets HightCharts




                    $this->Widget('ext.highcharts.HighchartsWidget', array(
                        'options' => array(
                            //'colors' => array('#6AC36A', '#FFD148', '#0563FE', '#FF2F2F', '#000000'),
                            //'colors' => array('#FFD148', '#0563FE', '#FF2F2F', '#000000'),
                            'gradient' => array('enabled' => true),
                            'credits' => array('enabled' => false),
                            'exporting' => array('enabled' => false),
                            'chart' => array(
                                'plotBackgroundColor' => '#ffffff',
                                'plotBorderWidth' => null,
                                'plotShadow' => false,
                                'height' => 400,
                            ),
                            'title' => array('text' => 'สถิติที่ส่งซ่อมทั้งหมด'),
                            'tooltip' => array(
                                //'pointFormat' => '{series.name}: <b>{point.percentage}%</b>',
                                //'percentageDecimals' => 1,
                                'formatter' => 'js:function() { return this.point.name+":  <b>"+Math.round(this.point.percentage)+"</b>%"; }',
                            //the reason it didnt work before was because you need to use javascript functions to round and refrence the JSON as this.<array>.<index> ~jeffrey
                            ),
                            'plotOptions' => array(
                                'pie' => array(
                                    'allowPointSelect' => true,
                                    'cursor' => 'pointer',
                                    'dataLabels' => array(
                                        'enabled' => true,
                                        'color' => '#AAAAAA',
                                        'connectorColor' => '#AAAAAA',
                                    ),
                                //'showInLegend' => true,
                                )
                            ),
                            'series' => array(
                                array(
                                    'type' => 'pie',
                                    'name' => 'Percentage',
                                    'data' => $piedata
                                ),
                            ),
                        )
                    ));
                    ?>

                </div>   
            </div>

        </div>

        <!-- /.box -->


        <!-- solid sales graph -->
        <center>
            <center>
                <u><h4>รายการส่งซ่อมที่ยังค้าง</h4></u>
            </center>
            <div class="box">
                <?php
                $this->widget('ext.booster.widgets.TbJsonGridView', array(
                    'id' => 'grid_1', // ชื่อตาราง
                    'dataProvider' => $dataProvider1, // ตัวแปร data ที่มีข้อมูล
                    'enablePagination' => true, // กำหนดให้แสดงปุ่มเปลี่ยนหน้า
                    'columns' => array(// กำหนด column ที่จะแสดง
                        array(
                            'name' => 'date',
                            'header' => 'วันที่ส่ง',
                        ),
                        array(
                            'name' => 'device',
                            'header' => 'อุปกรณ์',
                        ),
                        array(
                            'name' => 'detail',
                            'header' => 'รายละเอียด',
                        ),
                        array(
                            'name' => 'status',
                            'header' => 'สถานะ',
                        ),
                        array(
                            'name' => 'shop',
                            'header' => 'ร้าน',
                        ),
                    ),
                ));
                ?>
            </div><!-- /.box -->   
        </center>



    </section><!-- right col -->
</div><!-- /.row (main row) -->


