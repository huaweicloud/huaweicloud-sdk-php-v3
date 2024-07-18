<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductGroupDelFailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductGroupDelFailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  模板组ID
    * failReason  模板组删除失败的原因
    * products  删除失败的产物的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'failReason' => 'string',
            'products' => '\HuaweiCloud\SDK\Vod\V1\Model\ProductDelFailInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  模板组ID
    * failReason  模板组删除失败的原因
    * products  删除失败的产物的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'failReason' => null,
        'products' => null
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
    * groupId  模板组ID
    * failReason  模板组删除失败的原因
    * products  删除失败的产物的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'failReason' => 'fail_reason',
            'products' => 'products'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  模板组ID
    * failReason  模板组删除失败的原因
    * products  删除失败的产物的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'failReason' => 'setFailReason',
            'products' => 'setProducts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  模板组ID
    * failReason  模板组删除失败的原因
    * products  删除失败的产物的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'failReason' => 'getFailReason',
            'products' => 'getProducts'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 1.";
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
    * Gets groupId
    *  模板组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 模板组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets failReason
    *  模板组删除失败的原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 模板组删除失败的原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets products
    *  删除失败的产物的信息
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ProductDelFailInfo[]|null
    */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
    * Sets products
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ProductDelFailInfo[]|null $products 删除失败的产物的信息
    *
    * @return $this
    */
    public function setProducts($products)
    {
        $this->container['products'] = $products;
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

