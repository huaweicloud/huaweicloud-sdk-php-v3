<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoSQLDrDateSyncIndicators implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoSQLDrDateSyncIndicators';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rsyncOps  节点内同步命令的执行速率,每秒多少条数据；
    * rsyncWalSize  节点内的同步WAL堆积大小,单位MB；
    * rsyncPushCost  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    * rsyncSendCost  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    * rsyncMaxPushCost  采集周期内rsync的同步推送耗时最大值，单位us;
    * rsyncMaxSendCost  采集周期内rsync的同步发送耗时最大值，单位us;
    * rsyncStatus  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rsyncOps' => 'int',
            'rsyncWalSize' => 'int',
            'rsyncPushCost' => 'int',
            'rsyncSendCost' => 'int',
            'rsyncMaxPushCost' => 'int',
            'rsyncMaxSendCost' => 'int',
            'rsyncStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rsyncOps  节点内同步命令的执行速率,每秒多少条数据；
    * rsyncWalSize  节点内的同步WAL堆积大小,单位MB；
    * rsyncPushCost  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    * rsyncSendCost  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    * rsyncMaxPushCost  采集周期内rsync的同步推送耗时最大值，单位us;
    * rsyncMaxSendCost  采集周期内rsync的同步发送耗时最大值，单位us;
    * rsyncStatus  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rsyncOps' => 'int64',
        'rsyncWalSize' => 'int64',
        'rsyncPushCost' => 'int64',
        'rsyncSendCost' => 'int64',
        'rsyncMaxPushCost' => 'int64',
        'rsyncMaxSendCost' => 'int64',
        'rsyncStatus' => 'int32'
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
    * rsyncOps  节点内同步命令的执行速率,每秒多少条数据；
    * rsyncWalSize  节点内的同步WAL堆积大小,单位MB；
    * rsyncPushCost  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    * rsyncSendCost  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    * rsyncMaxPushCost  采集周期内rsync的同步推送耗时最大值，单位us;
    * rsyncMaxSendCost  采集周期内rsync的同步发送耗时最大值，单位us;
    * rsyncStatus  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rsyncOps' => 'rsync_ops',
            'rsyncWalSize' => 'rsync_wal_size',
            'rsyncPushCost' => 'rsync_push_cost',
            'rsyncSendCost' => 'rsync_send_cost',
            'rsyncMaxPushCost' => 'rsync_max_push_cost',
            'rsyncMaxSendCost' => 'rsync_max_send_cost',
            'rsyncStatus' => 'rsync_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rsyncOps  节点内同步命令的执行速率,每秒多少条数据；
    * rsyncWalSize  节点内的同步WAL堆积大小,单位MB；
    * rsyncPushCost  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    * rsyncSendCost  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    * rsyncMaxPushCost  采集周期内rsync的同步推送耗时最大值，单位us;
    * rsyncMaxSendCost  采集周期内rsync的同步发送耗时最大值，单位us;
    * rsyncStatus  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @var string[]
    */
    protected static $setters = [
            'rsyncOps' => 'setRsyncOps',
            'rsyncWalSize' => 'setRsyncWalSize',
            'rsyncPushCost' => 'setRsyncPushCost',
            'rsyncSendCost' => 'setRsyncSendCost',
            'rsyncMaxPushCost' => 'setRsyncMaxPushCost',
            'rsyncMaxSendCost' => 'setRsyncMaxSendCost',
            'rsyncStatus' => 'setRsyncStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rsyncOps  节点内同步命令的执行速率,每秒多少条数据；
    * rsyncWalSize  节点内的同步WAL堆积大小,单位MB；
    * rsyncPushCost  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    * rsyncSendCost  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    * rsyncMaxPushCost  采集周期内rsync的同步推送耗时最大值，单位us;
    * rsyncMaxSendCost  采集周期内rsync的同步发送耗时最大值，单位us;
    * rsyncStatus  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @var string[]
    */
    protected static $getters = [
            'rsyncOps' => 'getRsyncOps',
            'rsyncWalSize' => 'getRsyncWalSize',
            'rsyncPushCost' => 'getRsyncPushCost',
            'rsyncSendCost' => 'getRsyncSendCost',
            'rsyncMaxPushCost' => 'getRsyncMaxPushCost',
            'rsyncMaxSendCost' => 'getRsyncMaxSendCost',
            'rsyncStatus' => 'getRsyncStatus'
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
        $this->container['rsyncOps'] = isset($data['rsyncOps']) ? $data['rsyncOps'] : null;
        $this->container['rsyncWalSize'] = isset($data['rsyncWalSize']) ? $data['rsyncWalSize'] : null;
        $this->container['rsyncPushCost'] = isset($data['rsyncPushCost']) ? $data['rsyncPushCost'] : null;
        $this->container['rsyncSendCost'] = isset($data['rsyncSendCost']) ? $data['rsyncSendCost'] : null;
        $this->container['rsyncMaxPushCost'] = isset($data['rsyncMaxPushCost']) ? $data['rsyncMaxPushCost'] : null;
        $this->container['rsyncMaxSendCost'] = isset($data['rsyncMaxSendCost']) ? $data['rsyncMaxSendCost'] : null;
        $this->container['rsyncStatus'] = isset($data['rsyncStatus']) ? $data['rsyncStatus'] : null;
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
    * Gets rsyncOps
    *  节点内同步命令的执行速率,每秒多少条数据；
    *
    * @return int|null
    */
    public function getRsyncOps()
    {
        return $this->container['rsyncOps'];
    }

    /**
    * Sets rsyncOps
    *
    * @param int|null $rsyncOps 节点内同步命令的执行速率,每秒多少条数据；
    *
    * @return $this
    */
    public function setRsyncOps($rsyncOps)
    {
        $this->container['rsyncOps'] = $rsyncOps;
        return $this;
    }

    /**
    * Gets rsyncWalSize
    *  节点内的同步WAL堆积大小,单位MB；
    *
    * @return int|null
    */
    public function getRsyncWalSize()
    {
        return $this->container['rsyncWalSize'];
    }

    /**
    * Sets rsyncWalSize
    *
    * @param int|null $rsyncWalSize 节点内的同步WAL堆积大小,单位MB；
    *
    * @return $this
    */
    public function setRsyncWalSize($rsyncWalSize)
    {
        $this->container['rsyncWalSize'] = $rsyncWalSize;
        return $this;
    }

    /**
    * Gets rsyncPushCost
    *  同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    *
    * @return int|null
    */
    public function getRsyncPushCost()
    {
        return $this->container['rsyncPushCost'];
    }

    /**
    * Sets rsyncPushCost
    *
    * @param int|null $rsyncPushCost 同步消息从放入消息队列，直到收到对端响应的平均耗时，单位us；
    *
    * @return $this
    */
    public function setRsyncPushCost($rsyncPushCost)
    {
        $this->container['rsyncPushCost'] = $rsyncPushCost;
        return $this;
    }

    /**
    * Gets rsyncSendCost
    *  同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    *
    * @return int|null
    */
    public function getRsyncSendCost()
    {
        return $this->container['rsyncSendCost'];
    }

    /**
    * Sets rsyncSendCost
    *
    * @param int|null $rsyncSendCost 同步消息从消息队列取出，直到收到对端响应的平均耗时，单位us；
    *
    * @return $this
    */
    public function setRsyncSendCost($rsyncSendCost)
    {
        $this->container['rsyncSendCost'] = $rsyncSendCost;
        return $this;
    }

    /**
    * Gets rsyncMaxPushCost
    *  采集周期内rsync的同步推送耗时最大值，单位us;
    *
    * @return int|null
    */
    public function getRsyncMaxPushCost()
    {
        return $this->container['rsyncMaxPushCost'];
    }

    /**
    * Sets rsyncMaxPushCost
    *
    * @param int|null $rsyncMaxPushCost 采集周期内rsync的同步推送耗时最大值，单位us;
    *
    * @return $this
    */
    public function setRsyncMaxPushCost($rsyncMaxPushCost)
    {
        $this->container['rsyncMaxPushCost'] = $rsyncMaxPushCost;
        return $this;
    }

    /**
    * Gets rsyncMaxSendCost
    *  采集周期内rsync的同步发送耗时最大值，单位us;
    *
    * @return int|null
    */
    public function getRsyncMaxSendCost()
    {
        return $this->container['rsyncMaxSendCost'];
    }

    /**
    * Sets rsyncMaxSendCost
    *
    * @param int|null $rsyncMaxSendCost 采集周期内rsync的同步发送耗时最大值，单位us;
    *
    * @return $this
    */
    public function setRsyncMaxSendCost($rsyncMaxSendCost)
    {
        $this->container['rsyncMaxSendCost'] = $rsyncMaxSendCost;
        return $this;
    }

    /**
    * Gets rsyncStatus
    *  rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @return int|null
    */
    public function getRsyncStatus()
    {
        return $this->container['rsyncStatus'];
    }

    /**
    * Sets rsyncStatus
    *
    * @param int|null $rsyncStatus rsync的同步状态，1表示正在同步，0表示没有同步;
    *
    * @return $this
    */
    public function setRsyncStatus($rsyncStatus)
    {
        $this->container['rsyncStatus'] = $rsyncStatus;
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

