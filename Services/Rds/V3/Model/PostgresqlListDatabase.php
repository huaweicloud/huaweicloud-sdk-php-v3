<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgresqlListDatabase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgresqlListDatabase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称。
    * owner  数据库所属用户。
    * characterSet  数据库使用的字符集，例如UTF8。
    * collateSet  数据库排序集，例如en_US.UTF-8等。
    * size  数据库大小（单位：字节）。
    * comment  数据库备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'owner' => 'string',
            'characterSet' => 'string',
            'collateSet' => 'string',
            'size' => 'int',
            'comment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称。
    * owner  数据库所属用户。
    * characterSet  数据库使用的字符集，例如UTF8。
    * collateSet  数据库排序集，例如en_US.UTF-8等。
    * size  数据库大小（单位：字节）。
    * comment  数据库备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'owner' => null,
        'characterSet' => null,
        'collateSet' => null,
        'size' => 'int64',
        'comment' => null
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
    * name  数据库名称。
    * owner  数据库所属用户。
    * characterSet  数据库使用的字符集，例如UTF8。
    * collateSet  数据库排序集，例如en_US.UTF-8等。
    * size  数据库大小（单位：字节）。
    * comment  数据库备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'owner' => 'owner',
            'characterSet' => 'character_set',
            'collateSet' => 'collate_set',
            'size' => 'size',
            'comment' => 'comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称。
    * owner  数据库所属用户。
    * characterSet  数据库使用的字符集，例如UTF8。
    * collateSet  数据库排序集，例如en_US.UTF-8等。
    * size  数据库大小（单位：字节）。
    * comment  数据库备注
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'owner' => 'setOwner',
            'characterSet' => 'setCharacterSet',
            'collateSet' => 'setCollateSet',
            'size' => 'setSize',
            'comment' => 'setComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称。
    * owner  数据库所属用户。
    * characterSet  数据库使用的字符集，例如UTF8。
    * collateSet  数据库排序集，例如en_US.UTF-8等。
    * size  数据库大小（单位：字节）。
    * comment  数据库备注
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'owner' => 'getOwner',
            'characterSet' => 'getCharacterSet',
            'collateSet' => 'getCollateSet',
            'size' => 'getSize',
            'comment' => 'getComment'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['characterSet'] = isset($data['characterSet']) ? $data['characterSet'] : null;
        $this->container['collateSet'] = isset($data['collateSet']) ? $data['collateSet'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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
    * Gets name
    *  数据库名称。
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
    * @param string|null $name 数据库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  数据库所属用户。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 数据库所属用户。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets characterSet
    *  数据库使用的字符集，例如UTF8。
    *
    * @return string|null
    */
    public function getCharacterSet()
    {
        return $this->container['characterSet'];
    }

    /**
    * Sets characterSet
    *
    * @param string|null $characterSet 数据库使用的字符集，例如UTF8。
    *
    * @return $this
    */
    public function setCharacterSet($characterSet)
    {
        $this->container['characterSet'] = $characterSet;
        return $this;
    }

    /**
    * Gets collateSet
    *  数据库排序集，例如en_US.UTF-8等。
    *
    * @return string|null
    */
    public function getCollateSet()
    {
        return $this->container['collateSet'];
    }

    /**
    * Sets collateSet
    *
    * @param string|null $collateSet 数据库排序集，例如en_US.UTF-8等。
    *
    * @return $this
    */
    public function setCollateSet($collateSet)
    {
        $this->container['collateSet'] = $collateSet;
        return $this;
    }

    /**
    * Gets size
    *  数据库大小（单位：字节）。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 数据库大小（单位：字节）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets comment
    *  数据库备注
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 数据库备注
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
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

