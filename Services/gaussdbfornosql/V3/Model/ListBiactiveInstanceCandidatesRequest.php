<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBiactiveInstanceCandidatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBiactiveInstanceCandidatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetRegionCode  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetInstanceName  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dataSyncMode  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    * offset  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
    * limit  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'targetRegionCode' => 'string',
            'targetInstanceName' => 'string',
            'dataSyncMode' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetRegionCode  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetInstanceName  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dataSyncMode  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    * offset  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
    * limit  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'targetRegionCode' => null,
        'targetInstanceName' => null,
        'dataSyncMode' => null,
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
    * instanceId  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetRegionCode  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetInstanceName  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dataSyncMode  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    * offset  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
    * limit  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'targetRegionCode' => 'target_region_code',
            'targetInstanceName' => 'target_instance_name',
            'dataSyncMode' => 'data_sync_mode',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetRegionCode  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetInstanceName  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dataSyncMode  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    * offset  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
    * limit  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'targetRegionCode' => 'setTargetRegionCode',
            'targetInstanceName' => 'setTargetInstanceName',
            'dataSyncMode' => 'setDataSyncMode',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetRegionCode  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * targetInstanceName  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dataSyncMode  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    * offset  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
    * limit  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'targetRegionCode' => 'getTargetRegionCode',
            'targetInstanceName' => 'getTargetInstanceName',
            'dataSyncMode' => 'getDataSyncMode',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['targetRegionCode'] = isset($data['targetRegionCode']) ? $data['targetRegionCode'] : null;
        $this->container['targetInstanceName'] = isset($data['targetInstanceName']) ? $data['targetInstanceName'] : null;
        $this->container['dataSyncMode'] = isset($data['dataSyncMode']) ? $data['dataSyncMode'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['targetRegionCode'] === null) {
            $invalidProperties[] = "'targetRegionCode' can't be null";
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
    * Gets instanceId
    *  **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释：** 实例ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets targetRegionCode
    *  **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTargetRegionCode()
    {
        return $this->container['targetRegionCode'];
    }

    /**
    * Sets targetRegionCode
    *
    * @param string $targetRegionCode **参数解释：** 目标Region的编码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetRegionCode($targetRegionCode)
    {
        $this->container['targetRegionCode'] = $targetRegionCode;
        return $this;
    }

    /**
    * Gets targetInstanceName
    *  **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTargetInstanceName()
    {
        return $this->container['targetInstanceName'];
    }

    /**
    * Sets targetInstanceName
    *
    * @param string|null $targetInstanceName **参数解释：** 按目标实例名称过滤。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetInstanceName($targetInstanceName)
    {
        $this->container['targetInstanceName'] = $targetInstanceName;
        return $this;
    }

    /**
    * Gets dataSyncMode
    *  **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    *
    * @return string|null
    */
    public function getDataSyncMode()
    {
        return $this->container['dataSyncMode'];
    }

    /**
    * Sets dataSyncMode
    *
    * @param string|null $dataSyncMode **参数解释：** 数据同步模式。 **约束限制：** 不涉及。 **取值范围：** - TABLE：表级数据同步模式。 **默认取值：** 不传该参数时表示实例级数据同步模式。
    *
    * @return $this
    */
    public function setDataSyncMode($dataSyncMode)
    {
        $this->container['dataSyncMode'] = $dataSyncMode;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
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
    * @param int|null $offset **参数解释：** 索引位置偏移量，表示从最新一条记录开始偏移offset条数据后查询。 **约束限制：** 取值大于或等于0。 **取值范围：** 不涉及。 **默认取值：** 不传该参数时，查询偏移量默认为0。
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
    *  **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
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
    * @param int|null $limit **参数解释：** 查询实例个数上限值。 **约束限制：** 不涉及。 **取值范围：** 1~100。 **默认取值：** 不传该参数时，默认查询前100条实例信息。
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

