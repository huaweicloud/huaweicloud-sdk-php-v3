<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActiveDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActiveDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * smsNumber  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'smsNumber' => 'string',
            'country' => 'string',
            'emailAddr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * smsNumber  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * smsNumber  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'smsNumber' => 'smsNumber',
            'country' => 'country',
            'emailAddr' => 'emailAddr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * smsNumber  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'smsNumber' => 'setSmsNumber',
            'country' => 'setCountry',
            'emailAddr' => 'setEmailAddr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * smsNumber  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * emailAddr  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets smsNumber
    *  手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
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
    * @param string|null $smsNumber 手机号。 例如中国大陆手机+86xxxxxxxxxxx。当填写手机号时 “country”参数必填。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
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
    *  邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
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
    * @param string|null $emailAddr 邮件地址。 > 号码和邮箱必须填一个，若企业未开启短信功能，则邮箱必填。
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

