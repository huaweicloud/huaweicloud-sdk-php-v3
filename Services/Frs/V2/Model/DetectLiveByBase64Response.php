<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetectLiveByBase64Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetectLiveByBase64Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoResult  videoResult
    * warningList  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoResult' => '\HuaweiCloud\SDK\Frs\V2\Model\LiveDetectRespVideoresult',
            'warningList' => '\HuaweiCloud\SDK\Frs\V2\Model\WarningList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoResult  videoResult
    * warningList  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoResult' => null,
        'warningList' => null
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
    * videoResult  videoResult
    * warningList  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoResult' => 'video-result',
            'warningList' => 'warning-list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoResult  videoResult
    * warningList  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @var string[]
    */
    protected static $setters = [
            'videoResult' => 'setVideoResult',
            'warningList' => 'setWarningList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoResult  videoResult
    * warningList  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @var string[]
    */
    protected static $getters = [
            'videoResult' => 'getVideoResult',
            'warningList' => 'getWarningList'
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
        $this->container['videoResult'] = isset($data['videoResult']) ? $data['videoResult'] : null;
        $this->container['warningList'] = isset($data['warningList']) ? $data['warningList'] : null;
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
    * Gets videoResult
    *  videoResult
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\LiveDetectRespVideoresult|null
    */
    public function getVideoResult()
    {
        return $this->container['videoResult'];
    }

    /**
    * Sets videoResult
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\LiveDetectRespVideoresult|null $videoResult videoResult
    *
    * @return $this
    */
    public function setVideoResult($videoResult)
    {
        $this->container['videoResult'] = $videoResult;
        return $this;
    }

    /**
    * Gets warningList
    *  警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\WarningList[]|null
    */
    public function getWarningList()
    {
        return $this->container['warningList'];
    }

    /**
    * Sets warningList
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\WarningList[]|null $warningList 警告信息列表，WarningList结构见[WarningList](https://support.huaweicloud.com/api-face/face_02_0077.html)。 调用失败时无此字段
    *
    * @return $this
    */
    public function setWarningList($warningList)
    {
        $this->container['warningList'] = $warningList;
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

