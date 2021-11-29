<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sego - Restaurant Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
********************-->

    <!--**********************************
        Main wrapper start
***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
***********************************-->

		<!--**********************************
            Chat box start
***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
I am good too, thank you for your chat template
<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
You are welcome
<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
I am looking for your next templates
<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
Ok, thank you have a good day
<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
Bye, see you
<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
I am good too, thank you for your chat template
<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
You are welcome
<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
I am looking for your next templates
<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
Ok, thank you have a good day
<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
Bye, see you
<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
***********************************-->

		<!--**********************************
            Header start
***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
Dashboard
								<span>Welcome to Sego Admin!</span>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#4C8147"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.4604 3.84863H5.31685C4.64745 3.84937 4.00568 4.11561 3.53234 4.58895C3.059 5.06229 2.79276 5.70406 2.79202 6.37346V18.156C2.79276 18.8254 3.059 19.4672 3.53234 19.9405C4.00568 20.4138 4.64745 20.6801 5.31685 20.6808C5.54002 20.6809 5.75401 20.7697 5.91181 20.9275C6.06961 21.0853 6.15832 21.2993 6.15846 21.5224V23.3166C6.15846 23.6212 6.24115 23.9202 6.39771 24.1815C6.55427 24.4429 6.77882 24.6569 7.04744 24.8006C7.31605 24.9444 7.61864 25.0125 7.92295 24.9978C8.22726 24.9831 8.52186 24.8861 8.77536 24.7171L14.6173 20.8222C14.7554 20.7297 14.9179 20.6805 15.0841 20.6808H19.187C19.7383 20.6798 20.2743 20.4991 20.7137 20.1662C21.1531 19.8332 21.472 19.3661 21.6222 18.8357L24.8965 7.04986C24.9999 6.67457 25.0152 6.2805 24.9413 5.89831C24.8675 5.51613 24.7064 5.15615 24.4707 4.84638C24.235 4.53662 23.9309 4.28544 23.5823 4.11238C23.2336 3.93933 22.8497 3.84907 22.4604 3.84863ZM23.2733 6.6028L20.0006 18.3845C19.95 18.5612 19.8432 18.7166 19.6964 18.8272C19.5496 18.9378 19.3708 18.9976 19.187 18.9976H15.0841C14.5856 18.997 14.0981 19.1446 13.6836 19.4217L7.84168 23.3166V21.5224C7.84094 20.853 7.5747 20.2113 7.10136 19.7379C6.62802 19.2646 5.98625 18.9983 5.31685 18.9976C5.09368 18.9975 4.87969 18.9088 4.72189 18.7509C4.56409 18.5931 4.47537 18.3792 4.47524 18.156V6.37346C4.47537 6.15029 4.56409 5.9363 4.72189 5.7785C4.87969 5.6207 5.09368 5.53198 5.31685 5.53185H22.4604C22.5905 5.53218 22.7188 5.56252 22.8352 5.62052C22.9517 5.67851 23.0532 5.76259 23.1318 5.86621C23.2105 5.96984 23.2641 6.09021 23.2887 6.21797C23.3132 6.34572 23.3079 6.47742 23.2733 6.6028Z" fill="#4C8147"/>
										<path d="M7.84167 11.423H12.0497C12.2729 11.423 12.487 11.3343 12.6448 11.1765C12.8027 11.0186 12.8913 10.8046 12.8913 10.5814C12.8913 10.3581 12.8027 10.1441 12.6448 9.98625C12.487 9.82842 12.2729 9.73975 12.0497 9.73975H7.84167C7.61846 9.73975 7.4044 9.82842 7.24656 9.98625C7.08873 10.1441 7.00006 10.3581 7.00006 10.5814C7.00006 10.8046 7.08873 11.0186 7.24656 11.1765C7.4044 11.3343 7.61846 11.423 7.84167 11.423Z" fill="#4C8147"/>
										<path d="M15.4162 13.1064H7.84167C7.61846 13.1064 7.4044 13.1951 7.24656 13.3529C7.08873 13.5108 7.00006 13.7248 7.00006 13.9481C7.00006 14.1713 7.08873 14.3853 7.24656 14.5432C7.4044 14.701 7.61846 14.7897 7.84167 14.7897H15.4162C15.6394 14.7897 15.8534 14.701 16.0113 14.5432C16.1691 14.3853 16.2578 14.1713 16.2578 13.9481C16.2578 13.7248 16.1691 13.5108 16.0113 13.3529C15.8534 13.1951 15.6394 13.1064 15.4162 13.1064Z" fill="#4C8147"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">5</span>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.625 6.12494H22.75V2.62494C22.75 2.47256 22.7102 2.32283 22.6345 2.19056C22.5589 2.05829 22.45 1.94807 22.3186 1.87081C22.1873 1.79355 22.0381 1.75193 21.8857 1.75007C21.7333 1.7482 21.5831 1.78616 21.4499 1.86019L14 5.99902L6.55007 1.86019C6.41688 1.78616 6.26667 1.7482 6.11431 1.75007C5.96194 1.75193 5.8127 1.79355 5.68136 1.87081C5.55002 1.94807 5.44113 2.05829 5.36547 2.19056C5.28981 2.32283 5.25001 2.47256 5.25 2.62494V6.12494H4.375C3.67904 6.1257 3.01181 6.40251 2.51969 6.89463C2.02757 7.38674 1.75076 8.05398 1.75 8.74994V11.3749C1.75076 12.0709 2.02757 12.7381 2.51969 13.2302C3.01181 13.7224 3.67904 13.9992 4.375 13.9999H5.25V23.6249C5.25076 24.3209 5.52757 24.9881 6.01969 25.4802C6.51181 25.9724 7.17904 26.2492 7.875 26.2499H20.125C20.821 26.2492 21.4882 25.9724 21.9803 25.4802C22.4724 24.9881 22.7492 24.3209 22.75 23.6249V13.9999H23.625C24.321 13.9992 24.9882 13.7224 25.4803 13.2302C25.9724 12.7381 26.2492 12.0709 26.25 11.3749V8.74994C26.2492 8.05398 25.9724 7.38674 25.4803 6.89463C24.9882 6.40251 24.321 6.1257 23.625 6.12494ZM21 6.12494H17.3769L21 4.11244V6.12494ZM7 4.11244L10.6231 6.12494H7V4.11244ZM7 23.6249V13.9999H13.125V24.4999H7.875C7.64303 24.4996 7.42064 24.4073 7.25661 24.2433C7.09258 24.0793 7.0003 23.8569 7 23.6249ZM21 23.6249C20.9997 23.8569 20.9074 24.0793 20.7434 24.2433C20.5794 24.4073 20.357 24.4996 20.125 24.4999H14.875V13.9999H21V23.6249ZM24.5 11.3749C24.4997 11.6069 24.4074 11.8293 24.2434 11.9933C24.0794 12.1574 23.857 12.2496 23.625 12.2499H4.375C4.14303 12.2496 3.92064 12.1574 3.75661 11.9933C3.59258 11.8293 3.5003 11.6069 3.5 11.3749V8.74994C3.5003 8.51796 3.59258 8.29558 3.75661 8.13155C3.92064 7.96752 4.14303 7.87524 4.375 7.87494H23.625C23.857 7.87524 24.0794 7.96752 24.2434 8.13155C24.4074 8.29558 24.4997 8.51796 24.5 8.74994V11.3749Z" fill="#4C8147"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-right rounded">
									<div id="DZ_W_TimeLine11Home" class="widget-timeline dz-scroll style-1 p-3 height370 ps ps--active-y">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="#">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge info">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
											</li>
											<li>
												<div class="timeline-badge danger">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge success">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge warning">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong>Brian Lee</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
