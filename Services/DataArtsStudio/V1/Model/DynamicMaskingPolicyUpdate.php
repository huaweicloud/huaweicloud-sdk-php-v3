<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DynamicMaskingPolicyUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DynamicMaskingPolicyUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  数据表中的字段名称。
    * columnType  数据表中字段的数据类型。
    * algorithmType  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    * algorithmDetail  动态脱敏策略算法详情。
    * algorithmDetailDto  algorithmDetailDto
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'columnType' => 'string',
            'algorithmType' => 'string',
            'algorithmDetail' => 'string',
            'algorithmDetailDto' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlgorithmDetailDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  数据表中的字段名称。
    * columnType  数据表中字段的数据类型。
    * algorithmType  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    * algorithmDetail  动态脱敏策略算法详情。
    * algorithmDetailDto  algorithmDetailDto
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'columnType' => null,
        'algorithmType' => null,
        'algorithmDetail' => null,
        'algorithmDetailDto' => null
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
    * columnName  数据表中的字段名称。
    * columnType  数据表中字段的数据类型。
    * algorithmType  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    * algorithmDetail  动态脱敏策略算法详情。
    * algorithmDetailDto  algorithmDetailDto
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'columnType' => 'column_type',
            'algorithmType' => 'algorithm_type',
            'algorithmDetail' => 'algorithm_detail',
            'algorithmDetailDto' => 'algorithm_detail_dto'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  数据表中的字段名称。
    * columnType  数据表中字段的数据类型。
    * algorithmType  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    * algorithmDetail  动态脱敏策略算法详情。
    * algorithmDetailDto  algorithmDetailDto
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'columnType' => 'setColumnType',
            'algorithmType' => 'setAlgorithmType',
            'algorithmDetail' => 'setAlgorithmDetail',
            'algorithmDetailDto' => 'setAlgorithmDetailDto'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  数据表中的字段名称。
    * columnType  数据表中字段的数据类型。
    * algorithmType  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    * algorithmDetail  动态脱敏策略算法详情。
    * algorithmDetailDto  algorithmDetailDto
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'columnType' => 'getColumnType',
            'algorithmType' => 'getAlgorithmType',
            'algorithmDetail' => 'getAlgorithmDetail',
            'algorithmDetailDto' => 'getAlgorithmDetailDto'
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['algorithmDetail'] = isset($data['algorithmDetail']) ? $data['algorithmDetail'] : null;
        $this->container['algorithmDetailDto'] = isset($data['algorithmDetailDto']) ? $data['algorithmDetailDto'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
        }
            if ((mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['columnType'] === null) {
            $invalidProperties[] = "'columnType' can't be null";
        }
            if ((mb_strlen($this->container['columnType']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['columnType']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['algorithmType']) && (mb_strlen($this->container['algorithmType']) > 64)) {
                $invalidProperties[] = "invalid value for 'algorithmType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['algorithmType']) && (mb_strlen($this->container['algorithmType']) < 1)) {
                $invalidProperties[] = "invalid value for 'algorithmType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['algorithmDetail']) && (mb_strlen($this->container['algorithmDetail']) > 128)) {
                $invalidProperties[] = "invalid value for 'algorithmDetail', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['algorithmDetail']) && (mb_strlen($this->container['algorithmDetail']) < 1)) {
                $invalidProperties[] = "invalid value for 'algorithmDetail', the character length must be bigger than or equal to 1.";
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
    * Gets columnName
    *  数据表中的字段名称。
    *
    * @return string
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string $columnName 数据表中的字段名称。
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets columnType
    *  数据表中字段的数据类型。
    *
    * @return string
    */
    public function getColumnType()
    {
        return $this->container['columnType'];
    }

    /**
    * Sets columnType
    *
    * @param string $columnType 数据表中字段的数据类型。
    *
    * @return $this
    */
    public function setColumnType($columnType)
    {
        $this->container['columnType'] = $columnType;
        return $this;
    }

    /**
    * Gets algorithmType
    *  具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 具体动态脱敏规则参数介绍请参见[动态脱敏规则介绍](dataartsstudio_01_1036.html)。 HIVE数据源动态脱敏算法 - MASK 掩盖英文字符和数字 - MASK_SHOW_LAST_4 保留后四位 - MASK_SHOW_FIRST_4 保留前四位 - MASK_HASH 哈希掩盖 - MASK_DATE_SHOW_YEAR 掩盖月份和日期 - MASK_NULL NULL掩盖  DWS数据源动态脱敏算法 - DWS_ALL_MASK 全掩码 - DWS_BACK_KEEP 保留后4位，其余脱敏为* - DWS_FRONT_KEEP 保留前2位，其余脱敏为* - DWS_SELF_CONFIG 需要输入开始位置、结束位置、脱敏字符传入detail结构体中，例如{\"start\": 1, \"end\": 2, \"string_target\": \"*\"}  [DLI数据源动态脱敏算法](tag:nohcs) - [MASK 掩盖英文字符和数字](tag:nohcs) - [MASK_SHOW_LAST_4 保留后四位](tag:nohcs) - [MASK_SHOW_FIRST_4 保留前四位](tag:nohcs) - [MASK_HASH 哈希掩盖](tag:nohcs) - [MASK_DATE_SHOW_YEAR 掩盖月份和日期](tag:nohcs) - [MASK_NULL NULL掩盖](tag:nohcs)
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets algorithmDetail
    *  动态脱敏策略算法详情。
    *
    * @return string|null
    */
    public function getAlgorithmDetail()
    {
        return $this->container['algorithmDetail'];
    }

    /**
    * Sets algorithmDetail
    *
    * @param string|null $algorithmDetail 动态脱敏策略算法详情。
    *
    * @return $this
    */
    public function setAlgorithmDetail($algorithmDetail)
    {
        $this->container['algorithmDetail'] = $algorithmDetail;
        return $this;
    }

    /**
    * Gets algorithmDetailDto
    *  algorithmDetailDto
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlgorithmDetailDTO|null
    */
    public function getAlgorithmDetailDto()
    {
        return $this->container['algorithmDetailDto'];
    }

    /**
    * Sets algorithmDetailDto
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlgorithmDetailDTO|null $algorithmDetailDto algorithmDetailDto
    *
    * @return $this
    */
    public function setAlgorithmDetailDto($algorithmDetailDto)
    {
        $this->container['algorithmDetailDto'] = $algorithmDetailDto;
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

