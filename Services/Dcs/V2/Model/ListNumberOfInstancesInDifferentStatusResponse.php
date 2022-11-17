<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNumberOfInstancesInDifferentStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNumberOfInstancesInDifferentStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redis  redis
    * memcached  memcached
    * payingCount  支付中的实例数。
    * freezingCount  冻结中的实例数。
    * migratingCount  迁移中的实例数。
    * flushingCount  清空中的实例数。
    * upgradingCount  升级中的实例数。
    * restoringCount  恢复中的实例数。
    * extendingCount  扩容中的实例数。
    * creatingCount  正在创建的实例数。
    * runningCount  正在运行的实例数。
    * errorCount  异常的实例数。
    * frozenCount  已冻结的实例数。
    * createfailedCount  创建失败的实例数。
    * restartingCount  正在重启的实例数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redis' => '\HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic',
            'memcached' => '\HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic',
            'payingCount' => 'int',
            'freezingCount' => 'int',
            'migratingCount' => 'int',
            'flushingCount' => 'int',
            'upgradingCount' => 'int',
            'restoringCount' => 'int',
            'extendingCount' => 'int',
            'creatingCount' => 'int',
            'runningCount' => 'int',
            'errorCount' => 'int',
            'frozenCount' => 'int',
            'createfailedCount' => 'int',
            'restartingCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redis  redis
    * memcached  memcached
    * payingCount  支付中的实例数。
    * freezingCount  冻结中的实例数。
    * migratingCount  迁移中的实例数。
    * flushingCount  清空中的实例数。
    * upgradingCount  升级中的实例数。
    * restoringCount  恢复中的实例数。
    * extendingCount  扩容中的实例数。
    * creatingCount  正在创建的实例数。
    * runningCount  正在运行的实例数。
    * errorCount  异常的实例数。
    * frozenCount  已冻结的实例数。
    * createfailedCount  创建失败的实例数。
    * restartingCount  正在重启的实例数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redis' => null,
        'memcached' => null,
        'payingCount' => 'int32',
        'freezingCount' => 'int32',
        'migratingCount' => 'int32',
        'flushingCount' => 'int32',
        'upgradingCount' => 'int32',
        'restoringCount' => 'int32',
        'extendingCount' => 'int32',
        'creatingCount' => 'int32',
        'runningCount' => 'int32',
        'errorCount' => 'int32',
        'frozenCount' => 'int32',
        'createfailedCount' => 'int32',
        'restartingCount' => 'int32'
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
    * redis  redis
    * memcached  memcached
    * payingCount  支付中的实例数。
    * freezingCount  冻结中的实例数。
    * migratingCount  迁移中的实例数。
    * flushingCount  清空中的实例数。
    * upgradingCount  升级中的实例数。
    * restoringCount  恢复中的实例数。
    * extendingCount  扩容中的实例数。
    * creatingCount  正在创建的实例数。
    * runningCount  正在运行的实例数。
    * errorCount  异常的实例数。
    * frozenCount  已冻结的实例数。
    * createfailedCount  创建失败的实例数。
    * restartingCount  正在重启的实例数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redis' => 'redis',
            'memcached' => 'memcached',
            'payingCount' => 'paying_count',
            'freezingCount' => 'freezing_count',
            'migratingCount' => 'migrating_count',
            'flushingCount' => 'flushing_count',
            'upgradingCount' => 'upgrading_count',
            'restoringCount' => 'restoring_count',
            'extendingCount' => 'extending_count',
            'creatingCount' => 'creating_count',
            'runningCount' => 'running_count',
            'errorCount' => 'error_count',
            'frozenCount' => 'frozen_count',
            'createfailedCount' => 'createfailed_count',
            'restartingCount' => 'restarting_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redis  redis
    * memcached  memcached
    * payingCount  支付中的实例数。
    * freezingCount  冻结中的实例数。
    * migratingCount  迁移中的实例数。
    * flushingCount  清空中的实例数。
    * upgradingCount  升级中的实例数。
    * restoringCount  恢复中的实例数。
    * extendingCount  扩容中的实例数。
    * creatingCount  正在创建的实例数。
    * runningCount  正在运行的实例数。
    * errorCount  异常的实例数。
    * frozenCount  已冻结的实例数。
    * createfailedCount  创建失败的实例数。
    * restartingCount  正在重启的实例数。
    *
    * @var string[]
    */
    protected static $setters = [
            'redis' => 'setRedis',
            'memcached' => 'setMemcached',
            'payingCount' => 'setPayingCount',
            'freezingCount' => 'setFreezingCount',
            'migratingCount' => 'setMigratingCount',
            'flushingCount' => 'setFlushingCount',
            'upgradingCount' => 'setUpgradingCount',
            'restoringCount' => 'setRestoringCount',
            'extendingCount' => 'setExtendingCount',
            'creatingCount' => 'setCreatingCount',
            'runningCount' => 'setRunningCount',
            'errorCount' => 'setErrorCount',
            'frozenCount' => 'setFrozenCount',
            'createfailedCount' => 'setCreatefailedCount',
            'restartingCount' => 'setRestartingCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redis  redis
    * memcached  memcached
    * payingCount  支付中的实例数。
    * freezingCount  冻结中的实例数。
    * migratingCount  迁移中的实例数。
    * flushingCount  清空中的实例数。
    * upgradingCount  升级中的实例数。
    * restoringCount  恢复中的实例数。
    * extendingCount  扩容中的实例数。
    * creatingCount  正在创建的实例数。
    * runningCount  正在运行的实例数。
    * errorCount  异常的实例数。
    * frozenCount  已冻结的实例数。
    * createfailedCount  创建失败的实例数。
    * restartingCount  正在重启的实例数。
    *
    * @var string[]
    */
    protected static $getters = [
            'redis' => 'getRedis',
            'memcached' => 'getMemcached',
            'payingCount' => 'getPayingCount',
            'freezingCount' => 'getFreezingCount',
            'migratingCount' => 'getMigratingCount',
            'flushingCount' => 'getFlushingCount',
            'upgradingCount' => 'getUpgradingCount',
            'restoringCount' => 'getRestoringCount',
            'extendingCount' => 'getExtendingCount',
            'creatingCount' => 'getCreatingCount',
            'runningCount' => 'getRunningCount',
            'errorCount' => 'getErrorCount',
            'frozenCount' => 'getFrozenCount',
            'createfailedCount' => 'getCreatefailedCount',
            'restartingCount' => 'getRestartingCount'
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
        $this->container['redis'] = isset($data['redis']) ? $data['redis'] : null;
        $this->container['memcached'] = isset($data['memcached']) ? $data['memcached'] : null;
        $this->container['payingCount'] = isset($data['payingCount']) ? $data['payingCount'] : null;
        $this->container['freezingCount'] = isset($data['freezingCount']) ? $data['freezingCount'] : null;
        $this->container['migratingCount'] = isset($data['migratingCount']) ? $data['migratingCount'] : null;
        $this->container['flushingCount'] = isset($data['flushingCount']) ? $data['flushingCount'] : null;
        $this->container['upgradingCount'] = isset($data['upgradingCount']) ? $data['upgradingCount'] : null;
        $this->container['restoringCount'] = isset($data['restoringCount']) ? $data['restoringCount'] : null;
        $this->container['extendingCount'] = isset($data['extendingCount']) ? $data['extendingCount'] : null;
        $this->container['creatingCount'] = isset($data['creatingCount']) ? $data['creatingCount'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
        $this->container['frozenCount'] = isset($data['frozenCount']) ? $data['frozenCount'] : null;
        $this->container['createfailedCount'] = isset($data['createfailedCount']) ? $data['createfailedCount'] : null;
        $this->container['restartingCount'] = isset($data['restartingCount']) ? $data['restartingCount'] : null;
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
    * Gets redis
    *  redis
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic|null
    */
    public function getRedis()
    {
        return $this->container['redis'];
    }

    /**
    * Sets redis
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic|null $redis redis
    *
    * @return $this
    */
    public function setRedis($redis)
    {
        $this->container['redis'] = $redis;
        return $this;
    }

    /**
    * Gets memcached
    *  memcached
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic|null
    */
    public function getMemcached()
    {
        return $this->container['memcached'];
    }

    /**
    * Sets memcached
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\StatusStatistic|null $memcached memcached
    *
    * @return $this
    */
    public function setMemcached($memcached)
    {
        $this->container['memcached'] = $memcached;
        return $this;
    }

    /**
    * Gets payingCount
    *  支付中的实例数。
    *
    * @return int|null
    */
    public function getPayingCount()
    {
        return $this->container['payingCount'];
    }

    /**
    * Sets payingCount
    *
    * @param int|null $payingCount 支付中的实例数。
    *
    * @return $this
    */
    public function setPayingCount($payingCount)
    {
        $this->container['payingCount'] = $payingCount;
        return $this;
    }

    /**
    * Gets freezingCount
    *  冻结中的实例数。
    *
    * @return int|null
    */
    public function getFreezingCount()
    {
        return $this->container['freezingCount'];
    }

    /**
    * Sets freezingCount
    *
    * @param int|null $freezingCount 冻结中的实例数。
    *
    * @return $this
    */
    public function setFreezingCount($freezingCount)
    {
        $this->container['freezingCount'] = $freezingCount;
        return $this;
    }

    /**
    * Gets migratingCount
    *  迁移中的实例数。
    *
    * @return int|null
    */
    public function getMigratingCount()
    {
        return $this->container['migratingCount'];
    }

    /**
    * Sets migratingCount
    *
    * @param int|null $migratingCount 迁移中的实例数。
    *
    * @return $this
    */
    public function setMigratingCount($migratingCount)
    {
        $this->container['migratingCount'] = $migratingCount;
        return $this;
    }

    /**
    * Gets flushingCount
    *  清空中的实例数。
    *
    * @return int|null
    */
    public function getFlushingCount()
    {
        return $this->container['flushingCount'];
    }

    /**
    * Sets flushingCount
    *
    * @param int|null $flushingCount 清空中的实例数。
    *
    * @return $this
    */
    public function setFlushingCount($flushingCount)
    {
        $this->container['flushingCount'] = $flushingCount;
        return $this;
    }

    /**
    * Gets upgradingCount
    *  升级中的实例数。
    *
    * @return int|null
    */
    public function getUpgradingCount()
    {
        return $this->container['upgradingCount'];
    }

    /**
    * Sets upgradingCount
    *
    * @param int|null $upgradingCount 升级中的实例数。
    *
    * @return $this
    */
    public function setUpgradingCount($upgradingCount)
    {
        $this->container['upgradingCount'] = $upgradingCount;
        return $this;
    }

    /**
    * Gets restoringCount
    *  恢复中的实例数。
    *
    * @return int|null
    */
    public function getRestoringCount()
    {
        return $this->container['restoringCount'];
    }

    /**
    * Sets restoringCount
    *
    * @param int|null $restoringCount 恢复中的实例数。
    *
    * @return $this
    */
    public function setRestoringCount($restoringCount)
    {
        $this->container['restoringCount'] = $restoringCount;
        return $this;
    }

    /**
    * Gets extendingCount
    *  扩容中的实例数。
    *
    * @return int|null
    */
    public function getExtendingCount()
    {
        return $this->container['extendingCount'];
    }

    /**
    * Sets extendingCount
    *
    * @param int|null $extendingCount 扩容中的实例数。
    *
    * @return $this
    */
    public function setExtendingCount($extendingCount)
    {
        $this->container['extendingCount'] = $extendingCount;
        return $this;
    }

    /**
    * Gets creatingCount
    *  正在创建的实例数。
    *
    * @return int|null
    */
    public function getCreatingCount()
    {
        return $this->container['creatingCount'];
    }

    /**
    * Sets creatingCount
    *
    * @param int|null $creatingCount 正在创建的实例数。
    *
    * @return $this
    */
    public function setCreatingCount($creatingCount)
    {
        $this->container['creatingCount'] = $creatingCount;
        return $this;
    }

    /**
    * Gets runningCount
    *  正在运行的实例数。
    *
    * @return int|null
    */
    public function getRunningCount()
    {
        return $this->container['runningCount'];
    }

    /**
    * Sets runningCount
    *
    * @param int|null $runningCount 正在运行的实例数。
    *
    * @return $this
    */
    public function setRunningCount($runningCount)
    {
        $this->container['runningCount'] = $runningCount;
        return $this;
    }

    /**
    * Gets errorCount
    *  异常的实例数。
    *
    * @return int|null
    */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
    * Sets errorCount
    *
    * @param int|null $errorCount 异常的实例数。
    *
    * @return $this
    */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;
        return $this;
    }

    /**
    * Gets frozenCount
    *  已冻结的实例数。
    *
    * @return int|null
    */
    public function getFrozenCount()
    {
        return $this->container['frozenCount'];
    }

    /**
    * Sets frozenCount
    *
    * @param int|null $frozenCount 已冻结的实例数。
    *
    * @return $this
    */
    public function setFrozenCount($frozenCount)
    {
        $this->container['frozenCount'] = $frozenCount;
        return $this;
    }

    /**
    * Gets createfailedCount
    *  创建失败的实例数。
    *
    * @return int|null
    */
    public function getCreatefailedCount()
    {
        return $this->container['createfailedCount'];
    }

    /**
    * Sets createfailedCount
    *
    * @param int|null $createfailedCount 创建失败的实例数。
    *
    * @return $this
    */
    public function setCreatefailedCount($createfailedCount)
    {
        $this->container['createfailedCount'] = $createfailedCount;
        return $this;
    }

    /**
    * Gets restartingCount
    *  正在重启的实例数。
    *
    * @return int|null
    */
    public function getRestartingCount()
    {
        return $this->container['restartingCount'];
    }

    /**
    * Sets restartingCount
    *
    * @param int|null $restartingCount 正在重启的实例数。
    *
    * @return $this
    */
    public function setRestartingCount($restartingCount)
    {
        $this->container['restartingCount'] = $restartingCount;
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

