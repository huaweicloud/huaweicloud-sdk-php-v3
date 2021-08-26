<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FaceSetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FaceSetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * faceNumber  人脸库当中的人脸数量。
    * externalFields  用户的自定义字段。
    * faceSetId  人脸库ID，随机生成的包含八个字符的字符串。
    * faceSetName  人脸库名称。
    * createDate  创建时间。
    * faceSetCapacity  人脸库最大的容量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'faceNumber' => 'int',
            'externalFields' => 'object',
            'faceSetId' => 'string',
            'faceSetName' => 'string',
            'createDate' => 'string',
            'faceSetCapacity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * faceNumber  人脸库当中的人脸数量。
    * externalFields  用户的自定义字段。
    * faceSetId  人脸库ID，随机生成的包含八个字符的字符串。
    * faceSetName  人脸库名称。
    * createDate  创建时间。
    * faceSetCapacity  人脸库最大的容量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'faceNumber' => 'int32',
        'externalFields' => null,
        'faceSetId' => null,
        'faceSetName' => null,
        'createDate' => null,
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
    * faceNumber  人脸库当中的人脸数量。
    * externalFields  用户的自定义字段。
    * faceSetId  人脸库ID，随机生成的包含八个字符的字符串。
    * faceSetName  人脸库名称。
    * createDate  创建时间。
    * faceSetCapacity  人脸库最大的容量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'faceNumber' => 'face_number',
            'externalFields' => 'external_fields',
            'faceSetId' => 'face_set_id',
            'faceSetName' => 'face_set_name',
            'createDate' => 'create_date',
            'faceSetCapacity' => 'face_set_capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * faceNumber  人脸库当中的人脸数量。
    * externalFields  用户的自定义字段。
    * faceSetId  人脸库ID，随机生成的包含八个字符的字符串。
    * faceSetName  人脸库名称。
    * createDate  创建时间。
    * faceSetCapacity  人脸库最大的容量。
    *
    * @var string[]
    */
    protected static $setters = [
            'faceNumber' => 'setFaceNumber',
            'externalFields' => 'setExternalFields',
            'faceSetId' => 'setFaceSetId',
            'faceSetName' => 'setFaceSetName',
            'createDate' => 'setCreateDate',
            'faceSetCapacity' => 'setFaceSetCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * faceNumber  人脸库当中的人脸数量。
    * externalFields  用户的自定义字段。
    * faceSetId  人脸库ID，随机生成的包含八个字符的字符串。
    * faceSetName  人脸库名称。
    * createDate  创建时间。
    * faceSetCapacity  人脸库最大的容量。
    *
    * @var string[]
    */
    protected static $getters = [
            'faceNumber' => 'getFaceNumber',
            'externalFields' => 'getExternalFields',
            'faceSetId' => 'getFaceSetId',
            'faceSetName' => 'getFaceSetName',
            'createDate' => 'getCreateDate',
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
        $this->container['faceNumber'] = isset($data['faceNumber']) ? $data['faceNumber'] : null;
        $this->container['externalFields'] = isset($data['externalFields']) ? $data['externalFields'] : null;
        $this->container['faceSetId'] = isset($data['faceSetId']) ? $data['faceSetId'] : null;
        $this->container['faceSetName'] = isset($data['faceSetName']) ? $data['faceSetName'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
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
        if ($this->container['faceNumber'] === null) {
            $invalidProperties[] = "'faceNumber' can't be null";
        }
        if ($this->container['externalFields'] === null) {
            $invalidProperties[] = "'externalFields' can't be null";
        }
        if ($this->container['faceSetId'] === null) {
            $invalidProperties[] = "'faceSetId' can't be null";
        }
        if ($this->container['faceSetName'] === null) {
            $invalidProperties[] = "'faceSetName' can't be null";
        }
        if ($this->container['createDate'] === null) {
            $invalidProperties[] = "'createDate' can't be null";
        }
        if ($this->container['faceSetCapacity'] === null) {
            $invalidProperties[] = "'faceSetCapacity' can't be null";
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
    * Gets faceNumber
    *  人脸库当中的人脸数量。
    *
    * @return int
    */
    public function getFaceNumber()
    {
        return $this->container['faceNumber'];
    }

    /**
    * Sets faceNumber
    *
    * @param int $faceNumber 人脸库当中的人脸数量。
    *
    * @return $this
    */
    public function setFaceNumber($faceNumber)
    {
        $this->container['faceNumber'] = $faceNumber;
        return $this;
    }

    /**
    * Gets externalFields
    *  用户的自定义字段。
    *
    * @return object
    */
    public function getExternalFields()
    {
        return $this->container['externalFields'];
    }

    /**
    * Sets externalFields
    *
    * @param object $externalFields 用户的自定义字段。
    *
    * @return $this
    */
    public function setExternalFields($externalFields)
    {
        $this->container['externalFields'] = $externalFields;
        return $this;
    }

    /**
    * Gets faceSetId
    *  人脸库ID，随机生成的包含八个字符的字符串。
    *
    * @return string
    */
    public function getFaceSetId()
    {
        return $this->container['faceSetId'];
    }

    /**
    * Sets faceSetId
    *
    * @param string $faceSetId 人脸库ID，随机生成的包含八个字符的字符串。
    *
    * @return $this
    */
    public function setFaceSetId($faceSetId)
    {
        $this->container['faceSetId'] = $faceSetId;
        return $this;
    }

    /**
    * Gets faceSetName
    *  人脸库名称。
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
    * @param string $faceSetName 人脸库名称。
    *
    * @return $this
    */
    public function setFaceSetName($faceSetName)
    {
        $this->container['faceSetName'] = $faceSetName;
        return $this;
    }

    /**
    * Gets createDate
    *  创建时间。
    *
    * @return string
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param string $createDate 创建时间。
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets faceSetCapacity
    *  人脸库最大的容量。
    *
    * @return int
    */
    public function getFaceSetCapacity()
    {
        return $this->container['faceSetCapacity'];
    }

    /**
    * Sets faceSetCapacity
    *
    * @param int $faceSetCapacity 人脸库最大的容量。
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

