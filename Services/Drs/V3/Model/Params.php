<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Params implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareResult  参数对比结果
    * dataType  参数类型 figure，string
    * group  分组。 - common-常规参数 - performance-性能参数
    * key  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    * needRestart  是否需要重启
    * sourceValue  源数据库参数值
    * targetValue  目标数据库参数值
    * valueRange  参数范围
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareResult' => 'string',
            'dataType' => 'string',
            'group' => 'string',
            'key' => 'string',
            'needRestart' => 'string',
            'sourceValue' => 'string',
            'targetValue' => 'string',
            'valueRange' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareResult  参数对比结果
    * dataType  参数类型 figure，string
    * group  分组。 - common-常规参数 - performance-性能参数
    * key  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    * needRestart  是否需要重启
    * sourceValue  源数据库参数值
    * targetValue  目标数据库参数值
    * valueRange  参数范围
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareResult' => null,
        'dataType' => null,
        'group' => null,
        'key' => null,
        'needRestart' => null,
        'sourceValue' => null,
        'targetValue' => null,
        'valueRange' => null,
        'errorCode' => null,
        'errorMessage' => null
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
    * compareResult  参数对比结果
    * dataType  参数类型 figure，string
    * group  分组。 - common-常规参数 - performance-性能参数
    * key  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    * needRestart  是否需要重启
    * sourceValue  源数据库参数值
    * targetValue  目标数据库参数值
    * valueRange  参数范围
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareResult' => 'compare_result',
            'dataType' => 'data_type',
            'group' => 'group',
            'key' => 'key',
            'needRestart' => 'need_restart',
            'sourceValue' => 'source_value',
            'targetValue' => 'target_value',
            'valueRange' => 'value_range',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareResult  参数对比结果
    * dataType  参数类型 figure，string
    * group  分组。 - common-常规参数 - performance-性能参数
    * key  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    * needRestart  是否需要重启
    * sourceValue  源数据库参数值
    * targetValue  目标数据库参数值
    * valueRange  参数范围
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'compareResult' => 'setCompareResult',
            'dataType' => 'setDataType',
            'group' => 'setGroup',
            'key' => 'setKey',
            'needRestart' => 'setNeedRestart',
            'sourceValue' => 'setSourceValue',
            'targetValue' => 'setTargetValue',
            'valueRange' => 'setValueRange',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareResult  参数对比结果
    * dataType  参数类型 figure，string
    * group  分组。 - common-常规参数 - performance-性能参数
    * key  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    * needRestart  是否需要重启
    * sourceValue  源数据库参数值
    * targetValue  目标数据库参数值
    * valueRange  参数范围
    * errorCode  错误码
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'compareResult' => 'getCompareResult',
            'dataType' => 'getDataType',
            'group' => 'getGroup',
            'key' => 'getKey',
            'needRestart' => 'getNeedRestart',
            'sourceValue' => 'getSourceValue',
            'targetValue' => 'getTargetValue',
            'valueRange' => 'getValueRange',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage'
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
    const COMPARE_RESULT_TRUE = 'true';
    const COMPARE_RESULT_FALSE = 'false';
    const GROUP_COMMON = 'common';
    const GROUP_PERFORMANCE = 'performance';
    const NEED_RESTART_TRUE = 'true';
    const NEED_RESTART_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareResultAllowableValues()
    {
        return [
            self::COMPARE_RESULT_TRUE,
            self::COMPARE_RESULT_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupAllowableValues()
    {
        return [
            self::GROUP_COMMON,
            self::GROUP_PERFORMANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeedRestartAllowableValues()
    {
        return [
            self::NEED_RESTART_TRUE,
            self::NEED_RESTART_FALSE,
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
        $this->container['compareResult'] = isset($data['compareResult']) ? $data['compareResult'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['sourceValue'] = isset($data['sourceValue']) ? $data['sourceValue'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCompareResultAllowableValues();
                if (!is_null($this->container['compareResult']) && !in_array($this->container['compareResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getGroupAllowableValues();
                if (!is_null($this->container['group']) && !in_array($this->container['group'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'group', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeedRestartAllowableValues();
                if (!is_null($this->container['needRestart']) && !in_array($this->container['needRestart'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'needRestart', must be one of '%s'",
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
    * Gets compareResult
    *  参数对比结果
    *
    * @return string|null
    */
    public function getCompareResult()
    {
        return $this->container['compareResult'];
    }

    /**
    * Sets compareResult
    *
    * @param string|null $compareResult 参数对比结果
    *
    * @return $this
    */
    public function setCompareResult($compareResult)
    {
        $this->container['compareResult'] = $compareResult;
        return $this;
    }

    /**
    * Gets dataType
    *  参数类型 figure，string
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 参数类型 figure，string
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets group
    *  分组。 - common-常规参数 - performance-性能参数
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组。 - common-常规参数 - performance-性能参数
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets key
    *  参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 参数名 binlog_cache_size，binlog_stmt_cache_size，bulk_insert_buffer_size，character_set_server，collation_server...
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets needRestart
    *  是否需要重启
    *
    * @return string|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param string|null $needRestart 是否需要重启
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets sourceValue
    *  源数据库参数值
    *
    * @return string|null
    */
    public function getSourceValue()
    {
        return $this->container['sourceValue'];
    }

    /**
    * Sets sourceValue
    *
    * @param string|null $sourceValue 源数据库参数值
    *
    * @return $this
    */
    public function setSourceValue($sourceValue)
    {
        $this->container['sourceValue'] = $sourceValue;
        return $this;
    }

    /**
    * Gets targetValue
    *  目标数据库参数值
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue 目标数据库参数值
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数范围
    *
    * @return string|null
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string|null $valueRange 参数范围
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

