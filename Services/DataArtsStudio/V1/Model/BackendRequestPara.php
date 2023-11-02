<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackendRequestPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackendRequestPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  api请求参数名称
    * position  参数位置
    * backendParaName  对应的后端参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'position' => 'string',
            'backendParaName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  api请求参数名称
    * position  参数位置
    * backendParaName  对应的后端参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'position' => null,
        'backendParaName' => null
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
    * name  api请求参数名称
    * position  参数位置
    * backendParaName  对应的后端参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'position' => 'position',
            'backendParaName' => 'backend_para_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  api请求参数名称
    * position  参数位置
    * backendParaName  对应的后端参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'position' => 'setPosition',
            'backendParaName' => 'setBackendParaName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  api请求参数名称
    * position  参数位置
    * backendParaName  对应的后端参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'position' => 'getPosition',
            'backendParaName' => 'getBackendParaName'
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
    const POSITION_REQUEST_PARAMETER_POSITION_PATH = 'REQUEST_PARAMETER_POSITION_PATH';
    const POSITION_REQUEST_PARAMETER_POSITION_HEADER = 'REQUEST_PARAMETER_POSITION_HEADER';
    const POSITION_REQUEST_PARAMETER_POSITION_QUERY = 'REQUEST_PARAMETER_POSITION_QUERY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_REQUEST_PARAMETER_POSITION_PATH,
            self::POSITION_REQUEST_PARAMETER_POSITION_HEADER,
            self::POSITION_REQUEST_PARAMETER_POSITION_QUERY,
        ];
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['backendParaName'] = isset($data['backendParaName']) ? $data['backendParaName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPositionAllowableValues();
                if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  api请求参数名称
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
    * @param string|null $name api请求参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets position
    *  参数位置
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position 参数位置
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets backendParaName
    *  对应的后端参数
    *
    * @return string|null
    */
    public function getBackendParaName()
    {
        return $this->container['backendParaName'];
    }

    /**
    * Sets backendParaName
    *
    * @param string|null $backendParaName 对应的后端参数
    *
    * @return $this
    */
    public function setBackendParaName($backendParaName)
    {
        $this->container['backendParaName'] = $backendParaName;
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

