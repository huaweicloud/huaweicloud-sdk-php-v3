<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFaceSetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFaceSetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalFields  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    * faceSetName  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    * faceSetCapacity  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalFields' => 'map[string,\HuaweiCloud\SDK\Frs\V2\Model\TypeInfo]',
            'faceSetName' => 'string',
            'faceSetCapacity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalFields  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    * faceSetName  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    * faceSetCapacity  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalFields' => null,
        'faceSetName' => null,
        'faceSetCapacity' => 'int32'
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
    * externalFields  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    * faceSetName  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    * faceSetCapacity  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalFields' => 'external_fields',
            'faceSetName' => 'face_set_name',
            'faceSetCapacity' => 'face_set_capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalFields  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    * faceSetName  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    * faceSetCapacity  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @var string[]
    */
    protected static $setters = [
            'externalFields' => 'setExternalFields',
            'faceSetName' => 'setFaceSetName',
            'faceSetCapacity' => 'setFaceSetCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalFields  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    * faceSetName  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    * faceSetCapacity  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @var string[]
    */
    protected static $getters = [
            'externalFields' => 'getExternalFields',
            'faceSetName' => 'getFaceSetName',
            'faceSetCapacity' => 'getFaceSetCapacity'
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
        $this->container['externalFields'] = isset($data['externalFields']) ? $data['externalFields'] : null;
        $this->container['faceSetName'] = isset($data['faceSetName']) ? $data['faceSetName'] : null;
        $this->container['faceSetCapacity'] = isset($data['faceSetCapacity']) ? $data['faceSetCapacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['faceSetName'] === null) {
            $invalidProperties[] = "'faceSetName' can't be null";
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
    * Gets externalFields
    *  用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    *
    * @return map[string,\HuaweiCloud\SDK\Frs\V2\Model\TypeInfo]|null
    */
    public function getExternalFields()
    {
        return $this->container['externalFields'];
    }

    /**
    * Sets externalFields
    *
    * @param map[string,\HuaweiCloud\SDK\Frs\V2\Model\TypeInfo]|null $externalFields 用户自定义数据，自定义字段不能以系统保留字段vector、bounding_box、external_image_id、face_id、create_time、_id、_all、_source等字段命名。 Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](zh-cn_topic_0130807044.xml)。
    *
    * @return $this
    */
    public function setExternalFields($externalFields)
    {
        $this->container['externalFields'] = $externalFields;
        return $this;
    }

    /**
    * Gets faceSetName
    *  人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    *
    * @return string
    */
    public function getFaceSetName()
    {
        return $this->container['faceSetName'];
    }

    /**
    * Sets faceSetName
    *
    * @param string $faceSetName 人脸库名称。 建议人脸库的名称不要以下划线（_）开头，否则云监控服务会无法采集人脸数量。
    *
    * @return $this
    */
    public function setFaceSetName($faceSetName)
    {
        $this->container['faceSetName'] = $faceSetName;
        return $this;
    }

    /**
    * Gets faceSetCapacity
    *  人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @return int|null
    */
    public function getFaceSetCapacity()
    {
        return $this->container['faceSetCapacity'];
    }

    /**
    * Sets faceSetCapacity
    *
    * @param int|null $faceSetCapacity 人脸库最大的容量，填写1万整数倍的数字，例如：30000。 默认为100000，最大值为100000，可通过创建新的人脸库进行扩容，每个用户可免费默认使用10个人脸库，每个人脸库容量为10万个人脸特征。如需扩容单个人脸库规模，请联系华为云客服确认扩容规模与价格。
    *
    * @return $this
    */
    public function setFaceSetCapacity($faceSetCapacity)
    {
        $this->container['faceSetCapacity'] = $faceSetCapacity;
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

