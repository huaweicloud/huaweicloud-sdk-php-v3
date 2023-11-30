<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PromInstanceEpsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PromInstanceEpsModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promId  Prometheus实例id。
    * promType  Prometheus实例类型。
    * promVersion  Prometheus实例版本号。
    * cceSpec  CCE场景特殊字段。
    * promConfig  promConfig
    * promCreateTimestamp  Prometheus实例创建时间戳。
    * promUpdateTimestamp  Prometheus实例更新时间戳。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    * isDeletedTag  删除标记。
    * deletedTime  删除时间。
    * promSpecConfig  promSpecConfig
    * cceSpecConfig  Prometheus实例所属CCE特殊配置。
    * application  application
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'promName' => 'string',
            'promId' => 'string',
            'promType' => 'string',
            'promVersion' => 'string',
            'cceSpec' => 'string',
            'promConfig' => '\HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel',
            'promCreateTimestamp' => 'int',
            'promUpdateTimestamp' => 'int',
            'promStatus' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'isDeletedTag' => 'int',
            'deletedTime' => 'int',
            'promSpecConfig' => '\HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel',
            'cceSpecConfig' => 'string',
            'application' => '\HuaweiCloud\SDK\Aom\V2\Model\ApplicationModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promId  Prometheus实例id。
    * promType  Prometheus实例类型。
    * promVersion  Prometheus实例版本号。
    * cceSpec  CCE场景特殊字段。
    * promConfig  promConfig
    * promCreateTimestamp  Prometheus实例创建时间戳。
    * promUpdateTimestamp  Prometheus实例更新时间戳。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    * isDeletedTag  删除标记。
    * deletedTime  删除时间。
    * promSpecConfig  promSpecConfig
    * cceSpecConfig  Prometheus实例所属CCE特殊配置。
    * application  application
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'promName' => null,
        'promId' => null,
        'promType' => null,
        'promVersion' => null,
        'cceSpec' => null,
        'promConfig' => null,
        'promCreateTimestamp' => 'int64',
        'promUpdateTimestamp' => 'int64',
        'promStatus' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'isDeletedTag' => 'int64',
        'deletedTime' => 'int64',
        'promSpecConfig' => null,
        'cceSpecConfig' => null,
        'application' => null
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
    * promId  Prometheus实例id。
    * promType  Prometheus实例类型。
    * promVersion  Prometheus实例版本号。
    * cceSpec  CCE场景特殊字段。
    * promConfig  promConfig
    * promCreateTimestamp  Prometheus实例创建时间戳。
    * promUpdateTimestamp  Prometheus实例更新时间戳。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    * isDeletedTag  删除标记。
    * deletedTime  删除时间。
    * promSpecConfig  promSpecConfig
    * cceSpecConfig  Prometheus实例所属CCE特殊配置。
    * application  application
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'promName' => 'prom_name',
            'promId' => 'prom_id',
            'promType' => 'prom_type',
            'promVersion' => 'prom_version',
            'cceSpec' => 'cce_spec',
            'promConfig' => 'prom_config',
            'promCreateTimestamp' => 'prom_create_timestamp',
            'promUpdateTimestamp' => 'prom_update_timestamp',
            'promStatus' => 'prom_status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'isDeletedTag' => 'is_deleted_tag',
            'deletedTime' => 'deleted_time',
            'promSpecConfig' => 'prom_spec_config',
            'cceSpecConfig' => 'cce_spec_config',
            'application' => 'application'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promId  Prometheus实例id。
    * promType  Prometheus实例类型。
    * promVersion  Prometheus实例版本号。
    * cceSpec  CCE场景特殊字段。
    * promConfig  promConfig
    * promCreateTimestamp  Prometheus实例创建时间戳。
    * promUpdateTimestamp  Prometheus实例更新时间戳。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    * isDeletedTag  删除标记。
    * deletedTime  删除时间。
    * promSpecConfig  promSpecConfig
    * cceSpecConfig  Prometheus实例所属CCE特殊配置。
    * application  application
    *
    * @var string[]
    */
    protected static $setters = [
            'promName' => 'setPromName',
            'promId' => 'setPromId',
            'promType' => 'setPromType',
            'promVersion' => 'setPromVersion',
            'cceSpec' => 'setCceSpec',
            'promConfig' => 'setPromConfig',
            'promCreateTimestamp' => 'setPromCreateTimestamp',
            'promUpdateTimestamp' => 'setPromUpdateTimestamp',
            'promStatus' => 'setPromStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'isDeletedTag' => 'setIsDeletedTag',
            'deletedTime' => 'setDeletedTime',
            'promSpecConfig' => 'setPromSpecConfig',
            'cceSpecConfig' => 'setCceSpecConfig',
            'application' => 'setApplication'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * promName  Prometheus实例名称 名称不能以下划线或中划线开头结尾，只含有中文、英文、数字、下划线、中划线、长度1-100。
    * promId  Prometheus实例id。
    * promType  Prometheus实例类型。
    * promVersion  Prometheus实例版本号。
    * cceSpec  CCE场景特殊字段。
    * promConfig  promConfig
    * promCreateTimestamp  Prometheus实例创建时间戳。
    * promUpdateTimestamp  Prometheus实例更新时间戳。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  Prometheus实例所属的企业项目。
    * projectId  Prometheus实例所属projectId。
    * isDeletedTag  删除标记。
    * deletedTime  删除时间。
    * promSpecConfig  promSpecConfig
    * cceSpecConfig  Prometheus实例所属CCE特殊配置。
    * application  application
    *
    * @var string[]
    */
    protected static $getters = [
            'promName' => 'getPromName',
            'promId' => 'getPromId',
            'promType' => 'getPromType',
            'promVersion' => 'getPromVersion',
            'cceSpec' => 'getCceSpec',
            'promConfig' => 'getPromConfig',
            'promCreateTimestamp' => 'getPromCreateTimestamp',
            'promUpdateTimestamp' => 'getPromUpdateTimestamp',
            'promStatus' => 'getPromStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'isDeletedTag' => 'getIsDeletedTag',
            'deletedTime' => 'getDeletedTime',
            'promSpecConfig' => 'getPromSpecConfig',
            'cceSpecConfig' => 'getCceSpecConfig',
            'application' => 'getApplication'
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
    const PROM_TYPE__DEFAULT = 'DEFAULT';
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
            self::PROM_TYPE__DEFAULT,
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
        $this->container['promId'] = isset($data['promId']) ? $data['promId'] : null;
        $this->container['promType'] = isset($data['promType']) ? $data['promType'] : null;
        $this->container['promVersion'] = isset($data['promVersion']) ? $data['promVersion'] : null;
        $this->container['cceSpec'] = isset($data['cceSpec']) ? $data['cceSpec'] : null;
        $this->container['promConfig'] = isset($data['promConfig']) ? $data['promConfig'] : null;
        $this->container['promCreateTimestamp'] = isset($data['promCreateTimestamp']) ? $data['promCreateTimestamp'] : null;
        $this->container['promUpdateTimestamp'] = isset($data['promUpdateTimestamp']) ? $data['promUpdateTimestamp'] : null;
        $this->container['promStatus'] = isset($data['promStatus']) ? $data['promStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isDeletedTag'] = isset($data['isDeletedTag']) ? $data['isDeletedTag'] : null;
        $this->container['deletedTime'] = isset($data['deletedTime']) ? $data['deletedTime'] : null;
        $this->container['promSpecConfig'] = isset($data['promSpecConfig']) ? $data['promSpecConfig'] : null;
        $this->container['cceSpecConfig'] = isset($data['cceSpecConfig']) ? $data['cceSpecConfig'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
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
    * Gets promId
    *  Prometheus实例id。
    *
    * @return string|null
    */
    public function getPromId()
    {
        return $this->container['promId'];
    }

    /**
    * Sets promId
    *
    * @param string|null $promId Prometheus实例id。
    *
    * @return $this
    */
    public function setPromId($promId)
    {
        $this->container['promId'] = $promId;
        return $this;
    }

    /**
    * Gets promType
    *  Prometheus实例类型。
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
    * @param string $promType Prometheus实例类型。
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
    * Gets cceSpec
    *  CCE场景特殊字段。
    *
    * @return string|null
    */
    public function getCceSpec()
    {
        return $this->container['cceSpec'];
    }

    /**
    * Sets cceSpec
    *
    * @param string|null $cceSpec CCE场景特殊字段。
    *
    * @return $this
    */
    public function setCceSpec($cceSpec)
    {
        $this->container['cceSpec'] = $cceSpec;
        return $this;
    }

    /**
    * Gets promConfig
    *  promConfig
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel|null
    */
    public function getPromConfig()
    {
        return $this->container['promConfig'];
    }

    /**
    * Sets promConfig
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel|null $promConfig promConfig
    *
    * @return $this
    */
    public function setPromConfig($promConfig)
    {
        $this->container['promConfig'] = $promConfig;
        return $this;
    }

    /**
    * Gets promCreateTimestamp
    *  Prometheus实例创建时间戳。
    *
    * @return int|null
    */
    public function getPromCreateTimestamp()
    {
        return $this->container['promCreateTimestamp'];
    }

    /**
    * Sets promCreateTimestamp
    *
    * @param int|null $promCreateTimestamp Prometheus实例创建时间戳。
    *
    * @return $this
    */
    public function setPromCreateTimestamp($promCreateTimestamp)
    {
        $this->container['promCreateTimestamp'] = $promCreateTimestamp;
        return $this;
    }

    /**
    * Gets promUpdateTimestamp
    *  Prometheus实例更新时间戳。
    *
    * @return int|null
    */
    public function getPromUpdateTimestamp()
    {
        return $this->container['promUpdateTimestamp'];
    }

    /**
    * Sets promUpdateTimestamp
    *
    * @param int|null $promUpdateTimestamp Prometheus实例更新时间戳。
    *
    * @return $this
    */
    public function setPromUpdateTimestamp($promUpdateTimestamp)
    {
        $this->container['promUpdateTimestamp'] = $promUpdateTimestamp;
        return $this;
    }

    /**
    * Gets promStatus
    *  Prometheus实例状态。
    *
    * @return string|null
    */
    public function getPromStatus()
    {
        return $this->container['promStatus'];
    }

    /**
    * Sets promStatus
    *
    * @param string|null $promStatus Prometheus实例状态。
    *
    * @return $this
    */
    public function setPromStatus($promStatus)
    {
        $this->container['promStatus'] = $promStatus;
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
    * Gets isDeletedTag
    *  删除标记。
    *
    * @return int|null
    */
    public function getIsDeletedTag()
    {
        return $this->container['isDeletedTag'];
    }

    /**
    * Sets isDeletedTag
    *
    * @param int|null $isDeletedTag 删除标记。
    *
    * @return $this
    */
    public function setIsDeletedTag($isDeletedTag)
    {
        $this->container['isDeletedTag'] = $isDeletedTag;
        return $this;
    }

    /**
    * Gets deletedTime
    *  删除时间。
    *
    * @return int|null
    */
    public function getDeletedTime()
    {
        return $this->container['deletedTime'];
    }

    /**
    * Sets deletedTime
    *
    * @param int|null $deletedTime 删除时间。
    *
    * @return $this
    */
    public function setDeletedTime($deletedTime)
    {
        $this->container['deletedTime'] = $deletedTime;
        return $this;
    }

    /**
    * Gets promSpecConfig
    *  promSpecConfig
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel|null
    */
    public function getPromSpecConfig()
    {
        return $this->container['promSpecConfig'];
    }

    /**
    * Sets promSpecConfig
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\PromConfigModel|null $promSpecConfig promSpecConfig
    *
    * @return $this
    */
    public function setPromSpecConfig($promSpecConfig)
    {
        $this->container['promSpecConfig'] = $promSpecConfig;
        return $this;
    }

    /**
    * Gets cceSpecConfig
    *  Prometheus实例所属CCE特殊配置。
    *
    * @return string|null
    */
    public function getCceSpecConfig()
    {
        return $this->container['cceSpecConfig'];
    }

    /**
    * Sets cceSpecConfig
    *
    * @param string|null $cceSpecConfig Prometheus实例所属CCE特殊配置。
    *
    * @return $this
    */
    public function setCceSpecConfig($cceSpecConfig)
    {
        $this->container['cceSpecConfig'] = $cceSpecConfig;
        return $this;
    }

    /**
    * Gets application
    *  application
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\ApplicationModel|null
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\ApplicationModel|null $application application
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
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

