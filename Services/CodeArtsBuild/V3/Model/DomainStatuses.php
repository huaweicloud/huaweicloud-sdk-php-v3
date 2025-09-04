<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainStatuses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainStatuses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * freeQuota  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * freePackageQuota  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * status  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isFederation  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isWhitelist  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * region  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainType  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainBusinessType  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainMaliciousDockerArgs  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * allowCustomEnv  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * specThreshold  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'freeQuota' => 'bool',
            'freePackageQuota' => 'bool',
            'status' => 'int',
            'isFederation' => 'int',
            'isWhitelist' => 'int',
            'region' => 'string',
            'packageType' => 'string',
            'domainType' => 'int',
            'domainBusinessType' => 'string',
            'domainMaliciousDockerArgs' => 'string',
            'allowCustomEnv' => 'int',
            'specThreshold' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * freeQuota  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * freePackageQuota  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * status  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isFederation  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isWhitelist  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * region  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainType  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainBusinessType  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainMaliciousDockerArgs  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * allowCustomEnv  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * specThreshold  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'domainId' => null,
        'domainName' => null,
        'freeQuota' => null,
        'freePackageQuota' => null,
        'status' => null,
        'isFederation' => null,
        'isWhitelist' => null,
        'region' => null,
        'packageType' => null,
        'domainType' => null,
        'domainBusinessType' => null,
        'domainMaliciousDockerArgs' => null,
        'allowCustomEnv' => null,
        'specThreshold' => null
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
    * serviceName  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * freeQuota  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * freePackageQuota  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * status  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isFederation  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isWhitelist  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * region  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainType  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainBusinessType  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainMaliciousDockerArgs  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * allowCustomEnv  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * specThreshold  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'freeQuota' => 'free_quota',
            'freePackageQuota' => 'free_package_quota',
            'status' => 'status',
            'isFederation' => 'is_federation',
            'isWhitelist' => 'is_whitelist',
            'region' => 'region',
            'packageType' => 'package_type',
            'domainType' => 'domain_type',
            'domainBusinessType' => 'domain_business_type',
            'domainMaliciousDockerArgs' => 'domain_malicious_docker_args',
            'allowCustomEnv' => 'allow_custom_env',
            'specThreshold' => 'spec_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * freeQuota  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * freePackageQuota  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * status  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isFederation  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isWhitelist  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * region  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainType  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainBusinessType  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainMaliciousDockerArgs  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * allowCustomEnv  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * specThreshold  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'freeQuota' => 'setFreeQuota',
            'freePackageQuota' => 'setFreePackageQuota',
            'status' => 'setStatus',
            'isFederation' => 'setIsFederation',
            'isWhitelist' => 'setIsWhitelist',
            'region' => 'setRegion',
            'packageType' => 'setPackageType',
            'domainType' => 'setDomainType',
            'domainBusinessType' => 'setDomainBusinessType',
            'domainMaliciousDockerArgs' => 'setDomainMaliciousDockerArgs',
            'allowCustomEnv' => 'setAllowCustomEnv',
            'specThreshold' => 'setSpecThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    * domainId  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * freeQuota  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * freePackageQuota  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    * status  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isFederation  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * isWhitelist  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * region  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainType  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainBusinessType  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * domainMaliciousDockerArgs  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * allowCustomEnv  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    * specThreshold  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'freeQuota' => 'getFreeQuota',
            'freePackageQuota' => 'getFreePackageQuota',
            'status' => 'getStatus',
            'isFederation' => 'getIsFederation',
            'isWhitelist' => 'getIsWhitelist',
            'region' => 'getRegion',
            'packageType' => 'getPackageType',
            'domainType' => 'getDomainType',
            'domainBusinessType' => 'getDomainBusinessType',
            'domainMaliciousDockerArgs' => 'getDomainMaliciousDockerArgs',
            'allowCustomEnv' => 'getAllowCustomEnv',
            'specThreshold' => 'getSpecThreshold'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['freeQuota'] = isset($data['freeQuota']) ? $data['freeQuota'] : null;
        $this->container['freePackageQuota'] = isset($data['freePackageQuota']) ? $data['freePackageQuota'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isFederation'] = isset($data['isFederation']) ? $data['isFederation'] : null;
        $this->container['isWhitelist'] = isset($data['isWhitelist']) ? $data['isWhitelist'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['domainBusinessType'] = isset($data['domainBusinessType']) ? $data['domainBusinessType'] : null;
        $this->container['domainMaliciousDockerArgs'] = isset($data['domainMaliciousDockerArgs']) ? $data['domainMaliciousDockerArgs'] : null;
        $this->container['allowCustomEnv'] = isset($data['allowCustomEnv']) ? $data['allowCustomEnv'] : null;
        $this->container['specThreshold'] = isset($data['specThreshold']) ? $data['specThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets serviceName
    *  **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName **参数解释**： 服务名。 **约束限制**： 不涉及。 **取值范围**： 默认CodeCI。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**： 租户id。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释**： 租户名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets freeQuota
    *  **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    *
    * @return bool|null
    */
    public function getFreeQuota()
    {
        return $this->container['freeQuota'];
    }

    /**
    * Sets freeQuota
    *
    * @param bool|null $freeQuota **参数解释**： freeQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    *
    * @return $this
    */
    public function setFreeQuota($freeQuota)
    {
        $this->container['freeQuota'] = $freeQuota;
        return $this;
    }

    /**
    * Gets freePackageQuota
    *  **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    *
    * @return bool|null
    */
    public function getFreePackageQuota()
    {
        return $this->container['freePackageQuota'];
    }

    /**
    * Sets freePackageQuota
    *
    * @param bool|null $freePackageQuota **参数解释**： freePackageQuota。 **约束限制**： 不涉及。 **取值范围**： true或false。
    *
    * @return $this
    */
    public function setFreePackageQuota($freePackageQuota)
    {
        $this->container['freePackageQuota'] = $freePackageQuota;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 状态。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isFederation
    *  **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getIsFederation()
    {
        return $this->container['isFederation'];
    }

    /**
    * Sets isFederation
    *
    * @param int|null $isFederation **参数解释**： isFederation。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsFederation($isFederation)
    {
        $this->container['isFederation'] = $isFederation;
        return $this;
    }

    /**
    * Gets isWhitelist
    *  **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getIsWhitelist()
    {
        return $this->container['isWhitelist'];
    }

    /**
    * Sets isWhitelist
    *
    * @param int|null $isWhitelist **参数解释**： 白名单标识。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsWhitelist($isWhitelist)
    {
        $this->container['isWhitelist'] = $isWhitelist;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 地区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数解释**： 包类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets domainType
    *  **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param int|null $domainType **参数解释**： 租户类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets domainBusinessType
    *  **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainBusinessType()
    {
        return $this->container['domainBusinessType'];
    }

    /**
    * Sets domainBusinessType
    *
    * @param string|null $domainBusinessType **参数解释**： 租户业务类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainBusinessType($domainBusinessType)
    {
        $this->container['domainBusinessType'] = $domainBusinessType;
        return $this;
    }

    /**
    * Gets domainMaliciousDockerArgs
    *  **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainMaliciousDockerArgs()
    {
        return $this->container['domainMaliciousDockerArgs'];
    }

    /**
    * Sets domainMaliciousDockerArgs
    *
    * @param string|null $domainMaliciousDockerArgs **参数解释**： domainMaliciousDockerArgs。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainMaliciousDockerArgs($domainMaliciousDockerArgs)
    {
        $this->container['domainMaliciousDockerArgs'] = $domainMaliciousDockerArgs;
        return $this;
    }

    /**
    * Gets allowCustomEnv
    *  **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAllowCustomEnv()
    {
        return $this->container['allowCustomEnv'];
    }

    /**
    * Sets allowCustomEnv
    *
    * @param int|null $allowCustomEnv **参数解释**： 允许自定义环境数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAllowCustomEnv($allowCustomEnv)
    {
        $this->container['allowCustomEnv'] = $allowCustomEnv;
        return $this;
    }

    /**
    * Gets specThreshold
    *  **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSpecThreshold()
    {
        return $this->container['specThreshold'];
    }

    /**
    * Sets specThreshold
    *
    * @param string|null $specThreshold **参数解释**： 默认的加速阈值注入。 **约束限制**： 不涉及。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpecThreshold($specThreshold)
    {
        $this->container['specThreshold'] = $specThreshold;
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

