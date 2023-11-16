<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplatesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplatesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * template  template
    * name  模板命名
    * description  模板说明
    * toolType  工具类型
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'template' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplate',
            'name' => 'string',
            'description' => 'string',
            'toolType' => 'string',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * template  template
    * name  模板命名
    * description  模板说明
    * toolType  工具类型
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'template' => null,
        'name' => null,
        'description' => null,
        'toolType' => null,
        'parameters' => null
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
    * template  template
    * name  模板命名
    * description  模板说明
    * toolType  工具类型
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'template' => 'template',
            'name' => 'name',
            'description' => 'description',
            'toolType' => 'tool_type',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * template  template
    * name  模板命名
    * description  模板说明
    * toolType  工具类型
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'template' => 'setTemplate',
            'name' => 'setName',
            'description' => 'setDescription',
            'toolType' => 'setToolType',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * template  template
    * name  模板命名
    * description  模板说明
    * toolType  工具类型
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'template' => 'getTemplate',
            'name' => 'getName',
            'description' => 'getDescription',
            'toolType' => 'getToolType',
            'parameters' => 'getParameters'
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
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['toolType'] = isset($data['toolType']) ? $data['toolType'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets template
    *  template
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplate
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateTemplate $template template
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets name
    *  模板命名
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
    * @param string $name 模板命名
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
    *  模板说明
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
    * @param string|null $description 模板说明
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets toolType
    *  工具类型
    *
    * @return string|null
    */
    public function getToolType()
    {
        return $this->container['toolType'];
    }

    /**
    * Sets toolType
    *
    * @param string|null $toolType 工具类型
    *
    * @return $this
    */
    public function setToolType($toolType)
    {
        $this->container['toolType'] = $toolType;
        return $this;
    }

    /**
    * Gets parameters
    *  构建执行参数列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null $parameters 构建执行参数列表
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

