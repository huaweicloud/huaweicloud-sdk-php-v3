<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  集群名称
    * description  集群描述
    * clusterNodeConfig  clusterNodeConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'description' => 'string',
            'clusterNodeConfig' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\ClusterNodeConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  集群名称
    * description  集群描述
    * clusterNodeConfig  clusterNodeConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'description' => null,
        'clusterNodeConfig' => null
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
    * clusterName  集群名称
    * description  集群描述
    * clusterNodeConfig  clusterNodeConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'description' => 'description',
            'clusterNodeConfig' => 'cluster_node_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  集群名称
    * description  集群描述
    * clusterNodeConfig  clusterNodeConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'description' => 'setDescription',
            'clusterNodeConfig' => 'setClusterNodeConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  集群名称
    * description  集群描述
    * clusterNodeConfig  clusterNodeConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'description' => 'getDescription',
            'clusterNodeConfig' => 'getClusterNodeConfig'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['clusterNodeConfig'] = isset($data['clusterNodeConfig']) ? $data['clusterNodeConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['clusterName']) < 4)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/.";
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
    * Gets clusterName
    *  集群名称
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets description
    *  集群描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 集群描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets clusterNodeConfig
    *  clusterNodeConfig
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\ClusterNodeConfig|null
    */
    public function getClusterNodeConfig()
    {
        return $this->container['clusterNodeConfig'];
    }

    /**
    * Sets clusterNodeConfig
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\ClusterNodeConfig|null $clusterNodeConfig clusterNodeConfig
    *
    * @return $this
    */
    public function setClusterNodeConfig($clusterNodeConfig)
    {
        $this->container['clusterNodeConfig'] = $clusterNodeConfig;
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

