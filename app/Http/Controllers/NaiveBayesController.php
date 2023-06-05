<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Phpml\Classification\NaiveBayes;
use Phpml\Dataset\ArrayDataset;
use Phpml\Metric\Accuracy;
use RealRashid\SweetAlert\Facades\Alert;

class NaiveBayesController extends Controller
{
    
    public function cekStunting (Request $request)
    {
        // Mendapatkan data uji dari form
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $bb = $request->input('bb');
        $tb = $request->input('tb');
        $lla = $request->input('lla');

        $dataTraining = DB::table('trainings')->get();

        // Mengelompokkan atribut dan label dari data latih
        $samples = [];
        $labels = [];
        foreach ($dataTraining as $data) {
            $samples[] = [$data->umur, $data->berat_badan, $data->tinggi_badan, $data->lingkar_atas];
            $labels[] = $data->status;
        }

        // Membuat model Naive Bayes dan melatihnya dengan data latih
        $classifier = new NaiveBayes();
        $dataset = new ArrayDataset($samples, $labels);
        $classifier->train($dataset->getSamples(), $dataset->getTargets());

        $predictions = $classifier->predict($dataset->getSamples());

        // Melakukan prediksi kelas untuk data uji
        $predicted = $classifier->predict([$umur, $bb, $tb, $lla]);

        // dd($predicted);

        // Menyimpan data uji dan hasil prediksi ke dalam database
        DB::table('data_testing')->insert([
            'nama' => $nama,
            'umur' => $umur,
            'bb' => $bb,
            'tb' => $tb,
            'lla' => $lla,
            'status' => $predicted
        ]);

        // Menghitung akurasi model dengan data latih
        $accuracy = Accuracy::score($predictions, $dataset->getTargets());

        dd('accuracy => '. $accuracy, 'Prediksi => '.$predicted);

        return view('naive_bayes.result', compact('nama', 'predicted', 'accuracy'));

    }
    
    public function probabilitas()
    {
        if(Training::count() == 0){
            Alert::toast('Pastikan Mengisi Data Training Terlebih Dahulu', 'error');
            return redirect()->back();
        }

        
    }

