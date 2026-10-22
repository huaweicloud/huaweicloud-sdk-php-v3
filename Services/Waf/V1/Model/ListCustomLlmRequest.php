<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomLlmRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomLlmRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * name  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modelName  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'name' => 'string',
            'modelName' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * name  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modelName  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'name' => null,
        'modelName' => null,
        'offset' => null,
        'limit' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * name  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modelName  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'name' => 'name',
            'modelName' => 'model_name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * name  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modelName  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'name' => 'setName',
            'modelName' => 'setModelName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * name  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modelName  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'name' => 'getName',
            'modelName' => 'getModelName',
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['modelName'] = isset($data['modelName']) ? $data['modelName'] : null;
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
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 自定义大模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets modelName
    *  **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */

    /**
    * Sets modelName
    *
    * @param string|null $modelName **参数解释：** 模型名称筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setModelName($modelName)
    {
        $this->container['modelName'] = $modelName;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
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
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
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
    *  **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
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
    * @param int|null $limit **参数解释：** 每页数量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
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

