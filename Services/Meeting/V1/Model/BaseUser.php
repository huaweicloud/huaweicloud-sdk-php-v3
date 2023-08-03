<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业用户名称。
    * contact  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * deptCode  部门编码，若不携带则默认根部门。
    * title  职位。
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'contact' => 'string',
            'country' => 'string',
            'deptCode' => 'string',
            'title' => 'string',
            'sortLevel' => 'int',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业用户名称。
    * contact  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * deptCode  部门编码，若不携带则默认根部门。
    * title  职位。
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'contact' => null,
        'country' => null,
        'deptCode' => null,
        'title' => null,
        'sortLevel' => null,
        'desc' => null
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
    * contact  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * deptCode  部门编码，若不携带则默认根部门。
    * title  职位。
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'contact' => 'contact',
            'country' => 'country',
            'deptCode' => 'deptCode',
            'title' => 'title',
            'sortLevel' => 'sortLevel',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业用户名称。
    * contact  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * deptCode  部门编码，若不携带则默认根部门。
    * title  职位。
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'contact' => 'setContact',
            'country' => 'setCountry',
            'deptCode' => 'setDeptCode',
            'title' => 'setTitle',
            'sortLevel' => 'setSortLevel',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业用户名称。
    * contact  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * deptCode  部门编码，若不携带则默认根部门。
    * title  职位。
    * sortLevel  通讯录排序等级，序号越低优先级越高。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'contact' => 'getContact',
            'country' => 'getCountry',
            'deptCode' => 'getDeptCode',
            'title' => 'getTitle',
            'sortLevel' => 'getSortLevel',
            'desc' => 'getDesc'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
            if ((mb_strlen($this->container['contact']) > 255)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['contact']) < 1)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptCode']) && (mb_strlen($this->container['deptCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'deptCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['deptCode']) && (mb_strlen($this->container['deptCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'deptCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 32)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] > 10000)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 企业用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets contact
    *  后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    *
    * @return string
    */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
    * Sets contact
    *
    * @param string $contact 后台自动识别是手机还是邮箱，若为手机号，则要求和国家码匹配。 > * 当前中国站点企业支持使用邮箱或手机号进行邀请，手机仅支持+86开头的手机号。 > * 当前国际站点企业仅支持使用邮箱进行邀请。
    *
    * @return $this
    */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;
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
    * Gets deptCode
    *  部门编码，若不携带则默认根部门。
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
    * @param string|null $deptCode 部门编码，若不携带则默认根部门。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
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

