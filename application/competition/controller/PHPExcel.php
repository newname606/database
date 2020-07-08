<?php
/**
 * Created by PhpStorm.
 * User: REN
 * Date: 2020/6/23
 * Time: 14:39
 */

namespace app\competition\controller;


use think\Controller;

class PHPExcel extends Controller
{
public function index(){
    $list = db('project')->select();

    vendor("PHPExcel.PHPExcel");
    $objPHPExcel = new \PHPExcel();

    $objPHPExcel->getProperties()->setCreator("ctos")
        ->setLastModifiedBy("ctos")
        ->setTitle("Office 2007 XLSX Test Document")
        ->setSubject("Office 2007 XLSX Test Document")
        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        ->setKeywords("office 2007 openxml php")
        ->setCategory("Test result file");

    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);

    //设置行高度
    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(22);

    $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);

    //set font size bold
    $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(20);
    $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getFont()->setBold(true);

    $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('A2:E2')->getBorders()->getAllBorders()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);

    //设置水平居中
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $objPHPExcel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('E')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    //合并cell
    //$objPHPExcel->getActiveSheet()->mergeCells('A1:J1');

    // set table header content
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', '编号')
        ->setCellValue('B1', '报名编号')
        ->setCellValue('C1', '单位名称')
        ->setCellValue('D1', '联系人')
        ->setCellValue('E1', '项目名称')
        ->setCellValue('F1', '在川开展5G项目名称')
        ->setCellValue('G1', '参赛主体')
        ->setCellValue('H1', '联系电话')
        ->setCellValue('I1', '项目状态')
        ->setCellValue('J1', '添加时间');

$time= strtotime(date("Y-m-d H:i"));

$date=date("Y-m-d H:i",$list[0]["create_time"]);

    for($i=0;$i<=count($list)-1;$i++){
        $objPHPExcel->getActiveSheet(0)->setCellValue('A'.($i+3), $list[$i]['id']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('B'.($i+3), $list[$i]['u_id']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('C'.($i+3), $list[$i]['username']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('D'.($i+3), $list[$i]['contacts']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('E'.($i+3), $list[$i]['project']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('F'.($i+3), $list[$i]['content']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('G'.($i+3), $list[$i]['body']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('H'.($i+3), $list[$i]['status']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('I'.($i+3), $date);

        $objPHPExcel->getActiveSheet()->getRowDimension($i+3)->setRowHeight(16);
    }

    //  sheet命名
    $objPHPExcel->getActiveSheet()->setTitle('项目报名表');


    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);


    // excel头参数
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="项目报名表('.date('Ymd-His').').xls"');  //日期为文件名后缀
    header('Cache-Control: max-age=0');

    $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  //excel5为xls格式，excel2007为xlsx格式

    $objWriter->save('php://output');
}
}
