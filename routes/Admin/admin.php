<?php

use App\Http\Controllers\Backend\Appearance\AboutUsPageController;
use App\Http\Controllers\Backend\Appearance\BannerSectionOneController;
use App\Http\Controllers\Backend\Appearance\BannerSectionTwoController;
use App\Http\Controllers\Backend\Appearance\BestDealProductsController;
use App\Http\Controllers\Backend\Appearance\BestSellingProductsController;
use App\Http\Controllers\Backend\Appearance\ClientFeedbackController;
use App\Http\Controllers\Backend\Appearance\FeaturedProductsController;
use App\Http\Controllers\Backend\Appearance\FooterController;
use App\Http\Controllers\Backend\Appearance\HeaderController;
use App\Http\Controllers\Backend\Appearance\HeroController;
use App\Http\Controllers\Backend\Appearance\ProductsPageController;
use App\Http\Controllers\Backend\Appearance\TopCategoriesController;
use App\Http\Controllers\Backend\Appearance\TopTrendingProductsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CurrenciesController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SubscribersController;
use App\Http\Controllers\Backend\CustomersController;
use App\Http\Controllers\Backend\StaffsController;

use App\Http\Controllers\Backend\Products\ProductsController;
use App\Http\Controllers\Backend\Promotions\CouponsController;
use App\Http\Controllers\Backend\Promotions\CampaignsController;
use App\Http\Controllers\Backend\Pages\PagesController;
use App\Http\Controllers\Backend\BlogSystem\TagsController;
use App\Http\Controllers\Backend\BlogSystem\BlogCategoriesController;
use App\Http\Controllers\Backend\BlogSystem\BlogsController;
use App\Http\Controllers\Backend\Contacts\ContactUsMessagesController;
use App\Http\Controllers\Backend\Logistics\LogisticsController;
use App\Http\Controllers\Backend\Logistics\LogisticZonesController;
use App\Http\Controllers\Backend\Logistics\CountriesController;
use App\Http\Controllers\Backend\Logistics\StatesController;
use App\Http\Controllers\Backend\Logistics\CitiesController;
use App\Http\Controllers\Backend\MediaManager\MediaManagerController;
use App\Http\Controllers\Backend\Newsletters\NewslettersController;
use App\Http\Controllers\Backend\Orders\OrdersController;
use App\Http\Controllers\Backend\Stocks\StocksController;
use App\Http\Controllers\Backend\Stocks\LocationsController;
use App\Http\Controllers\Backend\OrderSettingsController;
use App\Http\Controllers\Backend\Pos\PosController;
use App\Http\Controllers\Backend\Roles\RolesController;
use App\Http\Controllers\Backend\Reports\ReportsController;
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

