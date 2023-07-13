<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListErrorServersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListErrorServersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  迁移过程中发生错误的源端数量
    * migrationErrors  迁移过程中发生的错误详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'migrationErrors' => '\HuaweiCloud\SDK\Sms\V3\Model\MigrationErrors[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  迁移过程中发生错误的源端数量
    * migrationErrors  迁移过程中发生的错误详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'migrationErrors' => null
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
    * count  迁移过程中发生错误的源端数量
    * migrationErrors  迁移过程中发生的错误详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'migrationErrors' => 'migration_errors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  迁移过程中发生错误的源端数量
    * migrationErrors  迁移过程中发生的错误详情
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'migrationErrors' => 'setMigrationErrors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  迁移过程中发生错误的源端数量
    * migrationErrors  迁移过程中发生的错误详情
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'migrationErrors' => 'getMigrationErrors'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['migrationErrors'] = isset($data['migrationErrors']) ? $data['migrationErrors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets count
    *  迁移过程中发生错误的源端数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 迁移过程中发生错误的源端数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets migrationErrors
    *  迁移过程中发生的错误详情
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\MigrationErrors[]|null
    */
    public function getMigrationErrors()
    {
        return $this->container['migrationErrors'];
    }

    /**
    * Sets migrationErrors
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\MigrationErrors[]|null $migrationErrors 迁移过程中发生的错误详情
    *
    * @return $this
    */
    public function setMigrationErrors($migrationErrors)
    {
        $this->container['migrationErrors'] = $migrationErrors;
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

