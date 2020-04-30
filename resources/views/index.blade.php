<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- google fonts -->
		<link rel="shortcut icon" type="image/x-icon" href="https://wiqaia.org/public/images/x-icon/01.png">
        
		<link rel="stylesheet" href="https://wiqaia.org/public/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/animate.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/icofont.min.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/lightcase.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/swiper.min.css">
		<link rel="stylesheet" href="https://wiqaia.org/public/css/style.css"> 
		<link rel="stylesheet" href="https://wiqaia.org/public/fonts/Tajawal.css">  
		<script>
			var msg = '{{Session::get('alert')}}';
			var exist = '{{Session::has('alert')}}';
			if(exist){
				alert('تم التسحيل بنجاح ');

				
			}
		  </script>
		<title>منصة وقاية</title>
	</head>

	<body class="rtl" dir="rtl">
		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="{{url('/')}}"><img src="https://wiqaia.org/public/images/logo.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul class="lab-ul">
							<li class="active"><a href="https://wiqaia.org/public/"> الرئيسية <i class="fa fa-home"></i> </a>
									</li>
									<li><a href="#">عن المنصة <i class=""></i> </a></li>
							<li>
							    <a href="#" data-scroll="services-mobile"> خدماتنا </a>
							</li>
							<li><a href="{{ url('ulogin') }}"> دخول <i class="fa fa-user"></i> </a>
							
							</li>
							<li><a href="#">تواصل معنا <i class="fa fa-phone"></i> </a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->


		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-area">
				<div class="container">
					<div class="primary-menu">
						<div class="logo">
							<a  href="{{ url('/')}}"><img src="https://wiqaia.org/public/images/logo.png" alt="logo"></a>
						</div>
						<div class="main-area">
							<div class="main-menu">
								<ul class="lab-ul">
									<li class="active"><a href="{{ url('/')}}"> الرئيسية <i class="fa fa-home"></i> </a>
									</li>
									<li><a href="#">عن المنصة <i class=""></i> </a></li>
        							<li>
        							    <a href="#" data-scroll="services-mobile"> خدماتنا </a>
        							</li>
        							
									<li><a href="service.php">تواصل معنا <i class="fa fa-phone"></i> </a></li>
								</ul>
								
							</div>
							<a href="{{ url('ulogin') }}">       دخول <i class="fa fa-user"></i> </a>
							
									
							<div class="header-btn">
								<a href="#" class="lab-btn"><span> تحميل التطبيق <i class="fa fa-download"></i></span></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- desktop menu ending here -->

		<!-- Banner Section start here -->
		<section class="banner-section pb-0">
			<div class="banner-area">
				<div class="container">
					<div class="row no-gutters align-items-center justify-content-center">
						<div class="col-12">
						</div>
						<div class="col-12">
							<div class="section-wrapper">
								<div class="banner-thumb">
									<img src="https://wiqaia.org/public/images/banner/01.png" alt="lab-banner">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Banner Section ending here -->

        <!-- corona count section start here -->
        <section class="corona-count-section bg-corona padding-tb pt-0">
            <div class="container">
				<div class="corona-wrap">
					<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center     flex-row-reverse">
							<div class="col-lg-6 col-12">
								<div class="ccb-thumb">
									<a href="https://www.youtube.com" data-rel="lightcase" class="ccb-video"><i class="fa fa-play" title="مشاهدة مرض وباء كورونا"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
									<img src="https://wiqaia.org/public/images/corona/01.jpg" alt="corona" title="مشاهدة مرض وباء كورونا">
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="ccb-content">
									<h2>كيف تحمي نفسك ؟</h2>
									<h6>نصـــائح </h6>
									<ul class="lab-ul">
										<li><i class="fa fa-check">
										</i>
										أغسل يديك دائماً
نظف يديك بشكل منتظم وشامل باستخدام فرك اليد الذي يحتوي على الكحول أو اغسلها بالماء والصابون لمدة 20 ثانية على الأقل.
										</li>
										<li><i class="fa fa-check"></i>
حافظ على مسافة متر واحد على الأقل (3 أقدام) بينك وبين أي شخص يسعل أو يعطس. إذا كنت قريبًا جدًا ، فاحصل على فرصة للإصابة.
										
										</li>
										<li><i class="fa fa-check"></i>
										تجنب لمس الوجه
