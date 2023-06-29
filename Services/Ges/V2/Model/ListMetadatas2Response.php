<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetadatas2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetadatas2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaCount  元数据返回个数。请求失败时，字段为空。
    * schemaList  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaCount' => 'int',
            'schemaList' => '\HuaweiCloud\SDK\Ges\V2\Model\ListMetadatasRespSchemaList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaCount  元数据返回个数。请求失败时，字段为空。
    * schemaList  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaCount' => 'int32',
        'schemaList' => null
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
    * schemaCount  元数据返回个数。请求失败时，字段为空。
    * schemaList  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaCount' => 'schema_count',
            'schemaList' => 'schema_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaCount  元数据返回个数。请求失败时，字段为空。
    * schemaList  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaCount' => 'setSchemaCount',
            'schemaList' => 'setSchemaList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaCount  元数据返回个数。请求失败时，字段为空。
    * schemaList  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaCount' => 'getSchemaCount',
            'schemaList' => 'getSchemaList'
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
        $this->container['schemaCount'] = isset($data['schemaCount']) ? $data['schemaCount'] : null;
        $this->container['schemaList'] = isset($data['schemaList']) ? $data['schemaList'] : null;
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
    * Gets schemaCount
    *  元数据返回个数。请求失败时，字段为空。
    *
    * @return int|null
    */
    public function getSchemaCount()
    {
        return $this->container['schemaCount'];
    }

    /**
    * Sets schemaCount
    *
    * @param int|null $schemaCount 元数据返回个数。请求失败时，字段为空。
    *
    * @return $this
    */
    public function setSchemaCount($schemaCount)
    {
        $this->container['schemaCount'] = $schemaCount;
        return $this;
    }

    /**
    * Gets schemaList
    *  当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListMetadatasRespSchemaList[]|null
    */
    public function getSchemaList()
    {
        return $this->container['schemaList'];
    }

    /**
    * Sets schemaList
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListMetadatasRespSchemaList[]|null $schemaList 当前projectId下的所有元数据列表。请求失败时，字段为空。
    *
    * @return $this
    */
    public function setSchemaList($schemaList)
    {
        $this->container['schemaList'] = $schemaList;
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

