<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户UUID。
    * ucloginAccount  华为云会议帐号。
    * serviceAccount  用户关联的SIP号码。
    * numberHa1  号码对应的HA1。
    * alias1  用户别名。
    * companyId  用户归属的企业ID。
    * spId  用户所在企业归属的SP ID。
    * companyDomain  企业域名。
    * realm  本地鉴权。
    * userType  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
    * adminType  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    * name  用户名称。
    * nameEn  用户英文名称。
    * isBindPhone  标识是否绑定手机。
    * freeUser  标识是否是免费试用用户。
    * thirdAccount  第三方的用户帐号。
    * visionAccount  智慧屏设备ID。
    * headPictureUrl  头像链接。
    * password  机机密码，用于智慧屏登录。
    * status  用户状态。 * 0：正常 * 1：停用
    * paidAccount  付费用户机机帐号，用于智慧屏登录。
    * paidPassword  付费用户机机密码，用于智慧屏登录。
    * weLinkUser  标识是否是WeLink用户。
    * appId  应用ID。
    * tr069Account  tr069帐号。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    * cloudUserId  华为云帐号ID。
    * grayUser  标识是否是灰度用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'ucloginAccount' => 'string',
            'serviceAccount' => 'string',
            'numberHa1' => 'string',
            'alias1' => 'string',
            'companyId' => 'string',
            'spId' => 'string',
            'companyDomain' => 'string',
            'realm' => 'string',
            'userType' => 'int',
            'adminType' => 'int',
            'name' => 'string',
            'nameEn' => 'string',
            'isBindPhone' => 'bool',
            'freeUser' => 'bool',
            'thirdAccount' => 'string',
            'visionAccount' => 'string',
            'headPictureUrl' => 'string',
            'password' => 'string',
            'status' => 'int',
            'paidAccount' => 'string',
            'paidPassword' => 'string',
            'weLinkUser' => 'bool',
            'appId' => 'string',
            'tr069Account' => 'string',
            'corpType' => 'int',
            'cloudUserId' => 'string',
            'grayUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户UUID。
    * ucloginAccount  华为云会议帐号。
    * serviceAccount  用户关联的SIP号码。
    * numberHa1  号码对应的HA1。
    * alias1  用户别名。
    * companyId  用户归属的企业ID。
    * spId  用户所在企业归属的SP ID。
    * companyDomain  企业域名。
    * realm  本地鉴权。
    * userType  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
    * adminType  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    * name  用户名称。
    * nameEn  用户英文名称。
    * isBindPhone  标识是否绑定手机。
    * freeUser  标识是否是免费试用用户。
    * thirdAccount  第三方的用户帐号。
    * visionAccount  智慧屏设备ID。
    * headPictureUrl  头像链接。
    * password  机机密码，用于智慧屏登录。
    * status  用户状态。 * 0：正常 * 1：停用
    * paidAccount  付费用户机机帐号，用于智慧屏登录。
    * paidPassword  付费用户机机密码，用于智慧屏登录。
    * weLinkUser  标识是否是WeLink用户。
    * appId  应用ID。
    * tr069Account  tr069帐号。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    * cloudUserId  华为云帐号ID。
    * grayUser  标识是否是灰度用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'ucloginAccount' => null,
        'serviceAccount' => null,
        'numberHa1' => null,
        'alias1' => null,
        'companyId' => null,
        'spId' => null,
        'companyDomain' => null,
        'realm' => null,
        'userType' => null,
        'adminType' => null,
        'name' => null,
        'nameEn' => null,
        'isBindPhone' => null,
        'freeUser' => null,
        'thirdAccount' => null,
        'visionAccount' => null,
        'headPictureUrl' => null,
        'password' => null,
        'status' => null,
        'paidAccount' => null,
        'paidPassword' => null,
        'weLinkUser' => null,
        'appId' => null,
        'tr069Account' => null,
        'corpType' => null,
        'cloudUserId' => null,
        'grayUser' => null
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
    * userId  用户UUID。
    * ucloginAccount  华为云会议帐号。
    * serviceAccount  用户关联的SIP号码。
    * numberHa1  号码对应的HA1。
    * alias1  用户别名。
    * companyId  用户归属的企业ID。
    * spId  用户所在企业归属的SP ID。
    * companyDomain  企业域名。
    * realm  本地鉴权。
    * userType  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
    * adminType  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    * name  用户名称。
    * nameEn  用户英文名称。
    * isBindPhone  标识是否绑定手机。
    * freeUser  标识是否是免费试用用户。
    * thirdAccount  第三方的用户帐号。
    * visionAccount  智慧屏设备ID。
    * headPictureUrl  头像链接。
    * password  机机密码，用于智慧屏登录。
    * status  用户状态。 * 0：正常 * 1：停用
    * paidAccount  付费用户机机帐号，用于智慧屏登录。
    * paidPassword  付费用户机机密码，用于智慧屏登录。
    * weLinkUser  标识是否是WeLink用户。
    * appId  应用ID。
    * tr069Account  tr069帐号。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    * cloudUserId  华为云帐号ID。
    * grayUser  标识是否是灰度用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'userId',
            'ucloginAccount' => 'ucloginAccount',
            'serviceAccount' => 'serviceAccount',
            'numberHa1' => 'numberHA1',
            'alias1' => 'alias1',
            'companyId' => 'companyId',
            'spId' => 'spId',
            'companyDomain' => 'companyDomain',
            'realm' => 'realm',
            'userType' => 'userType',
            'adminType' => 'adminType',
            'name' => 'name',
            'nameEn' => 'nameEn',
            'isBindPhone' => 'isBindPhone',
            'freeUser' => 'freeUser',
            'thirdAccount' => 'thirdAccount',
            'visionAccount' => 'visionAccount',
            'headPictureUrl' => 'headPictureUrl',
            'password' => 'password',
            'status' => 'status',
            'paidAccount' => 'paidAccount',
            'paidPassword' => 'paidPassword',
            'weLinkUser' => 'weLinkUser',
            'appId' => 'appId',
            'tr069Account' => 'tr069Account',
            'corpType' => 'corpType',
            'cloudUserId' => 'cloudUserId',
            'grayUser' => 'grayUser'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户UUID。
    * ucloginAccount  华为云会议帐号。
    * serviceAccount  用户关联的SIP号码。
    * numberHa1  号码对应的HA1。
    * alias1  用户别名。
    * companyId  用户归属的企业ID。
    * spId  用户所在企业归属的SP ID。
    * companyDomain  企业域名。
    * realm  本地鉴权。
    * userType  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
    * adminType  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    * name  用户名称。
    * nameEn  用户英文名称。
    * isBindPhone  标识是否绑定手机。
    * freeUser  标识是否是免费试用用户。
    * thirdAccount  第三方的用户帐号。
    * visionAccount  智慧屏设备ID。
    * headPictureUrl  头像链接。
    * password  机机密码，用于智慧屏登录。
    * status  用户状态。 * 0：正常 * 1：停用
    * paidAccount  付费用户机机帐号，用于智慧屏登录。
    * paidPassword  付费用户机机密码，用于智慧屏登录。
    * weLinkUser  标识是否是WeLink用户。
    * appId  应用ID。
    * tr069Account  tr069帐号。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    * cloudUserId  华为云帐号ID。
    * grayUser  标识是否是灰度用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'ucloginAccount' => 'setUcloginAccount',
            'serviceAccount' => 'setServiceAccount',
            'numberHa1' => 'setNumberHa1',
            'alias1' => 'setAlias1',
            'companyId' => 'setCompanyId',
            'spId' => 'setSpId',
            'companyDomain' => 'setCompanyDomain',
            'realm' => 'setRealm',
            'userType' => 'setUserType',
            'adminType' => 'setAdminType',
            'name' => 'setName',
            'nameEn' => 'setNameEn',
            'isBindPhone' => 'setIsBindPhone',
            'freeUser' => 'setFreeUser',
            'thirdAccount' => 'setThirdAccount',
            'visionAccount' => 'setVisionAccount',
            'headPictureUrl' => 'setHeadPictureUrl',
            'password' => 'setPassword',
            'status' => 'setStatus',
            'paidAccount' => 'setPaidAccount',
            'paidPassword' => 'setPaidPassword',
            'weLinkUser' => 'setWeLinkUser',
            'appId' => 'setAppId',
            'tr069Account' => 'setTr069Account',
            'corpType' => 'setCorpType',
            'cloudUserId' => 'setCloudUserId',
            'grayUser' => 'setGrayUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户UUID。
    * ucloginAccount  华为云会议帐号。
    * serviceAccount  用户关联的SIP号码。
    * numberHa1  号码对应的HA1。
    * alias1  用户别名。
    * companyId  用户归属的企业ID。
    * spId  用户所在企业归属的SP ID。
    * companyDomain  企业域名。
    * realm  本地鉴权。
    * userType  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
    * adminType  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    * name  用户名称。
    * nameEn  用户英文名称。
    * isBindPhone  标识是否绑定手机。
    * freeUser  标识是否是免费试用用户。
    * thirdAccount  第三方的用户帐号。
    * visionAccount  智慧屏设备ID。
    * headPictureUrl  头像链接。
    * password  机机密码，用于智慧屏登录。
    * status  用户状态。 * 0：正常 * 1：停用
    * paidAccount  付费用户机机帐号，用于智慧屏登录。
    * paidPassword  付费用户机机密码，用于智慧屏登录。
    * weLinkUser  标识是否是WeLink用户。
    * appId  应用ID。
    * tr069Account  tr069帐号。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    * cloudUserId  华为云帐号ID。
    * grayUser  标识是否是灰度用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'ucloginAccount' => 'getUcloginAccount',
            'serviceAccount' => 'getServiceAccount',
            'numberHa1' => 'getNumberHa1',
            'alias1' => 'getAlias1',
            'companyId' => 'getCompanyId',
            'spId' => 'getSpId',
            'companyDomain' => 'getCompanyDomain',
            'realm' => 'getRealm',
            'userType' => 'getUserType',
            'adminType' => 'getAdminType',
            'name' => 'getName',
            'nameEn' => 'getNameEn',
            'isBindPhone' => 'getIsBindPhone',
            'freeUser' => 'getFreeUser',
            'thirdAccount' => 'getThirdAccount',
            'visionAccount' => 'getVisionAccount',
            'headPictureUrl' => 'getHeadPictureUrl',
            'password' => 'getPassword',
            'status' => 'getStatus',
            'paidAccount' => 'getPaidAccount',
            'paidPassword' => 'getPaidPassword',
            'weLinkUser' => 'getWeLinkUser',
            'appId' => 'getAppId',
            'tr069Account' => 'getTr069Account',
            'corpType' => 'getCorpType',
            'cloudUserId' => 'getCloudUserId',
            'grayUser' => 'getGrayUser'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['ucloginAccount'] = isset($data['ucloginAccount']) ? $data['ucloginAccount'] : null;
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['numberHa1'] = isset($data['numberHa1']) ? $data['numberHa1'] : null;
        $this->container['alias1'] = isset($data['alias1']) ? $data['alias1'] : null;
        $this->container['companyId'] = isset($data['companyId']) ? $data['companyId'] : null;
        $this->container['spId'] = isset($data['spId']) ? $data['spId'] : null;
        $this->container['companyDomain'] = isset($data['companyDomain']) ? $data['companyDomain'] : null;
        $this->container['realm'] = isset($data['realm']) ? $data['realm'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['adminType'] = isset($data['adminType']) ? $data['adminType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['isBindPhone'] = isset($data['isBindPhone']) ? $data['isBindPhone'] : null;
        $this->container['freeUser'] = isset($data['freeUser']) ? $data['freeUser'] : null;
        $this->container['thirdAccount'] = isset($data['thirdAccount']) ? $data['thirdAccount'] : null;
        $this->container['visionAccount'] = isset($data['visionAccount']) ? $data['visionAccount'] : null;
        $this->container['headPictureUrl'] = isset($data['headPictureUrl']) ? $data['headPictureUrl'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['paidAccount'] = isset($data['paidAccount']) ? $data['paidAccount'] : null;
        $this->container['paidPassword'] = isset($data['paidPassword']) ? $data['paidPassword'] : null;
        $this->container['weLinkUser'] = isset($data['weLinkUser']) ? $data['weLinkUser'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['tr069Account'] = isset($data['tr069Account']) ? $data['tr069Account'] : null;
        $this->container['corpType'] = isset($data['corpType']) ? $data['corpType'] : null;
        $this->container['cloudUserId'] = isset($data['cloudUserId']) ? $data['cloudUserId'] : null;
        $this->container['grayUser'] = isset($data['grayUser']) ? $data['grayUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ucloginAccount'] === null) {
            $invalidProperties[] = "'ucloginAccount' can't be null";
        }
            if (!is_null($this->container['thirdAccount']) && (mb_strlen($this->container['thirdAccount']) > 255)) {
                $invalidProperties[] = "invalid value for 'thirdAccount', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['thirdAccount']) && (mb_strlen($this->container['thirdAccount']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdAccount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['visionAccount']) && (mb_strlen($this->container['visionAccount']) > 255)) {
                $invalidProperties[] = "invalid value for 'visionAccount', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['visionAccount']) && (mb_strlen($this->container['visionAccount']) < 0)) {
                $invalidProperties[] = "invalid value for 'visionAccount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['headPictureUrl']) && (mb_strlen($this->container['headPictureUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'headPictureUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['headPictureUrl']) && (mb_strlen($this->container['headPictureUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'headPictureUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 255)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 0)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 7)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['paidAccount']) && (mb_strlen($this->container['paidAccount']) > 255)) {
                $invalidProperties[] = "invalid value for 'paidAccount', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['paidAccount']) && (mb_strlen($this->container['paidAccount']) < 0)) {
                $invalidProperties[] = "invalid value for 'paidAccount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['paidPassword']) && (mb_strlen($this->container['paidPassword']) > 255)) {
                $invalidProperties[] = "invalid value for 'paidPassword', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['paidPassword']) && (mb_strlen($this->container['paidPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'paidPassword', the character length must be bigger than or equal to 0.";
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
    * Gets userId
    *  用户UUID。
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
    * @param string|null $userId 用户UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets ucloginAccount
    *  华为云会议帐号。
    *
    * @return string
    */
    public function getUcloginAccount()
    {
        return $this->container['ucloginAccount'];
    }

    /**
    * Sets ucloginAccount
    *
    * @param string $ucloginAccount 华为云会议帐号。
    *
    * @return $this
    */
    public function setUcloginAccount($ucloginAccount)
    {
        $this->container['ucloginAccount'] = $ucloginAccount;
        return $this;
    }

    /**
    * Gets serviceAccount
    *  用户关联的SIP号码。
    *
    * @return string|null
    */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
    * Sets serviceAccount
    *
    * @param string|null $serviceAccount 用户关联的SIP号码。
    *
    * @return $this
    */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;
        return $this;
    }

    /**
    * Gets numberHa1
    *  号码对应的HA1。
    *
    * @return string|null
    */
    public function getNumberHa1()
    {
        return $this->container['numberHa1'];
    }

    /**
    * Sets numberHa1
    *
    * @param string|null $numberHa1 号码对应的HA1。
    *
    * @return $this
    */
    public function setNumberHa1($numberHa1)
    {
        $this->container['numberHa1'] = $numberHa1;
        return $this;
    }

    /**
    * Gets alias1
    *  用户别名。
    *
    * @return string|null
    */
    public function getAlias1()
    {
        return $this->container['alias1'];
    }

    /**
    * Sets alias1
    *
    * @param string|null $alias1 用户别名。
    *
    * @return $this
    */
    public function setAlias1($alias1)
    {
        $this->container['alias1'] = $alias1;
        return $this;
    }

    /**
    * Gets companyId
    *  用户归属的企业ID。
    *
    * @return string|null
    */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
    * Sets companyId
    *
    * @param string|null $companyId 用户归属的企业ID。
    *
    * @return $this
    */
    public function setCompanyId($companyId)
    {
        $this->container['companyId'] = $companyId;
        return $this;
    }

    /**
    * Gets spId
    *  用户所在企业归属的SP ID。
    *
    * @return string|null
    */
    public function getSpId()
    {
        return $this->container['spId'];
    }

    /**
    * Sets spId
    *
    * @param string|null $spId 用户所在企业归属的SP ID。
    *
    * @return $this
    */
    public function setSpId($spId)
    {
        $this->container['spId'] = $spId;
        return $this;
    }

    /**
    * Gets companyDomain
    *  企业域名。
    *
    * @return string|null
    */
    public function getCompanyDomain()
    {
        return $this->container['companyDomain'];
    }

    /**
    * Sets companyDomain
    *
    * @param string|null $companyDomain 企业域名。
    *
    * @return $this
    */
    public function setCompanyDomain($companyDomain)
    {
        $this->container['companyDomain'] = $companyDomain;
        return $this;
    }

    /**
    * Gets realm
    *  本地鉴权。
    *
    * @return string|null
    */
    public function getRealm()
    {
        return $this->container['realm'];
    }

    /**
    * Sets realm
    *
    * @param string|null $realm 本地鉴权。
    *
    * @return $this
    */
    public function setRealm($realm)
    {
        $this->container['realm'] = $realm;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
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
    * @param int|null $userType 用户类型。 * 1：SP管理用户 * 2：企业用户 * 3：免费注册用户 * 10：企业设备用户 * 11：匿名用户 * 12：智慧屏用户 * 13：IdeaHub用户 * 14：电子白板（SmartRooms）用户
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
    *  管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
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
    * @param int|null $adminType 管理员类型。 * 0：默认管理员 * 1：普通管理员 * 2：非管理员，即普通企业成员，userType为2时有效
    *
    * @return $this
    */
    public function setAdminType($adminType)
    {
        $this->container['adminType'] = $adminType;
        return $this;
    }

    /**
    * Gets name
    *  用户名称。
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
    * @param string|null $name 用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameEn
    *  用户英文名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 用户英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets isBindPhone
    *  标识是否绑定手机。
    *
    * @return bool|null
    */
    public function getIsBindPhone()
    {
        return $this->container['isBindPhone'];
    }

    /**
    * Sets isBindPhone
    *
    * @param bool|null $isBindPhone 标识是否绑定手机。
    *
    * @return $this
    */
    public function setIsBindPhone($isBindPhone)
    {
        $this->container['isBindPhone'] = $isBindPhone;
        return $this;
    }

    /**
    * Gets freeUser
    *  标识是否是免费试用用户。
    *
    * @return bool|null
    */
    public function getFreeUser()
    {
        return $this->container['freeUser'];
    }

    /**
    * Sets freeUser
    *
    * @param bool|null $freeUser 标识是否是免费试用用户。
    *
    * @return $this
    */
    public function setFreeUser($freeUser)
    {
        $this->container['freeUser'] = $freeUser;
        return $this;
    }

    /**
    * Gets thirdAccount
    *  第三方的用户帐号。
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
    * @param string|null $thirdAccount 第三方的用户帐号。
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
    *  智慧屏设备ID。
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
    * @param string|null $visionAccount 智慧屏设备ID。
    *
    * @return $this
    */
    public function setVisionAccount($visionAccount)
    {
        $this->container['visionAccount'] = $visionAccount;
        return $this;
    }

    /**
    * Gets headPictureUrl
    *  头像链接。
    *
    * @return string|null
    */
    public function getHeadPictureUrl()
    {
        return $this->container['headPictureUrl'];
    }

    /**
    * Sets headPictureUrl
    *
    * @param string|null $headPictureUrl 头像链接。
    *
    * @return $this
    */
    public function setHeadPictureUrl($headPictureUrl)
    {
        $this->container['headPictureUrl'] = $headPictureUrl;
        return $this;
    }

    /**
    * Gets password
    *  机机密码，用于智慧屏登录。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 机机密码，用于智慧屏登录。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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
    * Gets paidAccount
    *  付费用户机机帐号，用于智慧屏登录。
    *
    * @return string|null
    */
    public function getPaidAccount()
    {
        return $this->container['paidAccount'];
    }

    /**
    * Sets paidAccount
    *
    * @param string|null $paidAccount 付费用户机机帐号，用于智慧屏登录。
    *
    * @return $this
    */
    public function setPaidAccount($paidAccount)
    {
        $this->container['paidAccount'] = $paidAccount;
        return $this;
    }

    /**
    * Gets paidPassword
    *  付费用户机机密码，用于智慧屏登录。
    *
    * @return string|null
    */
    public function getPaidPassword()
    {
        return $this->container['paidPassword'];
    }

    /**
    * Sets paidPassword
    *
    * @param string|null $paidPassword 付费用户机机密码，用于智慧屏登录。
    *
    * @return $this
    */
    public function setPaidPassword($paidPassword)
    {
        $this->container['paidPassword'] = $paidPassword;
        return $this;
    }

    /**
    * Gets weLinkUser
    *  标识是否是WeLink用户。
    *
    * @return bool|null
    */
    public function getWeLinkUser()
    {
        return $this->container['weLinkUser'];
    }

    /**
    * Sets weLinkUser
    *
    * @param bool|null $weLinkUser 标识是否是WeLink用户。
    *
    * @return $this
    */
    public function setWeLinkUser($weLinkUser)
    {
        $this->container['weLinkUser'] = $weLinkUser;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets tr069Account
    *  tr069帐号。
    *
    * @return string|null
    */
    public function getTr069Account()
    {
        return $this->container['tr069Account'];
    }

    /**
    * Sets tr069Account
    *
    * @param string|null $tr069Account tr069帐号。
    *
    * @return $this
    */
    public function setTr069Account($tr069Account)
    {
        $this->container['tr069Account'] = $tr069Account;
        return $this;
    }

    /**
    * Gets corpType
    *  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @return int|null
    */
    public function getCorpType()
    {
        return $this->container['corpType'];
    }

    /**
    * Sets corpType
    *
    * @param int|null $corpType 企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @return $this
    */
    public function setCorpType($corpType)
    {
        $this->container['corpType'] = $corpType;
        return $this;
    }

    /**
    * Gets cloudUserId
    *  华为云帐号ID。
    *
    * @return string|null
    */
    public function getCloudUserId()
    {
        return $this->container['cloudUserId'];
    }

    /**
    * Sets cloudUserId
    *
    * @param string|null $cloudUserId 华为云帐号ID。
    *
    * @return $this
    */
    public function setCloudUserId($cloudUserId)
    {
        $this->container['cloudUserId'] = $cloudUserId;
        return $this;
    }

    /**
    * Gets grayUser
    *  标识是否是灰度用户。
    *
    * @return bool|null
    */
    public function getGrayUser()
    {
        return $this->container['grayUser'];
    }

    /**
    * Sets grayUser
    *
    * @param bool|null $grayUser 标识是否是灰度用户。
    *
    * @return $this
    */
    public function setGrayUser($grayUser)
    {
        $this->container['grayUser'] = $grayUser;
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

