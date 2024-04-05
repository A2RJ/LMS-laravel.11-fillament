<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Entry;

class TinyDisplay extends Entry
{
    protected string $view = 'infolists.components.tiny-display';

    public $type = 'type';

    public function type(string $type)
    {
        $this->type = $type;
        return $this;
    }

    // {{ $getType() }}
    public function getType()
    {
        return $this->type;
    }
}
