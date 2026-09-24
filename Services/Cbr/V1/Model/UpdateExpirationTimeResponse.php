<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateExpirationTimeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateExpirationTimeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affectedBackupsCount  成功修改过期时间的备份数量。
    * newExpirationDay  修改后的备份过期时间，格式：YYYY-MM-DD。
    * operationLogId  任务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affectedBackupsCount' => 'int',
            'newExpirationDay' => 'string',
            'operationLogId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affectedBackupsCount  成功修改过期时间的备份数量。
    * newExpirationDay  修改后的备份过期时间，格式：YYYY-MM-DD。
    * operationLogId  任务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affectedBackupsCount' => 'int32',
        'newExpirationDay' => null,
        'operationLogId' => null
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
    * affectedBackupsCount  成功修改过期时间的备份数量。
    * newExpirationDay  修改后的备份过期时间，格式：YYYY-MM-DD。
    * operationLogId  任务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affectedBackupsCount' => 'affected_backups_count',
            'newExpirationDay' => 'new_expiration_day',
            'operationLogId' => 'operation_log_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affectedBackupsCount  成功修改过期时间的备份数量。
    * newExpirationDay  修改后的备份过期时间，格式：YYYY-MM-DD。
    * operationLogId  任务ID
    *
    * @var string[]
    */
    protected static $setters = [
            'affectedBackupsCount' => 'setAffectedBackupsCount',
            'newExpirationDay' => 'setNewExpirationDay',
            'operationLogId' => 'setOperationLogId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affectedBackupsCount  成功修改过期时间的备份数量。
    * newExpirationDay  修改后的备份过期时间，格式：YYYY-MM-DD。
    * operationLogId  任务ID
    *
    * @var string[]
    */
    protected static $getters = [
            'affectedBackupsCount' => 'getAffectedBackupsCount',
            'newExpirationDay' => 'getNewExpirationDay',
            'operationLogId' => 'getOperationLogId'
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
        $this->container['newExpirationDay'] = isset($data['newExpirationDay']) ? $data['newExpirationDay'] : null;
        $this->container['operationLogId'] = isset($data['operationLogId']) ? $data['operationLogId'] : null;
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
    *  成功修改过期时间的备份数量。
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
    * @param int|null $affectedBackupsCount 成功修改过期时间的备份数量。
    *
    * @return $this
    */
    public function setAffectedBackupsCount($affectedBackupsCount)
    {
        $this->container['affectedBackupsCount'] = $affectedBackupsCount;
        return $this;
    }

    /**
    * Gets newExpirationDay
    *  修改后的备份过期时间，格式：YYYY-MM-DD。
    *
    * @return string|null
    */
    public function getNewExpirationDay()
    {
        return $this->container['newExpirationDay'];
    }

    /**
    * Sets newExpirationDay
    *
    * @param string|null $newExpirationDay 修改后的备份过期时间，格式：YYYY-MM-DD。
    *
    * @return $this
    */
    public function setNewExpirationDay($newExpirationDay)
    {
        $this->container['newExpirationDay'] = $newExpirationDay;
        return $this;
    }

    /**
    * Gets operationLogId
    *  任务ID
    *
    * @return string|null
    */
    public function getOperationLogId()
    {
        return $this->container['operationLogId'];
    }

    /**
    * Sets operationLogId
    *
    * @param string|null $operationLogId 任务ID
    *
    * @return $this
    */
    public function setOperationLogId($operationLogId)
    {
        $this->container['operationLogId'] = $operationLogId;
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

