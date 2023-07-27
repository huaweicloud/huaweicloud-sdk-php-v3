<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Addresses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Addresses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => '\HuaweiCloud\SDK\Bms\V1\Model\Address[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null
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
    * vpcId  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets vpcId
    *  裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Address[]
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Address[] $vpcId 裸金属服务器所属网络信息。key表示裸金属服务器使用的虚拟私有云的ID。value为网络详细信息
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

