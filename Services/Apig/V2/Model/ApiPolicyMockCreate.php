<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiPolicyMockCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiPolicyMockCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultContent  返回结果
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表，后端类型为GRPC时不支持配置
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultContent' => 'string',
            'effectMode' => 'string',
            'name' => 'string',
            'backendParams' => '\HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]',
            'conditions' => '\HuaweiCloud\SDK\Apig\V2\Model\ApiConditionBase[]',
            'authorizerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultContent  返回结果
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表，后端类型为GRPC时不支持配置
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultContent' => null,
        'effectMode' => null,
        'name' => null,
        'backendParams' => null,
        'conditions' => null,
        'authorizerId' => null
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
    * resultContent  返回结果
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表，后端类型为GRPC时不支持配置
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultContent' => 'result_content',
            'effectMode' => 'effect_mode',
            'name' => 'name',
            'backendParams' => 'backend_params',
            'conditions' => 'conditions',
            'authorizerId' => 'authorizer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultContent  返回结果
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表，后端类型为GRPC时不支持配置
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @var string[]
    */
    protected static $setters = [
            'resultContent' => 'setResultContent',
            'effectMode' => 'setEffectMode',
            'name' => 'setName',
            'backendParams' => 'setBackendParams',
            'conditions' => 'setConditions',
            'authorizerId' => 'setAuthorizerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultContent  返回结果
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表，后端类型为GRPC时不支持配置
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @var string[]
    */
    protected static $getters = [
            'resultContent' => 'getResultContent',
            'effectMode' => 'getEffectMode',
            'name' => 'getName',
            'backendParams' => 'getBackendParams',
            'conditions' => 'getConditions',
            'authorizerId' => 'getAuthorizerId'
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
    const EFFECT_MODE_ALL = 'ALL';
    const EFFECT_MODE_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectModeAllowableValues()
    {
        return [
            self::EFFECT_MODE_ALL,
            self::EFFECT_MODE_ANY,
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
        $this->container['resultContent'] = isset($data['resultContent']) ? $data['resultContent'] : null;
        $this->container['effectMode'] = isset($data['effectMode']) ? $data['effectMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['backendParams'] = isset($data['backendParams']) ? $data['backendParams'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['effectMode'] === null) {
            $invalidProperties[] = "'effectMode' can't be null";
        }
            $allowedValues = $this->getEffectModeAllowableValues();
                if (!is_null($this->container['effectMode']) && !in_array($this->container['effectMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effectMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
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
    * Gets resultContent
    *  返回结果
    *
    * @return string|null
    */
    public function getResultContent()
    {
        return $this->container['resultContent'];
    }

    /**
    * Sets resultContent
    *
    * @param string|null $resultContent 返回结果
    *
    * @return $this
    */
    public function setResultContent($resultContent)
    {
        $this->container['resultContent'] = $resultContent;
        return $this;
    }

    /**
    * Gets effectMode
    *  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    *
    * @return string
    */
    public function getEffectMode()
    {
        return $this->container['effectMode'];
    }

    /**
    * Sets effectMode
    *
    * @param string $effectMode 关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    *
    * @return $this
    */
    public function setEffectMode($effectMode)
    {
        $this->container['effectMode'] = $effectMode;
        return $this;
    }

    /**
    * Gets name
    *  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
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
    * @param string $name 策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets backendParams
    *  后端参数列表，后端类型为GRPC时不支持配置
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]|null
    */
    public function getBackendParams()
    {
        return $this->container['backendParams'];
    }

    /**
    * Sets backendParams
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]|null $backendParams 后端参数列表，后端类型为GRPC时不支持配置
    *
    * @return $this
    */
    public function setBackendParams($backendParams)
    {
        $this->container['backendParams'] = $backendParams;
        return $this;
    }

    /**
    * Gets conditions
    *  策略条件列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ApiConditionBase[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ApiConditionBase[] $conditions 策略条件列表
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets authorizerId
    *  后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @return string|null
    */
    public function getAuthorizerId()
    {
        return $this->container['authorizerId'];
    }

    /**
    * Sets authorizerId
    *
    * @param string|null $authorizerId 后端自定义认证对象的ID，后端类型为GRPC时不支持后端自定义认证
    *
    * @return $this
    */
    public function setAuthorizerId($authorizerId)
    {
        $this->container['authorizerId'] = $authorizerId;
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

