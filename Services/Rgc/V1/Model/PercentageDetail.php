<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PercentageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PercentageDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * percentageName  进度名称。
    * percentageStatus  进度状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'percentageName' => 'string',
            'percentageStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * percentageName  进度名称。
    * percentageStatus  进度状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'percentageName' => null,
        'percentageStatus' => null
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
    * percentageName  进度名称。
    * percentageStatus  进度状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'percentageName' => 'percentage_name',
            'percentageStatus' => 'percentage_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * percentageName  进度名称。
    * percentageStatus  进度状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'percentageName' => 'setPercentageName',
            'percentageStatus' => 'setPercentageStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * percentageName  进度名称。
    * percentageStatus  进度状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'percentageName' => 'getPercentageName',
            'percentageStatus' => 'getPercentageStatus'
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
        $this->container['percentageName'] = isset($data['percentageName']) ? $data['percentageName'] : null;
        $this->container['percentageStatus'] = isset($data['percentageStatus']) ? $data['percentageStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['percentageName']) && (mb_strlen($this->container['percentageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'percentageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['percentageName']) && (mb_strlen($this->container['percentageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'percentageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['percentageStatus']) && (mb_strlen($this->container['percentageStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'percentageStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['percentageStatus']) && (mb_strlen($this->container['percentageStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'percentageStatus', the character length must be bigger than or equal to 1.";
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
    * Gets percentageName
    *  进度名称。
    *
    * @return string|null
    */
    public function getPercentageName()
    {
        return $this->container['percentageName'];
    }

    /**
    * Sets percentageName
    *
    * @param string|null $percentageName 进度名称。
    *
    * @return $this
    */
    public function setPercentageName($percentageName)
    {
        $this->container['percentageName'] = $percentageName;
        return $this;
    }

    /**
    * Gets percentageStatus
    *  进度状态。
    *
    * @return string|null
    */
    public function getPercentageStatus()
    {
        return $this->container['percentageStatus'];
    }

    /**
    * Sets percentageStatus
    *
    * @param string|null $percentageStatus 进度状态。
    *
    * @return $this
    */
    public function setPercentageStatus($percentageStatus)
    {
        $this->container['percentageStatus'] = $percentageStatus;
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

