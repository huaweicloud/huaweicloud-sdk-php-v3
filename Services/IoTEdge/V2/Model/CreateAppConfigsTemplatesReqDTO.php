<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAppConfigsTemplatesReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAppConfigsTemplatesReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * configTabs  配置项元数据
    * defaultValues  默认配置数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tplId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'configTabs' => 'object',
            'defaultValues' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * configTabs  配置项元数据
    * defaultValues  默认配置数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tplId' => null,
        'name' => null,
        'description' => null,
        'configTabs' => null,
        'defaultValues' => null
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
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * configTabs  配置项元数据
    * defaultValues  默认配置数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tplId' => 'tpl_id',
            'name' => 'name',
            'description' => 'description',
            'configTabs' => 'config_tabs',
            'defaultValues' => 'default_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * configTabs  配置项元数据
    * defaultValues  默认配置数据
    *
    * @var string[]
    */
    protected static $setters = [
            'tplId' => 'setTplId',
            'name' => 'setName',
            'description' => 'setDescription',
            'configTabs' => 'setConfigTabs',
            'defaultValues' => 'setDefaultValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * configTabs  配置项元数据
    * defaultValues  默认配置数据
    *
    * @var string[]
    */
    protected static $getters = [
            'tplId' => 'getTplId',
            'name' => 'getName',
            'description' => 'getDescription',
            'configTabs' => 'getConfigTabs',
            'defaultValues' => 'getDefaultValues'
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
        $this->container['tplId'] = isset($data['tplId']) ? $data['tplId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['configTabs'] = isset($data['configTabs']) ? $data['configTabs'] : null;
        $this->container['defaultValues'] = isset($data['defaultValues']) ? $data['defaultValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tplId'] === null) {
            $invalidProperties[] = "'tplId' can't be null";
        }
            if ((mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['tplId'])) {
                $invalidProperties[] = "invalid value for 'tplId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['configTabs'] === null) {
            $invalidProperties[] = "'configTabs' can't be null";
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
    * Gets tplId
    *  模板id
    *
    * @return string
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string $tplId 模板id
    *
    * @return $this
    */
    public function setTplId($tplId)
    {
        $this->container['tplId'] = $tplId;
        return $this;
    }

    /**
    * Gets name
    *  模板名称，允许中、数字、英文大小写、下划线、中划线
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
    * @param string $name 模板名称，允许中、数字、英文大小写、下划线、中划线
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
    *  描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets configTabs
    *  配置项元数据
    *
    * @return object
    */
    public function getConfigTabs()
    {
        return $this->container['configTabs'];
    }

    /**
    * Sets configTabs
    *
    * @param object $configTabs 配置项元数据
    *
    * @return $this
    */
    public function setConfigTabs($configTabs)
    {
        $this->container['configTabs'] = $configTabs;
        return $this;
    }

    /**
    * Gets defaultValues
    *  默认配置数据
    *
    * @return object|null
    */
    public function getDefaultValues()
    {
        return $this->container['defaultValues'];
    }

    /**
    * Sets defaultValues
    *
    * @param object|null $defaultValues 默认配置数据
    *
    * @return $this
    */
    public function setDefaultValues($defaultValues)
    {
        $this->container['defaultValues'] = $defaultValues;
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

