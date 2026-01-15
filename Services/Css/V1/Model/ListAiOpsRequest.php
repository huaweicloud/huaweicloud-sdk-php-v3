<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiOpsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiOpsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    * limit  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    * offset  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    * report  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'report' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    * limit  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    * offset  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    * report  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'limit' => null,
        'offset' => null,
        'report' => null
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
    * clusterId  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    * limit  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    * offset  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    * report  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'report' => 'report'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    * limit  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    * offset  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    * report  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'report' => 'setReport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    * limit  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    * offset  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    * report  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'report' => 'getReport'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets clusterId
    *  **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 指定查询的集群ID。获取方法请参见[获取集群ID](css_03_0101.xml)。 **约束限制**： 不涉及 **取值范围**： 集群ID。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
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
    * @param int|null $limit **参数解释**： 分页参数，列表当前分页的数量限制。默认值为10，即一次查询10个任务信息。 **约束限制**： 不涉及 **取值范围**： 1-1000 **默认取值**： 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
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
    * @param int|null $offset **参数解释**： 偏移量，表示从偏移量后面的计数开始查询。 **约束限制**： 不涉及 **取值范围**： 0-1000 **默认取值**： 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets report
    *  **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
    * Sets report
    *
    * @param string|null $report **参数解释**： 获取当前最新一份报告或历史报告 **约束限制**： 不涉及 **取值范围**： - current   仅获取当前最新一次检测报告 - history   仅获取当前历史检测报告  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setReport($report)
    {
        $this->container['report'] = $report;
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

