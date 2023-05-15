<?php

namespace App\Helpers;
use App\Models\training;
use App\Models\atribut;
use DB;

class AppHelper {

    public static function search_result($params){

        $result = array();
        $query_tepat = '';
        $query_terlambat = '';
        $last_index = count($params['nilai_atribut']) - 1;
        foreach ($params['nilai_atribut'] as $key => $value) {
            if ($key !== $last_index) {
                $query_tepat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS ".$params['slug']."_".$value->slug."_tepat" .", ";
                // $query_tepat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS tepat".", ";
                $query_terlambat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS ".$params['slug']."_".$value->slug."_terlambat" .", ";
            }else{
                $query_tepat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS ".$params['slug']."_".$value->slug."_tepat";
                //   $query_tepat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS ".$params['slug']."_".$value->slug."_tepat";
                $query_terlambat .= "COUNT(if(tb_training.".$params['slug']." = '".$value->slug."',1,NULL)) AS ".$params['slug']."_".$value->slug."_terlambat";
            }
            
        }


        $jml_tepat = DB::select("SELECT ".$query_tepat." FROM naive_bayes.tb_training WHERE tb_training.status_masa_study='tepat_waktu'");
        $jml_terlambat = DB::select("SELECT ".$query_terlambat." FROM naive_bayes.tb_training WHERE tb_training.status_masa_study='terlambat'");

        $total_tepat = 0;
        $total_terlambat = 0;
        $result_tepat = 0;
        $result_terlambat = 0;
        foreach ($params['nilai_atribut'] as $x => $y) {
        
            for ($i=0; $i < count($jml_tepat) ; $i++) {
                $indexes_tepat = $params['slug'].'_'.$params['nilai_atribut'][$x]['slug'].'_tepat';
                $indexes_terlambat = $params['slug'].'_'.$params['nilai_atribut'][$x]['slug'].'_terlambat'; 
        
                $total_tepat += $jml_tepat[$i]->$indexes_tepat;  
                $total_terlambat +=  $jml_terlambat[$i]->$indexes_terlambat;

                // $result[$params['nilai_atribut'][$x]['slug']] = [
                //     'tepat' => $jml_tepat[$i]->$indexes_tepat,
                //     'terlambat' => $jml_terlambat[$i]->$indexes_terlambat,
                // ];

                 $result['nilai'][] = [
                    'label' => $params['nilai_atribut'][$x]['slug'],
                    'tepat' => $jml_tepat[$i]->$indexes_tepat,
                    'terlambat' => $jml_terlambat[$i]->$indexes_terlambat,
                ];

                $result['total'] = [
                    'tepat' => $total_tepat,
                    'terlambat' => $total_terlambat,
                ];

                if ($total_tepat > 0) {
                   $result_tepat = round(($jml_tepat[$i]->$indexes_tepat / $total_tepat),5);
                }

                if ($total_terlambat > 0) {
                    $result_terlambat = round(($jml_terlambat[$i]->$indexes_terlambat / $total_terlambat),5);
                }

                $result['hasil'][$params['nilai_atribut'][$x]['slug']] = [
                    'tepat' => $result_tepat,
                    'terlambat' => $result_terlambat
                ];
            }
        }

        return $result;

    }

    public static function probabilitas() {
        $result = [];
       
        $atribut = atribut::with('nilai_atribut')->orderBy('id','ASC')->get();
        foreach ($atribut as $key => $value) {
            $result[] = static::search_result($value);
        }

        return $result;
	}

    public static function fold_proses(){
        $samples = [
            [3, 4, 50.5],
            [1, 5, 24.7],
            [4, 4, 62.0],
            [3, 2, 31.1],
            [3, 4, 50.5],
            [1, 5, 24.7],
            [4, 4, 62.0],
            [3, 2, 31.1],
            [3, 4, 50.5],
            [1, 5, 24.7],
            [4, 4, 62.0],
            [3, 2, 31.1],
        ];

        $labels = ['married', 'divorced', 'married', 'divorced', 'married', 'divorced','divorced', 'married', 'divorced', 'married', 'married', 'married'];

        $dataset = new Labeled($samples, $labels);
        $estimator = new KNearestNeighbors(3);
        $estimator->train($dataset);

        $validator = new KFold(3);
        $score = $validator->test($estimator, $dataset, new Accuracy());
        echo $score;


    }
}
