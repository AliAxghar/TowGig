<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class AssistantInitiationActionsContext extends InstanceContext {
    /**
     * Initialize the AssistantInitiationActionsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The assistant_sid
     */
    public function __construct(Version $version, $assistantSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid, ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/InitiationActions';
    }

    /**
     * Fetch the AssistantInitiationActionsInstance
     *
     * @return AssistantInitiationActionsInstance Fetched
     *                                            AssistantInitiationActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AssistantInitiationActionsInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new AssistantInitiationActionsInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid']
        );
    }

    /**
     * Update the AssistantInitiationActionsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AssistantInitiationActionsInstance Updated
     *                                            AssistantInitiationActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): AssistantInitiationActionsInstance {
        $options = new Values($options);

        $data = Values::of(['InitiationActions' => Serialize::jsonObject($options['initiationActions']), ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new AssistantInitiationActionsInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Understand.AssistantInitiationActionsContext ' . \implode(' ', $context) . ']';
    }
}