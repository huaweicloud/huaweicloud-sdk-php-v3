<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlStartRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlStartRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * saveDays  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    * storageMode  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    * isExcludeSysUser  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'saveDays' => 'int',
            'storageMode' => 'string',
            'isExcludeSysUser' => 'bool',
            'ltsConfig' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsInfoOption',
            'sqlTypeRange' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeConfigOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * saveDays  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    * storageMode  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    * isExcludeSysUser  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'saveDays' => null,
        'storageMode' => null,
        'isExcludeSysUser' => null,
        'ltsConfig' => null,
        'sqlTypeRange' => null
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
    * saveDays  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    * storageMode  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    * isExcludeSysUser  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'saveDays' => 'save_days',
            'storageMode' => 'storage_mode',
            'isExcludeSysUser' => 'is_exclude_sys_user',
            'ltsConfig' => 'lts_config',
            'sqlTypeRange' => 'sql_type_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * saveDays  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    * storageMode  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    * isExcludeSysUser  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'saveDays' => 'setSaveDays',
            'storageMode' => 'setStorageMode',
            'isExcludeSysUser' => 'setIsExcludeSysUser',
            'ltsConfig' => 'setLtsConfig',
            'sqlTypeRange' => 'setSqlTypeRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * saveDays  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    * storageMode  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    * isExcludeSysUser  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'saveDays' => 'getSaveDays',
            'storageMode' => 'getStorageMode',
            'isExcludeSysUser' => 'getIsExcludeSysUser',
            'ltsConfig' => 'getLtsConfig',
            'sqlTypeRange' => 'getSqlTypeRange'
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
    const STORAGE_MODE_LTS = 'LTS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageModeAllowableValues()
    {
        return [
            self::STORAGE_MODE_LTS,
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
        $this->container['saveDays'] = isset($data['saveDays']) ? $data['saveDays'] : null;
        $this->container['storageMode'] = isset($data['storageMode']) ? $data['storageMode'] : null;
        $this->container['isExcludeSysUser'] = isset($data['isExcludeSysUser']) ? $data['isExcludeSysUser'] : null;
        $this->container['ltsConfig'] = isset($data['ltsConfig']) ? $data['ltsConfig'] : null;
        $this->container['sqlTypeRange'] = isset($data['sqlTypeRange']) ? $data['sqlTypeRange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['saveDays'] === null) {
            $invalidProperties[] = "'saveDays' can't be null";
        }
            if (($this->container['saveDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'saveDays', must be smaller than or equal to 30.";
            }
            if (($this->container['saveDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'saveDays', must be bigger than or equal to 1.";
            }
        if ($this->container['storageMode'] === null) {
            $invalidProperties[] = "'storageMode' can't be null";
        }
            $allowedValues = $this->getStorageModeAllowableValues();
                if (!is_null($this->container['storageMode']) && !in_array($this->container['storageMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ltsConfig'] === null) {
            $invalidProperties[] = "'ltsConfig' can't be null";
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
    * Gets saveDays
    *  **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    *
    * @return int
    */
    public function getSaveDays()
    {
        return $this->container['saveDays'];
    }

    /**
    * Sets saveDays
    *
    * @param int $saveDays **参数解释**: 全量SQL采集数据最大保留天数。 **约束限制**: 不涉及。 **取值范围**: [1, 30] **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSaveDays($saveDays)
    {
        $this->container['saveDays'] = $saveDays;
        return $this;
    }

    /**
    * Gets storageMode
    *  **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getStorageMode()
    {
        return $this->container['storageMode'];
    }

    /**
    * Sets storageMode
    *
    * @param string $storageMode **参数解释**: 存储类型。 **约束限制**: 公有云场景，只支持LTS云日志服务存储。 **取值范围**: - LTS：LTS云日志服务。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setStorageMode($storageMode)
    {
        $this->container['storageMode'] = $storageMode;
        return $this;
    }

    /**
    * Gets isExcludeSysUser
    *  **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsExcludeSysUser()
    {
        return $this->container['isExcludeSysUser'];
    }

    /**
    * Sets isExcludeSysUser
    *
    * @param bool|null $isExcludeSysUser **参数解释**: 是否过滤系统用户。 **约束限制**: 不涉及。 **取值范围**: - true：过滤系统用户。 - false：不过滤系统用户。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setIsExcludeSysUser($isExcludeSysUser)
    {
        $this->container['isExcludeSysUser'] = $isExcludeSysUser;
        return $this;
    }

    /**
    * Gets ltsConfig
    *  ltsConfig
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsInfoOption
    */
    public function getLtsConfig()
    {
        return $this->container['ltsConfig'];
    }

    /**
    * Sets ltsConfig
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsInfoOption $ltsConfig ltsConfig
    *
    * @return $this
    */
    public function setLtsConfig($ltsConfig)
    {
        $this->container['ltsConfig'] = $ltsConfig;
        return $this;
    }

    /**
    * Gets sqlTypeRange
    *  **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeConfigOption[]|null
    */
    public function getSqlTypeRange()
    {
        return $this->container['sqlTypeRange'];
    }

    /**
    * Sets sqlTypeRange
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeConfigOption[]|null $sqlTypeRange **参数解释**: SQL采集类型列表。默认取值[]，表示采集所有SQL语句。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setSqlTypeRange($sqlTypeRange)
    {
        $this->container['sqlTypeRange'] = $sqlTypeRange;
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

