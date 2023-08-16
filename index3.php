<?php
 $str = '{
    "student_results": [
      {
        "student_id": "123456",
        "student_name": "John Doe",
        "exam_date": "2023-08-10",
        "subjects": [
          {
            "subject_name": "Mathematics",
            "score": 85,
            "passing_score": 60,
            "reason": "Excellent performance"
          },
          {
            "subject_name": "Science",
            "score": 72,
            "passing_score": 60,
            "reason": "Satisfactory performance"
          },
          {
            "subject_name": "History",
            "score": 50,
            "passing_score": 60,
            "reason": "Below passing score"
          }
        ]
      },
      {
        "student_id": "789012",
        "student_name": "Jane Smith",
        "exam_date": "2023-08-10",
        "subjects": [
          {
            "subject_name": "Mathematics",
            "score": 75,
            "passing_score": 60,
            "reason": "Satisfactory performance"
          },
          {
            "subject_name": "Science",
            "score": 62,
            "passing_score": 60,
            "reason": "Satisfactory performance"
          },
          {
            "subject_name": "History",
            "score": 45,
            "passing_score": 60,
            "reason": "Below passing score"
          }
        ]
      }
    ]
  }';
//   echo $str;
//Convert the JSON to ARRAY format
  $json1 = json_decode($str,true);
//   print_r($json1);
  $arr = $json1["student_results"];
// $bag = [];
for($i=0;$i<count($arr);$i++){
    $bag = $arr[$i];
    $subject_bag = $bag["subjects"];
    foreach ($subject_bag as $key => $value) {
        # code...
        $arr_value = $value;
        print_r($value["score"]);
          echo '</br>';
    } 
}

// php code json formate:-
// $studentResults = [
//    [
//     "student_id" => "123456",
//     "student_name" => "John Doe",
//     "exam_date"  => "2023-08-10",
//     "subjects" => [
//         [
//         "subject_name" => "Mathematics",
//         "score" => 85,
//         "passing_score" => 60,
//         "reason" => "Excellent performance"
//     ],
//     [
//         "subject_name" => "Science",
//         "score" => 72,
//         "passing_score" => 60,
//         "reason" => "Satisfactory performance"
//     ],
//     [
//         "subject_name" => "History",
//         "score" => 50,
//         "passing_score" => 60,
//         "reason" => "Below passing score"
//     ]
//     ]
// ],
// [
//     "student_id" => "789012",
//     "student_name" => "Jane Smith",
//     "exam_date"  => "2023-08-10",
//     "subjects" => [
//         [
//         "subject_name" => "Mathematics",
//         "score" => 75,
//         "passing_score" => 60,
//         "reason" => "Satisfactory performance"
//     ],
//     [
//         "subject_name" => "Science",
//         "score" => 62,
//         "passing_score" => 60,
//         "reason" => "Satisfactory performance"
//     ],
//     [
//         "subject_name" => "History",
//         "score" => 45,
//         "passing_score" => 60,
//         "reason" => "Below passing score"
//     ]
//     ]
// ],
// ];

// $arr = $studentResults;
// // $bag = [];
// for($i=0;$i<count($arr);$i++){
//     $bag = $arr[$i];
//     $subject_bag = $bag["subjects"];
//     foreach ($subject_bag as $key => $value) {
//         # code...
//         $arr_value = $value;
//         print_r($value["score"]);
//           echo '</br>';
//     } 
// }
// $jsonData = ["student_results" => $studentResults];
// print_r($jsonData);
// Convert the array to JSON format
//$jsonString = json_encode($jsonData, JSON_PRETTY_PRINT);

// Output the JSON
// echo $jsonString;



?>