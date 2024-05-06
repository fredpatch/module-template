<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Modules\Template\Models\TemplatesModel;
use Modules\Template\App\Helpers\Template;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\TemplateList;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
 */

// Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
// });

//Route Template to request for a leave 
// Route::get('/templates/requests/{code}', function($code) {
//     try {
//         // fetch the template from the database using the code of the template
//         $templatesModel = TemplatesModel::where('code', $code)->firstOrFail();

//         // get the content of the template
//         $data = [
//             'applicantName' => 'APPLICANT_NAME',
//             'applicantDepartment' => 'APPLICANT_DEPARTMENT',
//             'companyName' => 'COMPANY_NAME',
//             'dateOfApplication' => 'DATE_OF_APPLICATION',
//             'applicationSubject' => 'APPLICATION_SUBJECT',
//             'recipientName' => 'RECIPIENT_NAME',
//             'leaveType' => 'LEAVE_TYPE',
//             'startDate' => 'START_DATE',
//             'endDate' => 'END_DATE',
//             'leaveReason' => 'LEAVE_REASON',
//         ];

//         $content = Template::getTemplate($templatesModel, $data);

//         // Load Html content into pdf and return the stream
//         $pdf = Pdf::loadHTML($content);

//         return $pdf->stream();

//     } catch (\Exception $e) {
//         // Log error
//         Log::error('Error generating template PDF: ' . $e->getMessage());

//         return response()->json([
//             'message' => 'An error occurred while generating the template. Please try again later.',
//         ], 500);
//     }
// });

//Route Template to refuse leave
// Route::get('/templates/refusals/{code}', function($code) {
//     try {
//         // fetch the template from the database using the code of the template
//         $templatesModel = TemplatesModel::where('code', $code)->firstOrFail();

//         // get the content of the template
//         $data = [
//             'applicantName' => 'APPLICANT_NAME',
//             'startDate' => 'START_DATE',
//             'endDate' => 'END_DATE',
//             'reason' => 'REASON_FOR_REFUSAL',
//             'companyName' => 'COMPANY_NAME',
//         ];

//         $content = Template::getTemplate($templatesModel, $data);

//         // Load Html content into pdf and return the stream
//         $pdf = Pdf::loadHTML($content);

//         return $pdf->stream();

//     } catch (\Exception $e) {
//         // Log error
//         Log::error('Error generating template PDF: ' . $e->getMessage());

//         return response()->json([
//             'message' => 'An error occurred while generating the template. Please try again later.',
//         ], 500);
//     }
// });

//Route Template to approve leave
// Route::get('/templates/approvals/{code}', function($code) {
//     try {
//         // fetch the template from the database using the code of the template
//         $templatesModel = TemplatesModel::where('code', $code)->firstOrFail();

//         // get the content of the template
//         $data = [
//             'applicantName' => 'APPLICANT_NAME',
//             'startDate' => 'START_DATE',
//             'endDate' => 'END_DATE',
//             'companyName' => 'COMPANY_NAME',
//         ];

//         $content = Template::getTemplate($templatesModel, $data);

//         // Load Html content into pdf and return the stream
//         $pdf = Pdf::loadHTML($content); 

//         return $pdf->stream();

//     } catch (\Exception $e) {
//         // Log error
//         Log::error('Error generating template PDF: ' . $e->getMessage());

//         return response()->json([
//             'message' => 'An error occurred while generating the template. Please try again later.',
//         ], 500);
//     }
// });


// Route to save a template
// Route::post('/templates/create', function (Request $request) {
//     try{
//         $user = User::first();

//         // get the data from the request
//         $data = $request->all();

//         // validate the data
//         $validateData = Validator::make($data, [
//             'code' => 'required | string',
//             'description' => 'required | string',
//             'content' => 'required | string',
//             'meta' => 'json',
//         ]);

//         if ($validateData->fails()) {
//             return response()->json([
//                 'message' => 'Invalid data provided.',
//                 'errors' => $validateData->errors(),
//             ], 422);
//         }

//         // save the template to the database
//         $template = new TemplatesModel();

//         $template->code = $data['code'];
//         $template->description = $data['description'];
//         $template->content = $data['content'];
//         $template->meta = $data['meta'];
//         // $template->user_id = $user->id;
        
//         $template->save();

//         return response()->json(['message' => 'Template created successfully.'], 200);

//     }catch(\Exception $e){

//         // Log error
//         Log::error('Error when creating new template: ' . $e->getMessage());

//         return response()->json([
//             'message' => 'An error occurred while creating the template. Please try again later.',
//         ], 500);
//     }
// });

// Route::post('api/template', [TemplateList::class, 'submit'])->name('template.submit');