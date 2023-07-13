<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户ID。
    * statusCode  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    * account  用户帐号。
    * name  用户名。
    * englishName  英文名。
    * email  邮箱地址。
    * phone  用户手机。
    * deptName  用户部门。
    * number  用户SIP号码。
    * updateTime  用户信息最后更新时间。
    * isHardTerminal  是否为硬终端。 > 该参数将被废弃，请勿使用。
    * vmrId  用户虚拟会议室ID。
    * signature  用户签名。
    * title  职位。
    * description  描述信息。
    * hidePhone  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    * type  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    * deptCodes  部门编码列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'statusCode' => 'int',
            'account' => 'string',
            'name' => 'string',
            'englishName' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'deptName' => 'string',
            'number' => 'string',
            'updateTime' => 'int',
            'isHardTerminal' => 'bool',
            'vmrId' => 'string',
            'signature' => 'string',
            'title' => 'string',
            'description' => 'string',
            'hidePhone' => 'bool',
            'type' => 'string',
            'deptCodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户ID。
    * statusCode  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    * account  用户帐号。
    * name  用户名。
    * englishName  英文名。
    * email  邮箱地址。
    * phone  用户手机。
    * deptName  用户部门。
    * number  用户SIP号码。
    * updateTime  用户信息最后更新时间。
    * isHardTerminal  是否为硬终端。 > 该参数将被废弃，请勿使用。
    * vmrId  用户虚拟会议室ID。
    * signature  用户签名。
    * title  职位。
    * description  描述信息。
    * hidePhone  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    * type  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    * deptCodes  部门编码列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'statusCode' => null,
        'account' => null,
        'name' => null,
        'englishName' => null,
        'email' => null,
        'phone' => null,
        'deptName' => null,
        'number' => null,
        'updateTime' => 'int64',
        'isHardTerminal' => null,
        'vmrId' => null,
        'signature' => null,
        'title' => null,
        'description' => null,
        'hidePhone' => null,
        'type' => null,
        'deptCodes' => null
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
    * id  用户ID。
    * statusCode  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    * account  用户帐号。
    * name  用户名。
    * englishName  英文名。
    * email  邮箱地址。
    * phone  用户手机。
    * deptName  用户部门。
    * number  用户SIP号码。
    * updateTime  用户信息最后更新时间。
    * isHardTerminal  是否为硬终端。 > 该参数将被废弃，请勿使用。
    * vmrId  用户虚拟会议室ID。
    * signature  用户签名。
    * title  职位。
    * description  描述信息。
    * hidePhone  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    * type  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    * deptCodes  部门编码列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'statusCode' => 'statusCode',
            'account' => 'account',
            'name' => 'name',
            'englishName' => 'englishName',
            'email' => 'email',
            'phone' => 'phone',
            'deptName' => 'deptName',
            'number' => 'number',
            'updateTime' => 'updateTime',
            'isHardTerminal' => 'isHardTerminal',
            'vmrId' => 'vmrId',
            'signature' => 'signature',
            'title' => 'title',
            'description' => 'description',
            'hidePhone' => 'hidePhone',
            'type' => 'type',
            'deptCodes' => 'deptCodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户ID。
    * statusCode  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    * account  用户帐号。
    * name  用户名。
    * englishName  英文名。
    * email  邮箱地址。
    * phone  用户手机。
    * deptName  用户部门。
    * number  用户SIP号码。
    * updateTime  用户信息最后更新时间。
    * isHardTerminal  是否为硬终端。 > 该参数将被废弃，请勿使用。
    * vmrId  用户虚拟会议室ID。
    * signature  用户签名。
    * title  职位。
    * description  描述信息。
    * hidePhone  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    * type  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    * deptCodes  部门编码列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'statusCode' => 'setStatusCode',
            'account' => 'setAccount',
            'name' => 'setName',
            'englishName' => 'setEnglishName',
            'email' => 'setEmail',
            'phone' => 'setPhone',
            'deptName' => 'setDeptName',
            'number' => 'setNumber',
            'updateTime' => 'setUpdateTime',
            'isHardTerminal' => 'setIsHardTerminal',
            'vmrId' => 'setVmrId',
            'signature' => 'setSignature',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'hidePhone' => 'setHidePhone',
            'type' => 'setType',
            'deptCodes' => 'setDeptCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户ID。
    * statusCode  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    * account  用户帐号。
    * name  用户名。
    * englishName  英文名。
    * email  邮箱地址。
    * phone  用户手机。
    * deptName  用户部门。
    * number  用户SIP号码。
    * updateTime  用户信息最后更新时间。
    * isHardTerminal  是否为硬终端。 > 该参数将被废弃，请勿使用。
    * vmrId  用户虚拟会议室ID。
    * signature  用户签名。
    * title  职位。
    * description  描述信息。
    * hidePhone  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    * type  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    * deptCodes  部门编码列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'statusCode' => 'getStatusCode',
            'account' => 'getAccount',
            'name' => 'getName',
            'englishName' => 'getEnglishName',
            'email' => 'getEmail',
            'phone' => 'getPhone',
            'deptName' => 'getDeptName',
            'number' => 'getNumber',
            'updateTime' => 'getUpdateTime',
            'isHardTerminal' => 'getIsHardTerminal',
            'vmrId' => 'getVmrId',
            'signature' => 'getSignature',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'hidePhone' => 'getHidePhone',
            'type' => 'getType',
            'deptCodes' => 'getDeptCodes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['englishName'] = isset($data['englishName']) ? $data['englishName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isHardTerminal'] = isset($data['isHardTerminal']) ? $data['isHardTerminal'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hidePhone'] = isset($data['hidePhone']) ? $data['hidePhone'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deptCodes'] = isset($data['deptCodes']) ? $data['deptCodes'] : null;
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
    * Gets id
    *  用户ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 用户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets statusCode
    *  查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 查询用户详情时, 根据不同情况，响应不同。 * 0： 查询成功且用户信息有变化， 响应会把新的信息都返回回去 * 1 ：查询成功且用户信息没有变化，响应只会返回用户ID * 2 ：用户不存在 * 3 ：无权限查询这个用户
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets account
    *  用户帐号。
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
    * @param string|null $account 用户帐号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
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
    * Gets englishName
    *  英文名。
    *
    * @return string|null
    */
    public function getEnglishName()
    {
        return $this->container['englishName'];
    }

    /**
    * Sets englishName
    *
    * @param string|null $englishName 英文名。
    *
    * @return $this
    */
    public function setEnglishName($englishName)
    {
        $this->container['englishName'] = $englishName;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱地址。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phone
    *  用户手机。
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
    * @param string|null $phone 用户手机。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets deptName
    *  用户部门。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 用户部门。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets number
    *  用户SIP号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 用户SIP号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets updateTime
    *  用户信息最后更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 用户信息最后更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isHardTerminal
    *  是否为硬终端。 > 该参数将被废弃，请勿使用。
    *
    * @return bool|null
    */
    public function getIsHardTerminal()
    {
        return $this->container['isHardTerminal'];
    }

    /**
    * Sets isHardTerminal
    *
    * @param bool|null $isHardTerminal 是否为硬终端。 > 该参数将被废弃，请勿使用。
    *
    * @return $this
    */
    public function setIsHardTerminal($isHardTerminal)
    {
        $this->container['isHardTerminal'] = $isHardTerminal;
        return $this;
    }

    /**
    * Gets vmrId
    *  用户虚拟会议室ID。
    *
    * @return string|null
    */
    public function getVmrId()
    {
        return $this->container['vmrId'];
    }

    /**
    * Sets vmrId
    *
    * @param string|null $vmrId 用户虚拟会议室ID。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets signature
    *  用户签名。
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature 用户签名。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets title
    *  职位。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 职位。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hidePhone
    *  是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    *
    * @return bool|null
    */
    public function getHidePhone()
    {
        return $this->container['hidePhone'];
    }

    /**
    * Sets hidePhone
    *
    * @param bool|null $hidePhone 是否隐藏手机号（如果为true，其他人查询该用户时，不会返回该用户的手机号。自己查自己是可见的）
    *
    * @return $this
    */
    public function setHidePhone($hidePhone)
    {
        $this->container['hidePhone'] = $hidePhone;
        return $this;
    }

    /**
    * Gets type
    *  类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型： * NORMAL_USER=普通用户 * HARD_TERMINAL=硬终端用户 * WHITE_BOARD=第三方白板 * HW_VISION_MEMBER=智慧屏
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets deptCodes
    *  部门编码列表。
    *
    * @return string[]|null
    */
    public function getDeptCodes()
    {
        return $this->container['deptCodes'];
    }

    /**
    * Sets deptCodes
    *
    * @param string[]|null $deptCodes 部门编码列表。
    *
    * @return $this
    */
    public function setDeptCodes($deptCodes)
    {
        $this->container['deptCodes'] = $deptCodes;
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

