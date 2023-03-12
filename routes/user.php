<?php

use Illuminate\Support\Facades\Route;



Route::prefix('user')->group( function(){


// Manage Logistic Priority
Route::get('priority', [App\Http\Controllers\Users\LogisticPriorityController::class, 'index'])->name('logisticPriority');
Route::post('priority/store', [App\Http\Controllers\Users\LogisticPriorityController::class, 'store'])->name('logisticPriority.store');
Route::post('priority/update', [App\Http\Controllers\Users\LogisticPriorityController::class, 'update'])->name('logisticPriority.update');
Route::post('priority/delete', [App\Http\Controllers\Users\LogisticPriorityController::class, 'delete'])->name('logisticPriority.delete');
Route::post('priority/show', [App\Http\Controllers\Users\LogisticPriorityController::class, 'show'])->name('logisticPriority.show');

// Orders URL
    Route::get('orders', [App\Http\Controllers\Users\OrdersController::class, 'created_order_list'])->name('user.orders');
    Route::get('orders/create', [App\Http\Controllers\Users\OrdersController::class, 'create'])->name('user.orders.create');
    Route::post('orders/delete', [App\Http\Controllers\Users\OrdersController::class, 'delete'])->name('orders.delete');

    Route::get('buyer-details', [App\Http\Controllers\Users\OrdersController::class, 'buyer_details'])->name('user.buyer_details');
    Route::post('buyer/details/store', [App\Http\Controllers\Users\OrdersController::class, 'buyer_details_store'])->name('buyer.details.store');

    Route::get('pickup-details', [App\Http\Controllers\Users\OrdersController::class, 'pickup_details'])->name('user. pickup_details');
    Route::post('pickup/details/store', [App\Http\Controllers\Users\OrdersController::class, 'pickup_details_store'])->name('pickup.details.store');

    Route::get('order-details', [App\Http\Controllers\Users\OrdersController::class, 'order_details'])->name('user.order_details');
    Route::post('order/details/store', [App\Http\Controllers\Users\OrdersController::class, 'order_details_store'])->name('order.details.store');

    Route::get('package-details', [App\Http\Controllers\Users\OrdersController::class, 'package_details'])->name('user.package_details');
    Route::post('package/details/store', [App\Http\Controllers\Users\OrdersController::class, 'package_details_store'])->name('package.details.store');
    
    Route::get('orders/process-order-list', [App\Http\Controllers\Users\OrdersController::class, 'process_order_list'])->name('user.process');
    Route::get('orders/created-order-list', [App\Http\Controllers\Users\OrdersController::class, 'created_order_list'])->name('user.created');
    Route::get('orders/intransit-order-list', [App\Http\Controllers\Users\OrdersController::class, 'intransit_order_list'])->name('user.intransit');
    Route::get('orders/ofd-order-list', [App\Http\Controllers\Users\OrdersController::class, 'ofd_order_list'])->name('user.ofd');
    Route::get('orders/ndr-order-list', [App\Http\Controllers\Users\OrdersController::class, 'ndr_order_list'])->name('user.ndr');
    Route::get('orders/delivered-order-list', [App\Http\Controllers\Users\OrdersController::class, 'delivered_order_list'])->name('user.delivered');
    Route::get('orders/rto-intransit-order-list', [App\Http\Controllers\Users\OrdersController::class, 'rto_intransit_order_list'])->name('user.rto.intransit');
    Route::get('orders/rto-delivered-order-list', [App\Http\Controllers\Users\OrdersController::class, 'rto_delivered_order_list'])->name('user.rto.delivered');
    Route::get('orders/error-order-list', [App\Http\Controllers\Users\OrdersController::class, 'error_order_list'])->name('user.error');
    Route::get('orders/waiting-order-list', [App\Http\Controllers\Users\OrdersController::class, 'waiting_order_list'])->name('user.waiting');
    Route::get('orders/cancel-order-list', [App\Http\Controllers\Users\OrdersController::class, 'cancel_order_list'])->name('user.cancel');
    Route::get('orders/shopify-waiting-order-list', [App\Http\Controllers\Users\OrdersController::class, 'shopify_waiting_order_list'])->name('user.shopify.waiting');
    Route::get('orders/order_tracking_table', [App\Http\Controllers\Users\OrdersController::class, 'order_tracking_table'])->name('order_tracking_table');
    
// Returns URL
    Route::get('returns', [App\Http\Controllers\Users\ReturnsController::class, 'index'])->name('user.returns');
    Route::get('returns/create', [App\Http\Controllers\Users\ReturnsController::class, 'create'])->name('user.returns.create');

// NDR URL
    Route::get('ndr', [App\Http\Controllers\Users\NdrController::class, 'index'])->name('user.ndr');

// Weight Discrepancies URL
    Route::get('weight/discrepancies', [App\Http\Controllers\Users\WeightDiscrepanciesController::class, 'index'])->name('user.weight.discrepancies');

// Weight Freeze URL
    Route::get('weight/freeze', [App\Http\Controllers\Users\WeightFreezeController::class, 'index'])->name('user.weight.freeze');

// Billing URL
    Route::get('billing', [App\Http\Controllers\Users\BillingController::class, 'index'])->name('user.billing');

// Settings URL
    Route::get('courier-priority', [App\Http\Controllers\Users\SettingsController::class, 'courier_priority'])->name('user.settings.courier.priority');
    Route::get('settings/add-warehouse', [App\Http\Controllers\Users\SettingsController::class, 'add_warehouse'])->name('user.settings.add.warehouse');


// Channels URL
    Route::get('channels', [App\Http\Controllers\Users\ChannelsController::class, 'index'])->name('user.channels');

// Users URL
    Route::get('user-page', [App\Http\Controllers\Users\UsersController::class, 'user_page'])->name('user.user.page');
    Route::post('profileupdate', [App\Http\Controllers\Users\UsersController::class, 'profileupdate'])->name('user.user.profileupdate');
    Route::post('changepassword', [App\Http\Controllers\Users\UsersController::class, 'changepassword'])->name('user.user.changepassword');
    Route::post('add-warehouse-address', [App\Http\Controllers\Users\UsersController::class, 'addWarehouseAddress'])->name('user.user.addWarehouseAddress');
    Route::post('add-courier', [App\Http\Controllers\Users\UsersController::class, 'addCourier'])->name('user.user.addCourier');
    Route::post('delete-courier', [App\Http\Controllers\Users\UsersController::class, 'deleteCourier'])->name('user.user.deleteCourier');
    
    Route::post('change-courier-priority', [App\Http\Controllers\Users\UsersController::class, 'changeCourierPriority'])->name('user.user.changeCourierPriority');

    

    


    Route::get('change-password', [App\Http\Controllers\Users\UsersController::class, 'change_password'])->name('user.change.password');


// Tools URL
    Route::get('tools/ratecalculator', [App\Http\Controllers\Users\ToolsController::class, 'ratecalculator'])->name('user.tools.ratecalculator');
    Route::get('tools/ratecard', [App\Http\Controllers\Users\ToolsController::class, 'ratecard'])->name('user.tools.ratecard');
    Route::get('reports', [App\Http\Controllers\Users\ToolsController::class, 'reports'])->name('user.tools.reports');
    Route::get('activities', [App\Http\Controllers\Users\ToolsController::class, 'activities'])->name('user.tools.activities');


});