تلمس الأيدي العديد من الأسطح ويمكنها التقاط الفيروسات. لذا ، يمكن أن تنقل اليدين الفيروس إلى عينيك أو أنفك أو فمك ويمكن أن تجعلك مريضًا.
										</li>
									</ul>
									<a href="#" class="lab-btn style-2"><span>عرض المزيد</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- corona count section ending here -->
        
        <!-- Service Section Start Here -->
		<section class="service-section bg-service padding-tb">
            <div class="container">
                <div class="section-header">
                    <h2>اعراض فيروس كورونا </h2>
                    <p>
                        الأعراض الأكثر شيوعًا لـ COVID-19 هي الحمى والتعب والسعال الجاف. قد يعاني بعض المرضى من آلام وآلام واحتقان بالأنف وسيلان الأنف والتهاب في الحلق أو إسهال. عادة ما تكون هذه الأعراض خفيفة وتبدأ تدريجياً. كما قد تظهر الأعراض بعد يومين إلى 14 يومًا من التعرض.
                    </p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="https://wiqaia.org/public/images/service/02.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>حمى </h4>
                                        <p> 
                                        حمى عالية - هذا يعني أنك تشعر بالحرارة عند لمس صدرك أو ظهرك (لا تحتاج إلى قياس درجة حرارتك). إنها علامة شائعة وقد تظهر أيضًا في غضون 2-10 أيام إذا تأثرت.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="https://wiqaia.org/public/images/service/01.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>كحة </h4>
                                        <p> 
                                        الكحة المستمرة – وهذا يعني السعال كثيرًا لأكثر من ساعة ، أو 3 نوبات سعال أو أكثر في 24 ساعة (إذا كنت تعاني عادة من السعال ، فقد يكون أسوأ من المعتاد).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="https://wiqaia.org/public/images/service/03.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>ضيق في التنفس </h4>
                                        <p> 
                                        صعوبة في التنفس – يصاب حوالي 1 من كل 6 أشخاص مصابين بـ COVID-19 بمرض خطير ويصابون بصعوبة في التنفس أو ضيق في التنفس.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Service Section Ending Here -->
		

		<!-- Team Member Section Start here -->
        <div class="team-section bg-team padding-tb">
            <div class="container">
				<div class="section-header">
					<h2>مرحباً بالكادر الطبي </h2>
				</div>
				<div class="team-area">
					<div class="row justify-content-center align-items-center">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="https://wiqaia.org/public/images/team/01.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5>
										<a href="">هل انت طبيب متطوع ؟</a></h5>
										<hr>
										<div class="text-center">
										    <a href="" style="color: #189bd8;" data-toggle="modal" data-target="#myModal">تسجيل <i class="fa fa-sign-in"></i></a>
										    </div>
										    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										        <div class="modal-dialog" role="document">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <h4 class="modal-title" id="myModalLabel">تسجيل</h4>
										                </div>
										                <div class="modal-body">
										                  <form  id="doc" action="{{ route('addoc') }}" method="POST">
																@csrf
																
																<div class="form-group">
										                            <label for="exampleInputEmail1">الاسم </label>
																	<input type="text" class="form-control" id="docname" 
																	placeholder="ادخل الاسم "
																	required
																	name="name"
																	>
										                        </div>
										                        
										                        <div class="form-group">
										                            <label for="exampleInputEmail1">رقم التلفون</label>
																	<input type="number" class="form-control" id="doctel" 
																	placeholder="ادخل رقم التلفون "
																	required
																	maxlength="10"
																	name="tel"
																	>
																</div>
																<div class="form-group">
																		<label for="exampleInputEmail1">الرقم الوطني </label>
																		<input type="number" class="form-control" id="docnational" 
																		placeholder="ادخل الرقم الوطني "
																		maxlength="11"
																		required
																		name="national"
																		>
																	</div>
																<div class="form-group">
										                            <label for="job">هل انت ؟</label>
										                            <select class="form-control" name="job">
										                                <option value="doctor">طبيب</option>
										                                <option value="nurse">ممرض</option>
										                                <option value="medical-assistant">مساعد طبي</option>
										                                <option value="biomedical engineer">مهندس معدات طبية</option>
										                            </select>
										                        </div>
										                       
																<div class="form-group">
										                            <label for="doccity"> المدينة</label>
										                            <select class="form-control" name="city" required>
										                                <option value="khartoum">الخرطوم</option>
										                                <option valye="omdorman">ام درمان</option>
										                                <option valye="bahri">بحري </option>
										                            </select>
										                        </div>
										                        <div class="form-group">
										                            <label for="docaddress">المنطقة </label>
																	<input type="text" class="form-control" id="exampleInputEmail1" 
																	placeholder="ادخل المنطقة "
																	required
																	name="address">
																</div>
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"  style="margin-left: 5px">اغلاق</button>
										                    <button type="submit" onclick="validate()"  class="btn btn-primary btn-sm">تسجيل</button>
										                </div >
										                 </form>
										                 </div>
										        </div>
										    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="https://wiqaia.org/public/images/team/02.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5>
										<a href="">هل انت ممرض متطوع؟</a></h5>
										<hr>
										<div class="text-center">
										    <a href="" style="color: #189bd8;" data-toggle="modal" data-target="#myModal">تسجيل <i class="fa fa-sign-in"></i></a>
										    </div>
										    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										        <div class="modal-dialog" role="document">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <h4 class="modal-title" id="myModalLabel">تسجيل</h4>
										                </div>
										                <div class="modal-body">
										                   <form  id="nurse" action="{{ route('addoc') }}" method="POST">
																		@csrf
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">الاسم </label>
																			<input type="text" class="form-control" id="docname" 
																			placeholder="ادخل الاسم "
																			required
																			name="name"
																			>
																		</div>
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">رقم التلفون</label>
																			<input type="number" class="form-control" id="doctel" 
																			placeholder="ادخل رقم التلفون "
																			maxlength="10"
																			required
																			name="tel"
																			>
																		</div>
																		<div class="form-group">
																				<label for="exampleInputEmail1">الرقم الوطني </label>
																				<input type="number" class="form-control" id="docnational" 
																				placeholder="ادخل الرقم الوطني "
																				maxlength="11"
																				required
																				name="national"
																				>
																			</div>
																<div class="form-group">
										                            <label for="job">هل انت ؟</label>
										                            <select class="form-control" name="job">
										                                <option value="doctor">طبيب</option>
										                                <option value="nurse">ممرض</option>
										                                <option value="medical-assistant">مساعد طبي</option>
										                                <option value="biomedical engineer">مهندس معدات طبية</option>
										                            </select>
										                        </div>
																
																		<div class="form-group">
																			<label for="doccity"> المدينة</label>
																			<select class="form-control" name="city" required>
																				<option value="khartoum">الخرطوم</option>
																				<option valye="omdorman">ام درمان</option>
																				<option valye="bahri">بحري </option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="docaddress">المنطقة </label>
																			<input type="text" class="form-
																			control" id="exampleInputEmail1" 
																			placeholder="ادخل المنطقة "
																			required
																			name="address">
																		</div>
										                   
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"  style="margin-left: 5px">اغلاق</button>
										                    <button type="submit" class="btn btn-primary btn-sm">تسجيل</button>
										                </div>
										                 </form>
										            </div>
										        </div>
										    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="https://wiqaia.org/public/images/team/03.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5>
										<a href="">هل انت  مساعد طبيب متطوع ؟</a></h5>
										<hr>
										<div class="text-center">
										    <a href="" style="color: #189bd8;" data-toggle="modal" data-target="#myModal">تسجيل <i class="fa fa-sign-in"></i></a>
										    </div>
										    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										        <div class="modal-dialog" role="document">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <h4 class="modal-title" id="myModalLabel">تسجيل</h4>
										                </div>
										                <div class="modal-body">
										                   <form  id="massistant" action="{{ route('addoc') }}" method="POST">
																		@csrf
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">الاسم </label>
																			<input type="text" class="form-control" id="docname" 
																			placeholder="ادخل الاسم "
																			required
																			name="name"
																			>
																		</div>
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">رقم التلفون</label>
																			<input type="number" class="form-control" id="doctel" 
																			placeholder="ادخل رقم التلفون "
																			maxlength="10"
																			required
																			name="tel"
																			>
																		</div>
																		<div class="form-group">
																				<label for="exampleInputEmail1">الرقم الوطني </label>
																				<input type="number" class="form-control" id="docnational" 
																				placeholder="ادخل الرقم الوطني "
																				name="national"
																				required
																				maxlength="11"
																				>
																				
																			</div>
																<div class="form-group">
										                            <label for="job">هل انت ؟</label>
										                            <select class="form-control" name="job">
										                                <option value="doctor">طبيب</option>
										                                <option value="nurse">ممرض</option>
										                                <option value="medical-assistant">مساعد طبي</option>
										                                <option value="biomedical engineer">مهندس معدات طبية</option>
										                            </select>
										                        </div>
																		
																		<div class="form-group">
																			<label for="doccity"> المدينة</label>
																			<select class="form-control" name="city" required>
																				<option value="khartoum">الخرطوم</option>
																				<option valye="omdorman">ام درمان</option>
																				<option valye="bahri">بحري </option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="docaddress">المنطقة </label>
																			<input type="text" class="form-control" id="exampleInputEmail1" 
																			placeholder="ادخل المنطقة "
																			required
																			name="address">
																		</div>
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"  style="margin-left: 5px">اغلاق</button>
										                    <button type="submit" class="btn btn-primary btn-sm">تسجيل</button>
										                </div>
										                </form>
										            </div>
										        </div>
										    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="https://wiqaia.org/public/images/team/02.jpg" alt="team-membar">
									</div>
									<div class="team-content">   
										<h5>
										<a href="">هل انت مهندس طبي متطوع ؟</a></h5>
										<hr>
										<div class="text-center">
										    <a href="" style="color: #189bd8;" data-toggle="modal" data-target="#myModal">تسجيل <i class="fa fa-sign-in"></i></a>
										    </div>
										    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										        <div class="modal-dialog" role="document">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <h4 class="modal-title" id="myModalLabel">تسجيل</h4>
										                </div>
										                <div class="modal-body">
										                    <form id="biom" action="{{ route('addoc') }}" method="POST">
																		@csrf
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">الاسم </label>
																			<input type="text" class="form-control" id="docname" 
																			placeholder="ادخل الاسم "
																			required
																			name="name"
																			>
																		</div>
																		
																		<div class="form-group">
																			<label for="exampleInputEmail1">رقم التلفون</label>
																			<input type="number" class="form-control" id="doctel" 
																			placeholder="ادخل رقم التلفون "
																			maxlength="10"
																			required
																			name="tel"
																			>
																		</div>
																		<div class="form-group">
																				<label for="exampleInputEmail1">الرقم الوطني </label>
																				<input type="number" class="form-control" id="docnational" 
																				placeholder="ادخل الرقم الوطني "
																				maxlength="11"
																				required
																				name="national"
																				>
																			</div>
																<div class="form-group">
										                            <label for="job">هل انت ؟</label>
										                            <select class="form-control" name="job">
										                                <option value="doctor">طبيب</option>
										                                <option value="nurse">ممرض</option>
										                                <option value="medical-assistant">مساعد طبي</option>
										                                <option value="biomedical engineer">مهندس معدات طبية</option>
										                            </select>
										                        </div>
																	
																		<div class="form-group">
																			<label for="doccity"> المدينة</label>
																			<select class="form-control" name="city" required>
																				<option value="khartoum">الخرطوم</option>
																				<option valye="omdorman">ام درمان</option>
																				<option valye="bahri">بحري </option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="docaddress">المنطقة </label>
																			<input type="text" class="form-control" id="exampleInputEmail1" 
																			placeholder="ادخل المنطقة "
																			required
																			name="address">
																		</div>
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"  style="margin-left: 5px">اغلاق</button>
										                    <button type="submit" class="btn btn-primary btn-sm">تسجيل</button>
										                </div>
										                </form>
										            </div>
										        </div>
										    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- Team Member Section Ending here -->


		<!-- faq section start here -->
        <section class="faq-section bg-faq padding-tb">
			<div class="faq-shape">
			</div>
            <div class="container">
                <div class="section-header">
                    <h2>
						مرض فيروس كورونا : أسئلة وأجوبة‏ 
						 </h2>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6> ما هو فيروس كورونا؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>فيروسات كورونا هي فصيلة كبيرة من الفيروسات التي قد تسبب المرض للحيوان والإنسان.  ومن المعروف أن عدداً من فيروسات كورونا تسبب لدى البشر حالات عدوى الجهاز التنفسي التي تتراوح حدتها من نزلات البرد الشائعة إلى الأمراض الأشد وخامة مثل متلازمة الشرق الأوسط التنفسية والمتلازمة التنفسية الحادة الوخيمة (السارس). ويسبب فيروس كورونا المُكتشف مؤخراً مرض فيروس كورونا كوفيد-19.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>كيف ينتشر مرض كورونا ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p> يمكن أن يصاب الأشخاص بعدوى مرض كوفيد-19 عن طريق الأشخاص الآخرين المصابين بالفيروس. ويمكن للمرض أن ينتقل من شخص إلى شخص عن طريق القُطيرات الصغيرة التي تتناثر من الأنف أو الفم عندما يسعل الشخص المصاب بمرض كوفيد-19 أو يعطس. وتتساقط هذه القُطيرات على الأشياء والأسطح المحيطة بالشخص. ويمكن حينها أن يصاب الأشخاص الآخرون بمرض كوفيد-19 عند ملامستهم لهذه الأشياء أو الأسطح ثم لمس عينيهم أو أنفهم أو فمهم. كما يمكن أن يصاب الأشخاص بمرض كوفيد-19 إذا تنفسوا القُطيرات التي تخرج من الشخص المصاب بالمرض مع سعاله أو زفيره. ولذا فمن الأهمية بمكان الابتعاد عن الشخص المريض بمسافة تزيد على متر واحد (3 أقدام).</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>هل يمكن أن يصاب المرء بالمرض عن طريق شخص عديم الأعراض ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>تتمثل الطريقة الرئيسية لانتقال المرض في القُطيرات التنفسية التي يفرزها الشخص عند السعال. وتتضاءل احتمالات الإصابة بمرض كوفيد-19 عن طريق شخص عديم الأعراض بالمرة. ولكن العديد من الأشخاص المصابين بالمرض لا يعانون إلا من أعراض طفيفة. وينطبق ذلك بصفة خاصة على المراحل المبكرة للمرض. ولذا فمن الممكن الإصابة بمرض كوفيد-19 عن طريق شخص يعاني مثلاً من سعال خفيف ولا يشعر بالمرض. وتعكف المنظمة على تقييم البحوث الجارية بشأن فترة انتقال مرض كوفيد-19 وستواصل نشر أحدث النتائج.     </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>هل يمكن أن أصاب بمرض كورونا عن طريق براز شخص مصاب بالمرض ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p> تبدو مخاطر انتقال مرض كوفيد-19 عن طريق براز الشخص المصاب بالعدوى محدودة. وفي حين أن التحريات المبدئية تشير إلى أن الفيروس قد يتواجد في البراز في بعض الحالات، فإن انتشاره عبر هذا المسار لا يشكل إحدى السمات الرئيسية للفاشية. وتعكف المنظمة على تقييم البحوث الجارية بشأن طرق انتشار مرض كوفيد-19 وستواصل نشر النتائج الجديدة. ولكن نظراً إلى ما ينطوي عليه ذلك من مخاطر، فإنه يعد سبباً آخر لتنظيف اليدين بانتظام بعد استخدام دورة المياه وقبل تناول الطعام. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>
									هل المضادات الحيوية فعّالة في الوقاية من مرض كورونا أو علاجه ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>
                                            لا. لا تقضي المضادات الحيوية على الفيروسات، فهي لا تقضي إلا على العدوى الجرثومية. وبما أن مرض كوفيد-19 سببه فيروس، فإن المضادات الحيوية لا تقضي عليه. فلا ينبغي استعمال المضادات الحيوية كوسيلة للوقاية من مرض كوفيد-19 أو علاجه. ولا ينبغي استعمالها إلا وفقاً لتعليمات الطبيب لعلاج حالات العدوى الجرثومية.  
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>هل هناك لقاح أو دواء أو علاج لمرض كورونا ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>
                                            لا يوجد حتى يومنا هذا لقاح ولا دواء محدد مضاد للفيروسات للوقاية من مرض كوفيد-2019 أو علاجه. ومع ذلك، فينبغي أن يتلقى المصابون به الرعاية لتخفيف الأعراض. وينبغي إدخال الأشخاص المصابين بمرض وخيم إلى المستشفيات. ويتعافى معظم المرضى بفضل الرعاية الداعمة.

