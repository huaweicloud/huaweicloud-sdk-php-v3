<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModUserDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModUserDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID，若不携带则后台默认生成。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码 默认值：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'englishName' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'email' => 'string',
            'vmrId' => 'string',
            'deptCode' => 'string',
            'signature' => 'string',
            'title' => 'string',
            'desc' => 'string',
            'status' => 'int',
            'sortLevel' => 'int',
            'hidePhone' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID，若不携带则后台默认生成。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码 默认值：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'englishName' => null,
        'phone' => null,
        'country' => null,
        'email' => null,
        'vmrId' => null,
        'deptCode' => null,
        'signature' => null,
        'title' => null,
        'desc' => null,
        'status' => 'int32',
        'sortLevel' => null,
        'hidePhone' => null
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
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID，若不携带则后台默认生成。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码 默认值：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'englishName' => 'englishName',
            'phone' => 'phone',
            'country' => 'country',
            'email' => 'email',
            'vmrId' => 'vmrId',
            'deptCode' => 'deptCode',
            'signature' => 'signature',
            'title' => 'title',
            'desc' => 'desc',
            'status' => 'status',
            'sortLevel' => 'sortLevel',
            'hidePhone' => 'hidePhone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID，若不携带则后台默认生成。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码 默认值：false
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'englishName' => 'setEnglishName',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'email' => 'setEmail',
            'vmrId' => 'setVmrId',
            'deptCode' => 'setDeptCode',
            'signature' => 'setSignature',
            'title' => 'setTitle',
            'desc' => 'setDesc',
            'status' => 'setStatus',
            'sortLevel' => 'setSortLevel',
            'hidePhone' => 'setHidePhone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * vmrId  个人会议ID，若不携带则后台默认生成。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0。 * 0：正常 * 1：停用
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码 默认值：false
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'englishName' => 'getEnglishName',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'email' => 'getEmail',
            'vmrId' => 'getVmrId',
            'deptCode' => 'getDeptCode',
            'signature' => 'getSignature',
            'title' => 'getTitle',
            'desc' => 'getDesc',
            'status' => 'getStatus',
            'sortLevel' => 'getSortLevel',
            'hidePhone' => 'getHidePhone'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['englishName'] = isset($data['englishName']) ? $data['englishName'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
        $this->container['hidePhone'] = isset($data['hidePhone']) ? $data['hidePhone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) > 64)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) < 0)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 512)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 1)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 32)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] > 10000)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be bigger than or equal to 1.";
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
    * Gets name
    *  企业用户名称。
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
    * @param string|null $name 企业用户名称。
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
    *  企业用户的英文名称。
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
    * @param string|null $englishName 企业用户的英文名称。
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
    *  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
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
    * @param string|null $phone 手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个。
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
    *  个人会议ID，若不携带则后台默认生成。
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
    * @param string|null $vmrId 个人会议ID，若不携带则后台默认生成。
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
    *  部门编码，若不携带则默认根部门。 默认值：1
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
    * @param string|null $deptCode 部门编码，若不携带则默认根部门。 默认值：1
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
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
    *  用户状态。默认值：0。 * 0：正常 * 1：停用
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
    * @param int|null $status 用户状态。默认值：0。 * 0：正常 * 1：停用
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
    *  通讯录排序等级，序号越低优先级越高。 默认值：10000
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
    * @param int|null $sortLevel 通讯录排序等级，序号越低优先级越高。 默认值：10000
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
    *  是否隐藏手机号码 默认值：false
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
    * @param bool|null $hidePhone 是否隐藏手机号码 默认值：false
    *
    * @return $this
    */
    public function setHidePhone($hidePhone)
    {
        $this->container['hidePhone'] = $hidePhone;
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

