<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreInstanceFromCollectionRequestBodyCollections implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreInstanceFromCollectionRequestBody_collections';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldName  恢复前表名。
    * newName  恢复后表名。
    * restoreCollectionTime  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldName' => 'string',
            'newName' => 'string',
            'restoreCollectionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldName  恢复前表名。
    * newName  恢复后表名。
    * restoreCollectionTime  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldName' => null,
        'newName' => null,
        'restoreCollectionTime' => null
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
    * oldName  恢复前表名。
    * newName  恢复后表名。
    * restoreCollectionTime  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldName' => 'old_name',
            'newName' => 'new_name',
            'restoreCollectionTime' => 'restore_collection_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldName  恢复前表名。
    * newName  恢复后表名。
    * restoreCollectionTime  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldName' => 'setOldName',
            'newName' => 'setNewName',
            'restoreCollectionTime' => 'setRestoreCollectionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldName  恢复前表名。
    * newName  恢复后表名。
    * restoreCollectionTime  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldName' => 'getOldName',
            'newName' => 'getNewName',
            'restoreCollectionTime' => 'getRestoreCollectionTime'
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
        $this->container['oldName'] = isset($data['oldName']) ? $data['oldName'] : null;
        $this->container['newName'] = isset($data['newName']) ? $data['newName'] : null;
        $this->container['restoreCollectionTime'] = isset($data['restoreCollectionTime']) ? $data['restoreCollectionTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oldName'] === null) {
            $invalidProperties[] = "'oldName' can't be null";
        }
        if ($this->container['restoreCollectionTime'] === null) {
            $invalidProperties[] = "'restoreCollectionTime' can't be null";
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
    * Gets oldName
    *  恢复前表名。
    *
    * @return string
    */
    public function getOldName()
    {
        return $this->container['oldName'];
    }

    /**
    * Sets oldName
    *
    * @param string $oldName 恢复前表名。
    *
    * @return $this
    */
    public function setOldName($oldName)
    {
        $this->container['oldName'] = $oldName;
        return $this;
    }

    /**
    * Gets newName
    *  恢复后表名。
    *
    * @return string|null
    */
    public function getNewName()
    {
        return $this->container['newName'];
    }

    /**
    * Sets newName
    *
    * @param string|null $newName 恢复后表名。
    *
    * @return $this
    */
    public function setNewName($newName)
    {
        $this->container['newName'] = $newName;
        return $this;
    }

    /**
    * Gets restoreCollectionTime
    *  数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @return string
    */
    public function getRestoreCollectionTime()
    {
        return $this->container['restoreCollectionTime'];
    }

    /**
    * Sets restoreCollectionTime
    *
    * @param string $restoreCollectionTime 数据库集合恢复时间点。UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @return $this
    */
    public function setRestoreCollectionTime($restoreCollectionTime)
    {
        $this->container['restoreCollectionTime'] = $restoreCollectionTime;
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

