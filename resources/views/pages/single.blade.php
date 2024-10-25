@extends('layouts.master')

@section('title' , 'علیرضا وحدانی | وبلاگ')

@section('description')
    این صفحه رزومه منه ، در کل در مورد تحصیلات ، تجربیات و مهارت هایی که دارم صحبت شده
@endsection

@section('content')
    <div class="content" data-simplebar="init" data-simplebar-direction="rtl"><div class="simplebar-wrapper" style="margin: 0px -30px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="left: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 30px;">
                            <!-- Post -->
                            <div class="pb-3">
                                <header class="header-post">
                                    <h1 class="title title--h1">{{ $post->title }}</h1>
                                    <div class="caption-post">

                                    </div>
                                    <div class="header-post__image-wrap">
                                        <img class="cover ls-is-cached lazyloaded" src="{{  url($post->thumbnail) }}" alt="">
                                    </div>
                                </header>
                                <div class="caption-post">
                                   <p> {!! $post->content !!} </p>
                                </div>


                                <footer class="footer-post">
                                    <a class="footer-post__share" href="http://facebook.com/"><i class="font-icon icon-facebook"></i><span>فیس بوک</span></a>
                                    <a class="footer-post__share" href="http://twitter.com/"><i class="font-icon icon-twitter"></i><span>توییتر</span></a>
                                    <a class="footer-post__share" href="http://linkedin.com/"><i class="font-icon icon-linkedin2"></i><span>لینکدین</span></a>
                                </footer>
                            </div>

                            <div class="">
                                <h2 class="title title--h2">نظرات <span class="color--light">(3)</span></h2>

                                <!-- Comment -->
                                <div class="comment-box">
                                    <div class="comment-box__inner">
                                        <svg class="avatar avatar--60" viewBox="0 0 84 84">
                                            <g class="avatar__hexagon">
                                                <image xlink:href="../assets/img/avatar-2.jpg" height="100%" width="100%"></image>
                                            </g>
                                        </svg>
                                        <div class="comment-box__body">
                                            <h4 class="comment-box__details"><span>دانیل لوئی </span><span class="comment-box__details-date">5 دقیقه پیش</span></h4>
                                            <p>مقاله ای بسیار جالب و آموزنده در مورد طراحی. چیزهای جدید و جالب فرا گرفتم.</p>

                                            <ul class="comment-box__footer">
                                                <li><i class="font-icon icon-like-fill"></i> <span>80</span></li>
                                                <li><i class="font-icon icon-reply"></i> <span>پاسخ</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Comment -->
                                    <div class="comment-box">
                                        <div class="comment-box__inner">
                                            <svg class="avatar avatar--60" viewBox="0 0 84 84">
                                                <g class="avatar__hexagon">
                                                    <image xlink:href="../assets/img/avatar-3.jpg" height="100%" width="100%"></image>
                                                </g>
                                            </svg>
                                            <div class="comment-box__body">
                                                <h4 class="comment-box__details"><span>جسیکا میلر </span><span class="comment-box__details-date">1 دقیقه پیش</span></h4>
                                                <p>موافقم ، مقاله ای بسیار جالب. بسیار از شما متشکرم!<img class="emoji" src="http://netgon.net/artstyles/v-card2/assets/icons/emoji/emoji-nerd.svg" alt="نرد"></p>

                                                <ul class="comment-box__footer">
                                                    <li><i class="font-icon icon-like-fill"></i> <span>35</span></li>
                                                    <li><i class="font-icon icon-reply"></i> <span>پاسخ</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Comment -->
                                <div class="comment-box">
                                    <div class="comment-box__inner">
                                        <svg class="avatar avatar--60" viewBox="0 0 84 84">
                                            <g class="avatar__hexagon">
                                                <image xlink:href="../assets/img/avatar-6.jpg" height="100%" width="100%"></image>
                                            </g>
                                        </svg>
                                        <div class="comment-box__body">
                                            <h4 class="comment-box__details"><span>هنری ویلیام </span><span class="comment-box__details-date">15 دقیقه پیش</span></h4>
                                            <p>از این مقاله خوب متشکرم. منتظر موارد جدید هستیم.</p>

                                            <ul class="comment-box__footer">
                                                <li><i class="font-icon icon-like-fill"></i> <span>15</span></li>
                                                <li><i class="font-icon icon-reply"></i> <span>پاسخ</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Comment form -->
                                <ul class="social-auth">
                                    <li class="social-auth__item">وارد شوید با:</li>
                                    <li class="social-auth__item"><a class="social-auth__link" href="#"><i class="font-icon icon-facebook"></i></a></li>
                                    <li class="social-auth__item"><a class="social-auth__link" href="#"><i class="font-icon icon-twitter"></i></a></li>
                                    <li class="social-auth__item"><a class="social-auth__link" href="#"><i class="font-icon icon-dribbble"></i></a></li>
                                    <li class="social-auth__item"><a class="social-auth__link" href="#"><i class="font-icon icon-behance"></i></a></li>
                                </ul>
                                <form class="comment-form">
                                    <textarea id="commentForm" class="textarea textarea--white form-control" required="required" placeholder="نوشتن نظر..." rows="1" style="overflow: hidden; overflow-wrap: break-word; height: 57.6px;"></textarea>
                                    <button type="submit" class="btn"><i class="font-icon icon-send"></i><span></span></button>
                                    <div class="dropdown dropup">
                                        <i class="font-icon icon-smile" id="dropdownEmoji" data-toggle="dropdown" aria-haspopup="true"></i>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEmoji">
                                            <div class="emoji-wrap">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-laughing.svg" title=":laughing:" alt="laughing">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-happy-2.svg" title=":happy 2:" alt="happy 2">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-crazy.svg" title=":crazy:" alt="crazy">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-bad.svg" title=":bad:" alt="bad">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-angry.svg" title=":angry:" alt="angry">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-happy.svg" title="happy" alt="happy">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-thinking.svg" title=":thinking:" alt="thinking">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-sad.svg" title=":sad:" alt="sad">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-pressure.svg" title=":pressure:" alt="pressure">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-in-love.svg" title=":in love:" alt="in love">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-nerd.svg" title=":laughing:" alt="nerd">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-happy-3.svg" title=":happy 3:" alt="happy 3">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-shocked.svg" title=":shocked:" alt="shocked">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-wink.svg" title=":wink:" alt="wink">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-sweating.svg" title=":sweating:" alt="sweating">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-shocked-2.svg" title=":shocked 2:" alt="shocked 2">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-shocked-3.svg" title=":shocked 3:" alt="shocked 3">
                                                <img class="emoji" src="../assets/icons/emoji/emoji-sad-2.svg" title=":sad 2:" alt="sad 2">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: 750px; height: 1411px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
@endsection
