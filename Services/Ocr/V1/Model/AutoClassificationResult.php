<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoClassificationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoClassificationResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  status
    * content  对应票证具体结构化识别的结果。
    * type  对应票证的类别。
    * location  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * sealMark  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => '\HuaweiCloud\SDK\Ocr\V1\Model\AutoClassificationResultStatus',
            'content' => 'object',
            'type' => 'string',
            'location' => 'int[][]',
            'sealMark' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  status
    * content  对应票证具体结构化识别的结果。
    * type  对应票证的类别。
    * location  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * sealMark  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'content' => null,
        'type' => null,
        'location' => 'int32',
        'sealMark' => null
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
    * status  status
    * content  对应票证具体结构化识别的结果。
    * type  对应票证的类别。
    * location  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * sealMark  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'content' => 'content',
            'type' => 'type',
            'location' => 'location',
            'sealMark' => 'seal_mark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  status
    * content  对应票证具体结构化识别的结果。
    * type  对应票证的类别。
    * location  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * sealMark  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'content' => 'setContent',
            'type' => 'setType',
            'location' => 'setLocation',
            'sealMark' => 'setSealMark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  status
    * content  对应票证具体结构化识别的结果。
    * type  对应票证的类别。
    * location  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * sealMark  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'content' => 'getContent',
            'type' => 'getType',
            'location' => 'getLocation',
            'sealMark' => 'getSealMark'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['sealMark'] = isset($data['sealMark']) ? $data['sealMark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\AutoClassificationResultStatus
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\AutoClassificationResultStatus $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets content
    *  对应票证具体结构化识别的结果。
    *
    * @return object
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param object $content 对应票证具体结构化识别的结果。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets type
    *  对应票证的类别。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 对应票证的类别。
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
    *  票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][] $location 票证的区域位置信息，列表形式，包含票证区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets sealMark
    *  对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @return bool|null
    */
    public function getSealMark()
    {
        return $this->container['sealMark'];
    }

    /**
    * Sets sealMark
    *
    * @param bool|null $sealMark 对应票证中是否含有印章。可选值包括： -  true：该票证中含有印章。 -  false：该票证中不含有印章。
    *
    * @return $this
    */
    public function setSealMark($sealMark)
    {
        $this->container['sealMark'] = $sealMark;
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

