<?php

declare(strict_types = 1);

namespace NeueCommerce\VisibleRecords;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property Carbon|null $visible_at
 */
interface HasVisibilityInterface
{
    public function isVisible(): bool;

    public function markAsVisible(): self;

    public function markAsInvisible(): self;

    public function scopeWhereIsVisible(Builder $query): Builder;

    public function scopeWhereIsNotVisible(Builder $query): Builder;
}
