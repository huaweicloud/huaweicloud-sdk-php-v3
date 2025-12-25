<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  插件ID
    * templateName  插件模板的名称
    * taskConfig  插件action的配置内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'templateName' => 'string',
            'taskConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  插件ID
    * templateName  插件模板的名称
    * taskConfig  插件action的配置内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'templateName' => null,
        'taskConfig' => null
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
    * componentId  插件ID
    * templateName  插件模板的名称
    * taskConfig  插件action的配置内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'templateName' => 'template_name',
            'taskConfig' => 'task_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  插件ID
    * templateName  插件模板的名称
    * taskConfig  插件action的配置内容
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'templateName' => 'setTemplateName',
            'taskConfig' => 'setTaskConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  插件ID
    * templateName  插件模板的名称
    * taskConfig  插件action的配置内容
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'templateName' => 'getTemplateName',
            'taskConfig' => 'getTaskConfig'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['taskConfig'] = isset($data['taskConfig']) ? $data['taskConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
            if ((mb_strlen($this->container['componentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['taskConfig'] === null) {
            $invalidProperties[] = "'taskConfig' can't be null";
        }
            if ((mb_strlen($this->container['taskConfig']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskConfig', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['taskConfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskConfig', the character length must be bigger than or equal to 1.";
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
    * Gets componentId
    *  插件ID
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId 插件ID
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets templateName
    *  插件模板的名称
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 插件模板的名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets taskConfig
    *  插件action的配置内容
    *
    * @return string
    */
    public function getTaskConfig()
    {
        return $this->container['taskConfig'];
    }

    /**
    * Sets taskConfig
    *
    * @param string $taskConfig 插件action的配置内容
    *
    * @return $this
    */
    public function setTaskConfig($taskConfig)
    {
        $this->container['taskConfig'] = $taskConfig;
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

