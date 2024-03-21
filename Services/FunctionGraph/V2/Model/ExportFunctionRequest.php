<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportFunctionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportFunctionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * config  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * code  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * type  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'config' => 'bool',
            'code' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * config  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * code  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * type  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'config' => null,
        'code' => null,
        'type' => null
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
    * config  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * code  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * type  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'config' => 'config',
            'code' => 'code',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * config  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * code  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * type  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'config' => 'setConfig',
            'code' => 'setCode',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * config  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * code  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    * type  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'config' => 'getConfig',
            'code' => 'getCode',
            'type' => 'getType'
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
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
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets config
    *  是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    *
    * @return bool|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param bool|null $config 是否导出函数配置，默认为false。若无type参数，则必填code=true或config=true至少一项。
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets code
    *  是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    *
    * @return bool|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param bool|null $code 是否导出函数代码，默认为false。若无type参数，则必填code=true或config=true至少一项。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets type
    *  不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 不兼容与code、config参数混用；type=code代表导出代码，type=config代码导出配置
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

