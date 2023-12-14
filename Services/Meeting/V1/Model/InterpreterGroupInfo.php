<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterpreterGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterpreterGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  传译组序号。
    * groupName  传译组名称。
    * firstLanguage  传译组支持的第一种语言。
    * secondLanguage  传译组支持的第二种语言。
    * interpreters  传译员列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupName' => 'string',
            'firstLanguage' => 'string',
            'secondLanguage' => 'string',
            'interpreters' => '\HuaweiCloud\SDK\Meeting\V1\Model\InterpreterInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  传译组序号。
    * groupName  传译组名称。
    * firstLanguage  传译组支持的第一种语言。
    * secondLanguage  传译组支持的第二种语言。
    * interpreters  传译员列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'firstLanguage' => null,
        'secondLanguage' => null,
        'interpreters' => null
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
    * groupId  传译组序号。
    * groupName  传译组名称。
    * firstLanguage  传译组支持的第一种语言。
    * secondLanguage  传译组支持的第二种语言。
    * interpreters  传译员列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'groupID',
            'groupName' => 'groupName',
            'firstLanguage' => 'firstLanguage',
            'secondLanguage' => 'secondLanguage',
            'interpreters' => 'interpreters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  传译组序号。
    * groupName  传译组名称。
    * firstLanguage  传译组支持的第一种语言。
    * secondLanguage  传译组支持的第二种语言。
    * interpreters  传译员列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'firstLanguage' => 'setFirstLanguage',
            'secondLanguage' => 'setSecondLanguage',
            'interpreters' => 'setInterpreters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  传译组序号。
    * groupName  传译组名称。
    * firstLanguage  传译组支持的第一种语言。
    * secondLanguage  传译组支持的第二种语言。
    * interpreters  传译员列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'firstLanguage' => 'getFirstLanguage',
            'secondLanguage' => 'getSecondLanguage',
            'interpreters' => 'getInterpreters'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['firstLanguage'] = isset($data['firstLanguage']) ? $data['firstLanguage'] : null;
        $this->container['secondLanguage'] = isset($data['secondLanguage']) ? $data['secondLanguage'] : null;
        $this->container['interpreters'] = isset($data['interpreters']) ? $data['interpreters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
        if ($this->container['firstLanguage'] === null) {
            $invalidProperties[] = "'firstLanguage' can't be null";
        }
        if ($this->container['secondLanguage'] === null) {
            $invalidProperties[] = "'secondLanguage' can't be null";
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
    * Gets groupId
    *  传译组序号。
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 传译组序号。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  传译组名称。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 传译组名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets firstLanguage
    *  传译组支持的第一种语言。
    *
    * @return string
    */
    public function getFirstLanguage()
    {
        return $this->container['firstLanguage'];
    }

    /**
    * Sets firstLanguage
    *
    * @param string $firstLanguage 传译组支持的第一种语言。
    *
    * @return $this
    */
    public function setFirstLanguage($firstLanguage)
    {
        $this->container['firstLanguage'] = $firstLanguage;
        return $this;
    }

    /**
    * Gets secondLanguage
    *  传译组支持的第二种语言。
    *
    * @return string
    */
    public function getSecondLanguage()
    {
        return $this->container['secondLanguage'];
    }

    /**
    * Sets secondLanguage
    *
    * @param string $secondLanguage 传译组支持的第二种语言。
    *
    * @return $this
    */
    public function setSecondLanguage($secondLanguage)
    {
        $this->container['secondLanguage'] = $secondLanguage;
        return $this;
    }

    /**
    * Gets interpreters
    *  传译员列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\InterpreterInfo[]|null
    */
    public function getInterpreters()
    {
        return $this->container['interpreters'];
    }

    /**
    * Sets interpreters
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\InterpreterInfo[]|null $interpreters 传译员列表。
    *
    * @return $this
    */
    public function setInterpreters($interpreters)
    {
        $this->container['interpreters'] = $interpreters;
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

