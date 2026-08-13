<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangePaymentModeForConsoleBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangePaymentModeForConsoleBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIdList  实例ID列表
    * engineType  引擎类型
    * paymentMode  true: 设置为付费, false: 设置为免费
    * resourceType  资源类型
    * openFullSql  是否打开全量SQL
    * openSlowSql  是否打开慢SQL
    * openDeadLock  是否打开死锁分析
    * openLockBlocking  是否打开锁阻塞
    * openTransaction  是否打开历史事务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIdList' => 'string[]',
            'engineType' => 'string',
            'paymentMode' => 'bool',
            'resourceType' => 'string',
            'openFullSql' => 'bool',
            'openSlowSql' => 'bool',
            'openDeadLock' => 'bool',
            'openLockBlocking' => 'bool',
            'openTransaction' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIdList  实例ID列表
    * engineType  引擎类型
    * paymentMode  true: 设置为付费, false: 设置为免费
    * resourceType  资源类型
    * openFullSql  是否打开全量SQL
    * openSlowSql  是否打开慢SQL
    * openDeadLock  是否打开死锁分析
    * openLockBlocking  是否打开锁阻塞
    * openTransaction  是否打开历史事务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIdList' => null,
        'engineType' => null,
        'paymentMode' => null,
        'resourceType' => null,
        'openFullSql' => null,
        'openSlowSql' => null,
        'openDeadLock' => null,
        'openLockBlocking' => null,
        'openTransaction' => null
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
    * instanceIdList  实例ID列表
    * engineType  引擎类型
    * paymentMode  true: 设置为付费, false: 设置为免费
    * resourceType  资源类型
    * openFullSql  是否打开全量SQL
    * openSlowSql  是否打开慢SQL
    * openDeadLock  是否打开死锁分析
    * openLockBlocking  是否打开锁阻塞
    * openTransaction  是否打开历史事务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIdList' => 'instance_id_list',
            'engineType' => 'engine_type',
            'paymentMode' => 'payment_mode',
            'resourceType' => 'resource_type',
            'openFullSql' => 'open_full_sql',
            'openSlowSql' => 'open_slow_sql',
            'openDeadLock' => 'open_dead_lock',
            'openLockBlocking' => 'open_lock_blocking',
            'openTransaction' => 'open_transaction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIdList  实例ID列表
    * engineType  引擎类型
    * paymentMode  true: 设置为付费, false: 设置为免费
    * resourceType  资源类型
    * openFullSql  是否打开全量SQL
    * openSlowSql  是否打开慢SQL
    * openDeadLock  是否打开死锁分析
    * openLockBlocking  是否打开锁阻塞
    * openTransaction  是否打开历史事务
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIdList' => 'setInstanceIdList',
            'engineType' => 'setEngineType',
            'paymentMode' => 'setPaymentMode',
            'resourceType' => 'setResourceType',
            'openFullSql' => 'setOpenFullSql',
            'openSlowSql' => 'setOpenSlowSql',
            'openDeadLock' => 'setOpenDeadLock',
            'openLockBlocking' => 'setOpenLockBlocking',
            'openTransaction' => 'setOpenTransaction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIdList  实例ID列表
    * engineType  引擎类型
    * paymentMode  true: 设置为付费, false: 设置为免费
    * resourceType  资源类型
    * openFullSql  是否打开全量SQL
    * openSlowSql  是否打开慢SQL
    * openDeadLock  是否打开死锁分析
    * openLockBlocking  是否打开锁阻塞
    * openTransaction  是否打开历史事务
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIdList' => 'getInstanceIdList',
            'engineType' => 'getEngineType',
            'paymentMode' => 'getPaymentMode',
            'resourceType' => 'getResourceType',
            'openFullSql' => 'getOpenFullSql',
            'openSlowSql' => 'getOpenSlowSql',
            'openDeadLock' => 'getOpenDeadLock',
            'openLockBlocking' => 'getOpenLockBlocking',
            'openTransaction' => 'getOpenTransaction'
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
        $this->container['instanceIdList'] = isset($data['instanceIdList']) ? $data['instanceIdList'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['paymentMode'] = isset($data['paymentMode']) ? $data['paymentMode'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['openFullSql'] = isset($data['openFullSql']) ? $data['openFullSql'] : null;
        $this->container['openSlowSql'] = isset($data['openSlowSql']) ? $data['openSlowSql'] : null;
        $this->container['openDeadLock'] = isset($data['openDeadLock']) ? $data['openDeadLock'] : null;
        $this->container['openLockBlocking'] = isset($data['openLockBlocking']) ? $data['openLockBlocking'] : null;
        $this->container['openTransaction'] = isset($data['openTransaction']) ? $data['openTransaction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIdList'] === null) {
            $invalidProperties[] = "'instanceIdList' can't be null";
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
    * Gets instanceIdList
    *  实例ID列表
    *
    * @return string[]
    */
    public function getInstanceIdList()
    {
        return $this->container['instanceIdList'];
    }

    /**
    * Sets instanceIdList
    *
    * @param string[] $instanceIdList 实例ID列表
    *
    * @return $this
    */
    public function setInstanceIdList($instanceIdList)
    {
        $this->container['instanceIdList'] = $instanceIdList;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets paymentMode
    *  true: 设置为付费, false: 设置为免费
    *
    * @return bool|null
    */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
    * Sets paymentMode
    *
    * @param bool|null $paymentMode true: 设置为付费, false: 设置为免费
    *
    * @return $this
    */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets openFullSql
    *  是否打开全量SQL
    *
    * @return bool|null
    */
    public function getOpenFullSql()
    {
        return $this->container['openFullSql'];
    }

    /**
    * Sets openFullSql
    *
    * @param bool|null $openFullSql 是否打开全量SQL
    *
    * @return $this
    */
    public function setOpenFullSql($openFullSql)
    {
        $this->container['openFullSql'] = $openFullSql;
        return $this;
    }

    /**
    * Gets openSlowSql
    *  是否打开慢SQL
    *
    * @return bool|null
    */
    public function getOpenSlowSql()
    {
        return $this->container['openSlowSql'];
    }

    /**
    * Sets openSlowSql
    *
    * @param bool|null $openSlowSql 是否打开慢SQL
    *
    * @return $this
    */
    public function setOpenSlowSql($openSlowSql)
    {
        $this->container['openSlowSql'] = $openSlowSql;
        return $this;
    }

    /**
    * Gets openDeadLock
    *  是否打开死锁分析
    *
    * @return bool|null
    */
    public function getOpenDeadLock()
    {
        return $this->container['openDeadLock'];
    }

    /**
    * Sets openDeadLock
    *
    * @param bool|null $openDeadLock 是否打开死锁分析
    *
    * @return $this
    */
    public function setOpenDeadLock($openDeadLock)
    {
        $this->container['openDeadLock'] = $openDeadLock;
        return $this;
    }

    /**
    * Gets openLockBlocking
    *  是否打开锁阻塞
    *
    * @return bool|null
    */
    public function getOpenLockBlocking()
    {
        return $this->container['openLockBlocking'];
    }

    /**
    * Sets openLockBlocking
    *
    * @param bool|null $openLockBlocking 是否打开锁阻塞
    *
    * @return $this
    */
    public function setOpenLockBlocking($openLockBlocking)
    {
        $this->container['openLockBlocking'] = $openLockBlocking;
        return $this;
    }

    /**
    * Gets openTransaction
    *  是否打开历史事务
    *
    * @return bool|null
    */
    public function getOpenTransaction()
    {
        return $this->container['openTransaction'];
    }

    /**
    * Sets openTransaction
    *
    * @param bool|null $openTransaction 是否打开历史事务
    *
    * @return $this
    */
    public function setOpenTransaction($openTransaction)
    {
        $this->container['openTransaction'] = $openTransaction;
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

