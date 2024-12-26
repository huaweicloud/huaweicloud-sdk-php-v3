<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsRuleVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsRuleVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affectedApplication  affectedApplication
    * createTime  createTime
    * defaultStatus  defaultStatus
    * ipsCve  ipsCve
    * ipsGroup  ipsGroup
    * ipsId  ipsId
    * ipsLevel  ipsLevel
    * ipsName  ipsName
    * ipsRulesType  ipsRulesType
    * ipsStatus  ipsStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affectedApplication' => 'string',
            'createTime' => 'string',
            'defaultStatus' => 'string',
            'ipsCve' => 'string',
            'ipsGroup' => 'string',
            'ipsId' => 'string',
            'ipsLevel' => 'string',
            'ipsName' => 'string',
            'ipsRulesType' => 'string',
            'ipsStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affectedApplication  affectedApplication
    * createTime  createTime
    * defaultStatus  defaultStatus
    * ipsCve  ipsCve
    * ipsGroup  ipsGroup
    * ipsId  ipsId
    * ipsLevel  ipsLevel
    * ipsName  ipsName
    * ipsRulesType  ipsRulesType
    * ipsStatus  ipsStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affectedApplication' => null,
        'createTime' => null,
        'defaultStatus' => null,
        'ipsCve' => null,
        'ipsGroup' => null,
        'ipsId' => null,
        'ipsLevel' => null,
        'ipsName' => null,
        'ipsRulesType' => null,
        'ipsStatus' => null
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
    * affectedApplication  affectedApplication
    * createTime  createTime
    * defaultStatus  defaultStatus
    * ipsCve  ipsCve
    * ipsGroup  ipsGroup
    * ipsId  ipsId
    * ipsLevel  ipsLevel
    * ipsName  ipsName
    * ipsRulesType  ipsRulesType
    * ipsStatus  ipsStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affectedApplication' => 'affected_application',
            'createTime' => 'create_time',
            'defaultStatus' => 'default_status',
            'ipsCve' => 'ips_cve',
            'ipsGroup' => 'ips_group',
            'ipsId' => 'ips_id',
            'ipsLevel' => 'ips_level',
            'ipsName' => 'ips_name',
            'ipsRulesType' => 'ips_rules_type',
            'ipsStatus' => 'ips_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affectedApplication  affectedApplication
    * createTime  createTime
    * defaultStatus  defaultStatus
    * ipsCve  ipsCve
    * ipsGroup  ipsGroup
    * ipsId  ipsId
    * ipsLevel  ipsLevel
    * ipsName  ipsName
    * ipsRulesType  ipsRulesType
    * ipsStatus  ipsStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'affectedApplication' => 'setAffectedApplication',
            'createTime' => 'setCreateTime',
            'defaultStatus' => 'setDefaultStatus',
            'ipsCve' => 'setIpsCve',
            'ipsGroup' => 'setIpsGroup',
            'ipsId' => 'setIpsId',
            'ipsLevel' => 'setIpsLevel',
            'ipsName' => 'setIpsName',
            'ipsRulesType' => 'setIpsRulesType',
            'ipsStatus' => 'setIpsStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affectedApplication  affectedApplication
    * createTime  createTime
    * defaultStatus  defaultStatus
    * ipsCve  ipsCve
    * ipsGroup  ipsGroup
    * ipsId  ipsId
    * ipsLevel  ipsLevel
    * ipsName  ipsName
    * ipsRulesType  ipsRulesType
    * ipsStatus  ipsStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'affectedApplication' => 'getAffectedApplication',
            'createTime' => 'getCreateTime',
            'defaultStatus' => 'getDefaultStatus',
            'ipsCve' => 'getIpsCve',
            'ipsGroup' => 'getIpsGroup',
            'ipsId' => 'getIpsId',
            'ipsLevel' => 'getIpsLevel',
            'ipsName' => 'getIpsName',
            'ipsRulesType' => 'getIpsRulesType',
            'ipsStatus' => 'getIpsStatus'
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
    const DEFAULT_STATUS_OBSERVE = 'OBSERVE';
    const DEFAULT_STATUS_ENABLE = 'ENABLE';
    const DEFAULT_STATUS_CLOSE = 'CLOSE';
    const DEFAULT_STATUS__DEFAULT = 'DEFAULT';
    const DEFAULT_STATUS_ALL_DEFAULT = 'ALL_DEFAULT';
    const IPS_GROUP_OBSERVE = 'OBSERVE';
    const IPS_GROUP_STRICTLY = 'STRICTLY';
    const IPS_GROUP_MEDIUM = 'MEDIUM';
    const IPS_GROUP_LOW = 'LOW';
    const IPS_LEVEL_FATAL = 'FATAL';
    const IPS_LEVEL_HIGH = 'HIGH';
    const IPS_LEVEL_MEDIUM = 'MEDIUM';
    const IPS_LEVEL_LOW = 'LOW';
    const IPS_LEVEL_UNKNOWNS = 'UNKNOWNS';
    const IPS_STATUS_OBSERVE = 'OBSERVE';
    const IPS_STATUS_ENABLE = 'ENABLE';
    const IPS_STATUS_CLOSE = 'CLOSE';
    const IPS_STATUS__DEFAULT = 'DEFAULT';
    const IPS_STATUS_ALL_DEFAULT = 'ALL_DEFAULT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultStatusAllowableValues()
    {
        return [
            self::DEFAULT_STATUS_OBSERVE,
            self::DEFAULT_STATUS_ENABLE,
            self::DEFAULT_STATUS_CLOSE,
            self::DEFAULT_STATUS__DEFAULT,
            self::DEFAULT_STATUS_ALL_DEFAULT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpsGroupAllowableValues()
    {
        return [
            self::IPS_GROUP_OBSERVE,
            self::IPS_GROUP_STRICTLY,
            self::IPS_GROUP_MEDIUM,
            self::IPS_GROUP_LOW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpsLevelAllowableValues()
    {
        return [
            self::IPS_LEVEL_FATAL,
            self::IPS_LEVEL_HIGH,
            self::IPS_LEVEL_MEDIUM,
            self::IPS_LEVEL_LOW,
            self::IPS_LEVEL_UNKNOWNS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpsStatusAllowableValues()
    {
        return [
            self::IPS_STATUS_OBSERVE,
            self::IPS_STATUS_ENABLE,
            self::IPS_STATUS_CLOSE,
            self::IPS_STATUS__DEFAULT,
            self::IPS_STATUS_ALL_DEFAULT,
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
        $this->container['affectedApplication'] = isset($data['affectedApplication']) ? $data['affectedApplication'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['defaultStatus'] = isset($data['defaultStatus']) ? $data['defaultStatus'] : null;
        $this->container['ipsCve'] = isset($data['ipsCve']) ? $data['ipsCve'] : null;
        $this->container['ipsGroup'] = isset($data['ipsGroup']) ? $data['ipsGroup'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipsLevel'] = isset($data['ipsLevel']) ? $data['ipsLevel'] : null;
        $this->container['ipsName'] = isset($data['ipsName']) ? $data['ipsName'] : null;
        $this->container['ipsRulesType'] = isset($data['ipsRulesType']) ? $data['ipsRulesType'] : null;
        $this->container['ipsStatus'] = isset($data['ipsStatus']) ? $data['ipsStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDefaultStatusAllowableValues();
                if (!is_null($this->container['defaultStatus']) && !in_array($this->container['defaultStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIpsGroupAllowableValues();
                if (!is_null($this->container['ipsGroup']) && !in_array($this->container['ipsGroup'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipsGroup', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIpsLevelAllowableValues();
                if (!is_null($this->container['ipsLevel']) && !in_array($this->container['ipsLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipsLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIpsStatusAllowableValues();
                if (!is_null($this->container['ipsStatus']) && !in_array($this->container['ipsStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipsStatus', must be one of '%s'",
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
    * Gets affectedApplication
    *  affectedApplication
    *
    * @return string|null
    */
    public function getAffectedApplication()
    {
        return $this->container['affectedApplication'];
    }

    /**
    * Sets affectedApplication
    *
    * @param string|null $affectedApplication affectedApplication
    *
    * @return $this
    */
    public function setAffectedApplication($affectedApplication)
    {
        $this->container['affectedApplication'] = $affectedApplication;
        return $this;
    }

    /**
    * Gets createTime
    *  createTime
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime createTime
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets defaultStatus
    *  defaultStatus
    *
    * @return string|null
    */
    public function getDefaultStatus()
    {
        return $this->container['defaultStatus'];
    }

    /**
    * Sets defaultStatus
    *
    * @param string|null $defaultStatus defaultStatus
    *
    * @return $this
    */
    public function setDefaultStatus($defaultStatus)
    {
        $this->container['defaultStatus'] = $defaultStatus;
        return $this;
    }

    /**
    * Gets ipsCve
    *  ipsCve
    *
    * @return string|null
    */
    public function getIpsCve()
    {
        return $this->container['ipsCve'];
    }

    /**
    * Sets ipsCve
    *
    * @param string|null $ipsCve ipsCve
    *
    * @return $this
    */
    public function setIpsCve($ipsCve)
    {
        $this->container['ipsCve'] = $ipsCve;
        return $this;
    }

    /**
    * Gets ipsGroup
    *  ipsGroup
    *
    * @return string|null
    */
    public function getIpsGroup()
    {
        return $this->container['ipsGroup'];
    }

    /**
    * Sets ipsGroup
    *
    * @param string|null $ipsGroup ipsGroup
    *
    * @return $this
    */
    public function setIpsGroup($ipsGroup)
    {
        $this->container['ipsGroup'] = $ipsGroup;
        return $this;
    }

    /**
    * Gets ipsId
    *  ipsId
    *
    * @return string|null
    */
    public function getIpsId()
    {
        return $this->container['ipsId'];
    }

    /**
    * Sets ipsId
    *
    * @param string|null $ipsId ipsId
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets ipsLevel
    *  ipsLevel
    *
    * @return string|null
    */
    public function getIpsLevel()
    {
        return $this->container['ipsLevel'];
    }

    /**
    * Sets ipsLevel
    *
    * @param string|null $ipsLevel ipsLevel
    *
    * @return $this
    */
    public function setIpsLevel($ipsLevel)
    {
        $this->container['ipsLevel'] = $ipsLevel;
        return $this;
    }

    /**
    * Gets ipsName
    *  ipsName
    *
    * @return string|null
    */
    public function getIpsName()
    {
        return $this->container['ipsName'];
    }

    /**
    * Sets ipsName
    *
    * @param string|null $ipsName ipsName
    *
    * @return $this
    */
    public function setIpsName($ipsName)
    {
        $this->container['ipsName'] = $ipsName;
        return $this;
    }

    /**
    * Gets ipsRulesType
    *  ipsRulesType
    *
    * @return string|null
    */
    public function getIpsRulesType()
    {
        return $this->container['ipsRulesType'];
    }

    /**
    * Sets ipsRulesType
    *
    * @param string|null $ipsRulesType ipsRulesType
    *
    * @return $this
    */
    public function setIpsRulesType($ipsRulesType)
    {
        $this->container['ipsRulesType'] = $ipsRulesType;
        return $this;
    }

    /**
    * Gets ipsStatus
    *  ipsStatus
    *
    * @return string|null
    */
    public function getIpsStatus()
    {
        return $this->container['ipsStatus'];
    }

    /**
    * Sets ipsStatus
    *
    * @param string|null $ipsStatus ipsStatus
    *
    * @return $this
    */
    public function setIpsStatus($ipsStatus)
    {
        $this->container['ipsStatus'] = $ipsStatus;
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

