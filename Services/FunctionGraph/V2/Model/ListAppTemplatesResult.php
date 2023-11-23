<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAppTemplatesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAppTemplatesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板id
    * name  模板名称
    * runtime  模板执行运行时
    * category  模板使用场景
    * description  模板描述
    * image  模板镜像文件（base64编码）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'runtime' => 'string',
            'category' => 'string',
            'description' => 'string',
            'image' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板id
    * name  模板名称
    * runtime  模板执行运行时
    * category  模板使用场景
    * description  模板描述
    * image  模板镜像文件（base64编码）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'runtime' => null,
        'category' => null,
        'description' => null,
        'image' => null
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
    * id  模板id
    * name  模板名称
    * runtime  模板执行运行时
    * category  模板使用场景
    * description  模板描述
    * image  模板镜像文件（base64编码）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'runtime' => 'runtime',
            'category' => 'category',
            'description' => 'description',
            'image' => 'image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板id
    * name  模板名称
    * runtime  模板执行运行时
    * category  模板使用场景
    * description  模板描述
    * image  模板镜像文件（base64编码）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'runtime' => 'setRuntime',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'image' => 'setImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板id
    * name  模板名称
    * runtime  模板执行运行时
    * category  模板使用场景
    * description  模板描述
    * image  模板镜像文件（base64编码）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'runtime' => 'getRuntime',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'image' => 'getImage'
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
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
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
    *  模板id
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
    * @param string|null $id 模板id
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
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets runtime
    *  模板执行运行时
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 模板执行运行时
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets category
    *  模板使用场景
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 模板使用场景
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets image
    *  模板镜像文件（base64编码）
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 模板镜像文件（base64编码）
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
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

