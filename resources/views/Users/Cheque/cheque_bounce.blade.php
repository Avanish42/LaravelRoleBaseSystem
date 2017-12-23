
@extends('Users.userapp')
@section('pagetitle')
    Smart Distributer
@endsection
@section('main-content')

<body data-open="hover" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns   menu-expanded">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
<div class="navbar-wrapper">
<div class="navbar-header">
<ul class="nav navbar-nav">
<li class="nav-item mobile-menu hidden-md-up float-xs-left">
<a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a>
</li>
<li class="nav-item"><a href="index.html" class="navbar-brand"><img alt="stack admin logo" src="images/logo.png" class="brand-logo">

<li class="nav-item hidden-md-up float-xs-right">
<a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a>
</li>
</ul>
</div>
<div class="navbar-container content container-fluid">
<div id="navbar-mobile" class="collapse navbar-toggleable-sm">
<ul class="nav navbar-nav">
<li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
<li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
<li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
<div class="search-input">
<input type="text" placeholder="Search here..." class="input">
</div>
</li>
</ul>
<ul class="nav navbar-nav float-xs-right">

<li class="dropdown dropdown-notification nav-item">
<a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-bell"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
<li class="dropdown-menu-header">
<h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
</li>
<li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
<div class="media-body">
<h6 class="media-heading">You have new order!</h6>
<p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
<div class="media-body">
<h6 class="media-heading red darken-1">99% Server load</h6>
<p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
<div class="media-body">
<h6 class="media-heading yellow darken-3">Warning notifixation</h6>
<p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
<div class="media-body">
<h6 class="media-heading">Complete the task</h6><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
<div class="media-body">
<h6 class="media-heading">Generate monthly report</h6><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
</div>
</div></a></li>
<li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
</ul>
</li>
<li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-mail"></i><span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span></a>
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
<li class="dropdown-menu-header">
<h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span></h6>
</li>
<li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left"><span class="avatar avatar-sm  rounded-circle"><i class="ft-head"></i></span></div>
<div class="media-body">
<h6 class="media-heading">Margaret Govan</h6>
<p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left"><span class="avatar avatar-sm  rounded-circle"><i class="ft-head"></i></span></div>
<div class="media-body">
<h6 class="media-heading">Bret Lezama</h6>
<p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left"><span class="avatar avatar-sm  rounded-circle"><i class="ft-head"></i></span></div>
<div class="media-body">
<h6 class="media-heading">Carie Berra</h6>
<p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
</div>
</div></a><a href="javascript:void(0)" class="list-group-item">
<div class="media">
<div class="media-left"><span class="avatar avatar-sm  rounded-circle"><i class="ft-head"></i></span></div>
<div class="media-body">
<h6 class="media-heading">Eric Alsobrook</h6>
<p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
<time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
</div>
</div>
</a>
</li>
<li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
</ul>
</li>
<li class="dropdown dropdown-user nav-item">
<a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar">
<i class="ft-head"></i> </span><span class="user-name">Amitav</span></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a>
<a href="#" class="dropdown-item"><i class="ft-cog"></i> Change Password</a>
<div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Horizontal navigation-->
<div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-without-dd-arrow navbar-shadow menu-border navbar-brand-center navbar-light">
<!-- Horizontal menu content-->
<div data-menu="menu-container" class="navbar-container main-menu-content">
<!-- include ../../../includes/mixins-->
<ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
<li class="nav-item"><a href="index.htm" class="nav-link"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
<li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-paper"></i><span>Bills Allocation</span></a>
<ul class="dropdown-menu">
<li><a href="#" data-toggle="dropdown" class="dropdown-item">New Allocations</a></li>
<li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Pending Allocations</a>
<ul class="dropdown-menu">
<li data-menu=""><a href="signed_bills.htm" data-toggle="dropdown" class="dropdown-item">Signed bills</a></li>
<li data-menu=""><a href="receipts.htm" data-toggle="dropdown" class="dropdown-item">Receipts</a></li>
</ul>
</li>
</ul>
</li>
<li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-layout"></i><span>Temporary Bills</span></a>
<ul class="dropdown-menu">
<li><a href="#" data-toggle="dropdown" class="dropdown-item">Billing</a></li>
<li><a href="#" data-toggle="dropdown" class="dropdown-item">Product & Salesmen Wise</a></li>
<li><a href="#" data-toggle="dropdown" class="dropdown-item">Retailerwise Balances</a></li>
</ul>
</li>
<li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-layout"></i><span>Cheque Detail</span></a>
<ul class="dropdown-menu">
<li><a href="cheque_register.htm" data-toggle="dropdown" class="dropdown-item">Cheque Register</a></li>
<li><a href="cheque_bounce.htm" data-toggle="dropdown" class="dropdown-item">Cheque Bounce Register</a></li>
<li><a href="pending_bounce_cheque.htm" data-toggle="dropdown" class="dropdown-item">Pending Bounce Cheques</a></li>
</ul>
</li>
</ul>
</div>
<!-- /horizontal menu content-->
</div>
<!-- Horizontal navigation-->

