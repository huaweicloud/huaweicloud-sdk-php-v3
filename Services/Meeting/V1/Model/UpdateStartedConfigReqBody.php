<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStartedConfigReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStartedConfigReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockSharing' => 'int',
            'callInRestriction' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockSharing' => 'int32',
        'callInRestriction' => 'int32'
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
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockSharing' => 'lockSharing',
            'callInRestriction' => 'callInRestriction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @var string[]
    */
    protected static $setters = [
            'lockSharing' => 'setLockSharing',
            'callInRestriction' => 'setCallInRestriction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @var string[]
    */
    protected static $getters = [
            'lockSharing' => 'getLockSharing',
            'callInRestriction' => 'getCallInRestriction'
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
        $this->container['lockSharing'] = isset($data['lockSharing']) ? $data['lockSharing'] : 0;
        $this->container['callInRestriction'] = isset($data['callInRestriction']) ? $data['callInRestriction'] : 0;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lockSharing']) && ($this->container['lockSharing'] > 1)) {
                $invalidProperties[] = "invalid value for 'lockSharing', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['lockSharing']) && ($this->container['lockSharing'] < 0)) {
                $invalidProperties[] = "invalid value for 'lockSharing', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] > 3)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] < 0)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be bigger than or equal to 0.";
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
    * Gets lockSharing
    *  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    *
    * @return int|null
    */
    public function getLockSharing()
    {
        return $this->container['lockSharing'];
    }

    /**
    * Sets lockSharing
    *
    * @param int|null $lockSharing 锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    *
    * @return $this
    */
    public function setLockSharing($lockSharing)
    {
        $this->container['lockSharing'] = $lockSharing;
        return $this;
    }

    /**
    * Gets callInRestriction
    *  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return int|null
    */
    public function getCallInRestriction()
    {
        return $this->container['callInRestriction'];
    }

    /**
    * Sets callInRestriction
    *
    * @param int|null $callInRestriction 允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return $this
    */
    public function setCallInRestriction($callInRestriction)
    {
        $this->container['callInRestriction'] = $callInRestriction;
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

