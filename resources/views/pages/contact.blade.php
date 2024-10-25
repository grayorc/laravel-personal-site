@extends('layouts.master')

@section('title' , "{$settings->name} | ارتباط با من")

@section('description')
    صفحه ارتباط با من
@endsection

@section('content')

	<div class="content">
			    <div class="section mt-0">
		            <h1 class="title title--h1 title__separate">تماس با ما</h1>
				</div>

				<!-- Contact -->
                <div class="map section" id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1562849.29929252!2d127.13039999999998!3d40.087901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1729341815007!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<h2 class="title title--h2">فرم تماس</h2>
							
				<form id="contact-form" method="POST"  action="/contact" class="contact-form" data-toggle="validator">
				@csrf
                    <div class="row">
						<div class="form-group col-12 col-md-12">
							<i class="fa-solid fa-pen"></i>
                            <input class="input input__icon form-control"  id="subjectContact" name="subject" placeholder="موضوع" required="required" oninvalid="setCustomValidity('این فیلد را پر کنید.')" onkeyup="setCustomValidity('')" onkeyup="setCustomValidity('')"></textarea>
							<div class="help-block with-errors"></div>
				        </div>
				        <div class="form-group col-12 col-md-6">
							<i class="font-icon icon-user"></i>
                            <input type="text" class="input input__icon form-control" id="nameContact" name="name" placeholder="نام کاربری" required="required" autocomplete="on" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')">
							<div class="help-block with-errors"></div>
				        </div>
				        <div class="form-group col-12 col-md-6">
							<i class="font-icon icon-at"></i>
                            <input type="email" class="input input__icon form-control" id="emailContact" name="email" placeholder="ایمیل" required="required" autocomplete="on" oninvalid="setCustomValidity('Email is incorrect')" onkeyup="setCustomValidity('')">
							<div class="help-block with-errors"></div>
				        </div>
				        <div class="form-group col-12 col-md-12">
                            <textarea class="textarea form-control" id="messageContact" name="message" placeholder="پیام شما" rows="4" required="required" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')" style="overflow: hidden; overflow-wrap: break-word; height: 117.6px;"></textarea>
							<div class="help-block with-errors"></div>
				        </div>
					</div>
					<div class="row">
				        <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
					        <div id="validator-contact" class="hidden"></div>
				        </div>
				        <div class="col-12 col-md-6 order-1 order-md-2 text-right">
					        <button type="submit" class="btn disabled"><i class="font-icon icon-send"></i>ارسال پیام<span></span></button>
				        </div>
			        </div>
		        </form>
			</div>

@endsection
