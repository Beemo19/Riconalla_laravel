@extends('layouts.app')

@section('content')
<html>
    <head>
        <link rel="stylesheet" href="/css/mycss.css">
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Subjects</h2></div>

                 <div class="panel-body">
                     <table border="1" align="center">
                        <tr>
                            <td>EDP CODE</td>
                            <td>SUBJECT</td>
                            <td>TIME</td>
                            <td>DAYS</td>
                            <td>ROOM</td>
                            <td>UNITS</td>
                        </tr>
                        <tr>
                            <td>IT-02600</td>
                            <td>ITELECPHP2(LAB)</td>
                            <td>7:31-8:31 PM</td>
                            <td>MWF</td>
                            <td>544</td>
                            <td></td>
                        </tr>   
                        <tr>
                            <td>...</td>
                            <td>ITELECPHP2</td>
                            <td>6:31-7:31 PM</td>
                            <td>MWF</td>
                            <td>530A</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>IT-01867</td>
                            <td>FREEELCIS</td>
                            <td>10:30-12:00 PM</td>
                            <td>TTH</td>
                            <td>536</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>IT-02584</td>
                            <td>CAPSTONE41</td>
                            <td>12:30-3:30 PM</td>
                            <td>SUN</td>
                            <td>537</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>IT-02543</td>
                            <td>PRACT41(LAB)</td>
                            <td>12:00-3:00 PM</td>
                            <td>TTH</td>
                            <td>FLD</td>
                            <td>6.0</td>
                        </tr>  
                     </table>
                 </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
