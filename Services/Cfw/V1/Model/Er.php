<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Er implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ER';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * erId  ER ID，创建东西向防护引用的 ID
    * erAttachId  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'erId' => 'string',
            'erAttachId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * erId  ER ID，创建东西向防护引用的 ID
    * erAttachId  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'erId' => null,
        'erAttachId' => null
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
    * erId  ER ID，创建东西向防护引用的 ID
    * erAttachId  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'erId' => 'er_id',
            'erAttachId' => 'er_attach_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * erId  ER ID，创建东西向防护引用的 ID
    * erAttachId  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @var string[]
    */
    protected static $setters = [
            'erId' => 'setErId',
            'erAttachId' => 'setErAttachId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * erId  ER ID，创建东西向防护引用的 ID
    * erAttachId  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @var string[]
    */
    protected static $getters = [
            'erId' => 'getErId',
            'erAttachId' => 'getErAttachId'
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
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['erAttachId'] = isset($data['erAttachId']) ? $data['erAttachId'] : null;
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
    * Gets erId
    *  ER ID，创建东西向防护引用的 ID
    *
    * @return string|null
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string|null $erId ER ID，创建东西向防护引用的 ID
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets erAttachId
    *  企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @return string|null
    */
    public function getErAttachId()
    {
        return $this->container['erAttachId'];
    }

    /**
    * Sets erAttachId
    *
    * @param string|null $erAttachId 企业路由器连接id，该连接用于连接防火墙和企业路由器，此字段可在通过id在ER界面查询指定er后在管理连接界面查询连接了解连接具体情况。
    *
    * @return $this
    */
    public function setErAttachId($erAttachId)
    {
        $this->container['erAttachId'] = $erAttachId;
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

