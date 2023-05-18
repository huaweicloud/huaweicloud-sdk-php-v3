<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealTimeAttendee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealTimeAttendee';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  与会者的华为云会议帐号。
    * userUuid  与会者的用户UUID。
    * name  与会者名称。
    * phone  与会者号码。
    * phoneLeft  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    * phoneRight  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'userUuid' => 'string',
            'name' => 'string',
            'phone' => 'string',
            'phoneLeft' => 'string',
            'phoneRight' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  与会者的华为云会议帐号。
    * userUuid  与会者的用户UUID。
    * name  与会者名称。
    * phone  与会者号码。
    * phoneLeft  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    * phoneRight  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'userUuid' => null,
        'name' => null,
        'phone' => null,
        'phoneLeft' => null,
        'phoneRight' => null
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
    * accountId  与会者的华为云会议帐号。
    * userUuid  与会者的用户UUID。
    * name  与会者名称。
    * phone  与会者号码。
    * phoneLeft  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    * phoneRight  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'accountID',
            'userUuid' => 'userUUID',
            'name' => 'name',
            'phone' => 'phone',
            'phoneLeft' => 'phoneLeft',
            'phoneRight' => 'phoneRight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  与会者的华为云会议帐号。
    * userUuid  与会者的用户UUID。
    * name  与会者名称。
    * phone  与会者号码。
    * phoneLeft  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    * phoneRight  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'userUuid' => 'setUserUuid',
            'name' => 'setName',
            'phone' => 'setPhone',
            'phoneLeft' => 'setPhoneLeft',
            'phoneRight' => 'setPhoneRight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  与会者的华为云会议帐号。
    * userUuid  与会者的用户UUID。
    * name  与会者名称。
    * phone  与会者号码。
    * phoneLeft  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    * phoneRight  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'userUuid' => 'getUserUuid',
            'name' => 'getName',
            'phone' => 'getPhone',
            'phoneLeft' => 'getPhoneLeft',
            'phoneRight' => 'getPhoneRight'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phoneLeft'] = isset($data['phoneLeft']) ? $data['phoneLeft'] : null;
        $this->container['phoneRight'] = isset($data['phoneRight']) ? $data['phoneRight'] : null;
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
    * Gets accountId
    *  与会者的华为云会议帐号。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 与会者的华为云会议帐号。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets userUuid
    *  与会者的用户UUID。
    *
    * @return string|null
    */
    public function getUserUuid()
    {
        return $this->container['userUuid'];
    }

    /**
    * Sets userUuid
    *
    * @param string|null $userUuid 与会者的用户UUID。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets name
    *  与会者名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 与会者名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
    *  与会者号码。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 与会者号码。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets phoneLeft
    *  设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getPhoneLeft()
    {
        return $this->container['phoneLeft'];
    }

    /**
    * Sets phoneLeft
    *
    * @param string|null $phoneLeft 设备为三屏智真时的左屏号码。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setPhoneLeft($phoneLeft)
    {
        $this->container['phoneLeft'] = $phoneLeft;
        return $this;
    }

    /**
    * Gets phoneRight
    *  设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getPhoneRight()
    {
        return $this->container['phoneRight'];
    }

    /**
    * Sets phoneRight
    *
    * @param string|null $phoneRight 设备为三屏智真时的右屏号码。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setPhoneRight($phoneRight)
    {
        $this->container['phoneRight'] = $phoneRight;
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

