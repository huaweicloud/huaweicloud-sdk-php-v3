<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConflictFileDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConflictFileDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  旧文件
    * newPath  新文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  旧文件
    * newPath  新文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null
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
    * oldPath  旧文件
    * newPath  新文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  旧文件
    * newPath  新文件
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  旧文件
    * newPath  新文件
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath'
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
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['oldPath']) && (mb_strlen($this->container['oldPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'oldPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['oldPath']) && (mb_strlen($this->container['oldPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'oldPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['newPath']) && (mb_strlen($this->container['newPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'newPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['newPath']) && (mb_strlen($this->container['newPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'newPath', the character length must be bigger than or equal to 1.";
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
    * Gets oldPath
    *  旧文件
    *
    * @return string|null
    */
    public function getOldPath()
    {
        return $this->container['oldPath'];
    }

    /**
    * Sets oldPath
    *
    * @param string|null $oldPath 旧文件
    *
    * @return $this
    */
    public function setOldPath($oldPath)
    {
        $this->container['oldPath'] = $oldPath;
        return $this;
    }

    /**
    * Gets newPath
    *  新文件
    *
    * @return string|null
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param string|null $newPath 新文件
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
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

