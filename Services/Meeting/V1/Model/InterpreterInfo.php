<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterpreterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterpreterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loginAccount  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    * userId  用户的userUUID。
    * callNumber  呼叫号码。
    * name  用户名。
    * interpreterId  传译员序号，AI传译组下传译员唯一标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loginAccount' => 'string',
            'userId' => 'string',
            'callNumber' => 'string',
            'name' => 'string',
            'interpreterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loginAccount  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    * userId  用户的userUUID。
    * callNumber  呼叫号码。
    * name  用户名。
    * interpreterId  传译员序号，AI传译组下传译员唯一标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loginAccount' => null,
        'userId' => null,
        'callNumber' => null,
        'name' => null,
        'interpreterId' => null
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
    * loginAccount  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    * userId  用户的userUUID。
    * callNumber  呼叫号码。
    * name  用户名。
    * interpreterId  传译员序号，AI传译组下传译员唯一标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loginAccount' => 'loginAccount',
            'userId' => 'userID',
            'callNumber' => 'callNumber',
            'name' => 'name',
            'interpreterId' => 'interpreterId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loginAccount  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    * userId  用户的userUUID。
    * callNumber  呼叫号码。
    * name  用户名。
    * interpreterId  传译员序号，AI传译组下传译员唯一标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'loginAccount' => 'setLoginAccount',
            'userId' => 'setUserId',
            'callNumber' => 'setCallNumber',
            'name' => 'setName',
            'interpreterId' => 'setInterpreterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loginAccount  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    * userId  用户的userUUID。
    * callNumber  呼叫号码。
    * name  用户名。
    * interpreterId  传译员序号，AI传译组下传译员唯一标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'loginAccount' => 'getLoginAccount',
            'userId' => 'getUserId',
            'callNumber' => 'getCallNumber',
            'name' => 'getName',
            'interpreterId' => 'getInterpreterId'
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
        $this->container['loginAccount'] = isset($data['loginAccount']) ? $data['loginAccount'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['callNumber'] = isset($data['callNumber']) ? $data['callNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['interpreterId'] = isset($data['interpreterId']) ? $data['interpreterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loginAccount'] === null) {
            $invalidProperties[] = "'loginAccount' can't be null";
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
    * Gets loginAccount
    *  用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    *
    * @return string
    */
    public function getLoginAccount()
    {
        return $this->container['loginAccount'];
    }

    /**
    * Sets loginAccount
    *
    * @param string $loginAccount 用户登录账号，可以是账号、手机、邮箱其中一个,loginAccount和userID必须二选一。
    *
    * @return $this
    */
    public function setLoginAccount($loginAccount)
    {
        $this->container['loginAccount'] = $loginAccount;
        return $this;
    }

    /**
    * Gets userId
    *  用户的userUUID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户的userUUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets callNumber
    *  呼叫号码。
    *
    * @return string|null
    */
    public function getCallNumber()
    {
        return $this->container['callNumber'];
    }

    /**
    * Sets callNumber
    *
    * @param string|null $callNumber 呼叫号码。
    *
    * @return $this
    */
    public function setCallNumber($callNumber)
    {
        $this->container['callNumber'] = $callNumber;
        return $this;
    }

    /**
    * Gets name
    *  用户名。
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
    * @param string|null $name 用户名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets interpreterId
    *  传译员序号，AI传译组下传译员唯一标识。
    *
    * @return string|null
    */
    public function getInterpreterId()
    {
        return $this->container['interpreterId'];
    }

    /**
    * Sets interpreterId
    *
    * @param string|null $interpreterId 传译员序号，AI传译组下传译员唯一标识。
    *
    * @return $this
    */
    public function setInterpreterId($interpreterId)
    {
        $this->container['interpreterId'] = $interpreterId;
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