ويجري حالياً تحري بعض اللقاحات المحتملة والأدوية الخاصة بعلاج هذا المرض تحديداً. ويجري اختبارها عن طريق التجارب السريرية. وتقوم المنظمة بتنسيق الجهود المبذولة لتطوير اللقاحات والأدوية للوقاية من مرض كوفيد-19 وعلاجه.

وتتمثل السبل الأكثر فعّالية لحماية نفسك والآخرين من مرض كوفيد-19 في المواظبة على تنظيف اليدين، وتغطية الفم عند السعال بثني المرفق أو بمنديل ورقي، والابتعاد مسافة لا تقل عن متر واحد (3 أقدام) عن الأشخاص الذين يسعلون أو يعطسون. (انظر: كيف يمكنني حماية نفسي ومنع انتشار المرض؟).
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>كم تستغرق فترة حضانة مرض كورونا ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>
                                            مصطلح "فترة الحضانة" يشير إلى المدة من الإصابة بالفيروس إلى بدء ظهور أعراض المرض. وتتراوح معظم تقديرات فترة حضانة مرض كوفيد-19 ما بين يوم واحد و14 يوماً، وعادة ما تستمر خمسة أيام. وستُحدّث هذه التقديرات كلما توفر المزيد من البيانات.
                                        </p>
                                    </div>
                                </li>
                                <li id="services-desktop" class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="fa fa-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>هل تنتقل عدوى كورونا بالهواء ؟</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>
                                            ينتقل الفيروس المسبب لمرض كوفيد-19 بشكل أساسي عن طريق القطيرات المنبعثة من الشخص المصاب بالعدوى عندما يعطس أو يسعل أو يتكلم. ووزن هذه القطيرات أثقل من أن يسمح لها بالبقاء معلقة في الهواء، فهي سرعان ما تسقط على الأرض أو الأسطح.

