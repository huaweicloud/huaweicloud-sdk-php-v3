<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditUpgradeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditUpgradeStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentVersion  当前版本
    * instanceId  实例ID
    * status  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    * steps  升级步骤
    * total  总量
    * upgradeVersion  升级版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentVersion' => 'string',
            'instanceId' => 'string',
            'status' => 'int',
            'steps' => '\HuaweiCloud\SDK\Dbss\V1\Model\AuditUpgradeStep[]',
            'total' => 'int',
            'upgradeVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentVersion  当前版本
    * instanceId  实例ID
    * status  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    * steps  升级步骤
    * total  总量
    * upgradeVersion  升级版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentVersion' => null,
        'instanceId' => null,
        'status' => 'int32',
        'steps' => null,
        'total' => 'int32',
        'upgradeVersion' => null
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
    * currentVersion  当前版本
    * instanceId  实例ID
    * status  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    * steps  升级步骤
    * total  总量
    * upgradeVersion  升级版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentVersion' => 'current_version',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'steps' => 'steps',
            'total' => 'total',
            'upgradeVersion' => 'upgrade_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentVersion  当前版本
    * instanceId  实例ID
    * status  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    * steps  升级步骤
    * total  总量
    * upgradeVersion  升级版本
    *
    * @var string[]
    */
    protected static $setters = [
            'currentVersion' => 'setCurrentVersion',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'steps' => 'setSteps',
            'total' => 'setTotal',
            'upgradeVersion' => 'setUpgradeVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentVersion  当前版本
    * instanceId  实例ID
    * status  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    * steps  升级步骤
    * total  总量
    * upgradeVersion  升级版本
    *
    * @var string[]
    */
    protected static $getters = [
            'currentVersion' => 'getCurrentVersion',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'steps' => 'getSteps',
            'total' => 'getTotal',
            'upgradeVersion' => 'getUpgradeVersion'
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
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['upgradeVersion'] = isset($data['upgradeVersion']) ? $data['upgradeVersion'] : null;
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
    * Gets currentVersion
    *  当前版本
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前版本
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态  - 0：正在升级  - 1：满足条件未升级  - 2：不满足升级条件
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets steps
    *  升级步骤
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AuditUpgradeStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AuditUpgradeStep[]|null $steps 升级步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets total
    *  总量
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总量
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets upgradeVersion
    *  升级版本
    *
    * @return string|null
    */
    public function getUpgradeVersion()
    {
        return $this->container['upgradeVersion'];
    }

    /**
    * Sets upgradeVersion
    *
    * @param string|null $upgradeVersion 升级版本
    *
    * @return $this
    */
    public function setUpgradeVersion($upgradeVersion)
    {
        $this->container['upgradeVersion'] = $upgradeVersion;
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

