<?php

/*
 * This file is part of blomstra/flarum-gdpr
 *
 * Copyright (c) 2021 Blomstra Ltd
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blomstra\Gdpr\Data;

use Blomstra\Gdpr\Contracts\DataType;
use Flarum\User\User;
use Illuminate\Database\Schema\Builder;

abstract class Type implements DataType
{
    /** @var User $user */
    protected $user;

    /** @var Builder $schema */
    protected $schema;

    public function __construct(User $user, Builder $schema)
    {
        $this->user = $user;
        $this->schema = $schema;
    }
}
