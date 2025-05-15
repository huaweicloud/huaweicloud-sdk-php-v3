<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudConnectionCapability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudConnectionCapability';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * domainId  实例所属账号ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceType  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    * bandwidth  bandwidth
    * supportRegions  租户支持的REGION列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'resourceType' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Cc\V3\Model\BandwidthCapability',
            'supportRegions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * domainId  实例所属账号ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceType  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    * bandwidth  bandwidth
    * supportRegions  租户支持的REGION列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'resourceType' => null,
        'bandwidth' => null,
        'supportRegions' => null
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
    * id  实例ID。
    * domainId  实例所属账号ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceType  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    * bandwidth  bandwidth
    * supportRegions  租户支持的REGION列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'resourceType' => 'resource_type',
            'bandwidth' => 'bandwidth',
            'supportRegions' => 'support_regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * domainId  实例所属账号ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceType  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    * bandwidth  bandwidth
    * supportRegions  租户支持的REGION列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'resourceType' => 'setResourceType',
            'bandwidth' => 'setBandwidth',
            'supportRegions' => 'setSupportRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * domainId  实例所属账号ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceType  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    * bandwidth  bandwidth
    * supportRegions  租户支持的REGION列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'resourceType' => 'getResourceType',
            'bandwidth' => 'getBandwidth',
            'supportRegions' => 'getSupportRegions'
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
    const RESOURCE_TYPE_V2 = 'v2';
    const RESOURCE_TYPE_V3 = 'v3';
    const RESOURCE_TYPE_BILLING_MODE_PERIOD_REDUCE = 'billing_mode_period_reduce';
    const RESOURCE_TYPE_BILLING_MODE_DEMAND = 'billing_mode_demand';
    const RESOURCE_TYPE_BWP95 = 'bwp95';
    const RESOURCE_TYPE_BWP95_AVG = 'bwp95Avg';
    const RESOURCE_TYPE_NETWORK_QUALITY = 'network-quality';
    const RESOURCE_TYPE_ER = 'er';
    const RESOURCE_TYPE_DOMAIN_BANDWIDTH = 'domain_bandwidth';
    const RESOURCE_TYPE_IPV6 = 'ipv6';
    const RESOURCE_TYPE_IPV6_SUPPORT_REGIONS = 'ipv6_support_regions';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_V2,
            self::RESOURCE_TYPE_V3,
            self::RESOURCE_TYPE_BILLING_MODE_PERIOD_REDUCE,
            self::RESOURCE_TYPE_BILLING_MODE_DEMAND,
            self::RESOURCE_TYPE_BWP95,
            self::RESOURCE_TYPE_BWP95_AVG,
            self::RESOURCE_TYPE_NETWORK_QUALITY,
            self::RESOURCE_TYPE_ER,
            self::RESOURCE_TYPE_DOMAIN_BANDWIDTH,
            self::RESOURCE_TYPE_IPV6,
            self::RESOURCE_TYPE_IPV6_SUPPORT_REGIONS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['supportRegions'] = isset($data['supportRegions']) ? $data['supportRegions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
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
    * Gets id
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets resourceType
    *  租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 租户能力类型，分为： 1. v2：V2的API 2. v3：V3的API 3. billing_mode_period_reduce: 实时降配（包周期） 4. billing_mode_demand: 按需计费（每小时统计打点） 5. bwp95: 按需计费-95（传统95计费方式） 6. bwp95Avg: 按需计费-日95（95峰值平均） 7. network-quality: 丢包和时延统计 8. er：是否支持ER 9. domain_bandwidth：租户带宽值 10. ipv6: 是否支持IPV6 11. ipv6_support_regions: IPV6支持的region列表
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\BandwidthCapability|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\BandwidthCapability|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets supportRegions
    *  租户支持的REGION列表。
    *
    * @return string[]|null
    */
    public function getSupportRegions()
    {
        return $this->container['supportRegions'];
    }

    /**
    * Sets supportRegions
    *
    * @param string[]|null $supportRegions 租户支持的REGION列表。
    *
    * @return $this
    */
    public function setSupportRegions($supportRegions)
    {
        $this->container['supportRegions'] = $supportRegions;
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

