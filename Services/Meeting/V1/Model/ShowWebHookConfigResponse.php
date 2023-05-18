<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWebHookConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWebHookConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * returnCode  结果码。
    * returnDesc  结果描述。
    * id  订阅配置记录ID。
    * subscriberId  订阅ID。
    * url  订阅url。
    * status  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'returnCode' => 'int',
            'returnDesc' => 'string',
            'id' => 'string',
            'subscriberId' => 'string',
            'url' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * returnCode  结果码。
    * returnDesc  结果描述。
    * id  订阅配置记录ID。
    * subscriberId  订阅ID。
    * url  订阅url。
    * status  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'returnCode' => 'int32',
        'returnDesc' => null,
        'id' => null,
        'subscriberId' => null,
        'url' => null,
        'status' => null
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
    * returnCode  结果码。
    * returnDesc  结果描述。
    * id  订阅配置记录ID。
    * subscriberId  订阅ID。
    * url  订阅url。
    * status  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'returnCode' => 'returnCode',
            'returnDesc' => 'returnDesc',
            'id' => 'id',
            'subscriberId' => 'subscriberId',
            'url' => 'url',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * returnCode  结果码。
    * returnDesc  结果描述。
    * id  订阅配置记录ID。
    * subscriberId  订阅ID。
    * url  订阅url。
    * status  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
    *
    * @var string[]
    */
    protected static $setters = [
            'returnCode' => 'setReturnCode',
            'returnDesc' => 'setReturnDesc',
            'id' => 'setId',
            'subscriberId' => 'setSubscriberId',
            'url' => 'setUrl',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * returnCode  结果码。
    * returnDesc  结果描述。
    * id  订阅配置记录ID。
    * subscriberId  订阅ID。
    * url  订阅url。
    * status  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
    *
    * @var string[]
    */
    protected static $getters = [
            'returnCode' => 'getReturnCode',
            'returnDesc' => 'getReturnDesc',
            'id' => 'getId',
            'subscriberId' => 'getSubscriberId',
            'url' => 'getUrl',
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
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnDesc'] = isset($data['returnDesc']) ? $data['returnDesc'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
        if ($this->container['returnCode'] === null) {
            $invalidProperties[] = "'returnCode' can't be null";
        }
            if (($this->container['returnCode'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'returnCode', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['returnCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'returnCode', must be bigger than or equal to 0.";
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
    * Gets returnCode
    *  结果码。
    *
    * @return int
    */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
    * Sets returnCode
    *
    * @param int $returnCode 结果码。
    *
    * @return $this
    */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;
        return $this;
    }

    /**
    * Gets returnDesc
    *  结果描述。
    *
    * @return string|null
    */
    public function getReturnDesc()
    {
        return $this->container['returnDesc'];
    }

    /**
    * Sets returnDesc
    *
    * @param string|null $returnDesc 结果描述。
    *
    * @return $this
    */
    public function setReturnDesc($returnDesc)
    {
        $this->container['returnDesc'] = $returnDesc;
        return $this;
    }

    /**
    * Gets id
    *  订阅配置记录ID。
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
    * @param string|null $id 订阅配置记录ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets subscriberId
    *  订阅ID。
    *
    * @return string|null
    */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
    * Sets subscriberId
    *
    * @param string|null $subscriberId 订阅ID。
    *
    * @return $this
    */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;
        return $this;
    }

    /**
    * Gets url
    *  订阅url。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 订阅url。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets status
    *  事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
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
    * @param int|null $status 事件推送状态。 * 0：已启用 * 1：未启动 * 2：已锁定
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

