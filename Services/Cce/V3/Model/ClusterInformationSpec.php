<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterInformationSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterInformationSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * hostNetwork  hostNetwork
    * deletionProtection  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'customSan' => 'string[]',
            'containerNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\ContainerNetworkUpdate',
            'eniNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\EniNetworkUpdate',
            'hostNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\ClusterInformationSpecHostNetwork',
            'deletionProtection' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * hostNetwork  hostNetwork
    * deletionProtection  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'customSan' => null,
        'containerNetwork' => null,
        'eniNetwork' => null,
        'hostNetwork' => null,
        'deletionProtection' => null
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
    * description  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * hostNetwork  hostNetwork
    * deletionProtection  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'customSan' => 'customSan',
            'containerNetwork' => 'containerNetwork',
            'eniNetwork' => 'eniNetwork',
            'hostNetwork' => 'hostNetwork',
            'deletionProtection' => 'deletionProtection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * hostNetwork  hostNetwork
    * deletionProtection  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'customSan' => 'setCustomSan',
            'containerNetwork' => 'setContainerNetwork',
            'eniNetwork' => 'setEniNetwork',
            'hostNetwork' => 'setHostNetwork',
            'deletionProtection' => 'setDeletionProtection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * hostNetwork  hostNetwork
    * deletionProtection  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'customSan' => 'getCustomSan',
            'containerNetwork' => 'getContainerNetwork',
            'eniNetwork' => 'getEniNetwork',
            'hostNetwork' => 'getHostNetwork',
            'deletionProtection' => 'getDeletionProtection'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customSan'] = isset($data['customSan']) ? $data['customSan'] : null;
        $this->container['containerNetwork'] = isset($data['containerNetwork']) ? $data['containerNetwork'] : null;
        $this->container['eniNetwork'] = isset($data['eniNetwork']) ? $data['eniNetwork'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['deletionProtection'] = isset($data['deletionProtection']) ? $data['deletionProtection'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^\\~\\$\\%\\^\\&\\*\\<\\>\\[\\]\\{\\}\\(\\)\\'\\\"\\#\\\\]/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^\\~\\$\\%\\^\\&\\*\\<\\>\\[\\]\\{\\}\\(\\)\\'\\\"\\#\\\\]/.";
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
    * Gets description
    *  集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
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
    * @param string|null $description 集群的描述信息。  1. 字符取值范围[0,200]。不包含~$%^&*<>[]{}()'\"#\\等特殊字符。 2. 仅运行和扩容状态（Available、ScalingUp、ScalingDown）的集群允许修改。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets customSan
    *  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    *
    * @return string[]|null
    */
    public function getCustomSan()
    {
        return $this->container['customSan'];
    }

    /**
    * Sets customSan
    *
    * @param string[]|null $customSan 集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    *
    * @return $this
    */
    public function setCustomSan($customSan)
    {
        $this->container['customSan'] = $customSan;
        return $this;
    }

    /**
    * Gets containerNetwork
    *  containerNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ContainerNetworkUpdate|null
    */
    public function getContainerNetwork()
    {
        return $this->container['containerNetwork'];
    }

    /**
    * Sets containerNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ContainerNetworkUpdate|null $containerNetwork containerNetwork
    *
    * @return $this
    */
    public function setContainerNetwork($containerNetwork)
    {
        $this->container['containerNetwork'] = $containerNetwork;
        return $this;
    }

    /**
    * Gets eniNetwork
    *  eniNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\EniNetworkUpdate|null
    */
    public function getEniNetwork()
    {
        return $this->container['eniNetwork'];
    }

    /**
    * Sets eniNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\EniNetworkUpdate|null $eniNetwork eniNetwork
    *
    * @return $this
    */
    public function setEniNetwork($eniNetwork)
    {
        $this->container['eniNetwork'] = $eniNetwork;
        return $this;
    }

    /**
    * Gets hostNetwork
    *  hostNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ClusterInformationSpecHostNetwork|null
    */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
    * Sets hostNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ClusterInformationSpecHostNetwork|null $hostNetwork hostNetwork
    *
    * @return $this
    */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;
        return $this;
    }

    /**
    * Gets deletionProtection
    *  集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @return bool|null
    */
    public function getDeletionProtection()
    {
        return $this->container['deletionProtection'];
    }

    /**
    * Sets deletionProtection
    *
    * @param bool|null $deletionProtection 集群删除保护，默认为false关闭，如果开启后用户将无法删除该集群。
    *
    * @return $this
    */
    public function setDeletionProtection($deletionProtection)
    {
        $this->container['deletionProtection'] = $deletionProtection;
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

