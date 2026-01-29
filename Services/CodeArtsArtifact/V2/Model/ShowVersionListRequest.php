<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVersionListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVersionListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildVersion  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    * limit  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildVersion' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildVersion  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    * limit  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildVersion' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * buildVersion  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    * limit  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildVersion' => 'build_version',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildVersion  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    * limit  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @var string[]
    */
    protected static $setters = [
            'buildVersion' => 'setBuildVersion',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildVersion  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    * limit  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @var string[]
    */
    protected static $getters = [
            'buildVersion' => 'getBuildVersion',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['buildVersion'] = isset($data['buildVersion']) ? $data['buildVersion'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    * Gets buildVersion
    *  **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getBuildVersion()
    {
        return $this->container['buildVersion'];
    }

    /**
    * Sets buildVersion
    *
    * @param string|null $buildVersion **参数解释**： 表示发布库版本的名称。 **约束限制**： 不涉及。 **取值范围**： 英文字母、数字、特殊字符支持中划线、下划线和英文句号，长度为1-128个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBuildVersion($buildVersion)
    {
        $this->container['buildVersion'] = $buildVersion;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 分页查询的起始位置。 **约束限制**： 不涉及。 **取值范围**： 0-10000000 **默认取值**： 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 分页查询每页的数据量。 **约束限制**： 不涉及。 **取值范围**： 1-100 **默认取值**： 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

