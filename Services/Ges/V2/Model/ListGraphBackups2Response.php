<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGraphBackups2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGraphBackups2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupCount  备份总个数。请求失败时，字段为空。
    * backupList  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupCount' => 'int',
            'backupList' => '\HuaweiCloud\SDK\Ges\V2\Model\ListBackupsRespBackupList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupCount  备份总个数。请求失败时，字段为空。
    * backupList  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupCount' => 'int32',
        'backupList' => null
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
    * backupCount  备份总个数。请求失败时，字段为空。
    * backupList  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupCount' => 'backup_count',
            'backupList' => 'backup_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupCount  备份总个数。请求失败时，字段为空。
    * backupList  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupCount' => 'setBackupCount',
            'backupList' => 'setBackupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupCount  备份总个数。请求失败时，字段为空。
    * backupList  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupCount' => 'getBackupCount',
            'backupList' => 'getBackupList'
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
        $this->container['backupCount'] = isset($data['backupCount']) ? $data['backupCount'] : null;
        $this->container['backupList'] = isset($data['backupList']) ? $data['backupList'] : null;
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
    * Gets backupCount
    *  备份总个数。请求失败时，字段为空。
    *
    * @return int|null
    */
    public function getBackupCount()
    {
        return $this->container['backupCount'];
    }

    /**
    * Sets backupCount
    *
    * @param int|null $backupCount 备份总个数。请求失败时，字段为空。
    *
    * @return $this
    */
    public function setBackupCount($backupCount)
    {
        $this->container['backupCount'] = $backupCount;
        return $this;
    }

    /**
    * Gets backupList
    *  当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListBackupsRespBackupList[]|null
    */
    public function getBackupList()
    {
        return $this->container['backupList'];
    }

    /**
    * Sets backupList
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListBackupsRespBackupList[]|null $backupList 当前Project ID下的所有图的备份列表。请求失败时，字段为空。
    *
    * @return $this
    */
    public function setBackupList($backupList)
    {
        $this->container['backupList'] = $backupList;
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

