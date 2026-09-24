<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtendInfoUpdateExpirationTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtendInfoUpdateExpirationTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affectedBackupsCount  本次任务受影响的备份个数
    * expirationDay  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affectedBackupsCount' => 'int',
            'expirationDay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affectedBackupsCount  本次任务受影响的备份个数
    * expirationDay  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affectedBackupsCount' => 'int32',
        'expirationDay' => null
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
    * affectedBackupsCount  本次任务受影响的备份个数
    * expirationDay  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affectedBackupsCount' => 'affected_backups_count',
            'expirationDay' => 'expiration_day'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affectedBackupsCount  本次任务受影响的备份个数
    * expirationDay  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @var string[]
    */
    protected static $setters = [
            'affectedBackupsCount' => 'setAffectedBackupsCount',
            'expirationDay' => 'setExpirationDay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affectedBackupsCount  本次任务受影响的备份个数
    * expirationDay  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @var string[]
    */
    protected static $getters = [
            'affectedBackupsCount' => 'getAffectedBackupsCount',
            'expirationDay' => 'getExpirationDay'
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
        $this->container['affectedBackupsCount'] = isset($data['affectedBackupsCount']) ? $data['affectedBackupsCount'] : null;
        $this->container['expirationDay'] = isset($data['expirationDay']) ? $data['expirationDay'] : null;
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
    * Gets affectedBackupsCount
    *  本次任务受影响的备份个数
    *
    * @return int|null
    */
    public function getAffectedBackupsCount()
    {
        return $this->container['affectedBackupsCount'];
    }

    /**
    * Sets affectedBackupsCount
    *
    * @param int|null $affectedBackupsCount 本次任务受影响的备份个数
    *
    * @return $this
    */
    public function setAffectedBackupsCount($affectedBackupsCount)
    {
        $this->container['affectedBackupsCount'] = $affectedBackupsCount;
        return $this;
    }

    /**
    * Gets expirationDay
    *  本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @return string|null
    */
    public function getExpirationDay()
    {
        return $this->container['expirationDay'];
    }

    /**
    * Sets expirationDay
    *
    * @param string|null $expirationDay 本次任务预期过期日期，格式：YYYY-MM-DD。
    *
    * @return $this
    */
    public function setExpirationDay($expirationDay)
    {
        $this->container['expirationDay'] = $expirationDay;
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

