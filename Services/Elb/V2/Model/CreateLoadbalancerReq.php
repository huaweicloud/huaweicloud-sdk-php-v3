<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadbalancerReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadbalancerReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网IPv4子网ID
    * vipAddress  负载均衡器的虚拟IP。
    * provider  负载均衡器的供应者名称。只支持vlb
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * enterpriseProjectId  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'vipSubnetId' => 'string',
            'vipAddress' => 'string',
            'provider' => 'string',
            'adminStateUp' => 'bool',
            'enterpriseProjectId' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'prepaidOptions' => '\HuaweiCloud\SDK\Elb\V2\Model\PrepaidCreateOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网IPv4子网ID
    * vipAddress  负载均衡器的虚拟IP。
    * provider  负载均衡器的供应者名称。只支持vlb
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * enterpriseProjectId  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'vipSubnetId' => null,
        'vipAddress' => null,
        'provider' => null,
        'adminStateUp' => null,
        'enterpriseProjectId' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'prepaidOptions' => null
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
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网IPv4子网ID
    * vipAddress  负载均衡器的虚拟IP。
    * provider  负载均衡器的供应者名称。只支持vlb
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * enterpriseProjectId  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'vipSubnetId' => 'vip_subnet_id',
            'vipAddress' => 'vip_address',
            'provider' => 'provider',
            'adminStateUp' => 'admin_state_up',
            'enterpriseProjectId' => 'enterprise_project_id',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'prepaidOptions' => 'prepaid_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网IPv4子网ID
    * vipAddress  负载均衡器的虚拟IP。
    * provider  负载均衡器的供应者名称。只支持vlb
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * enterpriseProjectId  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'vipSubnetId' => 'setVipSubnetId',
            'vipAddress' => 'setVipAddress',
            'provider' => 'setProvider',
            'adminStateUp' => 'setAdminStateUp',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'prepaidOptions' => 'setPrepaidOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网IPv4子网ID
    * vipAddress  负载均衡器的虚拟IP。
    * provider  负载均衡器的供应者名称。只支持vlb
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * enterpriseProjectId  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'vipSubnetId' => 'getVipSubnetId',
            'vipAddress' => 'getVipAddress',
            'provider' => 'getProvider',
            'adminStateUp' => 'getAdminStateUp',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'prepaidOptions' => 'getPrepaidOptions'
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
    const PROVIDER_VLB = 'vlb';
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_VLB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vipSubnetId'] = isset($data['vipSubnetId']) ? $data['vipSubnetId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vipSubnetId'] === null) {
            $invalidProperties[] = "'vipSubnetId' can't be null";
        }
            $allowedValues = $this->getProviderAllowableValues();
                if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'provider', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be bigger than or equal to 0.";
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
    * Gets tenantId
    *  负载均衡器所在的项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 负载均衡器所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  负载均衡器名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 负载均衡器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  负载均衡器的描述信息
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
    * @param string|null $description 负载均衡器的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vipSubnetId
    *  负载均衡器所在的子网IPv4子网ID
    *
    * @return string
    */
    public function getVipSubnetId()
    {
        return $this->container['vipSubnetId'];
    }

    /**
    * Sets vipSubnetId
    *
    * @param string $vipSubnetId 负载均衡器所在的子网IPv4子网ID
    *
    * @return $this
    */
    public function setVipSubnetId($vipSubnetId)
    {
        $this->container['vipSubnetId'] = $vipSubnetId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的虚拟IP。
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress 负载均衡器的虚拟IP。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets provider
    *  负载均衡器的供应者名称。只支持vlb
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 负载均衡器的供应者名称。只支持vlb
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
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
    * @param string|null $enterpriseProjectId 企业项目ID。创建负载均衡器时，给负载均衡器绑定企业项目ID。取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理用户指南》。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason 设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets prepaidOptions
    *  prepaidOptions
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\PrepaidCreateOption|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\PrepaidCreateOption|null $prepaidOptions prepaidOptions
    *
    * @return $this
    */
    public function setPrepaidOptions($prepaidOptions)
    {
        $this->container['prepaidOptions'] = $prepaidOptions;
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

