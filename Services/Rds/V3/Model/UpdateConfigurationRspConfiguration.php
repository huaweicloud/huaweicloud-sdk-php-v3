<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConfigurationRspConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConfigurationRsp_configuration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * ignoredParams  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ignoredParams' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * ignoredParams  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ignoredParams' => null
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
    * id  参数模板ID。
    * name  参数模板名称。
    * ignoredParams  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ignoredParams' => 'ignored_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数模板ID。
    * name  参数模板名称。
    * ignoredParams  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ignoredParams' => 'setIgnoredParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数模板ID。
    * name  参数模板名称。
    * ignoredParams  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ignoredParams' => 'getIgnoredParams'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ignoredParams'] = isset($data['ignoredParams']) ? $data['ignoredParams'] : null;
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
    * Gets id
    *  参数模板ID。
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
    * @param string|null $id 参数模板ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  参数模板名称。
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
    * @param string|null $name 参数模板名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ignoredParams
    *  请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @return string[]|null
    */
    public function getIgnoredParams()
    {
        return $this->container['ignoredParams'];
    }

    /**
    * Sets ignoredParams
    *
    * @param string[]|null $ignoredParams 请求参数“values”中被忽略掉，没有生效的参数名称列表。 当参数不存在时，参数修改不会下发，并通过此参数返回所有被忽略的参数名称。
    *
    * @return $this
    */
    public function setIgnoredParams($ignoredParams)
    {
        $this->container['ignoredParams'] = $ignoredParams;
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
