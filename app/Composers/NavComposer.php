<?php

namespace CachetHQ\Composers;

use Awjudd\FeedReader\Facades\FeedReader;
use Carbon\Carbon;
use Illuminate\View\View;

class NavComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     */
    public function compose(View $view)
    {
        $blogFeed = FeedReader::read('https://blog.cachethq.io/feed');
        $feedItems = $blogFeed->get_item_quantity(10);
        $recentArticles = 0;
        $newSpan = Carbon::now()->subWeek();

        for ($i = 0; $i < $feedItems; $i++) {
            $feedItem = $blogFeed->get_item($i);
            $itemDate = Carbon::createFromFormat('Y-m-d', $feedItem->get_date('Y-m-d'));
            if ($itemDate->gte($newSpan)) {
                $recentArticles++;
            }
        }

        $view->with(compact('recentArticles'));
    }
}
