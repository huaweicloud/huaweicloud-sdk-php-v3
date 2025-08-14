<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTemplateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTemplateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * steps  构建执行的步骤。
    * actions  构建步骤中的action。
    * autoUpdateSubModule  是否自动更新子模块。
    * image  配置镜像地址。
    * imageSource  配置镜像源的地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'steps' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]',
            'actions' => 'object',
            'autoUpdateSubModule' => 'bool',
            'image' => 'string',
            'imageSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * steps  构建执行的步骤。
    * actions  构建步骤中的action。
    * autoUpdateSubModule  是否自动更新子模块。
    * image  配置镜像地址。
    * imageSource  配置镜像源的地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'steps' => null,
        'actions' => null,
        'autoUpdateSubModule' => null,
        'image' => null,
        'imageSource' => null
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
    * steps  构建执行的步骤。
    * actions  构建步骤中的action。
    * autoUpdateSubModule  是否自动更新子模块。
    * image  配置镜像地址。
    * imageSource  配置镜像源的地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'steps' => 'steps',
            'actions' => 'actions',
            'autoUpdateSubModule' => 'auto_update_sub_module',
            'image' => 'image',
            'imageSource' => 'image_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * steps  构建执行的步骤。
    * actions  构建步骤中的action。
    * autoUpdateSubModule  是否自动更新子模块。
    * image  配置镜像地址。
    * imageSource  配置镜像源的地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'steps' => 'setSteps',
            'actions' => 'setActions',
            'autoUpdateSubModule' => 'setAutoUpdateSubModule',
            'image' => 'setImage',
            'imageSource' => 'setImageSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * steps  构建执行的步骤。
    * actions  构建步骤中的action。
    * autoUpdateSubModule  是否自动更新子模块。
    * image  配置镜像地址。
    * imageSource  配置镜像源的地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'steps' => 'getSteps',
            'actions' => 'getActions',
            'autoUpdateSubModule' => 'getAutoUpdateSubModule',
            'image' => 'getImage',
            'imageSource' => 'getImageSource'
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
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['autoUpdateSubModule'] = isset($data['autoUpdateSubModule']) ? $data['autoUpdateSubModule'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageSource'] = isset($data['imageSource']) ? $data['imageSource'] : null;
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
    * Gets steps
    *  构建执行的步骤。
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobSteps[]|null $steps 构建执行的步骤。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets actions
    *  构建步骤中的action。
    *
    * @return object|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param object|null $actions 构建步骤中的action。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets autoUpdateSubModule
    *  是否自动更新子模块。
    *
    * @return bool|null
    */
    public function getAutoUpdateSubModule()
    {
        return $this->container['autoUpdateSubModule'];
    }

    /**
    * Sets autoUpdateSubModule
    *
    * @param bool|null $autoUpdateSubModule 是否自动更新子模块。
    *
    * @return $this
    */
    public function setAutoUpdateSubModule($autoUpdateSubModule)
    {
        $this->container['autoUpdateSubModule'] = $autoUpdateSubModule;
        return $this;
    }

    /**
    * Gets image
    *  配置镜像地址。
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
    * @param string|null $image 配置镜像地址。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets imageSource
    *  配置镜像源的地址。
    *
    * @return string|null
    */
    public function getImageSource()
    {
        return $this->container['imageSource'];
    }

    /**
    * Sets imageSource
    *
    * @param string|null $imageSource 配置镜像源的地址。
    *
    * @return $this
    */
    public function setImageSource($imageSource)
    {
        $this->container['imageSource'] = $imageSource;
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

