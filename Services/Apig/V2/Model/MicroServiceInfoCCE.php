<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceInfoCCE implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceInfoCCE';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  云容器引擎集群编号
    * namespace  命名空间
    * workloadType  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    * appName  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelKey  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelValue  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'namespace' => 'string',
            'workloadType' => 'string',
            'appName' => 'string',
            'labelKey' => 'string',
            'labelValue' => 'string',
            'clusterName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  云容器引擎集群编号
    * namespace  命名空间
    * workloadType  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    * appName  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelKey  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelValue  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'namespace' => null,
        'workloadType' => null,
        'appName' => null,
        'labelKey' => null,
        'labelValue' => null,
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
    * namespace  命名空间
    * workloadType  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    * appName  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelKey  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelValue  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'namespace' => 'namespace',
            'workloadType' => 'workload_type',
            'appName' => 'app_name',
            'labelKey' => 'label_key',
            'labelValue' => 'label_value',
            'clusterName' => 'cluster_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  云容器引擎集群编号
    * namespace  命名空间
    * workloadType  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    * appName  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelKey  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelValue  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'namespace' => 'setNamespace',
            'workloadType' => 'setWorkloadType',
            'appName' => 'setAppName',
            'labelKey' => 'setLabelKey',
            'labelValue' => 'setLabelValue',
            'clusterName' => 'setClusterName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  云容器引擎集群编号
    * namespace  命名空间
    * workloadType  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    * appName  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelKey  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * labelValue  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * clusterName  云容器引擎集群名称
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'namespace' => 'getNamespace',
            'workloadType' => 'getWorkloadType',
            'appName' => 'getAppName',
            'labelKey' => 'getLabelKey',
            'labelValue' => 'getLabelValue',
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
    const WORKLOAD_TYPE_DEPLOYMENT = 'deployment';
    const WORKLOAD_TYPE_STATEFULSET = 'statefulset';
    const WORKLOAD_TYPE_DAEMONSET = 'daemonset';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWorkloadTypeAllowableValues()
    {
        return [
            self::WORKLOAD_TYPE_DEPLOYMENT,
            self::WORKLOAD_TYPE_STATEFULSET,
            self::WORKLOAD_TYPE_DAEMONSET,
        ];
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
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['labelKey'] = isset($data['labelKey']) ? $data['labelKey'] : null;
        $this->container['labelValue'] = isset($data['labelValue']) ? $data['labelValue'] : null;
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
            if ((mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['workloadType'] === null) {
            $invalidProperties[] = "'workloadType' can't be null";
        }
            $allowedValues = $this->getWorkloadTypeAllowableValues();
                if (!is_null($this->container['workloadType']) && !in_array($this->container['workloadType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'workloadType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 64)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && !preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/", $this->container['appName'])) {
                $invalidProperties[] = "invalid value for 'appName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/.";
            }
            if (!is_null($this->container['labelKey']) && (mb_strlen($this->container['labelKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'labelKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['labelKey']) && (mb_strlen($this->container['labelKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'labelKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['labelKey']) && !preg_match("/^([a-zA-Z0-9]|[\\u4e00-\\u9fa5])([a-zA-Z0-9:._()\\\/\/-]|[\\u4e00-\\u9fa5\\uff08\\uff09\\uff1a\\u3001]){1,64}$/", $this->container['labelKey'])) {
                $invalidProperties[] = "invalid value for 'labelKey', must be conform to the pattern /^([a-zA-Z0-9]|[\\u4e00-\\u9fa5])([a-zA-Z0-9:._()\\\/\/-]|[\\u4e00-\\u9fa5\\uff08\\uff09\\uff1a\\u3001]){1,64}$/.";
            }
            if (!is_null($this->container['labelValue']) && (mb_strlen($this->container['labelValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'labelValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['labelValue']) && (mb_strlen($this->container['labelValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'labelValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['labelValue']) && !preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/", $this->container['labelValue'])) {
                $invalidProperties[] = "invalid value for 'labelValue', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9._-]|[\\u4e00-\\u9fa5]){1,64}$/.";
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
    *  命名空间
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
    * @param string $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets workloadType
    *  工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    *
    * @return string
    */
    public function getWorkloadType()
    {
        return $this->container['workloadType'];
    }

    /**
    * Sets workloadType
    *
    * @param string $workloadType 工作负载类型  - deployment：无状态负载  - statefulset：有状态负载  - daemonset：守护进程集
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
        return $this;
    }

    /**
    * Gets appName
    *  APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName APP名称。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets labelKey
    *  服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getLabelKey()
    {
        return $this->container['labelKey'];
    }

    /**
    * Sets labelKey
    *
    * @param string|null $labelKey 服务标识名。支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号，且只能以英文、汉字和数字开头，1-64个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setLabelKey($labelKey)
    {
        $this->container['labelKey'] = $labelKey;
        return $this;
    }

    /**
    * Gets labelValue
    *  服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getLabelValue()
    {
        return $this->container['labelValue'];
    }

    /**
    * Sets labelValue
    *
    * @param string|null $labelValue 服务标识值。支持汉字，英文，数字，点，中划线，下划线，且只能以英文和汉字开头，1-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setLabelValue($labelValue)
    {
        $this->container['labelValue'] = $labelValue;
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

