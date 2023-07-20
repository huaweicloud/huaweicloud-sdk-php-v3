<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPauseResumeStutusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPauseResumeStutusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterInstanceId  主实例id
    * slaveInstanceId  备实例id
    * status  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    * dataSyncIndicators  dataSyncIndicators
    * rtoAndRpoIndicators  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterInstanceId' => 'string',
            'slaveInstanceId' => 'string',
            'status' => 'string',
            'dataSyncIndicators' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrDateSyncIndicators',
            'rtoAndRpoIndicators' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrRpoAndRto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterInstanceId  主实例id
    * slaveInstanceId  备实例id
    * status  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    * dataSyncIndicators  dataSyncIndicators
    * rtoAndRpoIndicators  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterInstanceId' => null,
        'slaveInstanceId' => null,
        'status' => null,
        'dataSyncIndicators' => null,
        'rtoAndRpoIndicators' => null
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
    * masterInstanceId  主实例id
    * slaveInstanceId  备实例id
    * status  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    * dataSyncIndicators  dataSyncIndicators
    * rtoAndRpoIndicators  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterInstanceId' => 'master_instance_id',
            'slaveInstanceId' => 'slave_instance_id',
            'status' => 'status',
            'dataSyncIndicators' => 'data_sync_indicators',
            'rtoAndRpoIndicators' => 'rto_and_rpo_indicators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterInstanceId  主实例id
    * slaveInstanceId  备实例id
    * status  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    * dataSyncIndicators  dataSyncIndicators
    * rtoAndRpoIndicators  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @var string[]
    */
    protected static $setters = [
            'masterInstanceId' => 'setMasterInstanceId',
            'slaveInstanceId' => 'setSlaveInstanceId',
            'status' => 'setStatus',
            'dataSyncIndicators' => 'setDataSyncIndicators',
            'rtoAndRpoIndicators' => 'setRtoAndRpoIndicators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterInstanceId  主实例id
    * slaveInstanceId  备实例id
    * status  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    * dataSyncIndicators  dataSyncIndicators
    * rtoAndRpoIndicators  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @var string[]
    */
    protected static $getters = [
            'masterInstanceId' => 'getMasterInstanceId',
            'slaveInstanceId' => 'getSlaveInstanceId',
            'status' => 'getStatus',
            'dataSyncIndicators' => 'getDataSyncIndicators',
            'rtoAndRpoIndicators' => 'getRtoAndRpoIndicators'
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
    const STATUS_NA = 'NA';
    const STATUS__NEW = 'NEW';
    const STATUS_SYNCING = 'SYNCING';
    const STATUS_SUSPENDING = 'SUSPENDING';
    const STATUS_SUSPENDED = 'SUSPENDED';
    const STATUS_RECOVERYING = 'RECOVERYING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NA,
            self::STATUS__NEW,
            self::STATUS_SYNCING,
            self::STATUS_SUSPENDING,
            self::STATUS_SUSPENDED,
            self::STATUS_RECOVERYING,
        ];
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
        $this->container['masterInstanceId'] = isset($data['masterInstanceId']) ? $data['masterInstanceId'] : null;
        $this->container['slaveInstanceId'] = isset($data['slaveInstanceId']) ? $data['slaveInstanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dataSyncIndicators'] = isset($data['dataSyncIndicators']) ? $data['dataSyncIndicators'] : null;
        $this->container['rtoAndRpoIndicators'] = isset($data['rtoAndRpoIndicators']) ? $data['rtoAndRpoIndicators'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets masterInstanceId
    *  主实例id
    *
    * @return string|null
    */
    public function getMasterInstanceId()
    {
        return $this->container['masterInstanceId'];
    }

    /**
    * Sets masterInstanceId
    *
    * @param string|null $masterInstanceId 主实例id
    *
    * @return $this
    */
    public function setMasterInstanceId($masterInstanceId)
    {
        $this->container['masterInstanceId'] = $masterInstanceId;
        return $this;
    }

    /**
    * Gets slaveInstanceId
    *  备实例id
    *
    * @return string|null
    */
    public function getSlaveInstanceId()
    {
        return $this->container['slaveInstanceId'];
    }

    /**
    * Sets slaveInstanceId
    *
    * @param string|null $slaveInstanceId 备实例id
    *
    * @return $this
    */
    public function setSlaveInstanceId($slaveInstanceId)
    {
        $this->container['slaveInstanceId'] = $slaveInstanceId;
        return $this;
    }

    /**
    * Gets status
    *  容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
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
    * @param string|null $status 容灾实例数据同步状态 - NA：实例尚未搭建容灾关系 - NEW：尚未启动的数据同步状态 - SYNCING：数据同步正常进行中 - SUSPENDING：正在暂停数据同步 - SUSPENDED：数据同步已暂停 - RECOVERYING：正在恢复数据同步
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dataSyncIndicators
    *  dataSyncIndicators
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrDateSyncIndicators|null
    */
    public function getDataSyncIndicators()
    {
        return $this->container['dataSyncIndicators'];
    }

    /**
    * Sets dataSyncIndicators
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrDateSyncIndicators|null $dataSyncIndicators dataSyncIndicators
    *
    * @return $this
    */
    public function setDataSyncIndicators($dataSyncIndicators)
    {
        $this->container['dataSyncIndicators'] = $dataSyncIndicators;
        return $this;
    }

    /**
    * Gets rtoAndRpoIndicators
    *  切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrRpoAndRto[]|null
    */
    public function getRtoAndRpoIndicators()
    {
        return $this->container['rtoAndRpoIndicators'];
    }

    /**
    * Sets rtoAndRpoIndicators
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\NoSQLDrRpoAndRto[]|null $rtoAndRpoIndicators 切换或倒换RPO和RTO值，仅当请求实例id为主实例时有值
    *
    * @return $this
    */
    public function setRtoAndRpoIndicators($rtoAndRpoIndicators)
    {
        $this->container['rtoAndRpoIndicators'] = $rtoAndRpoIndicators;
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