ويمكن أن تنتقل إليك عدوى الفيروس بالاستنشاق إذا كنت على مسافة متر واحد من شخص مصاب بمرض كوفيد-19 أو إذا لامست سطحاً ملوثاً ثم لمست عينيك أو أنفك أو فمك قبل أن تغسل يديك.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq section ending here -->
<!-- services Section Start Here -->
		<section id="services-mobile" class="blog-section bg-blog padding-tb text-center">
            <div class="container">
				<div class="section-header">
                    <h2> الخدمات التي تقدمها <span style="color: #ff3372">مــنصة</span> وقاية</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                         <div class="col-lg-3 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="https://wiqaia.org/public/images/services/doctor.png" alt="lab-blog" width="140" style="padding-top: 30px;">
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">استفسار عن طبيب</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="https://wiqaia.org/public/images/services/message.png" alt="lab-blog" width="140" style="padding-top: 30px;">
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#"> طلب تصريح</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="https://wiqaia.org/public/images/services/warning.png" alt="lab-blog" width="140" style="padding-top: 30px;">
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#"> البلاغات </a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-3 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="https://wiqaia.org/public/images/services/report.png" alt="lab-blog" width="140" style="padding-top: 30px;">
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#"> الاحصائيات</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- services Section Ending Here -->
		<!-- Blog Section Start Here -->
		<section class="blog-section bg-blog padding-tb">
            <div class="container">
				<div class="section-header">
                    <h2>اخر الاخبار</h2>
                    <p></p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="https://wiqaia.org/public/images/1.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">* تعميم صحفي *   </a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="fa fa-calendar"></i>الإثنين الموافق ٢٠/أبريل/٢٠٢٠م</a>
                                            <a href="#" class="admin"><i class="fa fa-user"></i>وزارة الصحة الاتحادية</a>
                                        </div>
                                        <p>
                                            * تسجيل إصابات و وفيات جديدة بفيروس كورونا (كوفيد-١٩) تعلن وزارة الصحة الإتحادية عن تسجيل  (٢٦) حالة إصابة جديدة بفيروس كورونا المستجد إضافة الى وفاة (٢) من المصابين و ذلك حسب التقارير الوبائية ليوم الأحد الموافق ١٩/ أبريل/ ٢٠٢٠ م علمآ بأن الحالات و الوفيات الجديدة سجلت في ولاية الخرطوم.و بهذا يرتفع العدد الكلي لحالات الإصابة بالفيروس منذ بداية الوباء الى (٩٢) حالة، متضمنة (١٢) وفاة. يتلقى المرضى الرعاية الطبية اللازمة  هذا وبلغ إجمالي  الحالات التي تماثلت  للشفاء (٨) حالات.وتشدد  وزارة الصحة الاتحادية ،على أهمية إلتزام المواطنين بتطبيق الإرشادات الوقائية و التبليغ الفوري عن حالات الاشتباه.
                                        </p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn"> المزيد<i class="fa fa-double-right"></i></a>
                                            <a href="#" class="comments"><i class="fa fa-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="https://wiqaia.org/public/images/1.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">صيادلة غرب كردفان يدشنون مبادرتهم لمجابهة كورونا </a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="fa fa-calendar"></i>الإثنين الموافق ٢٠/أبريل/٢٠٢٠م</a>
                                            <a href="#" class="admin"><i class="fa fa-user"></i>وزارة الصحة الاتحادية</a>
                                        </div>
                                        <p>
                                              دشن الصيادلة بغرب كردفان اليوم مبادرة للمساهمة في مجابهة جائحة كورونا بمركز صحي الأمان بالفولة بحضور مدير إدارة الصيدلة بوزارة الصحة د.أحمد إبراهيم ومدير الإمدادات الطبية بالولاية د.وضاح محمد اسحق ودعبدالمنعم مهدي ممثلا للمدير التنفيذي للتأمين الصحي .وقالت ممثلة الصيادلة  د.شيماء حمدان ، إن المبادرة تتمثل في توفير كميات من معقمات الأيدي تم تحضيرها بالفولة لتوزع على المحليات المختلفة عبر الصيادلة وأبانت أن التمويل  مناصفة بين الإمدادات والتأمين الصحي ومساهمات  من الصيادلة وتأكيد للتضامن مع وزارة الصحة في جهودها للتصدي لكورونا والوقوف مع الوزارة في توعية المواطنين بخطر الوباء وكيفية مجابهته.واشادت ،بتدافع كل زملائها والتجاوب مع المبادرة والتي تستمر في مراحل حتى عبور خطر الجائحة .
