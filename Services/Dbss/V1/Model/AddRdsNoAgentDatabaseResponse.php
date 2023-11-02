<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddRdsNoAgentDatabaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddRdsNoAgentDatabaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * illegalDbId  添加失败的数据库实例id
    * legalDbId  添加成功的数据库实例id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'illegalDbId' => 'string[]',
            'legalDbId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * illegalDbId  添加失败的数据库实例id
    * legalDbId  添加成功的数据库实例id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'illegalDbId' => null,
        'legalDbId' => null
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
    * illegalDbId  添加失败的数据库实例id
    * legalDbId  添加成功的数据库实例id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'illegalDbId' => 'illegal_db_id',
            'legalDbId' => 'legal_db_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * illegalDbId  添加失败的数据库实例id
    * legalDbId  添加成功的数据库实例id
    *
    * @var string[]
    */
    protected static $setters = [
            'illegalDbId' => 'setIllegalDbId',
            'legalDbId' => 'setLegalDbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * illegalDbId  添加失败的数据库实例id
    * legalDbId  添加成功的数据库实例id
    *
    * @var string[]
    */
    protected static $getters = [
            'illegalDbId' => 'getIllegalDbId',
            'legalDbId' => 'getLegalDbId'
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
        $this->container['illegalDbId'] = isset($data['illegalDbId']) ? $data['illegalDbId'] : null;
        $this->container['legalDbId'] = isset($data['legalDbId']) ? $data['legalDbId'] : null;
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
    * Gets illegalDbId
    *  添加失败的数据库实例id
    *
    * @return string[]|null
    */
    public function getIllegalDbId()
    {
        return $this->container['illegalDbId'];
    }

    /**
    * Sets illegalDbId
    *
    * @param string[]|null $illegalDbId 添加失败的数据库实例id
    *
    * @return $this
    */
    public function setIllegalDbId($illegalDbId)
    {
        $this->container['illegalDbId'] = $illegalDbId;
        return $this;
    }

    /**
    * Gets legalDbId
    *  添加成功的数据库实例id
    *
    * @return string[]|null
    */
    public function getLegalDbId()
    {
        return $this->container['legalDbId'];
    }

    /**
    * Sets legalDbId
    *
    * @param string[]|null $legalDbId 添加成功的数据库实例id
    *
    * @return $this
    */
    public function setLegalDbId($legalDbId)
    {
        $this->container['legalDbId'] = $legalDbId;
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

