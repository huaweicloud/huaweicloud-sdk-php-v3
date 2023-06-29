<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualityEnhanceTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualityEnhanceTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  模板名称。
    * templateDescription  模板描述，查询预置模板时才会返回。
    * video  video
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'templateDescription' => 'string',
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\QualityEnhanceVideo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  模板名称。
    * templateDescription  模板描述，查询预置模板时才会返回。
    * video  video
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'templateDescription' => null,
        'video' => null
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
    * templateName  模板名称。
    * templateDescription  模板描述，查询预置模板时才会返回。
    * video  video
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'templateDescription' => 'template_description',
            'video' => 'video'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  模板名称。
    * templateDescription  模板描述，查询预置模板时才会返回。
    * video  video
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'templateDescription' => 'setTemplateDescription',
            'video' => 'setVideo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  模板名称。
    * templateDescription  模板描述，查询预置模板时才会返回。
    * video  video
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'templateDescription' => 'getTemplateDescription',
            'video' => 'getVideo'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['templateName']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
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
    * Gets templateName
    *  模板名称。
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 模板名称。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateDescription
    *  模板描述，查询预置模板时才会返回。
    *
    * @return string|null
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string|null $templateDescription 模板描述，查询预置模板时才会返回。
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets video
    *  video
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\QualityEnhanceVideo|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\QualityEnhanceVideo|null $video video
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
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

