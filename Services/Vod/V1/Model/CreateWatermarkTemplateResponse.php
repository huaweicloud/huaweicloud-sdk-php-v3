<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWatermarkTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWatermarkTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  水印配置模板id<br/>
    * uploadUrl  水印图片上传地址<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'uploadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  水印配置模板id<br/>
    * uploadUrl  水印图片上传地址<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'uploadUrl' => null
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
    * id  水印配置模板id<br/>
    * uploadUrl  水印图片上传地址<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'uploadUrl' => 'upload_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  水印配置模板id<br/>
    * uploadUrl  水印图片上传地址<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'uploadUrl' => 'setUploadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  水印配置模板id<br/>
    * uploadUrl  水印图片上传地址<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'uploadUrl' => 'getUploadUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uploadUrl'] = isset($data['uploadUrl']) ? $data['uploadUrl'] : null;
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
    * Gets id
    *  水印配置模板id<br/>
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 水印配置模板id<br/>
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets uploadUrl
    *  水印图片上传地址<br/>
    *
    * @return string|null
    */
    public function getUploadUrl()
    {
        return $this->container['uploadUrl'];
    }

    /**
    * Sets uploadUrl
    *
    * @param string|null $uploadUrl 水印图片上传地址<br/>
    *
    * @return $this
    */
    public function setUploadUrl($uploadUrl)
    {
        $this->container['uploadUrl'] = $uploadUrl;
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

