<?php

namespace Modules\Template\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Template\App\Helpers\Template;
use Modules\Template\Models\Applications;
use Modules\Template\Models\TemplatesModel;
use Modules\Template\Models\VacationApplicationsModel;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function getUserLeaveRequestTemplate(Request $request)
    // {

    //     $templateModel = TemplatesModel::where('code', 'LEAVE_REQUEST')->first();

    //     /*Validate request*/

    //     $user= User::findOrFail($request['user_id']);
        
                
         
    // }

    public function getApplicationList()
    {
        $templates = TemplatesModel::all();
        $applications = Applications::all();
        return view('template::applications', ['applications' => $applications, 'templates' => $templates]);
    }

    public function getApplication($application_id)
    {
        $users = User::all();
        $application = Applications::findOrFail($application_id);
        return view('template::application-details', ['application' => $application, 'users' => $users]);
    }

    public function generateTemplate(Request $request)
    {
        $user = User::firstOrFail($request['user_id']);


        $application = Applications::first();
        $data = $request->all();
        $templateModel = TemplatesModel::where('code', $data['templateCode'])->first();
        $leaveRequest= Template::getTemplate($templateModel, [
            'applicantName' => $user->name,
            'startDate' => $application->startDate,
            'endDate' => $application->endDate,
            'recipientName' => $application->recipientName,
            'dateDeparture' => $application->dateDeparture,
        ]);
        $pdf = Pdf::loadHTML($leaveRequest);
        return $pdf->stream();
    }

    public function getRequestTemplate(Request $request)
    {

        $templateModel = TemplatesModel::where('code', 'LEAVE_REQUEST')->first();

        /*Validate request*/

        $user= User::findOrFail($request['user_id']);
        
        
         
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('template::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('template::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('template::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
