<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalContactDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalContactDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * otherNumber  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    * otherNumberCountry  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * phone  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    * email  邮箱。
    * corpName  公司名称。
    * deptName  部门。
    * position  职务。
    * address  个人地址。
    * remarks  备注。
    * id  外部联系人UUID。
    * name  姓名。
    * customNumber  外部联系人自定义号码。 > 仅VDC场景下使用。
    * updateTime  用户信息最后更新时间戳。
    * type  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'otherNumber' => 'string',
            'otherNumberCountry' => 'string',
            'country' => 'string',
            'phone' => 'string',
            'email' => 'string',
            'corpName' => 'string',
            'deptName' => 'string',
            'position' => 'string',
            'address' => 'string',
            'remarks' => 'string',
            'id' => 'string',
            'name' => 'string',
            'customNumber' => 'string',
            'updateTime' => 'float',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * otherNumber  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    * otherNumberCountry  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * phone  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    * email  邮箱。
    * corpName  公司名称。
    * deptName  部门。
    * position  职务。
    * address  个人地址。
    * remarks  备注。
    * id  外部联系人UUID。
    * name  姓名。
    * customNumber  外部联系人自定义号码。 > 仅VDC场景下使用。
    * updateTime  用户信息最后更新时间戳。
    * type  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'otherNumber' => null,
        'otherNumberCountry' => null,
        'country' => null,
        'phone' => null,
        'email' => null,
        'corpName' => null,
        'deptName' => null,
        'position' => null,
        'address' => null,
        'remarks' => null,
        'id' => null,
        'name' => null,
        'customNumber' => null,
        'updateTime' => null,
        'type' => null
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
    * otherNumber  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    * otherNumberCountry  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * phone  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    * email  邮箱。
    * corpName  公司名称。
    * deptName  部门。
    * position  职务。
    * address  个人地址。
    * remarks  备注。
    * id  外部联系人UUID。
    * name  姓名。
    * customNumber  外部联系人自定义号码。 > 仅VDC场景下使用。
    * updateTime  用户信息最后更新时间戳。
    * type  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'otherNumber' => 'otherNumber',
            'otherNumberCountry' => 'otherNumberCountry',
            'country' => 'country',
            'phone' => 'phone',
            'email' => 'email',
            'corpName' => 'corpName',
            'deptName' => 'deptName',
            'position' => 'position',
            'address' => 'address',
            'remarks' => 'remarks',
            'id' => 'id',
            'name' => 'name',
            'customNumber' => 'customNumber',
            'updateTime' => 'updateTime',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * otherNumber  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    * otherNumberCountry  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * phone  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    * email  邮箱。
    * corpName  公司名称。
    * deptName  部门。
    * position  职务。
    * address  个人地址。
    * remarks  备注。
    * id  外部联系人UUID。
    * name  姓名。
    * customNumber  外部联系人自定义号码。 > 仅VDC场景下使用。
    * updateTime  用户信息最后更新时间戳。
    * type  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @var string[]
    */
    protected static $setters = [
            'otherNumber' => 'setOtherNumber',
            'otherNumberCountry' => 'setOtherNumberCountry',
            'country' => 'setCountry',
            'phone' => 'setPhone',
            'email' => 'setEmail',
            'corpName' => 'setCorpName',
            'deptName' => 'setDeptName',
            'position' => 'setPosition',
            'address' => 'setAddress',
            'remarks' => 'setRemarks',
            'id' => 'setId',
            'name' => 'setName',
            'customNumber' => 'setCustomNumber',
            'updateTime' => 'setUpdateTime',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * otherNumber  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    * otherNumberCountry  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * phone  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    * email  邮箱。
    * corpName  公司名称。
    * deptName  部门。
    * position  职务。
    * address  个人地址。
    * remarks  备注。
    * id  外部联系人UUID。
    * name  姓名。
    * customNumber  外部联系人自定义号码。 > 仅VDC场景下使用。
    * updateTime  用户信息最后更新时间戳。
    * type  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @var string[]
    */
    protected static $getters = [
            'otherNumber' => 'getOtherNumber',
            'otherNumberCountry' => 'getOtherNumberCountry',
            'country' => 'getCountry',
            'phone' => 'getPhone',
            'email' => 'getEmail',
            'corpName' => 'getCorpName',
            'deptName' => 'getDeptName',
            'position' => 'getPosition',
            'address' => 'getAddress',
            'remarks' => 'getRemarks',
            'id' => 'getId',
            'name' => 'getName',
            'customNumber' => 'getCustomNumber',
            'updateTime' => 'getUpdateTime',
            'type' => 'getType'
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
        $this->container['otherNumber'] = isset($data['otherNumber']) ? $data['otherNumber'] : null;
        $this->container['otherNumberCountry'] = isset($data['otherNumberCountry']) ? $data['otherNumberCountry'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : 'chinaPR';
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['corpName'] = isset($data['corpName']) ? $data['corpName'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['customNumber'] = isset($data['customNumber']) ? $data['customNumber'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['otherNumber']) && (mb_strlen($this->container['otherNumber']) > 32)) {
                $invalidProperties[] = "invalid value for 'otherNumber', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['otherNumber']) && (mb_strlen($this->container['otherNumber']) < 0)) {
                $invalidProperties[] = "invalid value for 'otherNumber', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['otherNumberCountry']) && (mb_strlen($this->container['otherNumberCountry']) > 32)) {
                $invalidProperties[] = "invalid value for 'otherNumberCountry', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['otherNumberCountry']) && (mb_strlen($this->container['otherNumberCountry']) < 0)) {
                $invalidProperties[] = "invalid value for 'otherNumberCountry', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 32)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['corpName']) && (mb_strlen($this->container['corpName']) > 64)) {
                $invalidProperties[] = "invalid value for 'corpName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['corpName']) && (mb_strlen($this->container['corpName']) < 0)) {
                $invalidProperties[] = "invalid value for 'corpName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) > 64)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) > 64)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) < 0)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 1024)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 0)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 1024)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 0)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 0.";
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
    * Gets otherNumber
    *  其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    *
    * @return string|null
    */
    public function getOtherNumber()
    {
        return $this->container['otherNumber'];
    }

    /**
    * Sets otherNumber
    *
    * @param string|null $otherNumber 其他号码。 > * 其他号码必须以国家码作为前缀 > * otherNumber填写时，otherNumberCountry也必须填写 > * 如果要清空手机号配置，则otherNumberCountry和otherNumber都要置为\"\"
    *
    * @return $this
    */
    public function setOtherNumber($otherNumber)
    {
        $this->container['otherNumber'] = $otherNumber;
        return $this;
    }

    /**
    * Gets otherNumberCountry
    *  [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return string|null
    */
    public function getOtherNumberCountry()
    {
        return $this->container['otherNumberCountry'];
    }

    /**
    * Sets otherNumberCountry
    *
    * @param string|null $otherNumberCountry [[其他号码所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setOtherNumberCountry($otherNumberCountry)
    {
        $this->container['otherNumberCountry'] = $otherNumberCountry;
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
    * Gets phone
    *  手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
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
    * @param string|null $phone 手机号。 > * 手机号必须以国家码作为前缀 > * phone填写时，country也必须填写 > * 如果要清空手机号配置，则country和phone都要置为\"\"
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets email
    *  邮箱。
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
    * @param string|null $email 邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets corpName
    *  公司名称。
    *
    * @return string|null
    */
    public function getCorpName()
    {
        return $this->container['corpName'];
    }

    /**
    * Sets corpName
    *
    * @param string|null $corpName 公司名称。
    *
    * @return $this
    */
    public function setCorpName($corpName)
    {
        $this->container['corpName'] = $corpName;
        return $this;
    }

    /**
    * Gets deptName
    *  部门。
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
    * @param string|null $deptName 部门。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets position
    *  职务。
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position 职务。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets address
    *  个人地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 个人地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets id
    *  外部联系人UUID。
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
    * @param string|null $id 外部联系人UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  姓名。
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
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets customNumber
    *  外部联系人自定义号码。 > 仅VDC场景下使用。
    *
    * @return string|null
    */
    public function getCustomNumber()
    {
        return $this->container['customNumber'];
    }

    /**
    * Sets customNumber
    *
    * @param string|null $customNumber 外部联系人自定义号码。 > 仅VDC场景下使用。
    *
    * @return $this
    */
    public function setCustomNumber($customNumber)
    {
        $this->container['customNumber'] = $customNumber;
        return $this;
    }

    /**
    * Gets updateTime
    *  用户信息最后更新时间戳。
    *
    * @return float|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param float|null $updateTime 用户信息最后更新时间戳。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets type
    *  外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
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
    * @param string|null $type 外部联系人类型。 * PERSONAL：个人外部联系人 * CORP：企业外部联系人
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

