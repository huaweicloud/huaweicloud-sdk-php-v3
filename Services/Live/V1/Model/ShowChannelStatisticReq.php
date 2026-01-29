<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowChannelStatisticReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowChannelStatisticReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  频道推流域名。
    * appName  组名或应用名。
    * id  频道ID。频道唯一标识，为必填项。
    * type  统计信息的类型，scte35。
    * scte35  scte35
    * regionType  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string',
            'type' => 'string',
            'scte35' => '\HuaweiCloud\SDK\Live\V1\Model\SCTE35StatisticReq',
            'regionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  频道推流域名。
    * appName  组名或应用名。
    * id  频道ID。频道唯一标识，为必填项。
    * type  统计信息的类型，scte35。
    * scte35  scte35
    * regionType  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'id' => null,
        'type' => null,
        'scte35' => null,
        'regionType' => null
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
    * domain  频道推流域名。
    * appName  组名或应用名。
    * id  频道ID。频道唯一标识，为必填项。
    * type  统计信息的类型，scte35。
    * scte35  scte35
    * regionType  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id',
            'type' => 'type',
            'scte35' => 'scte35',
            'regionType' => 'region_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  频道推流域名。
    * appName  组名或应用名。
    * id  频道ID。频道唯一标识，为必填项。
    * type  统计信息的类型，scte35。
    * scte35  scte35
    * regionType  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId',
            'type' => 'setType',
            'scte35' => 'setScte35',
            'regionType' => 'setRegionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  频道推流域名。
    * appName  组名或应用名。
    * id  频道ID。频道唯一标识，为必填项。
    * type  统计信息的类型，scte35。
    * scte35  scte35
    * regionType  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId',
            'type' => 'getType',
            'scte35' => 'getScte35',
            'regionType' => 'getRegionType'
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
    const TYPE_SCTE35 = 'scte35';
    const REGION_TYPE_MASTER = 'master';
    const REGION_TYPE_SLAVE = 'slave';
    const REGION_TYPE_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SCTE35,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegionTypeAllowableValues()
    {
        return [
            self::REGION_TYPE_MASTER,
            self::REGION_TYPE_SLAVE,
            self::REGION_TYPE_ALL,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scte35'] = isset($data['scte35']) ? $data['scte35'] : null;
        $this->container['regionType'] = isset($data['regionType']) ? $data['regionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 64)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRegionTypeAllowableValues();
                if (!is_null($this->container['regionType']) && !in_array($this->container['regionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'regionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['regionType']) && (mb_strlen($this->container['regionType']) > 6)) {
                $invalidProperties[] = "invalid value for 'regionType', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['regionType']) && (mb_strlen($this->container['regionType']) < 3)) {
                $invalidProperties[] = "invalid value for 'regionType', the character length must be bigger than or equal to 3.";
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
    * Gets domain
    *  频道推流域名。
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 频道推流域名。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名。
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 组名或应用名。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID。频道唯一标识，为必填项。
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
    * @param string $id 频道ID。频道唯一标识，为必填项。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  统计信息的类型，scte35。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 统计信息的类型，scte35。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scte35
    *  scte35
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\SCTE35StatisticReq|null
    */
    public function getScte35()
    {
        return $this->container['scte35'];
    }

    /**
    * Sets scte35
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\SCTE35StatisticReq|null $scte35 scte35
    *
    * @return $this
    */
    public function setScte35($scte35)
    {
        $this->container['scte35'] = $scte35;
        return $this;
    }

    /**
    * Gets regionType
    *  **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @return string|null
    */
    public function getRegionType()
    {
        return $this->container['regionType'];
    }

    /**
    * Sets regionType
    *
    * @param string|null $regionType **参数解释**： 频道对应的region类型，是主region，还是备region **约束限制**： 如果region_type不填，或是没有该字段，则按照主region处理 **取值范围**： - master: 主region - slave: 备region - all: 所有region
    *
    * @return $this
    */
    public function setRegionType($regionType)
    {
        $this->container['regionType'] = $regionType;
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

