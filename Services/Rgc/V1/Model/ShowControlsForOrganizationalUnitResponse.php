<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowControlsForOrganizationalUnitResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowControlsForOrganizationalUnitResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * control  control
    * regions  区域信息。
    * state  是否允许启用控制策略。
    * message  状态说明。
    * version  控制策略当前版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'control' => '\HuaweiCloud\SDK\Rgc\V1\Model\EnabledControl',
            'regions' => '\HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]',
            'state' => 'string',
            'message' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * control  control
    * regions  区域信息。
    * state  是否允许启用控制策略。
    * message  状态说明。
    * version  控制策略当前版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'control' => null,
        'regions' => null,
        'state' => null,
        'message' => null,
        'version' => null
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
    * control  control
    * regions  区域信息。
    * state  是否允许启用控制策略。
    * message  状态说明。
    * version  控制策略当前版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'control' => 'control',
            'regions' => 'regions',
            'state' => 'state',
            'message' => 'message',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * control  control
    * regions  区域信息。
    * state  是否允许启用控制策略。
    * message  状态说明。
    * version  控制策略当前版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'control' => 'setControl',
            'regions' => 'setRegions',
            'state' => 'setState',
            'message' => 'setMessage',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * control  control
    * regions  区域信息。
    * state  是否允许启用控制策略。
    * message  状态说明。
    * version  控制策略当前版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'control' => 'getControl',
            'regions' => 'getRegions',
            'state' => 'getState',
            'message' => 'getMessage',
            'version' => 'getVersion'
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
        $this->container['control'] = isset($data['control']) ? $data['control'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets control
    *  control
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\EnabledControl|null
    */
    public function getControl()
    {
        return $this->container['control'];
    }

    /**
    * Sets control
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\EnabledControl|null $control control
    *
    * @return $this
    */
    public function setControl($control)
    {
        $this->container['control'] = $control;
        return $this;
    }

    /**
    * Gets regions
    *  区域信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null $regions 区域信息。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets state
    *  是否允许启用控制策略。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 是否允许启用控制策略。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets message
    *  状态说明。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 状态说明。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets version
    *  控制策略当前版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 控制策略当前版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

