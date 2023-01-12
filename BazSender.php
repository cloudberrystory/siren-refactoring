<?php

declare(strict_types=1);

namespace App;

/**
 * Class BazSender
 *
 * @package App
 */
final class BazSender extends AbstractSender
{
    /**
     * Sends data to the Baz crm
     *
     * @param  Action  $action
     * @param  AbstractPayload  $payload
     *
     * @return int
     */
    public function send(Action $action, AbstractPayload $payload): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.
        //Okay, but don't ask to deploy imagination in production =)

        return 200;
    }
}
