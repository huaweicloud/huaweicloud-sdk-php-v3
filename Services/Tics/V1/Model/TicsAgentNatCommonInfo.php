<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsAgentNatCommonInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsAgentNatCommonInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * natId  可信节点绑定的网关id
    * projectId  项目id
    * subnetId  可信节点绑定的CCE集群所在子网id
    * vpcId  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'natId' => 'string',
            'projectId' => 'string',
            'subnetId' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * natId  可信节点绑定的网关id
    * projectId  项目id
    * subnetId  可信节点绑定的CCE集群所在子网id
    * vpcId  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'natId' => null,
        'projectId' => null,
        'subnetId' => null,
        'vpcId' => null
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
    * natId  可信节点绑定的网关id
    * projectId  项目id
    * subnetId  可信节点绑定的CCE集群所在子网id
    * vpcId  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'natId' => 'nat_id',
            'projectId' => 'project_id',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * natId  可信节点绑定的网关id
    * projectId  项目id
    * subnetId  可信节点绑定的CCE集群所在子网id
    * vpcId  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @var string[]
    */
    protected static $setters = [
            'natId' => 'setNatId',
            'projectId' => 'setProjectId',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * natId  可信节点绑定的网关id
    * projectId  项目id
    * subnetId  可信节点绑定的CCE集群所在子网id
    * vpcId  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @var string[]
    */
    protected static $getters = [
            'natId' => 'getNatId',
            'projectId' => 'getProjectId',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId'
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
        $this->container['natId'] = isset($data['natId']) ? $data['natId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
    * Gets natId
    *  可信节点绑定的网关id
    *
    * @return string|null
    */
    public function getNatId()
    {
        return $this->container['natId'];
    }

    /**
    * Sets natId
    *
    * @param string|null $natId 可信节点绑定的网关id
    *
    * @return $this
    */
    public function setNatId($natId)
    {
        $this->container['natId'] = $natId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets subnetId
    *  可信节点绑定的CCE集群所在子网id
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 可信节点绑定的CCE集群所在子网id
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 可信节点绑定的CCE集群所在虚拟私有云id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

