<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PromInstanceRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PromInstanceRequestModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * promVersion  Prometheus实例版本号。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'promName' => 'string',
            'promType' => 'string',
            'promVersion' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * promVersion  Prometheus实例版本号。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'promName' => null,
        'promType' => null,
        'promVersion' => null,
        'enterpriseProjectId' => null,
        'projectId' => null
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
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * promVersion  Prometheus实例版本号。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'promName' => 'prom_name',
            'promType' => 'prom_type',
            'promVersion' => 'prom_version',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * promVersion  Prometheus实例版本号。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    *
    * @var string[]
    */
    protected static $setters = [
            'promName' => 'setPromName',
            'promType' => 'setPromType',
            'promVersion' => 'setPromVersion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * promVersion  Prometheus实例版本号。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    *
    * @var string[]
    */
    protected static $getters = [
            'promName' => 'getPromName',
            'promType' => 'getPromType',
            'promVersion' => 'getPromVersion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId'
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
    const PROM_TYPE_ECS = 'ECS';
    const PROM_TYPE_VPC = 'VPC';
    const PROM_TYPE_CCE = 'CCE';
    const PROM_TYPE_REMOTE_WRITE = 'REMOTE_WRITE';
    const PROM_TYPE_KUBERNETES = 'KUBERNETES';
    const PROM_TYPE_CLOUD_SERVICE = 'CLOUD_SERVICE';
    const PROM_TYPE_ACROSS_ACCOUNT = 'ACROSS_ACCOUNT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPromTypeAllowableValues()
    {
        return [
            self::PROM_TYPE_ECS,
            self::PROM_TYPE_VPC,
            self::PROM_TYPE_CCE,
            self::PROM_TYPE_REMOTE_WRITE,
            self::PROM_TYPE_KUBERNETES,
            self::PROM_TYPE_CLOUD_SERVICE,
            self::PROM_TYPE_ACROSS_ACCOUNT,
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
        $this->container['promName'] = isset($data['promName']) ? $data['promName'] : null;
        $this->container['promType'] = isset($data['promType']) ? $data['promType'] : null;
        $this->container['promVersion'] = isset($data['promVersion']) ? $data['promVersion'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['promName'] === null) {
            $invalidProperties[] = "'promName' can't be null";
        }
        if ($this->container['promType'] === null) {
            $invalidProperties[] = "'promType' can't be null";
        }
            $allowedValues = $this->getPromTypeAllowableValues();
                if (!is_null($this->container['promType']) && !in_array($this->container['promType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'promType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets promName
    *  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    *
    * @return string
    */
    public function getPromName()
    {
        return $this->container['promName'];
    }

    /**
    * Sets promName
    *
    * @param string $promName Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    *
    * @return $this
    */
    public function setPromName($promName)
    {
        $this->container['promName'] = $promName;
        return $this;
    }

    /**
    * Gets promType
    *  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    *
    * @return string
    */
    public function getPromType()
    {
        return $this->container['promType'];
    }

    /**
    * Sets promType
    *
    * @param string $promType Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    *
    * @return $this
    */
    public function setPromType($promType)
    {
        $this->container['promType'] = $promType;
        return $this;
    }

    /**
    * Gets promVersion
    *  Prometheus实例版本号。
    *
    * @return string|null
    */
    public function getPromVersion()
    {
        return $this->container['promVersion'];
    }

    /**
    * Sets promVersion
    *
    * @param string|null $promVersion Prometheus实例版本号。
    *
    * @return $this
    */
    public function setPromVersion($promVersion)
    {
        $this->container['promVersion'] = $promVersion;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  Prometheus实例所属的企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId Prometheus实例所属的企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  Prometheus实例所属projectId。
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
    * @param string|null $projectId Prometheus实例所属projectId。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

