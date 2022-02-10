<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    * orderId  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    * onlyMainResource  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    * statusList  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * offset  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
    * limit  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    * expireTimeBegin  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    * expireTimeEnd  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'orderId' => 'string',
            'onlyMainResource' => 'int',
            'statusList' => 'int[]',
            'offset' => 'int',
            'limit' => 'int',
            'expireTimeBegin' => 'string',
            'expireTimeEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    * orderId  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    * onlyMainResource  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    * statusList  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * offset  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
    * limit  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    * expireTimeBegin  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    * expireTimeEnd  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'orderId' => null,
        'onlyMainResource' => 'int32',
        'statusList' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'expireTimeBegin' => null,
        'expireTimeEnd' => null
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
    * resourceIds  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    * orderId  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    * onlyMainResource  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    * statusList  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * offset  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
    * limit  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    * expireTimeBegin  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    * expireTimeEnd  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'orderId' => 'order_id',
            'onlyMainResource' => 'only_main_resource',
            'statusList' => 'status_list',
            'offset' => 'offset',
            'limit' => 'limit',
            'expireTimeBegin' => 'expire_time_begin',
            'expireTimeEnd' => 'expire_time_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    * orderId  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    * onlyMainResource  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    * statusList  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * offset  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
    * limit  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    * expireTimeBegin  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    * expireTimeEnd  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'orderId' => 'setOrderId',
            'onlyMainResource' => 'setOnlyMainResource',
            'statusList' => 'setStatusList',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'expireTimeBegin' => 'setExpireTimeBegin',
            'expireTimeEnd' => 'setExpireTimeEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    * orderId  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    * onlyMainResource  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    * statusList  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * offset  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
    * limit  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    * expireTimeBegin  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    * expireTimeEnd  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'orderId' => 'getOrderId',
            'onlyMainResource' => 'getOnlyMainResource',
            'statusList' => 'getStatusList',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'expireTimeBegin' => 'getExpireTimeBegin',
            'expireTimeEnd' => 'getExpireTimeEnd'
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
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['onlyMainResource'] = isset($data['onlyMainResource']) ? $data['onlyMainResource'] : 0;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['expireTimeBegin'] = isset($data['expireTimeBegin']) ? $data['expireTimeBegin'] : null;
        $this->container['expireTimeEnd'] = isset($data['expireTimeEnd']) ? $data['expireTimeEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['onlyMainResource']) && ($this->container['onlyMainResource'] > 1)) {
                $invalidProperties[] = "invalid value for 'onlyMainResource', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['onlyMainResource']) && ($this->container['onlyMainResource'] < 0)) {
                $invalidProperties[] = "invalid value for 'onlyMainResource', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483646)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483646.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be bigger than or equal to 0.";
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
    * Gets resourceIds
    *  |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds |参数名称：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。| |参数约束以及描述：资源ID列表。查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。|
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets orderId
    *  |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId |参数名称：订单号。查询指定订单下的资源。| |参数约束及描述：订单号。查询指定订单下的资源。|
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets onlyMainResource
    *  |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    *
    * @return int|null
    */
    public function getOnlyMainResource()
    {
        return $this->container['onlyMainResource'];
    }

    /**
    * Sets onlyMainResource
    *
    * @param int|null $onlyMainResource |参数名称：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。| |参数的约束及描述：是否只查询主资源。0：查询主资源及附属资源。1：只查询主资源。默认值为0。|
    *
    * @return $this
    */
    public function setOnlyMainResource($onlyMainResource)
    {
        $this->container['onlyMainResource'] = $onlyMainResource;
        return $this;
    }

    /**
    * Gets statusList
    *  |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    *
    * @return int[]|null
    */
    public function getStatusList()
    {
        return $this->container['statusList'];
    }

    /**
    * Sets statusList
    *
    * @param int[]|null $statusList |参数名称：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数约束以及描述：资源状态。查询指定状态的资源。1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
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
    * @param int|null $offset |参数名称：偏移量，从0开始默认值是0。| |参数的约束及描述：偏移量，从0开始默认值是0。|
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
    *  |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
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
    * @param int|null $limit |参数名称：每次查询的条数。默认值是10。最大值是500。| |参数的约束及描述：每次查询的条数。默认值是10。最大值是500。|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets expireTimeBegin
    *  |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    *
    * @return string|null
    */
    public function getExpireTimeBegin()
    {
        return $this->container['expireTimeBegin'];
    }

    /**
    * Sets expireTimeBegin
    *
    * @param string|null $expireTimeBegin |参数名称：失效开始时间，UTC时间。| |参数约束及描述：失效开始时间，UTC时间。|
    *
    * @return $this
    */
    public function setExpireTimeBegin($expireTimeBegin)
    {
        $this->container['expireTimeBegin'] = $expireTimeBegin;
        return $this;
    }

    /**
    * Gets expireTimeEnd
    *  |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @return string|null
    */
    public function getExpireTimeEnd()
    {
        return $this->container['expireTimeEnd'];
    }

    /**
    * Sets expireTimeEnd
    *
    * @param string|null $expireTimeEnd |参数名称：失效结束时间，UTC时间。| |参数约束及描述：失效结束时间，UTC时间。|
    *
    * @return $this
    */
    public function setExpireTimeEnd($expireTimeEnd)
    {
        $this->container['expireTimeEnd'] = $expireTimeEnd;
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

