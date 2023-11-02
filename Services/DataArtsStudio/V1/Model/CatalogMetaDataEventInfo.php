<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogMetaDataEventInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogMetaDataEventInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventTs  事件发生时的时间戳
    * eventType  事件类型
    * eventMessage  事件消息，Map<String,Object>结构
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventTs' => 'int',
            'eventType' => 'string',
            'eventMessage' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventTs  事件发生时的时间戳
    * eventType  事件类型
    * eventMessage  事件消息，Map<String,Object>结构
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventTs' => 'int64',
        'eventType' => null,
        'eventMessage' => null
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
    * eventTs  事件发生时的时间戳
    * eventType  事件类型
    * eventMessage  事件消息，Map<String,Object>结构
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventTs' => 'event_ts',
            'eventType' => 'event_type',
            'eventMessage' => 'event_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventTs  事件发生时的时间戳
    * eventType  事件类型
    * eventMessage  事件消息，Map<String,Object>结构
    *
    * @var string[]
    */
    protected static $setters = [
            'eventTs' => 'setEventTs',
            'eventType' => 'setEventType',
            'eventMessage' => 'setEventMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventTs  事件发生时的时间戳
    * eventType  事件类型
    * eventMessage  事件消息，Map<String,Object>结构
    *
    * @var string[]
    */
    protected static $getters = [
            'eventTs' => 'getEventTs',
            'eventType' => 'getEventType',
            'eventMessage' => 'getEventMessage'
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
    const EVENT_TYPE_ADD_FOREIGN_KEY_EVENT = 'AddForeignKeyEvent';
    const EVENT_TYPE_ADD_NOT_NULL_CONSTRAINT_EVENT = 'AddNotNullConstraintEvent';
    const EVENT_TYPE_ADD_PRIMARY_KEY_EVENT = 'AddPrimaryKeyEvent';
    const EVENT_TYPE_ADD_UNIQUE_CONSTRAINT_EVENT = 'AddUniqueConstraintEvent';
    const EVENT_TYPE_ALTER_DATABASE_EVENT = 'AlterDatabaseEvent';
    const EVENT_TYPE_ADD_PARTITION_EVENT = 'AddPartitionEvent';
    const EVENT_TYPE_ALTER_PARTITION_EVENT = 'AlterPartitionEvent';
    const EVENT_TYPE_ALTER_TABLE_EVENT = 'AlterTableEvent';
    const EVENT_TYPE_ALTER_CATALOG_EVENT = 'AlterCatalogEvent';
    const EVENT_TYPE_CREATE_CATALOG_EVENT = 'CreateCatalogEvent';
    const EVENT_TYPE_CREATE_DATABASE_EVENT = 'CreateDatabaseEvent';
    const EVENT_TYPE_CREATE_FUNCTION_EVENT = 'CreateFunctionEvent';
    const EVENT_TYPE_CREATE_TABLE_EVENT = 'CreateTableEvent';
    const EVENT_TYPE_DROP_CONSTRAINT_EVENT = 'DropConstraintEvent';
    const EVENT_TYPE_DROP_DATABASE_EVENT = 'DropDatabaseEvent';
    const EVENT_TYPE_DROP_FUNCTION_EVENT = 'DropFunctionEvent';
    const EVENT_TYPE_DROP_PARTITION_EVENT = 'DropPartitionEvent';
    const EVENT_TYPE_DROP_TABLE_EVENT = 'DropTableEvent';
    const EVENT_TYPE_DROP_CATALOG_EVENT = 'DropCatalogEvent';
    const EVENT_TYPE_ADD_INDEX_EVENT = 'AddIndexEvent';
    const EVENT_TYPE_ALTER_INDEX_EVENT = 'AlterIndexEvent';
    const EVENT_TYPE_DROP_INDEX_EVENT = 'DropIndexEvent';
    const EVENT_TYPE_ALTER_SCHEMA_EVENT = 'AlterSchemaEvent';
    const EVENT_TYPE_CREATE_SCHEMA_EVENT = 'CreateSchemaEvent';
    const EVENT_TYPE_DROP_SCHEMA_EVENT = 'DropSchemaEvent';
    const EVENT_TYPE_ALTER_COLUMN_EVENT = 'AlterColumnEvent';
    const EVENT_TYPE_ADD_COLUMN_EVENT = 'AddColumnEvent';
    const EVENT_TYPE_DROP_COLUMN_EVENT = 'DropColumnEvent';
    const EVENT_TYPE_ALTER_TRIGGER_EVENT = 'AlterTriggerEvent';
    const EVENT_TYPE_ADD_TRIGGER_EVENT = 'AddTriggerEvent';
    const EVENT_TYPE_DROP_TRIGGER_EVENT = 'DropTriggerEvent';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_ADD_FOREIGN_KEY_EVENT,
            self::EVENT_TYPE_ADD_NOT_NULL_CONSTRAINT_EVENT,
            self::EVENT_TYPE_ADD_PRIMARY_KEY_EVENT,
            self::EVENT_TYPE_ADD_UNIQUE_CONSTRAINT_EVENT,
            self::EVENT_TYPE_ALTER_DATABASE_EVENT,
            self::EVENT_TYPE_ADD_PARTITION_EVENT,
            self::EVENT_TYPE_ALTER_PARTITION_EVENT,
            self::EVENT_TYPE_ALTER_TABLE_EVENT,
            self::EVENT_TYPE_ALTER_CATALOG_EVENT,
            self::EVENT_TYPE_CREATE_CATALOG_EVENT,
            self::EVENT_TYPE_CREATE_DATABASE_EVENT,
            self::EVENT_TYPE_CREATE_FUNCTION_EVENT,
            self::EVENT_TYPE_CREATE_TABLE_EVENT,
            self::EVENT_TYPE_DROP_CONSTRAINT_EVENT,
            self::EVENT_TYPE_DROP_DATABASE_EVENT,
            self::EVENT_TYPE_DROP_FUNCTION_EVENT,
            self::EVENT_TYPE_DROP_PARTITION_EVENT,
            self::EVENT_TYPE_DROP_TABLE_EVENT,
            self::EVENT_TYPE_DROP_CATALOG_EVENT,
            self::EVENT_TYPE_ADD_INDEX_EVENT,
            self::EVENT_TYPE_ALTER_INDEX_EVENT,
            self::EVENT_TYPE_DROP_INDEX_EVENT,
            self::EVENT_TYPE_ALTER_SCHEMA_EVENT,
            self::EVENT_TYPE_CREATE_SCHEMA_EVENT,
            self::EVENT_TYPE_DROP_SCHEMA_EVENT,
            self::EVENT_TYPE_ALTER_COLUMN_EVENT,
            self::EVENT_TYPE_ADD_COLUMN_EVENT,
            self::EVENT_TYPE_DROP_COLUMN_EVENT,
            self::EVENT_TYPE_ALTER_TRIGGER_EVENT,
            self::EVENT_TYPE_ADD_TRIGGER_EVENT,
            self::EVENT_TYPE_DROP_TRIGGER_EVENT,
        ];
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
        $this->container['eventTs'] = isset($data['eventTs']) ? $data['eventTs'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventMessage'] = isset($data['eventMessage']) ? $data['eventMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets eventTs
    *  事件发生时的时间戳
    *
    * @return int|null
    */
    public function getEventTs()
    {
        return $this->container['eventTs'];
    }

    /**
    * Sets eventTs
    *
    * @param int|null $eventTs 事件发生时的时间戳
    *
    * @return $this
    */
    public function setEventTs($eventTs)
    {
        $this->container['eventTs'] = $eventTs;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventMessage
    *  事件消息，Map<String,Object>结构
    *
    * @return object|null
    */
    public function getEventMessage()
    {
        return $this->container['eventMessage'];
    }

    /**
    * Sets eventMessage
    *
    * @param object|null $eventMessage 事件消息，Map<String,Object>结构
    *
    * @return $this
    */
    public function setEventMessage($eventMessage)
    {
        $this->container['eventMessage'] = $eventMessage;
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

