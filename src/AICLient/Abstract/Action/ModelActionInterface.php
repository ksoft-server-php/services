<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Abstract\Action;

use Web\Services\AIClient\Abstract\Message\MessageInterface;

interface ModelActionInterface extends ActionInterface
{
    public function list(): MessageInterface;

    public function retrieve(string $model): MessageInterface;

    public function delete(string $model): MessageInterface;
}
