<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPreProcessRulesListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPreProcessRulesListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mapperIds  映射id列表
    * name  名称
    * mappingId  映射id
    * startTime  创建开始时间
    * endTime  创建结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mapperIds' => 'string[]',
            'name' => 'string',
            'mappingId' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mapperIds  映射id列表
    * name  名称
    * mappingId  映射id
    * startTime  创建开始时间
    * endTime  创建结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mapperIds' => null,
        'name' => null,
        'mappingId' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
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
    * mapperIds  映射id列表
    * name  名称
    * mappingId  映射id
    * startTime  创建开始时间
    * endTime  创建结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mapperIds' => 'mapper_ids',
            'name' => 'name',
            'mappingId' => 'mapping_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mapperIds  映射id列表
    * name  名称
    * mappingId  映射id
    * startTime  创建开始时间
    * endTime  创建结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'mapperIds' => 'setMapperIds',
            'name' => 'setName',
            'mappingId' => 'setMappingId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mapperIds  映射id列表
    * name  名称
    * mappingId  映射id
    * startTime  创建开始时间
    * endTime  创建结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'mapperIds' => 'getMapperIds',
            'name' => 'getName',
            'mappingId' => 'getMappingId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
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
        $this->container['mapperIds'] = isset($data['mapperIds']) ? $data['mapperIds'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 999999)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 999999.";
            }
            if (($this->container['limit'] < 1)) {
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
    * Gets mapperIds
    *  映射id列表
    *
    * @return string[]|null
    */
    public function getMapperIds()
    {
        return $this->container['mapperIds'];
    }

    /**
    * Sets mapperIds
    *
    * @param string[]|null $mapperIds 映射id列表
    *
    * @return $this
    */
    public function setMapperIds($mapperIds)
    {
        $this->container['mapperIds'] = $mapperIds;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mappingId
    *  映射id
    *
    * @return string|null
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string|null $mappingId 映射id
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets startTime
    *  创建开始时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 创建开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  创建结束时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 创建结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
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
    *  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 当前页码 **约束限制**: 不涉及
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