***********************************-->

        <!--**********************************
            Sidebar start
***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="orders.html">Orders</a></li>
							<li><a href="order-id.html">Order ID</a></li>
							<li><a href="general-customers.html">General Customers</a></li>
							<li><a href="analytics.html">Analytics</a></li>
							<li><a href="reviews.html">Reviews</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a href="./post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
									<li><a href="./ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="./uc-lightgallery.html">Lightgallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="add-menu-sidebar">
					<img src="images/food-serving.png" alt="">
					<p class="mb-3">Organize your menus through button bellow</p>
					<span class="fs-12 d-block mb-3">Lorem ipsum dolor sit amet</span>
					<a href="javascript:void(0)" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#addOrderModalside" >+Add Menus</a>
				</div>
				<div class="copyright">
					<p><strong>Sego Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
***********************************-->

		<!--**********************************
            Content body start
***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Menus</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Food Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Order Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Food Price</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">459</h2>
										<span class="text-white">Total Menus</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>6/8</span>
										<small class="text-primary">
										<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0)">
											<path d="M30 7.03697H21.4497V1.75781H27.7137V0H19.6918V7.03697H11.1417V12.3132H12.9572L13.1193 14.7549H8.50227C5.03494 14.7549 2.17072 17.3859 1.80038 20.7561C0.75531 21.1073 0 22.0953 0 23.2571C0 24.4244 0.762405 25.4164 1.81526 25.7632C2.1769 28.1582 4.24873 30 6.74286 30H27.0115L28.1845 12.3132H30V7.03697ZM8.50227 16.5127H16.2202C18.669 16.5127 20.7097 18.2881 21.1263 20.6188H3.59619C4.01276 18.2881 6.05324 16.5127 8.50227 16.5127ZM2.63809 22.3766H22.0841C22.5696 22.3766 22.9646 22.7717 22.9646 23.2569C22.9646 23.7424 22.5696 24.1372 22.0841 24.1372H2.63809C2.15263 24.1372 1.75781 23.7424 1.75781 23.2569C1.75781 22.7717 2.15263 22.3766 2.63809 22.3766ZM6.74286 28.2422C5.26886 28.2422 4.02351 27.2479 3.63968 25.8952H21.0825C20.6989 27.2479 19.4536 28.2422 17.9794 28.2422H6.74286ZM25.3665 28.2422H21.7738C22.3618 27.5517 22.7655 26.7002 22.907 25.7632C23.9598 25.4164 24.7224 24.4244 24.7224 23.2571C24.7224 22.0953 23.9671 21.1073 22.9221 20.7561C22.5517 17.3859 19.6877 14.7549 16.2202 14.7549H14.881L14.7189 12.3132H26.4228L25.3665 28.2422ZM28.2422 10.5553H12.8996V8.79478H28.2422V10.5553Z" fill="#EA7A9A"/>
											</g>
											<defs>
											<clipPath id="clip0">
											<rect width="30" height="30" fill="white"/>
											</clipPath>
											</defs>
										</svg>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">$ 87,561</h2>
										<span class="text-white">Total Revenue</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>3/8</span>
										<small class="text-primary">
										<svg width="20" height="36" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z" fill="#EA7A9A"/>
										</svg>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">247</h2>
										<span class="text-white">Total Oders</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>4/8</span>
										<small class="text-primary">
										<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10 32.5H28.75C29.7442 32.4989 30.6974 32.1035 31.4004 31.4004C32.1035 30.6974 32.4989 29.7442 32.5 28.75V18.75C32.5 18.4185 32.3683 18.1005 32.1339 17.8661C31.8995 17.6317 31.5815 17.5 31.25 17.5C30.9185 17.5 30.6005 17.6317 30.3661 17.8661C30.1317 18.1005 30 18.4185 30 18.75V28.75C29.9997 29.0814 29.8679 29.3992 29.6336 29.6336C29.3992 29.8679 29.0814 29.9997 28.75 30H10C9.66857 29.9997 9.3508 29.8679 9.11645 29.6336C8.88209 29.3992 8.7503 29.0814 8.75 28.75V11.25C8.7503 10.9186 8.88209 10.6008 9.11645 10.3664C9.3508 10.1321 9.66857 10.0003 10 10H21.25C21.5815 10 21.8995 9.8683 22.1339 9.63388C22.3683 9.39946 22.5 9.08152 22.5 8.75C22.5 8.41848 22.3683 8.10054 22.1339 7.86612C21.8995 7.6317 21.5815 7.5 21.25 7.5H10C9.00577 7.50109 8.05258 7.89653 7.34956 8.59956C6.64653 9.30258 6.25109 10.2558 6.25 11.25V28.75C6.25109 29.7442 6.64653 30.6974 7.34956 31.4004C8.05258 32.1035 9.00577 32.4989 10 32.5Z" fill="#EA7A9A"/>
											<path d="M31.25 2.5C30.0138 2.5 28.8055 2.86656 27.7777 3.55331C26.7498 4.24007 25.9488 5.21619 25.4757 6.35823C25.0027 7.50027 24.8789 8.75693 25.1201 9.96931C25.3612 11.1817 25.9565 12.2953 26.8306 13.1694C27.7046 14.0435 28.8183 14.6388 30.0307 14.8799C31.243 15.1211 32.4997 14.9973 33.6417 14.5242C34.7838 14.0512 35.7599 13.2501 36.4466 12.2223C37.1334 11.1945 37.5 9.98613 37.5 8.75C37.498 7.093 36.8389 5.50442 35.6672 4.33274C34.4955 3.16106 32.907 2.50195 31.25 2.5ZM31.25 12.5C30.5083 12.5 29.7833 12.2801 29.1666 11.868C28.5499 11.456 28.0692 10.8703 27.7854 10.1851C27.5016 9.49984 27.4273 8.74584 27.572 8.01841C27.7167 7.29098 28.0739 6.6228 28.5983 6.09835C29.1228 5.5739 29.7909 5.21675 30.5184 5.07206C31.2458 4.92736 31.9998 5.00162 32.685 5.28545C33.3702 5.56928 33.9559 6.04993 34.368 6.66661C34.78 7.2833 35 8.00832 35 8.75C34.9989 9.74423 34.6034 10.6974 33.9004 11.4004C33.1974 12.1035 32.2442 12.4989 31.25 12.5Z" fill="#EA7A9A"/>
											<path d="M12.5 15H18.75C19.0815 15 19.3995 14.8683 19.6339 14.6339C19.8683 14.3995 20 14.0815 20 13.75C20 13.4185 19.8683 13.1005 19.6339 12.8661C19.3995 12.6317 19.0815 12.5 18.75 12.5H12.5C12.1685 12.5 11.8505 12.6317 11.6161 12.8661C11.3817 13.1005 11.25 13.4185 11.25 13.75C11.25 14.0815 11.3817 14.3995 11.6161 14.6339C11.8505 14.8683 12.1685 15 12.5 15Z" fill="#EA7A9A"/>
											<path d="M11.25 18.75C11.25 19.0815 11.3817 19.3995 11.6161 19.6339C11.8505 19.8683 12.1685 20 12.5 20H23.75C24.0815 20 24.3995 19.8683 24.6339 19.6339C24.8683 19.3995 25 19.0815 25 18.75C25 18.4185 24.8683 18.1005 24.6339 17.8661C24.3995 17.6317 24.0815 17.5 23.75 17.5H12.5C12.1685 17.5 11.8505 17.6317 11.6161 17.8661C11.3817 18.1005 11.25 18.4185 11.25 18.75Z" fill="#EA7A9A"/>
										</svg>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
										<h2 class="text-white font-w600">872</h2>
										<span class="text-white">Total Customers</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}'>7/8</span>
										<small class="text-primary">
										<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.2501 21.25C17.239 21.25 18.2057 20.9568 19.0279 20.4074C19.8502 19.8579 20.491 19.0771 20.8695 18.1634C21.2479 17.2498 21.3469 16.2445 21.154 15.2746C20.9611 14.3046 20.4849 13.4137 19.7856 12.7145C19.0863 12.0152 18.1954 11.539 17.2255 11.3461C16.2556 11.1531 15.2503 11.2522 14.3366 11.6306C13.423 12.009 12.6421 12.6499 12.0927 13.4722C11.5433 14.2944 11.2501 15.2611 11.2501 16.25C11.2514 17.5757 11.7786 18.8467 12.716 19.7841C13.6534 20.7215 14.9244 21.2487 16.2501 21.25ZM16.2501 13.75C16.7445 13.75 17.2279 13.8966 17.639 14.1713C18.0501 14.446 18.3705 14.8365 18.5598 15.2933C18.749 15.7501 18.7985 16.2528 18.702 16.7377C18.6056 17.2227 18.3675 17.6681 18.0178 18.0178C17.6682 18.3674 17.2227 18.6055 16.7378 18.702C16.2528 18.7984 15.7502 18.7489 15.2934 18.5597C14.8365 18.3705 14.4461 18.0501 14.1714 17.6389C13.8967 17.2278 13.7501 16.7445 13.7501 16.25C13.751 15.5872 14.0146 14.9519 14.4833 14.4832C14.9519 14.0146 15.5873 13.7509 16.2501 13.75Z" fill="#EA7A9A"/>
											<path d="M35.78 24.4625C36.1927 23.9099 36.4684 23.2672 36.5844 22.5873C36.7005 21.9074 36.6537 21.2097 36.4478 20.5514L35.6543 17.9697C35.2817 16.7452 34.5244 15.6734 33.4946 14.9133C32.4648 14.1532 31.2174 13.7453 29.9375 13.75H24.3287C23.9971 13.75 23.6792 13.8817 23.4448 14.1162C23.2103 14.3506 23.0787 14.6685 23.0787 15C23.0787 15.3316 23.2103 15.6495 23.4448 15.8839C23.6792 16.1183 23.9971 16.25 24.3287 16.25H29.9375C30.6823 16.2475 31.4081 16.485 32.0073 16.9274C32.6064 17.3698 33.0471 17.9935 33.2639 18.706L34.0574 21.2867C34.145 21.5713 34.1645 21.8725 34.1145 22.1661C34.0645 22.4597 33.9463 22.7375 33.7694 22.977C33.5925 23.2166 33.3619 23.4114 33.0961 23.5456C32.8302 23.6799 32.5366 23.7499 32.2388 23.75H20.7777C20.7423 23.75 20.7127 23.7672 20.6777 23.7702C20.5937 23.7669 20.5125 23.75 20.4273 23.75H12.5898C11.2007 23.745 9.84705 24.188 8.72972 25.0132C7.61239 25.8385 6.79097 27.0021 6.3874 28.3313L5.45415 31.3625C5.23616 32.0719 5.18764 32.8225 5.31248 33.5541C5.43732 34.2856 5.73204 34.9777 6.17296 35.5746C6.61388 36.1715 7.18869 36.6567 7.85119 36.9911C8.51369 37.3255 9.24541 37.4998 9.98753 37.5H23.0287C23.7708 37.4999 24.5026 37.3256 25.1652 36.9913C25.8277 36.6569 26.4026 36.1717 26.8436 35.5748C27.2845 34.9778 27.5793 34.2858 27.7042 33.5542C27.829 32.8226 27.7805 32.0719 27.5625 31.3625L26.6299 28.3315C26.3936 27.5767 26.0217 26.8713 25.5323 26.25H32.2388C32.9283 26.2532 33.6088 26.0929 34.2244 25.7821C34.8399 25.4714 35.3731 25.0192 35.78 24.4625ZM24.8328 34.089C24.6255 34.3727 24.3539 34.6031 24.0403 34.7615C23.7267 34.9198 23.38 35.0016 23.0287 35H9.98753C9.63653 35 9.29043 34.9176 8.97708 34.7594C8.66373 34.6012 8.39187 34.3718 8.18337 34.0894C7.97487 33.807 7.83555 33.4797 7.77661 33.1337C7.71767 32.7876 7.74077 32.4326 7.84403 32.0971L8.77665 29.0661C9.02442 28.249 9.52925 27.5335 10.2161 27.0262C10.903 26.5188 11.7352 26.2466 12.5892 26.25H20.4267C21.2806 26.2466 22.1128 26.5188 22.7997 27.0262C23.4865 27.5335 23.9914 28.249 24.2392 29.0661L25.1718 32.0971C25.2769 32.4324 25.301 32.7877 25.2421 33.1341C25.1832 33.4804 25.0429 33.8078 24.8328 34.0894V34.089Z" fill="#EA7A9A"/>
											<path d="M26.8751 11.25C27.7403 11.25 28.5862 10.9934 29.3057 10.5127C30.0251 10.0319 30.5859 9.34866 30.917 8.54923C31.2482 7.74981 31.3348 6.87014 31.166 6.02148C30.9972 5.17281 30.5805 4.39326 29.9686 3.78141C29.3568 3.16955 28.5772 2.75288 27.7286 2.58407C26.8799 2.41526 26.0002 2.5019 25.2008 2.83303C24.4014 3.16416 23.7181 3.72492 23.2374 4.44438C22.7567 5.16384 22.5001 6.0097 22.5001 6.875C22.5015 8.03489 22.9628 9.14688 23.783 9.96705C24.6032 10.7872 25.7152 11.2486 26.8751 11.25ZM26.8751 5C27.2459 5 27.6084 5.10997 27.9167 5.31599C28.2251 5.52202 28.4654 5.81485 28.6073 6.15747C28.7492 6.50008 28.7864 6.87708 28.714 7.24079C28.6417 7.6045 28.4631 7.9386 28.2009 8.20082C27.9387 8.46304 27.6046 8.64162 27.2408 8.71397C26.8771 8.78631 26.5001 8.74918 26.1575 8.60727C25.8149 8.46535 25.5221 8.22503 25.3161 7.91669C25.11 7.60835 25.0001 7.24584 25.0001 6.875C25.0006 6.37789 25.1983 5.9013 25.5499 5.54979C25.9014 5.19829 26.3779 5.00056 26.8751 5Z" fill="#EA7A9A"/>
										</svg>
										</small>
										<span class="circle bg-white"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-sm-flex flex-wrap d-block pb-0 border-0">
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20">Orders Summary</h4>
									<p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
								</div>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#Monthly" role="tab" aria-selected="true">
    Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab" aria-selected="false">
    Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#Today" role="tab" aria-selected="false">
    Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="Monthly">
										<div class="row align-items-center">
											<div class="col-sm-6">
												<div id="radialBar" class="orderChart"></div>
											</div>
											<div class="col-sm-6 mb-sm-0 mb-3 text-center">
												<h3 class="fs-28 text-black font-w600">$456,005.56</h3>
												<span class="mb-3 d-block">from $500,000.00</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
												<a href="post-details.html" class="btn btn-primary light btn-rounded">More Details</a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">25</h3>
													<span class="fs-18">On Delivery</span>
												</div>
											</div>
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">60</h3>
													<span class="fs-18">Delivered</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">7</h3>
													<span class="fs-18">Canceled</span>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Weekly">
										<div class="row align-items-center">
											<div class="col-sm-6">
												<div id="radialBar2" class="orderChart"></div>
											</div>
											<div class="col-sm-6 mb-sm-0 mb-3 text-center">
												<h3 class="fs-28 text-black font-w600">$150,002.00</h3>
												<span class="mb-3 d-block">from $400,000.00</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
												<a href="post-details.html" class="btn btn-primary light btn-rounded">More Details</a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">30</h3>
													<span class="fs-18">On Delivery</span>
												</div>
											</div>
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">55</h3>
													<span class="fs-18">Delivered</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">9</h3>
													<span class="fs-18">Canceled</span>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Today">
										<div class="row align-items-center">
											<div class="col-sm-6">
												<div id="radialBar3" class="orderChart"></div>
											</div>
											<div class="col-sm-6 mb-sm-0 mb-3 text-center">
												<h3 class="fs-28 text-black font-w600">$856,005.56</h3>
												<span class="mb-3 d-block">from $800,000.00</span>
												<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
												<a href="post-details.html" class="btn btn-primary light btn-rounded">More Details</a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">45</h3>
													<span class="fs-18">On Delivery</span>
												</div>
											</div>
											<div class="col-sm-4 mb-md-0 mb-3">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">90</h3>
													<span class="fs-18">Delivered</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="p-3 border rounded">
													<h3 class="fs-32 text-black font-w600 mb-1">3</h3>
													<span class="fs-18">Canceled</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-sm-flex d-block pb-0 border-0">
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20">Revenue</h4>
									<p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
								</div>
								<div class="dropdown mt-sm-0 mt-3">
                                    <button type="button" class="btn btn-primary light btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Monthly
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                    </div>
                                </div>
							</div>
							<div class="card-body" id="user-activity">
								<div class="d-flex flex-wrap mb-4">
									<div class="mr-auto mb-2 pr-3 d-flex align-items-center">
										<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="3.54545" height="26" rx="1.77273" fill="#EA7A9A"/>
											<rect x="7.09088" y="7.09082" width="3.54545" height="18.9091" rx="1.77273" fill="#EA7A9A"/>
											<rect x="14.1819" y="17.7271" width="3.54545" height="8.27273" rx="1.77273" fill="#EA7A9A"/>
											<rect x="21.2727" y="3.54541" width="3.54545" height="22.4545" rx="1.77273" fill="#EA7A9A"/>
										</svg>
										<div class="ml-3">
											<p class="fs-12 mb-1">Income</p>
											<span class="fs-22 text-black font-w600">$126,000</span>
										</div>
									</div>
									<div class="card-action revenue-tabs">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-selected="true">
    All Food
