<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceInfoCCEService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceInfoCCEService';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  云容器引擎集群编号
    * namespace  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    * serviceName  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'namespace' => 'string',
            'serviceName' => 'string',
            'clusterName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  云容器引擎集群编号
    * namespace  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    * serviceName  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'namespace' => null,
        'serviceName' => null,
        'clusterName' => null
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
    * clusterId  云容器引擎集群编号
    * namespace  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    * serviceName  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'namespace' => 'namespace',
            'serviceName' => 'service_name',
            'clusterName' => 'cluster_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  云容器引擎集群编号
    * namespace  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    * serviceName  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'namespace' => 'setNamespace',
            'serviceName' => 'setServiceName',
            'clusterName' => 'setClusterName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  云容器引擎集群编号
    * namespace  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    * serviceName  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'namespace' => 'getNamespace',
            'serviceName' => 'getServiceName',
            'clusterName' => 'getClusterName'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 63)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z])([a-z0-9-]){0,62}$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z])([a-z0-9-]){0,62}$/.";
            }
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
            if ((mb_strlen($this->container['serviceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/.";
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
    *  云容器引擎集群编号
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
    * @param string $clusterId 云容器引擎集群编号
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间。1-63字符。只能包含小写字母、数字，以及 '-'，必须以字母开头，必须以字母数字结尾。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets serviceName
    *  Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName Service名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets clusterName
    *  云容器引擎集群名称
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
    * @param string|null $clusterName 云容器引擎集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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

