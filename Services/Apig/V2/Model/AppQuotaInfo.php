<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppQuotaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppQuotaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appQuotaId  凭据配额编号
    * name  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * callLimits  凭据配额的访问次数限制
    * timeUnit  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    * timeInterval  配额的限定时间值
    * remark  参数说明和描述
    * resetTime  首次配额重置时间点，不配置默认为首次调用时间计算
    * createTime  创建时间
    * boundAppNum  配额策略已绑定应用数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appQuotaId' => 'string',
            'name' => 'string',
            'callLimits' => 'int',
            'timeUnit' => 'string',
            'timeInterval' => 'int',
            'remark' => 'string',
            'resetTime' => 'string',
            'createTime' => '\DateTime',
            'boundAppNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appQuotaId  凭据配额编号
    * name  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * callLimits  凭据配额的访问次数限制
    * timeUnit  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    * timeInterval  配额的限定时间值
    * remark  参数说明和描述
    * resetTime  首次配额重置时间点，不配置默认为首次调用时间计算
    * createTime  创建时间
    * boundAppNum  配额策略已绑定应用数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appQuotaId' => null,
        'name' => null,
        'callLimits' => null,
        'timeUnit' => null,
        'timeInterval' => null,
        'remark' => null,
        'resetTime' => null,
        'createTime' => 'date-time',
        'boundAppNum' => null
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
    * appQuotaId  凭据配额编号
    * name  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * callLimits  凭据配额的访问次数限制
    * timeUnit  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    * timeInterval  配额的限定时间值
    * remark  参数说明和描述
    * resetTime  首次配额重置时间点，不配置默认为首次调用时间计算
    * createTime  创建时间
    * boundAppNum  配额策略已绑定应用数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appQuotaId' => 'app_quota_id',
            'name' => 'name',
            'callLimits' => 'call_limits',
            'timeUnit' => 'time_unit',
            'timeInterval' => 'time_interval',
            'remark' => 'remark',
            'resetTime' => 'reset_time',
            'createTime' => 'create_time',
            'boundAppNum' => 'bound_app_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appQuotaId  凭据配额编号
    * name  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * callLimits  凭据配额的访问次数限制
    * timeUnit  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    * timeInterval  配额的限定时间值
    * remark  参数说明和描述
    * resetTime  首次配额重置时间点，不配置默认为首次调用时间计算
    * createTime  创建时间
    * boundAppNum  配额策略已绑定应用数量
    *
    * @var string[]
    */
    protected static $setters = [
            'appQuotaId' => 'setAppQuotaId',
            'name' => 'setName',
            'callLimits' => 'setCallLimits',
            'timeUnit' => 'setTimeUnit',
            'timeInterval' => 'setTimeInterval',
            'remark' => 'setRemark',
            'resetTime' => 'setResetTime',
            'createTime' => 'setCreateTime',
            'boundAppNum' => 'setBoundAppNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appQuotaId  凭据配额编号
    * name  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * callLimits  凭据配额的访问次数限制
    * timeUnit  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    * timeInterval  配额的限定时间值
    * remark  参数说明和描述
    * resetTime  首次配额重置时间点，不配置默认为首次调用时间计算
    * createTime  创建时间
    * boundAppNum  配额策略已绑定应用数量
    *
    * @var string[]
    */
    protected static $getters = [
            'appQuotaId' => 'getAppQuotaId',
            'name' => 'getName',
            'callLimits' => 'getCallLimits',
            'timeUnit' => 'getTimeUnit',
            'timeInterval' => 'getTimeInterval',
            'remark' => 'getRemark',
            'resetTime' => 'getResetTime',
            'createTime' => 'getCreateTime',
            'boundAppNum' => 'getBoundAppNum'
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
    const TIME_UNIT_SECOND = 'SECOND';
    const TIME_UNIT_MINUTE = 'MINUTE';
    const TIME_UNIT_HOUR = 'HOUR';
    const TIME_UNIT_DAY = 'DAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeUnitAllowableValues()
    {
        return [
            self::TIME_UNIT_SECOND,
            self::TIME_UNIT_MINUTE,
            self::TIME_UNIT_HOUR,
            self::TIME_UNIT_DAY,
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
        $this->container['appQuotaId'] = isset($data['appQuotaId']) ? $data['appQuotaId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['callLimits'] = isset($data['callLimits']) ? $data['callLimits'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['resetTime'] = isset($data['resetTime']) ? $data['resetTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['boundAppNum'] = isset($data['boundAppNum']) ? $data['boundAppNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTimeUnitAllowableValues();
                if (!is_null($this->container['timeUnit']) && !in_array($this->container['timeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 255)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 255.";
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
    * Gets appQuotaId
    *  凭据配额编号
    *
    * @return string|null
    */
    public function getAppQuotaId()
    {
        return $this->container['appQuotaId'];
    }

    /**
    * Sets appQuotaId
    *
    * @param string|null $appQuotaId 凭据配额编号
    *
    * @return $this
    */
    public function setAppQuotaId($appQuotaId)
    {
        $this->container['appQuotaId'] = $appQuotaId;
        return $this;
    }

    /**
    * Gets name
    *  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets callLimits
    *  凭据配额的访问次数限制
    *
    * @return int|null
    */
    public function getCallLimits()
    {
        return $this->container['callLimits'];
    }

    /**
    * Sets callLimits
    *
    * @param int|null $callLimits 凭据配额的访问次数限制
    *
    * @return $this
    */
    public function setCallLimits($callLimits)
    {
        $this->container['callLimits'] = $callLimits;
        return $this;
    }

    /**
    * Gets timeUnit
    *  限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    *
    * @return string|null
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string|null $timeUnit 限定时间单位：SECOND:秒、MINUTE:分、HOUR:时、DAY:天
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets timeInterval
    *  配额的限定时间值
    *
    * @return int|null
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int|null $timeInterval 配额的限定时间值
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets remark
    *  参数说明和描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 参数说明和描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets resetTime
    *  首次配额重置时间点，不配置默认为首次调用时间计算
    *
    * @return string|null
    */
    public function getResetTime()
    {
        return $this->container['resetTime'];
    }

    /**
    * Sets resetTime
    *
    * @param string|null $resetTime 首次配额重置时间点，不配置默认为首次调用时间计算
    *
    * @return $this
    */
    public function setResetTime($resetTime)
    {
        $this->container['resetTime'] = $resetTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets boundAppNum
    *  配额策略已绑定应用数量
    *
    * @return int|null
    */
    public function getBoundAppNum()
    {
        return $this->container['boundAppNum'];
    }

    /**
    * Sets boundAppNum
    *
    * @param int|null $boundAppNum 配额策略已绑定应用数量
    *
    * @return $this
    */
    public function setBoundAppNum($boundAppNum)
    {
        $this->container['boundAppNum'] = $boundAppNum;
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

