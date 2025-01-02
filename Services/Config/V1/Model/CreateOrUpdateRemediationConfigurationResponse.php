<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrUpdateRemediationConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrUpdateRemediationConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * automatic  是否为自动修正。
    * targetType  合规规则修正执行的方式。
    * targetId  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    * targetRegionId  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    * targetProjectId  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    * staticParameter  修正执行的参数。
    * resourceParameter  resourceParameter
    * maximumAttempts  指定时间内修正的最大尝试次数。
    * retryAttemptSeconds  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    * authType  合规规则修正配置的权限方式。
    * authValue  合规规则修正配置的权限信息。
    * createdAt  修正配置的创建时间。
    * updatedAt  修正配置的更新时间。
    * createdBy  创建者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'automatic' => 'bool',
            'targetType' => 'string',
            'targetId' => 'string',
            'targetRegionId' => 'string',
            'targetProjectId' => 'string',
            'staticParameter' => '\HuaweiCloud\SDK\Config\V1\Model\RemediationStaticParameter[]',
            'resourceParameter' => '\HuaweiCloud\SDK\Config\V1\Model\RemediationResourceParameter',
            'maximumAttempts' => 'int',
            'retryAttemptSeconds' => 'int',
            'authType' => 'string',
            'authValue' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'createdBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * automatic  是否为自动修正。
    * targetType  合规规则修正执行的方式。
    * targetId  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    * targetRegionId  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    * targetProjectId  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    * staticParameter  修正执行的参数。
    * resourceParameter  resourceParameter
    * maximumAttempts  指定时间内修正的最大尝试次数。
    * retryAttemptSeconds  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    * authType  合规规则修正配置的权限方式。
    * authValue  合规规则修正配置的权限信息。
    * createdAt  修正配置的创建时间。
    * updatedAt  修正配置的更新时间。
    * createdBy  创建者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'automatic' => null,
        'targetType' => null,
        'targetId' => null,
        'targetRegionId' => null,
        'targetProjectId' => null,
        'staticParameter' => null,
        'resourceParameter' => null,
        'maximumAttempts' => null,
        'retryAttemptSeconds' => null,
        'authType' => null,
        'authValue' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'createdBy' => null
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
    * automatic  是否为自动修正。
    * targetType  合规规则修正执行的方式。
    * targetId  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    * targetRegionId  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    * targetProjectId  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    * staticParameter  修正执行的参数。
    * resourceParameter  resourceParameter
    * maximumAttempts  指定时间内修正的最大尝试次数。
    * retryAttemptSeconds  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    * authType  合规规则修正配置的权限方式。
    * authValue  合规规则修正配置的权限信息。
    * createdAt  修正配置的创建时间。
    * updatedAt  修正配置的更新时间。
    * createdBy  创建者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'automatic' => 'automatic',
            'targetType' => 'target_type',
            'targetId' => 'target_id',
            'targetRegionId' => 'target_region_id',
            'targetProjectId' => 'target_project_id',
            'staticParameter' => 'static_parameter',
            'resourceParameter' => 'resource_parameter',
            'maximumAttempts' => 'maximum_attempts',
            'retryAttemptSeconds' => 'retry_attempt_seconds',
            'authType' => 'auth_type',
            'authValue' => 'auth_value',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * automatic  是否为自动修正。
    * targetType  合规规则修正执行的方式。
    * targetId  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    * targetRegionId  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    * targetProjectId  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    * staticParameter  修正执行的参数。
    * resourceParameter  resourceParameter
    * maximumAttempts  指定时间内修正的最大尝试次数。
    * retryAttemptSeconds  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    * authType  合规规则修正配置的权限方式。
    * authValue  合规规则修正配置的权限信息。
    * createdAt  修正配置的创建时间。
    * updatedAt  修正配置的更新时间。
    * createdBy  创建者。
    *
    * @var string[]
    */
    protected static $setters = [
            'automatic' => 'setAutomatic',
            'targetType' => 'setTargetType',
            'targetId' => 'setTargetId',
            'targetRegionId' => 'setTargetRegionId',
            'targetProjectId' => 'setTargetProjectId',
            'staticParameter' => 'setStaticParameter',
            'resourceParameter' => 'setResourceParameter',
            'maximumAttempts' => 'setMaximumAttempts',
            'retryAttemptSeconds' => 'setRetryAttemptSeconds',
            'authType' => 'setAuthType',
            'authValue' => 'setAuthValue',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * automatic  是否为自动修正。
    * targetType  合规规则修正执行的方式。
    * targetId  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    * targetRegionId  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    * targetProjectId  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    * staticParameter  修正执行的参数。
    * resourceParameter  resourceParameter
    * maximumAttempts  指定时间内修正的最大尝试次数。
    * retryAttemptSeconds  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    * authType  合规规则修正配置的权限方式。
    * authValue  合规规则修正配置的权限信息。
    * createdAt  修正配置的创建时间。
    * updatedAt  修正配置的更新时间。
    * createdBy  创建者。
    *
    * @var string[]
    */
    protected static $getters = [
            'automatic' => 'getAutomatic',
            'targetType' => 'getTargetType',
            'targetId' => 'getTargetId',
            'targetRegionId' => 'getTargetRegionId',
            'targetProjectId' => 'getTargetProjectId',
            'staticParameter' => 'getStaticParameter',
            'resourceParameter' => 'getResourceParameter',
            'maximumAttempts' => 'getMaximumAttempts',
            'retryAttemptSeconds' => 'getRetryAttemptSeconds',
            'authType' => 'getAuthType',
            'authValue' => 'getAuthValue',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'createdBy' => 'getCreatedBy'
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
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetRegionId'] = isset($data['targetRegionId']) ? $data['targetRegionId'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['staticParameter'] = isset($data['staticParameter']) ? $data['staticParameter'] : null;
        $this->container['resourceParameter'] = isset($data['resourceParameter']) ? $data['resourceParameter'] : null;
        $this->container['maximumAttempts'] = isset($data['maximumAttempts']) ? $data['maximumAttempts'] : null;
        $this->container['retryAttemptSeconds'] = isset($data['retryAttemptSeconds']) ? $data['retryAttemptSeconds'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['authValue'] = isset($data['authValue']) ? $data['authValue'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 512)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['maximumAttempts']) && ($this->container['maximumAttempts'] > 25)) {
                $invalidProperties[] = "invalid value for 'maximumAttempts', must be smaller than or equal to 25.";
            }
            if (!is_null($this->container['maximumAttempts']) && ($this->container['maximumAttempts'] < 1)) {
                $invalidProperties[] = "invalid value for 'maximumAttempts', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['retryAttemptSeconds']) && ($this->container['retryAttemptSeconds'] > 3600)) {
                $invalidProperties[] = "invalid value for 'retryAttemptSeconds', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['retryAttemptSeconds']) && ($this->container['retryAttemptSeconds'] < 60)) {
                $invalidProperties[] = "invalid value for 'retryAttemptSeconds', must be bigger than or equal to 60.";
            }
            if (!is_null($this->container['authValue']) && (mb_strlen($this->container['authValue']) > 512)) {
                $invalidProperties[] = "invalid value for 'authValue', the character length must be smaller than or equal to 512.";
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
    * Gets automatic
    *  是否为自动修正。
    *
    * @return bool|null
    */
    public function getAutomatic()
    {
        return $this->container['automatic'];
    }

    /**
    * Sets automatic
    *
    * @param bool|null $automatic 是否为自动修正。
    *
    * @return $this
    */
    public function setAutomatic($automatic)
    {
        $this->container['automatic'] = $automatic;
        return $this;
    }

    /**
    * Gets targetType
    *  合规规则修正执行的方式。
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 合规规则修正执行的方式。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetId
    *  修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 修正执行的目标ID。如果修正方式为fgs，则该值为函数工作流的函数urn；如果修正方式为rfs，则该值为资源编排服务的模板name与版本号，两者以/分割，如果没有指定默认V1。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets targetRegionId
    *  修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    *
    * @return string|null
    */
    public function getTargetRegionId()
    {
        return $this->container['targetRegionId'];
    }

    /**
    * Sets targetRegionId
    *
    * @param string|null $targetRegionId 修正执行的目标的regionId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的regionId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_project_id字段则该字段必选。
    *
    * @return $this
    */
    public function setTargetRegionId($targetRegionId)
    {
        $this->container['targetRegionId'] = $targetRegionId;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId 修正执行的目标的projectId。如果修正方式为RFS，该字段为空则Config服务会默认配置北京四（中国站）或香港一（国际站）的主projectId；如果修正方式为FGS，该字段为空则Config服务会根据实例urn自动配置。指定target_region_id字段则该字段必选。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets staticParameter
    *  修正执行的参数。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\RemediationStaticParameter[]|null
    */
    public function getStaticParameter()
    {
        return $this->container['staticParameter'];
    }

    /**
    * Sets staticParameter
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\RemediationStaticParameter[]|null $staticParameter 修正执行的参数。
    *
    * @return $this
    */
    public function setStaticParameter($staticParameter)
    {
        $this->container['staticParameter'] = $staticParameter;
        return $this;
    }

    /**
    * Gets resourceParameter
    *  resourceParameter
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\RemediationResourceParameter|null
    */
    public function getResourceParameter()
    {
        return $this->container['resourceParameter'];
    }

    /**
    * Sets resourceParameter
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\RemediationResourceParameter|null $resourceParameter resourceParameter
    *
    * @return $this
    */
    public function setResourceParameter($resourceParameter)
    {
        $this->container['resourceParameter'] = $resourceParameter;
        return $this;
    }

    /**
    * Gets maximumAttempts
    *  指定时间内修正的最大尝试次数。
    *
    * @return int|null
    */
    public function getMaximumAttempts()
    {
        return $this->container['maximumAttempts'];
    }

    /**
    * Sets maximumAttempts
    *
    * @param int|null $maximumAttempts 指定时间内修正的最大尝试次数。
    *
    * @return $this
    */
    public function setMaximumAttempts($maximumAttempts)
    {
        $this->container['maximumAttempts'] = $maximumAttempts;
        return $this;
    }

    /**
    * Gets retryAttemptSeconds
    *  用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    *
    * @return int|null
    */
    public function getRetryAttemptSeconds()
    {
        return $this->container['retryAttemptSeconds'];
    }

    /**
    * Sets retryAttemptSeconds
    *
    * @param int|null $retryAttemptSeconds 用于防止循环修正的时间窗口，如果在指定时间内进行了自动修正的最大尝试次数，则将资源添加至修正例外。
    *
    * @return $this
    */
    public function setRetryAttemptSeconds($retryAttemptSeconds)
    {
        $this->container['retryAttemptSeconds'] = $retryAttemptSeconds;
        return $this;
    }

    /**
    * Gets authType
    *  合规规则修正配置的权限方式。
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 合规规则修正配置的权限方式。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets authValue
    *  合规规则修正配置的权限信息。
    *
    * @return string|null
    */
    public function getAuthValue()
    {
        return $this->container['authValue'];
    }

    /**
    * Sets authValue
    *
    * @param string|null $authValue 合规规则修正配置的权限信息。
    *
    * @return $this
    */
    public function setAuthValue($authValue)
    {
        $this->container['authValue'] = $authValue;
        return $this;
    }

    /**
    * Gets createdAt
    *  修正配置的创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 修正配置的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  修正配置的更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 修正配置的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建者。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建者。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

