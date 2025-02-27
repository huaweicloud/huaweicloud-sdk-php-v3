<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterReqBodyClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterReqBody_cluster_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * featureMap  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    * clusterInstanceInfo  集群节点信息类
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'featureMap' => 'map[string,string]',
            'clusterInstanceInfo' => '\HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterInstanceBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * featureMap  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    * clusterInstanceInfo  集群节点信息类
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'featureMap' => null,
        'clusterInstanceInfo' => null
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
    * featureMap  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    * clusterInstanceInfo  集群节点信息类
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'featureMap' => 'feature_map',
            'clusterInstanceInfo' => 'cluster_instance_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * featureMap  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    * clusterInstanceInfo  集群节点信息类
    *
    * @var string[]
    */
    protected static $setters = [
            'featureMap' => 'setFeatureMap',
            'clusterInstanceInfo' => 'setClusterInstanceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * featureMap  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    * clusterInstanceInfo  集群节点信息类
    *
    * @var string[]
    */
    protected static $getters = [
            'featureMap' => 'getFeatureMap',
            'clusterInstanceInfo' => 'getClusterInstanceInfo'
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
        $this->container['featureMap'] = isset($data['featureMap']) ? $data['featureMap'] : null;
        $this->container['clusterInstanceInfo'] = isset($data['clusterInstanceInfo']) ? $data['clusterInstanceInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['featureMap'] === null) {
            $invalidProperties[] = "'featureMap' can't be null";
        }
        if ($this->container['clusterInstanceInfo'] === null) {
            $invalidProperties[] = "'clusterInstanceInfo' can't be null";
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
    * Gets featureMap
    *  特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    *
    * @return map[string,string]
    */
    public function getFeatureMap()
    {
        return $this->container['featureMap'];
    }

    /**
    * Sets featureMap
    *
    * @param map[string,string] $featureMap 特性属性开关      * 属性开关必须以enable开头，value必须为true|false      * doris: enable_broker      * hbase: storage_io_type（COMMON，ULTRAHIGH，两种取值），enable_open_tsdb（默认false，若为true需要在集群节点信息列表中指定tsd节点个数），enable_broker      示例：      \"feature_map\":{\"enable_broker\":\"false\"}       \"feature_map\":{\"enable_lemon\":\"false\",\"enable_open_tsdb\":\"false\",\"storage_io_type\": \"COMMON\"}
    *
    * @return $this
    */
    public function setFeatureMap($featureMap)
    {
        $this->container['featureMap'] = $featureMap;
        return $this;
    }

    /**
    * Gets clusterInstanceInfo
    *  集群节点信息类
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterInstanceBody[]
    */
    public function getClusterInstanceInfo()
    {
        return $this->container['clusterInstanceInfo'];
    }

    /**
    * Sets clusterInstanceInfo
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterInstanceBody[] $clusterInstanceInfo 集群节点信息类
    *
    * @return $this
    */
    public function setClusterInstanceInfo($clusterInstanceInfo)
    {
        $this->container['clusterInstanceInfo'] = $clusterInstanceInfo;
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

