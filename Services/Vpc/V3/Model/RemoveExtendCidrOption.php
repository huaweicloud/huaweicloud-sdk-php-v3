<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoveExtendCidrOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoveExtendCidrOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * extendCidrs  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'extendCidrs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * extendCidrs  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'extendCidrs' => null
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
    * extendCidrs  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'extendCidrs' => 'extend_cidrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * extendCidrs  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @var string[]
    */
    protected static $setters = [
            'extendCidrs' => 'setExtendCidrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * extendCidrs  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @var string[]
    */
    protected static $getters = [
            'extendCidrs' => 'getExtendCidrs'
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
        $this->container['extendCidrs'] = isset($data['extendCidrs']) ? $data['extendCidrs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['extendCidrs'] === null) {
            $invalidProperties[] = "'extendCidrs' can't be null";
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
    * Gets extendCidrs
    *  功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @return string[]
    */
    public function getExtendCidrs()
    {
        return $this->container['extendCidrs'];
    }

    /**
    * Sets extendCidrs
    *
    * @param string[] $extendCidrs 功能说明：移除VPC扩展网段 取值范围：该VPC已经存在的扩展网段 约束：移除扩展网段前，请先清理该VPC下对应cidr范围内的subnet；当前只支持一个一个移除
    *
    * @return $this
    */
    public function setExtendCidrs($extendCidrs)
    {
        $this->container['extendCidrs'] = $extendCidrs;
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

