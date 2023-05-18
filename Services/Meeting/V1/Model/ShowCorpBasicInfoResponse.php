<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCorpBasicInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCorpBasicInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  企业id。
    * name  企业名称。
    * address  企业所在地。
    * adminName  管理员名称。
    * account  管理员的华为云会议帐号。
    * phone  管理员手机。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  管理员邮箱。
    * enableSms  是否通过短信形式发送会议通知。
    * enableCloudDisk  是否开启云盘。
    * enablePstn  是否具有pstn功能。
    * autoUserCreate  是否支持自动开户。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'address' => 'string',
            'adminName' => 'string',
            'account' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'email' => 'string',
            'enableSms' => 'bool',
            'enableCloudDisk' => 'bool',
            'enablePstn' => 'bool',
            'autoUserCreate' => 'bool',
            'corpType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  企业id。
    * name  企业名称。
    * address  企业所在地。
    * adminName  管理员名称。
    * account  管理员的华为云会议帐号。
    * phone  管理员手机。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  管理员邮箱。
    * enableSms  是否通过短信形式发送会议通知。
    * enableCloudDisk  是否开启云盘。
    * enablePstn  是否具有pstn功能。
    * autoUserCreate  是否支持自动开户。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'address' => null,
        'adminName' => null,
        'account' => null,
        'phone' => null,
        'country' => null,
        'email' => null,
        'enableSms' => null,
        'enableCloudDisk' => null,
        'enablePstn' => null,
        'autoUserCreate' => null,
        'corpType' => null
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
    * id  企业id。
    * name  企业名称。
    * address  企业所在地。
    * adminName  管理员名称。
    * account  管理员的华为云会议帐号。
    * phone  管理员手机。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  管理员邮箱。
    * enableSms  是否通过短信形式发送会议通知。
    * enableCloudDisk  是否开启云盘。
    * enablePstn  是否具有pstn功能。
    * autoUserCreate  是否支持自动开户。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'address' => 'address',
            'adminName' => 'adminName',
            'account' => 'account',
            'phone' => 'phone',
            'country' => 'country',
            'email' => 'email',
            'enableSms' => 'enableSMS',
            'enableCloudDisk' => 'enableCloudDisk',
            'enablePstn' => 'enablePstn',
            'autoUserCreate' => 'autoUserCreate',
            'corpType' => 'corpType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  企业id。
    * name  企业名称。
    * address  企业所在地。
    * adminName  管理员名称。
    * account  管理员的华为云会议帐号。
    * phone  管理员手机。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  管理员邮箱。
    * enableSms  是否通过短信形式发送会议通知。
    * enableCloudDisk  是否开启云盘。
    * enablePstn  是否具有pstn功能。
    * autoUserCreate  是否支持自动开户。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'address' => 'setAddress',
            'adminName' => 'setAdminName',
            'account' => 'setAccount',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'email' => 'setEmail',
            'enableSms' => 'setEnableSms',
            'enableCloudDisk' => 'setEnableCloudDisk',
            'enablePstn' => 'setEnablePstn',
            'autoUserCreate' => 'setAutoUserCreate',
            'corpType' => 'setCorpType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  企业id。
    * name  企业名称。
    * address  企业所在地。
    * adminName  管理员名称。
    * account  管理员的华为云会议帐号。
    * phone  管理员手机。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  管理员邮箱。
    * enableSms  是否通过短信形式发送会议通知。
    * enableCloudDisk  是否开启云盘。
    * enablePstn  是否具有pstn功能。
    * autoUserCreate  是否支持自动开户。
    * corpType  企业类型。 * 0：旗舰版 * 5：免费版 * 6：标准版
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'address' => 'getAddress',
            'adminName' => 'getAdminName',
            'account' => 'getAccount',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'email' => 'getEmail',
            'enableSms' => 'getEnableSms',
            'enableCloudDisk' => 'getEnableCloudDisk',
            'enablePstn' => 'getEnablePstn',
            'autoUserCreate' => 'getAutoUserCreate',
            'corpType' => 'getCorpType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['adminName'] = isset($data['adminName']) ? $data['adminName'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['enableSms'] = isset($data['enableSms']) ? $data['enableSms'] : null;
        $this->container['enableCloudDisk'] = isset($data['enableCloudDisk']) ? $data['enableCloudDisk'] : null;
        $this->container['enablePstn'] = isset($data['enablePstn']) ? $data['enablePstn'] : null;
        $this->container['autoUserCreate'] = isset($data['autoUserCreate']) ? $data['autoUserCreate'] : null;
        $this->container['corpType'] = isset($data['corpType']) ? $data['corpType'] : null;
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
    *  企业id。
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
    * @param string|null $id 企业id。
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
    *  企业名称。
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
    * @param string|null $name 企业名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets address
    *  企业所在地。
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
    * @param string|null $address 企业所在地。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets adminName
    *  管理员名称。
    *
    * @return string|null
    */
    public function getAdminName()
    {
        return $this->container['adminName'];
    }

    /**
    * Sets adminName
    *
    * @param string|null $adminName 管理员名称。
    *
    * @return $this
    */
    public function setAdminName($adminName)
    {
        $this->container['adminName'] = $adminName;
        return $this;
    }

    /**
    * Gets account
    *  管理员的华为云会议帐号。
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
    * @param string|null $account 管理员的华为云会议帐号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets phone
    *  管理员手机。
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
    * @param string|null $phone 管理员手机。
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
    *  管理员邮箱。
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
    * @param string|null $email 管理员邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets enableSms
    *  是否通过短信形式发送会议通知。
    *
    * @return bool|null
    */
    public function getEnableSms()
    {
        return $this->container['enableSms'];
    }

    /**
    * Sets enableSms
    *
    * @param bool|null $enableSms 是否通过短信形式发送会议通知。
    *
    * @return $this
    */
    public function setEnableSms($enableSms)
    {
        $this->container['enableSms'] = $enableSms;
        return $this;
    }

    /**
    * Gets enableCloudDisk
    *  是否开启云盘。
    *
    * @return bool|null
    */
    public function getEnableCloudDisk()
    {
        return $this->container['enableCloudDisk'];
    }

    /**
    * Sets enableCloudDisk
    *
    * @param bool|null $enableCloudDisk 是否开启云盘。
    *
    * @return $this
    */
    public function setEnableCloudDisk($enableCloudDisk)
    {
        $this->container['enableCloudDisk'] = $enableCloudDisk;
        return $this;
    }

    /**
    * Gets enablePstn
    *  是否具有pstn功能。
    *
    * @return bool|null
    */
    public function getEnablePstn()
    {
        return $this->container['enablePstn'];
    }

    /**
    * Sets enablePstn
    *
    * @param bool|null $enablePstn 是否具有pstn功能。
    *
    * @return $this
    */
    public function setEnablePstn($enablePstn)
    {
        $this->container['enablePstn'] = $enablePstn;
        return $this;
    }

    /**
    * Gets autoUserCreate
    *  是否支持自动开户。
    *
    * @return bool|null
    */
    public function getAutoUserCreate()
    {
        return $this->container['autoUserCreate'];
    }

    /**
    * Sets autoUserCreate
    *
    * @param bool|null $autoUserCreate 是否支持自动开户。
    *
    * @return $this
    */
    public function setAutoUserCreate($autoUserCreate)
    {
        $this->container['autoUserCreate'] = $autoUserCreate;
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

