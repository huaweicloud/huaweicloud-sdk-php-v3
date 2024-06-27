<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  组件描述
    * modelId  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    * modelType  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    * name  组件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'modelId' => 'string',
            'modelType' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  组件描述
    * modelId  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    * modelType  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    * name  组件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'modelId' => null,
        'modelType' => null,
        'name' => null
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
    * description  组件描述
    * modelId  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    * modelType  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    * name  组件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'modelId' => 'model_id',
            'modelType' => 'model_type',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  组件描述
    * modelId  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    * modelType  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    * name  组件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'modelId' => 'setModelId',
            'modelType' => 'setModelType',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  组件描述
    * modelId  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    * modelType  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    * name  组件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'modelId' => 'getModelId',
            'modelType' => 'getModelType',
            'name' => 'getName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['modelType'] = isset($data['modelType']) ? $data['modelType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['modelId'] === null) {
            $invalidProperties[] = "'modelId' can't be null";
        }
        if ($this->container['modelType'] === null) {
            $invalidProperties[] = "'modelType' can't be null";
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
    * Gets description
    *  组件描述
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
    * @param string|null $description 组件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets modelId
    *  应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    *
    * @return string
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string $modelId 应用Id、子应用Id,id长度不能超过36位，由大小写字母、数字组成
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets modelType
    *  应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    *
    * @return string
    */
    public function getModelType()
    {
        return $this->container['modelType'];
    }

    /**
    * Sets modelType
    *
    * @param string $modelType 应用、子应用，取值：APPLICATION、SUB_APPLICATION ，不区分大小写
    *
    * @return $this
    */
    public function setModelType($modelType)
    {
        $this->container['modelType'] = $modelType;
        return $this;
    }

    /**
    * Gets name
    *  组件名称
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
    * @param string $name 组件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

