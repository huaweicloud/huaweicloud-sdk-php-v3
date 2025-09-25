<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCicdConfigurationCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCicdConfigurationCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cicdCommand  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cicdCommand' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cicdCommand  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cicdCommand' => null
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
    * cicdCommand  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cicdCommand' => 'cicd_command'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cicdCommand  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $setters = [
            'cicdCommand' => 'setCicdCommand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cicdCommand  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @var string[]
    */
    protected static $getters = [
            'cicdCommand' => 'getCicdCommand'
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
        $this->container['cicdCommand'] = isset($data['cicdCommand']) ? $data['cicdCommand'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cicdCommand']) && (mb_strlen($this->container['cicdCommand']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cicdCommand', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cicdCommand']) && (mb_strlen($this->container['cicdCommand']) < 1)) {
                $invalidProperties[] = "invalid value for 'cicdCommand', the character length must be bigger than or equal to 1.";
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
    * Gets cicdCommand
    *  **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @return string|null
    */
    public function getCicdCommand()
    {
        return $this->container['cicdCommand'];
    }

    /**
    * Sets cicdCommand
    *
    * @param string|null $cicdCommand **参数解释**： cicd接入配置命令 **取值范围**： 字符长度1-1024位
    *
    * @return $this
    */
    public function setCicdCommand($cicdCommand)
    {
        $this->container['cicdCommand'] = $cicdCommand;
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

