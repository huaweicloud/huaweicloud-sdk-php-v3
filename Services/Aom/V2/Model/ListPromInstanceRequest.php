<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPromInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPromInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * promId  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * cceClusterEnable  cce集群开关。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'promId' => 'string',
            'promType' => 'string',
            'cceClusterEnable' => 'string',
            'promStatus' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * promId  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * cceClusterEnable  cce集群开关。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'promId' => null,
        'promType' => null,
        'cceClusterEnable' => null,
        'promStatus' => null,
        'enterpriseProjectId' => null
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
    * promId  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * cceClusterEnable  cce集群开关。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'promId' => 'prom_id',
            'promType' => 'prom_type',
            'cceClusterEnable' => 'cce_cluster_enable',
            'promStatus' => 'prom_status',
            'enterpriseProjectId' => 'Enterprise-Project-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * promId  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * cceClusterEnable  cce集群开关。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $setters = [
            'promId' => 'setPromId',
            'promType' => 'setPromType',
            'cceClusterEnable' => 'setCceClusterEnable',
            'promStatus' => 'setPromStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * promId  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
    * promType  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    * cceClusterEnable  cce集群开关。
    * promStatus  Prometheus实例状态。
    * enterpriseProjectId  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $getters = [
            'promId' => 'getPromId',
            'promType' => 'getPromType',
            'cceClusterEnable' => 'getCceClusterEnable',
            'promStatus' => 'getPromStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const PROM_TYPE__DEFAULT = 'default';
    const PROM_TYPE_ECS = 'ECS';
    const PROM_TYPE_VPC = 'VPC';
    const PROM_TYPE_CCE = 'CCE';
    const PROM_TYPE_REMOTE_WRITE = 'REMOTE_WRITE';
    const PROM_TYPE_KUBERNETES = 'KUBERNETES';
    const PROM_TYPE_CLOUD_SERVICE = 'CLOUD_SERVICE';
    const PROM_TYPE_ACROSS_ACCOUNT = 'ACROSS_ACCOUNT';
    const CCE_CLUSTER_ENABLE_TRUE = 'true';
    const CCE_CLUSTER_ENABLE_FALSE = 'false';
    const PROM_STATUS_DELETED = 'DELETED';
    const PROM_STATUS_NORMAL = 'NORMAL';
    const PROM_STATUS_ALL = 'ALL';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCceClusterEnableAllowableValues()
    {
        return [
            self::CCE_CLUSTER_ENABLE_TRUE,
            self::CCE_CLUSTER_ENABLE_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPromStatusAllowableValues()
    {
        return [
            self::PROM_STATUS_DELETED,
            self::PROM_STATUS_NORMAL,
            self::PROM_STATUS_ALL,
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
        $this->container['promId'] = isset($data['promId']) ? $data['promId'] : null;
        $this->container['promType'] = isset($data['promType']) ? $data['promType'] : null;
        $this->container['cceClusterEnable'] = isset($data['cceClusterEnable']) ? $data['cceClusterEnable'] : null;
        $this->container['promStatus'] = isset($data['promStatus']) ? $data['promStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPromTypeAllowableValues();
                if (!is_null($this->container['promType']) && !in_array($this->container['promType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'promType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCceClusterEnableAllowableValues();
                if (!is_null($this->container['cceClusterEnable']) && !in_array($this->container['cceClusterEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cceClusterEnable', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPromStatusAllowableValues();
                if (!is_null($this->container['promStatus']) && !in_array($this->container['promStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'promStatus', must be one of '%s'",
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
    * Gets promId
    *  Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
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
    * @param string|null $promId Prometheus实例id(prom_id与prom_type同时存在时，仅prom_id生效)。
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
    *  Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    *
    * @return string|null
    */
    public function getPromType()
    {
        return $this->container['promType'];
    }

    /**
    * Sets promType
    *
    * @param string|null $promType Prometheus实例类型（暂时不支持VPC、KUBERNETES）。
    *
    * @return $this
    */
    public function setPromType($promType)
    {
        $this->container['promType'] = $promType;
        return $this;
    }

    /**
    * Gets cceClusterEnable
    *  cce集群开关。
    *
    * @return string|null
    */
    public function getCceClusterEnable()
    {
        return $this->container['cceClusterEnable'];
    }

    /**
    * Sets cceClusterEnable
    *
    * @param string|null $cceClusterEnable cce集群开关。
    *
    * @return $this
    */
    public function setCceClusterEnable($cceClusterEnable)
    {
        $this->container['cceClusterEnable'] = $cceClusterEnable;
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
    *  企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
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
    * @param string|null $enterpriseProjectId 企业项目id。 - 查询单个企业项目下实例，填写企业项目id。 - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

