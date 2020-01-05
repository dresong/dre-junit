> dresong-junit-laravel

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

> 框架要求

Laravel >= 5.1

> 安装

composer require "dresong/dre-junit"

> 配置
> Laravel 应用

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

'providers' => [
    Dresong\DreJunit\Http\Providers\DreJunitServiceProvider::class,
]

然后在浏览器中直接访问路由

Route::get('drejunit', 'DreJunitController@index');
Route::post('drejunit', 'DreJunitController@store')->name('drejunit.store');
