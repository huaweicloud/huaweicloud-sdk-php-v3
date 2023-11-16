<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceName  实例名
    * ips  实例IP
    * expireTime  实例过期时间
    * serviceBandwidth  业务带宽
    * instanceStatus  实例状态
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'ips' => '\HuaweiCloud\SDK\Aad\V1\Model\InstanceIpInfo[]',
            'expireTime' => 'int',
            'serviceBandwidth' => 'int',
            'instanceStatus' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceName  实例名
    * ips  实例IP
    * expireTime  实例过期时间
    * serviceBandwidth  业务带宽
    * instanceStatus  实例状态
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'ips' => null,
        'expireTime' => 'int64',
        'serviceBandwidth' => 'int32',
        'instanceStatus' => 'int32',
        'enterpriseProjectId' => null
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
    * instanceId  实例ID
    * instanceName  实例名
    * ips  实例IP
    * expireTime  实例过期时间
    * serviceBandwidth  业务带宽
    * instanceStatus  实例状态
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'ips' => 'ips',
            'expireTime' => 'expire_time',
            'serviceBandwidth' => 'service_bandwidth',
            'instanceStatus' => 'instance_status',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * instanceName  实例名
    * ips  实例IP
    * expireTime  实例过期时间
    * serviceBandwidth  业务带宽
    * instanceStatus  实例状态
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'ips' => 'setIps',
            'expireTime' => 'setExpireTime',
            'serviceBandwidth' => 'setServiceBandwidth',
            'instanceStatus' => 'setInstanceStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * instanceName  实例名
    * ips  实例IP
    * expireTime  实例过期时间
    * serviceBandwidth  业务带宽
    * instanceStatus  实例状态
    * enterpriseProjectId  企业项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'ips' => 'getIps',
            'expireTime' => 'getExpireTime',
            'serviceBandwidth' => 'getServiceBandwidth',
            'instanceStatus' => 'getInstanceStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['serviceBandwidth'] = isset($data['serviceBandwidth']) ? $data['serviceBandwidth'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets instanceName
    *  实例名
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets ips
    *  实例IP
    *
    * @return \HuaweiCloud\SDK\Aad\V1\Model\InstanceIpInfo[]|null
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param \HuaweiCloud\SDK\Aad\V1\Model\InstanceIpInfo[]|null $ips 实例IP
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets expireTime
    *  实例过期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 实例过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets serviceBandwidth
    *  业务带宽
    *
    * @return int|null
    */
    public function getServiceBandwidth()
    {
        return $this->container['serviceBandwidth'];
    }

    /**
    * Sets serviceBandwidth
    *
    * @param int|null $serviceBandwidth 业务带宽
    *
    * @return $this
    */
    public function setServiceBandwidth($serviceBandwidth)
    {
        $this->container['serviceBandwidth'] = $serviceBandwidth;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态
    *
    * @return int|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param int|null $instanceStatus 实例状态
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

