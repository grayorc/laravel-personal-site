@extends('layouts.master')

@section('title' , "{$settings->name} | رزومه")

@section('description')
    این صفحه رزومه منه ، در کل در مورد تحصیلات ، تجربیات و مهارت هایی که دارم صحبت شده
@endsection

@section('content')
    <div class="content">
        <div class="section mt-0">
            <h1 class="title title--h1 title__separate">رزومه</h1>
        </div>

        <!-- Experience -->
        <div class="section">
            <h2 class="title title--h2">
                <img class="title-icon" src="{{asset('assets/icons/icon-education.svg')}}" alt="تحصیلات"/>
                تحصیلات
            </h2>
            <div class="timeline">
                @forelse($resumes['education'] ?? [] as $educationLocation => $educationInformation)
                    <!-- Item -->
                    <article class="timeline__item">
                        <h5 class="title title--h3 timeline__title">{{$educationLocation ?? ''}}</h5>
                        <span class="timeline__period">
                            {{$educationInformation['startDate'] ?? ''}} — {{$educationInformation['endDate'] ?? ''}}
                        </span>
                        <p class="timeline__description">{{$educationInformation['description'] ?? ''}}</p>
                    </article>
                @empty
                    <h6>چیزی یافت نشد</h6>
                @endforelse
            </div>
        </div>

        <div class="section">
            <h2 class="title title--h2">
                <img class="title-icon" src="{{asset('assets/icons/icon-experience.svg')}}" alt="تجربیات"/>
                تجربیات
            </h2>
            <div class="timeline">
                @forelse($resumes['experiences'] ?? [] as $experienceLocation => $experienceInformation)
                    <!-- Item -->
                    <article class="timeline__item">
                        <h5 class="title title--h3 timeline__title">{{$experienceLocation ?? ''}}</h5>
                        <span class="timeline__period">
                            {{$experienceInformation['startDate'] ?? ''}} — {{$experienceInformation['endDate'] ?? ''}}
                        </span>
                        <p class="timeline__description">{{$experienceInformation['description'] ?? ''}}</p>
                    </article>
                @empty
                    <h6>چیزی یافت نشد</h6>
                @endforelse
            </div>
        </div>

        <!-- Hard Skills -->
        <div class="section">
            <h2 class="title title--h2">مهارت های سخت من</h2>
            <div class="box-gray">
                @forelse($resumes['hardSkills'] ?? [] as $skillName => $skillInformation)
                    <!-- Progress -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                             aria-valuenow="{{$skillInformation['percentageOfExpertise'] ?? ''}}" aria-valuemin="0"
                             aria-valuemax="100">
                            <div class="progress-text">
                                <span>{{$skillName ?? ''}}</span>
                                <span>{{$skillInformation['percentageOfExpertise'] ?? ''}}%</span>
                            </div>
                        </div>
                        <div class="progress-text"><span>{{$skillName ?? ''}}</span></div>
                    </div>
                @empty
                    <h6>چیزی یافت نشد</h6>
                @endforelse
            </div>
        </div>

        <!-- Soft Skills -->
        <div class="section">
            <h2 class="title title--h2">مهارت های نرم من</h2>
            <div class="box-gray">
                @forelse($resumes['softSkills'] ?? [] as $skillName => $skillInformation)
                    <!-- Progress -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                             aria-valuenow="{{$skillInformation['percentageOfExpertise'] ?? ''}}" aria-valuemin="0"
                             aria-valuemax="100">
                            <div class="progress-text">
                                <span>{{$skillName ?? ''}}</span>
                                <span>{{$skillInformation['percentageOfExpertise'] ?? ''}}%</span>
                            </div>
                        </div>
                        <div class="progress-text"><span>{{$skillName ?? ''}}</span></div>
                    </div>
                @empty
                    <h6>چیزی یافت نشد</h6>
                @endforelse
            </div>
        </div>
    </div><!-- Content End -->
@endsection
