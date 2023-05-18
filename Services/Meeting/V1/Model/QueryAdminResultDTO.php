<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAdminResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAdminResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户UUID。
    * account  用户华为云会议帐号。
    * name  名称。
    * adminType  管理员类型。 - 0：默认管理员 - 1：普通管理员
    * email  邮箱地址。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'account' => 'string',
            'name' => 'string',
            'adminType' => 'int',
            'email' => 'string',
            'phone' => 'string',
            'country' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户UUID。
    * account  用户华为云会议帐号。
    * name  名称。
    * adminType  管理员类型。 - 0：默认管理员 - 1：普通管理员
    * email  邮箱地址。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'account' => null,
        'name' => null,
        'adminType' => null,
        'email' => null,
        'phone' => null,
        'country' => null
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
    * account  用户华为云会议帐号。
    * name  名称。
    * adminType  管理员类型。 - 0：默认管理员 - 1：普通管理员
    * email  邮箱地址。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'account' => 'account',
            'name' => 'name',
            'adminType' => 'adminType',
            'email' => 'email',
            'phone' => 'phone',
            'country' => 'country'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户UUID。
    * account  用户华为云会议帐号。
    * name  名称。
    * adminType  管理员类型。 - 0：默认管理员 - 1：普通管理员
    * email  邮箱地址。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'account' => 'setAccount',
            'name' => 'setName',
            'adminType' => 'setAdminType',
            'email' => 'setEmail',
            'phone' => 'setPhone',
            'country' => 'setCountry'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户UUID。
    * account  用户华为云会议帐号。
    * name  名称。
    * adminType  管理员类型。 - 0：默认管理员 - 1：普通管理员
    * email  邮箱地址。
    * phone  联系电话。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'account' => 'getAccount',
            'name' => 'getName',
            'adminType' => 'getAdminType',
            'email' => 'getEmail',
            'phone' => 'getPhone',
            'country' => 'getCountry'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminType'] = isset($data['adminType']) ? $data['adminType'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
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
    * Gets account
    *  用户华为云会议帐号。
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
    * @param string|null $account 用户华为云会议帐号。
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
    * Gets adminType
    *  管理员类型。 - 0：默认管理员 - 1：普通管理员
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
    * @param int|null $adminType 管理员类型。 - 0：默认管理员 - 1：普通管理员
    *
    * @return $this
    */
    public function setAdminType($adminType)
    {
        $this->container['adminType'] = $adminType;
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

