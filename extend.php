<?php

namespace kk14569\flarumhubuiy;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),  
];
