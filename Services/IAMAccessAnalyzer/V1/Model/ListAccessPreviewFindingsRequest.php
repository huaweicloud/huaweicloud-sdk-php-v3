<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessPreviewFindingsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessPreviewFindingsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * analyzerId  分析器的唯一标识符。
    * accessPreviewId  访问预览的唯一标识符。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'analyzerId' => 'string',
            'accessPreviewId' => 'string',
            'body' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListPreviewFindingsReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * analyzerId  分析器的唯一标识符。
    * accessPreviewId  访问预览的唯一标识符。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'analyzerId' => null,
        'accessPreviewId' => null,
        'body' => null
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
    * analyzerId  分析器的唯一标识符。
    * accessPreviewId  访问预览的唯一标识符。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'analyzerId' => 'analyzer_id',
            'accessPreviewId' => 'access_preview_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * analyzerId  分析器的唯一标识符。
    * accessPreviewId  访问预览的唯一标识符。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'analyzerId' => 'setAnalyzerId',
            'accessPreviewId' => 'setAccessPreviewId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * analyzerId  分析器的唯一标识符。
    * accessPreviewId  访问预览的唯一标识符。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'analyzerId' => 'getAnalyzerId',
            'accessPreviewId' => 'getAccessPreviewId',
            'body' => 'getBody'
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
        $this->container['analyzerId'] = isset($data['analyzerId']) ? $data['analyzerId'] : null;
        $this->container['accessPreviewId'] = isset($data['accessPreviewId']) ? $data['accessPreviewId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['analyzerId'] === null) {
            $invalidProperties[] = "'analyzerId' can't be null";
        }
            if ((mb_strlen($this->container['analyzerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['analyzerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['analyzerId'])) {
                $invalidProperties[] = "invalid value for 'analyzerId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['accessPreviewId'] === null) {
            $invalidProperties[] = "'accessPreviewId' can't be null";
        }
            if ((mb_strlen($this->container['accessPreviewId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['accessPreviewId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['accessPreviewId'])) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets analyzerId
    *  分析器的唯一标识符。
    *
    * @return string
    */
    public function getAnalyzerId()
    {
        return $this->container['analyzerId'];
    }

    /**
    * Sets analyzerId
    *
    * @param string $analyzerId 分析器的唯一标识符。
    *
    * @return $this
    */
    public function setAnalyzerId($analyzerId)
    {
        $this->container['analyzerId'] = $analyzerId;
        return $this;
    }

    /**
    * Gets accessPreviewId
    *  访问预览的唯一标识符。
    *
    * @return string
    */
    public function getAccessPreviewId()
    {
        return $this->container['accessPreviewId'];
    }

    /**
    * Sets accessPreviewId
    *
    * @param string $accessPreviewId 访问预览的唯一标识符。
    *
    * @return $this
    */
    public function setAccessPreviewId($accessPreviewId)
    {
        $this->container['accessPreviewId'] = $accessPreviewId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListPreviewFindingsReqBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListPreviewFindingsReqBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

