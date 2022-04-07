<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFreeResourceUsagesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFreeResourceUsagesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeResourceIds  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeResourceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeResourceIds  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeResourceIds' => null
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
    * freeResourceIds  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeResourceIds' => 'free_resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeResourceIds  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @var string[]
    */
    protected static $setters = [
            'freeResourceIds' => 'setFreeResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeResourceIds  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @var string[]
    */
    protected static $getters = [
            'freeResourceIds' => 'getFreeResourceIds'
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
        $this->container['freeResourceIds'] = isset($data['freeResourceIds']) ? $data['freeResourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['freeResourceIds'] === null) {
            $invalidProperties[] = "'freeResourceIds' can't be null";
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
    * Gets freeResourceIds
    *  资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @return string[]
    */
    public function getFreeResourceIds()
    {
        return $this->container['freeResourceIds'];
    }

    /**
    * Sets freeResourceIds
    *
    * @param string[] $freeResourceIds 资源项ID列表，每个最大64字节。 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。资源项ID来自查询资源包列表接口的响应。
    *
    * @return $this
    */
    public function setFreeResourceIds($freeResourceIds)
    {
        $this->container['freeResourceIds'] = $freeResourceIds;
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

