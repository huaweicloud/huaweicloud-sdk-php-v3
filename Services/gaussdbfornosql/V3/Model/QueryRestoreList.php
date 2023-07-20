<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRestoreList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRestoreList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceMode  实例模式
    * engineName  引擎名称
    * engineVersion  引擎版本
    * vpcId  VPC ID。
    * subnetIds  子网ID列表
    * securityGroupIds  安全组ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceMode' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'vpcId' => 'string',
            'subnetIds' => 'string[]',
            'securityGroupIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceMode  实例模式
    * engineName  引擎名称
    * engineVersion  引擎版本
    * vpcId  VPC ID。
    * subnetIds  子网ID列表
    * securityGroupIds  安全组ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceMode' => null,
        'engineName' => null,
        'engineVersion' => null,
        'vpcId' => null,
        'subnetIds' => null,
        'securityGroupIds' => null
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
    * instanceMode  实例模式
    * engineName  引擎名称
    * engineVersion  引擎版本
    * vpcId  VPC ID。
    * subnetIds  子网ID列表
    * securityGroupIds  安全组ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceMode' => 'instance_mode',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'vpcId' => 'vpc_id',
            'subnetIds' => 'subnet_ids',
            'securityGroupIds' => 'security_group_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * instanceMode  实例模式
    * engineName  引擎名称
    * engineVersion  引擎版本
    * vpcId  VPC ID。
    * subnetIds  子网ID列表
    * securityGroupIds  安全组ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceMode' => 'setInstanceMode',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'vpcId' => 'setVpcId',
            'subnetIds' => 'setSubnetIds',
            'securityGroupIds' => 'setSecurityGroupIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * instanceMode  实例模式
    * engineName  引擎名称
    * engineVersion  引擎版本
    * vpcId  VPC ID。
    * subnetIds  子网ID列表
    * securityGroupIds  安全组ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceMode' => 'getInstanceMode',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'vpcId' => 'getVpcId',
            'subnetIds' => 'getSubnetIds',
            'securityGroupIds' => 'getSecurityGroupIds'
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
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetIds'] = isset($data['subnetIds']) ? $data['subnetIds'] : null;
        $this->container['securityGroupIds'] = isset($data['securityGroupIds']) ? $data['securityGroupIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceMode'] === null) {
            $invalidProperties[] = "'instanceMode' can't be null";
        }
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetIds'] === null) {
            $invalidProperties[] = "'subnetIds' can't be null";
        }
        if ($this->container['securityGroupIds'] === null) {
            $invalidProperties[] = "'securityGroupIds' can't be null";
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceMode
    *  实例模式
    *
    * @return string
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string $instanceMode 实例模式
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName 引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetIds
    *  子网ID列表
    *
    * @return string[]
    */
    public function getSubnetIds()
    {
        return $this->container['subnetIds'];
    }

    /**
    * Sets subnetIds
    *
    * @param string[] $subnetIds 子网ID列表
    *
    * @return $this
    */
    public function setSubnetIds($subnetIds)
    {
        $this->container['subnetIds'] = $subnetIds;
        return $this;
    }

    /**
    * Gets securityGroupIds
    *  安全组ID列表
    *
    * @return string[]
    */
    public function getSecurityGroupIds()
    {
        return $this->container['securityGroupIds'];
    }

    /**
    * Sets securityGroupIds
    *
    * @param string[] $securityGroupIds 安全组ID列表
    *
    * @return $this
    */
    public function setSecurityGroupIds($securityGroupIds)
    {
        $this->container['securityGroupIds'] = $securityGroupIds;
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

