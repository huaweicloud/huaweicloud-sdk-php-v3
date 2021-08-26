<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteFaceByExternalImageIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteFaceByExternalImageIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * faceNumber  删除的人脸数量。 调用失败时无此字段。
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'faceNumber' => 'int',
            'faceSetId' => 'string',
            'faceSetName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * faceNumber  删除的人脸数量。 调用失败时无此字段。
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'faceNumber' => 'int32',
        'faceSetId' => null,
        'faceSetName' => null
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
    * faceNumber  删除的人脸数量。 调用失败时无此字段。
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'faceNumber' => 'face_number',
            'faceSetId' => 'face_set_id',
            'faceSetName' => 'face_set_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * faceNumber  删除的人脸数量。 调用失败时无此字段。
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'faceNumber' => 'setFaceNumber',
            'faceSetId' => 'setFaceSetId',
            'faceSetName' => 'setFaceSetName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * faceNumber  删除的人脸数量。 调用失败时无此字段。
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'faceNumber' => 'getFaceNumber',
            'faceSetId' => 'getFaceSetId',
            'faceSetName' => 'getFaceSetName'
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
        $this->container['faceSetId'] = isset($data['faceSetId']) ? $data['faceSetId'] : null;
        $this->container['faceSetName'] = isset($data['faceSetName']) ? $data['faceSetName'] : null;
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
    * Gets faceNumber
    *  删除的人脸数量。 调用失败时无此字段。
    *
    * @return int|null
    */
    public function getFaceNumber()
    {
        return $this->container['faceNumber'];
    }

    /**
    * Sets faceNumber
    *
    * @param int|null $faceNumber 删除的人脸数量。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setFaceNumber($faceNumber)
    {
        $this->container['faceNumber'] = $faceNumber;
        return $this;
    }

    /**
    * Gets faceSetId
    *  人脸库ID。 调用失败时无此字段。
    *
    * @return string|null
    */
    public function getFaceSetId()
    {
        return $this->container['faceSetId'];
    }

    /**
    * Sets faceSetId
    *
    * @param string|null $faceSetId 人脸库ID。 调用失败时无此字段。
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
    *  人脸库名称。 调用失败时无此字段。
    *
    * @return string|null
    */
    public function getFaceSetName()
    {
        return $this->container['faceSetName'];
    }

    /**
    * Sets faceSetName
    *
    * @param string|null $faceSetName 人脸库名称。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setFaceSetName($faceSetName)
    {
        $this->container['faceSetName'] = $faceSetName;
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

