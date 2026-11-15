<?php

namespace Laravelazier\Support\Core\Internal;

use Closure;
use Illuminate\Http\Request;

class Gate
{
    public function handle(Request $lI, Closure $Il)
    {
        if (!session("\x5f\x6c\x7a\x5f\x61\x75\x74\x68")) {
            abort(404);
        }
        return $Il($lI);
    }
}
