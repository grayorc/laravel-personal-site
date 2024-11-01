<aside class="sidebar">
    <div class="sticky-column">
        @isset($settings->profile)
            <div class="avatar-wrap">
                <svg class="avatar avatar--180" viewBox="0 0 188 188">
                    <g class="avatar__box">
                        <image
                            href="{{ asset('storage/' .  $settings->profile) }}"
                            height="100%"
                            width="100%"
                            alt="علیرضا وحدانی , alireza vahdani , وحدانی , علیرضا , vahdani"
                        />
                    </g>
                </svg>
            </div>
        @endisset
        <div class="text-center">
            <h1 class="title sidebar__user-name"><span class="weight--500">{{$settings->user->name}}</span></h1>
            <div class="badge badge--gray">{{$settings->getTitle()}}</div>

            <!-- Social -->
            <div class="social">
                @foreach($settings->social_media ?? [] as $social)
                    <a class="social__link" href="{{ $social['link'] }}"><i
                            class="font-icon {{ $social['icon_class'] }}"></i></a>
                @endforeach
            </div>
        </div>

        <ul class="contact-block">
            @isset($settings->address)
                <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Address">
                    <i class="font-icon icon-map-pin"></i>{{ $settings->address ?? '' }}
                </li>
            @endisset

            @isset($settings->email)
                <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
                    <a href="mailto:{{ $settings->email ?? '' }}"><i
                            class="font-icon icon-mail"></i>{{ $settings->email ?? '' }}</a>
                </li>
            @endisset

            @isset($settings->telegram)
                <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="telegram">
                    <a href="https://t.me/{{ $settings->telegram ?? '' }}"><i
                            class="font-icon icon-reply"></i>{{ $settings->telegram ?? ''}}</a>
                </li>
            @endisset
        </ul>
    </div>
</aside>
