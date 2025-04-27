<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteResolverRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteResolverRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resolverruleId  转发规则ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resolverruleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resolverruleId  转发规则ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resolverruleId' => null
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
    * resolverruleId  转发规则ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resolverruleId' => 'resolverrule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resolverruleId  转发规则ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'resolverruleId' => 'setResolverruleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resolverruleId  转发规则ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'resolverruleId' => 'getResolverruleId'
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
        $this->container['resolverruleId'] = isset($data['resolverruleId']) ? $data['resolverruleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resolverruleId'] === null) {
            $invalidProperties[] = "'resolverruleId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['resolverruleId'])) {
                $invalidProperties[] = "invalid value for 'resolverruleId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets resolverruleId
    *  转发规则ID。
    *
    * @return string
    */
    public function getResolverruleId()
    {
        return $this->container['resolverruleId'];
    }

    /**
    * Sets resolverruleId
    *
    * @param string $resolverruleId 转发规则ID。
    *
    * @return $this
    */
    public function setResolverruleId($resolverruleId)
    {
        $this->container['resolverruleId'] = $resolverruleId;
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