</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
    Food
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
    Beverages
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activityLine" height="300"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black fs-20">Customer Map</h4>
											<p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">
    Monthly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">
    Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">
    Today
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="tab1">
												<div id="chartTimeline"></div>
											</div>
											<div class="tab-pane fade" id="tab2">
												<div id="chartTimeline2"></div>
											</div>
											<div class="tab-pane fade" id="tab3">
												<div id="chartTimeline3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-xxl-12 col-lg-8">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="text-black fs-20 mb-0">Transactions Summary</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6 mb-sm-0 mb-3">
												<div class="media align-items-center">
													<div class="d-inline-block mr-3 position-relative donut-chart-sale2">
														<span class="donut2" data-peity='{ "fill": ["rgb(84, 205, 81)", "rgba(255, 255, 255, 1)"],   "innerRadius": 27, "radius": 10}'>6/8</span>
														<small class="text-black">
86%
														</small>
													</div>
													<div>
														<h4 class="fs-28 font-w600 text-black mb-0">585</h4>
														<span>Succesfull Order</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="media align-items-center">
													<div class="d-inline-block mr-3 position-relative donut-chart-sale2">
														<span class="donut2" data-peity='{ "fill": ["rgb(255, 55, 112)", "rgba(255, 255, 255, 1)"],   "innerRadius": 27, "radius": 10}'>3/8</span>
														<small class="text-black">
