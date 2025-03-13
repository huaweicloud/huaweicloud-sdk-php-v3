<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradePlanSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradePlanSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterVersion  当前集群版本
    * targetVersion  本次集群升级的目标版本
    * notBefore  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    * notAfter  自动升级计划的最晚时间（UTC时间）
    * notBeforeDeadline  自动升级计划开始的截止时间（UTC时间）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterVersion' => 'string',
            'targetVersion' => 'string',
            'notBefore' => 'string',
            'notAfter' => 'string',
            'notBeforeDeadline' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterVersion  当前集群版本
    * targetVersion  本次集群升级的目标版本
    * notBefore  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    * notAfter  自动升级计划的最晚时间（UTC时间）
    * notBeforeDeadline  自动升级计划开始的截止时间（UTC时间）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterVersion' => null,
        'targetVersion' => null,
        'notBefore' => null,
        'notAfter' => null,
        'notBeforeDeadline' => null
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
    * clusterId  集群ID
    * clusterVersion  当前集群版本
    * targetVersion  本次集群升级的目标版本
    * notBefore  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    * notAfter  自动升级计划的最晚时间（UTC时间）
    * notBeforeDeadline  自动升级计划开始的截止时间（UTC时间）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterID',
            'clusterVersion' => 'clusterVersion',
            'targetVersion' => 'targetVersion',
            'notBefore' => 'notBefore',
            'notAfter' => 'notAfter',
            'notBeforeDeadline' => 'notBeforeDeadline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * clusterVersion  当前集群版本
    * targetVersion  本次集群升级的目标版本
    * notBefore  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    * notAfter  自动升级计划的最晚时间（UTC时间）
    * notBeforeDeadline  自动升级计划开始的截止时间（UTC时间）
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterVersion' => 'setClusterVersion',
            'targetVersion' => 'setTargetVersion',
            'notBefore' => 'setNotBefore',
            'notAfter' => 'setNotAfter',
            'notBeforeDeadline' => 'setNotBeforeDeadline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * clusterVersion  当前集群版本
    * targetVersion  本次集群升级的目标版本
    * notBefore  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    * notAfter  自动升级计划的最晚时间（UTC时间）
    * notBeforeDeadline  自动升级计划开始的截止时间（UTC时间）
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterVersion' => 'getClusterVersion',
            'targetVersion' => 'getTargetVersion',
            'notBefore' => 'getNotBefore',
            'notAfter' => 'getNotAfter',
            'notBeforeDeadline' => 'getNotBeforeDeadline'
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
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['notBeforeDeadline'] = isset($data['notBeforeDeadline']) ? $data['notBeforeDeadline'] : null;
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
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
        if ($this->container['clusterVersion'] === null) {
            $invalidProperties[] = "'clusterVersion' can't be null";
        }
            if (!preg_match("/^v\\d\\.\\d\\.\\d-r\\d$/", $this->container['clusterVersion'])) {
                $invalidProperties[] = "invalid value for 'clusterVersion', must be conform to the pattern /^v\\d\\.\\d\\.\\d-r\\d$/.";
            }
        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
        }
            if (!preg_match("/^v\\d\\.\\d\\.\\d-r\\d$/", $this->container['targetVersion'])) {
                $invalidProperties[] = "invalid value for 'targetVersion', must be conform to the pattern /^v\\d\\.\\d\\.\\d-r\\d$/.";
            }
        if ($this->container['notBefore'] === null) {
            $invalidProperties[] = "'notBefore' can't be null";
        }
        if ($this->container['notAfter'] === null) {
            $invalidProperties[] = "'notAfter' can't be null";
        }
        if ($this->container['notBeforeDeadline'] === null) {
            $invalidProperties[] = "'notBeforeDeadline' can't be null";
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
    *  集群ID
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
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  当前集群版本
    *
    * @return string
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string $clusterVersion 当前集群版本
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets targetVersion
    *  本次集群升级的目标版本
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion 本次集群升级的目标版本
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets notBefore
    *  自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    *
    * @return string
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string $notBefore 自动升级计划的最早时间（UTC时间），需要早于notBeforeDeadline
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets notAfter
    *  自动升级计划的最晚时间（UTC时间）
    *
    * @return string
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param string $notAfter 自动升级计划的最晚时间（UTC时间）
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets notBeforeDeadline
    *  自动升级计划开始的截止时间（UTC时间）
    *
    * @return string
    */
    public function getNotBeforeDeadline()
    {
        return $this->container['notBeforeDeadline'];
    }

    /**
    * Sets notBeforeDeadline
    *
    * @param string $notBeforeDeadline 自动升级计划开始的截止时间（UTC时间）
    *
    * @return $this
    */
    public function setNotBeforeDeadline($notBeforeDeadline)
    {
        $this->container['notBeforeDeadline'] = $notBeforeDeadline;
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

