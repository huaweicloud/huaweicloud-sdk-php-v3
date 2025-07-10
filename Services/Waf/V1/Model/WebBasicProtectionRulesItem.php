<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebBasicProtectionRulesItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebBasicProtectionRulesItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    * description  **参数解释：** 规则描述 **取值范围：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **取值范围：** 不涉及
    * riskLevel  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    * applicationType  **参数解释：** 应用类型 **取值范围：** 不涉及
    * protectionType  **参数解释：** 防护类型 **取值范围：** 不涉及
    * effectiveTime  **参数解释：** 生效时间 **取值范围：** 不涉及
    * createTime  **参数解释：** 创建时间 **取值范围：** 不涉及
    * updateTime  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'cveNumber' => 'string',
            'riskLevel' => 'int',
            'applicationType' => 'string',
            'protectionType' => 'string',
            'effectiveTime' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    * description  **参数解释：** 规则描述 **取值范围：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **取值范围：** 不涉及
    * riskLevel  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    * applicationType  **参数解释：** 应用类型 **取值范围：** 不涉及
    * protectionType  **参数解释：** 防护类型 **取值范围：** 不涉及
    * effectiveTime  **参数解释：** 生效时间 **取值范围：** 不涉及
    * createTime  **参数解释：** 创建时间 **取值范围：** 不涉及
    * updateTime  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'cveNumber' => null,
        'riskLevel' => 'int32',
        'applicationType' => null,
        'protectionType' => null,
        'effectiveTime' => 'int64',
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    * description  **参数解释：** 规则描述 **取值范围：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **取值范围：** 不涉及
    * riskLevel  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    * applicationType  **参数解释：** 应用类型 **取值范围：** 不涉及
    * protectionType  **参数解释：** 防护类型 **取值范围：** 不涉及
    * effectiveTime  **参数解释：** 生效时间 **取值范围：** 不涉及
    * createTime  **参数解释：** 创建时间 **取值范围：** 不涉及
    * updateTime  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'cveNumber' => 'cve_number',
            'riskLevel' => 'risk_level',
            'applicationType' => 'application_type',
            'protectionType' => 'protection_type',
            'effectiveTime' => 'effective_time',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    * description  **参数解释：** 规则描述 **取值范围：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **取值范围：** 不涉及
    * riskLevel  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    * applicationType  **参数解释：** 应用类型 **取值范围：** 不涉及
    * protectionType  **参数解释：** 防护类型 **取值范围：** 不涉及
    * effectiveTime  **参数解释：** 生效时间 **取值范围：** 不涉及
    * createTime  **参数解释：** 创建时间 **取值范围：** 不涉及
    * updateTime  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'cveNumber' => 'setCveNumber',
            'riskLevel' => 'setRiskLevel',
            'applicationType' => 'setApplicationType',
            'protectionType' => 'setProtectionType',
            'effectiveTime' => 'setEffectiveTime',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    * description  **参数解释：** 规则描述 **取值范围：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **取值范围：** 不涉及
    * riskLevel  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    * applicationType  **参数解释：** 应用类型 **取值范围：** 不涉及
    * protectionType  **参数解释：** 防护类型 **取值范围：** 不涉及
    * effectiveTime  **参数解释：** 生效时间 **取值范围：** 不涉及
    * createTime  **参数解释：** 创建时间 **取值范围：** 不涉及
    * updateTime  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'cveNumber' => 'getCveNumber',
            'riskLevel' => 'getRiskLevel',
            'applicationType' => 'getApplicationType',
            'protectionType' => 'getProtectionType',
            'effectiveTime' => 'getEffectiveTime',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const RISK_LEVEL_1 = 1;
    const RISK_LEVEL_2 = 2;
    const RISK_LEVEL_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_1,
            self::RISK_LEVEL_2,
            self::RISK_LEVEL_3,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cveNumber'] = isset($data['cveNumber']) ? $data['cveNumber'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['applicationType'] = isset($data['applicationType']) ? $data['applicationType'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
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
    *  **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 规则的ID，规则的唯一标识 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 规则描述 **取值范围：** 不涉及
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
    * @param string|null $description **参数解释：** 规则描述 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cveNumber
    *  **参数解释：** CVE编号 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCveNumber()
    {
        return $this->container['cveNumber'];
    }

    /**
    * Sets cveNumber
    *
    * @param string|null $cveNumber **参数解释：** CVE编号 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCveNumber($cveNumber)
    {
        $this->container['cveNumber'] = $cveNumber;
        return $this;
    }

    /**
    * Gets riskLevel
    *  **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel **参数解释：** 危险等级 - 1：高危 - 2：中危 - 3：低危  **取值范围：** - 1 - 2 - 3
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets applicationType
    *  **参数解释：** 应用类型 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getApplicationType()
    {
        return $this->container['applicationType'];
    }

    /**
    * Sets applicationType
    *
    * @param string|null $applicationType **参数解释：** 应用类型 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setApplicationType($applicationType)
    {
        $this->container['applicationType'] = $applicationType;
        return $this;
    }

    /**
    * Gets protectionType
    *  **参数解释：** 防护类型 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getProtectionType()
    {
        return $this->container['protectionType'];
    }

    /**
    * Sets protectionType
    *
    * @param string|null $protectionType **参数解释：** 防护类型 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setProtectionType($protectionType)
    {
        $this->container['protectionType'] = $protectionType;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  **参数解释：** 生效时间 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param int|null $effectiveTime **参数解释：** 生效时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释：** 创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释：** 更新时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

