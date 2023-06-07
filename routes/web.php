<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CampaignTimeScheduleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserOrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin start

Auth::routes();

Route::get('/blank/index', function () {
    return view('admin.blank.index');
});
Route::get('/', function () {
    return view('front.index');
//    return redirect()->route('login');
});
Route::get('about', function () {return view('front.about');});
Route::get('services', [PackageController::class, 'service_package_for_front'])->name('service_package_for_front');
Route::post('services-search', [PackageController::class, 'service_package_for_front_search'])->name('service_package_for_front_search');
//Route::get('services', function () {return view('front.services');});
Route::get('contact', function () {return view('front.contact');});

Route::group(['middleware' => ['admin.auth']], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');

// For Users
    Route::resource('user', UserController::class);

// For Services
Route::resource('service', ServiceController::class);

// For Package
Route::resource('package', PackageController::class);

// For Time Schedule
Route::resource('time', CampaignTimeScheduleController::class);

// For Support Ticket
Route::resource('support-ticket', SupportController::class);
Route::post('support-ticket-reply', [SupportController::class, 'supportAdminReply'])->name('support_ticket_reply');
Route::get('support-ticket-close/{support_ticket}', [SupportController::class, 'supportTicketClose'])->name('support_ticket_close');

// For Order
Route::resource('order', OrderController::class);
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('order-by-status/{status}', [OrderController::class, 'order_by_status'])->name('order_by_status.slug');
    Route::post('update-order-status', [OrderController::class, 'update_order_status'])->name('update_order_status');

Route::resource('campaign', CampaignController::class);

Route::post('update-campaign-status', [CampaignController::class, 'update_campaign_status'])->name('update_campaign_status');

    Route::get('refresh-campaigns', [CampaignController::class, 'refresh_campaigns'])->name('refresh_campaigns');

// For Pages
Route::resource('page', PageController::class);

});

Route::get('pages/{slug}', [PageController::class, 'get_page_by_slug'])->name('page.get_page_by_slug');

//Admin end

// For Users Only

Route::group(['middleware' => ['auth']], function () {

    // Route::get('/front-user', function () {return view('admin.dashboard.index');})->name('userInfo');
    Route::get('/front-user', [HomeController::class, 'index'])->name('home');

    Route::get('service-package', [PackageController::class, 'service_package'])->name('service_package');

    Route::post('service-package-panel-search', [PackageController::class, 'service_package_for_panel_search'])->name('service_package_for_panel_search');

    Route::resource('user-order', UserOrderController::class);
    Route::get('user-order-by-status/{status}', [UserOrderController::class, 'user_order_by_status'])->name('user_order_by_status.slug');
    Route::get('user-mass-order', [UserOrderController::class, 'massOrderSelection'])->name('user_mass_order');
    Route::post('user-mass-order-submit', [UserOrderController::class, 'massOrderSelectionSubmit'])->name('user_mass_order_submit');
    Route::post('user-mass-order-create-submit', [UserOrderController::class, 'massOrderSelectionCreateSubmit'])->name('user_mass_order_create_submit');
    Route::post('get-package-by-serviceId', [UserOrderController::class, 'getPackageByServiceId'])->name('getPackageByServiceId');
    Route::resource('support-ticket', SupportController::class);
    // Route::post('support-ticket-user-reply', [SupportController::class, 'supportUserReply'])->name('support_ticket_user_reply');
    Route::post('support-ticket-reply', [SupportController::class, 'supportAdminReply'])->name('support_ticket_reply');

});


Route::get('/greeting', function () {
    $interval =  DB::table('campaign_time_schedules')->value('minutes'); 
    $new_interval = (int)$interval;    
    dd($new_interval);// Replace with your interval
    
    
    return 'Hello World';
});



//Route::get('/', function () {
//    return view('admin.dashboard.index');
//});
Route::get('/index', function () {
    return view('admin.dashboard.index');
});
Route::get('/dashboard-alternate', function () {
    return view('dashboard-alternate');
});
/*App*/
Route::get('/app-emailbox', function () {
    return view('app-emailbox');
});
Route::get('/app-emailread', function () {
    return view('app-emailread');
});
Route::get('/app-chat-box', function () {
    return view('app-chat-box');
});
Route::get('/app-file-manager', function () {
    return view('app-file-manager');
});
Route::get('/app-contact-list', function () {
    return view('app-contact-list');
});
Route::get('/app-to-do', function () {
    return view('app-to-do');
});
Route::get('/app-invoice', function () {
    return view('app-invoice');
});
Route::get('/app-fullcalender', function () {
    return view('app-fullcalender');
});
/*Charts*/
Route::get('/charts-apex-chart', function () {
    return view('charts-apex-chart');
});
Route::get('/charts-chartjs', function () {
    return view('charts-chartjs');
});
Route::get('/charts-highcharts', function () {
    return view('charts-highcharts');
});
/*ecommerce*/
Route::get('/ecommerce-products', function () {
    return view('ecommerce-products');
});
Route::get('/ecommerce-products-details', function () {
    return view('ecommerce-products-details');
});
Route::get('/ecommerce-add-new-products', function () {
    return view('ecommerce-add-new-products');
});
Route::get('/ecommerce-orders', function () {
    return view('ecommerce-orders');
});

