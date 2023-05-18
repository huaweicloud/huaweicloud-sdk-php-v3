<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestPicLayout implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestPicLayout';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchTime  多画面轮询时间，单位秒。
    * picNum  多画面画面数量。
    * layOutName  多画面布局名称。
    * imageType  画面类型。
    * uuid  布局UUID。
    * subscriberInPics  子画面列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchTime' => 'int',
            'picNum' => 'int',
            'layOutName' => 'string',
            'imageType' => 'string',
            'uuid' => 'string',
            'subscriberInPics' => '\HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchTime  多画面轮询时间，单位秒。
    * picNum  多画面画面数量。
    * layOutName  多画面布局名称。
    * imageType  画面类型。
    * uuid  布局UUID。
    * subscriberInPics  子画面列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchTime' => 'int32',
        'picNum' => 'int32',
        'layOutName' => null,
        'imageType' => null,
        'uuid' => null,
        'subscriberInPics' => null
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
    * switchTime  多画面轮询时间，单位秒。
    * picNum  多画面画面数量。
    * layOutName  多画面布局名称。
    * imageType  画面类型。
    * uuid  布局UUID。
    * subscriberInPics  子画面列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchTime' => 'switchTime',
            'picNum' => 'picNum',
            'layOutName' => 'layOutName',
            'imageType' => 'imageType',
            'uuid' => 'uuid',
            'subscriberInPics' => 'subscriberInPics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchTime  多画面轮询时间，单位秒。
    * picNum  多画面画面数量。
    * layOutName  多画面布局名称。
    * imageType  画面类型。
    * uuid  布局UUID。
    * subscriberInPics  子画面列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchTime' => 'setSwitchTime',
            'picNum' => 'setPicNum',
            'layOutName' => 'setLayOutName',
            'imageType' => 'setImageType',
            'uuid' => 'setUuid',
            'subscriberInPics' => 'setSubscriberInPics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchTime  多画面轮询时间，单位秒。
    * picNum  多画面画面数量。
    * layOutName  多画面布局名称。
    * imageType  画面类型。
    * uuid  布局UUID。
    * subscriberInPics  子画面列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchTime' => 'getSwitchTime',
            'picNum' => 'getPicNum',
            'layOutName' => 'getLayOutName',
            'imageType' => 'getImageType',
            'uuid' => 'getUuid',
            'subscriberInPics' => 'getSubscriberInPics'
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
        $this->container['switchTime'] = isset($data['switchTime']) ? $data['switchTime'] : null;
        $this->container['picNum'] = isset($data['picNum']) ? $data['picNum'] : null;
        $this->container['layOutName'] = isset($data['layOutName']) ? $data['layOutName'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['subscriberInPics'] = isset($data['subscriberInPics']) ? $data['subscriberInPics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['switchTime']) && ($this->container['switchTime'] < 10)) {
                $invalidProperties[] = "invalid value for 'switchTime', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['picNum']) && ($this->container['picNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'picNum', must be bigger than or equal to 1.";
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
    * Gets switchTime
    *  多画面轮询时间，单位秒。
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
    * @param int|null $switchTime 多画面轮询时间，单位秒。
    *
    * @return $this
    */
    public function setSwitchTime($switchTime)
    {
        $this->container['switchTime'] = $switchTime;
        return $this;
    }

    /**
    * Gets picNum
    *  多画面画面数量。
    *
    * @return int|null
    */
    public function getPicNum()
    {
        return $this->container['picNum'];
    }

    /**
    * Sets picNum
    *
    * @param int|null $picNum 多画面画面数量。
    *
    * @return $this
    */
    public function setPicNum($picNum)
    {
        $this->container['picNum'] = $picNum;
        return $this;
    }

    /**
    * Gets layOutName
    *  多画面布局名称。
    *
    * @return string|null
    */
    public function getLayOutName()
    {
        return $this->container['layOutName'];
    }

    /**
    * Sets layOutName
    *
    * @param string|null $layOutName 多画面布局名称。
    *
    * @return $this
    */
    public function setLayOutName($layOutName)
    {
        $this->container['layOutName'] = $layOutName;
        return $this;
    }

    /**
    * Gets imageType
    *  画面类型。
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
    * @param string|null $imageType 画面类型。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets uuid
    *  布局UUID。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 布局UUID。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets subscriberInPics
    *  子画面列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]|null
    */
    public function getSubscriberInPics()
    {
        return $this->container['subscriberInPics'];
    }

    /**
    * Sets subscriberInPics
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]|null $subscriberInPics 子画面列表。
    *
    * @return $this
    */
    public function setSubscriberInPics($subscriberInPics)
    {
        $this->container['subscriberInPics'] = $subscriberInPics;
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

