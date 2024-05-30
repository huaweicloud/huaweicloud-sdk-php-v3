<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfigurationTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfigurationTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    * description  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'parameterValues' => 'map[string,string]',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    * description  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'parameterValues' => null,
        'datastore' => null
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
    * name  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    * description  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'parameterValues' => 'parameter_values',
            'datastore' => 'datastore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    * description  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'parameterValues' => 'setParameterValues',
            'datastore' => 'setDatastore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    * description  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'parameterValues' => 'getParameterValues',
            'datastore' => 'getDatastore'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parameterValues'] = isset($data['parameterValues']) ? $data['parameterValues'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
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
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
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
    *  参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
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
    * @param string $name 参数模板名称，不可与已有参数模板名称重复。 取值范围：长度1到64位之间，区分大小写字母，可包含字母、数字、中划线、下划线或句点，不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 参数模板描述，默认为空。 取值范围：长度不超过256，不能包含回车<>!&等特殊字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parameterValues
    *  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    *
    * @return map[string,string]|null
    */
    public function getParameterValues()
    {
        return $this->container['parameterValues'];
    }

    /**
    * Sets parameterValues
    *
    * @param map[string,string]|null $parameterValues 参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义参数值。
    *
    * @return $this
    */
    public function setParameterValues($parameterValues)
    {
        $this->container['parameterValues'] = $parameterValues;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreOption
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreOption $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
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

