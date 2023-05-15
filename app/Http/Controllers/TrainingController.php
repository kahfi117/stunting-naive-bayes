<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TrainingImport;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class TrainingController extends Controller
{

    public function index(){
        $training = Training::orderBy('id', 'ASC')->get();

        return view('admin.training.index', compact('training'));
    }

    public function store(Request $request){

        $training = new Training();
        $training->nama = $request->nama;
        $training->umur = $request->umur;
        $training->berat_badan = $request->berat_badan;
        $training->tinggi_badan = $request->tinggi_badan;
        $training->lingkar_atas = $request->lingkar_atas;
        $training->status = $request->status;
        $training->save();

        Alert::toast('Berhasil Menambahkan Data Baru', 'success');
        
        return redirect()->back();
    }

    public function update(Training $training, Request $request){
        $training->nama = $request->nama;
        $training->umur = $request->umur;
        $training->berat_badan = $request->berat_badan;
        $training->tinggi_badan = $request->tinggi_badan;
        $training->lingkar_atas = $request->lingkar_atas;
        $training->status = $request->status;
        $training->update();

        Alert::toast('Berhasil Menambahkan Data Baru', 'success');
        
        return redirect()->back();
    }

    public function destroy($id){


        $training = Training::findOrFail($id);

        $training->delete();

        Alert::toast('Berhasil Mengahpsus Data', 'success');

        return redirect()->back();
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);        


        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        if (!in_array($nama_file, ['csv', 'xls', 'xlsx'])) {
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_training',$nama_file);
    
            // import data
            Excel::import(new TrainingImport, public_path('/file_training/'.$nama_file));
    
            Alert::toast('Berhasil Mengimport Data', 'success');
    
            // alihkan halaman kembali
            return redirect()->back();
        }

        Alert::toast('File Tidak Support', 'error');
        return redirect()->back(); 
        
	}




}
