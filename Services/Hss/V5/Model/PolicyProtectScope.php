<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyProtectScope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyProtectScope';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  集群名称
    * clusterId  集群id
    * images  防护镜像
    * namespaces  防护namespace
    * labels  防护labels
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'clusterId' => 'string',
            'images' => 'string[]',
            'namespaces' => 'string[]',
            'labels' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  集群名称
    * clusterId  集群id
    * images  防护镜像
    * namespaces  防护namespace
    * labels  防护labels
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'clusterId' => null,
        'images' => null,
        'namespaces' => null,
        'labels' => null
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
    * clusterId  集群id
    * images  防护镜像
    * namespaces  防护namespace
    * labels  防护labels
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'images' => 'images',
            'namespaces' => 'namespaces',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  集群名称
    * clusterId  集群id
    * images  防护镜像
    * namespaces  防护namespace
    * labels  防护labels
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'images' => 'setImages',
            'namespaces' => 'setNamespaces',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  集群名称
    * clusterId  集群id
    * images  防护镜像
    * namespaces  防护namespace
    * labels  防护labels
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'images' => 'getImages',
            'namespaces' => 'getNamespaces',
            'labels' => 'getLabels'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
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
            if ((mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['namespaces'] === null) {
            $invalidProperties[] = "'namespaces' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
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
    * Gets clusterId
    *  集群id
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
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets images
    *  防护镜像
    *
    * @return string[]
    */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
    * Sets images
    *
    * @param string[] $images 防护镜像
    *
    * @return $this
    */
    public function setImages($images)
    {
        $this->container['images'] = $images;
        return $this;
    }

    /**
    * Gets namespaces
    *  防护namespace
    *
    * @return string[]
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param string[] $namespaces 防护namespace
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
        return $this;
    }

    /**
    * Gets labels
    *  防护labels
    *
    * @return string[]
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[] $labels 防护labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

