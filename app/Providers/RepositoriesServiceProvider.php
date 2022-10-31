<?php

namespace App\Providers;

        use App\Repositories\Sql\ContactUsRepository;
        use App\Repositories\Contract\ContactUsRepositoryInterface;

        use App\Repositories\Sql\OrderRepository;
        use App\Repositories\Contract\OrderRepositoryInterface;

        use App\Repositories\Sql\StaticPageRepository;
        use App\Repositories\Contract\StaticPageRepositoryInterface;

        use App\Repositories\Sql\ProductRepository;
        use App\Repositories\Contract\ProductRepositoryInterface;

        use App\Repositories\Sql\FavouriteRepository;
        use App\Repositories\Contract\FavouriteRepositoryInterface;

        use App\Repositories\Sql\CityRepository;
        use App\Repositories\Contract\CityRepositoryInterface;

        use App\Repositories\Sql\CountryRepository;
        use App\Repositories\Contract\CountryRepositoryInterface;

        use App\Repositories\Sql\TagRepository;
        use App\Repositories\Contract\TagRepositoryInterface;

        use App\Repositories\Sql\CategoryRepository;
        use App\Repositories\Contract\CategoryRepositoryInterface;

        use App\Repositories\Sql\WorkTimeRepository;
        use App\Repositories\Contract\WorkTimeRepositoryInterface;

        use App\Repositories\Sql\OfferPriceRepository;
        use App\Repositories\Contract\OfferPriceRepositoryInterface;

    use App\Repositories\Sql\CustomerRepository;
    use App\Repositories\Contract\CustomerRepositoryInterface;

    use App\Repositories\Sql\GalleryRepository;
    use App\Repositories\Contract\GalleryRepositoryInterface;

    use App\Repositories\Sql\ProjectRepository;
    use App\Repositories\Contract\ProjectRepositoryInterface;

use App\Repositories\Sql\ServiceRepository;
use App\Repositories\Contract\ServiceRepositoryInterface;

use App\Repositories\Sql\SettingRepository;
use App\Repositories\Contract\SettingRepositoryInterface;

use App\Repositories\Sql\UserRepository;
use App\Repositories\Contract\UserRepositoryInterface;

use App\Repositories\Sql\ContactRepository;
use App\Repositories\Contract\ContactRepositoryInterface;
// interface


use App\Repositories\Contract\BaseRepositoryInterface;
// repository

use App\Repositories\Sql\BaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{

    public function register(){

        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);

        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);

        $this->app->bind(StaticPageRepositoryInterface::class, StaticPageRepository::class);

        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

        $this->app->bind(FavouriteRepositoryInterface::class, FavouriteRepository::class);

        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);

        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);

        $this->app->bind(TagRepositoryInterface::class, TagRepository::class);

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        $this->app->bind(WorkTimeRepositoryInterface::class, WorkTimeRepository::class);

        $this->app->bind(OfferPriceRepositoryInterface::class, OfferPriceRepository::class);

        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);

        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);

        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);

        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);

        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);

        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }

    public function boot()
    {
        //
    }
}
