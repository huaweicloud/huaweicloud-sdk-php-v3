<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataLevelCompareReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataLevelCompareReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conflictPolicy  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    * compareType  数据级对比类型，lines-行对比,contents-内容对比。
    * compareMode  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    * startTime  对比任务启动时间，取值为空代表立即启动。
    * compareObjectInfos  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    * compareObjectInfosWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conflictPolicy' => 'string',
            'compareType' => 'string',
            'compareMode' => 'string',
            'startTime' => 'string',
            'compareObjectInfos' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]',
            'compareObjectInfosWithToken' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conflictPolicy  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    * compareType  数据级对比类型，lines-行对比,contents-内容对比。
    * compareMode  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    * startTime  对比任务启动时间，取值为空代表立即启动。
    * compareObjectInfos  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    * compareObjectInfosWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conflictPolicy' => null,
        'compareType' => null,
        'compareMode' => null,
        'startTime' => null,
        'compareObjectInfos' => null,
        'compareObjectInfosWithToken' => null
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
    * conflictPolicy  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    * compareType  数据级对比类型，lines-行对比,contents-内容对比。
    * compareMode  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    * startTime  对比任务启动时间，取值为空代表立即启动。
    * compareObjectInfos  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    * compareObjectInfosWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conflictPolicy' => 'conflict_policy',
            'compareType' => 'compare_type',
            'compareMode' => 'compare_mode',
            'startTime' => 'start_time',
            'compareObjectInfos' => 'compare_object_infos',
            'compareObjectInfosWithToken' => 'compare_object_infos_with_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conflictPolicy  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    * compareType  数据级对比类型，lines-行对比,contents-内容对比。
    * compareMode  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    * startTime  对比任务启动时间，取值为空代表立即启动。
    * compareObjectInfos  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    * compareObjectInfosWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'conflictPolicy' => 'setConflictPolicy',
            'compareType' => 'setCompareType',
            'compareMode' => 'setCompareMode',
            'startTime' => 'setStartTime',
            'compareObjectInfos' => 'setCompareObjectInfos',
            'compareObjectInfosWithToken' => 'setCompareObjectInfosWithToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conflictPolicy  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    * compareType  数据级对比类型，lines-行对比,contents-内容对比。
    * compareMode  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    * startTime  对比任务启动时间，取值为空代表立即启动。
    * compareObjectInfos  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    * compareObjectInfosWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'conflictPolicy' => 'getConflictPolicy',
            'compareType' => 'getCompareType',
            'compareMode' => 'getCompareMode',
            'startTime' => 'getStartTime',
            'compareObjectInfos' => 'getCompareObjectInfos',
            'compareObjectInfosWithToken' => 'getCompareObjectInfosWithToken'
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
    const CONFLICT_POLICY_CANCEL = 'cancel';
    const CONFLICT_POLICY_KEEP = 'keep';
    const COMPARE_TYPE_LINES = 'lines';
    const COMPARE_TYPE_CONTENTS = 'contents';
    const COMPARE_MODE_QUICK_COMPARISON = 'quick_comparison';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConflictPolicyAllowableValues()
    {
        return [
            self::CONFLICT_POLICY_CANCEL,
            self::CONFLICT_POLICY_KEEP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareTypeAllowableValues()
    {
        return [
            self::COMPARE_TYPE_LINES,
            self::COMPARE_TYPE_CONTENTS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareModeAllowableValues()
    {
        return [
            self::COMPARE_MODE_QUICK_COMPARISON,
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
        $this->container['conflictPolicy'] = isset($data['conflictPolicy']) ? $data['conflictPolicy'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['compareMode'] = isset($data['compareMode']) ? $data['compareMode'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['compareObjectInfos'] = isset($data['compareObjectInfos']) ? $data['compareObjectInfos'] : null;
        $this->container['compareObjectInfosWithToken'] = isset($data['compareObjectInfosWithToken']) ? $data['compareObjectInfosWithToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conflictPolicy'] === null) {
            $invalidProperties[] = "'conflictPolicy' can't be null";
        }
            $allowedValues = $this->getConflictPolicyAllowableValues();
                if (!is_null($this->container['conflictPolicy']) && !in_array($this->container['conflictPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conflictPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
        }
            $allowedValues = $this->getCompareTypeAllowableValues();
                if (!is_null($this->container['compareType']) && !in_array($this->container['compareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCompareModeAllowableValues();
                if (!is_null($this->container['compareMode']) && !in_array($this->container['compareMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareMode', must be one of '%s'",
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
    * Gets conflictPolicy
    *  一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    *
    * @return string
    */
    public function getConflictPolicy()
    {
        return $this->container['conflictPolicy'];
    }

    /**
    * Sets conflictPolicy
    *
    * @param string $conflictPolicy 一个任务只允许有一个未完成的数据级对比任务，该字段决定对未完成数据级对比任务的处理方式。cancel-取消后重新创建,keep-保持未完成的不再创建。
    *
    * @return $this
    */
    public function setConflictPolicy($conflictPolicy)
    {
        $this->container['conflictPolicy'] = $conflictPolicy;
        return $this;
    }

    /**
    * Gets compareType
    *  数据级对比类型，lines-行对比,contents-内容对比。
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType 数据级对比类型，lines-行对比,contents-内容对比。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets compareMode
    *  数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    *
    * @return string|null
    */
    public function getCompareMode()
    {
        return $this->container['compareMode'];
    }

    /**
    * Sets compareMode
    *
    * @param string|null $compareMode 数据级对比模式，取值为空时需要在compare_object_infos或者compare_object_infos_with_token传对象信息，quick_comparison-快速对比，需要加入该功能的白名单才能使用。
    *
    * @return $this
    */
    public function setCompareMode($compareMode)
    {
        $this->container['compareMode'] = $compareMode;
        return $this;
    }

    /**
    * Gets startTime
    *  对比任务启动时间，取值为空代表立即启动。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 对比任务启动时间，取值为空代表立即启动。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets compareObjectInfos
    *  数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]|null
    */
    public function getCompareObjectInfos()
    {
        return $this->container['compareObjectInfos'];
    }

    /**
    * Sets compareObjectInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]|null $compareObjectInfos 数据级对比的对象。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @return $this
    */
    public function setCompareObjectInfos($compareObjectInfos)
    {
        $this->container['compareObjectInfos'] = $compareObjectInfos;
        return $this;
    }

    /**
    * Gets compareObjectInfosWithToken
    *  数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]|null
    */
    public function getCompareObjectInfosWithToken()
    {
        return $this->container['compareObjectInfosWithToken'];
    }

    /**
    * Sets compareObjectInfosWithToken
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]|null $compareObjectInfosWithToken 数据级对比的对象（Cassandra灾备专用，带token信息）。非“快速对比”模式时，compare_object_infos和compare_object_infos_with_token根据链路二选一传值，不允许都为空。
    *
    * @return $this
    */
    public function setCompareObjectInfosWithToken($compareObjectInfosWithToken)
    {
        $this->container['compareObjectInfosWithToken'] = $compareObjectInfosWithToken;
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

