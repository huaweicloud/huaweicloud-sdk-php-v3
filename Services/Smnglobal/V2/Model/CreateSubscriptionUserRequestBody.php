<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionUserRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionUserRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'group' => 'string[]',
            'http' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo',
            'https' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo',
            'sms' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo',
            'email' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'group' => null,
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
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'group' => 'group',
            'http' => 'http',
            'https' => 'https',
            'sms' => 'sms',
            'email' => 'email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'group' => 'setGroup',
            'http' => 'setHttp',
            'https' => 'setHttps',
            'sms' => 'setSms',
            'email' => 'setEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'group' => 'getGroup',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^+]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[^+]+$/.";
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
    * Gets group
    *  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    *
    * @return string[]|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string[]|null $group 订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets http
    *  http
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo|null
    */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
    * Sets http
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo|null $http http
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
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo|null $https https
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
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo|null
    */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
    * Sets sms
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo|null $sms sms
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
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo|null $email email
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

