<?php

declare(strict_types = 1);

namespace NeueCommerce\VisibleRecords;

use Illuminate\Database\Eloquent\Builder;

interface HasVisibilityInterface
{
    public function getVisibility(): bool;

    public function isVisible(): bool;

    public function scopeWhereIsVisible(Builder $query): Builder;

    public function scopeWhereIsNotVisible(Builder $query): Builder;
}
