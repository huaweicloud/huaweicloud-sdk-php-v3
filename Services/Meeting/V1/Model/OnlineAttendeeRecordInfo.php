<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OnlineAttendeeRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OnlineAttendeeRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantId  与会者标识
    * name  与会者名称
    * callNumber  呼叫号码
    * role  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    * thirdAccount  开放性场景标识第三方账号信息
    * account  用户账号
    * userId  用户UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantId' => 'string',
            'name' => 'string',
            'callNumber' => 'string',
            'role' => 'int',
            'thirdAccount' => 'string',
            'account' => 'string',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantId  与会者标识
    * name  与会者名称
    * callNumber  呼叫号码
    * role  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    * thirdAccount  开放性场景标识第三方账号信息
    * account  用户账号
    * userId  用户UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantId' => null,
        'name' => null,
        'callNumber' => null,
        'role' => 'int32',
        'thirdAccount' => null,
        'account' => null,
        'userId' => null
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
    * participantId  与会者标识
    * name  与会者名称
    * callNumber  呼叫号码
    * role  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    * thirdAccount  开放性场景标识第三方账号信息
    * account  用户账号
    * userId  用户UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantId' => 'participant_id',
            'name' => 'name',
            'callNumber' => 'call_number',
            'role' => 'role',
            'thirdAccount' => 'third_account',
            'account' => 'account',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantId  与会者标识
    * name  与会者名称
    * callNumber  呼叫号码
    * role  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    * thirdAccount  开放性场景标识第三方账号信息
    * account  用户账号
    * userId  用户UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'participantId' => 'setParticipantId',
            'name' => 'setName',
            'callNumber' => 'setCallNumber',
            'role' => 'setRole',
            'thirdAccount' => 'setThirdAccount',
            'account' => 'setAccount',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantId  与会者标识
    * name  与会者名称
    * callNumber  呼叫号码
    * role  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    * thirdAccount  开放性场景标识第三方账号信息
    * account  用户账号
    * userId  用户UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'participantId' => 'getParticipantId',
            'name' => 'getName',
            'callNumber' => 'getCallNumber',
            'role' => 'getRole',
            'thirdAccount' => 'getThirdAccount',
            'account' => 'getAccount',
            'userId' => 'getUserId'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['callNumber'] = isset($data['callNumber']) ? $data['callNumber'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['thirdAccount'] = isset($data['thirdAccount']) ? $data['thirdAccount'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
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
    * Gets participantId
    *  与会者标识
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 与会者标识
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets name
    *  与会者名称
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
    * @param string|null $name 与会者名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets callNumber
    *  呼叫号码
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
    * @param string|null $callNumber 呼叫号码
    *
    * @return $this
    */
    public function setCallNumber($callNumber)
    {
        $this->container['callNumber'] = $callNumber;
        return $this;
    }

    /**
    * Gets role
    *  会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role 会议中的角色，枚举值如下： 1：会议主席 0：普通与会者
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets thirdAccount
    *  开放性场景标识第三方账号信息
    *
    * @return string|null
    */
    public function getThirdAccount()
    {
        return $this->container['thirdAccount'];
    }

    /**
    * Sets thirdAccount
    *
    * @param string|null $thirdAccount 开放性场景标识第三方账号信息
    *
    * @return $this
    */
    public function setThirdAccount($thirdAccount)
    {
        $this->container['thirdAccount'] = $thirdAccount;
        return $this;
    }

    /**
    * Gets account
    *  用户账号
    *
    * @return string|null
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string|null $account 用户账号
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets userId
    *  用户UUID
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
    * @param string|null $userId 用户UUID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

