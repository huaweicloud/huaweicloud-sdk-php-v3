<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HouseholdRegisterResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HouseholdRegisterResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型。参数为“首页”或“登记页”。
    * location  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * content  content
    * confidence  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'location' => 'int[][]',
            'content' => '\HuaweiCloud\SDK\Ocr\V1\Model\HouseholdRegisterContent',
            'confidence' => 'map[string,float]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型。参数为“首页”或“登记页”。
    * location  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * content  content
    * confidence  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'location' => 'int32',
        'content' => null,
        'confidence' => 'float'
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
    * type  类型。参数为“首页”或“登记页”。
    * location  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * content  content
    * confidence  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'location' => 'location',
            'content' => 'content',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型。参数为“首页”或“登记页”。
    * location  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * content  content
    * confidence  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'location' => 'setLocation',
            'content' => 'setContent',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型。参数为“首页”或“登记页”。
    * location  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * content  content
    * confidence  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'location' => 'getLocation',
            'content' => 'getContent',
            'confidence' => 'getConfidence'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets type
    *  类型。参数为“首页”或“登记页”。
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
    * @param string|null $type 类型。参数为“首页”或“登记页”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets location
    *  户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][]|null $location 户口本证件位置信息，列表形式，包含证件位置四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets content
    *  content
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\HouseholdRegisterContent|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\HouseholdRegisterContent|null $content content
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets confidence
    *  content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @return map[string,float]|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param map[string,float]|null $confidence content中各个字段的置信度，取值范围0~1。置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