    public function calculateProbabilities()
    {

        $trainingData = Training::all();
        $totalData = $trainingData->count();

        $statusAbsence = Training::where('status', 'absence')->count();
        $statusPresence = Training::where('status', 'presence')->count();

        $peluangStatusAbsence = $statusAbsence / $totalData;
        $peluangStatusPresence = $statusPresence / $totalData;

       

        // attribut Usia
        $umurCat1 = Training::where('umur', '>=', 0)
                        ->where('umur', '<', 25)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $umurCat2 = Training::where('umur', '>=', 25)
                        ->where('umur', '<', 49)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $umurCat3 = Training::where('umur', '>=', 49)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();

        // Nilai Peluang Umur
        $peluangAbsenceUmurCat1 = $umurCat1['absence'] / $statusAbsence; 
        $peluangPresenceUmurCat1 = $umurCat1['presence'] / $statusPresence; 

        $peluangAbsenceUmurCat2 = $umurCat2['absence'] / $statusAbsence; 
        $peluangPresenceUmurCat2 = $umurCat2['presence'] / $statusPresence; 

        $peluangAbsenceUmurCat3 = $umurCat3['absence'] / $statusAbsence; 
        $peluangPresenceUmurCat3 = $umurCat3['presence'] / $statusPresence; 

        // Attribut Berat Badan
        $bbCat1 = Training::where('berat_badan', '>=', 0)
                        ->where('berat_badan', '<', 6)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $bbCat2 = Training::where('berat_badan', '>=', 6)
                        ->where('berat_badan', '<', 11)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $bbCat3 = Training::where('berat_badan', '>=', 11)
                        ->where('berat_badan', '<', 16)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $bbCat4 = Training::where('berat_badan', '>=', 16)
                        ->where('berat_badan', '<', 21)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $bbCat5 = Training::where('berat_badan', '>=', 21)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
            
        // Nilai Peluang Berat Badan
        $peluangAbsenceBbCat1 = $bbCat1['absence'] / $statusAbsence; 
        $peluangPresenceBbCat1 = $bbCat1['presence'] / $statusPresence;

        $peluangAbsenceBbCat2 = $bbCat2['absence'] / $statusAbsence; 
        $peluangPresenceBbCat2 = $bbCat2['presence'] / $statusPresence; 

        $peluangAbsenceBbCat3 = $bbCat3['absence'] / $statusAbsence; 
        $peluangPresenceBbCat3 = $bbCat3['presence'] / $statusPresence; 
    
        $peluangAbsenceBbCat4 = $bbCat4['absence'] / $statusAbsence; 
        $peluangPresenceBbCat4 = $bbCat4['presence'] ?? 0 / $statusPresence; 

        $peluangAbsenceBbCat5 = $bbCat5['absence'] ?? 0 / $statusAbsence; 
        $peluangPresenceBbCat5 = $bbCat5['presence'] ?? 0 / $statusPresence; 


        //Attribut Tinggi Badan
        $tbCat1 = Training::where('tinggi_badan', '>=', 0)
                        ->where('tinggi_badan', '<', 26)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $tbCat2 = Training::where('tinggi_badan', '>=', 26)
                        ->where('tinggi_badan', '<', 51)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $tbCat3 = Training::where('tinggi_badan', '>=', 51)
                        ->where('tinggi_badan', '<', 76)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $tbCat4 = Training::where('tinggi_badan', '>=', 76)
                        ->where('tinggi_badan', '<', 100)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $tbCat5 = Training::where('tinggi_badan', '>=', 100)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();

        // Nilai Peluang Berat Badan
        $peluangAbsenceTbCat1 = $tbCat1['absence'] ?? 0 / $statusAbsence; 
        $peluangPresenceTbCat1 = $tbCat1['presence'] ?? 0 / $statusPresence;

        $peluangAbsenceTbCat2 = $tbCat2['absence'] ?? 0 / $statusAbsence; 
        $peluangPresenceTbCat2 = $tbCat2['presence'] ?? 0/ $statusPresence; 

        $peluangAbsenceTbCat3 = $tbCat3['absence'] / $statusAbsence; 
        $peluangPresenceTbCat3 = $tbCat3['presence'] / $statusPresence; 
    
        $peluangAbsenceTbCat4 = $tbCat4['absence'] / $statusAbsence; 
        $peluangPresenceTbCat4 = $tbCat4['presence'] / $statusPresence; 

        $peluangAbsenceTbCat5 = $tbCat5['absence'] / $statusAbsence; 
        $peluangPresenceTbCat5 = $tbCat5['presence'] / $statusPresence;

                        
        // Lingkar Atas
        $llaCat1 = Training::where('lingkar_atas', '>=', 0)
                        ->where('lingkar_atas', '<', 16)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();
        $llaCat2 = Training::where('lingkar_atas', '>=', 16)
                        ->whereIn('status', ['absence', 'presence'])
                        ->selectRaw('status, COUNT(*) as count')
                        ->groupBy('status')
                        ->pluck('count', 'status')
                        ->toArray();

        // Nilai Peluang Lingkar Atas
        $peluangAbsenceLlaCat1 = $llaCat1['absence'] / $statusAbsence; 
        $peluangPresenceLlaCat1 = $llaCat1['presence'] / $statusPresence;
        
        $peluangAbsenceLlaCat2 = $llaCat2['absence'] / $statusAbsence; 
        $peluangPresenceLlaCat2 = $llaCat2['presence'] / $statusPresence;

            

        // dd($statusAbsence, $statusPresence, $llaCat1, $llaCat2, $tbCat3, $tbCat4, $tbCat5);

        return view('admin.probabilitas.index', compact(
            'statusAbsence', 'statusPresence',
            'umurCat1', 'umurCat2', 'umurCat3',
            'bbCat1', 'bbCat2', 'bbCat3', 'bbCat4', 'bbCat5',
            'tbCat1', 'tbCat2', 'tbCat3', 'tbCat4', 'tbCat5',
            'llaCat1', 'llaCat2',
            'peluangStatusAbsence', 'peluangStatusPresence',
            'peluangAbsenceUmurCat1', 'peluangPresenceUmurCat1', 
            'peluangAbsenceUmurCat2', 'peluangPresenceUmurCat2', 
            'peluangAbsenceUmurCat3', 'peluangPresenceUmurCat3',
            'peluangAbsenceBbCat1', 'peluangPresenceBbCat1',
            'peluangAbsenceBbCat2', 'peluangPresenceBbCat2',
            'peluangAbsenceBbCat3', 'peluangPresenceBbCat3',
            'peluangAbsenceBbCat4', 'peluangPresenceBbCat4',
            'peluangAbsenceBbCat5', 'peluangPresenceBbCat5',
            'peluangAbsenceTbCat1', 'peluangPresenceTbCat1',
            'peluangAbsenceTbCat2', 'peluangPresenceTbCat2',
            'peluangAbsenceTbCat3', 'peluangPresenceTbCat3',
            'peluangAbsenceTbCat4', 'peluangPresenceTbCat4',
            'peluangAbsenceTbCat5', 'peluangPresenceTbCat5',
            'peluangAbsenceLlaCat1', 'peluangPresenceLlaCat1',
            'peluangAbsenceLlaCat2', 'peluangPresenceLlaCat2',
        ));
        
    }
}
