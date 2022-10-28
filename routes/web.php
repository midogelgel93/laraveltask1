 <?php


// use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;


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




Route::get('/', function () {
        return view('welcome');
    });

Route::get('/home', function (){
     return view("home");

});

Route::get("/product",[\App\Http\Controllers\ProductController::class,"index"])->name("product.index");
Route::delete("/delete/{id}",[\App\Http\Controllers\ProductController::class,"destroy"])->name("product.destroy");
Route::get("/edit/{id}",[\App\Http\Controllers\ProductController::class,"edit"])->name("product.edit");
Route::put("/update/{id}",[\App\Http\Controllers\ProductController::class,"update"])->name("product.update");
Route::post("/create",[\App\Http\Controllers\ProductController::class,"create"])->name("product.create");
Route::get("/show",[\App\Http\Controllers\ProductController::class,"show"])->name("product.show");

Route::resource('/categories', \App\Http\Controllers\CategoriesContoller::class);


    Route::get('/test',function(){
        dd(Auth::user());
    });

    // Route::get('/product/category/{product}',function (Product $product){
    //     dd($product);
    //     return view('products.orders',['order'=>$order]);
    // });
    Route::get('/product/order',function (){
        $products =Product::get();
        // dd($products);
        return view('products.orders',['products'=>$products]);
    });




Auth::routes(['verify' =>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/category",[\App\Http\Controllers\CategoriesContoller::class,'index'])->name("category.index");
