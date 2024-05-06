{{-- @extends('template::layouts.master')

@section('content')

<div class="#1">
    <span class="name-applicant">
        [APPLICANT_NAME]
    </span>
    <span class="department-applicant">
        [APPLICANT_DEPARTMENT]
    </span>

</div>

<div class="company">
    [COMPANY_NAME]
</div>

<div class="date-application">
    [DATE_OF_APPLICATION]
</div>

<div class="subject-application">
    Subject:[APPLICATION_SUBJECT]
</div>

<span class="recipient-name">
    <p>
        Dear [RECIPIENT_NAME],
    </p>
</span>

<p class="leave-text">
    I would like to kindly ask for your approval to my [LEAVE_TYPE] leave starting on
    [START_DATE] and ending on [END_DATE].
</p>

<p class="leave-reason">
    [LEAVE_REASON]
</p>

<p class="thank-you">
    I appreciate your prompt response for my request.
</p>

<p class="signature">
    Best Regards
</p>

<div class="name-signature">
    [APPLICANT_NAME]
</div>

<!-- <p>Module: {!! config('template.name') !!}</p> -->
@endsection --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <div>
        <h1>Applications List</h1>

        <ul>
            @foreach ($applications as $application)
                <li>
                    <a
                        href="{{ route('application.show', ['application_id' => $application->id]) }}">{{ $application->applicationName }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
