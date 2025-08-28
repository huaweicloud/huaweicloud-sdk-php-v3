<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shrink  需要缩容的节点类型和数量集合。
    * agencyName  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    * operationType  操作类型。
    * clusterLoadCheck  是否需要检查集群负载。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shrink' => '\HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[]',
            'agencyName' => 'string',
            'operationType' => 'string',
            'clusterLoadCheck' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shrink  需要缩容的节点类型和数量集合。
    * agencyName  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    * operationType  操作类型。
    * clusterLoadCheck  是否需要检查集群负载。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shrink' => null,
        'agencyName' => null,
        'operationType' => null,
        'clusterLoadCheck' => null
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
    * shrink  需要缩容的节点类型和数量集合。
    * agencyName  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    * operationType  操作类型。
    * clusterLoadCheck  是否需要检查集群负载。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shrink' => 'shrink',
            'agencyName' => 'agency_name',
            'operationType' => 'operation_type',
            'clusterLoadCheck' => 'cluster_load_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shrink  需要缩容的节点类型和数量集合。
    * agencyName  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    * operationType  操作类型。
    * clusterLoadCheck  是否需要检查集群负载。
    *
    * @var string[]
    */
    protected static $setters = [
            'shrink' => 'setShrink',
            'agencyName' => 'setAgencyName',
            'operationType' => 'setOperationType',
            'clusterLoadCheck' => 'setClusterLoadCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shrink  需要缩容的节点类型和数量集合。
    * agencyName  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    * operationType  操作类型。
    * clusterLoadCheck  是否需要检查集群负载。
    *
    * @var string[]
    */
    protected static $getters = [
            'shrink' => 'getShrink',
            'agencyName' => 'getAgencyName',
            'operationType' => 'getOperationType',
            'clusterLoadCheck' => 'getClusterLoadCheck'
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
        $this->container['shrink'] = isset($data['shrink']) ? $data['shrink'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['clusterLoadCheck'] = isset($data['clusterLoadCheck']) ? $data['clusterLoadCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shrink'] === null) {
            $invalidProperties[] = "'shrink' can't be null";
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
    * Gets shrink
    *  需要缩容的节点类型和数量集合。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[]
    */
    public function getShrink()
    {
        return $this->container['shrink'];
    }

    /**
    * Sets shrink
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[] $shrink 需要缩容的节点类型和数量集合。
    *
    * @return $this
    */
    public function setShrink($shrink)
    {
        $this->container['shrink'] = $shrink;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称，委托给CSS服务，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 操作类型。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets clusterLoadCheck
    *  是否需要检查集群负载。
    *
    * @return bool|null
    */
    public function getClusterLoadCheck()
    {
        return $this->container['clusterLoadCheck'];
    }

    /**
    * Sets clusterLoadCheck
    *
    * @param bool|null $clusterLoadCheck 是否需要检查集群负载。
    *
    * @return $this
    */
    public function setClusterLoadCheck($clusterLoadCheck)
    {
        $this->container['clusterLoadCheck'] = $clusterLoadCheck;
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

