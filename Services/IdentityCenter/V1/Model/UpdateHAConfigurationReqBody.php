<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHAConfigurationReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHAConfigurationReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disasterRecoveryChoice  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disasterRecoveryChoice' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disasterRecoveryChoice  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disasterRecoveryChoice' => null
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
    * disasterRecoveryChoice  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disasterRecoveryChoice' => 'disaster_recovery_choice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disasterRecoveryChoice  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @var string[]
    */
    protected static $setters = [
            'disasterRecoveryChoice' => 'setDisasterRecoveryChoice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disasterRecoveryChoice  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @var string[]
    */
    protected static $getters = [
            'disasterRecoveryChoice' => 'getDisasterRecoveryChoice'
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
    const DISASTER_RECOVERY_CHOICE_ACCEPT = 'ACCEPT';
    const DISASTER_RECOVERY_CHOICE_REJECT = 'REJECT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterRecoveryChoiceAllowableValues()
    {
        return [
            self::DISASTER_RECOVERY_CHOICE_ACCEPT,
            self::DISASTER_RECOVERY_CHOICE_REJECT,
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
        $this->container['disasterRecoveryChoice'] = isset($data['disasterRecoveryChoice']) ? $data['disasterRecoveryChoice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disasterRecoveryChoice'] === null) {
            $invalidProperties[] = "'disasterRecoveryChoice' can't be null";
        }
            $allowedValues = $this->getDisasterRecoveryChoiceAllowableValues();
                if (!is_null($this->container['disasterRecoveryChoice']) && !in_array($this->container['disasterRecoveryChoice'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterRecoveryChoice', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets disasterRecoveryChoice
    *  高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @return string
    */
    public function getDisasterRecoveryChoice()
    {
        return $this->container['disasterRecoveryChoice'];
    }

    /**
    * Sets disasterRecoveryChoice
    *
    * @param string $disasterRecoveryChoice 高可用选项，接受高可用或者拒绝高可用功能。
    *
    * @return $this
    */
    public function setDisasterRecoveryChoice($disasterRecoveryChoice)
    {
        $this->container['disasterRecoveryChoice'] = $disasterRecoveryChoice;
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