/*Components*/
Route::get('/widgets', function () {
    return view('widgets');
});
Route::get('/component-alerts', function () {
    return view('component-alerts');
});
Route::get('/component-accordions', function () {
    return view('component-accordions');
});
Route::get('/component-badges', function () {
    return view('component-badges');
});
Route::get('/component-buttons', function () {
    return view('component-buttons');
});
Route::get('/component-cards', function () {
    return view('component-cards');
});
Route::get('/component-carousels', function () {
    return view('component-carousels');
});
Route::get('/component-list-groups', function () {
    return view('component-list-groups');
});
Route::get('/component-media-object', function () {
    return view('component-media-object');
});
Route::get('/component-modals', function () {
    return view('component-modals');
});
Route::get('/component-navs-tabs', function () {
    return view('component-navs-tabs');
});
Route::get('/component-navbar', function () {
    return view('component-navbar');
});
Route::get('/component-paginations', function () {
    return view('component-paginations');
});
Route::get('/component-popovers-tooltips', function () {
    return view('component-popovers-tooltips');
});
Route::get('/component-progress-bars', function () {
    return view('component-progress-bars');
});
Route::get('/component-spinners', function () {
    return view('component-spinners');
});
Route::get('/component-notifications', function () {
    return view('component-notifications');
});
Route::get('/component-avtars-chips', function () {
    return view('component-avtars-chips');
});
/*Content*/
Route::get('/content-grid-system', function () {
    return view('content-grid-system');
});
Route::get('/content-typography', function () {
    return view('content-typography');
});
Route::get('/content-text-utilities', function () {
    return view('content-text-utilities');
});
/*Icons*/
Route::get('/icons-line-icons', function () {
    return view('icons-line-icons');
});
Route::get('/icons-boxicons', function () {
    return view('icons-boxicons');
});
Route::get('/icons-feather-icons', function () {
    return view('icons-feather-icons');
});
/*Authentication*/
Route::get('/authentication-signin', function () {
    return view('authentication-signin');
});
Route::get('/authentication-signup', function () {
    return view('authentication-signup');
});
Route::get('/authentication-signin-with-header-footer', function () {
    return view('authentication-signin-with-header-footer');
});
Route::get('/authentication-signup-with-header-footer', function () {
    return view('authentication-signup-with-header-footer');
});
Route::get('/authentication-forgot-password', function () {
    return view('authentication-forgot-password');
});
Route::get('/authentication-reset-password', function () {
    return view('authentication-reset-password');
});
Route::get('/authentication-lock-screen', function () {
    return view('authentication-lock-screen');
});
/*Table*/
Route::get('/table-basic-table', function () {
    return view('table-basic-table');
});
Route::get('/table-datatable', function () {
    return view('table-datatable');
});
/*Pages*/
Route::get('/user-profile', function () {
    return view('user-profile');
});
Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/pricing-table', function () {
    return view('pricing-table');
});
Route::get('/errors-404-error', function () {
    return view('errors-404-error');
});
Route::get('/errors-500-error', function () {
    return view('errors-500-error');
});
Route::get('/errors-coming-soon', function () {
    return view('errors-coming-soon');
});
Route::get('/error-blank-page', function () {
    return view('error-blank-page');
});
Route::get('/faq', function () {
    return view('faq');
});
/*Forms*/
Route::get('/form-elements', function () {
    return view('form-elements');
});

Route::get('/form-input-group', function () {
    return view('form-input-group');
});
Route::get('/form-layouts', function () {
    return view('form-layouts');
});
Route::get('/form-validations', function () {
    return view('form-validations');
});
Route::get('/form-wizard', function () {
    return view('form-wizard');
});
Route::get('/form-text-editor', function () {
    return view('form-text-editor');
});
Route::get('/form-file-upload', function () {
    return view('form-file-upload');
});
Route::get('/form-date-time-pickes', function () {
    return view('form-date-time-pickes');
});
Route::get('/form-select2', function () {
    return view('form-select2');
});
/*Maps*/
Route::get('/map-google-maps', function () {
    return view('map-google-maps');
});
Route::get('/map-vector-maps', function () {
    return view('map-vector-maps');
});
/*Un-found*/
Route::get('/test/content-grid-system', function () {
    return view('test/content-grid-system');
});
