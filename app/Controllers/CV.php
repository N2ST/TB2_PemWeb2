<?php

namespace App\Controllers;

use App\Models\CvModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;


class CV extends BaseController
{

    public function index()
    {

        $cv = model("CvModel");

        return view('CvView', [
            'data' => $cv->findAll()
        ]);
    }
    public function Search()
    {

        $cv = model("CvModel");

        if ($this->request->getVar('search') && $this->request->getVar('search') != '') {
            $cv = $cv->where('nama', $this->request->getVar('search'));
        }

        $cv = $cv->find();

        return view('CvView', [
            'data' => $cv
        ]);
    }


    public function Tambah()
    {
        return view('TambahCv', [
            'action' => base_url() . '/Cv/DoTambahCv'
        ]);
    }


    public function DoTambahCv()
    {

        $data = $this->request->getPost();
        $cv = model("CvModel");
        if (!$cv->where('nama', $this->request->getVar('nama'))->find()) {

            $cv->insert($data);
        }

        return redirect()->to(base_url('Cv'));
    }


    public function Hapuscv($id)
    {
        $cv = model("CvModel");
        $cv->where('id_cv', $id)->delete();

        return redirect()->to(base_url('Cv'));
    }


    public function Editcv($id)
    {
        $cv = model("CvModel");
        $cv = $cv->where('id_cv', $id)->first();

        return view('Editcv', [
            'datacv' => $cv,
            'action' => base_url() . '/CV/DoEdit/' . $id
        ]);
    }

    public function DoEdit($id)
    {
        $data = $this->request->getPost();

        // update data yang ditemukan dengan parameter form 
        if ($data['type_form'] == 'edit') {
            $edit = $this->data->edit($data);
            if ($edit) {
                $id_cv = $this->data->editID;

                return redirect()->back();
            }
        }
    }
    public function exportExcel()
    {

        $cv = model("CvModel");
        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama')
            ->setCellValue('B1', 'Tanggal Lahir')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', 'Alamat')
            ->setCellValue('E1', 'Jenis Kelamin')
            ->setCellValue('F1', 'Agama')
            ->setCellValue('G1', 'Hobi')
            ->setCellValue('H1', 'Nama Pendidikan')
            ->setCellValue('I1', 'Tempat Pendidikan')
            ->setCellValue('J1', 'Waktu Pendidikan');

        $column = 2;

        foreach ($cv as $key => $cv) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $cv->nama)
                ->setCellValue('B' . $column, $cv->Tanggal_Lahir)
                ->setCellValue('C' . $column, $cv->Email)
                ->setCellValue('D' . $column, $cv->Alamat)
                ->setCellValue('E' . $column, $cv->Jenis_Kelamin)
                ->setCellValue('F' . $column, $cv->Agama)
                ->setCellValue('G' . $column, $cv->Hobi)
                ->setCellValue('H' . $column, $cv->Nama_Pendidikan)
                ->setCellValue('I' . $column, $cv->Tempat_Pendidikan)
                ->setCellValue('J' . $column, $cv->Waktu_Pendidikan);


            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = "CV";


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attactment;filename=' . $filename . '.xlsx');
        header('Cache-Control : max-age=0');
        $writer->save('php://output');
    }
    public function exportPDF()
    {

        $data = $this->request->getPost();

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdfListView'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("CV");
    }
}
