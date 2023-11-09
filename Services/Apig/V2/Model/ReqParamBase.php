<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqParamBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqParamBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    * type  参数类型
    * location  参数位置
    * defaultValue  参数默认值
    * sampleValue  参数示例值
    * required  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    * validEnable  是否开启校验 - 1：开启校验 - 2：不开启校验
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * enumerations  参数枚举值
    * minNum  参数最小值  参数类型为NUMBER时有效
    * maxNum  参数最大值  参数类型为NUMBER时有效
    * minSize  参数最小长度  参数类型为STRING时有效
    * maxSize  参数最大长度  参数类型为STRING时有效
    * regular  正则校验规则  暂不支持
    * jsonSchema  JSON校验规则  暂不支持
    * passThrough  是否透传 - 1：是 - 2：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'location' => 'string',
            'defaultValue' => 'string',
            'sampleValue' => 'string',
            'required' => 'int',
            'validEnable' => 'int',
            'remark' => 'string',
            'enumerations' => 'string',
            'minNum' => 'int',
            'maxNum' => 'int',
            'minSize' => 'int',
            'maxSize' => 'int',
            'regular' => 'string',
            'jsonSchema' => 'string',
            'passThrough' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    * type  参数类型
    * location  参数位置
    * defaultValue  参数默认值
    * sampleValue  参数示例值
    * required  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    * validEnable  是否开启校验 - 1：开启校验 - 2：不开启校验
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * enumerations  参数枚举值
    * minNum  参数最小值  参数类型为NUMBER时有效
    * maxNum  参数最大值  参数类型为NUMBER时有效
    * minSize  参数最小长度  参数类型为STRING时有效
    * maxSize  参数最大长度  参数类型为STRING时有效
    * regular  正则校验规则  暂不支持
    * jsonSchema  JSON校验规则  暂不支持
    * passThrough  是否透传 - 1：是 - 2：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'location' => null,
        'defaultValue' => null,
        'sampleValue' => null,
        'required' => 'int32',
        'validEnable' => 'int32',
        'remark' => null,
        'enumerations' => null,
        'minNum' => 'int32',
        'maxNum' => 'int32',
        'minSize' => 'int32',
        'maxSize' => 'int32',
        'regular' => null,
        'jsonSchema' => null,
        'passThrough' => 'int32'
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
    * name  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    * type  参数类型
    * location  参数位置
    * defaultValue  参数默认值
    * sampleValue  参数示例值
    * required  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    * validEnable  是否开启校验 - 1：开启校验 - 2：不开启校验
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * enumerations  参数枚举值
    * minNum  参数最小值  参数类型为NUMBER时有效
    * maxNum  参数最大值  参数类型为NUMBER时有效
    * minSize  参数最小长度  参数类型为STRING时有效
    * maxSize  参数最大长度  参数类型为STRING时有效
    * regular  正则校验规则  暂不支持
    * jsonSchema  JSON校验规则  暂不支持
    * passThrough  是否透传 - 1：是 - 2：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'location' => 'location',
            'defaultValue' => 'default_value',
            'sampleValue' => 'sample_value',
            'required' => 'required',
            'validEnable' => 'valid_enable',
            'remark' => 'remark',
            'enumerations' => 'enumerations',
            'minNum' => 'min_num',
            'maxNum' => 'max_num',
            'minSize' => 'min_size',
            'maxSize' => 'max_size',
            'regular' => 'regular',
            'jsonSchema' => 'json_schema',
            'passThrough' => 'pass_through'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    * type  参数类型
    * location  参数位置
    * defaultValue  参数默认值
    * sampleValue  参数示例值
    * required  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    * validEnable  是否开启校验 - 1：开启校验 - 2：不开启校验
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * enumerations  参数枚举值
    * minNum  参数最小值  参数类型为NUMBER时有效
    * maxNum  参数最大值  参数类型为NUMBER时有效
    * minSize  参数最小长度  参数类型为STRING时有效
    * maxSize  参数最大长度  参数类型为STRING时有效
    * regular  正则校验规则  暂不支持
    * jsonSchema  JSON校验规则  暂不支持
    * passThrough  是否透传 - 1：是 - 2：否
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'location' => 'setLocation',
            'defaultValue' => 'setDefaultValue',
            'sampleValue' => 'setSampleValue',
            'required' => 'setRequired',
            'validEnable' => 'setValidEnable',
            'remark' => 'setRemark',
            'enumerations' => 'setEnumerations',
            'minNum' => 'setMinNum',
            'maxNum' => 'setMaxNum',
            'minSize' => 'setMinSize',
            'maxSize' => 'setMaxSize',
            'regular' => 'setRegular',
            'jsonSchema' => 'setJsonSchema',
            'passThrough' => 'setPassThrough'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    * type  参数类型
    * location  参数位置
    * defaultValue  参数默认值
    * sampleValue  参数示例值
    * required  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    * validEnable  是否开启校验 - 1：开启校验 - 2：不开启校验
    * remark  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    * enumerations  参数枚举值
    * minNum  参数最小值  参数类型为NUMBER时有效
    * maxNum  参数最大值  参数类型为NUMBER时有效
    * minSize  参数最小长度  参数类型为STRING时有效
    * maxSize  参数最大长度  参数类型为STRING时有效
    * regular  正则校验规则  暂不支持
    * jsonSchema  JSON校验规则  暂不支持
    * passThrough  是否透传 - 1：是 - 2：否
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'location' => 'getLocation',
            'defaultValue' => 'getDefaultValue',
            'sampleValue' => 'getSampleValue',
            'required' => 'getRequired',
            'validEnable' => 'getValidEnable',
            'remark' => 'getRemark',
            'enumerations' => 'getEnumerations',
            'minNum' => 'getMinNum',
            'maxNum' => 'getMaxNum',
            'minSize' => 'getMinSize',
            'maxSize' => 'getMaxSize',
            'regular' => 'getRegular',
            'jsonSchema' => 'getJsonSchema',
            'passThrough' => 'getPassThrough'
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
    const TYPE_STRING = 'STRING';
    const TYPE_NUMBER = 'NUMBER';
    const LOCATION_PATH = 'PATH';
    const LOCATION_QUERY = 'QUERY';
    const LOCATION_HEADER = 'HEADER';
    const REQUIRED_1 = 1;
    const REQUIRED_2 = 2;
    const VALID_ENABLE_1 = 1;
    const VALID_ENABLE_2 = 2;
    const PASS_THROUGH_1 = 1;
    const PASS_THROUGH_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_NUMBER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_PATH,
            self::LOCATION_QUERY,
            self::LOCATION_HEADER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRequiredAllowableValues()
    {
        return [
            self::REQUIRED_1,
            self::REQUIRED_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getValidEnableAllowableValues()
    {
        return [
            self::VALID_ENABLE_1,
            self::VALID_ENABLE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPassThroughAllowableValues()
    {
        return [
            self::PASS_THROUGH_1,
            self::PASS_THROUGH_2,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['sampleValue'] = isset($data['sampleValue']) ? $data['sampleValue'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['validEnable'] = isset($data['validEnable']) ? $data['validEnable'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['enumerations'] = isset($data['enumerations']) ? $data['enumerations'] : null;
        $this->container['minNum'] = isset($data['minNum']) ? $data['minNum'] : null;
        $this->container['maxNum'] = isset($data['maxNum']) ? $data['maxNum'] : null;
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['regular'] = isset($data['regular']) ? $data['regular'] : null;
        $this->container['jsonSchema'] = isset($data['jsonSchema']) ? $data['jsonSchema'] : null;
        $this->container['passThrough'] = isset($data['passThrough']) ? $data['passThrough'] : null;
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
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9._-]{0,31}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9._-]{0,31}$/.";
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

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            $allowedValues = $this->getLocationAllowableValues();
                if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRequiredAllowableValues();
                if (!is_null($this->container['required']) && !in_array($this->container['required'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'required', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getValidEnableAllowableValues();
                if (!is_null($this->container['validEnable']) && !in_array($this->container['validEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'validEnable', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPassThroughAllowableValues();
                if (!is_null($this->container['passThrough']) && !in_array($this->container['passThrough'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'passThrough', must be one of '%s'",
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
    * Gets name
    *  参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
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
    * @param string $name 参数名称。 长度为1 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线、英文句号组成，且只能以英文开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  参数类型
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
    * @param string $type 参数类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets location
    *  参数位置
    *
    * @return string
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string $location 参数位置
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets defaultValue
    *  参数默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 参数默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets sampleValue
    *  参数示例值
    *
    * @return string|null
    */
    public function getSampleValue()
    {
        return $this->container['sampleValue'];
    }

    /**
    * Sets sampleValue
    *
    * @param string|null $sampleValue 参数示例值
    *
    * @return $this
    */
    public function setSampleValue($sampleValue)
    {
        $this->container['sampleValue'] = $sampleValue;
        return $this;
    }

    /**
    * Gets required
    *  是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    *
    * @return int|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param int|null $required 是否必须 - 1：是 - 2：否  location为PATH时，required默认为1，其他场景required默认为2
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets validEnable
    *  是否开启校验 - 1：开启校验 - 2：不开启校验
    *
    * @return int|null
    */
    public function getValidEnable()
    {
        return $this->container['validEnable'];
    }

    /**
    * Sets validEnable
    *
    * @param int|null $validEnable 是否开启校验 - 1：开启校验 - 2：不开启校验
    *
    * @return $this
    */
    public function setValidEnable($validEnable)
    {
        $this->container['validEnable'] = $validEnable;
        return $this;
    }

    /**
    * Gets remark
    *  描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
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
    * @param string|null $remark 描述信息。长度不超过255个字符 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets enumerations
    *  参数枚举值
    *
    * @return string|null
    */
    public function getEnumerations()
    {
        return $this->container['enumerations'];
    }

    /**
    * Sets enumerations
    *
    * @param string|null $enumerations 参数枚举值
    *
    * @return $this
    */
    public function setEnumerations($enumerations)
    {
        $this->container['enumerations'] = $enumerations;
        return $this;
    }

    /**
    * Gets minNum
    *  参数最小值  参数类型为NUMBER时有效
    *
    * @return int|null
    */
    public function getMinNum()
    {
        return $this->container['minNum'];
    }

    /**
    * Sets minNum
    *
    * @param int|null $minNum 参数最小值  参数类型为NUMBER时有效
    *
    * @return $this
    */
    public function setMinNum($minNum)
    {
        $this->container['minNum'] = $minNum;
        return $this;
    }

    /**
    * Gets maxNum
    *  参数最大值  参数类型为NUMBER时有效
    *
    * @return int|null
    */
    public function getMaxNum()
    {
        return $this->container['maxNum'];
    }

    /**
    * Sets maxNum
    *
    * @param int|null $maxNum 参数最大值  参数类型为NUMBER时有效
    *
    * @return $this
    */
    public function setMaxNum($maxNum)
    {
        $this->container['maxNum'] = $maxNum;
        return $this;
    }

    /**
    * Gets minSize
    *  参数最小长度  参数类型为STRING时有效
    *
    * @return int|null
    */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
    * Sets minSize
    *
    * @param int|null $minSize 参数最小长度  参数类型为STRING时有效
    *
    * @return $this
    */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;
        return $this;
    }

    /**
    * Gets maxSize
    *  参数最大长度  参数类型为STRING时有效
    *
    * @return int|null
    */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
    * Sets maxSize
    *
    * @param int|null $maxSize 参数最大长度  参数类型为STRING时有效
    *
    * @return $this
    */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;
        return $this;
    }

    /**
    * Gets regular
    *  正则校验规则  暂不支持
    *
    * @return string|null
    */
    public function getRegular()
    {
        return $this->container['regular'];
    }

    /**
    * Sets regular
    *
    * @param string|null $regular 正则校验规则  暂不支持
    *
    * @return $this
    */
    public function setRegular($regular)
    {
        $this->container['regular'] = $regular;
        return $this;
    }

    /**
    * Gets jsonSchema
    *  JSON校验规则  暂不支持
    *
    * @return string|null
    */
    public function getJsonSchema()
    {
        return $this->container['jsonSchema'];
    }

    /**
    * Sets jsonSchema
    *
    * @param string|null $jsonSchema JSON校验规则  暂不支持
    *
    * @return $this
    */
    public function setJsonSchema($jsonSchema)
    {
        $this->container['jsonSchema'] = $jsonSchema;
        return $this;
    }

    /**
    * Gets passThrough
    *  是否透传 - 1：是 - 2：否
    *
    * @return int|null
    */
    public function getPassThrough()
    {
        return $this->container['passThrough'];
    }

    /**
    * Sets passThrough
    *
    * @param int|null $passThrough 是否透传 - 1：是 - 2：否
    *
    * @return $this
    */
    public function setPassThrough($passThrough)
    {
        $this->container['passThrough'] = $passThrough;
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

