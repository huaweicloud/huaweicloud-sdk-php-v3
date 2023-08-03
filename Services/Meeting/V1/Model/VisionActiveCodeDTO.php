<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VisionActiveCodeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VisionActiveCodeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * devType  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    * deptCode  部门编码，若不携带则默认根部门。
    * devName  终端的名称。
    * description  描述信息。
    * smsNumber  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'devType' => 'string',
            'deptCode' => 'string',
            'devName' => 'string',
            'description' => 'string',
            'smsNumber' => 'string',
            'country' => 'string',
            'emailAddr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * devType  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    * deptCode  部门编码，若不携带则默认根部门。
    * devName  终端的名称。
    * description  描述信息。
    * smsNumber  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'devType' => null,
        'deptCode' => null,
        'devName' => null,
        'description' => null,
        'smsNumber' => null,
        'country' => null,
        'emailAddr' => null
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
    * devType  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    * deptCode  部门编码，若不携带则默认根部门。
    * devName  终端的名称。
    * description  描述信息。
    * smsNumber  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'devType' => 'devType',
            'deptCode' => 'deptCode',
            'devName' => 'devName',
            'description' => 'description',
            'smsNumber' => 'smsNumber',
            'country' => 'country',
            'emailAddr' => 'emailAddr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * devType  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    * deptCode  部门编码，若不携带则默认根部门。
    * devName  终端的名称。
    * description  描述信息。
    * smsNumber  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'devType' => 'setDevType',
            'deptCode' => 'setDeptCode',
            'devName' => 'setDevName',
            'description' => 'setDescription',
            'smsNumber' => 'setSmsNumber',
            'country' => 'setCountry',
            'emailAddr' => 'setEmailAddr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * devType  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    * deptCode  部门编码，若不携带则默认根部门。
    * devName  终端的名称。
    * description  描述信息。
    * smsNumber  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'devType' => 'getDevType',
            'deptCode' => 'getDeptCode',
            'devName' => 'getDevName',
            'description' => 'getDescription',
            'smsNumber' => 'getSmsNumber',
            'country' => 'getCountry',
            'emailAddr' => 'getEmailAddr'
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
        $this->container['devType'] = isset($data['devType']) ? $data['devType'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['devName'] = isset($data['devName']) ? $data['devName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['smsNumber'] = isset($data['smsNumber']) ? $data['smsNumber'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['emailAddr'] = isset($data['emailAddr']) ? $data['emailAddr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['devType'] === null) {
            $invalidProperties[] = "'devType' can't be null";
        }
            if (!is_null($this->container['deptCode']) && (mb_strlen($this->container['deptCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'deptCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['deptCode']) && (mb_strlen($this->container['deptCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptCode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['devName'] === null) {
            $invalidProperties[] = "'devName' can't be null";
        }
            if ((mb_strlen($this->container['devName']) > 64)) {
                $invalidProperties[] = "invalid value for 'devName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['devName']) < 1)) {
                $invalidProperties[] = "invalid value for 'devName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['smsNumber']) && (mb_strlen($this->container['smsNumber']) > 32)) {
                $invalidProperties[] = "invalid value for 'smsNumber', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['smsNumber']) && (mb_strlen($this->container['smsNumber']) < 0)) {
                $invalidProperties[] = "invalid value for 'smsNumber', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['emailAddr']) && (mb_strlen($this->container['emailAddr']) > 255)) {
                $invalidProperties[] = "invalid value for 'emailAddr', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['emailAddr']) && (mb_strlen($this->container['emailAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'emailAddr', the character length must be bigger than or equal to 0.";
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
    * Gets devType
    *  终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    *
    * @return string
    */
    public function getDevType()
    {
        return $this->container['devType'];
    }

    /**
    * Sets devType
    *
    * @param string $devType 终端类型。 - idea-hub：智能协作大屏 - huawei-vision：智慧屏TV - welink-desktop(iwb)：SmartRooms会议版 - smart-rooms：SmartRooms完整版
    *
    * @return $this
    */
    public function setDevType($devType)
    {
        $this->container['devType'] = $devType;
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
    * Gets devName
    *  终端的名称。
    *
    * @return string
    */
    public function getDevName()
    {
        return $this->container['devName'];
    }

    /**
    * Sets devName
    *
    * @param string $devName 终端的名称。
    *
    * @return $this
    */
    public function setDevName($devName)
    {
        $this->container['devName'] = $devName;
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
    * Gets smsNumber
    *  号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    *
    * @return string|null
    */
    public function getSmsNumber()
    {
        return $this->container['smsNumber'];
    }

    /**
    * Sets smsNumber
    *
    * @param string|null $smsNumber 号码信息，如果为手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)
    *
    * @return $this
    */
    public function setSmsNumber($smsNumber)
    {
        $this->container['smsNumber'] = $smsNumber;
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
    * Gets emailAddr
    *  邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @return string|null
    */
    public function getEmailAddr()
    {
        return $this->container['emailAddr'];
    }

    /**
    * Sets emailAddr
    *
    * @param string|null $emailAddr 邮箱地址。 > 如无中国大陆手机号，则邮箱必填。
    *
    * @return $this
    */
    public function setEmailAddr($emailAddr)
    {
        $this->container['emailAddr'] = $emailAddr;
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

