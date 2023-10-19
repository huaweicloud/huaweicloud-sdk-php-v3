<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRestoreTablesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRestoreTablesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restoreTime  备份时间点，时间戳格式。
    * lastTableInfo  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    * restoreTables  数据库信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restoreTime' => 'string',
            'lastTableInfo' => 'string',
            'restoreTables' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateRestoreDatabaseTableInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restoreTime  备份时间点，时间戳格式。
    * lastTableInfo  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    * restoreTables  数据库信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restoreTime' => null,
        'lastTableInfo' => null,
        'restoreTables' => null
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
    * restoreTime  备份时间点，时间戳格式。
    * lastTableInfo  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    * restoreTables  数据库信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restoreTime' => 'restore_time',
            'lastTableInfo' => 'last_table_info',
            'restoreTables' => 'restore_tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restoreTime  备份时间点，时间戳格式。
    * lastTableInfo  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    * restoreTables  数据库信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'restoreTime' => 'setRestoreTime',
            'lastTableInfo' => 'setLastTableInfo',
            'restoreTables' => 'setRestoreTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restoreTime  备份时间点，时间戳格式。
    * lastTableInfo  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    * restoreTables  数据库信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'restoreTime' => 'getRestoreTime',
            'lastTableInfo' => 'getLastTableInfo',
            'restoreTables' => 'getRestoreTables'
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
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['lastTableInfo'] = isset($data['lastTableInfo']) ? $data['lastTableInfo'] : null;
        $this->container['restoreTables'] = isset($data['restoreTables']) ? $data['restoreTables'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
        }
        if ($this->container['restoreTables'] === null) {
            $invalidProperties[] = "'restoreTables' can't be null";
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
    * Gets restoreTime
    *  备份时间点，时间戳格式。
    *
    * @return string
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string $restoreTime 备份时间点，时间戳格式。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets lastTableInfo
    *  是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    *
    * @return string|null
    */
    public function getLastTableInfo()
    {
        return $this->container['lastTableInfo'];
    }

    /**
    * Sets lastTableInfo
    *
    * @param string|null $lastTableInfo 是否是最新库表。默认为false。 - true：是最新库表。 - false：是恢复时间点库表。
    *
    * @return $this
    */
    public function setLastTableInfo($lastTableInfo)
    {
        $this->container['lastTableInfo'] = $lastTableInfo;
        return $this;
    }

    /**
    * Gets restoreTables
    *  数据库信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateRestoreDatabaseTableInfo[]
    */
    public function getRestoreTables()
    {
        return $this->container['restoreTables'];
    }

    /**
    * Sets restoreTables
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateRestoreDatabaseTableInfo[] $restoreTables 数据库信息。
    *
    * @return $this
    */
    public function setRestoreTables($restoreTables)
    {
        $this->container['restoreTables'] = $restoreTables;
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

