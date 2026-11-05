<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleExtendReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleExtendReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * grow  集群扩容请求详细描述。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'grow' => '\HuaweiCloud\SDK\Css\V1\Model\RoleExtendGrowReq[]',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * grow  集群扩容请求详细描述。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'grow' => null,
        'isAutoPay' => 'int32'
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
    * grow  集群扩容请求详细描述。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'grow' => 'grow',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * grow  集群扩容请求详细描述。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $setters = [
            'grow' => 'setGrow',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * grow  集群扩容请求详细描述。
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $getters = [
            'grow' => 'getGrow',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['grow'] = isset($data['grow']) ? $data['grow'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['grow'] === null) {
            $invalidProperties[] = "'grow' can't be null";
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
    * Gets grow
    *  集群扩容请求详细描述。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\RoleExtendGrowReq[]
    */
    public function getGrow()
    {
        return $this->container['grow'];
    }

    /**
    * Sets grow
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\RoleExtendGrowReq[] $grow 集群扩容请求详细描述。
    *
    * @return $this
    */
    public function setGrow($grow)
    {
        $this->container['grow'] = $grow;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  isAutoPay
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay isAutoPay
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

