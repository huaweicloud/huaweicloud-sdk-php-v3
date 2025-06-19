<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackUpMindmapParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackUpMindmapParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bakName  备份名称
    * memo  备注
    * mindmapId  脑图id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bakName' => 'string',
            'memo' => 'string',
            'mindmapId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bakName  备份名称
    * memo  备注
    * mindmapId  脑图id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bakName' => null,
        'memo' => null,
        'mindmapId' => null
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
    * bakName  备份名称
    * memo  备注
    * mindmapId  脑图id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bakName' => 'bak_name',
            'memo' => 'memo',
            'mindmapId' => 'mindmap_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bakName  备份名称
    * memo  备注
    * mindmapId  脑图id
    *
    * @var string[]
    */
    protected static $setters = [
            'bakName' => 'setBakName',
            'memo' => 'setMemo',
            'mindmapId' => 'setMindmapId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bakName  备份名称
    * memo  备注
    * mindmapId  脑图id
    *
    * @var string[]
    */
    protected static $getters = [
            'bakName' => 'getBakName',
            'memo' => 'getMemo',
            'mindmapId' => 'getMindmapId'
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
        $this->container['bakName'] = isset($data['bakName']) ? $data['bakName'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
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
    * Gets bakName
    *  备份名称
    *
    * @return string|null
    */
    public function getBakName()
    {
        return $this->container['bakName'];
    }

    /**
    * Sets bakName
    *
    * @param string|null $bakName 备份名称
    *
    * @return $this
    */
    public function setBakName($bakName)
    {
        $this->container['bakName'] = $bakName;
        return $this;
    }

    /**
    * Gets memo
    *  备注
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 备注
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets mindmapId
    *  脑图id
    *
    * @return string|null
    */
    public function getMindmapId()
    {
        return $this->container['mindmapId'];
    }

    /**
    * Sets mindmapId
    *
    * @param string|null $mindmapId 脑图id
    *
    * @return $this
    */
    public function setMindmapId($mindmapId)
    {
        $this->container['mindmapId'] = $mindmapId;
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

