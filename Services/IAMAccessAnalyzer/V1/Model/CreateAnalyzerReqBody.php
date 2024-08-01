<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAnalyzerReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAnalyzerReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configuration  configuration
    * name  分析器的名称。
    * tags  自定义标签列表。
    * type  type
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configuration' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration',
            'name' => 'string',
            'tags' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]',
            'type' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configuration  configuration
    * name  分析器的名称。
    * tags  自定义标签列表。
    * type  type
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configuration' => null,
        'name' => null,
        'tags' => null,
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
    * configuration  configuration
    * name  分析器的名称。
    * tags  自定义标签列表。
    * type  type
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configuration' => 'configuration',
            'name' => 'name',
            'tags' => 'tags',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configuration  configuration
    * name  分析器的名称。
    * tags  自定义标签列表。
    * type  type
    *
    * @var string[]
    */
    protected static $setters = [
            'configuration' => 'setConfiguration',
            'name' => 'setName',
            'tags' => 'setTags',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configuration  configuration
    * name  分析器的名称。
    * tags  自定义标签列表。
    * type  type
    *
    * @var string[]
    */
    protected static $getters = [
            'configuration' => 'getConfiguration',
            'name' => 'getName',
            'tags' => 'getTags',
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
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z][A-Za-z0-9_.-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_.-]*$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration|null $configuration configuration
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets name
    *  分析器的名称。
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
    * @param string $name 分析器的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]|null $tags 自定义标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType $type type
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

