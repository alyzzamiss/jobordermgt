<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body{
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1, h2, h4, h5, h6{
            font-family: Arial, Helvetica, sans-serif;
        }

        h3{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        table{
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            font-size:11pt;
        }

        table, td, th {
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
            font-size:11pt;
        }

        /*#paper{
            margin: auto;
            border: 1px solid black;
        }*/
        #content p{
            font-family: Arial, Helvetica, sans-serif;
            font-size:12pt;
        }

        #logo{
            margin: auto;
            width: 60%;
            height: 100px;
            display:flex;
            font-family: Arial, Helvetica, sans-serif;
        }   

        #id_date{
            float:right;
            margin-right: 10px;
        }

        #content{
            float:left;
            margin-left: 10px;
        }

        #tables{
            clear: both;
            margin-left:25px;
            margin-right: 10px;
            width: 90%;
            height: auto;
       }

        #sign{
            margin-right: 10px;
            clear: both;
            float:right;
        }
        #accept h3{
            clear: both;
            border: 2px solid black;
        }

        #accept p{
            clear: both;
            float:left;
            margin-left: 10px;
       }
    </style>
</head>

<body>
    <div id="paper">
        <div id="logo">
            <p><img style="width:70px;height:70px;" src="C:\xampp\img\iit.png" /></p>
            <p align="center"><em style="font-size:11px;">Republic of the Philippines</em>
            <br>
            Mindanao State University
            <br>
            <b>ILIGAN INSTITUTE OF TECHNOLOGY</b>
            <br>
            Iligan City</p>
        </div>

        <h3 align="center">JOB ORDER REQUEST</h3>
        
        <div id="id_date">
            <p>Job Order No. : {{$joborder->id}}<br>Date: {{$joborder->created_at}}</p>
        </div>
        
        <br>
        <br>

        <div id="content">
            <p><b>THE CHANCELLOR</b><br>This Institute</p>
            <p>Sir:</p>
            <p>I have the honor to request that the job described hereunder be undertaken by an appropriate shop/person in this City:</p>
        </div>

        <div id="tables">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><center>Detail of Job</center></th>
                        <th scope="col"><center>Date to be undertaken</center></th>
                        <th scope="col"><center>Account Charge</center></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{$joborder->jo_details}}</td>
                        <td><center>{{$joborder->date_due}}</center></td>
                        <td><center>{{$joborder->account_name}}</center></td>
                    </tr>
                </tbody>
            </table>
            <p>Estimated Cost: {{$joborder->amount}}</p>
        </div>
        
        <div id="sign">
            <p>Very truly yours, <br>{{$joborder->staff_name}}</p>
            <br>
            <p>APPROVED:</p>
            <p>________________________<br>Chancellor</p>
        </div>
        <br>
        <br>
        <br>
        <div id="accept">
            <h3>CERTIFICATE OF ACCEPTANCE</h3>
            <p>I HEREBY CERTIFY that the job described above is found and satisfactory and in accordance with job specifications; this article is good order and condition.</p>
        </div>
        <br>
        <br>
        <div id="sign">
            <p>________________________<br>Job Requistioner</p>
        </div>
    </div>

</body>
</html>
