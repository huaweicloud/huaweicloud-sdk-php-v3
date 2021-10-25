<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddFacesUrlReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddFacesUrlReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    * externalFields  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageUrl' => 'string',
            'externalFields' => 'object',
            'externalImageId' => 'string',
            'single' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    * externalFields  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageUrl' => null,
        'externalFields' => null,
        'externalImageId' => null,
        'single' => null
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
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    * externalFields  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageUrl' => 'image_url',
            'externalFields' => 'external_fields',
            'externalImageId' => 'external_image_id',
            'single' => 'single'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    * externalFields  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageUrl' => 'setImageUrl',
            'externalFields' => 'setExternalFields',
            'externalImageId' => 'setExternalImageId',
            'single' => 'setSingle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    * externalFields  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageUrl' => 'getImageUrl',
            'externalFields' => 'getExternalFields',
            'externalImageId' => 'getExternalImageId',
            'single' => 'getSingle'
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
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['externalFields'] = isset($data['externalFields']) ? $data['externalFields'] : null;
        $this->container['externalImageId'] = isset($data['externalImageId']) ? $data['externalImageId'] : null;
        $this->container['single'] = isset($data['single']) ? $data['single'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageUrl'] === null) {
            $invalidProperties[] = "'imageUrl' can't be null";
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
    * Gets imageUrl
    *  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    *
    * @return string
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string $imageUrl 图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。 开通读取权限的操作请参见服务授权。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets externalFields
    *  根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    *
    * @return object|null
    */
    public function getExternalFields()
    {
        return $this->container['externalFields'];
    }

    /**
    * Sets externalFields
    *
    * @param object|null $externalFields 根据用户自定义数据类型，填入相应的数值。 创建faceset时定义该字段，Json字符串不校验重复性，参考自定义字段。
    *
    * @return $this
    */
    public function setExternalFields($externalFields)
    {
        $this->container['externalFields'] = $externalFields;
        return $this;
    }

    /**
    * Gets externalImageId
    *  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    *
    * @return string|null
    */
    public function getExternalImageId()
    {
        return $this->container['externalImageId'];
    }

    /**
    * Sets externalImageId
    *
    * @param string|null $externalImageId 用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    *
    * @return $this
    */
    public function setExternalImageId($externalImageId)
    {
        $this->container['externalImageId'] = $externalImageId;
        return $this;
    }

    /**
    * Gets single
    *  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @return bool|null
    */
    public function getSingle()
    {
        return $this->container['single'];
    }

    /**
    * Sets single
    *
    * @param bool|null $single 是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @return $this
    */
    public function setSingle($single)
    {
        $this->container['single'] = $single;
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

