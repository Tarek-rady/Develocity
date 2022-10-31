<?php

        namespace App\Repositories\Sql;
        use App\Models\StaticPage;
        use App\Repositories\Contract\StaticPageRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class StaticPageRepository extends BaseRepository implements StaticPageRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new StaticPage();

            }

            public function updateSetting($attr)
            {

                foreach ($attr as $key => $desc) {
                    $this->model->where('key' , $key)->update(['desc' => $desc]);
                }

                return response()->json();

            }

        }
