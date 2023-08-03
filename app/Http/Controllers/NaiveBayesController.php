<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Phpml\Classification\NaiveBayes;
use Phpml\Dataset\ArrayDataset;
use App\Models\Blog;
use Phpml\Metric\Accuracy;
use RealRashid\SweetAlert\Facades\Alert;

class NaiveBayesController extends Controller
{

    public function cekStunting(Request $request)
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

        $trainingData = Training::all();
        $totalData = $trainingData->count();

        $statusAbsence = Training::where('status', 'absence')->count();
        $statusPresence = Training::where('status', 'presence')->count();

        $peluangStatusAbsence = $statusAbsence / $totalData;
        $peluangStatusPresence = $statusPresence / $totalData;



        // attribut Umur

        if($umur >= 0 && $umur < 25)
        {
            $umurCat = Training::where('umur', '>=', 0)
                ->where('umur', '<', 25)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif($umur >= 25 && $umur < 49)
        {
            $umurCat = Training::where('umur', '>=', 25)
                ->where('umur', '<', 49)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        else
        {
            $umurCat = Training::where('umur', '>=', 49)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }

        // Nilai Peluang Umur
        $peluangAbsenceUmur = isset($umurCat['absence']) ? $umurCat['absence'] / $statusAbsence : 0;
        $peluangPresenceUmur = isset($umurCat['presence']) ? $umurCat['presence'] / $statusPresence : 0;

        // Attribut Berat Badan
        if ($bb >= 0 && $bb < 6)
        {
            $bbCat = Training::where('berat_badan', '>=', 0)
                ->where('berat_badan', '<', 6)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif ($bb >= 6 && $bb < 11)
        {
            $bbCat = Training::where('berat_badan', '>=', 6)
                ->where('berat_badan', '<', 11)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif ($bb >= 11 && $bb < 16)
        {
            $bbCat = Training::where('berat_badan', '>=', 11)
                ->where('berat_badan', '<', 16)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif ($bb >= 16 && $bb < 21)
        {
            $bbCat = Training::where('berat_badan', '>=', 16)
                ->where('berat_badan', '<', 21)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        else
        {
            $bbCat = Training::where('berat_badan', '>=', 21)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }

        // Nilai Peluang Berat Badan
        $peluangAbsenceBb = isset($bbCat['absence']) ? $bbCat['absence'] / $statusAbsence : 0;
        $peluangPresenceBb = isset($bbCat['presence']) ? $bbCat['presence'] / $statusPresence : 0;


        //Attribut Tinggi Badan
        if($tb >= 0 && $tb < 26)
        {
            $tbCat = Training::where('tinggi_badan', '>=', 0)
                ->where('tinggi_badan', '<', 26)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif($tb >=26 && $tb < 51)
        {
            $tbCat = Training::where('tinggi_badan', '>=', 26)
                ->where('tinggi_badan', '<', 51)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif($tb >= 51 && $tb < 76)
        {
            $tbCat = Training::where('tinggi_badan', '>=', 51)
                ->where('tinggi_badan', '<', 76)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        elseif($tb >= 76 && $tb < 100)
        {
            $tbCat = Training::where('tinggi_badan', '>=', 76)
                ->where('tinggi_badan', '<', 100)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        else
        {
            $tbCat = Training::where('tinggi_badan', '>=', 100)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }

        // Nilai Peluang Berat Badan
        $peluangAbsenceTb = isset($tbCat['absence']) ? $tbCat['absence'] / $statusAbsence : 0;
        $peluangPresenceTb = isset($tbCat['presence']) ? $tbCat['presence'] / $statusPresence : 0;


        // Lingkar Atas
        if($lla >= 0 && $lla < 16)
        {
            $llaCat = Training::where('lingkar_atas', '>=', 0)
                ->where('lingkar_atas', '<', 16)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }
        else
        {
            $llaCat = Training::where('lingkar_atas', '>=', 16)
                ->whereIn('status', ['absence', 'presence'])
                ->selectRaw('status, COUNT(*) as count')
                ->groupBy('status')
                ->pluck('count', 'status')
                ->toArray();
        }

        // Nilai Peluang Lingkar Atas
        $peluangAbsenceLla = isset($llaCat['absence']) ? $llaCat['absence'] / $statusAbsence : 0;
        $peluangPresenceLla = isset($llaCat['presence']) ? $llaCat['presence'] / $statusPresence : 0;

        $nilaiAbsence = ($peluangAbsenceUmur * $peluangAbsenceBb * $peluangAbsenceTb * $peluangAbsenceLla) * $peluangStatusAbsence;
        $nilaiPresence = ($peluangPresenceUmur * $peluangPresenceBb * $peluangPresenceTb * $peluangPresenceLla) * $peluangStatusPresence;

        if($nilaiAbsence > $nilaiPresence)
        {
            $predicted = 'absence';
        }
        else
        {
            $predicted = 'presence';
        }

        $blog = Blog::all()->random(3);

        return view('user.result_stunting', compact('nama', 'predicted', 'nilaiAbsence', 'nilaiPresence', 'blog'));
    }

    public function probabilitas()
    {
        if (Training::count() == 0) {
            Alert::toast('Pastikan Mengisi Data Training Terlebih Dahulu', 'error');
            return redirect()->back();
        }
    }

    public function calculateProbabilities()
    {

        if (Training::count() == 0) {
            Alert::toast('Pastikan Mengisi Data Training Terlebih Dahulu', 'error');
            return redirect()->back();
        }

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
        $peluangAbsenceUmurCat1 = isset($umurCat1['absence']) ? $umurCat1['absence'] / $statusAbsence : 0;
        $peluangPresenceUmurCat1 = isset($umurCat1['presence']) ? $umurCat1['presence'] / $statusPresence : 0;

        $peluangAbsenceUmurCat2 = isset($umurCat2['absence']) ? $umurCat2['absence'] / $statusAbsence : 0;
        $peluangPresenceUmurCat2 = isset($umurCat2['presence']) ? $umurCat2['presence'] / $statusPresence : 0;

        $peluangAbsenceUmurCat3 = isset($umurCat3['absence']) ? $umurCat3['absence'] / $statusAbsence : 0;
        $peluangPresenceUmurCat3 = isset($umurCat3['presence']) ? $umurCat3['presence'] / $statusPresence : 0;

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
        $peluangAbsenceBbCat1 = isset($bbCat1['absence']) ? $bbCat1['absence'] / $statusAbsence : 0;
        $peluangPresenceBbCat1 = isset($bbCat1['presence']) ? $bbCat1['presence'] / $statusPresence : 0;

        $peluangAbsenceBbCat2 = isset($bbCat2['absence']) ? $bbCat2['absence'] / $statusAbsence : 0;
        $peluangPresenceBbCat2 = isset($bbCat2['presence']) ? $bbCat2['presence'] / $statusPresence : 0;

        $peluangAbsenceBbCat3 = isset($bbCat3['absence']) ? $bbCat3['absence'] / $statusAbsence : 0;
        $peluangPresenceBbCat3 = isset($bbCat3['presence']) ? $bbCat3['presence'] / $statusPresence : 0;

        $peluangAbsenceBbCat4 = isset($bbCat4['absence']) ? $bbCat4['absence'] / $statusAbsence : 0;
        $peluangPresenceBbCat4 = isset($bbCat4['presence']) ? $bbCat4['presence'] / $statusPresence : 0;

        $peluangAbsenceBbCat5 = isset($bbCat5['absence']) ? $bbCat5['absence'] / $statusAbsence : 0;
        $peluangPresenceBbCat5 = isset($bbCat5['presence']) ?  $bbCat5['presence'] / $statusPresence : 0;


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
        $peluangAbsenceTbCat1 = isset($tbCat1['absence']) ? $tbCat1['absence'] / $statusAbsence : 0;
        $peluangPresenceTbCat1 = isset($tbCat1['presence']) ? $tbCat1['presence'] / $statusPresence : 0;

        $peluangAbsenceTbCat2 = isset($tbCat2['absence']) ? $tbCat2['absence'] / $statusAbsence : 0;
        $peluangPresenceTbCat2 = isset($tbCat2['presence']) ? $tbCat2['presence'] / $statusPresence : 0;

        $peluangAbsenceTbCat3 = isset($tbCat3['absence']) ? $tbCat3['absence'] / $statusAbsence : 0;
        $peluangPresenceTbCat3 = isset($tbCat3['presence']) ? $tbCat3['presence'] / $statusPresence : 0;

        $peluangAbsenceTbCat4 = isset($tbCat4['absence']) ? $tbCat4['absence'] / $statusAbsence : 0;
        $peluangPresenceTbCat4 = isset($tbCat4['presence']) ? $tbCat4['presence'] / $statusPresence : 0;

        $peluangAbsenceTbCat5 = isset($tbCat5['absence']) ? $tbCat5['absence'] / $statusAbsence : 0;
        $peluangPresenceTbCat5 = isset($tbCat5['presence']) ? $tbCat5['presence'] / $statusPresence : 0;


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
        $peluangAbsenceLlaCat1 = isset($llaCat1['absence']) ? $llaCat1['absence'] / $statusAbsence : 0;
        $peluangPresenceLlaCat1 = isset($llaCat1['presence']) ? $llaCat1['presence'] / $statusPresence : 0;

        $peluangAbsenceLlaCat2 = isset($llaCat2['absence']) ? $llaCat2['absence'] / $statusAbsence : 0;
        $peluangPresenceLlaCat2 = isset($llaCat2['presence']) ? $llaCat2['presence'] / $statusPresence : 0;



        // dd($statusAbsence, $statusPresence, $llaCat1, $llaCat2, $tbCat3, $tbCat4, $tbCat5);

        return view('admin.probabilitas.index', compact(
            'statusAbsence',
            'statusPresence',
            'umurCat1',
            'umurCat2',
            'umurCat3',
            'bbCat1',
            'bbCat2',
            'bbCat3',
            'bbCat4',
            'bbCat5',
            'tbCat1',
            'tbCat2',
            'tbCat3',
            'tbCat4',
            'tbCat5',
            'llaCat1',
            'llaCat2',
            'peluangStatusAbsence',
            'peluangStatusPresence',
            'peluangAbsenceUmurCat1',
            'peluangPresenceUmurCat1',
            'peluangAbsenceUmurCat2',
            'peluangPresenceUmurCat2',
            'peluangAbsenceUmurCat3',
            'peluangPresenceUmurCat3',
            'peluangAbsenceBbCat1',
            'peluangPresenceBbCat1',
            'peluangAbsenceBbCat2',
            'peluangPresenceBbCat2',
            'peluangAbsenceBbCat3',
            'peluangPresenceBbCat3',
            'peluangAbsenceBbCat4',
            'peluangPresenceBbCat4',
            'peluangAbsenceBbCat5',
            'peluangPresenceBbCat5',
            'peluangAbsenceTbCat1',
            'peluangPresenceTbCat1',
            'peluangAbsenceTbCat2',
            'peluangPresenceTbCat2',
            'peluangAbsenceTbCat3',
            'peluangPresenceTbCat3',
            'peluangAbsenceTbCat4',
            'peluangPresenceTbCat4',
            'peluangAbsenceTbCat5',
            'peluangPresenceTbCat5',
            'peluangAbsenceLlaCat1',
            'peluangPresenceLlaCat1',
            'peluangAbsenceLlaCat2',
            'peluangPresenceLlaCat2',
        ));
    }

    public function ujiMassal()
    {
        $datas = Training::all();


        foreach($datas as $data)
        {
            $nama = $data->nama;
            $umur = $data->umur;
            $bb = $data->berat_badan;
            $tb = $data->tinggi_badan;
            $lla = $data->lingkar_atas;
            $stats = $data->status;

            $totalData = $datas->count();

            $statusAbsence = Training::where('status', 'absence')->count();
            $statusPresence = Training::where('status', 'presence')->count();
    
            $peluangStatusAbsence = $statusAbsence / $totalData;
            $peluangStatusPresence = $statusPresence / $totalData;
    
    
    
            // attribut Umur
    
            if($umur >= 0 && $umur < 25)
            {
                $umurCat = Training::where('umur', '>=', 0)
                    ->where('umur', '<', 25)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif($umur >= 25 && $umur < 49)
            {
                $umurCat = Training::where('umur', '>=', 25)
                    ->where('umur', '<', 49)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            else
            {
                $umurCat = Training::where('umur', '>=', 49)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
    
            // Nilai Peluang Umur
            $peluangAbsenceUmur = isset($umurCat['absence']) ? $umurCat['absence'] / $statusAbsence : 0;
            $peluangPresenceUmur = isset($umurCat['presence']) ? $umurCat['presence'] / $statusPresence : 0;
    
            // Attribut Berat Badan
            if ($bb >= 0 && $bb < 6)
            {
                $bbCat = Training::where('berat_badan', '>=', 0)
                    ->where('berat_badan', '<', 6)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif ($bb >= 6 && $bb < 11)
            {
                $bbCat = Training::where('berat_badan', '>=', 6)
                    ->where('berat_badan', '<', 11)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif ($bb >= 11 && $bb < 16)
            {
                $bbCat = Training::where('berat_badan', '>=', 11)
                    ->where('berat_badan', '<', 16)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif ($bb >= 16 && $bb < 21)
            {
                $bbCat = Training::where('berat_badan', '>=', 16)
                    ->where('berat_badan', '<', 21)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            else
            {
                $bbCat = Training::where('berat_badan', '>=', 21)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
    
            // Nilai Peluang Berat Badan
            $peluangAbsenceBb = isset($bbCat['absence']) ? $bbCat['absence'] / $statusAbsence : 0;
            $peluangPresenceBb = isset($bbCat['presence']) ? $bbCat['presence'] / $statusPresence : 0;
    
    
            //Attribut Tinggi Badan
            if($tb >= 0 && $tb < 26)
            {
                $tbCat = Training::where('tinggi_badan', '>=', 0)
                    ->where('tinggi_badan', '<', 26)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif($tb >=26 && $tb < 51)
            {
                $tbCat = Training::where('tinggi_badan', '>=', 26)
                    ->where('tinggi_badan', '<', 51)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif($tb >= 51 && $tb < 76)
            {
                $tbCat = Training::where('tinggi_badan', '>=', 51)
                    ->where('tinggi_badan', '<', 76)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            elseif($tb >= 76 && $tb < 100)
            {
                $tbCat = Training::where('tinggi_badan', '>=', 76)
                    ->where('tinggi_badan', '<', 100)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            else
            {
                $tbCat = Training::where('tinggi_badan', '>=', 100)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
    
            // Nilai Peluang Berat Badan
            $peluangAbsenceTb = isset($tbCat['absence']) ? $tbCat['absence'] / $statusAbsence : 0;
            $peluangPresenceTb = isset($tbCat['presence']) ? $tbCat['presence'] / $statusPresence : 0;
    
    
            // Lingkar Atas
            if($lla >= 0 && $lla < 16)
            {
                $llaCat = Training::where('lingkar_atas', '>=', 0)
                    ->where('lingkar_atas', '<', 16)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
            else
            {
                $llaCat = Training::where('lingkar_atas', '>=', 16)
                    ->whereIn('status', ['absence', 'presence'])
                    ->selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->pluck('count', 'status')
                    ->toArray();
            }
    
            // Nilai Peluang Lingkar Atas
            $peluangAbsenceLla = isset($llaCat['absence']) ? $llaCat['absence'] / $statusAbsence : 0;
            $peluangPresenceLla = isset($llaCat['presence']) ? $llaCat['presence'] / $statusPresence : 0;
    
            $nilaiAbsence = ($peluangAbsenceUmur * $peluangAbsenceBb * $peluangAbsenceTb * $peluangAbsenceLla) * $peluangStatusAbsence;
            $nilaiPresence = ($peluangPresenceUmur * $peluangPresenceBb * $peluangPresenceTb * $peluangPresenceLla) * $peluangStatusPresence;
    
            if($nilaiAbsence > $nilaiPresence)
            {
                $predicted = 'absence';
            }
            else
            {
                $predicted = 'presence';
            }
            
            $predictions[] = [
                'nama' => $nama,
                'umur' => $umur,
                'bb' => $bb,
                'tb' => $tb,
                'lla' => $lla,
                'status_awal' => $stats,
                'status' => $predicted
            ];

        }

        return view('admin.training.hasil_training', compact('predictions'));
}

    // public function ujiMassal()
    // {
    //     $dataTraining = DB::table('trainings')->get();

    //     $samples = [];
    //     $labels = [];
    //     foreach ($dataTraining as $data) {
    //         $samples[] = [$data->umur, $data->berat_badan, $data->tinggi_badan, $data->lingkar_atas];
    //         $labels[] = $data->status;
    //     }

    //     $dataUjiMassal = Training::all();


    //     foreach ($dataUjiMassal as $dataUji) {
    //         // Mengelompokkan atribut data training
    //         $samples = [];
    //         $labels = [];
    //         foreach ($dataTraining as $data) {
    //             $samples[] = [$data->umur, $data->berat_badan, $data->tinggi_badan, $data->lingkar_atas];
    //             $labels[] = $data->status;
    //         }


    //         // Membuat model Naive Bayes dan melatihnya dengan data training
    //         $classifier = new NaiveBayes();
    //         $dataset = new ArrayDataset($samples, $labels);
    //         $classifier->train($dataset->getSamples(), $dataset->getTargets());

    //         // Melakukan prediksi kelas untuk data uji
    //         $predicted = $classifier->predict([$dataUji['umur'], $dataUji['berat_badan'], $dataUji['tinggi_badan'], $dataUji['lingkar_atas']]);
    //         $predictedResults[] = $predicted;
    //     }

    //     return view('admin.training.hasil_training', compact('predictedResults', 'dataUjiMassal'));
    // }
}
