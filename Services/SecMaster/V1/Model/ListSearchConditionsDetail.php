<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSearchConditionsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSearchConditionsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionId' => 'string',
            'conditionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionId' => null,
        'conditionName' => null
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
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionId' => 'condition_id',
            'conditionName' => 'condition_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionId' => 'setConditionId',
            'conditionName' => 'setConditionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionId' => 'getConditionId',
            'conditionName' => 'getConditionName'
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
        $this->container['conditionId'] = isset($data['conditionId']) ? $data['conditionId'] : null;
        $this->container['conditionName'] = isset($data['conditionName']) ? $data['conditionName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conditionId'] === null) {
            $invalidProperties[] = "'conditionId' can't be null";
        }
            if ((mb_strlen($this->container['conditionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'conditionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['conditionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'conditionId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['conditionName'] === null) {
            $invalidProperties[] = "'conditionName' can't be null";
        }
            if ((mb_strlen($this->container['conditionName']) > 255)) {
                $invalidProperties[] = "invalid value for 'conditionName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['conditionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'conditionName', the character length must be bigger than or equal to 1.";
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
    * Gets conditionId
    *  检索条件ID
    *
    * @return string
    */
    public function getConditionId()
    {
        return $this->container['conditionId'];
    }

    /**
    * Sets conditionId
    *
    * @param string $conditionId 检索条件ID
    *
    * @return $this
    */
    public function setConditionId($conditionId)
    {
        $this->container['conditionId'] = $conditionId;
        return $this;
    }

    /**
    * Gets conditionName
    *  检索条件名称
    *
    * @return string
    */
    public function getConditionName()
    {
        return $this->container['conditionName'];
    }

    /**
    * Sets conditionName
    *
    * @param string $conditionName 检索条件名称
    *
    * @return $this
    */
    public function setConditionName($conditionName)
    {
        $this->container['conditionName'] = $conditionName;
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

