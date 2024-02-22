<?php

namespace App\Providers;

use App\GraphQL\Mutations\CreateReviewMutation;
use App\GraphQL\Mutations\UpdateReviewMutation;
use App\GraphQL\Mutations\DeleteReviewMutation;
use App\GraphQL\Queries\ReviewQuery;
use App\GraphQL\Types\ReviewType;
use App\GraphQL\Types\UserType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;


use Illuminate\Support\ServiceProvider;

class GraphQLServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //


        // Queries
        $this->app->singleton(ReviewQuery::class);
        $this->app->singleton(ReviewType::class);
        $this->app->singleton(UserType::class);

        // Mutations
        $this->app->singleton(CreateReviewMutation::class);
        $this->app->singleton(UpdateReviewMutation::class);
        $this->app->singleton(DeleteReviewMutation::class);

        // Define types
        GraphQL::addType(ReviewType::class, 'Review');
        GraphQL::addType(UserType::class, 'User');

        // Define queries
        GraphQL::addQuery('reviews', [ReviewQuery::class, 'reviews']);
        GraphQL::addQuery('review', [ReviewQuery::class, 'review']);

        // Define mutations
        GraphQL::addMutation('createReview', CreateReviewMutation::class);
        GraphQL::addMutation('updateReview', UpdateReviewMutation::class);
        GraphQL::addMutation('deleteReview', DeleteReviewMutation::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
