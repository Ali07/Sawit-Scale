<?php

namespace App\Http\Controllers;

use PDF;
use App\TbsMasuk;
use App\TbsKeluar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
	public function index(Request $request)
	{
		$view = [
			'title'			=> 'Laporan',
		];

		return view('admin.pages.laporan.index')->with($view);
	}

    public function cetak(Request $request)
    {
        $tanggal = explode(" - ", $request->rentang_tanggal);
        $from = $tanggal[0];
        $to = $tanggal[1];

        if($request->jenis_laporan == 'tbs_masuk'){
            $item = TbsMasuk::WhereDate('tanggal_jam','>=',$from)->whereDate('tanggal_jam','<=',$to)->get();
        }else{
            $item = TbsKeluar::WhereDate('tanggal_jam','>=',$from)->whereDate('tanggal_jam','<=',$to)->get(); 
        }

        if ($request->jenis_file == "pdf") {
            $pdf = PDF::loadView('admin.pages.laporan.pdf.laporan_'.$request->jenis_laporan, ['items'=>$item])->setPaper('a4','landscape');
        return $pdf->stream('invoice.pdf');
        }
    }
}
