<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIpdProjectFieldsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIpdProjectFieldsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * keyword  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'keyword' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * keyword  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'keyword' => null,
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * keyword  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'keyword' => 'keyword',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * keyword  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'keyword' => 'setKeyword',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * keyword  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'keyword' => 'getKeyword',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) > 15)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets projectId
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets keyword
    *  **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword **参数解释**： 关键字搜索，支持标题、字段类型、创建人搜索。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
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
    * @param int|null $offset **参数解释**： 分页起始，从0开始，为limit整数倍。 **约束限制**： 取值为limit的倍数。 **取值范围**： ≥ 0 **默认取值**： 0
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
    *  **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
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
    * @param int|null $limit **参数解释**： 分页大小。 **约束限制**： 不涉及 **取值范围**： ≥ 1 **默认取值**： 20
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

