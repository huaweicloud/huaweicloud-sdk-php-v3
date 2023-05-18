<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestMixedPictureBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestMixedPictureBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    * imageType  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualSet' => 'int',
            'imageType' => 'string',
            'subscriberInPics' => '\HuaweiCloud\SDK\Meeting\V1\Model\SubscriberInPic[]',
            'switchTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    * imageType  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualSet' => 'int32',
        'imageType' => null,
        'subscriberInPics' => null,
        'switchTime' => 'int32'
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
    * manualSet  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    * imageType  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualSet' => 'manualSet',
            'imageType' => 'imageType',
            'subscriberInPics' => 'subscriberInPics',
            'switchTime' => 'switchTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualSet  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    * imageType  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'manualSet' => 'setManualSet',
            'imageType' => 'setImageType',
            'subscriberInPics' => 'setSubscriberInPics',
            'switchTime' => 'setSwitchTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualSet  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    * imageType  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'manualSet' => 'getManualSet',
            'imageType' => 'getImageType',
            'subscriberInPics' => 'getSubscriberInPics',
            'switchTime' => 'getSwitchTime'
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
        $this->container['manualSet'] = isset($data['manualSet']) ? $data['manualSet'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['subscriberInPics'] = isset($data['subscriberInPics']) ? $data['subscriberInPics'] : null;
        $this->container['switchTime'] = isset($data['switchTime']) ? $data['switchTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['manualSet'] === null) {
            $invalidProperties[] = "'manualSet' can't be null";
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
    * Gets manualSet
    *  是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    *
    * @return int
    */
    public function getManualSet()
    {
        return $this->container['manualSet'];
    }

    /**
    * Sets manualSet
    *
    * @param int $manualSet 是否为手工设置多画面。 - 0: 系统自动多画面 - 1: 手工设置多画面
    *
    * @return $this
    */
    public function setManualSet($manualSet)
    {
        $this->container['manualSet'] = $manualSet;
        return $this;
    }

    /**
    * Gets imageType
    *  多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 多画面数目。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Four: 四画面 - Six: 六画面 - Nine: 九画面 - Sixteen: 十六画面
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets subscriberInPics
    *  子画面列表（手工设置多画面时必填）。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\SubscriberInPic[]|null
    */
    public function getSubscriberInPics()
    {
        return $this->container['subscriberInPics'];
    }

    /**
    * Sets subscriberInPics
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\SubscriberInPic[]|null $subscriberInPics 子画面列表（手工设置多画面时必填）。
    *
    * @return $this
    */
    public function setSubscriberInPics($subscriberInPics)
    {
        $this->container['subscriberInPics'] = $subscriberInPics;
        return $this;
    }

    /**
    * Gets switchTime
    *  表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @return int|null
    */
    public function getSwitchTime()
    {
        return $this->container['switchTime'];
    }

    /**
    * Sets switchTime
    *
    * @param int|null $switchTime 表示轮询间隔。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。
    *
    * @return $this
    */
    public function setSwitchTime($switchTime)
    {
        $this->container['switchTime'] = $switchTime;
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

