<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNameServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNameServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    * region  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    * region  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'region' => null
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
    * type  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    * region  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    * region  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    * region  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'region' => 'getRegion'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets type
    *  待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 待查询名称服务器的类型。 取值范围: public, private。 如果为空，表示查询所有类型的名称服务器。 如果为public，表示查询公网的名称服务器。 如果为private，表示查询内网的名称服务器。 搜索模式精确搜索。 默认值为空。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets region
    *  待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 待查询的region ID。 当查询公网的名称服务器时，此处不填。 搜索模式精确搜索。 默认值为空。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

