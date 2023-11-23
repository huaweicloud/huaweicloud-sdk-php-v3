<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteInstancesSessionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteInstancesSessionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAll  是否删除全部会话。
    * sessionIds  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAll' => 'bool',
            'sessionIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAll  是否删除全部会话。
    * sessionIds  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAll' => null,
        'sessionIds' => null
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
    * isAll  是否删除全部会话。
    * sessionIds  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAll' => 'is_all',
            'sessionIds' => 'session_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAll  是否删除全部会话。
    * sessionIds  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAll' => 'setIsAll',
            'sessionIds' => 'setSessionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAll  是否删除全部会话。
    * sessionIds  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'isAll' => 'getIsAll',
            'sessionIds' => 'getSessionIds'
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
        $this->container['isAll'] = isset($data['isAll']) ? $data['isAll'] : null;
        $this->container['sessionIds'] = isset($data['sessionIds']) ? $data['sessionIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isAll'] === null) {
            $invalidProperties[] = "'isAll' can't be null";
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
    * Gets isAll
    *  是否删除全部会话。
    *
    * @return bool
    */
    public function getIsAll()
    {
        return $this->container['isAll'];
    }

    /**
    * Sets isAll
    *
    * @param bool $isAll 是否删除全部会话。
    *
    * @return $this
    */
    public function setIsAll($isAll)
    {
        $this->container['isAll'] = $isAll;
        return $this;
    }

    /**
    * Gets sessionIds
    *  需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @return string[]|null
    */
    public function getSessionIds()
    {
        return $this->container['sessionIds'];
    }

    /**
    * Sets sessionIds
    *
    * @param string[]|null $sessionIds 需要删除的会话id。is_all为false的时候，session_ids为必填，不能为空。
    *
    * @return $this
    */
    public function setSessionIds($sessionIds)
    {
        $this->container['sessionIds'] = $sessionIds;
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

