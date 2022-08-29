<!DOCTYPE html>
<html lang="en">
<head>

    <title>{{$data->course_code}}</title>
    <style>
        * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  width: 100%;
}
         @page {
            margin: 15px 15px 15px 15px !important;
            padding: 0px 0px 0px 0px !important;
            
        }
        
.borda {
    border: 3px solid black !important;
        }
    </style>
</head>
<body style="background:#F8F7F5;">

    <div class="container">
        <div style="background:#F8F7F5;" class="row text-center">
            <div class="col-md-12">
                            <div style="text-align:center !important;">
                            <img style="width: 100%; height:250px;" src="{{(!empty($data->image))?public_path('img/' .$data->image):public_path('img/head.png')}}" alt="" srcset="">
                        </div>
                        <h1 style="text-align: center; text-transform:uppercase;">{{$data->report_item}}</h1>
                        <h3 style="text-align: center; font-size:20px;">{{$data->topic_name}}</h3><br>
                        <div style="background:#EAEAEA; padding:30px;">
                            <h3>COURSE TITLE : <small style="font-size:20px;">{{$data->course_tittle}}</small></h3>
                            <h3>COURSE CODE : <small style="font-size:20px;">{{$data->course_code}}</small></h3>
                        </div>
                        <div style="background:#F8F7F5; padding:30px; padding-bottom:0px !important" class="row">
                            <div class="column">
                                <h2 style="text-transform: uppercase;">Submitted By :</h2>
                                <h3>NAME : <small style="text-transform: uppercase; font-size:20px;">{{$data->std_name}}</small></h3>
                                <h3>ID : <small style="font-size:20px;">{{$data->id_no}}</small></h3>
                                <h3>SESSION : <small style="font-size:20px;">{{$data->session}}</small></h3>
                                <h3>DEPARTMENT : <small style="font-size:20px;">{{$data->std_dept}}</small></h3>
                                <h3>Begum Rokeya University, Rangpur</h3>
                            </div>
                            <div class="column">
                                <h2 style="text-transform: uppercase">Submitted TO :</h2>
                                <h3>NAME : <small style="text-transform: uppercase; font-size:20px;">{{$data->teacher_name	}}</small></h3>
                                <h3 style="font-size:20px;">{{$data->designation}}</h3>
                                <h3>DEPARTMENT : <small style="font-size:20px;">{{$data->teacher_dept}}</small></h3>
                                <h3>Begum Rokeya University, Rangpur</h3>
                            </div> <hr>
                            <hr>
                        </div>
                        <div style="background:#F8F7F5; padding:30px; padding-bottom:0px !important" class="row">
                            <hr>
                        <h3 style="text-align: center">SUBMISSION : <small style="font-size:20px;">{{$data->sub_time}}</small></h3>
                        </div>
            </div>
        </div>
    </div>
    



</body>
</html>