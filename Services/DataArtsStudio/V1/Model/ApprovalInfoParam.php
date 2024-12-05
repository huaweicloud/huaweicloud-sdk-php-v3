<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalInfoParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalInfoParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  审批单ID列表，ID字符串。
    * msg  审批单信息，审批人填写的审批意见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'msg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  审批单ID列表，ID字符串。
    * msg  审批单信息，审批人填写的审批意见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'msg' => null
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
    * ids  审批单ID列表，ID字符串。
    * msg  审批单信息，审批人填写的审批意见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'msg' => 'msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  审批单ID列表，ID字符串。
    * msg  审批单信息，审批人填写的审批意见。
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'msg' => 'setMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  审批单ID列表，ID字符串。
    * msg  审批单信息，审批人填写的审批意见。
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'msg' => 'getMsg'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
        }
        if ($this->container['msg'] === null) {
            $invalidProperties[] = "'msg' can't be null";
        }
            if ((mb_strlen($this->container['msg']) > 500)) {
                $invalidProperties[] = "invalid value for 'msg', the character length must be smaller than or equal to 500.";
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
    * Gets ids
    *  审批单ID列表，ID字符串。
    *
    * @return string[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[] $ids 审批单ID列表，ID字符串。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets msg
    *  审批单信息，审批人填写的审批意见。
    *
    * @return string
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string $msg 审批单信息，审批人填写的审批意见。
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
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

