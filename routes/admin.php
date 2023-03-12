<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group( function(){
/*
    // Menu URL
    Route::get('menus', [App\Http\Controllers\Admin\MenuController::class, 'index'])->name('menus');
    Route::post('menus/store', [App\Http\Controllers\Admin\MenuController::class, 'store'])->name('menus.store');
    Route::post('menus/update', [App\Http\Controllers\Admin\MenuController::class, 'update'])->name('menus.update');
    Route::post('menus/delete', [App\Http\Controllers\Admin\MenuController::class, 'delete'])->name('menus.delete');
    Route::post('menus/show', [App\Http\Controllers\Admin\MenuController::class, 'show'])->name('menus.show');
    
    // Page URL
    Route::get('pages', [App\Http\Controllers\Admin\PageController::class, 'index'])->name('pages');
    Route::post('pages/store', [App\Http\Controllers\Admin\PageController::class, 'store'])->name('pages.store');
    Route::post('pages/update', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('pages.update');
    Route::post('pages/delete', [App\Http\Controllers\Admin\PageController::class, 'delete'])->name('pages.delete');
    Route::post('pages/show', [App\Http\Controllers\Admin\PageController::class, 'show'])->name('pages.show');

    // Product URL
    Route::get('products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products');
    Route::post('products/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('products.store');
    Route::post('products/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('products.update');
    Route::post('products/delete', [App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('products.delete');
    Route::post('products/show', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('products.show');

    // Service URL
    Route::get('services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('services');
    Route::post('services/store', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('services.store');
    Route::post('services/update', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('services.update');
    Route::post('services/delete', [App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('services.delete');
    Route::post('services/show', [App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('services.show');*/

    // Users

    Route::get('customers', [App\Http\Controllers\Admin\UserController::class, 'customers'])->name('customers');
    Route::get('pending', [App\Http\Controllers\Admin\UserController::class, 'pending'])->name('pending');
    Route::get('approve', [App\Http\Controllers\Admin\UserController::class, 'approve'])->name('approve');
    Route::get('rejected', [App\Http\Controllers\Admin\UserController::class, 'rejected'])->name('rejected');
    Route::get('customer-pre-awb', [App\Http\Controllers\Admin\UserController::class, 'customer_pre_awb'])->name('customer.pre.awb');
    Route::get('customer-api-setting', [App\Http\Controllers\Admin\UserController::class, 'customer_api_setting'])->name('customer.customer_api_setting');
    Route::post('show-customer-api-setting', [App\Http\Controllers\Admin\UserController::class, 'show_customer_api_setting'])->name('customer.show_customer_api_setting');
    Route::post('store-customer-api-setting', [App\Http\Controllers\Admin\UserController::class, 'store_customer_api_setting'])->name('customer.store_customer_api_setting');
    

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
    Route::post('users/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
    Route::post('users/update', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::post('users/delete', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('users.delete');
    Route::post('users/show', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
    Route::post('users/status', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('users.status');
    Route::post('users/preawb_status', [App\Http\Controllers\Admin\UserController::class, 'preawb_status'])->name('users.preawb_status');


    // Manage Rule
    Route::get('rules', [App\Http\Controllers\Admin\RuleController::class, 'index'])->name('rules');
    Route::post('rules/store', [App\Http\Controllers\Admin\RuleController::class, 'store'])->name('rules.store');
    Route::post('rules/update', [App\Http\Controllers\Admin\RuleController::class, 'update'])->name('rules.update');
    Route::post('rules/delete', [App\Http\Controllers\Admin\RuleController::class, 'delete'])->name('rules.delete');
    Route::post('rules/show', [App\Http\Controllers\Admin\RuleController::class, 'show'])->name('rules.show');
    Route::post('rules/status', [App\Http\Controllers\Admin\RuleController::class, 'status'])->name('rules.status');


    // Manage Logistic
    Route::get('logistics', [App\Http\Controllers\Admin\LogisticController::class, 'index'])->name('logistics');
    Route::post('logistics/store', [App\Http\Controllers\Admin\LogisticController::class, 'store'])->name('logistics.store');
    Route::post('logistics/update', [App\Http\Controllers\Admin\LogisticController::class, 'update'])->name('logistics.update');
    Route::post('logistics/delete', [App\Http\Controllers\Admin\LogisticController::class, 'delete'])->name('logistics.delete');
    Route::post('logistics/show', [App\Http\Controllers\Admin\LogisticController::class, 'show'])->name('logistics.show');
    Route::post('logistics/status', [App\Http\Controllers\Admin\LogisticController::class, 'status'])->name('logistics.status');


    // Manage Shipping Price
    Route::get('shippings', [App\Http\Controllers\Admin\ShippingController::class, 'index'])->name('shippings');
    Route::post('shippings/store', [App\Http\Controllers\Admin\ShippingController::class, 'store'])->name('shippings.store');
    Route::post('shippings/update', [App\Http\Controllers\Admin\ShippingController::class, 'update'])->name('shippings.update');
    Route::post('shippings/delete', [App\Http\Controllers\Admin\ShippingController::class, 'delete'])->name('shippings.delete');
    Route::post('shippings/show', [App\Http\Controllers\Admin\ShippingController::class, 'show'])->name('shippings.show');
    

    // Manage Price
    Route::get('manage-price', [App\Http\Controllers\Admin\ManagePriceController::class, 'manage_price'])->name('manage_price1');
    Route::post('manage-price', [App\Http\Controllers\Admin\ManagePriceController::class, 'manage_price'])->name('manage_price');
    Route::post('manage/price/store', [App\Http\Controllers\Admin\ManagePriceController::class, 'store'])->name('manage.price.store');



    // Manage Metrocity
    Route::get('metrocity', [App\Http\Controllers\Admin\MetrocityController::class, 'index'])->name('metrocity');
    Route::post('metrocity/store', [App\Http\Controllers\Admin\MetrocityController::class, 'store'])->name('metrocity.store');
    Route::post('metrocity/update', [App\Http\Controllers\Admin\MetrocityController::class, 'update'])->name('metrocity.update');
    Route::post('metrocity/delete', [App\Http\Controllers\Admin\MetrocityController::class, 'delete'])->name('metrocity.delete');
    Route::post('metrocity/show', [App\Http\Controllers\Admin\MetrocityController::class, 'show'])->name('metrocity.show');
    Route::post('metrocity/status', [App\Http\Controllers\Admin\MetrocityController::class, 'status'])->name('metrocity.status');

    // Manage Address
    Route::get('address', [App\Http\Controllers\Admin\AddressController::class, 'index'])->name('address');
    Route::post('address/store', [App\Http\Controllers\Admin\AddressController::class, 'store'])->name('address.store');
    Route::post('address/update', [App\Http\Controllers\Admin\AddressController::class, 'update'])->name('address.update');
    Route::post('address/delete', [App\Http\Controllers\Admin\AddressController::class, 'delete'])->name('address.delete');
    Route::post('address/show', [App\Http\Controllers\Admin\AddressController::class, 'show'])->name('address.show');

    // Manage Finance
    Route::get('customer-allow-credit', [App\Http\Controllers\Admin\FinanceController::class, 'customer_allow_credit'])->name('finance.customer_allow_credit');
    Route::get('user-wallet-balance', [App\Http\Controllers\Admin\FinanceController::class, 'user_wallet_balance'])->name('finance.user_wallet_balance');
    Route::get('customer-used-credit', [App\Http\Controllers\Admin\FinanceController::class, 'customer_used_credit'])->name('finance.customer_used_credit');

    Route::post('finance/store', [App\Http\Controllers\Admin\FinanceController::class, 'store'])->name('finance.store');
    Route::post('finance/update', [App\Http\Controllers\Admin\FinanceController::class, 'update'])->name('finance.update');
    Route::post('finance/show', [App\Http\Controllers\Admin\FinanceController::class, 'show'])->name('finance.show');


    // Manage COD Remittance
    Route::get('cod-remittance-lists', [App\Http\Controllers\Admin\CodController::class, 'cod_remittance_list'])->name('cod.cod_remittance_list');
    Route::get('all-cod-remittance-list', [App\Http\Controllers\Admin\CodController::class, 'all_cod_remittance_list'])->name('cod.all_cod_remittance_list');
    Route::get('next-cod-remittance-list', [App\Http\Controllers\Admin\CodController::class, 'next_cod_remittance_list'])->name('cod.next_cod_remittance_list');
    Route::get('next-cod-remittance-all-data', [App\Http\Controllers\Admin\CodController::class, 'next_cod_remittance_all_data'])->name('cod.next_cod_remittance_all_data');
    Route::get('cod-remittance', [App\Http\Controllers\Admin\CodController::class, 'cod_remittance'])->name('cod.cod_remittance');
    Route::get('cod-wallet-transactions', [App\Http\Controllers\Admin\CodController::class, 'cod_wallet_transactions'])->name('cod.cod_wallet_transactions');
    Route::get('cod_remittance_order_detail_table', [App\Http\Controllers\Admin\CodController::class, 'cod_remittance_order_detail_table'])->name('cod.cod_remittance_order_detail_table');
    

    // Assign label
    Route::get('assign-label', [App\Http\Controllers\Admin\LabelController::class, 'assign_label'])->name('label.assign_label');
    Route::post('label/store', [App\Http\Controllers\Admin\LabelController::class, 'store'])->name('label.store');

    Route::get('kyc-verification', [App\Http\Controllers\Admin\KycVerificationController::class, 'kyc_verification'])->name('kyc_verification');
    Route::post('kyc/store', [App\Http\Controllers\Admin\KycVerificationController::class, 'store'])->name('kyc.store');
    Route::post('kyc/update', [App\Http\Controllers\Admin\KycVerificationController::class, 'update'])->name('kyc.update');

    Route::get('view-customer/{id}', [App\Http\Controllers\Admin\KycVerificationController::class, 'view_customer'])->name('view_customer');
    Route::get('approve-pending', [App\Http\Controllers\Admin\KycVerificationController::class, 'approve_pending'])->name('approve_pending');
    
    
});