-اعلام صحة غرب كردفان-

                                        </p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn"> المزيد<i class="fa fa-double-right"></i></a>
                                            <a href="#" class="comments"><i class="fa fa-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="https://wiqaia.org/public/images/4.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">توعية خليك في البيت </a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="fa fa-calendar"></i>20/ابريل/2020</a>
                                            <a href="#" class="admin"><i class="fa fa-user"></i>admin</a>
                                        </div>
                                        <p>
                                             
                                        </p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn"> المزيد<i class="fa fa-double-right"></i></a>
                                            <a href="#" class="comments"><i class="fa fa-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Blog Section Ending Here -->
		<div class="footer-widgets-wrap clearfix">
		    <div id="bh-footer" class="container clearfix">
		        <div class="row">
		            <div class="col-sm-12 text-center">
		                <a href="#"><img src="https://wiqaia.org/public/images/2.jpg" width="400px"></a>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Footer Section Start Here -->
		<footer style="background-image: url('https://wiqaia.org/public/css/bg-image/footer-bg.jpg');"> 
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p>&copy;جميع الحقوق محفوظة 2020 <a href="#">wiqaia</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer Section Ending Here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="https://wiqaia.org/public/js/jquery.js"></script>
		<script src="https://wiqaia.org/public/js/waypoints.min.js"></script>
		<script src="https://wiqaia.org/public/js/bootstrap.min.js"></script>
		<script src="https://wiqaia.org/public/js/lightcase.js"></script>
		<script src="https://wiqaia.org/public/js/swiper.min.js"></script>
		<script src="https://wiqaia.org/public/js/jquery.countdown.min.js"></script>
        <script src="https://wiqaia.org/public/js/functions.js"></script>
        <script src="https://wiqaia.org/public//js/custom.js"></script>
	</body>
</html>