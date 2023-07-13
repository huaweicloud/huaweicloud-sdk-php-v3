<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchUserResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchUserResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户UUID。
    * userAccount  华为云会议帐号。
    * name  名称。
    * englishName  英文名称。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID。
    * deptCode  部门编码。
    * deptNamePath  部门完整名称。
    * userType  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    * adminType  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * hidePhone  是否隐藏手机号码。
    * thirdAccount  第三方User ID。
    * visionAccount  智慧屏帐号。
    * license  许可证。 * 0：商用 * 1：免费试用
    * activeTime  激活时间，utc时间戳。
    * activeCodeExpireTime  激活码到期时间,utc时间戳。
    * expireTime  已激活的终端到期时间,utc时间戳。
    * activeCode  激活码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userAccount' => 'string',
            'name' => 'string',
            'englishName' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'email' => 'string',
            'vmrId' => 'string',
            'deptCode' => 'string',
            'deptNamePath' => 'string',
            'userType' => 'int',
            'adminType' => 'int',
            'signature' => 'string',
            'title' => 'string',
            'desc' => 'string',
            'status' => 'int',
            'sortLevel' => 'int',
            'hidePhone' => 'bool',
            'thirdAccount' => 'string',
            'visionAccount' => 'string',
            'license' => 'int',
            'activeTime' => 'int',
            'activeCodeExpireTime' => 'int',
            'expireTime' => 'int',
            'activeCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户UUID。
    * userAccount  华为云会议帐号。
    * name  名称。
    * englishName  英文名称。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID。
    * deptCode  部门编码。
    * deptNamePath  部门完整名称。
    * userType  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    * adminType  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * hidePhone  是否隐藏手机号码。
    * thirdAccount  第三方User ID。
    * visionAccount  智慧屏帐号。
    * license  许可证。 * 0：商用 * 1：免费试用
    * activeTime  激活时间，utc时间戳。
    * activeCodeExpireTime  激活码到期时间,utc时间戳。
    * expireTime  已激活的终端到期时间,utc时间戳。
    * activeCode  激活码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userAccount' => null,
        'name' => null,
        'englishName' => null,
        'phone' => null,
        'country' => null,
        'email' => null,
        'vmrId' => null,
        'deptCode' => null,
        'deptNamePath' => null,
        'userType' => null,
        'adminType' => null,
        'signature' => null,
        'title' => null,
        'desc' => null,
        'status' => null,
        'sortLevel' => null,
        'hidePhone' => null,
        'thirdAccount' => null,
        'visionAccount' => null,
        'license' => null,
        'activeTime' => 'int64',
        'activeCodeExpireTime' => 'int64',
        'expireTime' => 'int64',
        'activeCode' => null
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
    * id  用户UUID。
    * userAccount  华为云会议帐号。
    * name  名称。
    * englishName  英文名称。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID。
    * deptCode  部门编码。
    * deptNamePath  部门完整名称。
    * userType  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    * adminType  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * hidePhone  是否隐藏手机号码。
    * thirdAccount  第三方User ID。
    * visionAccount  智慧屏帐号。
    * license  许可证。 * 0：商用 * 1：免费试用
    * activeTime  激活时间，utc时间戳。
    * activeCodeExpireTime  激活码到期时间,utc时间戳。
    * expireTime  已激活的终端到期时间,utc时间戳。
    * activeCode  激活码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userAccount' => 'userAccount',
            'name' => 'name',
            'englishName' => 'englishName',
            'phone' => 'phone',
            'country' => 'country',
            'email' => 'email',
            'vmrId' => 'vmrId',
            'deptCode' => 'deptCode',
            'deptNamePath' => 'deptNamePath',
            'userType' => 'userType',
            'adminType' => 'adminType',
            'signature' => 'signature',
            'title' => 'title',
            'desc' => 'desc',
            'status' => 'status',
            'sortLevel' => 'sortLevel',
            'hidePhone' => 'hidePhone',
            'thirdAccount' => 'thirdAccount',
            'visionAccount' => 'visionAccount',
            'license' => 'license',
            'activeTime' => 'activeTime',
            'activeCodeExpireTime' => 'activeCodeExpireTime',
            'expireTime' => 'expireTime',
            'activeCode' => 'activeCode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户UUID。
    * userAccount  华为云会议帐号。
    * name  名称。
    * englishName  英文名称。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID。
    * deptCode  部门编码。
    * deptNamePath  部门完整名称。
    * userType  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    * adminType  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * hidePhone  是否隐藏手机号码。
    * thirdAccount  第三方User ID。
    * visionAccount  智慧屏帐号。
    * license  许可证。 * 0：商用 * 1：免费试用
    * activeTime  激活时间，utc时间戳。
    * activeCodeExpireTime  激活码到期时间,utc时间戳。
    * expireTime  已激活的终端到期时间,utc时间戳。
    * activeCode  激活码。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userAccount' => 'setUserAccount',
            'name' => 'setName',
            'englishName' => 'setEnglishName',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'email' => 'setEmail',
            'vmrId' => 'setVmrId',
            'deptCode' => 'setDeptCode',
            'deptNamePath' => 'setDeptNamePath',
            'userType' => 'setUserType',
            'adminType' => 'setAdminType',
            'signature' => 'setSignature',
            'title' => 'setTitle',
            'desc' => 'setDesc',
            'status' => 'setStatus',
            'sortLevel' => 'setSortLevel',
            'hidePhone' => 'setHidePhone',
            'thirdAccount' => 'setThirdAccount',
            'visionAccount' => 'setVisionAccount',
            'license' => 'setLicense',
            'activeTime' => 'setActiveTime',
            'activeCodeExpireTime' => 'setActiveCodeExpireTime',
            'expireTime' => 'setExpireTime',
            'activeCode' => 'setActiveCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户UUID。
    * userAccount  华为云会议帐号。
    * name  名称。
    * englishName  英文名称。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID。
    * deptCode  部门编码。
    * deptNamePath  部门完整名称。
    * userType  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    * adminType  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * hidePhone  是否隐藏手机号码。
    * thirdAccount  第三方User ID。
    * visionAccount  智慧屏帐号。
    * license  许可证。 * 0：商用 * 1：免费试用
    * activeTime  激活时间，utc时间戳。
    * activeCodeExpireTime  激活码到期时间,utc时间戳。
    * expireTime  已激活的终端到期时间,utc时间戳。
    * activeCode  激活码。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userAccount' => 'getUserAccount',
            'name' => 'getName',
            'englishName' => 'getEnglishName',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'email' => 'getEmail',
            'vmrId' => 'getVmrId',
            'deptCode' => 'getDeptCode',
            'deptNamePath' => 'getDeptNamePath',
            'userType' => 'getUserType',
            'adminType' => 'getAdminType',
            'signature' => 'getSignature',
            'title' => 'getTitle',
            'desc' => 'getDesc',
            'status' => 'getStatus',
            'sortLevel' => 'getSortLevel',
            'hidePhone' => 'getHidePhone',
            'thirdAccount' => 'getThirdAccount',
            'visionAccount' => 'getVisionAccount',
            'license' => 'getLicense',
            'activeTime' => 'getActiveTime',
            'activeCodeExpireTime' => 'getActiveCodeExpireTime',
            'expireTime' => 'getExpireTime',
            'activeCode' => 'getActiveCode'
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
        $this->container['userAccount'] = isset($data['userAccount']) ? $data['userAccount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['englishName'] = isset($data['englishName']) ? $data['englishName'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptNamePath'] = isset($data['deptNamePath']) ? $data['deptNamePath'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['adminType'] = isset($data['adminType']) ? $data['adminType'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
        $this->container['hidePhone'] = isset($data['hidePhone']) ? $data['hidePhone'] : null;
        $this->container['thirdAccount'] = isset($data['thirdAccount']) ? $data['thirdAccount'] : null;
        $this->container['visionAccount'] = isset($data['visionAccount']) ? $data['visionAccount'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['activeTime'] = isset($data['activeTime']) ? $data['activeTime'] : null;
        $this->container['activeCodeExpireTime'] = isset($data['activeCodeExpireTime']) ? $data['activeCodeExpireTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['activeCode'] = isset($data['activeCode']) ? $data['activeCode'] : null;
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
    *  用户UUID。
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
    * @param string|null $id 用户UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userAccount
    *  华为云会议帐号。
    *
    * @return string|null
    */
    public function getUserAccount()
    {
        return $this->container['userAccount'];
    }

    /**
    * Sets userAccount
    *
    * @param string|null $userAccount 华为云会议帐号。
    *
    * @return $this
    */
    public function setUserAccount($userAccount)
    {
        $this->container['userAccount'] = $userAccount;
        return $this;
    }

    /**
    * Gets name
    *  名称。
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
    * @param string|null $name 名称。
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
    *  英文名称。
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
    * @param string|null $englishName 英文名称。
    *
    * @return $this
    */
    public function setEnglishName($englishName)
    {
        $this->container['englishName'] = $englishName;
        return $this;
    }

    /**
    * Gets phone
    *  联系电话。
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
    * @param string|null $phone 联系电话。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets country
    *  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
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
    * Gets vmrId
    *  个人会议ID。
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
    * @param string|null $vmrId 个人会议ID。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets deptCode
    *  部门编码。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets deptNamePath
    *  部门完整名称。
    *
    * @return string|null
    */
    public function getDeptNamePath()
    {
        return $this->container['deptNamePath'];
    }

    /**
    * Sets deptNamePath
    *
    * @param string|null $deptNamePath 部门完整名称。
    *
    * @return $this
    */
    public function setDeptNamePath($deptNamePath)
    {
        $this->container['deptNamePath'] = $deptNamePath;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    *
    * @return int|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param int|null $userType 用户类型。 * 2：普通用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：SmartRooms用户
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets adminType
    *  管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    *
    * @return int|null
    */
    public function getAdminType()
    {
        return $this->container['adminType'];
    }

    /**
    * Sets adminType
    *
    * @param int|null $adminType 管理员类型。 - 0：默认（超级）管理员 - 1：普通管理员 - 2：非管理员（即为普通企业成员，UserType是2时有效）
    *
    * @return $this
    */
    public function setAdminType($adminType)
    {
        $this->container['adminType'] = $adminType;
        return $this;
    }

    /**
    * Gets signature
    *  签名。
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
    * @param string|null $signature 签名。
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
    * Gets desc
    *  备注。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 备注。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets status
    *  用户状态。 * 0：正常 * 1：停用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 用户状态。 * 0：正常 * 1：停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sortLevel
    *  通讯录排序等级，序号越低优先级越高。
    *
    * @return int|null
    */
    public function getSortLevel()
    {
        return $this->container['sortLevel'];
    }

    /**
    * Sets sortLevel
    *
    * @param int|null $sortLevel 通讯录排序等级，序号越低优先级越高。
    *
    * @return $this
    */
    public function setSortLevel($sortLevel)
    {
        $this->container['sortLevel'] = $sortLevel;
        return $this;
    }

    /**
    * Gets hidePhone
    *  是否隐藏手机号码。
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
    * @param bool|null $hidePhone 是否隐藏手机号码。
    *
    * @return $this
    */
    public function setHidePhone($hidePhone)
    {
        $this->container['hidePhone'] = $hidePhone;
        return $this;
    }

    /**
    * Gets thirdAccount
    *  第三方User ID。
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
    * @param string|null $thirdAccount 第三方User ID。
    *
    * @return $this
    */
    public function setThirdAccount($thirdAccount)
    {
        $this->container['thirdAccount'] = $thirdAccount;
        return $this;
    }

    /**
    * Gets visionAccount
    *  智慧屏帐号。
    *
    * @return string|null
    */
    public function getVisionAccount()
    {
        return $this->container['visionAccount'];
    }

    /**
    * Sets visionAccount
    *
    * @param string|null $visionAccount 智慧屏帐号。
    *
    * @return $this
    */
    public function setVisionAccount($visionAccount)
    {
        $this->container['visionAccount'] = $visionAccount;
        return $this;
    }

    /**
    * Gets license
    *  许可证。 * 0：商用 * 1：免费试用
    *
    * @return int|null
    */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
    * Sets license
    *
    * @param int|null $license 许可证。 * 0：商用 * 1：免费试用
    *
    * @return $this
    */
    public function setLicense($license)
    {
        $this->container['license'] = $license;
        return $this;
    }

    /**
    * Gets activeTime
    *  激活时间，utc时间戳。
    *
    * @return int|null
    */
    public function getActiveTime()
    {
        return $this->container['activeTime'];
    }

    /**
    * Sets activeTime
    *
    * @param int|null $activeTime 激活时间，utc时间戳。
    *
    * @return $this
    */
    public function setActiveTime($activeTime)
    {
        $this->container['activeTime'] = $activeTime;
        return $this;
    }

    /**
    * Gets activeCodeExpireTime
    *  激活码到期时间,utc时间戳。
    *
    * @return int|null
    */
    public function getActiveCodeExpireTime()
    {
        return $this->container['activeCodeExpireTime'];
    }

    /**
    * Sets activeCodeExpireTime
    *
    * @param int|null $activeCodeExpireTime 激活码到期时间,utc时间戳。
    *
    * @return $this
    */
    public function setActiveCodeExpireTime($activeCodeExpireTime)
    {
        $this->container['activeCodeExpireTime'] = $activeCodeExpireTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  已激活的终端到期时间,utc时间戳。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 已激活的终端到期时间,utc时间戳。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets activeCode
    *  激活码。
    *
    * @return string|null
    */
    public function getActiveCode()
    {
        return $this->container['activeCode'];
    }

    /**
    * Sets activeCode
    *
    * @param string|null $activeCode 激活码。
    *
    * @return $this
    */
    public function setActiveCode($activeCode)
    {
        $this->container['activeCode'] = $activeCode;
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

