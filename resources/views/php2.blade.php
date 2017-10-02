@extends('layouts.app')

@section('content')
<html>
    <head>
        <link rel="stylesheet" href="/css/mycss.css">
    </head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>About PHP2</h2></div>

                <div class="panel-body">
                   <table align="center" class="fe">
                       <tr>
                           <td><b>Teacher:</b> Gian Carlo Cataraja</td>
                           <td><b>LEC:</b> 2 units | 2 hours per week</td>
                       </tr>
                       <tr>
                           <td></td>
                           <td><b>LAB:</b> 1 unit | 3 hours per week</td>
                       </tr>
                       <tr>
                            <td></td>
                            <td><b>Pre-requisite:</b> ITElecPHP1</td>
                       </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
