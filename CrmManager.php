<?php

declare(strict_types=1);

namespace App;

final class CrmManager
{
    public function __construct(
        private readonly Sender $client,
    ) {
    }

    /**
     * Sends the person to a crm
     *
     * @param  PersonPayload  $personPayload
     *
     * @return int
     */
    public function sendPerson(PersonPayload $personPayload): int
    {
        return $this->client->send(Action::PERSON, $personPayload);
    }
}
