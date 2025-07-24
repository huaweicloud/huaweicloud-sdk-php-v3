<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskCheckParamters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskCheckParamters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkId  检查工具ID
    * name  编译参数名称
    * checkerConfigs  检查参数配置信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkId' => 'int',
            'name' => 'string',
            'checkerConfigs' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckConfigInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkId  检查工具ID
    * name  编译参数名称
    * checkerConfigs  检查参数配置信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkId' => null,
        'name' => null,
        'checkerConfigs' => null
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
    * checkId  检查工具ID
    * name  编译参数名称
    * checkerConfigs  检查参数配置信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkId' => 'check_id',
            'name' => 'name',
            'checkerConfigs' => 'checker_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkId  检查工具ID
    * name  编译参数名称
    * checkerConfigs  检查参数配置信息
    *
    * @var string[]
    */
    protected static $setters = [
            'checkId' => 'setCheckId',
            'name' => 'setName',
            'checkerConfigs' => 'setCheckerConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkId  检查工具ID
    * name  编译参数名称
    * checkerConfigs  检查参数配置信息
    *
    * @var string[]
    */
    protected static $getters = [
            'checkId' => 'getCheckId',
            'name' => 'getName',
            'checkerConfigs' => 'getCheckerConfigs'
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
        $this->container['checkId'] = isset($data['checkId']) ? $data['checkId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['checkerConfigs'] = isset($data['checkerConfigs']) ? $data['checkerConfigs'] : null;
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
    * Gets checkId
    *  检查工具ID
    *
    * @return int|null
    */
    public function getCheckId()
    {
        return $this->container['checkId'];
    }

    /**
    * Sets checkId
    *
    * @param int|null $checkId 检查工具ID
    *
    * @return $this
    */
    public function setCheckId($checkId)
    {
        $this->container['checkId'] = $checkId;
        return $this;
    }

    /**
    * Gets name
    *  编译参数名称
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
    * @param string|null $name 编译参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets checkerConfigs
    *  检查参数配置信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckConfigInfo[]|null
    */
    public function getCheckerConfigs()
    {
        return $this->container['checkerConfigs'];
    }

    /**
    * Sets checkerConfigs
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckConfigInfo[]|null $checkerConfigs 检查参数配置信息
    *
    * @return $this
    */
    public function setCheckerConfigs($checkerConfigs)
    {
        $this->container['checkerConfigs'] = $checkerConfigs;
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

