<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlaybookStatisticDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlaybookStatisticDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unapprovedNum  未审核剧本数量
    * disabledNum  未启用剧本数量
    * enabledNum  已启用剧本数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unapprovedNum' => 'int',
            'disabledNum' => 'int',
            'enabledNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unapprovedNum  未审核剧本数量
    * disabledNum  未启用剧本数量
    * enabledNum  已启用剧本数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unapprovedNum' => 'int32',
        'disabledNum' => 'int32',
        'enabledNum' => 'int32'
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
    * unapprovedNum  未审核剧本数量
    * disabledNum  未启用剧本数量
    * enabledNum  已启用剧本数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unapprovedNum' => 'unapproved_num',
            'disabledNum' => 'disabled_num',
            'enabledNum' => 'enabled_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unapprovedNum  未审核剧本数量
    * disabledNum  未启用剧本数量
    * enabledNum  已启用剧本数量
    *
    * @var string[]
    */
    protected static $setters = [
            'unapprovedNum' => 'setUnapprovedNum',
            'disabledNum' => 'setDisabledNum',
            'enabledNum' => 'setEnabledNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unapprovedNum  未审核剧本数量
    * disabledNum  未启用剧本数量
    * enabledNum  已启用剧本数量
    *
    * @var string[]
    */
    protected static $getters = [
            'unapprovedNum' => 'getUnapprovedNum',
            'disabledNum' => 'getDisabledNum',
            'enabledNum' => 'getEnabledNum'
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
        $this->container['unapprovedNum'] = isset($data['unapprovedNum']) ? $data['unapprovedNum'] : null;
        $this->container['disabledNum'] = isset($data['disabledNum']) ? $data['disabledNum'] : null;
        $this->container['enabledNum'] = isset($data['enabledNum']) ? $data['enabledNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unapprovedNum']) && ($this->container['unapprovedNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'unapprovedNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['unapprovedNum']) && ($this->container['unapprovedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unapprovedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disabledNum']) && ($this->container['disabledNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'disabledNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['disabledNum']) && ($this->container['disabledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'disabledNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enabledNum']) && ($this->container['enabledNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'enabledNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['enabledNum']) && ($this->container['enabledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'enabledNum', must be bigger than or equal to 0.";
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
    * Gets unapprovedNum
    *  未审核剧本数量
    *
    * @return int|null
    */
    public function getUnapprovedNum()
    {
        return $this->container['unapprovedNum'];
    }

    /**
    * Sets unapprovedNum
    *
    * @param int|null $unapprovedNum 未审核剧本数量
    *
    * @return $this
    */
    public function setUnapprovedNum($unapprovedNum)
    {
        $this->container['unapprovedNum'] = $unapprovedNum;
        return $this;
    }

    /**
    * Gets disabledNum
    *  未启用剧本数量
    *
    * @return int|null
    */
    public function getDisabledNum()
    {
        return $this->container['disabledNum'];
    }

    /**
    * Sets disabledNum
    *
    * @param int|null $disabledNum 未启用剧本数量
    *
    * @return $this
    */
    public function setDisabledNum($disabledNum)
    {
        $this->container['disabledNum'] = $disabledNum;
        return $this;
    }

    /**
    * Gets enabledNum
    *  已启用剧本数量
    *
    * @return int|null
    */
    public function getEnabledNum()
    {
        return $this->container['enabledNum'];
    }

    /**
    * Sets enabledNum
    *
    * @param int|null $enabledNum 已启用剧本数量
    *
    * @return $this
    */
    public function setEnabledNum($enabledNum)
    {
        $this->container['enabledNum'] = $enabledNum;
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

