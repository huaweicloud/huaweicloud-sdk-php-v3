<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FunctionGraphUrnRequiredPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FunctionGraphUrnRequiredPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionGraphUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionGraphUrn' => null
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
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionGraphUrn' => 'function_graph_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $setters = [
            'functionGraphUrn' => 'setFunctionGraphUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionGraphUrn  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @var string[]
    */
    protected static $getters = [
            'functionGraphUrn' => 'getFunctionGraphUrn'
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
        $this->container['functionGraphUrn'] = isset($data['functionGraphUrn']) ? $data['functionGraphUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionGraphUrn'] === null) {
            $invalidProperties[] = "'functionGraphUrn' can't be null";
        }
            if ((mb_strlen($this->container['functionGraphUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['functionGraphUrn']) < 32)) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^urn:fss:.+:[A-Za-z0-9]{3,64}:function:default:[A-Za-z][A-Za-z0-9_-]{0,58}[A-Za-z0-9]:([A-Za-z0-9][A-Za-z0-9_.-]{0,40}|![A-Za-z][A-Za-z0-9_-]{0,61})[A-Za-z0-9]$/", $this->container['functionGraphUrn'])) {
                $invalidProperties[] = "invalid value for 'functionGraphUrn', must be conform to the pattern /^urn:fss:.+:[A-Za-z0-9]{3,64}:function:default:[A-Za-z][A-Za-z0-9_-]{0,58}[A-Za-z0-9]:([A-Za-z0-9][A-Za-z0-9_.-]{0,40}|![A-Za-z][A-Za-z0-9_-]{0,61})[A-Za-z0-9]$/.";
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
    * Gets functionGraphUrn
    *  FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @return string
    */
    public function getFunctionGraphUrn()
    {
        return $this->container['functionGraphUrn'];
    }

    /**
    * Sets functionGraphUrn
    *
    * @param string $functionGraphUrn FunctionGraph方法的统一资源标识，用于标识唯一的FunctionGraph方法。当前只支持和RFS同region的function_graph_urn，如果给与了关于其他region的，会报错400。  关于该参数的详细解释，请参考官方文档：https://support.huaweicloud.com/api-functiongraph/functiongraph_06_0102.html
    *
    * @return $this
    */
    public function setFunctionGraphUrn($functionGraphUrn)
    {
        $this->container['functionGraphUrn'] = $functionGraphUrn;
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