14%
														</small>
													</div>
													<div>
														<h4 class="fs-28 font-w600 text-black mb-0">165</h4>
														<span>Unsuccesfull Order</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12 col-lg-4">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="text-black fs-20 mb-0">Average</h4>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-end">
											<div>
												<h4 class="fs-28 font-w600 text-black mb-0">87,456</h4>
												<span>Order</span>
											</div>
											<canvas class="lineChart" id="chart_widget_2" height="85"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card trending-menus">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div>
											<h4 class="text-black fs-20">Daily Trending Menus</h4>
											<p class="fs-13 mb-0 text-black">Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex pb-3 mb-3 border-bottom tr-row align-items-center">
											<span class="num">#1</span>
											<div class="mr-auto pr-3">
												<a href="post-details.html"><h2 class="text-black fs-14">Medium Spicy Spagethi Italiano</h2></a>
												<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menus/9.png" alt="" width="60" class="rounded">
										</div>
										<div class="d-flex pb-3 mb-3 border-bottom tr-row align-items-center">
											<span class="num">#2</span>
											<div class="mr-auto pr-3">
												<a href="post-details.html"><h2 class="text-black fs-14">Watermelon juice with ice</h2></a>
												<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menus/10.png" alt="" width="60" class="rounded">
										</div>
										<div class="d-flex pb-3 mb-3 border-bottom tr-row align-items-center">
											<span class="num">#3</span>
											<div class="mr-auto pr-3">
												<a href="post-details.html"><h2 class="text-black fs-14">Chicken curry special with cucumber</h2></a>
												<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menus/11.png" alt="" width="60" class="rounded">
										</div>
										<div class="d-flex pb-3 mb-3 border-bottom tr-row align-items-center">
											<span class="num">#4</span>
											<div class="mr-auto pr-3">
												<a href="post-details.html"><h2 class="text-black fs-14">Italiano Pizza With Garlic</h2></a>
												<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menus/12.png" alt="" width="60" class="rounded">
										</div>
										<div class="d-flex tr-row align-items-center">
											<span class="num">#5</span>
											<div class="mr-auto pr-3">
												<a href="post-details.html"><h2 class="text-black fs-14">Tuna Soup spinach with himalaya salt</h2></a>
												<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menus/9.png" alt="" width="60" class="rounded">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
***********************************-->

        <!--**********************************
            Footer start
***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
***********************************-->

		<!--**********************************
           Support ticket button start
***********************************-->

        <!--**********************************
           Support ticket button end
***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
***********************************-->

    <!--**********************************
        Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>

	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>

	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
</body>
</html>
