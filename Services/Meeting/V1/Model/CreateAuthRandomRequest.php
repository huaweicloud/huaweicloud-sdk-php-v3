<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAuthRandomRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAuthRandomRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confId  会议ID
    * guestWaiting  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    * xPassword  会议密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confId' => 'string',
            'guestWaiting' => 'int',
            'xPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confId  会议ID
    * guestWaiting  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    * xPassword  会议密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confId' => null,
        'guestWaiting' => null,
        'xPassword' => null
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
    * confId  会议ID
    * guestWaiting  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    * xPassword  会议密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confId' => 'conf_id',
            'guestWaiting' => 'guest_waiting',
            'xPassword' => 'X-Password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confId  会议ID
    * guestWaiting  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    * xPassword  会议密码
    *
    * @var string[]
    */
    protected static $setters = [
            'confId' => 'setConfId',
            'guestWaiting' => 'setGuestWaiting',
            'xPassword' => 'setXPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confId  会议ID
    * guestWaiting  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    * xPassword  会议密码
    *
    * @var string[]
    */
    protected static $getters = [
            'confId' => 'getConfId',
            'guestWaiting' => 'getGuestWaiting',
            'xPassword' => 'getXPassword'
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
        $this->container['confId'] = isset($data['confId']) ? $data['confId'] : null;
        $this->container['guestWaiting'] = isset($data['guestWaiting']) ? $data['guestWaiting'] : null;
        $this->container['xPassword'] = isset($data['xPassword']) ? $data['xPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['confId'] === null) {
            $invalidProperties[] = "'confId' can't be null";
        }
            if ((mb_strlen($this->container['confId']) > 64)) {
                $invalidProperties[] = "invalid value for 'confId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['confId']) < 1)) {
                $invalidProperties[] = "invalid value for 'confId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['guestWaiting']) && ($this->container['guestWaiting'] > 1)) {
                $invalidProperties[] = "invalid value for 'guestWaiting', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['guestWaiting']) && ($this->container['guestWaiting'] < 0)) {
                $invalidProperties[] = "invalid value for 'guestWaiting', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['xPassword']) && (mb_strlen($this->container['xPassword']) > 6)) {
                $invalidProperties[] = "invalid value for 'xPassword', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['xPassword']) && (mb_strlen($this->container['xPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'xPassword', the character length must be bigger than or equal to 0.";
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
    * Gets confId
    *  会议ID
    *
    * @return string
    */
    public function getConfId()
    {
        return $this->container['confId'];
    }

    /**
    * Sets confId
    *
    * @param string $confId 会议ID
    *
    * @return $this
    */
    public function setConfId($confId)
    {
        $this->container['confId'] = $confId;
        return $this;
    }

    /**
    * Gets guestWaiting
    *  0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    *
    * @return int|null
    */
    public function getGuestWaiting()
    {
        return $this->container['guestWaiting'];
    }

    /**
    * Sets guestWaiting
    *
    * @param int|null $guestWaiting 0-不支持来宾会前等待页能力（默认）、1-支持来宾会前等待页能力
    *
    * @return $this
    */
    public function setGuestWaiting($guestWaiting)
    {
        $this->container['guestWaiting'] = $guestWaiting;
        return $this;
    }

    /**
    * Gets xPassword
    *  会议密码
    *
    * @return string|null
    */
    public function getXPassword()
    {
        return $this->container['xPassword'];
    }

    /**
    * Sets xPassword
    *
    * @param string|null $xPassword 会议密码
    *
    * @return $this
    */
    public function setXPassword($xPassword)
    {
        $this->container['xPassword'] = $xPassword;
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

