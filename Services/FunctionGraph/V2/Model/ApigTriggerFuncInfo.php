<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigTriggerFuncInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigTriggerFuncInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * invocationType  调用函数执行方式。 - sync：同步执行 - async：异步执行
    * timeout  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    * version  函数版本信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'invocationType' => 'string',
            'timeout' => 'int',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * invocationType  调用函数执行方式。 - sync：同步执行 - async：异步执行
    * timeout  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    * version  函数版本信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'invocationType' => null,
        'timeout' => 'int32',
        'version' => null
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
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * invocationType  调用函数执行方式。 - sync：同步执行 - async：异步执行
    * timeout  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    * version  函数版本信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'invocationType' => 'invocation_type',
            'timeout' => 'timeout',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * invocationType  调用函数执行方式。 - sync：同步执行 - async：异步执行
    * timeout  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    * version  函数版本信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'invocationType' => 'setInvocationType',
            'timeout' => 'setTimeout',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * invocationType  调用函数执行方式。 - sync：同步执行 - async：异步执行
    * timeout  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    * version  函数版本信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'invocationType' => 'getInvocationType',
            'timeout' => 'getTimeout',
            'version' => 'getVersion'
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
    const INVOCATION_TYPE_SYNC = 'sync';
    const INVOCATION_TYPE_ASYNC = 'async';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTypeAllowableValues()
    {
        return [
            self::INVOCATION_TYPE_SYNC,
            self::INVOCATION_TYPE_ASYNC,
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['invocationType'] = isset($data['invocationType']) ? $data['invocationType'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getInvocationTypeAllowableValues();
                if (!is_null($this->container['invocationType']) && !in_array($this->container['invocationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] > 60000)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 60000.";
            }
            if (($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
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
    * Gets functionUrn
    *  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return string|null
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string|null $functionUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets invocationType
    *  调用函数执行方式。 - sync：同步执行 - async：异步执行
    *
    * @return string|null
    */
    public function getInvocationType()
    {
        return $this->container['invocationType'];
    }

    /**
    * Sets invocationType
    *
    * @param string|null $invocationType 调用函数执行方式。 - sync：同步执行 - async：异步执行
    *
    * @return $this
    */
    public function setInvocationType($invocationType)
    {
        $this->container['invocationType'] = $invocationType;
        return $this;
    }

    /**
    * Gets timeout
    *  API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout API网关请求函数服务的超时时间（毫秒）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets version
    *  函数版本信息。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 函数版本信息。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

