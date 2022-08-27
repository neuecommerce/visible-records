<?php

declare(strict_types = 1);

namespace NeueCommerce\VisibleRecords;

use Illuminate\Database\Eloquent\Builder;
use NeueCommerce\ModelCasts\BooleanCast;

trait HasVisibility
{
    public function initializeHasVisibility()
    {
        $this->casts['is_visible'] = BooleanCast::class;
    }

    public function getVisibility(): bool
    {
        return $this->is_visible;
    }

    public function isVisible(): bool
    {
        return $this->getVisibility() === true;
    }

    public function scopeWhereIsVisible(Builder $query): Builder
    {
        return $query->where('is_visible', true);
    }

    public function scopeWhereIsNotVisible(Builder $query): Builder
    {
        return $query->where('is_visible', false);
    }
}
