<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtraInfoList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtraInfoList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * item  表示key值，可能是qq, wechat, alipay及bank等。
    * value  表示value值，对应qq, wechat, alipay及bank等的账号。
    * note  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'item' => 'string',
            'value' => 'string',
            'note' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * item  表示key值，可能是qq, wechat, alipay及bank等。
    * value  表示value值，对应qq, wechat, alipay及bank等的账号。
    * note  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'item' => null,
        'value' => null,
        'note' => null
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
    * item  表示key值，可能是qq, wechat, alipay及bank等。
    * value  表示value值，对应qq, wechat, alipay及bank等的账号。
    * note  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'item' => 'item',
            'value' => 'value',
            'note' => 'note'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * item  表示key值，可能是qq, wechat, alipay及bank等。
    * value  表示value值，对应qq, wechat, alipay及bank等的账号。
    * note  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @var string[]
    */
    protected static $setters = [
            'item' => 'setItem',
            'value' => 'setValue',
            'note' => 'setNote'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * item  表示key值，可能是qq, wechat, alipay及bank等。
    * value  表示value值，对应qq, wechat, alipay及bank等的账号。
    * note  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @var string[]
    */
    protected static $getters = [
            'item' => 'getItem',
            'value' => 'getValue',
            'note' => 'getNote'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
    * Gets item
    *  表示key值，可能是qq, wechat, alipay及bank等。
    *
    * @return string|null
    */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
    * Sets item
    *
    * @param string|null $item 表示key值，可能是qq, wechat, alipay及bank等。
    *
    * @return $this
    */
    public function setItem($item)
    {
        $this->container['item'] = $item;
        return $this;
    }

    /**
    * Gets value
    *  表示value值，对应qq, wechat, alipay及bank等的账号。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 表示value值，对应qq, wechat, alipay及bank等的账号。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets note
    *  对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @return string[]|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string[]|null $note 对应item关联的额外信息，为bank时第一个默认为户名，第二个为开户行，为alipay时第一个默认为账号名。
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
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

