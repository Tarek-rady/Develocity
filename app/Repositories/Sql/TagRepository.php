<?php

        namespace App\Repositories\Sql;
        use App\Models\Tag;
        use App\Repositories\Contract\TagRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class TagRepository extends BaseRepository implements TagRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Tag();

            }

        }
        