<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * migrateType  迁移类型
    * configurations  配置项的具体配置信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'migrateType' => 'string',
            'configurations' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * migrateType  迁移类型
    * configurations  配置项的具体配置信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'migrateType' => null,
        'configurations' => null
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
    * taskId  任务ID
    * migrateType  迁移类型
    * configurations  配置项的具体配置信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'migrateType' => 'migrate_type',
            'configurations' => 'configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * migrateType  迁移类型
    * configurations  配置项的具体配置信息
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'migrateType' => 'setMigrateType',
            'configurations' => 'setConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * migrateType  迁移类型
    * configurations  配置项的具体配置信息
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'migrateType' => 'getMigrateType',
            'configurations' => 'getConfigurations'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['migrateType'] = isset($data['migrateType']) ? $data['migrateType'] : null;
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 100)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migrateType']) && (mb_strlen($this->container['migrateType']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrateType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrateType']) && (mb_strlen($this->container['migrateType']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrateType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['configurations']) && (mb_strlen($this->container['configurations']) > 1024)) {
                $invalidProperties[] = "invalid value for 'configurations', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['configurations']) && (mb_strlen($this->container['configurations']) < 0)) {
                $invalidProperties[] = "invalid value for 'configurations', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets migrateType
    *  迁移类型
    *
    * @return string|null
    */
    public function getMigrateType()
    {
        return $this->container['migrateType'];
    }

    /**
    * Sets migrateType
    *
    * @param string|null $migrateType 迁移类型
    *
    * @return $this
    */
    public function setMigrateType($migrateType)
    {
        $this->container['migrateType'] = $migrateType;
        return $this;
    }

    /**
    * Gets configurations
    *  配置项的具体配置信息
    *
    * @return string|null
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param string|null $configurations 配置项的具体配置信息
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
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

