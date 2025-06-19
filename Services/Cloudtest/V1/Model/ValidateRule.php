<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dependentInfo  依赖信息列表
    * enabled  是否启用的标识符
    * isConfigDep  配置依赖的标识符
    * isDependent  是否依赖的标识符
    * message  消息
    * result  结果
    * specialChar  特殊字符
    * specialCharValid  特殊字符的有效性
    * xExample  示例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dependentInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ConditionInstance[]',
            'enabled' => 'bool',
            'isConfigDep' => 'bool',
            'isDependent' => 'bool',
            'message' => 'string',
            'result' => 'string',
            'specialChar' => 'string',
            'specialCharValid' => 'string',
            'xExample' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dependentInfo  依赖信息列表
    * enabled  是否启用的标识符
    * isConfigDep  配置依赖的标识符
    * isDependent  是否依赖的标识符
    * message  消息
    * result  结果
    * specialChar  特殊字符
    * specialCharValid  特殊字符的有效性
    * xExample  示例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dependentInfo' => null,
        'enabled' => null,
        'isConfigDep' => null,
        'isDependent' => null,
        'message' => null,
        'result' => null,
        'specialChar' => null,
        'specialCharValid' => null,
        'xExample' => null
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
    * dependentInfo  依赖信息列表
    * enabled  是否启用的标识符
    * isConfigDep  配置依赖的标识符
    * isDependent  是否依赖的标识符
    * message  消息
    * result  结果
    * specialChar  特殊字符
    * specialCharValid  特殊字符的有效性
    * xExample  示例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dependentInfo' => 'dependent_info',
            'enabled' => 'enabled',
            'isConfigDep' => 'is_configDep',
            'isDependent' => 'is_dependent',
            'message' => 'message',
            'result' => 'result',
            'specialChar' => 'special_char',
            'specialCharValid' => 'special_char_valid',
            'xExample' => 'x_example'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dependentInfo  依赖信息列表
    * enabled  是否启用的标识符
    * isConfigDep  配置依赖的标识符
    * isDependent  是否依赖的标识符
    * message  消息
    * result  结果
    * specialChar  特殊字符
    * specialCharValid  特殊字符的有效性
    * xExample  示例
    *
    * @var string[]
    */
    protected static $setters = [
            'dependentInfo' => 'setDependentInfo',
            'enabled' => 'setEnabled',
            'isConfigDep' => 'setIsConfigDep',
            'isDependent' => 'setIsDependent',
            'message' => 'setMessage',
            'result' => 'setResult',
            'specialChar' => 'setSpecialChar',
            'specialCharValid' => 'setSpecialCharValid',
            'xExample' => 'setXExample'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dependentInfo  依赖信息列表
    * enabled  是否启用的标识符
    * isConfigDep  配置依赖的标识符
    * isDependent  是否依赖的标识符
    * message  消息
    * result  结果
    * specialChar  特殊字符
    * specialCharValid  特殊字符的有效性
    * xExample  示例
    *
    * @var string[]
    */
    protected static $getters = [
            'dependentInfo' => 'getDependentInfo',
            'enabled' => 'getEnabled',
            'isConfigDep' => 'getIsConfigDep',
            'isDependent' => 'getIsDependent',
            'message' => 'getMessage',
            'result' => 'getResult',
            'specialChar' => 'getSpecialChar',
            'specialCharValid' => 'getSpecialCharValid',
            'xExample' => 'getXExample'
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
        $this->container['dependentInfo'] = isset($data['dependentInfo']) ? $data['dependentInfo'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['isConfigDep'] = isset($data['isConfigDep']) ? $data['isConfigDep'] : null;
        $this->container['isDependent'] = isset($data['isDependent']) ? $data['isDependent'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['specialChar'] = isset($data['specialChar']) ? $data['specialChar'] : null;
        $this->container['specialCharValid'] = isset($data['specialCharValid']) ? $data['specialCharValid'] : null;
        $this->container['xExample'] = isset($data['xExample']) ? $data['xExample'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets dependentInfo
    *  依赖信息列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ConditionInstance[]|null
    */
    public function getDependentInfo()
    {
        return $this->container['dependentInfo'];
    }

    /**
    * Sets dependentInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ConditionInstance[]|null $dependentInfo 依赖信息列表
    *
    * @return $this
    */
    public function setDependentInfo($dependentInfo)
    {
        $this->container['dependentInfo'] = $dependentInfo;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用的标识符
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用的标识符
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets isConfigDep
    *  配置依赖的标识符
    *
    * @return bool|null
    */
    public function getIsConfigDep()
    {
        return $this->container['isConfigDep'];
    }

    /**
    * Sets isConfigDep
    *
    * @param bool|null $isConfigDep 配置依赖的标识符
    *
    * @return $this
    */
    public function setIsConfigDep($isConfigDep)
    {
        $this->container['isConfigDep'] = $isConfigDep;
        return $this;
    }

    /**
    * Gets isDependent
    *  是否依赖的标识符
    *
    * @return bool|null
    */
    public function getIsDependent()
    {
        return $this->container['isDependent'];
    }

    /**
    * Sets isDependent
    *
    * @param bool|null $isDependent 是否依赖的标识符
    *
    * @return $this
    */
    public function setIsDependent($isDependent)
    {
        $this->container['isDependent'] = $isDependent;
        return $this;
    }

    /**
    * Gets message
    *  消息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 消息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets result
    *  结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets specialChar
    *  特殊字符
    *
    * @return string|null
    */
    public function getSpecialChar()
    {
        return $this->container['specialChar'];
    }

    /**
    * Sets specialChar
    *
    * @param string|null $specialChar 特殊字符
    *
    * @return $this
    */
    public function setSpecialChar($specialChar)
    {
        $this->container['specialChar'] = $specialChar;
        return $this;
    }

    /**
    * Gets specialCharValid
    *  特殊字符的有效性
    *
    * @return string|null
    */
    public function getSpecialCharValid()
    {
        return $this->container['specialCharValid'];
    }

    /**
    * Sets specialCharValid
    *
    * @param string|null $specialCharValid 特殊字符的有效性
    *
    * @return $this
    */
    public function setSpecialCharValid($specialCharValid)
    {
        $this->container['specialCharValid'] = $specialCharValid;
        return $this;
    }

    /**
    * Gets xExample
    *  示例
    *
    * @return string|null
    */
    public function getXExample()
    {
        return $this->container['xExample'];
    }

    /**
    * Sets xExample
    *
    * @param string|null $xExample 示例
    *
    * @return $this
    */
    public function setXExample($xExample)
    {
        $this->container['xExample'] = $xExample;
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

