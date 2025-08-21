<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNotificationSubscriptionsStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNotificationSubscriptionsStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * internalMessage  internalMessage
    * email  email
    * qyweixin  qyweixin
    * feishu  feishu
    * dingding  dingding
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'internalMessage' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto',
            'email' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto',
            'qyweixin' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto',
            'feishu' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto',
            'dingding' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * internalMessage  internalMessage
    * email  email
    * qyweixin  qyweixin
    * feishu  feishu
    * dingding  dingding
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'internalMessage' => null,
        'email' => null,
        'qyweixin' => null,
        'feishu' => null,
        'dingding' => null
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
    * internalMessage  internalMessage
    * email  email
    * qyweixin  qyweixin
    * feishu  feishu
    * dingding  dingding
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'internalMessage' => 'internal_message',
            'email' => 'email',
            'qyweixin' => 'qyweixin',
            'feishu' => 'feishu',
            'dingding' => 'dingding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * internalMessage  internalMessage
    * email  email
    * qyweixin  qyweixin
    * feishu  feishu
    * dingding  dingding
    *
    * @var string[]
    */
    protected static $setters = [
            'internalMessage' => 'setInternalMessage',
            'email' => 'setEmail',
            'qyweixin' => 'setQyweixin',
            'feishu' => 'setFeishu',
            'dingding' => 'setDingding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * internalMessage  internalMessage
    * email  email
    * qyweixin  qyweixin
    * feishu  feishu
    * dingding  dingding
    *
    * @var string[]
    */
    protected static $getters = [
            'internalMessage' => 'getInternalMessage',
            'email' => 'getEmail',
            'qyweixin' => 'getQyweixin',
            'feishu' => 'getFeishu',
            'dingding' => 'getDingding'
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
        $this->container['internalMessage'] = isset($data['internalMessage']) ? $data['internalMessage'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['qyweixin'] = isset($data['qyweixin']) ? $data['qyweixin'] : null;
        $this->container['feishu'] = isset($data['feishu']) ? $data['feishu'] : null;
        $this->container['dingding'] = isset($data['dingding']) ? $data['dingding'] : null;
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
    * Gets internalMessage
    *  internalMessage
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null
    */
    public function getInternalMessage()
    {
        return $this->container['internalMessage'];
    }

    /**
    * Sets internalMessage
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null $internalMessage internalMessage
    *
    * @return $this
    */
    public function setInternalMessage($internalMessage)
    {
        $this->container['internalMessage'] = $internalMessage;
        return $this;
    }

    /**
    * Gets email
    *  email
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null $email email
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets qyweixin
    *  qyweixin
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null
    */
    public function getQyweixin()
    {
        return $this->container['qyweixin'];
    }

    /**
    * Sets qyweixin
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null $qyweixin qyweixin
    *
    * @return $this
    */
    public function setQyweixin($qyweixin)
    {
        $this->container['qyweixin'] = $qyweixin;
        return $this;
    }

    /**
    * Gets feishu
    *  feishu
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null
    */
    public function getFeishu()
    {
        return $this->container['feishu'];
    }

    /**
    * Sets feishu
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null $feishu feishu
    *
    * @return $this
    */
    public function setFeishu($feishu)
    {
        $this->container['feishu'] = $feishu;
        return $this;
    }

    /**
    * Gets dingding
    *  dingding
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null
    */
    public function getDingding()
    {
        return $this->container['dingding'];
    }

    /**
    * Sets dingding
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoNotificationSubscriptionStateDto|null $dingding dingding
    *
    * @return $this
    */
    public function setDingding($dingding)
    {
        $this->container['dingding'] = $dingding;
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

