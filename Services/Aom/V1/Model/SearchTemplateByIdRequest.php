<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchTemplateByIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchTemplateByIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  方案id。
    * shareType  模板共享类型，默认为private。可选public private
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'shareType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  方案id。
    * shareType  模板共享类型，默认为private。可选public private
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'shareType' => null
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
    * templateId  方案id。
    * shareType  模板共享类型，默认为private。可选public private
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'shareType' => 'share_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  方案id。
    * shareType  模板共享类型，默认为private。可选public private
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'shareType' => 'setShareType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  方案id。
    * shareType  模板共享类型，默认为private。可选public private
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'shareType' => 'getShareType'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if ((mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['shareType'] === null) {
            $invalidProperties[] = "'shareType' can't be null";
        }
            if ((mb_strlen($this->container['shareType']) > 10)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['shareType']) < 1)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be bigger than or equal to 1.";
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
    * Gets templateId
    *  方案id。
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 方案id。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets shareType
    *  模板共享类型，默认为private。可选public private
    *
    * @return string
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string $shareType 模板共享类型，默认为private。可选public private
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
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

