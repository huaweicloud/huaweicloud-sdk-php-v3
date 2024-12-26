<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsRuleUpdateTimeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsRuleUpdateTimeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipsType  ipsType
    * ipsVersion  ipsVersion
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipsType' => 'int',
            'ipsVersion' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipsType  ipsType
    * ipsVersion  ipsVersion
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipsType' => 'int32',
        'ipsVersion' => null,
        'updateTime' => 'int64'
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
    * ipsType  ipsType
    * ipsVersion  ipsVersion
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipsType' => 'ips_type',
            'ipsVersion' => 'ips_version',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipsType  ipsType
    * ipsVersion  ipsVersion
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $setters = [
            'ipsType' => 'setIpsType',
            'ipsVersion' => 'setIpsVersion',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipsType  ipsType
    * ipsVersion  ipsVersion
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $getters = [
            'ipsType' => 'getIpsType',
            'ipsVersion' => 'getIpsVersion',
            'updateTime' => 'getUpdateTime'
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
        $this->container['ipsType'] = isset($data['ipsType']) ? $data['ipsType'] : null;
        $this->container['ipsVersion'] = isset($data['ipsVersion']) ? $data['ipsVersion'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets ipsType
    *  ipsType
    *
    * @return int|null
    */
    public function getIpsType()
    {
        return $this->container['ipsType'];
    }

    /**
    * Sets ipsType
    *
    * @param int|null $ipsType ipsType
    *
    * @return $this
    */
    public function setIpsType($ipsType)
    {
        $this->container['ipsType'] = $ipsType;
        return $this;
    }

    /**
    * Gets ipsVersion
    *  ipsVersion
    *
    * @return string|null
    */
    public function getIpsVersion()
    {
        return $this->container['ipsVersion'];
    }

    /**
    * Sets ipsVersion
    *
    * @param string|null $ipsVersion ipsVersion
    *
    * @return $this
    */
    public function setIpsVersion($ipsVersion)
    {
        $this->container['ipsVersion'] = $ipsVersion;
        return $this;
    }

    /**
    * Gets updateTime
    *  updateTime
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime updateTime
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

