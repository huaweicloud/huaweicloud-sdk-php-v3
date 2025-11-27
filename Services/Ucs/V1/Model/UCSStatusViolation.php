<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSStatusViolation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSStatusViolation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  进行审计的集群ID
    * auditTimestamp  审计时间
    * clusterViolations  违规状态列表
    * clusterEvents  拦截事件列表
    * warnEvents  告警事件列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'auditTimestamp' => 'string',
            'clusterViolations' => '\HuaweiCloud\SDK\Ucs\V1\Model\StatusViolation[]',
            'clusterEvents' => '\HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]',
            'warnEvents' => '\HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  进行审计的集群ID
    * auditTimestamp  审计时间
    * clusterViolations  违规状态列表
    * clusterEvents  拦截事件列表
    * warnEvents  告警事件列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'auditTimestamp' => null,
        'clusterViolations' => null,
        'clusterEvents' => null,
        'warnEvents' => null
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
    * clusterId  进行审计的集群ID
    * auditTimestamp  审计时间
    * clusterViolations  违规状态列表
    * clusterEvents  拦截事件列表
    * warnEvents  告警事件列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterID',
            'auditTimestamp' => 'auditTimestamp',
            'clusterViolations' => 'clusterViolations',
            'clusterEvents' => 'clusterEvents',
            'warnEvents' => 'warnEvents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  进行审计的集群ID
    * auditTimestamp  审计时间
    * clusterViolations  违规状态列表
    * clusterEvents  拦截事件列表
    * warnEvents  告警事件列表
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'auditTimestamp' => 'setAuditTimestamp',
            'clusterViolations' => 'setClusterViolations',
            'clusterEvents' => 'setClusterEvents',
            'warnEvents' => 'setWarnEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  进行审计的集群ID
    * auditTimestamp  审计时间
    * clusterViolations  违规状态列表
    * clusterEvents  拦截事件列表
    * warnEvents  告警事件列表
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'auditTimestamp' => 'getAuditTimestamp',
            'clusterViolations' => 'getClusterViolations',
            'clusterEvents' => 'getClusterEvents',
            'warnEvents' => 'getWarnEvents'
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
        $this->container['auditTimestamp'] = isset($data['auditTimestamp']) ? $data['auditTimestamp'] : null;
        $this->container['clusterViolations'] = isset($data['clusterViolations']) ? $data['clusterViolations'] : null;
        $this->container['clusterEvents'] = isset($data['clusterEvents']) ? $data['clusterEvents'] : null;
        $this->container['warnEvents'] = isset($data['warnEvents']) ? $data['warnEvents'] : null;
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
    *  进行审计的集群ID
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
    * @param string|null $clusterId 进行审计的集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets auditTimestamp
    *  审计时间
    *
    * @return string|null
    */
    public function getAuditTimestamp()
    {
        return $this->container['auditTimestamp'];
    }

    /**
    * Sets auditTimestamp
    *
    * @param string|null $auditTimestamp 审计时间
    *
    * @return $this
    */
    public function setAuditTimestamp($auditTimestamp)
    {
        $this->container['auditTimestamp'] = $auditTimestamp;
        return $this;
    }

    /**
    * Gets clusterViolations
    *  违规状态列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\StatusViolation[]|null
    */
    public function getClusterViolations()
    {
        return $this->container['clusterViolations'];
    }

    /**
    * Sets clusterViolations
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\StatusViolation[]|null $clusterViolations 违规状态列表
    *
    * @return $this
    */
    public function setClusterViolations($clusterViolations)
    {
        $this->container['clusterViolations'] = $clusterViolations;
        return $this;
    }

    /**
    * Gets clusterEvents
    *  拦截事件列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]|null
    */
    public function getClusterEvents()
    {
        return $this->container['clusterEvents'];
    }

    /**
    * Sets clusterEvents
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]|null $clusterEvents 拦截事件列表
    *
    * @return $this
    */
    public function setClusterEvents($clusterEvents)
    {
        $this->container['clusterEvents'] = $clusterEvents;
        return $this;
    }

    /**
    * Gets warnEvents
    *  告警事件列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]|null
    */
    public function getWarnEvents()
    {
        return $this->container['warnEvents'];
    }

    /**
    * Sets warnEvents
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\StatusEvent[]|null $warnEvents 告警事件列表
    *
    * @return $this
    */
    public function setWarnEvents($warnEvents)
    {
        $this->container['warnEvents'] = $warnEvents;
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

