<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DriverLicenseBack implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DriverLicenseBack';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    * number  驾驶证号。
    * name  姓名。
    * issuingAuthority  发证机关。
    * address  住址。
    * fileNumber  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    * record  记录。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'number' => 'string',
            'name' => 'string',
            'issuingAuthority' => 'string',
            'address' => 'string',
            'fileNumber' => 'string',
            'record' => 'string',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    * number  驾驶证号。
    * name  姓名。
    * issuingAuthority  发证机关。
    * address  住址。
    * fileNumber  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    * record  记录。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'number' => null,
        'name' => null,
        'issuingAuthority' => null,
        'address' => null,
        'fileNumber' => null,
        'record' => null,
        'textLocation' => null
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
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    * number  驾驶证号。
    * name  姓名。
    * issuingAuthority  发证机关。
    * address  住址。
    * fileNumber  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    * record  记录。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'number' => 'number',
            'name' => 'name',
            'issuingAuthority' => 'issuing_authority',
            'address' => 'address',
            'fileNumber' => 'file_number',
            'record' => 'record',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    * number  驾驶证号。
    * name  姓名。
    * issuingAuthority  发证机关。
    * address  住址。
    * fileNumber  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    * record  记录。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'number' => 'setNumber',
            'name' => 'setName',
            'issuingAuthority' => 'setIssuingAuthority',
            'address' => 'setAddress',
            'fileNumber' => 'setFileNumber',
            'record' => 'setRecord',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    * number  驾驶证号。
    * name  姓名。
    * issuingAuthority  发证机关。
    * address  住址。
    * fileNumber  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    * record  记录。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'number' => 'getNumber',
            'name' => 'getName',
            'issuingAuthority' => 'getIssuingAuthority',
            'address' => 'getAddress',
            'fileNumber' => 'getFileNumber',
            'record' => 'getRecord',
            'textLocation' => 'getTextLocation'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['fileNumber'] = isset($data['fileNumber']) ? $data['fileNumber'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
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
    *  驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
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
    * @param string|null $type 驾驶证类型。 normal：纸质驾驶证 electronic：电子驾驶证
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets number
    *  驾驶证号。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 驾驶证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets name
    *  姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  发证机关。
    *
    * @return string|null
    */
    public function getIssuingAuthority()
    {
        return $this->container['issuingAuthority'];
    }

    /**
    * Sets issuingAuthority
    *
    * @param string|null $issuingAuthority 发证机关。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets address
    *  住址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 住址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets fileNumber
    *  档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    *
    * @return string|null
    */
    public function getFileNumber()
    {
        return $this->container['fileNumber'];
    }

    /**
    * Sets fileNumber
    *
    * @param string|null $fileNumber 档案编号。 > 说明：当驾驶证类型为纸质驾驶证时才返回。
    *
    * @return $this
    */
    public function setFileNumber($fileNumber)
    {
        $this->container['fileNumber'] = $fileNumber;
        return $this;
    }

    /**
    * Gets record
    *  记录。
    *
    * @return string|null
    */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
    * Sets record
    *
    * @param string|null $record 记录。
    *
    * @return $this
    */
    public function setRecord($record)
    {
        $this->container['record'] = $record;
        return $this;
    }

    /**
    * Gets textLocation
    *  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
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

