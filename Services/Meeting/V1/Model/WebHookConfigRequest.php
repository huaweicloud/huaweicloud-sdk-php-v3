<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebHookConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebHookConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * corpId  企业ID。按企业注册回调时需要填写。
    * spId  SP ID。多租户场景下，按SP注册回调时需要填写。
    * subscriberId  订阅者ID。
    * subscriberKey  订阅者秘钥。
    * url  订阅url。 > 必须使用HTTPS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'corpId' => 'string',
            'spId' => 'string',
            'subscriberId' => 'string',
            'subscriberKey' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * corpId  企业ID。按企业注册回调时需要填写。
    * spId  SP ID。多租户场景下，按SP注册回调时需要填写。
    * subscriberId  订阅者ID。
    * subscriberKey  订阅者秘钥。
    * url  订阅url。 > 必须使用HTTPS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'corpId' => null,
        'spId' => null,
        'subscriberId' => null,
        'subscriberKey' => null,
        'url' => null
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
    * corpId  企业ID。按企业注册回调时需要填写。
    * spId  SP ID。多租户场景下，按SP注册回调时需要填写。
    * subscriberId  订阅者ID。
    * subscriberKey  订阅者秘钥。
    * url  订阅url。 > 必须使用HTTPS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'corpId' => 'corpId',
            'spId' => 'spId',
            'subscriberId' => 'subscriberId',
            'subscriberKey' => 'subscriberKey',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * corpId  企业ID。按企业注册回调时需要填写。
    * spId  SP ID。多租户场景下，按SP注册回调时需要填写。
    * subscriberId  订阅者ID。
    * subscriberKey  订阅者秘钥。
    * url  订阅url。 > 必须使用HTTPS。
    *
    * @var string[]
    */
    protected static $setters = [
            'corpId' => 'setCorpId',
            'spId' => 'setSpId',
            'subscriberId' => 'setSubscriberId',
            'subscriberKey' => 'setSubscriberKey',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * corpId  企业ID。按企业注册回调时需要填写。
    * spId  SP ID。多租户场景下，按SP注册回调时需要填写。
    * subscriberId  订阅者ID。
    * subscriberKey  订阅者秘钥。
    * url  订阅url。 > 必须使用HTTPS。
    *
    * @var string[]
    */
    protected static $getters = [
            'corpId' => 'getCorpId',
            'spId' => 'getSpId',
            'subscriberId' => 'getSubscriberId',
            'subscriberKey' => 'getSubscriberKey',
            'url' => 'getUrl'
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
        $this->container['corpId'] = isset($data['corpId']) ? $data['corpId'] : null;
        $this->container['spId'] = isset($data['spId']) ? $data['spId'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
        $this->container['subscriberKey'] = isset($data['subscriberKey']) ? $data['subscriberKey'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriberId'] === null) {
            $invalidProperties[] = "'subscriberId' can't be null";
        }
        if ($this->container['subscriberKey'] === null) {
            $invalidProperties[] = "'subscriberKey' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
    * Gets corpId
    *  企业ID。按企业注册回调时需要填写。
    *
    * @return string|null
    */
    public function getCorpId()
    {
        return $this->container['corpId'];
    }

    /**
    * Sets corpId
    *
    * @param string|null $corpId 企业ID。按企业注册回调时需要填写。
    *
    * @return $this
    */
    public function setCorpId($corpId)
    {
        $this->container['corpId'] = $corpId;
        return $this;
    }

    /**
    * Gets spId
    *  SP ID。多租户场景下，按SP注册回调时需要填写。
    *
    * @return string|null
    */
    public function getSpId()
    {
        return $this->container['spId'];
    }

    /**
    * Sets spId
    *
    * @param string|null $spId SP ID。多租户场景下，按SP注册回调时需要填写。
    *
    * @return $this
    */
    public function setSpId($spId)
    {
        $this->container['spId'] = $spId;
        return $this;
    }

    /**
    * Gets subscriberId
    *  订阅者ID。
    *
    * @return string
    */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
    * Sets subscriberId
    *
    * @param string $subscriberId 订阅者ID。
    *
    * @return $this
    */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;
        return $this;
    }

    /**
    * Gets subscriberKey
    *  订阅者秘钥。
    *
    * @return string
    */
    public function getSubscriberKey()
    {
        return $this->container['subscriberKey'];
    }

    /**
    * Sets subscriberKey
    *
    * @param string $subscriberKey 订阅者秘钥。
    *
    * @return $this
    */
    public function setSubscriberKey($subscriberKey)
    {
        $this->container['subscriberKey'] = $subscriberKey;
        return $this;
    }

    /**
    * Gets url
    *  订阅url。 > 必须使用HTTPS。
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
    * @param string $url 订阅url。 > 必须使用HTTPS。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

