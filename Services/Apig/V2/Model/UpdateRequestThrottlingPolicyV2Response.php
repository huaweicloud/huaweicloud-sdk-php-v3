<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRequestThrottlingPolicyV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRequestThrottlingPolicyV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appCallLimits  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    * name  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * timeUnit  流控的时间单位
    * remark  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    * apiCallLimits  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    * type  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    * enableAdaptiveControl  是否开启动态流控： - TRUE - FALSE  暂不支持
    * userCallLimits  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * timeInterval  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    * ipCallLimits  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * id  流控策略的ID
    * bindNum  流控绑定的API数量
    * isIncluSpecialThrottle  是否包含特殊流控配置 - 1：包含 - 2：不包含
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appCallLimits' => 'int',
            'name' => 'string',
            'timeUnit' => 'string',
            'remark' => 'string',
            'apiCallLimits' => 'int',
            'type' => 'int',
            'enableAdaptiveControl' => 'string',
            'userCallLimits' => 'int',
            'timeInterval' => 'int',
            'ipCallLimits' => 'int',
            'id' => 'string',
            'bindNum' => 'int',
            'isIncluSpecialThrottle' => 'int',
            'createTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appCallLimits  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    * name  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * timeUnit  流控的时间单位
    * remark  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    * apiCallLimits  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    * type  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    * enableAdaptiveControl  是否开启动态流控： - TRUE - FALSE  暂不支持
    * userCallLimits  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * timeInterval  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    * ipCallLimits  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * id  流控策略的ID
    * bindNum  流控绑定的API数量
    * isIncluSpecialThrottle  是否包含特殊流控配置 - 1：包含 - 2：不包含
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appCallLimits' => 'int32',
        'name' => null,
        'timeUnit' => null,
        'remark' => null,
        'apiCallLimits' => 'int32',
        'type' => 'int32',
        'enableAdaptiveControl' => null,
        'userCallLimits' => 'int32',
        'timeInterval' => 'int32',
        'ipCallLimits' => 'int32',
        'id' => null,
        'bindNum' => 'int32',
        'isIncluSpecialThrottle' => 'int32',
        'createTime' => 'date-time'
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
    * appCallLimits  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    * name  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * timeUnit  流控的时间单位
    * remark  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    * apiCallLimits  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    * type  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    * enableAdaptiveControl  是否开启动态流控： - TRUE - FALSE  暂不支持
    * userCallLimits  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * timeInterval  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    * ipCallLimits  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * id  流控策略的ID
    * bindNum  流控绑定的API数量
    * isIncluSpecialThrottle  是否包含特殊流控配置 - 1：包含 - 2：不包含
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appCallLimits' => 'app_call_limits',
            'name' => 'name',
            'timeUnit' => 'time_unit',
            'remark' => 'remark',
            'apiCallLimits' => 'api_call_limits',
            'type' => 'type',
            'enableAdaptiveControl' => 'enable_adaptive_control',
            'userCallLimits' => 'user_call_limits',
            'timeInterval' => 'time_interval',
            'ipCallLimits' => 'ip_call_limits',
            'id' => 'id',
            'bindNum' => 'bind_num',
            'isIncluSpecialThrottle' => 'is_inclu_special_throttle',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appCallLimits  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    * name  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * timeUnit  流控的时间单位
    * remark  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    * apiCallLimits  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    * type  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    * enableAdaptiveControl  是否开启动态流控： - TRUE - FALSE  暂不支持
    * userCallLimits  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * timeInterval  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    * ipCallLimits  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * id  流控策略的ID
    * bindNum  流控绑定的API数量
    * isIncluSpecialThrottle  是否包含特殊流控配置 - 1：包含 - 2：不包含
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'appCallLimits' => 'setAppCallLimits',
            'name' => 'setName',
            'timeUnit' => 'setTimeUnit',
            'remark' => 'setRemark',
            'apiCallLimits' => 'setApiCallLimits',
            'type' => 'setType',
            'enableAdaptiveControl' => 'setEnableAdaptiveControl',
            'userCallLimits' => 'setUserCallLimits',
            'timeInterval' => 'setTimeInterval',
            'ipCallLimits' => 'setIpCallLimits',
            'id' => 'setId',
            'bindNum' => 'setBindNum',
            'isIncluSpecialThrottle' => 'setIsIncluSpecialThrottle',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appCallLimits  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    * name  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * timeUnit  流控的时间单位
    * remark  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    * apiCallLimits  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    * type  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    * enableAdaptiveControl  是否开启动态流控： - TRUE - FALSE  暂不支持
    * userCallLimits  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * timeInterval  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    * ipCallLimits  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    * id  流控策略的ID
    * bindNum  流控绑定的API数量
    * isIncluSpecialThrottle  是否包含特殊流控配置 - 1：包含 - 2：不包含
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'appCallLimits' => 'getAppCallLimits',
            'name' => 'getName',
            'timeUnit' => 'getTimeUnit',
            'remark' => 'getRemark',
            'apiCallLimits' => 'getApiCallLimits',
            'type' => 'getType',
            'enableAdaptiveControl' => 'getEnableAdaptiveControl',
            'userCallLimits' => 'getUserCallLimits',
            'timeInterval' => 'getTimeInterval',
            'ipCallLimits' => 'getIpCallLimits',
            'id' => 'getId',
            'bindNum' => 'getBindNum',
            'isIncluSpecialThrottle' => 'getIsIncluSpecialThrottle',
            'createTime' => 'getCreateTime'
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
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const IS_INCLU_SPECIAL_THROTTLE_1 = 1;
    const IS_INCLU_SPECIAL_THROTTLE_2 = 2;
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_1,
            self::TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsIncluSpecialThrottleAllowableValues()
    {
        return [
            self::IS_INCLU_SPECIAL_THROTTLE_1,
            self::IS_INCLU_SPECIAL_THROTTLE_2,
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
        $this->container['appCallLimits'] = isset($data['appCallLimits']) ? $data['appCallLimits'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['apiCallLimits'] = isset($data['apiCallLimits']) ? $data['apiCallLimits'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enableAdaptiveControl'] = isset($data['enableAdaptiveControl']) ? $data['enableAdaptiveControl'] : null;
        $this->container['userCallLimits'] = isset($data['userCallLimits']) ? $data['userCallLimits'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['ipCallLimits'] = isset($data['ipCallLimits']) ? $data['ipCallLimits'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bindNum'] = isset($data['bindNum']) ? $data['bindNum'] : null;
        $this->container['isIncluSpecialThrottle'] = isset($data['isIncluSpecialThrottle']) ? $data['isIncluSpecialThrottle'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['timeUnit'] === null) {
            $invalidProperties[] = "'timeUnit' can't be null";
        }
            $allowedValues = $this->getTimeUnitAllowableValues();
                if (!is_null($this->container['timeUnit']) && !in_array($this->container['timeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['apiCallLimits'] === null) {
            $invalidProperties[] = "'apiCallLimits' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['timeInterval'] === null) {
            $invalidProperties[] = "'timeInterval' can't be null";
        }
            $allowedValues = $this->getIsIncluSpecialThrottleAllowableValues();
                if (!is_null($this->container['isIncluSpecialThrottle']) && !in_array($this->container['isIncluSpecialThrottle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isIncluSpecialThrottle', must be one of '%s'",
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
    * Gets appCallLimits
    *  APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return int|null
    */
    public function getAppCallLimits()
    {
        return $this->container['appCallLimits'];
    }

    /**
    * Sets appCallLimits
    *
    * @param int|null $appCallLimits APP流量限制是指一个API在时长之内被每个APP访问的次数上限，该数值不超过用户流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return $this
    */
    public function setAppCallLimits($appCallLimits)
    {
        $this->container['appCallLimits'] = $appCallLimits;
        return $this;
    }

    /**
    * Gets name
    *  流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流控策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets timeUnit
    *  流控的时间单位
    *
    * @return string
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string $timeUnit 流控的时间单位
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets remark
    *  流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
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
    * @param string|null $remark 流控策略描述字符长度不超过255。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets apiCallLimits
    *  API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    *
    * @return int
    */
    public function getApiCallLimits()
    {
        return $this->container['apiCallLimits'];
    }

    /**
    * Sets apiCallLimits
    *
    * @param int $apiCallLimits API流量限制是指时长内一个API能够被访问的次数上限。该值不超过系统默认配额限制，系统默认配额为200tps，用户可根据实际情况修改该系统默认配额。输入的值不超过2147483647。正整数。
    *
    * @return $this
    */
    public function setApiCallLimits($apiCallLimits)
    {
        $this->container['apiCallLimits'] = $apiCallLimits;
        return $this;
    }

    /**
    * Gets type
    *  流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 流控策略的类型 - 1：基础，表示绑定到流控策略的单个API流控时间内能够被调用多少次。 - 2：共享，表示绑定到流控策略的所有API流控时间内能够被调用多少次。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enableAdaptiveControl
    *  是否开启动态流控： - TRUE - FALSE  暂不支持
    *
    * @return string|null
    */
    public function getEnableAdaptiveControl()
    {
        return $this->container['enableAdaptiveControl'];
    }

    /**
    * Sets enableAdaptiveControl
    *
    * @param string|null $enableAdaptiveControl 是否开启动态流控： - TRUE - FALSE  暂不支持
    *
    * @return $this
    */
    public function setEnableAdaptiveControl($enableAdaptiveControl)
    {
        $this->container['enableAdaptiveControl'] = $enableAdaptiveControl;
        return $this;
    }

    /**
    * Gets userCallLimits
    *  用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return int|null
    */
    public function getUserCallLimits()
    {
        return $this->container['userCallLimits'];
    }

    /**
    * Sets userCallLimits
    *
    * @param int|null $userCallLimits 用户流量限制是指一个API在时长之内每一个用户能访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return $this
    */
    public function setUserCallLimits($userCallLimits)
    {
        $this->container['userCallLimits'] = $userCallLimits;
        return $this;
    }

    /**
    * Gets timeInterval
    *  流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    *
    * @return int
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int $timeInterval 流量控制的时长单位。与“流量限制次数”配合使用，表示单位时间内的API请求次数上限。输入的值不超过2147483647。正整数。
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets ipCallLimits
    *  源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return int|null
    */
    public function getIpCallLimits()
    {
        return $this->container['ipCallLimits'];
    }

    /**
    * Sets ipCallLimits
    *
    * @param int|null $ipCallLimits 源IP流量限制是指一个API在时长之内被每个IP访问的次数上限，该数值不超过API流量限制值。输入的值不超过2147483647。正整数。
    *
    * @return $this
    */
    public function setIpCallLimits($ipCallLimits)
    {
        $this->container['ipCallLimits'] = $ipCallLimits;
        return $this;
    }

    /**
    * Gets id
    *  流控策略的ID
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
    * @param string|null $id 流控策略的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets bindNum
    *  流控绑定的API数量
    *
    * @return int|null
    */
    public function getBindNum()
    {
        return $this->container['bindNum'];
    }

    /**
    * Sets bindNum
    *
    * @param int|null $bindNum 流控绑定的API数量
    *
    * @return $this
    */
    public function setBindNum($bindNum)
    {
        $this->container['bindNum'] = $bindNum;
        return $this;
    }

    /**
    * Gets isIncluSpecialThrottle
    *  是否包含特殊流控配置 - 1：包含 - 2：不包含
    *
    * @return int|null
    */
    public function getIsIncluSpecialThrottle()
    {
        return $this->container['isIncluSpecialThrottle'];
    }

    /**
    * Sets isIncluSpecialThrottle
    *
    * @param int|null $isIncluSpecialThrottle 是否包含特殊流控配置 - 1：包含 - 2：不包含
    *
    * @return $this
    */
    public function setIsIncluSpecialThrottle($isIncluSpecialThrottle)
    {
        $this->container['isIncluSpecialThrottle'] = $isIncluSpecialThrottle;
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

