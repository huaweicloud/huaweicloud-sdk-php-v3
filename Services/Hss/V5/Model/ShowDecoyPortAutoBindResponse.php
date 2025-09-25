<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDecoyPortAutoBindResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDecoyPortAutoBindResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoBind  是否自动绑定
    * windowsPolicy  默认绑定的策略id
    * linuxPolicy  默认绑定的策略id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoBind' => 'bool',
            'windowsPolicy' => 'string',
            'linuxPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoBind  是否自动绑定
    * windowsPolicy  默认绑定的策略id
    * linuxPolicy  默认绑定的策略id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoBind' => null,
        'windowsPolicy' => null,
        'linuxPolicy' => null
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
    * autoBind  是否自动绑定
    * windowsPolicy  默认绑定的策略id
    * linuxPolicy  默认绑定的策略id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoBind' => 'auto_bind',
            'windowsPolicy' => 'windows_policy',
            'linuxPolicy' => 'linux_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoBind  是否自动绑定
    * windowsPolicy  默认绑定的策略id
    * linuxPolicy  默认绑定的策略id
    *
    * @var string[]
    */
    protected static $setters = [
            'autoBind' => 'setAutoBind',
            'windowsPolicy' => 'setWindowsPolicy',
            'linuxPolicy' => 'setLinuxPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoBind  是否自动绑定
    * windowsPolicy  默认绑定的策略id
    * linuxPolicy  默认绑定的策略id
    *
    * @var string[]
    */
    protected static $getters = [
            'autoBind' => 'getAutoBind',
            'windowsPolicy' => 'getWindowsPolicy',
            'linuxPolicy' => 'getLinuxPolicy'
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
        $this->container['autoBind'] = isset($data['autoBind']) ? $data['autoBind'] : null;
        $this->container['windowsPolicy'] = isset($data['windowsPolicy']) ? $data['windowsPolicy'] : null;
        $this->container['linuxPolicy'] = isset($data['linuxPolicy']) ? $data['linuxPolicy'] : null;
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
    * Gets autoBind
    *  是否自动绑定
    *
    * @return bool|null
    */
    public function getAutoBind()
    {
        return $this->container['autoBind'];
    }

    /**
    * Sets autoBind
    *
    * @param bool|null $autoBind 是否自动绑定
    *
    * @return $this
    */
    public function setAutoBind($autoBind)
    {
        $this->container['autoBind'] = $autoBind;
        return $this;
    }

    /**
    * Gets windowsPolicy
    *  默认绑定的策略id
    *
    * @return string|null
    */
    public function getWindowsPolicy()
    {
        return $this->container['windowsPolicy'];
    }

    /**
    * Sets windowsPolicy
    *
    * @param string|null $windowsPolicy 默认绑定的策略id
    *
    * @return $this
    */
    public function setWindowsPolicy($windowsPolicy)
    {
        $this->container['windowsPolicy'] = $windowsPolicy;
        return $this;
    }

    /**
    * Gets linuxPolicy
    *  默认绑定的策略id
    *
    * @return string|null
    */
    public function getLinuxPolicy()
    {
        return $this->container['linuxPolicy'];
    }

    /**
    * Sets linuxPolicy
    *
    * @param string|null $linuxPolicy 默认绑定的策略id
    *
    * @return $this
    */
    public function setLinuxPolicy($linuxPolicy)
    {
        $this->container['linuxPolicy'] = $linuxPolicy;
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

