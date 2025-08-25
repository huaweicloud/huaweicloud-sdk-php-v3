<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CcspServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CcspServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterNum  当前租户拥有的专属密码服务集群数量
    * instanceNum  当前租户拥有的专属密码服务实例数量
    * instanceQuota  当前租户的可创建的专属密码服务实例配额数
    * instanceDistribution  instanceDistribution
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterNum' => 'int',
            'instanceNum' => 'int',
            'instanceQuota' => 'int',
            'instanceDistribution' => '\HuaweiCloud\SDK\Cpcs\V1\Model\InstanceDistribution'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterNum  当前租户拥有的专属密码服务集群数量
    * instanceNum  当前租户拥有的专属密码服务实例数量
    * instanceQuota  当前租户的可创建的专属密码服务实例配额数
    * instanceDistribution  instanceDistribution
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterNum' => null,
        'instanceNum' => null,
        'instanceQuota' => null,
        'instanceDistribution' => null
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
    * clusterNum  当前租户拥有的专属密码服务集群数量
    * instanceNum  当前租户拥有的专属密码服务实例数量
    * instanceQuota  当前租户的可创建的专属密码服务实例配额数
    * instanceDistribution  instanceDistribution
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterNum' => 'cluster_num',
            'instanceNum' => 'instance_num',
            'instanceQuota' => 'instance_quota',
            'instanceDistribution' => 'instance_distribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterNum  当前租户拥有的专属密码服务集群数量
    * instanceNum  当前租户拥有的专属密码服务实例数量
    * instanceQuota  当前租户的可创建的专属密码服务实例配额数
    * instanceDistribution  instanceDistribution
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterNum' => 'setClusterNum',
            'instanceNum' => 'setInstanceNum',
            'instanceQuota' => 'setInstanceQuota',
            'instanceDistribution' => 'setInstanceDistribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterNum  当前租户拥有的专属密码服务集群数量
    * instanceNum  当前租户拥有的专属密码服务实例数量
    * instanceQuota  当前租户的可创建的专属密码服务实例配额数
    * instanceDistribution  instanceDistribution
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterNum' => 'getClusterNum',
            'instanceNum' => 'getInstanceNum',
            'instanceQuota' => 'getInstanceQuota',
            'instanceDistribution' => 'getInstanceDistribution'
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
        $this->container['clusterNum'] = isset($data['clusterNum']) ? $data['clusterNum'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['instanceQuota'] = isset($data['instanceQuota']) ? $data['instanceQuota'] : null;
        $this->container['instanceDistribution'] = isset($data['instanceDistribution']) ? $data['instanceDistribution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterNum'] === null) {
            $invalidProperties[] = "'clusterNum' can't be null";
        }
        if ($this->container['instanceNum'] === null) {
            $invalidProperties[] = "'instanceNum' can't be null";
        }
        if ($this->container['instanceQuota'] === null) {
            $invalidProperties[] = "'instanceQuota' can't be null";
        }
        if ($this->container['instanceDistribution'] === null) {
            $invalidProperties[] = "'instanceDistribution' can't be null";
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
    * Gets clusterNum
    *  当前租户拥有的专属密码服务集群数量
    *
    * @return int
    */
    public function getClusterNum()
    {
        return $this->container['clusterNum'];
    }

    /**
    * Sets clusterNum
    *
    * @param int $clusterNum 当前租户拥有的专属密码服务集群数量
    *
    * @return $this
    */
    public function setClusterNum($clusterNum)
    {
        $this->container['clusterNum'] = $clusterNum;
        return $this;
    }

    /**
    * Gets instanceNum
    *  当前租户拥有的专属密码服务实例数量
    *
    * @return int
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int $instanceNum 当前租户拥有的专属密码服务实例数量
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets instanceQuota
    *  当前租户的可创建的专属密码服务实例配额数
    *
    * @return int
    */
    public function getInstanceQuota()
    {
        return $this->container['instanceQuota'];
    }

    /**
    * Sets instanceQuota
    *
    * @param int $instanceQuota 当前租户的可创建的专属密码服务实例配额数
    *
    * @return $this
    */
    public function setInstanceQuota($instanceQuota)
    {
        $this->container['instanceQuota'] = $instanceQuota;
        return $this;
    }

    /**
    * Gets instanceDistribution
    *  instanceDistribution
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\InstanceDistribution
    */
    public function getInstanceDistribution()
    {
        return $this->container['instanceDistribution'];
    }

    /**
    * Sets instanceDistribution
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\InstanceDistribution $instanceDistribution instanceDistribution
    *
    * @return $this
    */
    public function setInstanceDistribution($instanceDistribution)
    {
        $this->container['instanceDistribution'] = $instanceDistribution;
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

