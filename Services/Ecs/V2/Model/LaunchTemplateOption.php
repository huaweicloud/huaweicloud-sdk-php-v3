<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LaunchTemplateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LaunchTemplateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateData  templateData
    * name  模板名称
    * description  模板描述
    * versionDescription  初始第一个版本的版本描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateData' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateData',
            'name' => 'string',
            'description' => 'string',
            'versionDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateData  templateData
    * name  模板名称
    * description  模板描述
    * versionDescription  初始第一个版本的版本描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateData' => null,
        'name' => null,
        'description' => null,
        'versionDescription' => null
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
    * templateData  templateData
    * name  模板名称
    * description  模板描述
    * versionDescription  初始第一个版本的版本描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateData' => 'template_data',
            'name' => 'name',
            'description' => 'description',
            'versionDescription' => 'version_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateData  templateData
    * name  模板名称
    * description  模板描述
    * versionDescription  初始第一个版本的版本描述
    *
    * @var string[]
    */
    protected static $setters = [
            'templateData' => 'setTemplateData',
            'name' => 'setName',
            'description' => 'setDescription',
            'versionDescription' => 'setVersionDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateData  templateData
    * name  模板名称
    * description  模板描述
    * versionDescription  初始第一个版本的版本描述
    *
    * @var string[]
    */
    protected static $getters = [
            'templateData' => 'getTemplateData',
            'name' => 'getName',
            'description' => 'getDescription',
            'versionDescription' => 'getVersionDescription'
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
        $this->container['templateData'] = isset($data['templateData']) ? $data['templateData'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
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
    * Gets templateData
    *  templateData
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateData|null
    */
    public function getTemplateData()
    {
        return $this->container['templateData'];
    }

    /**
    * Sets templateData
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateData|null $templateData templateData
    *
    * @return $this
    */
    public function setTemplateData($templateData)
    {
        $this->container['templateData'] = $templateData;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string $name 模板名称
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
    * Gets versionDescription
    *  初始第一个版本的版本描述
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 初始第一个版本的版本描述
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
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