# variation to create product --> also used in vendor panel
Route::group(['prefix' => 'backend'], function () {
    Route::group(['prefix' => 'products', 'middleware' => ['auth']], function () {
        Route::post('/get-variation-values', [ProductsController::class, 'getVariationValues'])->name('product.getVariationValues');
        Route::post('/new-variation', [ProductsController::class, 'getNewVariation'])->name('product.newVariation');
        Route::post('/variation-combination', [ProductsController::class, 'generateVariationCombinations'])->name('product.generateVariationCombinations');
    });

    # change settings
    Route::post('/change-currency', [CurrenciesController::class, 'changeCurrency'])->name('backend.changeCurrency');
    Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('backend.changeLanguage');
    Route::post('/change-location', [LocationsController::class, 'changeLocation'])->name('backend.changeLocation');
});


Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () {
        # dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::post('/profile', [DashboardController::class, 'updateProfile'])->name('admin.profile.update');

        # settings
        Route::post('/settings/env-key-update', [SettingsController::class, 'envKeyUpdate'])->name('admin.envKey.update');
        Route::get('/settings/general-settings', [SettingsController::class, 'index'])->name('admin.generalSettings');
        Route::get('/settings/smtp-settings', [SettingsController::class, 'smtpSettings'])->name('admin.smtpSettings.index');
        Route::post('/settings/test/smtp', [SettingsController::class, 'testEmail'])->name('admin.test.smtp');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('admin.settings.update');

        #payment methods
        Route::get('/settings/payment-methods', [SettingsController::class, 'paymentMethods'])->name('admin.settings.paymentMethods');
        Route::post('/settings/update-payment-methods', [SettingsController::class, 'updatePaymentMethods'])->name('admin.settings.updatePaymentMethods');

        #order settings
        Route::get('/settings/order-settings', [OrderSettingsController::class, 'index'])->name('admin.orderSettings');
        Route::post('/settings/add-time-slot', [OrderSettingsController::class, 'store'])->name('admin.timeslot.store');
        Route::get('/settings/edit-time-slot/{id}', [OrderSettingsController::class, 'edit'])->name('admin.timeslot.edit');
        Route::post('/settings/update-time-slot', [OrderSettingsController::class, 'update'])->name('admin.timeslot.update');
        Route::get('/settings/delete-time-slot/{id}', [OrderSettingsController::class, 'delete'])->name('admin.timeslot.delete');

        # social login
        Route::get('/settings/social-media-login', [SettingsController::class, 'socialLogin'])->name('admin.settings.socialLogin');
        Route::post('/settings/activation', [SettingsController::class, 'updateActivation'])->name('admin.settings.activation');

        # currencies
        Route::get('/settings/currencies', [CurrenciesController::class, 'index'])->name('admin.currencies.index');
        Route::post('/settings/store-currency', [CurrenciesController::class, 'store'])->name('admin.currencies.store');
        Route::get('/settings/currencies/edit/{id}', [CurrenciesController::class, 'edit'])->name('admin.currencies.edit');
        Route::post('/settings/update-currency', [CurrenciesController::class, 'update'])->name('admin.currencies.update');
        Route::post('/settings/update-currency-status', [CurrenciesController::class, 'updateStatus'])->name('admin.currencies.updateStatus');

        # languages
        Route::get('/settings/languages', [LanguageController::class, 'index'])->name('admin.languages.index');
        Route::post('/settings/store-language', [LanguageController::class, 'store'])->name('admin.languages.store');
        Route::get('/settings/languages/edit/{id}', [LanguageController::class, 'edit'])->name('admin.languages.edit');
        Route::post('/settings/update-language', [LanguageController::class, 'update'])->name('admin.languages.update');
        Route::post('/settings/update-language-status', [LanguageController::class, 'updateStatus'])->name('admin.languages.updateStatus');
        Route::post('/settings/update-language-default-status', [LanguageController::class, 'defaultLanguage'])->name('admin.languages.defaultLanguage');

        # localizations
        Route::get('/settings/languages/localizations/{id}', [LanguageController::class, 'showLocalizations'])->name('admin.languages.localizations');
        Route::post('/settings/languages/key-value-store', [LanguageController::class, 'key_value_store'])->name('admin.languages.key_value_store');


        #pos
        Route::get('/pos', [PosController::class, 'index'])->name('admin.pos.index');
        Route::post('/pos-products', [PosController::class, 'products'])->name('admin.pos.products');
        Route::post('/pos-customers', [PosController::class, 'customers'])->name('admin.pos.customers');
        Route::post('/pos-customer-info', [PosController::class, 'customerInfo'])->name('admin.pos.customerInfo');
        Route::post('/pos-new-customer', [PosController::class, 'newCustomer'])->name('admin.pos.newCustomer');
        Route::post('/add-to-pos-cart', [PosController::class, 'addToList'])->name('admin.pos.addToList');
        Route::post('/pos-product-info', [PosController::class, 'productInfo'])->name('admin.pos.productInfo');
        Route::post('/delete-from-cart', [PosController::class, 'deleteFromCart'])->name('admin.pos.deleteFromCart');
        Route::post('/handle-pos-cart-qty', [PosController::class, 'handleQty'])->name('admin.pos.handleQty');
        Route::post('/get-variation-id', [PosController::class, 'getVariationId'])->name('admin.pos.getVariationId');
        Route::post('/update-pos-summary', [PosController::class, 'updatePosSummary'])->name('admin.pos.updatePosSummary');
        Route::post('/submit-pos-order', [PosController::class, 'completeOrder'])->name('admin.pos.completeOrder');
        Route::get('/pos/invoice-download/{id}', [PosController::class, 'downloadInvoice'])->name('admin.pos.downloadInvoice');


        # orders
        Route::group(['prefix' => 'orders'], function () {
            Route::get('/', [OrdersController::class, 'index'])->name('admin.orders.index');
            Route::get('/{id}', [OrdersController::class, 'show'])->name('admin.orders.show');
            Route::post('/update-payment-status', [OrdersController::class, 'updatePaymentStatus'])->name('admin.orders.update_payment_status');
            Route::post('/update-delivery-status', [OrdersController::class, 'updateDeliveryStatus'])->name('admin.orders.update_delivery_status');
            Route::get('/invoice-download/{id}', [OrdersController::class, 'downloadInvoice'])->name('admin.orders.downloadInvoice');
        });

        # stocks
        Route::group(['prefix' => 'stocks'], function () {
            # stocks
            Route::get('/add', [StocksController::class, 'create'])->name('admin.stocks.create');
            Route::post('/get-variation-stocks', [StocksController::class, 'getVariationStocks'])->name('admin.stocks.getVariationStocks');
            Route::post('/add', [StocksController::class, 'store'])->name('admin.stocks.store');

            # locations
            Route::get('/locations', [LocationsController::class, 'index'])->name('admin.locations.index');
            Route::get('/add-location', [LocationsController::class, 'create'])->name('admin.locations.create');
            Route::post('/add-location', [LocationsController::class, 'store'])->name('admin.locations.store');
            Route::get('/edit-location/{id}', [LocationsController::class, 'edit'])->name('admin.locations.edit');
            Route::post('/update-location', [LocationsController::class, 'update'])->name('admin.locations.update');
            Route::post('/update-default-location', [LocationsController::class, 'updateDefaultStatus'])->name('admin.locations.updateDefaultStatus');
            Route::post('/update-published-location', [LocationsController::class, 'updatePublishedStatus'])->name('admin.locations.updatePublishedStatus');
        });


        # customers
        Route::group(['prefix' => 'customers'], function () {
            Route::get('/', [CustomersController::class, 'index'])->name('admin.customers.index');
            Route::post('/update-banned-customer', [CustomersController::class, 'updateBanStatus'])->name('admin.customers.updateBanStatus');
        });

        # tags
        Route::get('/tags', [TagsController::class, 'index'])->name('admin.tags.index');
        Route::post('/tag', [TagsController::class, 'store'])->name('admin.tags.store');
        Route::get('/tags/edit/{id}', [TagsController::class, 'edit'])->name('admin.tags.edit');
        Route::post('/tags/update-tag', [TagsController::class, 'update'])->name('admin.tags.update');
        Route::get('/tags/delete/{id}', [TagsController::class, 'delete'])->name('admin.tags.delete');

        # blog system
        Route::group(['prefix' => 'blogs'], function () {
            # blogs
            Route::get('/', [BlogsController::class, 'index'])->name('admin.blogs.index');
            Route::get('/add-blog', [BlogsController::class, 'create'])->name('admin.blogs.create');
            Route::post('/add-blog', [BlogsController::class, 'store'])->name('admin.blogs.store');
            Route::get('/edit/{id}', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
            Route::post('/update-blog', [BlogsController::class, 'update'])->name('admin.blogs.update');
            Route::post('/update-popular', [BlogsController::class, 'updatePopular'])->name('admin.blogs.updatePopular');
            Route::post('/update-status', [BlogsController::class, 'updateStatus'])->name('admin.blogs.updateStatus');
            Route::get('/delete/{id}', [BlogsController::class, 'delete'])->name('admin.blogs.delete');

            # categories
            Route::get('/categories', [BlogCategoriesController::class, 'index'])->name('admin.blogCategories.index');
            Route::post('/category', [BlogCategoriesController::class, 'store'])->name('admin.blogCategories.store');
            Route::get('/categories/edit/{id}', [BlogCategoriesController::class, 'edit'])->name('admin.blogCategories.edit');
            Route::post('/categories/update-category', [BlogCategoriesController::class, 'update'])->name('admin.blogCategories.update');
            Route::get('/categories/delete/{id}', [BlogCategoriesController::class, 'delete'])->name('admin.blogCategories.delete');
        });

//
//        # bulk-emails
//        Route::controller(NewslettersController::class)->group(function () {
//            Route::get('/bulk-emails', 'index')->name('admin.newsletters.index');
//            Route::post('/bulk-emails/send', 'sendNewsletter')->name('admin.newsletters.send');
//        });

        # subscribed users
        Route::get('/subscribers', [SubscribersController::class, 'index'])->name('admin.subscribers.index');
        Route::get('/subscribers/delete/{id}', [SubscribersController::class, 'delete'])->name('admin.subscribers.delete');




        # reports
        Route::group(['prefix' => 'reports'], function () {
            Route::get('/product-sales', [ReportsController::class, 'index'])->name('admin.reports.sales');
            Route::get('/orders', [ReportsController::class, 'orders'])->name('admin.reports.orders');
            Route::get('/category-wise-sales', [ReportsController::class, 'categoryWise'])->name('admin.reports.categorySales');
            Route::get('/sales-amount-report', [ReportsController::class, 'amountWise'])->name('admin.reports.salesAmount');
            Route::get('/delivery-status-report', [ReportsController::class, 'deliveryStatus'])->name('admin.reports.deliveryStatus');
        });

        # contact us message
        Route::group(['prefix' => 'contacts'], function () {
            Route::get('/', [ContactUsMessagesController::class, 'index'])->name('admin.queries.index');
            Route::get('/mark-as-read/{id}', [ContactUsMessagesController::class, 'read'])->name('admin.queries.markRead');
        });


        # staffs
        Route::group(['prefix' => 'staffs'], function () {
            Route::get('/', [StaffsController::class, 'index'])->name('admin.staffs.index');
            Route::get('/add-staff', [StaffsController::class, 'create'])->name('admin.staffs.create');
            Route::post('/add-staff', [StaffsController::class, 'store'])->name('admin.staffs.store');
            Route::get('/update-staff/{id}', [StaffsController::class, 'edit'])->name('admin.staffs.edit');
            Route::post('/update-staff', [StaffsController::class, 'update'])->name('admin.staffs.update');
            Route::get('/delete-staff/{id}', [StaffsController::class, 'delete'])->name('admin.staffs.delete');
        });
    }
);
