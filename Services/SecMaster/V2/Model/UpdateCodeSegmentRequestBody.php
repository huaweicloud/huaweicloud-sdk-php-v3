<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCodeSegmentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCodeSegmentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeSegmentName' => 'string',
            'description' => 'string',
            'code' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeSegmentName' => null,
        'description' => null,
        'code' => null
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
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeSegmentName' => 'code_segment_name',
            'description' => 'description',
            'code' => 'code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    *
    * @var string[]
    */
    protected static $setters = [
            'codeSegmentName' => 'setCodeSegmentName',
            'description' => 'setDescription',
            'code' => 'setCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeSegmentName  代码段名称
    * description  代码段描述信息
    * code  代码片段
    *
    * @var string[]
    */
    protected static $getters = [
            'codeSegmentName' => 'getCodeSegmentName',
            'description' => 'getDescription',
            'code' => 'getCode'
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
        $this->container['codeSegmentName'] = isset($data['codeSegmentName']) ? $data['codeSegmentName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['codeSegmentName']) && (mb_strlen($this->container['codeSegmentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'codeSegmentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['codeSegmentName']) && (mb_strlen($this->container['codeSegmentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'codeSegmentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 10240)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
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
    * Gets codeSegmentName
    *  代码段名称
    *
    * @return string|null
    */
    public function getCodeSegmentName()
    {
        return $this->container['codeSegmentName'];
    }

    /**
    * Sets codeSegmentName
    *
    * @param string|null $codeSegmentName 代码段名称
    *
    * @return $this
    */
    public function setCodeSegmentName($codeSegmentName)
    {
        $this->container['codeSegmentName'] = $codeSegmentName;
        return $this;
    }

    /**
    * Gets description
    *  代码段描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 代码段描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets code
    *  代码片段
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 代码片段
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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

