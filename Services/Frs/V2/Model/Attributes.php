<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Attributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Attributes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dress  dress
    * glass  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    * hat  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    * age  年龄。
    * mask  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    * beard  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    * phototype  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    * quality  quality
    * hair  发型： • long：长发 • short：短发 • unknown：未知
    * expression  expression
    * faceAngle  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dress' => '\HuaweiCloud\SDK\Frs\V2\Model\Dress',
            'glass' => 'string',
            'hat' => 'string',
            'age' => 'int',
            'mask' => 'string',
            'beard' => 'string',
            'phototype' => 'string',
            'quality' => '\HuaweiCloud\SDK\Frs\V2\Model\FaceQuality',
            'hair' => 'string',
            'expression' => '\HuaweiCloud\SDK\Frs\V2\Model\AttributesExpression',
            'faceAngle' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dress  dress
    * glass  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    * hat  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    * age  年龄。
    * mask  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    * beard  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    * phototype  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    * quality  quality
    * hair  发型： • long：长发 • short：短发 • unknown：未知
    * expression  expression
    * faceAngle  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dress' => null,
        'glass' => null,
        'hat' => null,
        'age' => 'int32',
        'mask' => null,
        'beard' => null,
        'phototype' => null,
        'quality' => null,
        'hair' => null,
        'expression' => null,
        'faceAngle' => 'int32'
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
    * dress  dress
    * glass  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    * hat  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    * age  年龄。
    * mask  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    * beard  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    * phototype  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    * quality  quality
    * hair  发型： • long：长发 • short：短发 • unknown：未知
    * expression  expression
    * faceAngle  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dress' => 'dress',
            'glass' => 'glass',
            'hat' => 'hat',
            'age' => 'age',
            'mask' => 'mask',
            'beard' => 'beard',
            'phototype' => 'phototype',
            'quality' => 'quality',
            'hair' => 'hair',
            'expression' => 'expression',
            'faceAngle' => 'face_angle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dress  dress
    * glass  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    * hat  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    * age  年龄。
    * mask  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    * beard  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    * phototype  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    * quality  quality
    * hair  发型： • long：长发 • short：短发 • unknown：未知
    * expression  expression
    * faceAngle  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @var string[]
    */
    protected static $setters = [
            'dress' => 'setDress',
            'glass' => 'setGlass',
            'hat' => 'setHat',
            'age' => 'setAge',
            'mask' => 'setMask',
            'beard' => 'setBeard',
            'phototype' => 'setPhototype',
            'quality' => 'setQuality',
            'hair' => 'setHair',
            'expression' => 'setExpression',
            'faceAngle' => 'setFaceAngle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dress  dress
    * glass  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    * hat  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    * age  年龄。
    * mask  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    * beard  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    * phototype  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    * quality  quality
    * hair  发型： • long：长发 • short：短发 • unknown：未知
    * expression  expression
    * faceAngle  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @var string[]
    */
    protected static $getters = [
            'dress' => 'getDress',
            'glass' => 'getGlass',
            'hat' => 'getHat',
            'age' => 'getAge',
            'mask' => 'getMask',
            'beard' => 'getBeard',
            'phototype' => 'getPhototype',
            'quality' => 'getQuality',
            'hair' => 'getHair',
            'expression' => 'getExpression',
            'faceAngle' => 'getFaceAngle'
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
        $this->container['dress'] = isset($data['dress']) ? $data['dress'] : null;
        $this->container['glass'] = isset($data['glass']) ? $data['glass'] : null;
        $this->container['hat'] = isset($data['hat']) ? $data['hat'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['beard'] = isset($data['beard']) ? $data['beard'] : null;
        $this->container['phototype'] = isset($data['phototype']) ? $data['phototype'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['hair'] = isset($data['hair']) ? $data['hair'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['faceAngle'] = isset($data['faceAngle']) ? $data['faceAngle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dress'] === null) {
            $invalidProperties[] = "'dress' can't be null";
        }
        if ($this->container['glass'] === null) {
            $invalidProperties[] = "'glass' can't be null";
        }
        if ($this->container['hat'] === null) {
            $invalidProperties[] = "'hat' can't be null";
        }
        if ($this->container['age'] === null) {
            $invalidProperties[] = "'age' can't be null";
        }
        if ($this->container['mask'] === null) {
            $invalidProperties[] = "'mask' can't be null";
        }
        if ($this->container['beard'] === null) {
            $invalidProperties[] = "'beard' can't be null";
        }
        if ($this->container['phototype'] === null) {
            $invalidProperties[] = "'phototype' can't be null";
        }
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
        }
        if ($this->container['hair'] === null) {
            $invalidProperties[] = "'hair' can't be null";
        }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
        if ($this->container['faceAngle'] === null) {
            $invalidProperties[] = "'faceAngle' can't be null";
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
    * Gets dress
    *  dress
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\Dress
    */
    public function getDress()
    {
        return $this->container['dress'];
    }

    /**
    * Sets dress
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\Dress $dress dress
    *
    * @return $this
    */
    public function setDress($dress)
    {
        $this->container['dress'] = $dress;
        return $this;
    }

    /**
    * Gets glass
    *  是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    *
    * @return string
    */
    public function getGlass()
    {
        return $this->container['glass'];
    }

    /**
    * Sets glass
    *
    * @param string $glass 是否带眼镜： • yes：带眼镜 • dark：带墨镜 • none：未戴眼镜 • unknown：未知
    *
    * @return $this
    */
    public function setGlass($glass)
    {
        $this->container['glass'] = $glass;
        return $this;
    }

    /**
    * Gets hat
    *  是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    *
    * @return string
    */
    public function getHat()
    {
        return $this->container['hat'];
    }

    /**
    * Sets hat
    *
    * @param string $hat 是否戴帽子： • yes：戴帽子 • none：未戴帽子 • unknown：未知
    *
    * @return $this
    */
    public function setHat($hat)
    {
        $this->container['hat'] = $hat;
        return $this;
    }

    /**
    * Gets age
    *  年龄。
    *
    * @return int
    */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
    * Sets age
    *
    * @param int $age 年龄。
    *
    * @return $this
    */
    public function setAge($age)
    {
        $this->container['age'] = $age;
        return $this;
    }

    /**
    * Gets mask
    *  是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    *
    * @return string
    */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
    * Sets mask
    *
    * @param string $mask 是否戴口罩： • yes：戴口罩 • none：未戴口罩 • unknown：未知
    *
    * @return $this
    */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;
        return $this;
    }

    /**
    * Gets beard
    *  胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    *
    * @return string
    */
    public function getBeard()
    {
        return $this->container['beard'];
    }

    /**
    * Sets beard
    *
    * @param string $beard 胡须： • yes：有胡须 • none：无胡须 • unknown：未知
    *
    * @return $this
    */
    public function setBeard($beard)
    {
        $this->container['beard'] = $beard;
        return $this;
    }

    /**
    * Gets phototype
    *  图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    *
    * @return string
    */
    public function getPhototype()
    {
        return $this->container['phototype'];
    }

    /**
    * Sets phototype
    *
    * @param string $phototype 图片类型： • idcard：证件照 • monitor：摄像头监控 • internet photo：网络图片
    *
    * @return $this
    */
    public function setPhototype($phototype)
    {
        $this->container['phototype'] = $phototype;
        return $this;
    }

    /**
    * Gets quality
    *  quality
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\FaceQuality
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\FaceQuality $quality quality
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets hair
    *  发型： • long：长发 • short：短发 • unknown：未知
    *
    * @return string
    */
    public function getHair()
    {
        return $this->container['hair'];
    }

    /**
    * Sets hair
    *
    * @param string $hair 发型： • long：长发 • short：短发 • unknown：未知
    *
    * @return $this
    */
    public function setHair($hair)
    {
        $this->container['hair'] = $hair;
        return $this;
    }

    /**
    * Gets expression
    *  expression
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\AttributesExpression
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\AttributesExpression $expression expression
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets faceAngle
    *  人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @return int
    */
    public function getFaceAngle()
    {
        return $this->container['faceAngle'];
    }

    /**
    * Sets faceAngle
    *
    * @param int $faceAngle 人脸图片旋转角（顺时针偏转角度），支持0°、90°、180°和270°图片旋转。
    *
    * @return $this
    */
    public function setFaceAngle($faceAngle)
    {
        $this->container['faceAngle'] = $faceAngle;
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

