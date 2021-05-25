<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MqsForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MqsForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  MQS服务的URL
    * userName  用于登录MQS的用户名
    * password  用于登录MQS的密码
    * topic  订阅的MQS主题
    * encryptTransport  是否加密传输
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'userName' => 'string',
            'password' => 'string',
            'topic' => 'string',
            'encryptTransport' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  MQS服务的URL
    * userName  用于登录MQS的用户名
    * password  用于登录MQS的密码
    * topic  订阅的MQS主题
    * encryptTransport  是否加密传输
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'userName' => null,
        'password' => null,
        'topic' => null,
        'encryptTransport' => null
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
    * url  MQS服务的URL
    * userName  用于登录MQS的用户名
    * password  用于登录MQS的密码
    * topic  订阅的MQS主题
    * encryptTransport  是否加密传输
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'userName' => 'user_name',
            'password' => 'password',
            'topic' => 'topic',
            'encryptTransport' => 'encrypt_transport'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  MQS服务的URL
    * userName  用于登录MQS的用户名
    * password  用于登录MQS的密码
    * topic  订阅的MQS主题
    * encryptTransport  是否加密传输
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'topic' => 'setTopic',
            'encryptTransport' => 'setEncryptTransport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  MQS服务的URL
    * userName  用于登录MQS的用户名
    * password  用于登录MQS的密码
    * topic  订阅的MQS主题
    * encryptTransport  是否加密传输
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'topic' => 'getTopic',
            'encryptTransport' => 'getEncryptTransport'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['encryptTransport'] = isset($data['encryptTransport']) ? $data['encryptTransport'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 256)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
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
    * Gets url
    *  MQS服务的URL
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url MQS服务的URL
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets userName
    *  用于登录MQS的用户名
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用于登录MQS的用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  用于登录MQS的密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 用于登录MQS的密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets topic
    *  订阅的MQS主题
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic 订阅的MQS主题
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets encryptTransport
    *  是否加密传输
    *
    * @return bool|null
    */
    public function getEncryptTransport()
    {
        return $this->container['encryptTransport'];
    }

    /**
    * Sets encryptTransport
    *
    * @param bool|null $encryptTransport 是否加密传输
    *
    * @return $this
    */
    public function setEncryptTransport($encryptTransport)
    {
        $this->container['encryptTransport'] = $encryptTransport;
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

