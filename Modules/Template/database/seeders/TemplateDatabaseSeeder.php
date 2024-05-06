<?php

namespace Modules\Template\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Template\App\Helpers\Template;
use Modules\Template\Models\Applications;
use Modules\Template\Models\LeaveApplicationsModel;
use Modules\Template\Models\TemplatesModel;
use Modules\Template\Models\VacationApplicationsModel;

class TemplateDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = User::first();

        // $this->call([]);

        //         TemplatesModel::factory(1)->create([
        //             'code' => 'LEAVE_REQUEST',
        //             'description' => 'Base Template for leave request application',
        //             'content' =>
        //                 '<div>
        //                 <div class="#1">
        //     <span class="name-applicant">
        //         {{applicantName}}
        //     </span>
        //     <span class="department-applicant">
        //         {{applicantDepartment}}
        //     </span>

        // </div>

        // <div class="subject-application">
        //     Subject:{{applicationName}}
        // </div>

        // <span class="recipient-name">
        //     <p>
        //         Dear {{recipientName}},
        //     </p>
        // </span>

        // <p class="leave-text">
        //     I would like to kindly ask for your approval to my {{applicationName}} leave starting on
        //     {{startDate}} and ending on {{endDate}}.
        // </p>

        // <p class="thank-you">
        //     I appreciate your prompt response for my request.
        // </p>

        // <p class="signature">
        //     Best Regards
        // </p>

        // <div class="name-signature">
        //     {{applicantName}}
        // </div>
        //                 </div>',
        //             'meta' => json_encode([
        //                 'applicantName' => 'APPLICANT_NAME',
        //                 'applicantDepartment' => 'APPLICANT_DEPARTMENT',
        //                 'applicationName' => 'APPLICATION_NAME',
        //                 'recipientName' => 'RECIPIENT_NAME',
        //                 'startDate' => 'START_DATE',
        //                 'endDate' => 'END_DATE',
        //             ]),
        //         ]);

        //     TemplateModel::factory(1)->create([
        //         'code' => 'LEAVE_REFUSAL',
        //         'description' => 'Base Template for refusal of leave request',
        //         'content' => '
        // <div class="container">
        //     <h1>Refusal of Leave Request</h1>
        //     <p>
        //         Dear <span class="applicantName">[APPLICANT_NAME]</span>,
        //     </p>
        //     <p>
        //         We regret to inform you that your request for leave, starting from <span class="startDate">[START_DATE]</span> to <span class="endDate">[END_DATE]</span>, has been refused due to the following reason:
        //     </p>
        //     <p class="reason">
        //         [REASON_FOR_REFUSAL]
        //     </p>
        //     <p>
        //         If you have any questions or concerns, please feel free to contact us.
        //     </p>
        //     <p>
        //         Sincerely,<br>
        //         [COMPANY_NAME]
        //     </p>
        // </div>',
        //         'meta' => json_encode([
        //             'applicantName' => 'APPLICANT_NAME',
        //             'startDate' => 'START_DATE',
        //             'endDate' => 'END_DATE',
        //             'reason' => 'REASON_FOR_REFUSAL',
        //             'companyName' => 'COMPANY_NAME',
        //         ]),
        //     ]);

//         TemplatesModel::factory(1)->create([
//             'code' => 'VACATION_REQUEST',
//             'description' => 'Base Template for vacation request',
//             'content' => '
//         <div class="container">
//         <h1>{{applicationName}}</h1>
//         <p>
//             Dear <span class="applicantName">{{applicantName}}</span>,
//         </p>
//         <p>
//         I would like to mention that I have to attend my niece’s engagement ceremony on <span class="startDate">{{startDate}}</span> to <span>{{endDate}}</span>.
//         </p>

//         <p>
//         I would be grateful if you can approve my leave request for the aforementioned period.
// Hoping to receive a positive response from you.

//         </p>
//         <p>
//             Sincerely,<br>
//             {{applicantName}}
//         </p>
//     </div>',
//             'meta' => json_encode([
//                 'applicantName' => 'APPLICANT_NAME',
//                 'startDate' => 'START_DATE',
//                 'endDate' => 'END_DATE',
//                 'recipientName' => 'RECIPIENT_NAME',
//                 'dateDeparture' => 'DATE_DEPARTURE',
//                 'applicationName' => 'APPLICATION_NAME',
//             ]),
//         ]);

        Applications::factory(1)->create([
            'startDate' => '20/13/25',
            'endDate' => '25/13/25',
            'recipientName' => 'Beezy',
            'dateDeparture' => '19/13/25',
            'applicationName' => 'Absence Application Request',
        ]);

        // LeaveApplicationsModel::factory(1)->create([
        //     'startDate' => '20/13/25',
        //     'endDate' => '25/13/25',
        //     'recipientName' => 'Alex',
        //     'applicationName' => 'Leave Application Request',
        // ]);
    }
}