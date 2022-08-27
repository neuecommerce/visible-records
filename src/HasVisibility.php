<?php

declare(strict_types = 1);

namespace NeueCommerce\VisibleRecords;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait HasVisibility
{
    public function initializeHasVisibility()
    {
        $this->casts['visible_at'] = 'datetime';
    }

    public function isVisible(): bool
    {
        return $this->visible_at !== null;
    }

    public function markAsVisible(): self
    {
        $this->visible_at = Carbon::now();
        $this->save();

        return $this->fresh();
    }

    public function markAsInvisible(): self
    {
        $this->visible_at = null;
        $this->save();

        return $this->fresh();
    }

    public function scopeWhereIsVisible(Builder $query): Builder
    {
        return $query->whereNotNull('visible_at');
    }

    public function scopeWhereIsNotVisible(Builder $query): Builder
    {
        return $query->whereNull('visible_at');
    }
}
