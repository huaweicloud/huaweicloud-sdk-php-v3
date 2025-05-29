<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckScriptRiskResDataBlacklistCommands implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckScriptRiskRes_data_blacklist_commands';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandName  命令。
    * commandRule  匹配规则。
    * example  实例。
    * descriptionEn  黑名单命令中文描述。
    * descriptionZh  黑名单命令英文描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandName' => 'string',
            'commandRule' => 'string',
            'example' => 'string',
            'descriptionEn' => 'string',
            'descriptionZh' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandName  命令。
    * commandRule  匹配规则。
    * example  实例。
    * descriptionEn  黑名单命令中文描述。
    * descriptionZh  黑名单命令英文描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandName' => null,
        'commandRule' => null,
        'example' => null,
        'descriptionEn' => null,
        'descriptionZh' => null
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
    * commandName  命令。
    * commandRule  匹配规则。
    * example  实例。
    * descriptionEn  黑名单命令中文描述。
    * descriptionZh  黑名单命令英文描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandName' => 'command_name',
            'commandRule' => 'command_rule',
            'example' => 'example',
            'descriptionEn' => 'description_en',
            'descriptionZh' => 'description_zh'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandName  命令。
    * commandRule  匹配规则。
    * example  实例。
    * descriptionEn  黑名单命令中文描述。
    * descriptionZh  黑名单命令英文描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'commandName' => 'setCommandName',
            'commandRule' => 'setCommandRule',
            'example' => 'setExample',
            'descriptionEn' => 'setDescriptionEn',
            'descriptionZh' => 'setDescriptionZh'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandName  命令。
    * commandRule  匹配规则。
    * example  实例。
    * descriptionEn  黑名单命令中文描述。
    * descriptionZh  黑名单命令英文描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'commandName' => 'getCommandName',
            'commandRule' => 'getCommandRule',
            'example' => 'getExample',
            'descriptionEn' => 'getDescriptionEn',
            'descriptionZh' => 'getDescriptionZh'
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
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['commandRule'] = isset($data['commandRule']) ? $data['commandRule'] : null;
        $this->container['example'] = isset($data['example']) ? $data['example'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
        $this->container['descriptionZh'] = isset($data['descriptionZh']) ? $data['descriptionZh'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commandName']) && (mb_strlen($this->container['commandName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['commandName']) && (mb_strlen($this->container['commandName']) < 1)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commandRule']) && (mb_strlen($this->container['commandRule']) > 1024)) {
                $invalidProperties[] = "invalid value for 'commandRule', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['commandRule']) && (mb_strlen($this->container['commandRule']) < 1)) {
                $invalidProperties[] = "invalid value for 'commandRule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) > 1024)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) < 1)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descriptionZh']) && (mb_strlen($this->container['descriptionZh']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionZh', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionZh']) && (mb_strlen($this->container['descriptionZh']) < 1)) {
                $invalidProperties[] = "invalid value for 'descriptionZh', the character length must be bigger than or equal to 1.";
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
    * Gets commandName
    *  命令。
    *
    * @return string|null
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string|null $commandName 命令。
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets commandRule
    *  匹配规则。
    *
    * @return string|null
    */
    public function getCommandRule()
    {
        return $this->container['commandRule'];
    }

    /**
    * Sets commandRule
    *
    * @param string|null $commandRule 匹配规则。
    *
    * @return $this
    */
    public function setCommandRule($commandRule)
    {
        $this->container['commandRule'] = $commandRule;
        return $this;
    }

    /**
    * Gets example
    *  实例。
    *
    * @return string|null
    */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
    * Sets example
    *
    * @param string|null $example 实例。
    *
    * @return $this
    */
    public function setExample($example)
    {
        $this->container['example'] = $example;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  黑名单命令中文描述。
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn 黑名单命令中文描述。
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
        return $this;
    }

    /**
    * Gets descriptionZh
    *  黑名单命令英文描述。
    *
    * @return string|null
    */
    public function getDescriptionZh()
    {
        return $this->container['descriptionZh'];
    }

    /**
    * Sets descriptionZh
    *
    * @param string|null $descriptionZh 黑名单命令英文描述。
    *
    * @return $this
    */
    public function setDescriptionZh($descriptionZh)
    {
        $this->container['descriptionZh'] = $descriptionZh;
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

