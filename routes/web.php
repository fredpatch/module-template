<?php

use Illuminate\Support\Facades\Route;
use Modules\Template\Http\Controllers\TemplateController;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Modules\Template\App\Helpers\Template;
use Modules\Template\Models\Applications;
use Modules\Template\Models\TemplatesModel;

Route::get('/applications', [TemplateController::class, 'getApplicationList']);

Route::get('/applications/show/{application_id}', [TemplateController::class, 'getApplication'])->name('application.show');

Route::get('/templates/generate/{user_id}/{application_id}/{template_code}',function($user_id, $application_id, $template_code){
    $user = User::findOrFail($user_id);
    $application = Applications::findOrFail($application_id);
    $template = TemplatesModel::where('code', $template_code)->first();
    $leaveRequest= Template::getTemplate($template, [
        'applicantName' => $user->name,
        'startDate' => $application->startDate,
        'endDate' => $application->endDate,
        'recipientName' => $application->recipientName,
        'dateDeparture' => $application->dateDeparture,
        'applicationName' => $application->applicationName
    ]);
    $pdf = Pdf::loadHTML($leaveRequest);
    return $pdf->stream();

})->name('template.generate');