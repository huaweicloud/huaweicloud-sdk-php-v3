<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModDeviceDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModDeviceDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  终端名称，建议为具体位置。
    * prjCodeMode  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码，默认为根部门。 默认值：1。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0：正常 * 1：冻结
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'prjCodeMode' => 'int',
            'deptCode' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'email' => 'string',
            'description' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  终端名称，建议为具体位置。
    * prjCodeMode  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码，默认为根部门。 默认值：1。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0：正常 * 1：冻结
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'prjCodeMode' => 'int32',
        'deptCode' => null,
        'phone' => null,
        'country' => null,
        'email' => null,
        'description' => null,
        'status' => 'int32'
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
    * name  终端名称，建议为具体位置。
    * prjCodeMode  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码，默认为根部门。 默认值：1。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0：正常 * 1：冻结
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'prjCodeMode' => 'prjCodeMode',
            'deptCode' => 'deptCode',
            'phone' => 'phone',
            'country' => 'country',
            'email' => 'email',
            'description' => 'description',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  终端名称，建议为具体位置。
    * prjCodeMode  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码，默认为根部门。 默认值：1。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0：正常 * 1：冻结
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'prjCodeMode' => 'setPrjCodeMode',
            'deptCode' => 'setDeptCode',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'email' => 'setEmail',
            'description' => 'setDescription',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  终端名称，建议为具体位置。
    * prjCodeMode  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码，默认为根部门。 默认值：1。
    * phone  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0：正常 * 1：冻结
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'prjCodeMode' => 'getPrjCodeMode',
            'deptCode' => 'getDeptCode',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'email' => 'getEmail',
            'description' => 'getDescription',
            'status' => 'getStatus'
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
    const PRJ_CODE_MODE_0 = 0;
    const PRJ_CODE_MODE_1 = 1;
    const PRJ_CODE_MODE_2 = 2;
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrjCodeModeAllowableValues()
    {
        return [
            self::PRJ_CODE_MODE_0,
            self::PRJ_CODE_MODE_1,
            self::PRJ_CODE_MODE_2,
        ];
    }

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
        $this->container['prjCodeMode'] = isset($data['prjCodeMode']) ? $data['prjCodeMode'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPrjCodeModeAllowableValues();
                if (!is_null($this->container['prjCodeMode']) && !in_array($this->container['prjCodeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'prjCodeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  终端名称，建议为具体位置。
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
    * @param string|null $name 终端名称，建议为具体位置。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets prjCodeMode
    *  投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    *
    * @return int|null
    */
    public function getPrjCodeMode()
    {
        return $this->container['prjCodeMode'];
    }

    /**
    * Sets prjCodeMode
    *
    * @param int|null $prjCodeMode 投影码生成模式，默认为自动。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度。   私网地址配置成简单模式，公网地址配置成复杂模式) * 1：简单 * 2：复杂
    *
    * @return $this
    */
    public function setPrjCodeMode($prjCodeMode)
    {
        $this->container['prjCodeMode'] = $prjCodeMode;
        return $this;
    }

    /**
    * Gets deptCode
    *  部门编码，默认为根部门。 默认值：1。
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
    * @param string|null $deptCode 部门编码，默认为根部门。 默认值：1。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets phone
    *  手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
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
    * @param string|null $phone 手机号，必须加上国家码。 例如中国大陆手机为“+86xxxxxxxxxxx”，当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 > 手机号或者邮箱至少填写一个。
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
    * Gets description
    *  终端描述。
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
    * @param string|null $description 终端描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  终端状态。 * 0：正常 * 1：冻结
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
    * @param int|null $status 终端状态。 * 0：正常 * 1：冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

