<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientAddr  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    * subscriptions  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'version' => 'string',
            'clientId' => 'string',
            'clientAddr' => 'string',
            'consumeType' => 'string',
            'subscriptions' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\Subscription[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientAddr  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    * subscriptions  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'version' => null,
        'clientId' => null,
        'clientAddr' => null,
        'consumeType' => null,
        'subscriptions' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * language  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientAddr  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    * subscriptions  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'version' => 'version',
            'clientId' => 'client_id',
            'clientAddr' => 'client_addr',
            'consumeType' => 'consume_type',
            'subscriptions' => 'subscriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientAddr  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    * subscriptions  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'version' => 'setVersion',
            'clientId' => 'setClientId',
            'clientAddr' => 'setClientAddr',
            'consumeType' => 'setConsumeType',
            'subscriptions' => 'setSubscriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clientAddr  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    * subscriptions  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'version' => 'getVersion',
            'clientId' => 'getClientId',
            'clientAddr' => 'getClientAddr',
            'consumeType' => 'getConsumeType',
            'subscriptions' => 'getSubscriptions'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const CONSUME_TYPE_CONSUME_POP = 'CONSUME_POP';
    const CONSUME_TYPE_CONSUME_PASSIVELY = 'CONSUME_PASSIVELY';
    const CONSUME_TYPE_CONSUME_ACTIVELY = 'CONSUME_ACTIVELY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsumeTypeAllowableValues()
    {
        return [
            self::CONSUME_TYPE_CONSUME_POP,
            self::CONSUME_TYPE_CONSUME_PASSIVELY,
            self::CONSUME_TYPE_CONSUME_ACTIVELY,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['consumeType'] = isset($data['consumeType']) ? $data['consumeType'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConsumeTypeAllowableValues();
                if (!is_null($this->container['consumeType']) && !in_array($this->container['consumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['consumeType']) && (mb_strlen($this->container['consumeType']) > 64)) {
                $invalidProperties[] = "invalid value for 'consumeType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['consumeType']) && (mb_strlen($this->container['consumeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'consumeType', the character length must be bigger than or equal to 1.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets language
    *  **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释**： 客户端语言。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 客户端版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets clientId
    *  **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId **参数解释**： 客户端ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientAddr
    *  **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getClientAddr()
    {
        return $this->container['clientAddr'];
    }

    /**
    * Sets clientAddr
    *
    * @param string|null $clientAddr **参数解释**： 客户端地址。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClientAddr($clientAddr)
    {
        $this->container['clientAddr'] = $clientAddr;
        return $this;
    }

    /**
    * Gets consumeType
    *  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getConsumeType()
    {
        return $this->container['consumeType'];
    }

    /**
    * Sets consumeType
    *
    * @param string|null $consumeType **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： - CONSUME_POP：POP消费模式 - CONSUME_PASSIVELY：推消费模式 - CONSUME_ACTIVELY：拉消费模式 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConsumeType($consumeType)
    {
        $this->container['consumeType'] = $consumeType;
        return $this;
    }

    /**
    * Gets subscriptions
    *  **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\Subscription[]|null
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\Subscription[]|null $subscriptions **参数解释**： 订阅关系列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

