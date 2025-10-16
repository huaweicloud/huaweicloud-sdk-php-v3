<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatusInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatusInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID，默认空字符串，默认查询所有集群。
    * appId  应用ID，默认空字符串，默认查询所有应用。
    * instanceId  集群ID，默认空字符串，默认查询所有集群。
    * from  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    * to  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    * period  数据统计周期，默认0，默认为5分钟。
    * filter  统计类型，默认min，默认用统计周期中数据的最小值。
    * serverType  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'appId' => 'string',
            'instanceId' => 'string',
            'from' => 'int',
            'to' => 'int',
            'period' => 'int',
            'filter' => 'string',
            'serverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID，默认空字符串，默认查询所有集群。
    * appId  应用ID，默认空字符串，默认查询所有应用。
    * instanceId  集群ID，默认空字符串，默认查询所有集群。
    * from  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    * to  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    * period  数据统计周期，默认0，默认为5分钟。
    * filter  统计类型，默认min，默认用统计周期中数据的最小值。
    * serverType  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'appId' => null,
        'instanceId' => null,
        'from' => 'int64',
        'to' => 'int64',
        'period' => 'int32',
        'filter' => null,
        'serverType' => null
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
    * clusterId  集群ID，默认空字符串，默认查询所有集群。
    * appId  应用ID，默认空字符串，默认查询所有应用。
    * instanceId  集群ID，默认空字符串，默认查询所有集群。
    * from  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    * to  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    * period  数据统计周期，默认0，默认为5分钟。
    * filter  统计类型，默认min，默认用统计周期中数据的最小值。
    * serverType  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'appId' => 'app_id',
            'instanceId' => 'instance_id',
            'from' => 'from',
            'to' => 'to',
            'period' => 'period',
            'filter' => 'filter',
            'serverType' => 'server_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID，默认空字符串，默认查询所有集群。
    * appId  应用ID，默认空字符串，默认查询所有应用。
    * instanceId  集群ID，默认空字符串，默认查询所有集群。
    * from  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    * to  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    * period  数据统计周期，默认0，默认为5分钟。
    * filter  统计类型，默认min，默认用统计周期中数据的最小值。
    * serverType  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'appId' => 'setAppId',
            'instanceId' => 'setInstanceId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'period' => 'setPeriod',
            'filter' => 'setFilter',
            'serverType' => 'setServerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID，默认空字符串，默认查询所有集群。
    * appId  应用ID，默认空字符串，默认查询所有应用。
    * instanceId  集群ID，默认空字符串，默认查询所有集群。
    * from  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    * to  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    * period  数据统计周期，默认0，默认为5分钟。
    * filter  统计类型，默认min，默认用统计周期中数据的最小值。
    * serverType  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'appId' => 'getAppId',
            'instanceId' => 'getInstanceId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'period' => 'getPeriod',
            'filter' => 'getFilter',
            'serverType' => 'getServerType'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
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
    * Gets clusterId
    *  集群ID，默认空字符串，默认查询所有集群。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID，默认空字符串，默认查询所有集群。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID，默认空字符串，默认查询所有应用。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID，默认空字符串，默认查询所有应用。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets instanceId
    *  集群ID，默认空字符串，默认查询所有集群。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 集群ID，默认空字符串，默认查询所有集群。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets from
    *  查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 查询范围起始时间，毫秒时间戳，默认为0，默认查询三天前。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 查询范围终止时间，毫秒时间戳，默认为0，默认查询到当前时间。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets period
    *  数据统计周期，默认0，默认为5分钟。
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 数据统计周期，默认0，默认为5分钟。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets filter
    *  统计类型，默认min，默认用统计周期中数据的最小值。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 统计类型，默认min，默认用统计周期中数据的最小值。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets serverType
    *  服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 服务类型，默认空字符串，默认查询所有服务类型。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
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

