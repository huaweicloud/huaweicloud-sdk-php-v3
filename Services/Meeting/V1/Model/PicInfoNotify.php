<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PicInfoNotify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PicInfoNotify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * index  多画面中每个画面的编号，编号从1开始。
    * id  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    * share  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'index' => 'int',
            'id' => 'string[]',
            'share' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * index  多画面中每个画面的编号，编号从1开始。
    * id  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    * share  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'id' => 'int32',
        'share' => 'int32'
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
    * index  多画面中每个画面的编号，编号从1开始。
    * id  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    * share  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'index' => 'index',
            'id' => 'id',
            'share' => 'share'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * index  多画面中每个画面的编号，编号从1开始。
    * id  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    * share  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @var string[]
    */
    protected static $setters = [
            'index' => 'setIndex',
            'id' => 'setId',
            'share' => 'setShare'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * index  多画面中每个画面的编号，编号从1开始。
    * id  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    * share  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @var string[]
    */
    protected static $getters = [
            'index' => 'getIndex',
            'id' => 'getId',
            'share' => 'getShare'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
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
    * Gets index
    *  多画面中每个画面的编号，编号从1开始。
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 多画面中每个画面的编号，编号从1开始。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets id
    *  每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 每个画面中的与会者SIP号码。SIP号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)获取。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets share
    *  是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @return int|null
    */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
    * Sets share
    *
    * @param int|null $share 是否为辅流。 * 0： 不是辅流 * 1： 是辅流
    *
    * @return $this
    */
    public function setShare($share)
    {
        $this->container['share'] = $share;
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

