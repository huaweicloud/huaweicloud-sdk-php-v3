<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateObjectRetrievalRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateObjectRetrievalRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * days  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'days' => 'int',
            'callbackUrl' => 'string',
            'sessionContext' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * days  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsInfo' => null,
        'days' => 'int32',
        'callbackUrl' => null,
        'sessionContext' => null
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
    * obsInfo  obsInfo
    * days  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsInfo' => 'obs_info',
            'days' => 'days',
            'callbackUrl' => 'callback_url',
            'sessionContext' => 'session_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsInfo  obsInfo
    * days  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $setters = [
            'obsInfo' => 'setObsInfo',
            'days' => 'setDays',
            'callbackUrl' => 'setCallbackUrl',
            'sessionContext' => 'setSessionContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsInfo  obsInfo
    * days  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $getters = [
            'obsInfo' => 'getObsInfo',
            'days' => 'getDays',
            'callbackUrl' => 'getCallbackUrl',
            'sessionContext' => 'getSessionContext'
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
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsInfo'] === null) {
            $invalidProperties[] = "'obsInfo' can't be null";
        }
            if (!is_null($this->container['days']) && ($this->container['days'] > 30)) {
                $invalidProperties[] = "invalid value for 'days', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['days']) && ($this->container['days'] < 1)) {
                $invalidProperties[] = "invalid value for 'days', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be bigger than or equal to 0.";
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
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
        return $this;
    }

    /**
    * Gets days
    *  临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    *
    * @return int|null
    */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
    * Sets days
    *
    * @param int|null $days 临时恢复时间，临时恢复会产生一个标准存储副本，副本的存在时间。单位：天，默认1天。
    *
    * @return $this
    */
    public function setDays($days)
    {
        $this->container['days'] = $days;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调地址，为空则不回调
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调地址，为空则不回调
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets sessionContext
    *  自定义上下文，回调时会回调给用户，透传信息
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 自定义上下文，回调时会回调给用户，透传信息
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
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

