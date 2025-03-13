<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityGroupStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityGroupStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * securityGroupName  安全组名称
    * groupDescription  风险说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'securityGroupName' => 'string',
            'groupDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * securityGroupName  安全组名称
    * groupDescription  风险说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'securityGroupName' => null,
        'groupDescription' => null
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
    * clusterId  集群id
    * clusterName  集群名称
    * securityGroupName  安全组名称
    * groupDescription  风险说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'securityGroupName' => 'security_group_name',
            'groupDescription' => 'group_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * securityGroupName  安全组名称
    * groupDescription  风险说明
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'securityGroupName' => 'setSecurityGroupName',
            'groupDescription' => 'setGroupDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * securityGroupName  安全组名称
    * groupDescription  风险说明
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'securityGroupName' => 'getSecurityGroupName',
            'groupDescription' => 'getGroupDescription'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['groupDescription'] = isset($data['groupDescription']) ? $data['groupDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['securityGroupName']) && (mb_strlen($this->container['securityGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['securityGroupName']) && (mb_strlen($this->container['securityGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupDescription']) && (mb_strlen($this->container['groupDescription']) > 255)) {
                $invalidProperties[] = "invalid value for 'groupDescription', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['groupDescription']) && (mb_strlen($this->container['groupDescription']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupDescription', the character length must be bigger than or equal to 1.";
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
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets securityGroupName
    *  安全组名称
    *
    * @return string|null
    */
    public function getSecurityGroupName()
    {
        return $this->container['securityGroupName'];
    }

    /**
    * Sets securityGroupName
    *
    * @param string|null $securityGroupName 安全组名称
    *
    * @return $this
    */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->container['securityGroupName'] = $securityGroupName;
        return $this;
    }

    /**
    * Gets groupDescription
    *  风险说明
    *
    * @return string|null
    */
    public function getGroupDescription()
    {
        return $this->container['groupDescription'];
    }

    /**
    * Sets groupDescription
    *
    * @param string|null $groupDescription 风险说明
    *
    * @return $this
    */
    public function setGroupDescription($groupDescription)
    {
        $this->container['groupDescription'] = $groupDescription;
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

