<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function getReportById(Request $request)
    {
        $reportId = $request->input('reportId');
        // Vulnerable SQL query
        $sql = "SELECT * FROM reports WHERE id = " . $reportId;
        
        $reports = mysqli_query($conn, $sql);

        return view('reports.show', compact('report'));
    }
}
