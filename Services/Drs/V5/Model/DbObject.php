<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectScope  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectScope' => 'string',
            'targetRootDb' => '\HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb',
            'objectInfo' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectScope  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectScope' => null,
        'targetRootDb' => null,
        'objectInfo' => null
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
    * objectScope  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectScope' => 'object_scope',
            'targetRootDb' => 'target_root_db',
            'objectInfo' => 'object_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectScope  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'objectScope' => 'setObjectScope',
            'targetRootDb' => 'setTargetRootDb',
            'objectInfo' => 'setObjectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectScope  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'objectScope' => 'getObjectScope',
            'targetRootDb' => 'getTargetRootDb',
            'objectInfo' => 'getObjectInfo'
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
    const OBJECT_SCOPE_ALL = 'all';
    const OBJECT_SCOPE_DATABASE = 'database';
    const OBJECT_SCOPE_TABLE = 'table';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectScopeAllowableValues()
    {
        return [
            self::OBJECT_SCOPE_ALL,
            self::OBJECT_SCOPE_DATABASE,
            self::OBJECT_SCOPE_TABLE,
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
        $this->container['objectScope'] = isset($data['objectScope']) ? $data['objectScope'] : null;
        $this->container['targetRootDb'] = isset($data['targetRootDb']) ? $data['targetRootDb'] : null;
        $this->container['objectInfo'] = isset($data['objectInfo']) ? $data['objectInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectScope'] === null) {
            $invalidProperties[] = "'objectScope' can't be null";
        }
            $allowedValues = $this->getObjectScopeAllowableValues();
                if (!is_null($this->container['objectScope']) && !in_array($this->container['objectScope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectScope', must be one of '%s'",
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
    * Gets objectScope
    *  数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    *
    * @return string
    */
    public function getObjectScope()
    {
        return $this->container['objectScope'];
    }

    /**
    * Sets objectScope
    *
    * @param string $objectScope 数据库对象迁移或同步范围。取值： - all：全部迁移。 - database：库级迁移或同步。 - table：表级迁移或同步。
    *
    * @return $this
    */
    public function setObjectScope($objectScope)
    {
        $this->container['objectScope'] = $objectScope;
        return $this;
    }

    /**
    * Gets targetRootDb
    *  targetRootDb
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb|null
    */
    public function getTargetRootDb()
    {
        return $this->container['targetRootDb'];
    }

    /**
    * Sets targetRootDb
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb|null $targetRootDb targetRootDb
    *
    * @return $this
    */
    public function setTargetRootDb($targetRootDb)
    {
        $this->container['targetRootDb'] = $targetRootDb;
        return $this;
    }

    /**
    * Gets objectInfo
    *  数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null
    */
    public function getObjectInfo()
    {
        return $this->container['objectInfo'];
    }

    /**
    * Sets objectInfo
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null $objectInfo 数据库对象迁移或同步信息，object_scope为all时不填，为库级或表级时必填。
    *
    * @return $this
    */
    public function setObjectInfo($objectInfo)
    {
        $this->container['objectInfo'] = $objectInfo;
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

