<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageMediaTaggingItemBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageMediaTaggingItemBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    * type  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    * tag  标签名称。
    * i18nTag  i18nTag
    * i18nType  i18nType
    * instances  目标检测框信息，为空则表示没有目标检测框。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'string',
            'type' => 'string',
            'tag' => 'string',
            'i18nTag' => '\HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nTag',
            'i18nType' => '\HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nType',
            'instances' => '\HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    * type  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    * tag  标签名称。
    * i18nTag  i18nTag
    * i18nType  i18nType
    * instances  目标检测框信息，为空则表示没有目标检测框。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => 'string',
        'type' => 'string',
        'tag' => null,
        'i18nTag' => null,
        'i18nType' => null,
        'instances' => null
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
    * confidence  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    * type  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    * tag  标签名称。
    * i18nTag  i18nTag
    * i18nType  i18nType
    * instances  目标检测框信息，为空则表示没有目标检测框。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'type' => 'type',
            'tag' => 'tag',
            'i18nTag' => 'i18n_tag',
            'i18nType' => 'i18n_type',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    * type  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    * tag  标签名称。
    * i18nTag  i18nTag
    * i18nType  i18nType
    * instances  目标检测框信息，为空则表示没有目标检测框。
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'type' => 'setType',
            'tag' => 'setTag',
            'i18nTag' => 'setI18nTag',
            'i18nType' => 'setI18nType',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    * type  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    * tag  标签名称。
    * i18nTag  i18nTag
    * i18nType  i18nType
    * instances  目标检测框信息，为空则表示没有目标检测框。
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'type' => 'getType',
            'tag' => 'getTag',
            'i18nTag' => 'getI18nTag',
            'i18nType' => 'getI18nType',
            'instances' => 'getInstances'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['i18nTag'] = isset($data['i18nTag']) ? $data['i18nTag'] : null;
        $this->container['i18nType'] = isset($data['i18nType']) ? $data['i18nType'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
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
    * Gets confidence
    *  置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    *
    * @return string|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param string|null $confidence 置信度，将Float型置信度转为String类型返回,取值范围：0-100。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets type
    *  标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 标签的类别。返回的标签类型，包含二十多种大类，具体可以参考[[图像标签](http://support.huaweicloud.com/image_faq/image_01_0037.html)](tag:hc)[[图像标签](https://support.huaweicloud.com/intl/zh-cn/image_faq/image_01_0037.html)](tag:hk)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tag
    *  标签名称。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签名称。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets i18nTag
    *  i18nTag
    *
    * @return \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nTag|null
    */
    public function getI18nTag()
    {
        return $this->container['i18nTag'];
    }

    /**
    * Sets i18nTag
    *
    * @param \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nTag|null $i18nTag i18nTag
    *
    * @return $this
    */
    public function setI18nTag($i18nTag)
    {
        $this->container['i18nTag'] = $i18nTag;
        return $this;
    }

    /**
    * Gets i18nType
    *  i18nType
    *
    * @return \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nType|null
    */
    public function getI18nType()
    {
        return $this->container['i18nType'];
    }

    /**
    * Sets i18nType
    *
    * @param \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingItemBodyI18nType|null $i18nType i18nType
    *
    * @return $this
    */
    public function setI18nType($i18nType)
    {
        $this->container['i18nType'] = $i18nType;
        return $this;
    }

    /**
    * Gets instances
    *  目标检测框信息，为空则表示没有目标检测框。
    *
    * @return \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Image\V2\Model\ImageMediaTaggingInstance[]|null $instances 目标检测框信息，为空则表示没有目标检测框。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

