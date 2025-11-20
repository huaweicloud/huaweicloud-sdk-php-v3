<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateDnInfoOpenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateDnInfoOpenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dnInstanceId  rds实例id。
    * dnInstanceName  rds实例名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dnInstanceId' => 'string',
            'dnInstanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dnInstanceId  rds实例id。
    * dnInstanceName  rds实例名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dnInstanceId' => null,
        'dnInstanceName' => null
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
    * dnInstanceId  rds实例id。
    * dnInstanceName  rds实例名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dnInstanceId' => 'dn_instance_id',
            'dnInstanceName' => 'dn_instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dnInstanceId  rds实例id。
    * dnInstanceName  rds实例名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'dnInstanceId' => 'setDnInstanceId',
            'dnInstanceName' => 'setDnInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dnInstanceId  rds实例id。
    * dnInstanceName  rds实例名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'dnInstanceId' => 'getDnInstanceId',
            'dnInstanceName' => 'getDnInstanceName'
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
        $this->container['dnInstanceId'] = isset($data['dnInstanceId']) ? $data['dnInstanceId'] : null;
        $this->container['dnInstanceName'] = isset($data['dnInstanceName']) ? $data['dnInstanceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dnInstanceId']) && (mb_strlen($this->container['dnInstanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'dnInstanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['dnInstanceId']) && (mb_strlen($this->container['dnInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dnInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dnInstanceName']) && (mb_strlen($this->container['dnInstanceName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'dnInstanceName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['dnInstanceName']) && (mb_strlen($this->container['dnInstanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dnInstanceName', the character length must be bigger than or equal to 1.";
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
    * Gets dnInstanceId
    *  rds实例id。
    *
    * @return string|null
    */
    public function getDnInstanceId()
    {
        return $this->container['dnInstanceId'];
    }

    /**
    * Sets dnInstanceId
    *
    * @param string|null $dnInstanceId rds实例id。
    *
    * @return $this
    */
    public function setDnInstanceId($dnInstanceId)
    {
        $this->container['dnInstanceId'] = $dnInstanceId;
        return $this;
    }

    /**
    * Gets dnInstanceName
    *  rds实例名称。
    *
    * @return string|null
    */
    public function getDnInstanceName()
    {
        return $this->container['dnInstanceName'];
    }

    /**
    * Sets dnInstanceName
    *
    * @param string|null $dnInstanceName rds实例名称。
    *
    * @return $this
    */
    public function setDnInstanceName($dnInstanceName)
    {
        $this->container['dnInstanceName'] = $dnInstanceName;
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

