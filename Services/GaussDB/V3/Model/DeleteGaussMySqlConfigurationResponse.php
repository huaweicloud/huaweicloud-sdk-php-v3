<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteGaussMySqlConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteGaussMySqlConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationId  参数模板ID。
    * configurationName  参数模板名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationId' => 'string',
            'configurationName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationId  参数模板ID。
    * configurationName  参数模板名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationId' => null,
        'configurationName' => null
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
    * configurationId  参数模板ID。
    * configurationName  参数模板名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationId' => 'configuration_id',
            'configurationName' => 'configuration_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationId  参数模板ID。
    * configurationName  参数模板名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationId' => 'setConfigurationId',
            'configurationName' => 'setConfigurationName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationId  参数模板ID。
    * configurationName  参数模板名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationId' => 'getConfigurationId',
            'configurationName' => 'getConfigurationName'
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
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['configurationName'] = isset($data['configurationName']) ? $data['configurationName'] : null;
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
    * Gets configurationId
    *  参数模板ID。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 参数模板ID。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets configurationName
    *  参数模板名称。
    *
    * @return string|null
    */
    public function getConfigurationName()
    {
        return $this->container['configurationName'];
    }

    /**
    * Sets configurationName
    *
    * @param string|null $configurationName 参数模板名称。
    *
    * @return $this
    */
    public function setConfigurationName($configurationName)
    {
        $this->container['configurationName'] = $configurationName;
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

