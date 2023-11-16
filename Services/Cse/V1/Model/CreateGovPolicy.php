<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGovPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGovPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  治理策略名称
    * selector  selector
    * spec  治理策略定义内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'selector' => '\HuaweiCloud\SDK\Cse\V1\Model\GovSelector',
            'spec' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  治理策略名称
    * selector  selector
    * spec  治理策略定义内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'selector' => null,
        'spec' => null
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
    * name  治理策略名称
    * selector  selector
    * spec  治理策略定义内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'selector' => 'selector',
            'spec' => 'spec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  治理策略名称
    * selector  selector
    * spec  治理策略定义内容
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'selector' => 'setSelector',
            'spec' => 'setSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  治理策略名称
    * selector  selector
    * spec  治理策略定义内容
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'selector' => 'getSelector',
            'spec' => 'getSpec'
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
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
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
    * Gets name
    *  治理策略名称
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
    * @param string|null $name 治理策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets selector
    *  selector
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\GovSelector|null
    */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
    * Sets selector
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\GovSelector|null $selector selector
    *
    * @return $this
    */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;
        return $this;
    }

    /**
    * Gets spec
    *  治理策略定义内容
    *
    * @return object|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param object|null $spec 治理策略定义内容
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
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

