<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVolumesInRecycleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVolumesInRecycleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    * availabilityZone  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * serviceType  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    * offset  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'limit' => 'int',
            'availabilityZone' => 'string',
            'serviceType' => 'string',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    * availabilityZone  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * serviceType  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    * offset  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'limit' => 'int32',
        'availabilityZone' => null,
        'serviceType' => null,
        'offset' => 'int32'
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
    * name  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    * availabilityZone  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * serviceType  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    * offset  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'limit' => 'limit',
            'availabilityZone' => 'availability_zone',
            'serviceType' => 'service_type',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    * availabilityZone  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * serviceType  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    * offset  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'availabilityZone' => 'setAvailabilityZone',
            'serviceType' => 'setServiceType',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    * availabilityZone  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * serviceType  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    * offset  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'availabilityZone' => 'getAvailabilityZone',
            'serviceType' => 'getServiceType',
            'offset' => 'getOffset'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
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
    * Gets name
    *  **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $name **参数解释** 云硬盘名称。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘名称。 **约束限制** 最大支持64个字符。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 云硬盘状态，取值可参考：\"[云硬盘状态](evs_04_0040.xml)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
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
    * @param int|null $limit **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 1-1000 **默认取值** 1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释** 可用区信息。 可通过接口[查询所有的可用分区信息](evs_04_2081.xml)获取，也可参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint)获取。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释** 服务类型。 **约束限制** 不涉及。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
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
    * @param int|null $offset **参数解释** 分页查询时的偏移量。 **约束限制** 不涉及。 **取值范围** 取值为一个大于0小于磁盘总个数的整数。 **默认取值** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

