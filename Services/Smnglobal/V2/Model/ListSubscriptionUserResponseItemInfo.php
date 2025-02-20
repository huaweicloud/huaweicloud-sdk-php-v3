<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionUserResponseItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionUserResponseItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅用户ID。
    * domainId  租户账号ID。
    * name  订阅用户名称。
    * status  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    * group  订阅用户分组。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'group' => 'string[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'http' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpEndpointInfo',
            'https' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpsEndpointInfo',
            'sms' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseSmsEndpointInfo',
            'email' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseEmailEndpointInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅用户ID。
    * domainId  租户账号ID。
    * name  订阅用户名称。
    * status  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    * group  订阅用户分组。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'name' => null,
        'status' => null,
        'group' => null,
        'createTime' => null,
        'updateTime' => null,
        'http' => null,
        'https' => null,
        'sms' => null,
        'email' => null
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
    * id  订阅用户ID。
    * domainId  租户账号ID。
    * name  订阅用户名称。
    * status  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    * group  订阅用户分组。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'status' => 'status',
            'group' => 'group',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'http' => 'http',
            'https' => 'https',
            'sms' => 'sms',
            'email' => 'email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅用户ID。
    * domainId  租户账号ID。
    * name  订阅用户名称。
    * status  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    * group  订阅用户分组。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'status' => 'setStatus',
            'group' => 'setGroup',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'http' => 'setHttp',
            'https' => 'setHttps',
            'sms' => 'setSms',
            'email' => 'setEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅用户ID。
    * domainId  租户账号ID。
    * name  订阅用户名称。
    * status  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    * group  订阅用户分组。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'status' => 'getStatus',
            'group' => 'getGroup',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'http' => 'getHttp',
            'https' => 'getHttps',
            'sms' => 'getSms',
            'email' => 'getEmail'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['http'] = isset($data['http']) ? $data['http'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets id
    *  订阅用户ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 订阅用户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  租户账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  订阅用户名称。
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
    * @param string $name 订阅用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 订阅用户状态。 UNCONFIRMED：未确认 CONFIRMED：已确认 CANCELLED：已取消
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets group
    *  订阅用户分组。
    *
    * @return string[]
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string[] $group 订阅用户分组。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets http
    *  http
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpEndpointInfo|null
    */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
    * Sets http
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpEndpointInfo|null $http http
    *
    * @return $this
    */
    public function setHttp($http)
    {
        $this->container['http'] = $http;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpsEndpointInfo|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseHttpsEndpointInfo|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets sms
    *  sms
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseSmsEndpointInfo|null
    */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
    * Sets sms
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseSmsEndpointInfo|null $sms sms
    *
    * @return $this
    */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;
        return $this;
    }

    /**
    * Gets email
    *  email
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseEmailEndpointInfo|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\ListSubscriptionUserResponseEmailEndpointInfo|null $email email
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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