<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="content-header row">
<div class="content-header-left col-md-6 col-xs-12 mb-2">
<h3 class="content-header-title mb-0">Cheque Bounce Register</h3>
<div class="row breadcrumbs-top">
<div class="breadcrumb-wrapper col-xs-12">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.htm">Home</a></li>
<li class="breadcrumb-item"><a href="#">Cheque Detail</a></li>
<li class="breadcrumb-item active"><a href="#">Cheque Bounce Register</a></li>
</ol>
</div>
</div>
</div>

</div>
<div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
<div class="card">
<div class="card-header">
<h4 class="card-title" id="basic-layout-form">Cheque Bounce Register</h4>
<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
</ul>
</div>
</div>
<div class="card-body collapse in">
<div class="card-block">
<div class="card-text">
<div class="row">
<div class="col-sm-10">
<div class="table-responsive">
<table class="table gray font-10 table-bordered">
<thead>

<tr>
<th>Date</th>
<th>Retailer Name</th>
<th class="text-xs-right">Cheque Number</th>
<th class="text-xs-right">Cheque Date</th>
<th class="text-xs-right">Cheque Amount</th>
<th>Bank Name</th>
<th>Bill No.</th>
<th>Reason</th>
<th>Penalty</th>
</tr>
</thead>
<tbody>
<tr>
<td>31-Aug-2017</td>
<td>Krishna Store</td>
<td class="text-xs-right">3345678</td>
<td class="text-xs-right">18-Aug-2017</td>
<td class="text-xs-right">20,300</td>
<td>SBI Bank</td>
<td>Ns0023111</td>
<td>
<select id="Select1" >
<option>Insufficient Funds</option>
<option>Exceeds Arrangements</option>
<option>Post-dated</option>
<option>Outdated</option>
<option>Name not written</option>
<option>Signature Different</option>
<option>Wrongly Drawn</option>
</select>
</td>
<td>
<input id="Text1" type="text" value="120" style="width:60px">
</td>
</tr>

<tr>
<td>31-Aug-2017</td>
<td>Krishna Store</td>
<td class="text-xs-right">2345678</td>
<td class="text-xs-right">10-Aug-2017</td>
<td class="text-xs-right">20,300</td>
<td>HDFC Bank</td>
<td>Ns0023456</td>
<td>
<select id="Select2" >
<option>Insufficient Funds</option>
<option>Exceeds Arrangements</option>
<option>Post-dated</option>
<option>Outdated</option>
<option>Name not written</option>
<option>Signature Different</option>
<option>Wrongly Drawn</option>
</select>
</td>
<td><input id="Text2" type="text" value="200" style="width:60px"></td>
</tr>
<tr>
<td>31-Aug-2017</td>
<td>Krishna Store</td>
<td class="text-xs-right">2345678</td>
<td class="text-xs-right">11-Aug-2017</td>
<td class="text-xs-right">20,300</td>
<td>HDFC Bank</td>
<td>Ns0023456</td>
<td>
<select id="Select3" >
<option>Insufficient Funds</option>
<option>Exceeds Arrangements</option>
<option>Post-dated</option>
<option>Outdated</option>
<option>Name not written</option>
<option>Signature Different</option>
<option>Wrongly Drawn</option>
</select>
</td>
<td><input id="Text3" type="text" value="" style="width:60px"></td>
</tr>
<tr>
<td>31-Aug-2017</td>
<td>Krishna Store</td>
<td class="text-xs-right">2345634</td>
<td class="text-xs-right">04-Aug-2017</td>
<td class="text-xs-right">20,300</td>
<td>Axis Bank</td>
<td>Ns0022456</td>
<td>
<select id="Select4" >
<option>Insufficient Funds</option>
<option>Exceeds Arrangements</option>
<option>Post-dated</option>
<option>Outdated</option>
<option>Name not written</option>
<option>Signature Different</option>
<option>Wrongly Drawn</option>
</select>
</td>
<td><input id="Text4" type="text" value="50" style="width:60px"></td>
</tr>
<tr>
<td>31-Aug-2017</td>
<td>Krishna Store</td>
<td class="text-xs-right">2345544</td>
<td class="text-xs-right">22-Aug-2017</td>
<td class="text-xs-right">20,300</td>
<td>ICICI Bank</td>
<td>Ns0023401</td>
<td>
<select id="Select5" >
<option>Insufficient Funds</option>
<option>Exceeds Arrangements</option>
<option>Post-dated</option>
<option>Outdated</option>
<option>Name not written</option>
<option>Signature Different</option>
<option>Wrongly Drawn</option>
</select>
</td>
<td><input id="Text5" type="text" value="" style="width:60px"></td>
</tr>
</tbody>

</table>
</div>

</div>
<div class="col-sm-2 text-xl-right">
<p><a class="btn btn-success btn-min-width mr-1 mb-1">Submit</a></p>
</div>
</div>



</div>

</div>
</div>
</div>

</div>
</section>
<!-- // Basic form layout section end -->
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection