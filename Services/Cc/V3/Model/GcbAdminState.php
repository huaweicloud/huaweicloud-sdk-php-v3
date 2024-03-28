<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GcbAdminState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GcbAdminState';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminState  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminState  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminState' => null
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
    * adminState  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminState' => 'admin_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminState  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @var string[]
    */
    protected static $setters = [
            'adminState' => 'setAdminState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminState  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @var string[]
    */
    protected static $getters = [
            'adminState' => 'getAdminState'
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
    const ADMIN_STATE_NORMAL = 'NORMAL';
    const ADMIN_STATE_FREEZED = 'FREEZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdminStateAllowableValues()
    {
        return [
            self::ADMIN_STATE_NORMAL,
            self::ADMIN_STATE_FREEZED,
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
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAdminStateAllowableValues();
                if (!is_null($this->container['adminState']) && !in_array($this->container['adminState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adminState', must be one of '%s'",
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
    * Gets adminState
    *  功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @return string|null
    */
    public function getAdminState()
    {
        return $this->container['adminState'];
    }

    /**
    * Sets adminState
    *
    * @param string|null $adminState 功能说明: 全域互联带宽状态。 取值范围：     NORMAL-正常     FREEZED-冻结状态
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
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

