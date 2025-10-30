<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageBuildCommandRiskResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageBuildCommandRiskResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    * riskId  **参数解释** 风险id **取值范围** 字符长度1-64位
    * ruleId  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    * riskName  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    * riskLevel  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    * description  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    * imageType  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'latestScanTime' => 'int',
            'imageNum' => 'int',
            'riskId' => 'string',
            'ruleId' => 'string',
            'riskName' => 'string',
            'riskLevel' => 'string',
            'description' => 'string',
            'imageType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    * riskId  **参数解释** 风险id **取值范围** 字符长度1-64位
    * ruleId  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    * riskName  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    * riskLevel  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    * description  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    * imageType  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'latestScanTime' => 'int64',
        'imageNum' => 'int32',
        'riskId' => null,
        'ruleId' => null,
        'riskName' => null,
        'riskLevel' => null,
        'description' => null,
        'imageType' => null
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
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    * riskId  **参数解释** 风险id **取值范围** 字符长度1-64位
    * ruleId  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    * riskName  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    * riskLevel  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    * description  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    * imageType  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'latestScanTime' => 'latest_scan_time',
            'imageNum' => 'image_num',
            'riskId' => 'risk_id',
            'ruleId' => 'rule_id',
            'riskName' => 'risk_name',
            'riskLevel' => 'risk_level',
            'description' => 'description',
            'imageType' => 'image_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    * riskId  **参数解释** 风险id **取值范围** 字符长度1-64位
    * ruleId  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    * riskName  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    * riskLevel  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    * description  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    * imageType  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @var string[]
    */
    protected static $setters = [
            'latestScanTime' => 'setLatestScanTime',
            'imageNum' => 'setImageNum',
            'riskId' => 'setRiskId',
            'ruleId' => 'setRuleId',
            'riskName' => 'setRiskName',
            'riskLevel' => 'setRiskLevel',
            'description' => 'setDescription',
            'imageType' => 'setImageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * imageNum  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    * riskId  **参数解释** 风险id **取值范围** 字符长度1-64位
    * ruleId  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    * riskName  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    * riskLevel  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    * description  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    * imageType  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @var string[]
    */
    protected static $getters = [
            'latestScanTime' => 'getLatestScanTime',
            'imageNum' => 'getImageNum',
            'riskId' => 'getRiskId',
            'ruleId' => 'getRuleId',
            'riskName' => 'getRiskName',
            'riskLevel' => 'getRiskLevel',
            'description' => 'getDescription',
            'imageType' => 'getImageType'
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
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
        $this->container['riskId'] = isset($data['riskId']) ? $data['riskId'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['riskName'] = isset($data['riskName']) ? $data['riskName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskId']) && (mb_strlen($this->container['riskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskId']) && (mb_strlen($this->container['riskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) > 512)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
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
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets imageNum
    *  **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum **参数解释**: 受影响的镜像的数量，进行了当前构建指令的镜像数量 **取值范围**: 大小0-2097152
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
        return $this;
    }

    /**
    * Gets riskId
    *  **参数解释** 风险id **取值范围** 字符长度1-64位
    *
    * @return string|null
    */
    public function getRiskId()
    {
        return $this->container['riskId'];
    }

    /**
    * Sets riskId
    *
    * @param string|null $riskId **参数解释** 风险id **取值范围** 字符长度1-64位
    *
    * @return $this
    */
    public function setRiskId($riskId)
    {
        $this->container['riskId'] = $riskId;
        return $this;
    }

    /**
    * Gets ruleId
    *  **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId **参数解释** 风险检测规则id **取值范围** 字符长度1-64位
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets riskName
    *  **参数解释** 风险名称 **取值范围** 字符长度1-512位
    *
    * @return string|null
    */
    public function getRiskName()
    {
        return $this->container['riskName'];
    }

    /**
    * Sets riskName
    *
    * @param string|null $riskName **参数解释** 风险名称 **取值范围** 字符长度1-512位
    *
    * @return $this
    */
    public function setRiskName($riskName)
    {
        $this->container['riskName'] = $riskName;
        return $this;
    }

    /**
    * Gets riskLevel
    *  **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel **参数解释** 风险程度 **取值范围** - critical：严重。 - high：高危。 - medium：中危。 - low：低危。
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释** 风险描述 **取值范围** 字符长度0-65534位
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
    * @param string|null $description **参数解释** 风险描述 **取值范围** 字符长度0-65534位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释** 镜像类型 **取值范围** 字符长度1-32位
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
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

