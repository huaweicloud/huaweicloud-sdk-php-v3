<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailableNodeTypesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailableNodeTypesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * engineType  引擎类型
    * dbUseType  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    * jobDirection  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    * isUseSelloutInfo  是否查询资源售罄情况
    * isMultiWrite  是否是双主灾备
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'engineType' => 'string',
            'dbUseType' => 'string',
            'jobDirection' => 'string',
            'isUseSelloutInfo' => 'bool',
            'isMultiWrite' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * engineType  引擎类型
    * dbUseType  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    * jobDirection  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    * isUseSelloutInfo  是否查询资源售罄情况
    * isMultiWrite  是否是双主灾备
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'engineType' => null,
        'dbUseType' => null,
        'jobDirection' => null,
        'isUseSelloutInfo' => null,
        'isMultiWrite' => null
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
    * xLanguage  请求语言类型。
    * engineType  引擎类型
    * dbUseType  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    * jobDirection  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    * isUseSelloutInfo  是否查询资源售罄情况
    * isMultiWrite  是否是双主灾备
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'engineType' => 'engine_type',
            'dbUseType' => 'db_use_type',
            'jobDirection' => 'job_direction',
            'isUseSelloutInfo' => 'is_use_sellout_info',
            'isMultiWrite' => 'is_multi_write'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * engineType  引擎类型
    * dbUseType  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    * jobDirection  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    * isUseSelloutInfo  是否查询资源售罄情况
    * isMultiWrite  是否是双主灾备
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'engineType' => 'setEngineType',
            'dbUseType' => 'setDbUseType',
            'jobDirection' => 'setJobDirection',
            'isUseSelloutInfo' => 'setIsUseSelloutInfo',
            'isMultiWrite' => 'setIsMultiWrite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * engineType  引擎类型
    * dbUseType  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    * jobDirection  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    * isUseSelloutInfo  是否查询资源售罄情况
    * isMultiWrite  是否是双主灾备
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'engineType' => 'getEngineType',
            'dbUseType' => 'getDbUseType',
            'jobDirection' => 'getJobDirection',
            'isUseSelloutInfo' => 'getIsUseSelloutInfo',
            'isMultiWrite' => 'getIsMultiWrite'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbUseTypeAllowableValues()
    {
        return [
            self::DB_USE_TYPE_MIGRATION,
            self::DB_USE_TYPE_SYNC,
            self::DB_USE_TYPE_CLOUD_DATA_GUARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['isUseSelloutInfo'] = isset($data['isUseSelloutInfo']) ? $data['isUseSelloutInfo'] : null;
        $this->container['isMultiWrite'] = isset($data['isMultiWrite']) ? $data['isMultiWrite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['dbUseType'] === null) {
            $invalidProperties[] = "'dbUseType' can't be null";
        }
            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobDirection'] === null) {
            $invalidProperties[] = "'jobDirection' can't be null";
        }
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
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
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets dbUseType
    *  迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    *
    * @return string
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string $dbUseType 迁移场景。 - migration:实时迁移 - sync:实时同步 - cloudDataGuard:实时灾备
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向，up：入云 ，down：出云，non-dbs：自建。
    *
    * @return string
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string $jobDirection 迁移方向，up：入云 ，down：出云，non-dbs：自建。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets isUseSelloutInfo
    *  是否查询资源售罄情况
    *
    * @return bool|null
    */
    public function getIsUseSelloutInfo()
    {
        return $this->container['isUseSelloutInfo'];
    }

    /**
    * Sets isUseSelloutInfo
    *
    * @param bool|null $isUseSelloutInfo 是否查询资源售罄情况
    *
    * @return $this
    */
    public function setIsUseSelloutInfo($isUseSelloutInfo)
    {
        $this->container['isUseSelloutInfo'] = $isUseSelloutInfo;
        return $this;
    }

    /**
    * Gets isMultiWrite
    *  是否是双主灾备
    *
    * @return bool|null
    */
    public function getIsMultiWrite()
    {
        return $this->container['isMultiWrite'];
    }

    /**
    * Sets isMultiWrite
    *
    * @param bool|null $isMultiWrite 是否是双主灾备
    *
    * @return $this
    */
    public function setIsMultiWrite($isMultiWrite)
    {
        $this->container['isMultiWrite'] = $isMultiWrite;
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

